<?php
namespace App\Model\Table;

use App\Model\Entity\SystemInfo;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * SystemInfo Model
 *
 */
class SystemInfoTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        $this->table('system_info');
        $this->displayField('id');
        $this->primaryKey('id');
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
            ->add('device_seq_start', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('device_seq_start');
            
        $validator
            ->add('device_seq_last', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('device_seq_last');

        return $validator;
    }
}
