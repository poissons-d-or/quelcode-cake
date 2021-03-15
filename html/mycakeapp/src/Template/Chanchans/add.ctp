<p><?= $msg ?></p>
<?= $this->Form->create($entity, [
    'type' => 'post',
    'url' => ['controller' => 'Chanchans', 'action' => 'add']
]) ?>
<fieldset class="form">
    NAME: <?= $this->Form->error('Chanchans.name') ?>
    <?= $this->Form->text('Chanchans.name') ?>
    MAIL: <?= $this->Form->error('Chanchans.mail') ?>
    <?= $this->Form->text('Chanchans.mail') ?>
    AGE: <?= $this->Form->error('Chanchans.age') ?>
    <?= $this->Form->text('Chanchans.age') ?>
    <?= $this->Form->submit('送信') ?>
</fieldset>
<?= $this->Form->end() ?>
