<?php

use Symfony\Component\Routing\RouteCollection;
use Symfony\Component\Routing\Route;

$collection = new RouteCollection();

$collection->add('atiendea', new Route('/', array(
    '_controller' => 'DoctorBundle:AtiendeA:index',
)));

$collection->add('atiendea_show', new Route('/{id}/show', array(
    '_controller' => 'DoctorBundle:AtiendeA:show',
)));

$collection->add('atiendea_new', new Route('/new', array(
    '_controller' => 'DoctorBundle:AtiendeA:new',
)));

$collection->add('atiendea_create', new Route(
    '/create',
    array('_controller' => 'DoctorBundle:AtiendeA:create'),
    array(),
    array(),
    '',
    array(),
    'POST'
));

$collection->add('atiendea_edit', new Route('/{id}/edit', array(
    '_controller' => 'DoctorBundle:AtiendeA:edit',
)));

$collection->add('atiendea_update', new Route(
    '/{id}/update',
    array('_controller' => 'DoctorBundle:AtiendeA:update'),
    array(),
    array(),
    '',
    array(),
    array('POST', 'PUT')
));

$collection->add('atiendea_delete', new Route(
    '/{id}/delete',
    array('_controller' => 'DoctorBundle:AtiendeA:delete'),
    array(),
    array(),
    '',
    array(),
    array('POST', 'DELETE')
));

return $collection;
