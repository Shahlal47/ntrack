<?php
namespace App\Model\Table;

use App\Model\Entity\Comment;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

class CommentsTable extends Table
{
    public function initialize(array $config)
    {
        $this->table('comments');
        $this->displayField('id');
        $this->primaryKey('id');
    }

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
            ->allowEmpty('DATUM');
            
        $validator
            ->requirePresence('SUMMARY', 'create')
            ->notEmpty('SUMMARY');
            
        $validator
            ->requirePresence('COMMENTS', 'create')
            ->notEmpty('COMMENTS');

        return $validator;
    }
}
