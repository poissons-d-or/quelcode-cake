<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Chanchan $chanchan
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Chanchan'), ['action' => 'edit', $chanchan->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Chanchan'), ['action' => 'delete', $chanchan->id], ['confirm' => __('Are you sure you want to delete # {0}?', $chanchan->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Chanchans'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Chanchan'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="chanchans view large-9 medium-8 columns content">
    <h3><?= h($chanchan->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($chanchan->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Mail') ?></th>
            <td><?= h($chanchan->mail) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($chanchan->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Age') ?></th>
            <td><?= $this->Number->format($chanchan->age) ?></td>
        </tr>
    </table>
</div>
