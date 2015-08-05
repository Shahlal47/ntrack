<?php
namespace App\Model\Table;

use App\Model\Entity\Test;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

class TestsTable extends Table
{
    public function initialize(array $config)
    {
        $this->table('tests');
        $this->displayField('name');
        $this->primaryKey('id');
        $this->addBehavior('Timestamp');
    }

//    public function validationDefault(Validator $validator)
//    {
//        $validator
//            ->add('id', 'valid', ['rule' => 'numeric'])
//            ->allowEmpty('id', 'create');
//
//        $validator
//            ->add('name', 'valid')
//            ->requirePresence('name', 'create')
//            ->notEmpty('name');
//
//        $validator
//            ->add('mobile', 'valid')
//            ->requirePresence('mobile', 'create')
//            ->notEmpty('mobile');
//
//        $validator
//            ->add('email', 'valid')
//            ->requirePresence('email', 'create')
//            ->notEmpty('email');
//
//        $validator
//            ->add('address', 'valid')
//            ->requirePresence('address', 'create')
//            ->notEmpty('address');
//
//        $validator
//            ->requirePresence('created_by', 'create')
//            ->allowEmpty('created_by');
//
//        $validator
//            ->requirePresence('modified_by', 'create')
//            ->allowEmpty('modified_by');
//
//        return $validator;
//    }
}
