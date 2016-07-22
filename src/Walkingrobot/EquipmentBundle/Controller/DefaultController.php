<?php

namespace Walkingrobot\EquipmentBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Walkingrobot\EquipmentBundle\Entity\Device;
use Walkingrobot\EquipmentBundle\Form\DeviceType;

/**
 * Device controller.
 *
 */
class DefaultController extends Controller
{
    /**
     * Lists all Device entities.
     *
     */
    public function indexAction()
    {
        return $this->render('EquipmentBundle:Default:index.html.twig');
    }
    
    public function allAction(Request $request)
    {
        if($request->isXmlHttpRequest()){
            $em = $this->getDoctrine()->getEntityManager();
            $query = $em->createQuery('SELECT d.id,d.name,d.in_maintenance_mode FROM Walkingrobot\EquipmentBundle\Entity\Device d');
            $result = $query->getArrayResult();

            return $this->json($result); 
        }else{
            return $this->redirectToRoute('device_index');
        }
    }
    
        /**
     * Finds and displays a Device entity.
     *
     */
    public function showAction(Device $device)
    {
        $deleteForm = $this->createDeleteForm($device);

        return $this->render('EquipmentBundle:Default:show.html.twig', array(
            'device' => $device,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Creates a new Device entity.
     *
     */
    public function newAction(Request $request)
    {
        $device = new Device();
        $form = $this->createForm('Walkingrobot\EquipmentBundle\Form\DeviceType', $device);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($device);
            $em->flush();

            return $this->redirectToRoute('device_show', array('id' => $device->getId()));
        }

        return $this->render('EquipmentBundle:Default:new.html.twig', array(
            'device' => $device,
            'form' => $form->createView(),
        ));
    }



    /**
     * Displays a form to edit an existing Device entity.
     *
     */
    public function editAction(Request $request, Device $device)
    {
        $deleteForm = $this->createDeleteForm($device);
        $editForm = $this->createForm('Walkingrobot\EquipmentBundle\Form\DeviceType', $device);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($device);
            $em->flush();

            return $this->redirectToRoute('device_edit', array('id' => $device->getId()));
        }

        return $this->render('EquipmentBundle:Default:edit.html.twig', array(
            'device' => $device,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a Device entity.
     *
     */
    public function deleteAction(Request $request, Device $device)
    {
        $form = $this->createDeleteForm($device);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($device);
            $em->flush();
        }

        return $this->redirectToRoute('device_index');
    }

    /**
     * Creates a form to delete a Device entity.
     *
     * @param Device $device The Device entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Device $device)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('device_delete', array('id' => $device->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
