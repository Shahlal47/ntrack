<?php
namespace App\Model\Table;

use App\Model\Entity\ClientInfo;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * ClientInfos Model
 *
 * @property \Cake\ORM\Association\BelongsTo $ClientTypes
 * @property \Cake\ORM\Association\BelongsTo $CompanyTypes
 * @property \Cake\ORM\Association\BelongsTo $Users
 * @property \Cake\ORM\Association\BelongsTo $ClientContacts
 * @property \Cake\ORM\Association\HasMany $ClientAlertSettings
 * @property \Cake\ORM\Association\HasMany $ClientDeviceSubscriptions
 * @property \Cake\ORM\Association\HasMany $ClientDevices
 * @property \Cake\ORM\Association\HasMany $ClientDriverAssignments
 * @property \Cake\ORM\Association\HasMany $ClientDrivers
 * @property \Cake\ORM\Association\HasMany $ClientExpenses
 * @property \Cake\ORM\Association\HasMany $ClientNotifications
 * @property \Cake\ORM\Association\HasMany $ClientPersons
 * @property \Cake\ORM\Association\HasMany $ClientPublicids
 * @property \Cake\ORM\Association\HasMany $ClientReports
 * @property \Cake\ORM\Association\HasMany $ClientTripPaths
 * @property \Cake\ORM\Association\HasMany $ClientVehicleAssignments
 * @property \Cake\ORM\Association\HasMany $ClientVehicles
 * @property \Cake\ORM\Association\HasMany $Geofences
 */
class ClientInfosTable extends Table
{
    public function initialize(array $config)
    {
        $this->table('client_infos');
        $this->displayField('name');
        $this->primaryKey('id');
        $this->addBehavior('Timestamp');
        $this->belongsTo('ClientTypes', [
            'foreignKey' => 'client_type_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('CompanyTypes', [
            'foreignKey' => 'company_type_id'
        ]);
        $this->belongsTo('Users', [
            'foreignKey' => 'user_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('ClientContacts', [
            'foreignKey' => 'client_contact_id',
            'joinType' => 'INNER'
        ]);
        $this->hasMany('ClientAlertSettings', [
            'foreignKey' => 'client_info_id'
        ]);
        $this->hasMany('ClientContacts', [
            'foreignKey' => 'client_info_id'
        ]);
        $this->hasMany('ClientDeviceSubscriptions', [
            'foreignKey' => 'client_info_id'
        ]);
        $this->hasMany('ClientDevices', [
            'foreignKey' => 'client_info_id'
        ]);
        $this->hasMany('ClientDriverAssignments', [
            'foreignKey' => 'client_info_id'
        ]);
        $this->hasMany('ClientDrivers', [
            'foreignKey' => 'client_info_id'
        ]);
        $this->hasMany('ClientExpenses', [
            'foreignKey' => 'client_info_id'
        ]);
        $this->hasMany('ClientNotifications', [
            'foreignKey' => 'client_info_id'
        ]);
        $this->hasMany('ClientPersons', [
            'foreignKey' => 'client_info_id'
        ]);
        $this->hasMany('ClientPublicids', [
            'foreignKey' => 'client_info_id'
        ]);
        $this->hasMany('ClientReports', [
            'foreignKey' => 'client_info_id'
        ]);
        $this->hasMany('ClientTripPaths', [
            'foreignKey' => 'client_info_id'
        ]);
        $this->hasMany('ClientVehicleAssignments', [
            'foreignKey' => 'client_info_id'
        ]);
        $this->hasMany('ClientVehicles', [
            'foreignKey' => 'client_info_id'
        ]);
        $this->hasMany('Geofences', [
            'foreignKey' => 'client_info_id'
        ]);
        $this->hasMany('Users', [
            'foreignKey' => 'client_info_id'
        ]);
    }

    public function validationDefault(Validator $validator)
    {
        $validator
            ->add('id', 'valid', ['rule' => 'uuid'])
            ->allowEmpty('id', 'create');
            
        $validator
            ->requirePresence('name', 'create')
            ->notEmpty('name');
            
        $validator
            ->allowEmpty('address');
            
        $validator
            ->allowEmpty('buyerno');
            
        $validator
            ->allowEmpty('website');
            
        $validator
            ->allowEmpty('logo');
            
        $validator
            ->add('numOfTrackers', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('numOfTrackers');
            
        $validator
            ->add('numOfGeoFences', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('numOfGeoFences');
            
        $validator
            ->allowEmpty('sensors');

        return $validator;
    }

    public function buildRules(RulesChecker $rules)
    {
        $rules->add($rules->existsIn(['client_type_id'], 'ClientTypes'));
        $rules->add($rules->existsIn(['company_type_id'], 'CompanyTypes'));
        $rules->add($rules->existsIn(['user_id'], 'Users'));
        $rules->add($rules->existsIn(['client_contact_id'], 'ClientContacts'));
        return $rules;
    }
}
