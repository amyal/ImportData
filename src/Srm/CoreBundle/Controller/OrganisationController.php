<?php

namespace Srm\CoreBundle\Controller;

class OrganisationController extends Controller
{
    public function createAction()
    {
        $request = $this->getRequest();

        $organisation = new Organisation();

        $form = $this->createForm(new OrganisationType(), $organisation);

        if ($form->handleRequest($request)->isValid()) {
            $this->get('doctrine.orm.entity_manager')->persist($organisation);

            return $this->redirect($this->generateUrl('srm_core_organisation_info'));
        }

        return $this->render('SrmCoreBundle:Organisation:create.html.twig', array(
            'user' => $user,
            'form' => $form->createView()
        ));
    }

    public function infoAction(Organisation $organisation)
    {
        return new Response($organisation);
    }
}
