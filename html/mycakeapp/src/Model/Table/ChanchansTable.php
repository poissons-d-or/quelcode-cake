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
        $this->setDisplayField('name');
        $this->hasMany('Hoyohoyos');
    }


    public function findMe(Query $query, array $options)
    {
        $me = $options['me'];
        return $query->where(['name like' => '%' . $me . '%'])
            ->orWhere(['mail like' => '%' . $me . '%'])
            ->order(['age' => 'asc']);
    }

    public function findByAge(Query $query, array $options)
    {
        return $query->order(['age' => 'asc'])->order(['name' => 'asc']);
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
            ->integer('id', 'idは整数で入力下さい')
            ->allowEmptyString('id', null, 'create');

        $validator
            ->scalar('name', 'テキストを入力下さい。')
            ->maxLength('name', 255)
            ->requirePresence('name', 'create')
            ->notEmptyString('name', '名前は必ず記入して下さい。');

        $validator
            ->scalar('mail', 'テキストを入力下さい。')
            ->maxLength('mail', 255)
            ->allowEmptyString('mail')
            ->email('mail', false, 'メールアドレスを記入して下さい。');

        $validator
            ->integer('age', '整数を入力下さい。')
            ->requirePresence('age', 'create')
            ->notEmptyString('age', '必ず値を入力下さい。')
            ->greaterThan('age', -1, 'ゼロ以上の値を記入下さい。');

        return $validator;
    }
}
