<?php

namespace Srm\WebsiteBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpKernel\Exception\AccessDeniedHttpException;
use Srm\CoreBundle\Entity\Contact;
use Srm\CoreBundle\Entity\Organisation;
use Srm\UserBundle\Entity\User;

class UsersController extends Controller
{
    public function listAction(Organisation $organisation)
    {
        if (!$this->get('security.context')->isGranted('ROLE_SU')||$organisation->getIdentificationCode() !==  $this->container->get('doctrine')->getManager()->getRepository('Srm\UserBundle\Entity\User')->OrganisationByUser($this->getUser()))
          {      // si l'utilisateur est user OU il veut accéder à une autre organisation par url, alors on déclenche une exception « Accès interdit »
           throw new AccessDeniedHttpException('Accès interdit');
          }
         
        $contacts = $this->getDoctrine()->getRepository('Srm\CoreBundle\Entity\Contact')->findNonDeletedUsersByOrganisation($organisation);
        $users    = $this->getDoctrine()->getRepository('Srm\UserBundle\Entity\User')->findByContacts($contacts);

        return $this->render('SrmWebsiteBundle:User:list.html.twig', array(
            'organisation' => $organisation,
            'users'        => $users,
        ));
    }

    public function formAction(Organisation $organisation, User $user)
    {
        if (!$this->get('security.context')->isGranted('ROLE_SU')||$organisation->getIdentificationCode() !==  $this->container->get('doctrine')->getManager()->getRepository('Srm\UserBundle\Entity\User')->OrganisationByUser($this->getUser()))
          {      // si l'utilisateur est user OU il veut accéder à une autre organisation par url, alors on déclenche une exception « Accès interdit »
           throw new AccessDeniedHttpException('Accès interdit');
          }
         
        $formActionRoute = 'srm_website_users_add';
        $formActionRouteParams = array('organisationId' => $organisation->getOrganisationId());

        if (null !== $userId = $user->getUserId()) {
            $formActionRoute = 'srm_website_user_edit';
            $formActionRouteParams['userId'] = $userId;
        }

        $form = $this->createForm('srm_user', $user, array(
            'action' => $this->generateUrl($formActionRoute, $formActionRouteParams),
            'method' => 'POST',
            'attr'   => array('class' => 'form-horizontal'/*, 'novalidate' => 'novalidate'*/),
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
