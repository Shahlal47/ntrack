<?php
namespace App\Controller;

use Cake\Controller\Controller;
use Cake\Datasource\ConnectionManager;

class AppController extends Controller
{
    public function initialize()
    {
        parent::initialize();
        $this->loadComponent('Flash');
    }
}
