<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Cart[]|\Cake\Collection\CollectionInterface $carts
 */
?>

<div class="container">
               <div class="text-center">
                    <h1>Sell Lists</h1>

                    <br>

                    </div>
          </div>
		  
<section class="section-background">
    <div class="container">

        <div class="row">

			<?=$this->element('menu');?>
			<div class="col-lg-9 col-xs-12 carts index large-9 medium-8 columns content">
				<h3><?= __('Carts') ?></h3>
				<table cellpadding="0" cellspacing="0" class="table">
					<thead>
						<tr>
							<th scope="col"><?= $this->Paginator->sort('id') ?></th>
							<th scope="col"><?= $this->Paginator->sort('user_id') ?></th>
							<th scope="col"><?= $this->Paginator->sort('price') ?></th>
							<th scope="col"><?= $this->Paginator->sort('tax') ?></th>
							<th scope="col"><?= $this->Paginator->sort('car_list_id') ?></th>
						   
						</tr>
					</thead>
					<tbody>
						<?php foreach ($carts as $cart): ?>
						<tr>
							<td><?= $this->Number->format($cart->id) ?></td>
							<td><?= $cart->has('user') ? $this->Html->link($cart->user->name, ['controller' => 'Users', 'action' => 'view', $cart->user->id]) : '' ?></td>
							<td><?= h($cart->price) ?></td>
							<td><?= h($cart->tax) ?></td>
							<td><?= $cart->has('car_list') ? $this->Html->link($cart->car_list->name, ['controller' => 'CarLists', 'action' => 'view', $cart->car_list->id]) : '' ?></td>
							
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
	</div>
</section>