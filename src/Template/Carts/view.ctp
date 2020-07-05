<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Cart $cart
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Cart'), ['action' => 'edit', $cart->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Cart'), ['action' => 'delete', $cart->id], ['confirm' => __('Are you sure you want to delete # {0}?', $cart->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Carts'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Cart'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Car Lists'), ['controller' => 'CarLists', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Car List'), ['controller' => 'CarLists', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="carts view large-9 medium-8 columns content">
    <h3><?= h($cart->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('User') ?></th>
            <td><?= $cart->has('user') ? $this->Html->link($cart->user->name, ['controller' => 'Users', 'action' => 'view', $cart->user->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Price') ?></th>
            <td><?= h($cart->price) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Tax') ?></th>
            <td><?= h($cart->tax) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Car List') ?></th>
            <td><?= $cart->has('car_list') ? $this->Html->link($cart->car_list->name, ['controller' => 'CarLists', 'action' => 'view', $cart->car_list->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($cart->id) ?></td>
        </tr>
    </table>
</div>
