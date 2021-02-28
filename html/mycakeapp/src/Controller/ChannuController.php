<?php

namespace App\Controller;

use App\Controller\AppController;

class ChannuController extends AppController
{
    public function initialize()
    {
        $this->viewBuilder()->setLayout('channu');
    }
    public function ohoho()
    {
        $this->viewBuilder()->autoLayout(false);
        $values = [
            'title' => 'oho!',
            'message' => 'ohohohoho!'
        ];
        $this->set($values);
    }

    public function oro()
    {
        $this->viewBuilder()->autoLayout(false);
        $this->set('title', 'Oho!');
        if ($this->request->isPost()) {
            $this->set('data', $this->request->data['Form1']);
        } else {
            $this->set('data', []);
        }
    }

    public function ara()
    {
        $this->viewBuilder()->autoLayout(false);
        // $this->set('title', 'Ara!');
        if ($this->request->isPost()) {
            $this->set('data', $this->request->data);
        } else {
            $this->set('data', []);
        }
        $name = $this->request->data['Form1']['name'];
        $mail = $this->request->data['Form1']['mail'];
        $age = $this->request->data['Form1']['age'];
        $res = 'こんにちは、' . $name . '(' . $age . ')さん。メールアドレスは、' . $mail . 'ですね？';
        $values = [
            'title' => 'Ara!',
            'message' => $res
        ];
        $this->set($values);
    }
    public function adomodomo()
    {
        if ($this->request->isPost()) {
            $this->set('data', $this->request->data);
        } else {
            $this->set('data', []);
        }
        $name = $this->request->data['Form1']['name'];
        $mail = $this->request->data['Form1']['mail'];
        $age = $this->request->data['Form1']['age'];
        $res = 'こんにちは、' . $name . '(' . $age . ')さん。メールアドレスは、' . $mail . 'ですね？';
        $values = [
            // 'title' => 'Ara!',
            'header' => ['subtitle' => $res],
            'footer' => ['copyright' => $name]
        ];
        $this->set($values);
    }
}
