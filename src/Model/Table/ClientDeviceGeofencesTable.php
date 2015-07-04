<?php
namespace App\Model\Table;

use App\Model\Entity\ClientDeviceGeofence;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * ClientDeviceGeofences Model
 *
 * @property \Cake\ORM\Association\BelongsTo $ClientContacts
 * @property \Cake\ORM\Association\BelongsTo $ClientDevices
 * @property \Cake\ORM\Association\BelongsTo $Geofences
 */
class ClientDeviceGeofencesTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        $this->table('client_device_geofences');
        $this->displayField('id');
        $this->primaryKey('id');
        $this->addBehavior('Timestamp');
        $this->belongsTo('ClientContacts', [
            'foreignKey' => 'client_contact_id'
        ]);
        $this->belongsTo('ClientDevices', [
            'foreignKey' => 'client_device_id'
        ]);
        $this->belongsTo('Geofences', [
            'foreignKey' => 'geofence_id'
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
        $rules->add($rules->existsIn(['client_contact_id'], 'ClientContacts'));
        $rules->add($rules->existsIn(['client_device_id'], 'ClientDevices'));
        $rules->add($rules->existsIn(['geofence_id'], 'Geofences'));
        return $rules;
    }
}
