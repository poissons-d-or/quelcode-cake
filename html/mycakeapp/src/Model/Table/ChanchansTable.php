<?php

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Chanchans Model
 *
 * @method \App\Model\Entity\Chanchan get($primaryKey, $options = [])
 * @method \App\Model\Entity\Chanchan newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Chanchan[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Chanchan|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Chanchan saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Chanchan patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Chanchan[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Chanchan findOrCreate($search, callable $callback = null, $options = [])
 */
class ChanchansTable extends Table
{
    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        parent::initialize($config);

        $this->setTable('chanchans');
        $this->setDisplayField('name');
        $this->setPrimaryKey('id');
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
            ->integer('id')
            ->allowEmptyString('id', null, 'create');

        $validator
            ->scalar('name')
            ->maxLength('name', 255)
            ->requirePresence('name', 'create')
            ->notEmptyString('name');

        $validator
            ->scalar('mail')
            ->maxLength('mail', 255)
            ->requirePresence('mail', 'create')
            ->notEmptyString('mail');

        $validator
            ->integer('age')
            ->requirePresence('age', 'create')
            ->notEmptyString('age');

        return $validator;
    }
}
