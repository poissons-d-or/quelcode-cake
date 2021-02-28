<?= $this->Form->create($entity, [
    'type' => 'post',
    'url' => ['controller' => 'chanchans', 'action' => 'update']
]) ?>
<?= $this->Form->hidden('Chanchans.id') ?>

<div>name</div>
<div><?= $this->Form->text('Chanchans.name') ?></div>
<div>mail</div>
<div><?= $this->Form->text('Chanchans.mail') ?></div>
<div>age</div>
<div><?= $this->Form->text('Chanchans.age') ?></div>
<div><?= $this->Form->submit('送信') ?></div>
<?= $this->Form->end() ?>
