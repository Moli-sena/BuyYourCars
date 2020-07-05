<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\CartItem[]|\Cake\Collection\CollectionInterface $cartItems
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Cart Item'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Carts'), ['controller' => 'Carts', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Cart'), ['controller' => 'Carts', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Car Lists'), ['controller' => 'CarLists', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Car List'), ['controller' => 'CarLists', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="cartItems index large-9 medium-8 columns content">
    <h3><?= __('Cart Items') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('seller_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('cart_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('quantity') ?></th>
                <th scope="col"><?= $this->Paginator->sort('car_list_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('gross_amount') ?></th>
                <th scope="col"><?= $this->Paginator->sort('coupon_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('discount_amount') ?></th>
                <th scope="col"><?= $this->Paginator->sort('item_total_amount') ?></th>
                <th scope="col"><?= $this->Paginator->sort('delivery_charge') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($cartItems as $cartItem): ?>
            <tr>
                <td><?= $this->Number->format($cartItem->id) ?></td>
                <td><?= $this->Number->format($cartItem->seller_id) ?></td>
                <td><?= $cartItem->has('cart') ? $this->Html->link($cartItem->cart->id, ['controller' => 'Carts', 'action' => 'view', $cartItem->cart->id]) : '' ?></td>
                <td><?= $this->Number->format($cartItem->quantity) ?></td>
                <td><?= $cartItem->has('car_list') ? $this->Html->link($cartItem->car_list->name, ['controller' => 'CarLists', 'action' => 'view', $cartItem->car_list->id]) : '' ?></td>
                <td><?= $this->Number->format($cartItem->gross_amount) ?></td>
                <td><?= $this->Number->format($cartItem->coupon_id) ?></td>
                <td><?= $this->Number->format($cartItem->discount_amount) ?></td>
                <td><?= $this->Number->format($cartItem->item_total_amount) ?></td>
                <td><?= $this->Number->format($cartItem->delivery_charge) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $cartItem->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $cartItem->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $cartItem->id], ['confirm' => __('Are you sure you want to delete # {0}?', $cartItem->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
    </div>
</div>
