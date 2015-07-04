<?php
namespace App\Model\Table;

use App\Model\Entity\Comment;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Comments Model
 *
 */
class CommentsTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        $this->table('comments');
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
            ->requirePresence('MYUSER', 'create')
            ->notEmpty('MYUSER');
            
        $validator
            ->allowEmpty('EMAIL');
            
        $validator
            ->requirePresence('WEBPAGE', 'create')
            ->notEmpty('WEBPAGE');
            
        $validator
            ->add('DATUM', 'valid', ['rule' => 'date'])
            ->requirePresence('DATUM', 'create')
            ->notEmpty('DATUM');
            
        $validator
            ->requirePresence('SUMMARY', 'create')
            ->notEmpty('SUMMARY');
            
        $validator
            ->requirePresence('COMMENTS', 'create')
            ->notEmpty('COMMENTS');

        return $validator;
    }
}
