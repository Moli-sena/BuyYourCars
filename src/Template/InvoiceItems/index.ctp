<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\InvoiceItem[]|\Cake\Collection\CollectionInterface $invoiceItems
 */
?>
<section style="padding:0 0;!important">
	<div class="container">
               <div class="text-center">
                    <h1>Sell List</h1>

                    </div>
    </div>
	</section>
<section class="section-background">
    <div class="container">

        <div class="row">
    <table cellpadding="0" cellspacing="0" class="table table-responsive">
        <thead>
            <tr>
                
                <th scope="col"><?= $this->Paginator->sort('invoice_id') ?></th>
				<th scope="col">Customer</th>
                <th scope="col"><?= $this->Paginator->sort('car_list_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('gross_amount') ?></th>
                <th scope="col"><?= $this->Paginator->sort('quantity') ?></th>
                <th scope="col"><?= $this->Paginator->sort('discount_amount') ?></th>
                <th scope="col"><?= $this->Paginator->sort('total_amount') ?></th>
                <th scope="col"><?= $this->Paginator->sort('delivery_charge') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created_at') ?></th>
               
            </tr>
        </thead>
        <tbody>
            <?php foreach ($invoiceItems as $invoiceItem): ?>
            <tr>
               <td><?= $invoiceItem->invoice->user->name ?></td>
                <td><?= $invoiceItem->has('invoice') ? $this->Html->link($invoiceItem->invoice->id, ['controller' => 'Invoices', 'action' => 'view', $invoiceItem->invoice->id]) : '' ?></td>
                <td><?= $invoiceItem->has('car_list') ? $this->Html->link($invoiceItem->car_list->name, ['controller' => 'CarLists', 'action' => 'view', $invoiceItem->car_list->id]) : '' ?></td>
                <td><?= $this->Number->format($invoiceItem->gross_amount) ?></td>
                <td><?= $this->Number->format($invoiceItem->quantity) ?></td>
                <td><?= $this->Number->format($invoiceItem->discount_amount) ?></td>
                <td><?= $this->Number->format($invoiceItem->total_amount) ?></td>
                <td><?= $this->Number->format($invoiceItem->delivery_charge) ?></td>
                <td><?= h($invoiceItem->created_at) ?></td>
               
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
</div>
</section>
