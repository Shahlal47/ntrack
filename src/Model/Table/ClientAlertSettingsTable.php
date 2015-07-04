<?php
namespace App\Model\Table;

use App\Model\Entity\ClientAlertSetting;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

class ClientAlertSettingsTable extends Table
{
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

    public function buildRules(RulesChecker $rules)
    {
        $rules->add($rules->existsIn(['client_info_id'], 'ClientInfos'));
        $rules->add($rules->existsIn(['alert_type_id'], 'AlertTypes'));
        $rules->add($rules->existsIn(['client_contact_id'], 'ClientContacts'));
        $rules->add($rules->existsIn(['client_device_id'], 'ClientDevices'));
        return $rules;
    }
}
