<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

class Test extends Entity
{
    protected $_accessible = [
        'name' => true,
        'mobile' => true,
        'email' => true,
        'address' => true,
    ];
}
