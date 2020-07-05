<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\InvoiceItem $invoiceItem
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Invoice Item'), ['action' => 'edit', $invoiceItem->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Invoice Item'), ['action' => 'delete', $invoiceItem->id], ['confirm' => __('Are you sure you want to delete # {0}?', $invoiceItem->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Invoice Items'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Invoice Item'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Invoices'), ['controller' => 'Invoices', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Invoice'), ['controller' => 'Invoices', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Car Lists'), ['controller' => 'CarLists', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Car List'), ['controller' => 'CarLists', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="invoiceItems view large-9 medium-8 columns content">
    <h3><?= h($invoiceItem->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Invoice') ?></th>
            <td><?= $invoiceItem->has('invoice') ? $this->Html->link($invoiceItem->invoice->id, ['controller' => 'Invoices', 'action' => 'view', $invoiceItem->invoice->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Car List') ?></th>
            <td><?= $invoiceItem->has('car_list') ? $this->Html->link($invoiceItem->car_list->name, ['controller' => 'CarLists', 'action' => 'view', $invoiceItem->car_list->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($invoiceItem->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Seller Id') ?></th>
            <td><?= $this->Number->format($invoiceItem->seller_id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Gross Amount') ?></th>
            <td><?= $this->Number->format($invoiceItem->gross_amount) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Quantity') ?></th>
            <td><?= $this->Number->format($invoiceItem->quantity) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Discount Amount') ?></th>
            <td><?= $this->Number->format($invoiceItem->discount_amount) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Total Amount') ?></th>
            <td><?= $this->Number->format($invoiceItem->total_amount) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Delivery Charge') ?></th>
            <td><?= $this->Number->format($invoiceItem->delivery_charge) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created At') ?></th>
            <td><?= h($invoiceItem->created_at) ?></td>
        </tr>
    </table>
</div>
