<?php
namespace App\Model\Table;

use App\Model\Entity\Test;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Tests Model
 *
 */
class TestsTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        $this->table('tests');
        $this->displayField('name');
        $this->primaryKey('id');
        $this->addBehavior('Timestamp');
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator)
    {
        $validator
            ->add('id', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('id', 'create');
            
        $validator
            ->add('name', 'valid', ['rule' => 'numeric'])
            ->requirePresence('name', 'create')
            ->notEmpty('name');
            
        $validator
            ->requirePresence('created_by', 'create')
            ->notEmpty('created_by');
            
        $validator
            ->requirePresence('modified_by', 'create')
            ->notEmpty('modified_by');

        return $validator;
    }
}
