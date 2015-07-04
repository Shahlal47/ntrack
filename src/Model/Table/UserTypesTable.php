<?php
namespace App\Model\Table;

use App\Model\Entity\UserType;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * UserTypes Model
 *
 * @property \Cake\ORM\Association\HasMany $UserLogs
 * @property \Cake\ORM\Association\HasMany $Users
 */
class UserTypesTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        $this->table('user_types');
        $this->displayField('name');
        $this->primaryKey('id');
        $this->hasMany('UserLogs', [
            'foreignKey' => 'user_type_id'
        ]);
        $this->hasMany('Users', [
            'foreignKey' => 'user_type_id'
        ]);
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
            ->requirePresence('name', 'create')
            ->notEmpty('name');
            
        $validator
            ->allowEmpty('description');

        return $validator;
    }
}
