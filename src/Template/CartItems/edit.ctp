<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\CartItem $cartItem
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $cartItem->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $cartItem->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Cart Items'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Carts'), ['controller' => 'Carts', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Cart'), ['controller' => 'Carts', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Car Lists'), ['controller' => 'CarLists', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Car List'), ['controller' => 'CarLists', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="cartItems form large-9 medium-8 columns content">
    <?= $this->Form->create($cartItem) ?>
    <fieldset>
        <legend><?= __('Edit Cart Item') ?></legend>
        <?php
            echo $this->Form->control('seller_id');
            echo $this->Form->control('cart_id', ['options' => $carts]);
            echo $this->Form->control('quantity');
            echo $this->Form->control('car_list_id', ['options' => $carLists]);
            echo $this->Form->control('gross_amount');
            echo $this->Form->control('coupon_id');
            echo $this->Form->control('discount_amount');
            echo $this->Form->control('item_total_amount');
            echo $this->Form->control('delivery_charge');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
