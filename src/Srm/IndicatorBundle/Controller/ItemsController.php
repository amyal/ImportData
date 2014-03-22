<?php

namespace Srm\IndicatorBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Srm\CoreBundle\Entity\Organisation;
use Srm\CoreBundle\Entity\Item;
use Srm\CoreBundle\Entity\ItemAnswers;
use Srm\CoreBundle\Entity\Answers;
use Srm\CoreBundle\Entity\AnswersStatus;
use Srm\CoreBundle\Entity\Referencial;

use Symfony\Component\HttpFoundation\Response;


class ItemsController extends Controller
{
    public function listAction(Organisation $organisation)
    {
        $items = $this->getDoctrine()->getRepository('Srm\CoreBundle\Entity\Item')->findNonDeletedByUser($organisation, $this->getUser());
        $answers = $this->getDoctrine()->getRepository('Srm\CoreBundle\Entity\Answers')->findNonDeletedByItem($items);
        $itemAnswers = $this->getDoctrine()->getRepository('Srm\CoreBundle\Entity\ItemAnswers')->findNonDeletedByAnswers($answers);

        return $this->render('SrmIndicatorBundle:Item:list.html.twig', array(
            'organisation'  => $organisation,
            'items'         => $items,
            'answers'       => $answers,
            'itemAnswers'   => $itemAnswers,
        ));
    }

    public function showAction(Organisation $organisation, Item $item)
    {
        return $this->render('SrmIndicatorBundle:Item:show.html.twig', array(
            'organisationId'    => $organisation->getOrganisationId(),
            'indicatorId'       => $item->getIndicatorId(),
            'item'              => $item,
        ));
    }

    public function disableAction(Referencial $referencial, Item $item)
    {
        $item->setDeleted(true);
        $em = $this->getDoctrine()->getManager();
        $em->persist($item);
        $em->flush();

        return $this->redirect($this->generateUrl('srm_indicator_items_list', array(
            'referencialId' => $referencial->getReferencialId(),
        )));
    }

    public function formAction(Organisation $organisation, Item $item, Answers $answers)
    {

        $formActionRoute = 'srm_indicator_items_add';
        $formActionRouteParams = array('organisationId' => $organisation->getOrganisationId(), 'itemId' => $item->getItemId());

        if (null !== $itemId = $item->getItemId()) {

            $formActionRoute = 'srm_indicator_items_edit';
            $formActionRouteParams['itemId'] = $itemId;
            $formActionRouteParams['unitMeasurementId'] = $answers->getUnitMeasurement()->getUnitMeasurementId();
        }

        $form = $this->createForm('srm_indicator_item', $item, array(
            'action' => $this->generateUrl($formActionRoute, $formActionRouteParams),
            'method' => 'POST',
            'attr'   => array('class' => 'form-horizontal', 'novalidate' => 'novalidate', 'id' => 'itemform'),
        ));

        $request = $this->getRequest();

        if ('GET' === $request->getMethod()) {
            return $this->render('SrmIndicatorBundle:Item:form.html.twig', array(
                'organisationId' => $organisation->getOrganisationId(),
                'form'           => $form->createView(),
            ));
        }

        if (true === $form->handleRequest($request)->isValid()) {
            return $this->render('SrmIndicatorBundle:Item:form.html.twig', array(
                'organisationId' => $organisation->getOrganisationId(),
                'form'           => $form->createView(),
            ));
        } else {

            if ($_POST['name'] == 'items' and $_POST['value'] != NULL) {

                // getting the value of an existing answer
                $itemAnswersTab = $this->getDoctrine()->getRepository('Srm\CoreBundle\Entity\ItemAnswers')->findNonDeletedByAnswers($answers);

                // if the value exist 
                if (is_array($itemAnswersTab) && count($itemAnswersTab) > 0) {

                    $itemAnswers = $this->getDoctrine()->getRepository('Srm\CoreBundle\Entity\ItemAnswers')->find($itemAnswersTab[0]->getItemAnswersId());

                } else {

                    $itemAnswers = new ItemAnswers();

                    // creation date
                    $itemAnswers->setItemDate(new \DateTime());
                }

                // the contact setting the value
                $itemAnswers->setContact($this->getUser()->getContact());

                if ($this->getUser()->getRole()->getRoleId() == 4) {
                    $answersStatus = new AnswersStatus(1);
                    echo "<pre>"; 
                    \Doctrine\Common\Util\Debug::dump($answersStatus, 2); 
                    exit;

                    $itemAnswers->setAnswersStatus($answersStatus->getAnswersStatusId());
                } else {
                    $answersStatus = new AnswersStatus(2);
                    $itemAnswers->setAnswersStatus($answersStatus->getAnswersStatusId());
                }

                // Id of the answer Type (vr_answers)
                $itemAnswers->setAnswers($answers);
                
                // posted value of the answer
                $itemAnswers->setAnswer($_POST['value']);

                // date de fin de vaildation de la valeur pour le mois
                $endOfMonth = date('Y-m-t', strtotime("this month"));
                //$itemAnswers->setValidUntil(date_format($endOfMonth, 'Y-m-t'));

                // Id of the question
                $itemAnswers->setItemQuestions($request->get('item')->getItemQuestions());

                $em = $this->getDoctrine()->getManager();
                $em->persist($itemAnswers);
                $em->flush();

            }
        }

        return $this->redirect($this->generateUrl('srm_indicator_items_list', array(
            'organisationId' => $organisation->getOrganisationId(),
        )));
    }

}