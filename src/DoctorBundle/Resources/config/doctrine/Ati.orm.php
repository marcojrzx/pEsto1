<?php

use Doctrine\ORM\Mapping\ClassMetadataInfo;

$metadata->setInheritanceType(ClassMetadataInfo::INHERITANCE_TYPE_NONE);
$metadata->customRepositoryClassName = 'DoctorBundle\Entity\AtiRepository';
$metadata->setChangeTrackingPolicy(ClassMetadataInfo::CHANGETRACKING_DEFERRED_IMPLICIT);
$metadata->mapField(array(
   'fieldName' => 'id',
   'type' => 'integer',
   'id' => true,
   'columnName' => 'id',
  ));
$metadata->mapField(array(
   'columnName' => 'nombre',
   'fieldName' => 'nombre',
   'type' => 'string',
   'length' => '100',
  ));
$metadata->mapField(array(
   'columnName' => 'telefono',
   'fieldName' => 'telefono',
   'type' => 'string',
   'length' => '20',
  ));
$metadata->mapField(array(
   'columnName' => 'edad',
   'fieldName' => 'edad',
   'type' => 'string',
   'length' => '3',
  ));
$metadata->setIdGeneratorType(ClassMetadataInfo::GENERATOR_TYPE_AUTO);