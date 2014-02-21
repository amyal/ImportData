<?php

namespace Srm\WebsiteBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpKernel\Exception\AccessDeniedHttpException;
use Srm\CoreBundle\Entity\Organisation;
use Srm\CoreBundle\Entity\GroupStakeholder;

use Symfony\Component\HttpFoundation\Response;

class GroupStakeholdersController extends Controller
{
    public function listAction(Organisation $organisation)
    {
        if (!$this->get('security.context')->isGranted('ROLE_SU')||$organisation->getIdentificationCode() !==  $this->container->get('doctrine')->getManager()->getRepository('Srm\UserBundle\Entity\User')->OrganisationByUser($this->getUser()))
          {      // si l'utilisateur est user OU il veut accéder à une autre organisation par url, alors on déclenche une exception « Accès interdit »
           throw new AccessDeniedHttpException('Accès interdit');
          }
          
        return $this->render('SrmWebsiteBundle:GroupStakeholder:list.html.twig', array(
            'organisation'      => $organisation,
            'groupStakeholders' => $this->getDoctrine()->getRepository('Srm\CoreBundle\Entity\GroupStakeholder')->findNonDeletedByOrganisation($organisation),
        ));
    }

    public function showAction(Organisation $organisation, GroupStakeholder $groupStakeholder)
    {
        if (!$this->get('security.context')->isGranted('ROLE_SU')||$organisation->getIdentificationCode() !==  $this->container->get('doctrine')->getManager()->getRepository('Srm\UserBundle\Entity\User')->OrganisationByUser($this->getUser()))
          {      // si l'utilisateur est user OU il veut accéder à une autre organisation par url, alors on déclenche une exception « Accès interdit »
           throw new AccessDeniedHttpException('Accès interdit');
          }
          
        return $this->render('SrmWebsiteBundle:GroupStakeholder:show.html.twig', array(
            'organisationId' => $organisation->getOrganisationId(),
            'groupStakeholder'           => $groupStakeholder,
        ));
    }

    public function disableAction(Organisation $organisation, GroupStakeholder $groupStakeholder)
    {
        if (!$this->get('security.context')->isGranted('ROLE_SU') || 
            $organisation->getIdentificationCode() !==  $this->getDoctrine()->getRepository('Srm\UserBundle\Entity\User')->OrganisationByUser($this->getUser()))
        {      // si l'utilisateur est user OU il veut accéder à une autre organisation par url, alors on déclenche une exception « Accès interdit »
            throw new AccessDeniedHttpException('Accès interdit');
        }
          
        $groupStakeholder->setDeleted(true);
        $em = $this->getDoctrine()->getManager();
        $em->persist($groupStakeholder);
        $em->flush();

        return $this->redirect($this->generateUrl('srm_website_groupStakeholders_list', array(
            'organisationId' => $organisation->getOrganisationId(),
        )));
    }

    public function formAction(Organisation $organisation, GroupStakeholder $groupStakeholder)
    {
        if (!$this->get('security.context')->isGranted('ROLE_SU')||$organisation->getIdentificationCode() !==  $this->container->get('doctrine')->getManager()->getRepository('Srm\UserBundle\Entity\User')->OrganisationByUser($this->getUser()))
          {      // si l'utilisateur est user OU il veut accéder à une autre organisation par url, alors on déclenche une exception « Accès interdit »
           throw new AccessDeniedHttpException('Accès interdit');
          }
          
        $formActionRoute = 'srm_website_groupStakeholders_add';
        $formActionRouteParams = array('organisationId' => $organisation->getOrganisationId());

        if (null !== $groupStakeholderId = $groupStakeholder->getGroupStakeholderId()) {
            $formActionRoute = 'srm_website_groupStakeholders_edit';
            $formActionRouteParams['groupStakeholderId'] = $groupStakeholderId;
        }

        $form = $this->createForm('srm_groupStakeholder', $groupStakeholder, array(
            'action' => $this->generateUrl($formActionRoute, $formActionRouteParams),
            'method' => 'POST',
            'attr'   => array('class' => 'form-horizontal', 'novalidate' => 'novalidate'),
        ));

        $request = $this->getRequest();

        if ('GET' === $request->getMethod()) {
            return $this->render('SrmWebsiteBundle:GroupStakeholder:form.html.twig', array(
                'organisationId' => $organisation->getOrganisationId(),
                'form'           => $form->createView(),
            ));
        }

        if (false === $form->handleRequest($request)->isValid()) {
            return $this->render('SrmWebsiteBundle:GroupStakeholder:form.html.twig', array(
                'organisationId' => $organisation->getOrganisationId(),
                'form'           => $form->createView(),
            ));
        }

        $em = $this->getDoctrine()->getManager();
        $em->persist($groupStakeholder);
        $em->flush();

        return $this->redirect($this->generateUrl('srm_website_groupStakeholders_list', array(
            'organisationId' => $organisation->getOrganisationId(),
        )));
    }

    public function archetypesByTypesAction()
    {
        /*if (!$this->get('security.context')->isGranted('ROLE_SU') || 
            $organisation->getIdentificationCode() !==  $this->container->get('doctrine')->getManager()->getRepository('Srm\UserBundle\Entity\User')->OrganisationByUser($this->getUser()))
          {      // si l'utilisateur est user OU il veut accéder à une autre organisation par url, alors on déclenche une exception « Accès interdit »
           throw new AccessDeniedHttpException('Accès interdit');
          }*/
        
        $typeId = $this->getRequest()->query->get('type_id');

        if ($typeId) {
            $archetypes = $this->getDoctrine()->getRepository('Srm\CoreBundle\Entity\StakeholderArchetype')->findNonDeletedByType($typeId);
        }
        else {
            $archetypes = $this->getDoctrine()->getRepository('Srm\CoreBundle\Entity\StakeholderArchetype')->findAll();
        }

        $html = '';
        foreach($archetypes as $archetype) {
            if ($archetype->getStakeholderArchetypeId() == '')
                $html .= '<option value=\"-1\">Aucune réponse</option>';
            $html = $html . sprintf("<option value=\"%d\">%s</option>", $archetype->getStakeholderArchetypeId(), $archetype->getLabel());
        }

        return new Response($html);
    }

    public function stakeholdersByArchetypesAction(Organisation $organisation)
    {
        $archetypeIds = $this->getRequest()->query->get('archetype_id');

        if ($archetypeIds) {
            $stakeholders = $this->getDoctrine()->getRepository('Srm\CoreBundle\Entity\Stakeholder')->findNonDeletedByArchetype($organisation, $archetypeIds);
        }
        else {
            $stakeholders = $this->getDoctrine()->getRepository('Srm\CoreBundle\Entity\Stakeholder')->findAll();
        }

        $html = '';
        foreach($stakeholders as $stakeholder) {
            if ($stakeholder->getStakeholderId() == '')
                $html .= '<option value=\"-1\">Aucune réponse</option>';
            $html = $html . sprintf("<option value=\"%d\">%s</option>", $stakeholder->getStakeholderId(), $stakeholder->getLabel());
        }

        return new Response($html);
    }
}
