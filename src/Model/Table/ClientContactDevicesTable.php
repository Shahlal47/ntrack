<?php
namespace App\Model\Table;

use App\Model\Entity\ClientContactDevice;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * ClientContactDevices Model
 *
 * @property \Cake\ORM\Association\BelongsTo $ClientContacts
 * @property \Cake\ORM\Association\BelongsTo $ClientDevices
 */
class ClientContactDevicesTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        $this->table('client_contact_devices');
        $this->displayField('id');
        $this->primaryKey('id');
        $this->addBehavior('Timestamp');
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
            ->add('active', 'valid', ['rule' => 'boolean'])
            ->allowEmpty('active');

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
        return $rules;
    }
}
