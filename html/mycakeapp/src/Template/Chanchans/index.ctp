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
            <th><?= $this->Paginator->sort('id') ?></th>
            <th><?= $this->Paginator->sort('name') ?></th>
            <th><?= $this->Paginator->sort('mail') ?></th>
            <th><?= $this->Paginator->sort('age') ?></th>
            <th>hoyohoyos</th>
            <th></th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($data->toArray() as $obj) : ?>
            <tr>
                <td><?= h($obj->id) ?></td>
                <td><a href="<?= $this->Url->build(['controller' => 'Chanchans', 'action' => 'edit']) ?>?id=<?= $obj->id ?>">
                        <?= h($obj->name) ?></a></td>
                <td><?= h($obj->mail) ?></td>
                <td><?= h($obj->age) ?></td>
                <td>
                    <?php foreach ($obj->hoyohoyos as $item) : ?>
                        "<?= h($item->hoyohoyo) ?>"<br>
                    <?php endforeach; ?>
                </td>
                <td><a href="<?= $this->Url->build(['controller' => 'Chanchans', 'action' => 'delete']) ?>?id=<?= $obj->id ?>">delete</a></td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>
<div class="paginator">
    <ul class="pagination">
        <?= $this->Paginator->first('|<<' . '最初へ') ?>
        <?= $this->Paginator->prev('<<' . '前へ') ?>
        <?= $this->Paginator->next('次へ' . '>>') ?>
        <?= $this->Paginator->last('最後へ' . '>>|') ?>
    </ul>
</div>
