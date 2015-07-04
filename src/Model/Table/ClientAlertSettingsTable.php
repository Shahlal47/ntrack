<?php
namespace App\Model\Table;

use App\Model\Entity\ClientAlertSetting;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * ClientAlertSettings Model
 *
 * @property \Cake\ORM\Association\BelongsTo $ClientInfos
 * @property \Cake\ORM\Association\BelongsTo $AlertTypes
 * @property \Cake\ORM\Association\BelongsTo $ClientContacts
 * @property \Cake\ORM\Association\BelongsTo $ClientDevices
 */
class ClientAlertSettingsTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        $this->table('client_alert_settings');
        $this->displayField('id');
        $this->primaryKey('id');
        $this->addBehavior('Timestamp');
        $this->belongsTo('ClientInfos', [
            'foreignKey' => 'client_info_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('AlertTypes', [
            'foreignKey' => 'alert_type_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('ClientContacts', [
            'foreignKey' => 'client_contact_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('ClientDevices', [
            'foreignKey' => 'client_device_id',
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
            ->add('is_sms', 'valid', ['rule' => 'boolean'])
            ->allowEmpty('is_sms');
            
        $validator
            ->add('is_email', 'valid', ['rule' => 'boolean'])
            ->allowEmpty('is_email');

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
        $rules->add($rules->existsIn(['alert_type_id'], 'AlertTypes'));
        $rules->add($rules->existsIn(['client_contact_id'], 'ClientContacts'));
        $rules->add($rules->existsIn(['client_device_id'], 'ClientDevices'));
        return $rules;
    }
}
