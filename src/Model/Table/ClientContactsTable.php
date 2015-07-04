<?php
namespace App\Model\Table;

use App\Model\Entity\ClientContact;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * ClientContacts Model
 *
 * @property \Cake\ORM\Association\BelongsTo $ClientInfos
 * @property \Cake\ORM\Association\BelongsTo $Users
 * @property \Cake\ORM\Association\HasMany $ClientAlertSettings
 * @property \Cake\ORM\Association\HasMany $ClientContactDevices
 * @property \Cake\ORM\Association\HasMany $ClientDeviceGeofences
 * @property \Cake\ORM\Association\HasMany $ClientDriverAssignments
 * @property \Cake\ORM\Association\HasMany $ClientDrivers
 * @property \Cake\ORM\Association\HasMany $ClientExpenses
 * @property \Cake\ORM\Association\HasMany $ClientInfos
 * @property \Cake\ORM\Association\HasMany $ClientTripPaths
 * @property \Cake\ORM\Association\HasMany $ClientVehicleAssignments
 * @property \Cake\ORM\Association\HasMany $Geofences
 * @property \Cake\ORM\Association\HasMany $Users
 */
class ClientContactsTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        $this->table('client_contacts');
        $this->displayField('name');
        $this->primaryKey('id');
        $this->addBehavior('Timestamp');
        $this->belongsTo('ClientInfos', [
            'foreignKey' => 'client_info_id'
        ]);
        $this->belongsTo('Users', [
            'foreignKey' => 'user_id'
        ]);
        $this->hasMany('ClientAlertSettings', [
            'foreignKey' => 'client_contact_id'
        ]);
        $this->hasMany('ClientContactDevices', [
            'foreignKey' => 'client_contact_id'
        ]);
        $this->hasMany('ClientDeviceGeofences', [
            'foreignKey' => 'client_contact_id'
        ]);
        $this->hasMany('ClientDriverAssignments', [
            'foreignKey' => 'client_contact_id'
        ]);
        $this->hasMany('ClientDrivers', [
            'foreignKey' => 'client_contact_id'
        ]);
        $this->hasMany('ClientExpenses', [
            'foreignKey' => 'client_contact_id'
        ]);
        $this->hasMany('ClientInfos', [
            'foreignKey' => 'client_contact_id'
        ]);
        $this->hasMany('ClientTripPaths', [
            'foreignKey' => 'client_contact_id'
        ]);
        $this->hasMany('ClientVehicleAssignments', [
            'foreignKey' => 'client_contact_id'
        ]);
        $this->hasMany('Geofences', [
            'foreignKey' => 'client_contact_id'
        ]);
        $this->hasMany('Users', [
            'foreignKey' => 'client_contact_id'
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
            ->add('id', 'valid', ['rule' => 'uuid'])
            ->allowEmpty('id', 'create');
            
        $validator
            ->allowEmpty('mobile');
            
        $validator
            ->add('email', 'valid', ['rule' => 'email'])
            ->allowEmpty('email');
            
        $validator
            ->requirePresence('name', 'create')
            ->notEmpty('name');
            
        $validator
            ->allowEmpty('nationalid');
            
        $validator
            ->allowEmpty('phone');
            
        $validator
            ->allowEmpty('fax');
            
        $validator
            ->allowEmpty('mobile_home');
            
        $validator
            ->allowEmpty('mobile_office');

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
        $rules->add($rules->isUnique(['email']));
        $rules->add($rules->existsIn(['client_info_id'], 'ClientInfos'));
        $rules->add($rules->existsIn(['user_id'], 'Users'));
        return $rules;
    }
}
