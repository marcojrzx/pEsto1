<?php

namespace DoctorBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use DoctorBundle\Entity\AtiendeA;
use DoctorBundle\Form\AtiendeAType;

/**
 * AtiendeA controller.
 *
 */
class AtiendeAController extends Controller
{

    /**
     * Lists all AtiendeA entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('DoctorBundle:AtiendeA')->findAll();

        return $this->render('DoctorBundle:AtiendeA:index.html.twig', array(
            'entities' => $entities,
        ));
    }
    /**
     * Creates a new AtiendeA entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new AtiendeA();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('atiendea_show', array('id' => $entity->getId())));
        }

        return $this->render('DoctorBundle:AtiendeA:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Creates a form to create a AtiendeA entity.
     *
     * @param AtiendeA $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(AtiendeA $entity)
    {
        $form = $this->createForm(new AtiendeAType(), $entity, array(
            'action' => $this->generateUrl('atiendea_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new AtiendeA entity.
     *
     */
    public function newAction()
    {
        $entity = new AtiendeA();
        $form   = $this->createCreateForm($entity);

        return $this->render('DoctorBundle:AtiendeA:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a AtiendeA entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('DoctorBundle:AtiendeA')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find AtiendeA entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('DoctorBundle:AtiendeA:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing AtiendeA entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('DoctorBundle:AtiendeA')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find AtiendeA entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('DoctorBundle:AtiendeA:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a AtiendeA entity.
    *
    * @param AtiendeA $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(AtiendeA $entity)
    {
        $form = $this->createForm(new AtiendeAType(), $entity, array(
            'action' => $this->generateUrl('atiendea_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing AtiendeA entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('DoctorBundle:AtiendeA')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find AtiendeA entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('atiendea_edit', array('id' => $id)));
        }

        return $this->render('DoctorBundle:AtiendeA:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a AtiendeA entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('DoctorBundle:AtiendeA')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find AtiendeA entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('atiendea'));
    }

    /**
     * Creates a form to delete a AtiendeA entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('atiendea_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
