<?php
namespace App\Model\Table;

use App\Model\Entity\ClientDriver;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * ClientDrivers Model
 *
 * @property \Cake\ORM\Association\BelongsTo $ClientInfos
 * @property \Cake\ORM\Association\BelongsTo $ClientContacts
 * @property \Cake\ORM\Association\HasMany $ClientDriverAssignments
 */
class ClientDriversTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        $this->table('client_drivers');
        $this->displayField('name');
        $this->primaryKey('id');
        $this->addBehavior('Timestamp');
        $this->belongsTo('ClientInfos', [
            'foreignKey' => 'client_info_id'
        ]);
        $this->belongsTo('ClientContacts', [
            'foreignKey' => 'client_contact_id'
        ]);
        $this->hasMany('ClientDriverAssignments', [
            'foreignKey' => 'client_driver_id'
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
            ->allowEmpty('driving_license');
            
        $validator
            ->allowEmpty('address');
            
        $validator
            ->allowEmpty('mobile');
            
        $validator
            ->add('join_date', 'valid', ['rule' => 'date'])
            ->allowEmpty('join_date');

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
        $rules->add($rules->existsIn(['client_contact_id'], 'ClientContacts'));
        return $rules;
    }
}
