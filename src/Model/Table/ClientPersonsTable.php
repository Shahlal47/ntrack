<?php
namespace App\Model\Table;

use App\Model\Entity\ClientPerson;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * ClientPersons Model
 *
 * @property \Cake\ORM\Association\BelongsTo $ClientDevices
 * @property \Cake\ORM\Association\BelongsTo $ClientInfos
 * @property \Cake\ORM\Association\BelongsTo $IdentificationTypes
 */
class ClientPersonsTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        $this->table('client_persons');
        $this->displayField('name');
        $this->primaryKey('id');
        $this->addBehavior('Timestamp');
        $this->belongsTo('ClientDevices', [
            'foreignKey' => 'client_device_id'
        ]);
        $this->belongsTo('ClientInfos', [
            'foreignKey' => 'client_info_id'
        ]);
        $this->belongsTo('IdentificationTypes', [
            'foreignKey' => 'identification_type_id'
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
            ->allowEmpty('name');
            
        $validator
            ->allowEmpty('mobile');
            
        $validator
            ->allowEmpty('image');
            
        $validator
            ->allowEmpty('identification_number');
            
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
        $rules->add($rules->existsIn(['client_device_id'], 'ClientDevices'));
        $rules->add($rules->existsIn(['client_info_id'], 'ClientInfos'));
        $rules->add($rules->existsIn(['identification_type_id'], 'IdentificationTypes'));
        return $rules;
    }
}
