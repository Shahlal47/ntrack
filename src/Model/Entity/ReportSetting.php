<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * ReportSetting Entity.
 */
class ReportSetting extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * @var array
     */
    protected $_accessible = [
        'name' => true,
        'human_name' => true,
        'description' => true,
    ];
}
