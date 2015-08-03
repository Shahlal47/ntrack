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

//    public function _getConnection(){
//        require_once(dirname(__FILE__) . '/../../Config/app.php');
//        $connection = ConnectionManager::get('db2'); // 'db2' where my second database is configured
////        $results = $connection->execute();
//        return $connection;
//    }


//    public function _getConnection_bk($dbname){
//        require_once(dirname(__FILE__) . '/../../Config/database.php');
//        $DB = new DATABASE_CONFIG();
//        if($DB->default['datasource'] === 'Database/Mysql') {
//            $dbc = new mysqli($DB->default['host'], $DB->default['login'], $DB->default['password'], $DB->default[$dbname]);
//
//            // Make sure we use UTF8 encoding
//            if($DB->default['encoding'] == "UTF8") {
//                $dbc->set_charset($DB->default['encoding']);
//            }
//            return $dbc;
//        }
//        printf("Errormessage: %s\n", $mysqli->error);
//        return null;
//    }
//
//    public function _closeConnection($dbc){
//        $dbc->close();
//    }
//
//    public function _execute($dbc, $query){
//        $results = $dbc->query($query);
//        return $results;
//    }
}
