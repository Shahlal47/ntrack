<?php
namespace App\Model\Table;

use App\Model\Entity\ExtHistory;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * ExtHistory Model
 *
 * @property \Cake\ORM\Association\BelongsTo $ClientDeviceSubscriptions
 */
class ExtHistoryTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        $this->table('ext_history');
        $this->displayField('id');
        $this->primaryKey('id');
        $this->addBehavior('Timestamp');
        $this->belongsTo('ClientDeviceSubscriptions', [
            'foreignKey' => 'client_device_subscriptions_id',
            'joinType' => 'INNER'
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
            ->requirePresence('memo_number', 'create')
            ->notEmpty('memo_number');
            
        $validator
            ->requirePresence('ref_number', 'create')
            ->notEmpty('ref_number');
            
        $validator
            ->add('from_date', 'valid', ['rule' => 'date'])
            ->requirePresence('from_date', 'create')
            ->notEmpty('from_date');
            
        $validator
            ->add('to_date', 'valid', ['rule' => 'date'])
            ->requirePresence('to_date', 'create')
            ->notEmpty('to_date');

        return $validator;
    }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules)
    {
        $rules->add($rules->existsIn(['client_device_subscriptions_id'], 'ClientDeviceSubscriptions'));
        return $rules;
    }
}
