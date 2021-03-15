<p>Chanchans records!</p>
<?= $this->Form->create($entity, [
    'type' => 'post',
    'url' => [
        'controller' => 'Hoyohoyos',
        'action' => 'index'
    ]
]) ?>

<fieldset class="form">
    chanchan id
    <?= $this->Form->error('Hoyohoyos.chanchan_id') ?>
    <?= $this->Form->text('Hoyohoyos.chanchan_id') ?>
    hoyohoyo
    <?= $this->Form->error('Hoyohoyos.hoyohoyo') ?>
    <?= $this->Form->text('Hoyohoyos.hoyohoyo') ?>
    <?= $this->Form->submit('投稿') ?>
</fieldset>
<?= $this->Form->end() ?>

<hr>
<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>Message</th>
            <th>name</th>
            <th>created at</th>
        </tr>
    </thead>
    <?php foreach ($data->toArray() as $obj) : ?>
        <tr>
            <td><?= h($obj->id) ?></td>
            <td><?= h($obj->hoyohoyo) ?></td>
            <td><?= h($obj->chanchan->name) ?></td>
            <td><?= h($obj->created_at) ?></td>
        </tr>
    <?php endforeach; ?>
</table>
