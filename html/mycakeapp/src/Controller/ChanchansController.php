<?php

namespace App\Controller;

use App\Controller\AppController;

/**
 * Chanchans Controller
 *
 * @property \App\Model\Table\ChanchansTable $Chanchans
 *
 * @method \App\Model\Entity\Chanchan[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ChanchansController extends AppController //Chanchansモデルを扱うコントローラー
{
    public $paginate = [
        'finder' => 'byAge',
        'limit' => 5,
        'contain' => ['Hoyohoyos']
    ];

    public function initialize()
    {
        parent::initialize();
        $this->loadComponent('Paginator');
    }

    public function index()
    {
        /*    if ($this->request->is('post')) {
            $find = $this->request->data['Chanchans']['find'];
            // $arr = explode(',', $find);
            // $condition = [
                // 'limit'=>3,
                // 'page'=> $find
                // 'conditions' => [
                    // 'or' => ['name like' => $find, 'mail like' => $find]
                    // ],
                    // 'order' => ['Chanchans.age' => 'desc']
                    // ];
                    $data = $this->Chanchans->find('me', ['me' => $find])
                    ->contain(['Hoyohoyos']);
                    // ->where(['age >= ' => $arr[0]])
                    // ->andWhere(['age <' => $arr[1]])
                    // ->order(['Chanchans.age' => 'asc'])
                    // ->order(['Chanchans.name' => 'asc'])
                    // ->limit(3)->page($find);
                } else {
                    $data = $this->Chanchans->find('byAge')
                    ->contain(['Hoyohoyos']);
                    // ->order(['Chanchans.age' => 'asc'])
                    // ->order(['Chanchans.name' => 'desc']);
                } */
        $data = $this->paginate($this->Chanchans);
        $this->set('data', $data);
    }

    public function add()
    {
        $msg = 'please type your personal data...';
        $entity = $this->Chanchans->newEntity();
        if ($this->request->is('post')) {
            $data = $this->request->data['Chanchans'];
            $entity = $this->Chanchans->newEntity($data);
            if ($this->Chanchans->save($entity)) {
                return $this->redirect(['action' => 'index']);
            }
            $msg = 'Error was occured...';
        }
        $this->set('msg', $msg);
        $this->set('entity', $entity);
    }

    public function create()
    {
        if ($this->request->is('post')) {
            $data = $this->request->data['Chanchans'];
            $entity = $this->Chanchans->newEntity($data);
            $this->Chanchans->save($entity);
        }
        return $this->redirect(['action' => 'index']);
    }

    public function edit()
    {
        $id = $this->request->query['id'];
        $entity = $this->Chanchans->get($id);
        $this->set('entity', $entity);
    }

    public function update()
    {
        if ($this->request->is('post')) {
            $data = $this->request->data['Chanchans'];
            $entity = $this->Chanchans->get($data['id']);
            $this->Chanchans->patchEntity($entity, $data);
            $this->Chanchans->save($entity);
        }
        return $this->redirect(['action' => 'index']);
    }

    public function delete()
    {
        $id = $this->request->query['id'];
        $entity = $this->Chanchans->get($id);
        $this->set('entity', $entity);
    }

    public function destroy()
    {
        if ($this->request->is('post')) {
            $data = $this->request->data['Chanchans'];
            $entity = $this->Chanchans->get($data['id']);
            $this->Chanchans->delete($entity);
        }
        return $this->redirect(['action' => 'index']);
    }
}
