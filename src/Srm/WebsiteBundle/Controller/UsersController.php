<?php

namespace Srm\WebsiteBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Srm\CoreBundle\Entity\Contact;
use Srm\CoreBundle\Entity\Organisation;
use Srm\UserBundle\Entity\User;

class UsersController extends Controller
{
  /*   public function indexAction(Organisation $organisation)
    {  // $contact    = $this->getDoctrine()->getRepository('Srm\UserBundle\Entity\Contact')->findOneById($user->getId());
       // $identificationCode = $this->getDoctrine()->getRepository('Srm\UserBundle\Entity\Organisation\IdentificationCode')->findOneByIdentificationCode($contact->getOrganisation());
        //$user    = $this->getDoctrine()->getRepository('Srm\UserBundle\Entity\User')->find();
        $contact = $contact->getDoctrine()->getRepository('Srm\CoreBundle\Entity\Contact')->findOneBy($this);
        $organisation = $organisation->getDoctrine()->getRepository('Srm\CoreBundle\Entity\Organisation')->findOneBy($contact);
         return $this->render('SrmWebsiteBundle:User:index.html.twig', array(
            'organisation' => $organisation,
            'identificationCode'        => $organisation->getIdentificationCode(),
        ));
      //  return $this->redirect($this->generateUrl('srm_website_users_index', array('identificationCode' =>1)));
           }
           */
    public function listAction(Organisation $organisation)
    {
        $contacts = $this->getDoctrine()->getRepository('Srm\CoreBundle\Entity\Contact')->findNonDeletedUsersByOrganisation($organisation);
        $users    = $this->getDoctrine()->getRepository('Srm\UserBundle\Entity\User')->findByContacts($contacts);

        return $this->render('SrmWebsiteBundle:User:list.html.twig', array(
            'organisation' => $organisation,
            'users'        => $users,
        ));
    }

    public function formAction(Organisation $organisation, User $user)
    {
        $formActionRoute = 'srm_website_users_add';
        $formActionRouteParams = array('organisationId' => $organisation->getOrganisationId());

        if (null !== $userId = $user->getUserId()) {
            $formActionRoute = 'srm_website_user_edit';
            $formActionRouteParams['userId'] = $userId;
        }

        $form = $this->createForm('srm_user', $user, array(
            'action' => $this->generateUrl($formActionRoute, $formActionRouteParams),
            'method' => 'POST',
            'attr'   => array('class' => 'form-horizontal', 'novalidate' => 'novalidate'),
        ));

        $request = $this->getRequest();

        if ('GET' === $request->getMethod()) {
            return $this->render('SrmWebsiteBundle:User:form.html.twig', array(
                'organisationId' => $organisation->getOrganisationId(),
                'form'           => $form->createView(),
            ));
        }

        if (false === $form->handleRequest($request)->isValid()) {
            return $this->render('SrmWebsiteBundle:User:form.html.twig', array(
                'organisationId' => $organisation->getOrganisationId(),
                'form'           => $form->createView(),
            ));
        }

        $em = $this->getDoctrine()->getManager();
        $em->persist($user);
        $em->flush();

        if (true === $user->getIsUser()) {
            if (null === $this->getDoctrine()->getRepository('Srm\UserBundle\Entity\User')->findOneById($user->getUserId())) {
                $user = new User($user);
                $user->setRole($this->getDoctrine()->getRepository('Srm\CoreBundle\Entity\Role')->findOneByRoleType('ROLE_U'));

                $encoder = $this->get('security.encoder_factory')->getEncoder($user);
                $password = $encoder->encodePassword('toto', $user->getSalt());
                $user->setPassword($password);

                $this->get('fos_user.user_manager')->updateUser($user);
            }
        }

        return $this->redirect($this->generateUrl('srm_website_users_list', array(
            'organisationId' => $organisation->getOrganisationId(),
        )));
    }
}
