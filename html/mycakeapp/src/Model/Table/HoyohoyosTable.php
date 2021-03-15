<?php

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

class HoyohoyosTable extends Table
{
    public function initialize(array $config)
    {
        parent::initialize($config);
        $this->setDisplayField('hoyohoyo');
        $this->belongsTo('Chanchans');
    }
    public function validationDefault(Validator $validator)
    {
        $validator
            ->allowEmptyString('id', null, 'create');

        $validator
            ->integer('chanchan_id', '整数で入力下さい。')
            ->notEmptyString('chanchan_id', '必ず記入して下さい。');

        $validator
            ->scalar('hoyohoyo', 'テキストを入力下さい。')
            ->requirePresence('hoyohoyo', 'create')
            ->notEmptyString('hoyohoyo', '必ず記入して下さい。');

        return $validator;
    }
}
