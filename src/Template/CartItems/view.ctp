<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\CartItem $cartItem
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Cart Item'), ['action' => 'edit', $cartItem->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Cart Item'), ['action' => 'delete', $cartItem->id], ['confirm' => __('Are you sure you want to delete # {0}?', $cartItem->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Cart Items'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Cart Item'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Carts'), ['controller' => 'Carts', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Cart'), ['controller' => 'Carts', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Car Lists'), ['controller' => 'CarLists', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Car List'), ['controller' => 'CarLists', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="cartItems view large-9 medium-8 columns content">
    <h3><?= h($cartItem->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Cart') ?></th>
            <td><?= $cartItem->has('cart') ? $this->Html->link($cartItem->cart->id, ['controller' => 'Carts', 'action' => 'view', $cartItem->cart->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Car List') ?></th>
            <td><?= $cartItem->has('car_list') ? $this->Html->link($cartItem->car_list->name, ['controller' => 'CarLists', 'action' => 'view', $cartItem->car_list->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($cartItem->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Seller Id') ?></th>
            <td><?= $this->Number->format($cartItem->seller_id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Quantity') ?></th>
            <td><?= $this->Number->format($cartItem->quantity) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Gross Amount') ?></th>
            <td><?= $this->Number->format($cartItem->gross_amount) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Coupon Id') ?></th>
            <td><?= $this->Number->format($cartItem->coupon_id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Discount Amount') ?></th>
            <td><?= $this->Number->format($cartItem->discount_amount) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Item Total Amount') ?></th>
            <td><?= $this->Number->format($cartItem->item_total_amount) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Delivery Charge') ?></th>
            <td><?= $this->Number->format($cartItem->delivery_charge) ?></td>
        </tr>
    </table>
</div>
