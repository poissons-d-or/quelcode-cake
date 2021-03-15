<?php

namespace App\Controller;

use App\Controller\AppController;
use Cake\I18n\Time;

class HoyohoyosController extends AppController
{
    public function index()
    {
        if ($this->request->is('post')) {
            $data = $this->request->data['Hoyohoyos'];
            $entity = $this->Hoyohoyos->newEntity($data);
            $entity->created_at = new Time(date('Y-m-d H:i:s'));
            $this->Hoyohoyos->save($entity);
        } else {
            $entity = $this->Hoyohoyos->newEntity();
        }
        $data = $this->Hoyohoyos->find('all')
            ->contain(['Chanchans'])
            ->order(['created_at' => 'desc']);
        $this->set('data', $data);
        $this->set('entity', $entity);
    }
}
