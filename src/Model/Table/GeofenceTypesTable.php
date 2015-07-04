<?php
namespace App\Model\Table;

use App\Model\Entity\GeofenceType;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * GeofenceTypes Model
 *
 * @property \Cake\ORM\Association\HasMany $Geofences
 */
class GeofenceTypesTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        $this->table('geofence_types');
        $this->displayField('name');
        $this->primaryKey('id');
        $this->hasMany('Geofences', [
            'foreignKey' => 'geofence_type_id'
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
            ->requirePresence('name', 'create')
            ->notEmpty('name');
            
        $validator
            ->allowEmpty('description');

        return $validator;
    }
}
