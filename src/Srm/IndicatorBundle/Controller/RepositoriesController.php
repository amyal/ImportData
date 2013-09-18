<?php

namespace Srm\WebsiteBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Srm\CoreBundle\Entity\Organisation;
use Srm\CoreBundle\Entity\Repository;

class RepositoriesController extends Controller
{
    public function listAction(Organisation $organisation)
    {
        $sites = $this->getDoctrine()->getRepository('Srm\CoreBundle\Entity\Site')->findByOrganisation($organisation);
        $repositories = $this->getDoctrine()->getRepository('Srm\CoreBundle\Entity\Repository')->findNonDeletedBySites($sites);

        return $this->render('SrmWebsiteBundle:Repository:list.html.twig', array(
            'organisation' => $organisation,
            'repositories' => $repositories,
        ));
    }

    public function showAction(Organisation $organisation, Repository $repository)
    {
        return $this->render('SrmWebsiteBundle:Repository:show.html.twig', array(
            'organisationId' => $organisation->getOrganisationId(),
            'repository'     => $repository,
        ));
    }

    public function disableAction(Organisation $organisation, Repository $repository)
    {
        $repository->setDeleted(true);
        $em = $this->getDoctrine()->getManager();
        $em->persist($repository);
        $em->flush();

        return $this->redirect($this->generateUrl('srm_website_repositories_list', array(
            'organisationId' => $organisation->getOrganisationId(),
        )));
    }

    public function formAction(Organisation $organisation, Repository $repository)
    {
        $formActionRoute = 'srm_website_repositories_add';
        $formActionRouteParams = array('organisationId' => $organisation->getOrganisationId());

        if (null !== $repositoryId = $repository->getRepositoryId()) {
            $formActionRoute = 'srm_website_repository_edit';
            $formActionRouteParams['repositoryId'] = $repositoryId;
        }

        $form = $this->createForm('srm_repository', $repository, array(
            'action' => $this->generateUrl($formActionRoute, $formActionRouteParams),
            'method' => 'POST',
            'attr'   => array('class' => 'form-horizontal', 'novalidate' => 'novalidate'),
        ));

        $request = $this->getRequest();

        if ('GET' === $request->getMethod()) {
            return $this->render('SrmWebsiteBundle:Repository:form.html.twig', array(
                'organisationId' => $organisation->getOrganisationId(),
                'form'           => $form->createView(),
            ));
        }

        if (false === $form->handleRequest($request)->isValid()) {
            return $this->render('SrmWebsiteBundle:Repository:form.html.twig', array(
                'organisationId' => $organisation->getOrganisationId(),
                'form'           => $form->createView(),
            ));
        }

        $em = $this->getDoctrine()->getManager();
        $em->persist($repository);
        $em->flush();

        return $this->redirect($this->generateUrl('srm_website_repositories_list', array(
            'organisationId' => $organisation->getOrganisationId(),
        )));
    }
}
