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
    public function index()
    {
        //$id = $this->request->query['id'];
        $data = $this->Chanchans->find('all'); //ChanchansTableクラスのインスタンスが「Chanchans」という名前のプロパティとして組み込まれる
        //$data = $this->Chanchans->get($id);
        $this->set('data', $data);
    }

    public function add()
    {
        $entity = $this->Chanchans->newEntity();
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
