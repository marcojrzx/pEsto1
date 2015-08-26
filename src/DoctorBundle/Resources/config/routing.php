<?php

use Symfony\Component\Routing\RouteCollection;
use Symfony\Component\Routing\Route;

$collection = new RouteCollection();

$collection->add('doctor_homepage', new Route('/hello/{name}', array(
    '_controller' => 'DoctorBundle:Default:index',
)));

return $collection;
