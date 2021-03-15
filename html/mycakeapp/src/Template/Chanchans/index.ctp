<p>Chanchans records!</p>
<?= $this->Form->create(null, [
    'type' => 'post',
    'url' => [
        'controller' => 'Chanchans',
        'action' => 'index'
    ]
]) ?>
<div>find</div>
<div><?= $this->Form->text('Chanchans.find') ?></div>
<div><?= $this->Form->submit('検索') ?></div>
<?= $this->Form->end() ?>
<hr>
<table>
    <thead>
        <tr>
            <th>id</th>
            <th>name</th>
            <th>mail</th>
            <th>hoyohoyos</th>
            <th></th>
        </tr>
    </thead>
    <?php foreach ($data->toArray() as $obj) : ?>
        <tr>
            <td><?= h($obj->id) ?></td>
            <td><a href="<?= $this->Url->build(['controller' => 'Chanchans', 'action' => 'edit']) ?>?id=<?= $obj->id ?>">
                    <?= h($obj->name) ?></a></td>
            <td><?= h($obj->mail) ?></td>
            <td>
                <?php foreach ($obj->hoyohoyos as $item) : ?>
                    "<?= h($item->hoyohoyo) ?>"<br>
                <?php endforeach; ?>
            </td>
            <td><a href="<?= $this->Url->build(['controller' => 'Chanchans', 'action' => 'delete']) ?>?id=<?= $obj->id ?>">delete</a></td>
        </tr>
    <?php endforeach; ?>
</table>
