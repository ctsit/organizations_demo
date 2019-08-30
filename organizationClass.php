<?php
namespace UniversityOfFlorida\organizationClass;

use ExternalModules\AbstractExternalModule;
use REDCapEntity\EntityDB;

class organizationClass extends AbstractExternalModule {

    function redcap_module_system_enable($version) {
        EntityDB::buildSchema($this->PREFIX);
    }

    function redcap_entity_types() {
        $types = [];

        $types['org'] = [
            'label' => 'Organization',
            'label_plural' => 'Organizations',
            'icon' => 'home_pencil',
            'properties' => [
                'name' => [
                    'name' => 'Name',
                    'type' => 'text',
                    'required' => true,
                ],
                'org_id' => [
                    'name' => 'Organization ID',
                    'type' => 'text',
                    'required' => true,
                ],
                'parent_id' => [
                    'name' => 'Parent Organization ID',
                    'type' => 'text',
                    'required' => false,
                ],
                'level' => [
                    'name' => 'Organizational Level',
                    'type' => 'integer',
                    'required' => false,
                ],
            ],
            'special_keys' => [
                'label' => 'name', // "name" represents the entity label.
            ],
        ];

        return $types;
    }
}
