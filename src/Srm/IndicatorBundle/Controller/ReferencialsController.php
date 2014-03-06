<?php

namespace Srm\IndicatorBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpKernel\Exception\AccessDeniedHttpException;
use Srm\CoreBundle\Entity\Organisation;
use Srm\CoreBundle\Entity\Referencial;
use Srm\CoreBundle\Entity\Indicator;

use Symfony\Component\HttpFoundation\Response;

class ReferencialsController extends Controller
{
    public function listAction(Organisation $organisation)
    {
        if (!$this->get('security.context')->isGranted('ROLE_A') ||
           $organisation->getIdentificationCode() !==  $this->container->get('doctrine')->getManager()->getRepository('Srm\UserBundle\Entity\User')->OrganisationByUser($this->getUser()))
          {      
           throw new AccessDeniedHttpException('Accès interdit');
          }
        return $this->render('SrmIndicatorBundle:Referencial:list.html.twig', array(
            'organisation' => $organisation,
            'referencials' => $this->getDoctrine()->getRepository('Srm\CoreBundle\Entity\Referencial')->findNonDeletedByOrganisation($organisation),
        ));
    }

    public function showAction(Organisation $organisation, Referencial $referencial)
    {   if (!$this->get('security.context')->isGranted('ROLE_A') ||
           $organisation->getIdentificationCode() !==  $this->container->get('doctrine')->getManager()->getRepository('Srm\UserBundle\Entity\User')->OrganisationByUser($this->getUser()))
          {      
           throw new AccessDeniedHttpException('Accès interdit');
          }
        return $this->render('SrmIndicatorBundle:Referencial:show.html.twig', array(
            'organisationId' => $organisation->getOrganisationId(),
            'referencial'     => $referencial,
        ));
    }

    public function disableAction(Organisation $organisation, Referencial $referencial)
    {   if (!$this->get('security.context')->isGranted('ROLE_A') ||
           $organisation->getIdentificationCode() !==  $this->container->get('doctrine')->getManager()->getRepository('Srm\UserBundle\Entity\User')->OrganisationByUser($this->getUser()))
          {      
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
    {   if (!$this->get('security.context')->isGranted('ROLE_A') ||
           $organisation->getIdentificationCode() !==  $this->container->get('doctrine')->getManager()->getRepository('Srm\UserBundle\Entity\User')->OrganisationByUser($this->getUser()))
          {      
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
            'attr'   => array('class' => 'form-horizontal'/*, 'novalidate' => 'novalidate'*/),
        ));

        $request = $this->getRequest();
       // $org_clt = $request->query->get('org_clt');
       
        if ('GET' === $request->getMethod()) {
            return $this->render('SrmIndicatorBundle:Referencial:form.html.twig', array(
                'organisationId' => $organisation->getOrganisationId(),
                'referencialId' => $referencial->getReferencialId(),
                'form'           => $form->createView(),
            ));
        }

        if (false === $form->handleRequest($request)->isValid()) {
            return $this->render('SrmIndicatorBundle:Referencial:form.html.twig', array(
                'organisationId' => $organisation->getOrganisationId(),
                'form'           => $form->createView(),
            ));
        } else {
           // $referencial->setOrganisation($this->getDoctrine()->getRepository('Srm\CoreBundle\Entity\Organisation')->find($org_clt));
            
            // Un référentiel peut soit être interne (getToGroupStakeholder == Interne) 
            // soit peut être ouvert à un groupe de partie prenante pour saisie de données 
            // (getToGroupStakeholder != Interne) donc, setToGroupStakeholder = null
            if ( $referencial->getToGroupStakeholder() ){
                if ($referencial->getToGroupStakeholder()->getGroupStakeholderId() != null){
                    $referencial->setFromGroupStakeholder(null);
                }
            }

            if ( $referencial->getFromGroupStakeholder() ){
                if ($referencial->getFromGroupStakeholder()->getGroupStakeholderId() != null){
                    $referencial->setToGroupStakeholder(null);
                }
            }

            $indicator = new Indicator();
            //$indicator->setDeleted(false);
            $referencial->addIndicators($indicator);
            /*$indicator = new Indicator();
            $indicator->setDeleted(false);
            
            foreach ($referencial->getIndicators() as $indicators) {
                echo "<pre>"; 
                \Doctrine\Common\Util\Debug::dump($indicators->getReferencials()->getReferencialIndicators(), 2); 
                exit;
                $indicators->getReferencials()->getIndicator()->setDeleted($indicators->getDeleted());
            }*/
        }
        $referencial->setOrganisation($organisation);
        $em = $this->getDoctrine()->getManager();
        $em->persist($referencial);
        $em->flush();
        
        foreach ($referencial->getIndicators() as $indicator) {
             $v_indicator = $this->getDoctrine()->getRepository('Srm\CoreBundle\Entity\Indicator')->indicatorByReferencial($organisation,$referencial,$indicator);
              
             foreach ($v_indicator as $vindicator) {
                 
                 $vindicator->setLabel($indicator->getLabel());
                 $vindicator->setCode($indicator->getCode());
                 $vindicator->setDeleted(false);
                 $vindicator->setEnabled(true);
                 $vindicator->setIndicatorZone($indicator->getIndicatorZone());
                 $vindicator->setUnitMeasurement($indicator->getUnitMeasurement());
                 $vindicator->setIndicatorGraph($indicator->getIndicatorGraph());
                 $vindicator->setScreenPeriod($indicator->getScreenPeriod());
                 $vindicator->setPublicationFrequency($indicator->getPublicationFrequency());
                 $vindicator->setPublicationDelay($indicator->getPublicationDelay());
                 $vindicator->setCreatedBy($this->getUser()->getUserId());
                 $vindicator->setCreationDate(new \DateTime());
             }
             
        }
        $em = $this->getDoctrine()->getManager();
        $em->persist($vindicator);
        $em->flush(); 

        return $this->redirect($this->generateUrl('srm_indicator_referencial_list', array(
            'organisationId' => $organisation->getOrganisationId(),
        )));
    }

    /*public function category1ByReferencialTypeAction()
    {
        $referencialTypeIds = $this->getRequest()->query->get('referencialType_ids');

        if ($referencialTypeIds) {
            $categories1 = $this->getDoctrine()->getRepository('Srm\CoreBundle\Entity\Indicators')->findNonDeletedByReferencialTypeIds($referencialTypeIds);
        }
        else {
            //$indicators = $this->getDoctrine()->getRepository('Srm\CoreBundle\Entity\Indicators')->findAll();
            $categories1 = array();
        }

        $html = '';
        foreach($categories1 as $category1) {
            if (!is_null($category1->getCategory1Id()) && $category1->getCategory1Id() == '')
                $html .= '<option value=\"-1\">Aucune réponse</option>';
            $html = $html . sprintf("<option value=\"%d\">%s</option>", $category1->getCategory1Id(), $category1->getLabel());
        }

        return new Response($html);
    }*/

    public function category2ByCategory1Action()
    {
        $categoryIds = $this->getRequest()->query->get('category1_ids');

        if ($categoryIds) {
            $categories2 = $this->getDoctrine()->getRepository('Srm\CoreBundle\Entity\Category2')->findNonDeletedByCategory1($categoryIds);
        }
        else {
            //$indicators = $this->getDoctrine()->getRepository('Srm\CoreBundle\Entity\Indicators')->findAll();
            $categories2 = array();
        }

        $html = '';
        foreach($categories2 as $category2) {
            if ($category2->getCategory2Id() == '')
                $html .= '<option value=\"-1\">Aucune réponse</option>';
            $html = $html . sprintf("<option value=\"%d\">%s</option>", $category2->getCategory2Id(), $category2->getLabel());
        }

        return new Response($html);
    }

    public function category3ByCategory2Action()
    {
        $categoryIds = $this->getRequest()->query->get('category2_ids');

        if ($categoryIds) {
            $categories3 = $this->getDoctrine()->getRepository('Srm\CoreBundle\Entity\Category3')->findNonDeletedByCategory2($categoryIds);
        }
        else {
            //$indicators = $this->getDoctrine()->getRepository('Srm\CoreBundle\Entity\Indicators')->findAll();
            $categories3 = array();
        }

        $html = '';
        foreach($categories3 as $category3) {
            if ($category3->getCategory3Id() == '')
                $html .= '<option value=\"-1\">Aucune réponse</option>';
            $html = $html . sprintf("<option value=\"%d\">%s</option>", $category3->getCategory3Id(), $category3->getLabel());
        }

        return new Response($html);
    }
}