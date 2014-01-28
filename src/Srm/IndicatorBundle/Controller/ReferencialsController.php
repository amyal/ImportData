<?php

namespace Srm\IndicatorBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpKernel\Exception\AccessDeniedHttpException;
use Srm\CoreBundle\Entity\Organisation;
use Srm\CoreBundle\Entity\Referencial;

use Symfony\Component\HttpFoundation\Response;

class ReferencialsController extends Controller
{
    public function listAction(Organisation $organisation)
    {
        if (!$this->get('security.context')->isGranted('ROLE_A')||$organisation->getIdentificationCode() !==  $this->container->get('doctrine')->getManager()->getRepository('Srm\UserBundle\Entity\User')->OrganisationByUser($this->getUser()))
          {      // si l'utilisateur est user OU il veut accéder à une autre organisation par url, alors on déclenche une exception « Accès interdit »
           throw new AccessDeniedHttpException('Accès interdit');
          }
        return $this->render('SrmIndicatorBundle:Referencial:list.html.twig', array(
            'organisation' => $organisation,
            'referencials' => $this->getDoctrine()->getRepository('Srm\CoreBundle\Entity\Referencial')->findNonDeletedByOrganisation($organisation),
        ));
    }

    public function showAction(Organisation $organisation, Referencial $referencial)
    {
        if (!$this->get('security.context')->isGranted('ROLE_A')||$organisation->getIdentificationCode() !==  $this->container->get('doctrine')->getManager()->getRepository('Srm\UserBundle\Entity\User')->OrganisationByUser($this->getUser()))
          {      // si l'utilisateur est user OU il veut accéder à une autre organisation par url, alors on déclenche une exception « Accès interdit »
           throw new AccessDeniedHttpException('Accès interdit');
          }
        return $this->render('SrmIndicatorBundle:Referencial:show.html.twig', array(
            'organisationId' => $organisation->getOrganisationId(),
            'referencial'     => $referencial,
        ));
    }

    public function disableAction(Organisation $organisation, Referencial $referencial)
    {
        if (!$this->get('security.context')->isGranted('ROLE_A')||$organisation->getIdentificationCode() !==  $this->container->get('doctrine')->getManager()->getRepository('Srm\UserBundle\Entity\User')->OrganisationByUser($this->getUser()))
          {      // si l'utilisateur est user OU il veut accéder à une autre organisation par url, alors on déclenche une exception « Accès interdit »
           throw new AccessDeniedHttpException('Accès interdit');
          }
        $referencial->setDeleted(true);
        $em = $this->getDoctrine()->getManager();
        $em->persist($referencial);
        $em->flush();

        return $this->redirect($this->generateUrl('srm_indicator_referencial_list', array(
            'organisationId' => $organisation->getOrganisationId(),
        )));
    }

    public function formAction(Organisation $organisation, Referencial $referencial)
    {
        if (!$this->get('security.context')->isGranted('ROLE_A')||$organisation->getIdentificationCode() !==  $this->container->get('doctrine')->getManager()->getRepository('Srm\UserBundle\Entity\User')->OrganisationByUser($this->getUser()))
          {      // si l'utilisateur est user OU il veut accéder à une autre organisation par url, alors on déclenche une exception « Accès interdit »
           throw new AccessDeniedHttpException('Accès interdit');
          }
        $formActionRoute = 'srm_indicator_referencial_add';
        $formActionRouteParams = array('organisationId' => $organisation->getOrganisationId());

        if (null !== $referencialId = $referencial->getReferencialId()) {
            $formActionRoute = 'srm_indicator_referencial_edit';
            $formActionRouteParams['referencialId'] = $referencialId;
        }

        $form = $this->createForm('srm_referencial', $referencial, array(
            'action' => $this->generateUrl($formActionRoute, $formActionRouteParams),
            'method' => 'POST',
            'attr'   => array('class' => 'form-horizontal', 'novalidate' => 'novalidate'),
        ));

        $request = $this->getRequest();

        if ('GET' === $request->getMethod()) {
            return $this->render('SrmIndicatorBundle:Referencial:form.html.twig', array(
                'organisationId' => $organisation->getOrganisationId(),
                'form'           => $form->createView(),
            ));
        }

        if (false === $form->handleRequest($request)->isValid()) {
            return $this->render('SrmIndicatorBundle:Referencial:form.html.twig', array(
                'organisationId' => $organisation->getOrganisationId(),
                'form'           => $form->createView(),
            ));
        }

        $em = $this->getDoctrine()->getManager();
        $em->persist($referencial);
        $em->flush();

        return $this->redirect($this->generateUrl('srm_indicator_referencial_list', array(
            'organisationId' => $organisation->getOrganisationId(),
        )));
    }

    public function indicatorsByCategoriesAction()
    {
        if (!$this->get('security.context')->isGranted('ROLE_A')||$organisation->getIdentificationCode() !==  $this->container->get('doctrine')->getManager()->getRepository('Srm\UserBundle\Entity\User')->OrganisationByUser($this->getUser()))
          {      // si l'utilisateur est user OU il veut accéder à une autre organisation par url, alors on déclenche une exception « Accès interdit »
           throw new AccessDeniedHttpException('Accès interdit');
          }
        echo 'ok';exit;
        $categoryIds = $this->getRequest()->query->get('categories_id');

        if ($categoryIds) {
            $indicators = $this->getDoctrine()->getRepository('Srm\CoreBundle\Entity\Indicators')->findNonDeletedByCategories($categoryIds);
        }
        else {
            //$indicators = $this->getDoctrine()->getRepository('Srm\CoreBundle\Entity\Indicators')->findAll();
            $indicators = array();
        }
echo "<pre>"; 
\Doctrine\Common\Util\Debug::dump($indicators, 2); 
exit;
        $html = '';
        foreach($indicators as $indicator) {
            if ($indicator->getIndicatorId() == '')
                $html .= '<option value=\"-1\">Aucune réponse</option>';
            $html = $html . sprintf("<option value=\"%d\">%s</option>", $indicator->getIndicatorId(), $indicator->getLabel());
        }

        return new Response($html);
    }
}