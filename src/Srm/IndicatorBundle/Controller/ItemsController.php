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

        return $this->render('SrmIndicatorBundle:Item:list.html.twig', array(
            'organisation'  => $organisation,
            'items'         => $items,
            'answers'        => $answers,
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
            'attr'   => array('class' => 'form-horizontal', 'novalidate' => 'novalidate'),
        ));

        $request = $this->getRequest();

        if ('GET' === $request->getMethod()) {
            return $this->render('SrmIndicatorBundle:Item:form.html.twig', array(
                'organisationId' => $organisation->getOrganisationId(),
                'form'           => $form->createView(),
            ));
        }

        if (false === $form->handleRequest($request)->isValid()) {
            return $this->render('SrmIndicatorBundle:Item:form.html.twig', array(
                'organisationId' => $organisation->getOrganisationId(),
                'form'           => $form->createView(),
            ));
        } else {
            $itemAnswers = new ItemAnswers();
            //$itemAnswers->setAnswer($request->get('srm_indicator_item')['answers']);

            // Utilisateur ayant saisit la donnée
            $itemAnswers->setContact($this->getUser()->getContact());

            // Date de la saisie de la valeur
            $itemAnswers->setItemDate(new \DateTime());

            /*if ($this->getUser()->getRole()->getRoleId() == 4) {
                $answersStatus = new AnswersStatus();
                $itemAnswers->setAnswersStatus($answersStatus->getAnswersStatusId());
            } else {
                $answersStatus = new AnswersStatus(1);
                $itemAnswers->setAnswersStatus($answersStatus->getAnswersStatusId());
            }*/

            // Id réponse de la valeur saisie
            $itemAnswers->setAnswers($answers);

            // date de fin de vaildation de la valeur pour le mois
            $endOfMonth = date('Y-m-t', strtotime("this month"));
            //$itemAnswers->setValidUntil(date_format($endOfMonth, 'Y-m-t'));

            // Id questin de la réponse
            $itemAnswers->setItemQuestions($request->get('item')->getItemQuestions());
        }

        $em = $this->getDoctrine()->getManager();
        $em->persist($itemAnswers);
        $em->flush();

        return $this->redirect($this->generateUrl('srm_indicator_items_list', array(
            'organisationId' => $organisation->getOrganisationId(),
        )));
    }

}