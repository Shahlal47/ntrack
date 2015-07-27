<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Test Entity.
 */
class Test extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * @var array
     */
    protected $_accessible = [
        'name' => true,
        'created_by' => true,
        'modified_by' => true,
    ];
}
