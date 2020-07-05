<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Invoice $invoice
 */
?>
<section style="padding:0 0;!important">
	<div class="container">
               <div class="text-center">
                    <h1> Order Details</h1>

                    </div>
    </div>
	</section>
<section class="section-background">
    <div class="container">

        <div class="row">
    <table class="table vertical-table">
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= $invoice->has('user') ? $this->Html->link($invoice->user->name, ['controller' => 'Users', 'action' => 'view', $invoice->user->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Order Id') ?></th>
            <td><?= h($invoice->order_id) ?></td>
        </tr>
       
        <tr>
            <th scope="row"><?= __('Gross') ?></th>
            <td><?= $this->Number->format($invoice->gross) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Discount') ?></th>
            <td><?= $this->Number->format($invoice->discount) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Tax') ?></th>
            <td><?= $this->Number->format($invoice->tax) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Total Amount') ?></th>
            <td><?= $this->Number->format($invoice->total_amount) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created At') ?></th>
            <td><?= h($invoice->created_at) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Invoice Items') ?></h4>
        <?php if (!empty($invoice->invoice_items)): ?>
        <table cellpadding="0" cellspacing="0" class="table table-responsive">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Seller Id') ?></th>
                <th scope="col"><?= __('Invoice Id') ?></th>
                <th scope="col"><?= __('Car List Id') ?></th>
                <th scope="col"><?= __('Gross Amount') ?></th>
                <th scope="col"><?= __('Quantity') ?></th>
                <th scope="col"><?= __('Discount Amount') ?></th>
                <th scope="col"><?= __('Total Amount') ?></th>
                <th scope="col"><?= __('Delivery Charge') ?></th>
                <th scope="col"><?= __('Created At') ?></th>
               
            </tr>
            <?php foreach ($invoice->invoice_items as $invoiceItems): ?>
            <tr>
                <td><?= h($invoiceItems->id) ?></td>
                <td><?= h($invoiceItems->seller_id) ?></td>
                <td><?= h($invoiceItems->invoice_id) ?></td>
                <td><?= h($invoiceItems->car_list_id) ?></td>
                <td><?= h($invoiceItems->gross_amount) ?></td>
                <td><?= h($invoiceItems->quantity) ?></td>
                <td><?= h($invoiceItems->discount_amount) ?></td>
                <td><?= h($invoiceItems->total_amount) ?></td>
                <td><?= h($invoiceItems->delivery_charge) ?></td>
                <td><?= h($invoiceItems->created_at) ?></td>
                
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
</div>
</section>
