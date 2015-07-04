<?php
namespace App\Model\Table;

use App\Model\Entity\ClientDriverAssignment;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * ClientDriverAssignments Model
 *
 * @property \Cake\ORM\Association\BelongsTo $ClientInfos
 * @property \Cake\ORM\Association\BelongsTo $ClientDrivers
 * @property \Cake\ORM\Association\BelongsTo $ClientVehicles
 * @property \Cake\ORM\Association\BelongsTo $ClientContacts
 */
class ClientDriverAssignmentsTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        $this->table('client_driver_assignments');
        $this->displayField('id');
        $this->primaryKey('id');
        $this->addBehavior('Timestamp');
        $this->belongsTo('ClientInfos', [
            'foreignKey' => 'client_info_id'
        ]);
        $this->belongsTo('ClientDrivers', [
            'foreignKey' => 'client_driver_id'
        ]);
        $this->belongsTo('ClientVehicles', [
            'foreignKey' => 'client_vehicle_id'
        ]);
        $this->belongsTo('ClientContacts', [
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
            ->add('id', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('id', 'create');
            
        $validator
            ->add('from', 'valid', ['rule' => 'datetime'])
            ->allowEmpty('from');
            
        $validator
            ->add('to', 'valid', ['rule' => 'datetime'])
            ->allowEmpty('to');

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
        $rules->add($rules->existsIn(['client_driver_id'], 'ClientDrivers'));
        $rules->add($rules->existsIn(['client_vehicle_id'], 'ClientVehicles'));
        $rules->add($rules->existsIn(['client_contact_id'], 'ClientContacts'));
        return $rules;
    }
}
