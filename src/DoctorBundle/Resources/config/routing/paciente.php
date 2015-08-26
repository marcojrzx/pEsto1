<?php

use Symfony\Component\Routing\RouteCollection;
use Symfony\Component\Routing\Route;

$collection = new RouteCollection();

$collection->add('paciente', new Route('/', array(
    '_controller' => 'DoctorBundle:Paciente:index',
)));

$collection->add('paciente_show', new Route('/{id}/show', array(
    '_controller' => 'DoctorBundle:Paciente:show',
)));

$collection->add('paciente_new', new Route('/new', array(
    '_controller' => 'DoctorBundle:Paciente:new',
)));

$collection->add('paciente_create', new Route(
    '/create',
    array('_controller' => 'DoctorBundle:Paciente:create'),
    array(),
    array(),
    '',
    array(),
    'POST'
));

$collection->add('paciente_edit', new Route('/{id}/edit', array(
    '_controller' => 'DoctorBundle:Paciente:edit',
)));

$collection->add('paciente_update', new Route(
    '/{id}/update',
    array('_controller' => 'DoctorBundle:Paciente:update'),
    array(),
    array(),
    '',
    array(),
    array('POST', 'PUT')
));

$collection->add('paciente_delete', new Route(
    '/{id}/delete',
    array('_controller' => 'DoctorBundle:Paciente:delete'),
    array(),
    array(),
    '',
    array(),
    array('POST', 'DELETE')
));

return $collection;
