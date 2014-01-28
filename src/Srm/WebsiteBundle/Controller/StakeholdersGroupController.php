<?php

namespace Srm\WebsiteBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpKernel\Exception\AccessDeniedHttpException;
use Srm\CoreBundle\Entity\Organisation;
use Srm\CoreBundle\Entity\StakeholderGroup;

class StakeholdersGroupController extends Controller
{
    public function listAction(Organisation $organisation)
    {
        if (!$this->get('security.context')->isGranted('ROLE_SU')||$organisation->getIdentificationCode() !==  $this->container->get('doctrine')->getManager()->getRepository('Srm\UserBundle\Entity\User')->OrganisationByUser($this->getUser()))
          {      // si l'utilisateur est user OU il veut accéder à une autre organisation par url, alors on déclenche une exception « Accès interdit »
           throw new AccessDeniedHttpException('Accès interdit');
          }
         
        return $this->render('SrmWebsiteBundle:StakeholderGroup:list.html.twig', array(
            'organisation'      => $organisation,
            'stakeholdersGroup' => $this->getDoctrine()->getRepository('Srm\CoreBundle\Entity\GroupStakeholder')->findNonDeletedByOrganisation($organisation),
        ));
    }

    public function showAction(Organisation $organisation, StakeholderGroup $stakeholderGroup)
    {
        if (!$this->get('security.context')->isGranted('ROLE_SU')||$organisation->getIdentificationCode() !==  $this->container->get('doctrine')->getManager()->getRepository('Srm\UserBundle\Entity\User')->OrganisationByUser($this->getUser()))
          {      // si l'utilisateur est user OU il veut accéder à une autre organisation par url, alors on déclenche une exception « Accès interdit »
           throw new AccessDeniedHttpException('Accès interdit');
          }
         
        return $this->render('SrmWebsiteBundle:StakeholderGroup:show.html.twig', array(
            'organisationId' => $organisation->getOrganisationId(),
            'stakeholderGroup'           => $stakeholderGroup,
        ));
    }

    public function disableAction(Organisation $organisation, StakeholderGroup $stakeholderGroup)
    {
        if (!$this->get('security.context')->isGranted('ROLE_SU')||$organisation->getIdentificationCode() !==  $this->container->get('doctrine')->getManager()->getRepository('Srm\UserBundle\Entity\User')->OrganisationByUser($this->getUser()))
          {      // si l'utilisateur est user OU il veut accéder à une autre organisation par url, alors on déclenche une exception « Accès interdit »
           throw new AccessDeniedHttpException('Accès interdit');
          }
         
        $stakeholderGroup->setDeleted(true);
        $em = $this->getDoctrine()->getManager();
        $em->persist($stakeholderGroup);
        $em->flush();

        return $this->redirect($this->generateUrl('srm_website_stakeholdersGroup_list', array(
            'organisationId' => $organisation->getOrganisationId(),
        )));
    }

    public function formAction(Organisation $organisation, StakeholderGroup $stakeholderGroup)
    {
        if (!$this->get('security.context')->isGranted('ROLE_SU')||$organisation->getIdentificationCode() !==  $this->container->get('doctrine')->getManager()->getRepository('Srm\UserBundle\Entity\User')->OrganisationByUser($this->getUser()))
          {      // si l'utilisateur est user OU il veut accéder à une autre organisation par url, alors on déclenche une exception « Accès interdit »
           throw new AccessDeniedHttpException('Accès interdit');
          }
         
        $formActionRoute = 'srm_website_stakeholdersGroup_add';
        $formActionRouteParams = array('organisationId' => $organisation->getOrganisationId());

        if (null !== $stakeholderGroupId = $stakeholderGroup->getStakeholderGroupId()) {
            $formActionRoute = 'srm_website_stakeholderGroup_edit';
            $formActionRouteParams['stakeholderGroupId'] = $stakeholderGroupId;
        }

        $form = $this->createForm('srm_stakeholderGroup', $stakeholderGroup, array(
            'action' => $this->generateUrl($formActionRoute, $formActionRouteParams),
            'method' => 'POST',
            'attr'   => array('class' => 'form-horizontal', 'novalidate' => 'novalidate'),
        ));

        $request = $this->getRequest();

        if ('GET' === $request->getMethod()) {
            return $this->render('SrmWebsiteBundle:StakeholderGroup:form.html.twig', array(
                'organisationId' => $organisation->getOrganisationId(),
                'form'           => $form->createView(),
            ));
        }

        if (false === $form->handleRequest($request)->isValid()) {
            return $this->render('SrmWebsiteBundle:StakeholderGroup:form.html.twig', array(
                'organisationId' => $organisation->getOrganisationId(),
                'form'           => $form->createView(),
            ));
        }

        $em = $this->getDoctrine()->getManager();
        $em->persist($stakeholderGroup);
        $em->flush();

        return $this->redirect($this->generateUrl('srm_website_stakeholdersGroup_list', array(
            'organisationId' => $organisation->getOrganisationId(),
        )));
    }
}
