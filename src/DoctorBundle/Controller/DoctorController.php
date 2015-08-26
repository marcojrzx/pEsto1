<?php

namespace DoctorBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use DoctorBundle\Entity\Doctor;
use DoctorBundle\Form\DoctorType;
//comentario para GIT ejemplo de quitar poner
/**
 * Doctor controller.
 *
 */
class DoctorController extends Controller
{

    /**
     * Lists all Doctor entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('DoctorBundle:Doctor')->findAll();

        return $this->render('DoctorBundle:Doctor:index.html.twig', array(
            'entities' => $entities,
        ));
    }
    /**
     * Creates a new Doctor entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new Doctor();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('doctor_show', array('id' => $entity->getIddoctor())));
        }

        return $this->render('DoctorBundle:Doctor:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Creates a form to create a Doctor entity.
     *
     * @param Doctor $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(Doctor $entity)
    {
        $form = $this->createForm(new DoctorType(), $entity, array(
            'action' => $this->generateUrl('doctor_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new Doctor entity.
     *
     */
    public function newAction()
    {
        $entity = new Doctor();
        $form   = $this->createCreateForm($entity);

        return $this->render('DoctorBundle:Doctor:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Doctor entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('DoctorBundle:Doctor')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Doctor entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('DoctorBundle:Doctor:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Doctor entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('DoctorBundle:Doctor')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Doctor entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('DoctorBundle:Doctor:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a Doctor entity.
    *
    * @param Doctor $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(Doctor $entity)
    {
        $form = $this->createForm(new DoctorType(), $entity, array(
            'action' => $this->generateUrl('doctor_update', array('id' => $entity->getIddoctor())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing Doctor entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('DoctorBundle:Doctor')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Doctor entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('doctor_edit', array('id' => $id)));
        }

        return $this->render('DoctorBundle:Doctor:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a Doctor entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('DoctorBundle:Doctor')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Doctor entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('doctor'));
    }

    /**
     * Creates a form to delete a Doctor entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('doctor_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
