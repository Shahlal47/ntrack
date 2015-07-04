<?php
namespace App\Model\Table;

use App\Model\Entity\ClientExpense;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * ClientExpenses Model
 *
 * @property \Cake\ORM\Association\BelongsTo $ClientInfos
 * @property \Cake\ORM\Association\BelongsTo $ExpenseTypes
 * @property \Cake\ORM\Association\BelongsTo $ClientDevices
 * @property \Cake\ORM\Association\BelongsTo $ClientContacts
 */
class ClientExpensesTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        $this->table('client_expenses');
        $this->displayField('id');
        $this->primaryKey('id');
        $this->addBehavior('Timestamp');
        $this->belongsTo('ClientInfos', [
            'foreignKey' => 'client_info_id'
        ]);
        $this->belongsTo('ExpenseTypes', [
            'foreignKey' => 'expense_type_id'
        ]);
        $this->belongsTo('ClientDevices', [
            'foreignKey' => 'client_device_id'
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
            ->add('ondate', 'valid', ['rule' => 'date'])
            ->allowEmpty('ondate');
            
        $validator
            ->add('amount', 'valid', ['rule' => 'decimal'])
            ->allowEmpty('amount');
            
        $validator
            ->allowEmpty('comments');

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
        $rules->add($rules->existsIn(['expense_type_id'], 'ExpenseTypes'));
        $rules->add($rules->existsIn(['client_device_id'], 'ClientDevices'));
        $rules->add($rules->existsIn(['client_contact_id'], 'ClientContacts'));
        return $rules;
    }
}
