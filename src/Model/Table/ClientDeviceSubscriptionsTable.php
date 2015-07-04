<?php
namespace App\Model\Table;

use App\Model\Entity\ClientDeviceSubscription;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * ClientDeviceSubscriptions Model
 *
 * @property \Cake\ORM\Association\BelongsTo $ClientInfos
 * @property \Cake\ORM\Association\BelongsTo $AccountTypes
 * @property \Cake\ORM\Association\HasMany $ClientDevices
 */
class ClientDeviceSubscriptionsTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        $this->table('client_device_subscriptions');
        $this->displayField('id');
        $this->primaryKey('id');
        $this->addBehavior('Timestamp');
        $this->belongsTo('ClientInfos', [
            'foreignKey' => 'client_info_id'
        ]);
        $this->belongsTo('AccountTypes', [
            'foreignKey' => 'account_type_id'
        ]);
        $this->hasMany('ClientDevices', [
            'foreignKey' => 'client_device_subscription_id'
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
            ->add('subscribe_date', 'valid', ['rule' => 'date'])
            ->allowEmpty('subscribe_date');
            
        $validator
            ->add('expire_date', 'valid', ['rule' => 'date'])
            ->allowEmpty('expire_date');
            
        $validator
            ->add('active', 'valid', ['rule' => 'boolean'])
            ->allowEmpty('active');
            
        $validator
            ->allowEmpty('client_deviceid');

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
        $rules->add($rules->existsIn(['client_info_id'], 'ClientInfos'));
        $rules->add($rules->existsIn(['account_type_id'], 'AccountTypes'));
        return $rules;
    }
}
