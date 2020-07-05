<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Invoice[]|\Cake\Collection\CollectionInterface $invoices
 */
?>
<section style="padding:0 0;!important">
	<div class="container">
               <div class="text-center">
                    <h1>My Order</h1>

                    </div>
    </div>
	</section>
<section class="section-background">
    <div class="container">

        <div class="row">
    <table cellpadding="0" cellspacing="0" class="table table-responsive">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('user_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('order_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('gross') ?></th>
                <th scope="col"><?= $this->Paginator->sort('discount') ?></th>
                <th scope="col"><?= $this->Paginator->sort('tax') ?></th>
                <th scope="col"><?= $this->Paginator->sort('total_amount') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created_at') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($invoices as $invoice): ?>
            <tr>
                <td><?= $this->Number->format($invoice->id) ?></td>
                <td><?= $invoice->has('user') ? $this->Html->link($invoice->user->name, ['controller' => 'Users', 'action' => 'view', $invoice->user->id]) : '' ?></td>
                <td><?= h($invoice->order_id) ?></td>
                <td><?= $this->Number->format($invoice->gross) ?></td>
                <td><?= $this->Number->format($invoice->discount) ?></td>
                <td><?= $this->Number->format($invoice->tax) ?></td>
                <td><?= $this->Number->format($invoice->total_amount) ?></td>
                <td><?= h($invoice->created_at) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $invoice->id],['class'=>'btn btn-primary']) ?>
                  
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
</div>
</section>
