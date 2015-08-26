<?php

use Symfony\Component\Routing\RouteCollection;
use Symfony\Component\Routing\Route;

$collection = new RouteCollection();

$collection->add('doctor', new Route('/', array(
    '_controller' => 'DoctorBundle:Doctor:index',
)));

$collection->add('doctor_show', new Route('/{id}/show', array(
    '_controller' => 'DoctorBundle:Doctor:show',
)));

$collection->add('doctor_new', new Route('/new', array(
    '_controller' => 'DoctorBundle:Doctor:new',
)));

$collection->add('doctor_create', new Route(
    '/create',
    array('_controller' => 'DoctorBundle:Doctor:create'),
    array(),
    array(),
    '',
    array(),
    'POST'
));

$collection->add('doctor_edit', new Route('/{id}/edit', array(
    '_controller' => 'DoctorBundle:Doctor:edit',
)));

$collection->add('doctor_update', new Route(
    '/{id}/update',
    array('_controller' => 'DoctorBundle:Doctor:update'),
    array(),
    array(),
    '',
    array(),
    array('POST', 'PUT')
));

$collection->add('doctor_delete', new Route(
    '/{id}/delete',
    array('_controller' => 'DoctorBundle:Doctor:delete'),
    array(),
    array(),
    '',
    array(),
    array('POST', 'DELETE')
));

return $collection;
