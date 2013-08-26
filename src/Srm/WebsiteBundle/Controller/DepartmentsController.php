<?php

namespace Srm\WebsiteBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Srm\CoreBundle\Entity\Department;
use Srm\CoreBundle\Entity\Organisation;
use Srm\CoreBundle\Entity\Site;

class DepartmentsController extends Controller
{
    public function listAction(Organisation $organisation)
    {
        return $this->render('SrmWebsiteBundle:Department:list.html.twig', array(
            'organisation' => $organisation,
            'departments'  => $this->getDoctrine()->getRepository('Srm\CoreBundle\Entity\Department')->findBySites(array($site))
        ));
    }

    public function showAction(Organisation $organisation, Department $department)
    {
        return $this->render('SrmWebsiteBundle:Department:show.html.twig', array(
            'organisationId' => $organisation->getOrganisationId(),
            'department'     => $department,
        ));
    }

    public function formAction(Organisation $organisation, Department $department)
    {
        $formActionRoute = 'srm_website_departments_add';
        $formActionRouteParams = array('organisationId' => $organisation->getOrganisationId());

        if (null !== $departmentId = $department->getDepartmentId()) {
            $formActionRoute = 'srm_website_department_edit';
            $formActionRouteParams['departmentId'] = $departmentId;
        }

        $form = $this->createForm('srm_department', $department, array(
            'action' => $this->generateUrl($formActionRoute, $formActionRouteParams),
            'method' => 'POST',
            'attr'   => array('class' => 'form-horizontal', 'novalidate' => 'novalidate'),
        ));

        $request = $this->getRequest();

        if ('GET' === $request->getMethod()) {
            return $this->render('SrmWebsiteBundle:Department:form.html.twig', array(
                'organisationId' => $organisation->getOrganisationId(),
                'form'           => $form->createView(),
            ));
        }

        if (false === $form->handleRequest($request)->isValid()) {
            return $this->render('SrmWebsiteBundle:Department:form.html.twig', array(
                'organisationId' => $organisation->getOrganisationId(),
                'form'           => $form->createView(),
            ));
        }

        $em = $this->getDoctrine()->getManager();
        $em->persist($department);
        $em->flush();

        return $this->redirect($this->generateUrl('srm_website_departments_list', array(
            'organisationId' => $organisation->getOrganisationId(),
        )));
    }
}
