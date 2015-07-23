<?php
namespace App\Model\Table;

use App\Model\Entity\TransferHistory;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * TransferHistories Model
 *
 * @property \Cake\ORM\Association\BelongsTo $FromUsers
 * @property \Cake\ORM\Association\BelongsTo $FromClientInfos
 * @property \Cake\ORM\Association\BelongsTo $ToUsers
 * @property \Cake\ORM\Association\BelongsTo $ToClientInfos
 * @property \Cake\ORM\Association\BelongsTo $Devices
 * @property \Cake\ORM\Association\BelongsTo $TransferedBies
 */
class TransferHistoriesTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        $this->table('transfer_histories');
        $this->displayField('id');
        $this->primaryKey('id');
        $this->addBehavior('Timestamp');
        $this->belongsTo('FromUsers', [
            'foreignKey' => 'from_user_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('FromClientInfos', [
            'foreignKey' => 'from_client_info_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('ToUsers', [
            'foreignKey' => 'to_user_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('ToClientInfos', [
            'foreignKey' => 'to_client_info_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Devices', [
            'foreignKey' => 'device_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('TransferedBies', [
            'foreignKey' => 'transfered_by_id',
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
            ->requirePresence('from_veh_reg_no', 'create')
            ->notEmpty('from_veh_reg_no');
            
        $validator
            ->requirePresence('to_veh_reg_no', 'create')
            ->notEmpty('to_veh_reg_no');
            
        $validator
            ->requirePresence('created_by', 'create')
            ->notEmpty('created_by');
            
        $validator
            ->requirePresence('modified_by', 'create')
            ->notEmpty('modified_by');

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
        $rules->add($rules->existsIn(['from_user_id'], 'FromUsers'));
        $rules->add($rules->existsIn(['from_client_info_id'], 'FromClientInfos'));
        $rules->add($rules->existsIn(['to_user_id'], 'ToUsers'));
        $rules->add($rules->existsIn(['to_client_info_id'], 'ToClientInfos'));
        $rules->add($rules->existsIn(['device_id'], 'Devices'));
        $rules->add($rules->existsIn(['transfered_by_id'], 'TransferedBies'));
        return $rules;
    }
}
