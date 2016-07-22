<?php

use Symfony\Component\Routing\RouteCollection;
use Symfony\Component\Routing\Route;

$collection = new RouteCollection();

$collection->add('device_index', new Route(
    '/',
    array('_controller' => 'EquipmentBundle:Default:index'),
    array(),
    array(),
    '',
    array(),
    array('GET')
));

$collection->add('device_all', new Route(
    '/all',
    array('_controller' => 'EquipmentBundle:Default:all'),
    array(),
    array(),
    '',
    array(),
    array('GET')
));

$collection->add('device_show', new Route(
    '/{id}/show',
    array('_controller' => 'EquipmentBundle:Default:show'),
    array(),
    array(),
    '',
    array(),
    array('GET')
));

$collection->add('device_new', new Route(
    '/new',
    array('_controller' => 'EquipmentBundle:Default:new'),
    array(),
    array(),
    '',
    array(),
    array('GET', 'POST')
));

$collection->add('device_edit', new Route(
    '/{id}/edit',
    array('_controller' => 'EquipmentBundle:Default:edit'),
    array(),
    array(),
    '',
    array(),
    array('GET', 'POST')
));

$collection->add('device_delete', new Route(
    '/{id}/delete',
    array('_controller' => 'EquipmentBundle:Default:delete'),
    array(),
    array(),
    '',
    array(),
    array('DELETE')
));

return $collection;
