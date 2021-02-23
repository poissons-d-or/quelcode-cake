<h2><b>ミニオークション</b></h2>
<h3>出品されている商品</h3>
<table cellpadding="0" cellspacing="0">
  <thead>
    <tr>
      <th class="main" scope="col"><?= $this->Paginator->sort('name') ?></th>
      <th scope="col"><?= $this->Paginator->sort('is_finished') ?></th>
      <th scope="col"><?= $this->Paginator->sort('endtime') ?></th>
      <th scope="col" class="actions"><?= __('Actions') ?></th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($auction as $biditem) : ?>
      <tr>
        <td><?= h($biditem->name) ?></td>
        <td><?= h($biditem->is_finished ? 'Finished' : '') ?></td>
        <td><?= h($biditem->endtime) ?></td>
        <td class="actions"><?= $this->Html->link(__('詳細を見る'), ['action' => 'view', $biditem->id]) ?></td>
      </tr>
    <?php endforeach; ?>
  </tbody>
</table>

<div class="paginator">
  <ul class="pagination">
    <?= $this->Paginator->first('<<' . __('先頭のページ')) ?>
    <?= $this->Paginator->prev('<' . __('前のページ')) ?>
    <?= $this->Paginator->numbers() ?>
    <?= $this->Paginator->next(__('次のページ') . '>') ?>
    <?= $this->Paginator->last(__('最後のページ') . '>>') ?>
  </ul>
</div>
