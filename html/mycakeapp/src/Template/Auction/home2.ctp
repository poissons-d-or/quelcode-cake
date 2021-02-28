<h2><b><?= $authuser['username'] ?>のホーム</b></h2>
<h3>出品情報</h3>
<table cellpadding="0" cellspacing="0">
  <thead>
    <tr>
      <th scope="col"><?= $this->Paginator->sort('id') ?></th>
      <th class="main" scope="col"><?= $this->Paginator->sort('name') ?></th>
      <th scope="col"><?= $this->Paginator->sort('created') ?></th>
      <th scope="col" class="actions"><?= __('Actions') ?></th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($biditems as $biditem) : ?>
      <tr>
        <td><?= h($biditem->id) ?></td>
        <td><?= h($biditem->name) ?></td>
        <td><?= h($biditem->created) ?></td>
        <td class="actions">
          <?php if (!empty($biditem->bidinfo)) : ?>
            <?= $this->Html->link(__('View'), ['action' => 'msg', $biditem->bidinfo->id]) ?>
          <?php endif; ?>
        </td>
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
<h6><?= $this->Html->link(__('<< 落札情報に戻る'), ['action' => 'home']) ?></h6>
