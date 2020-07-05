<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\CarList[]|\Cake\Collection\CollectionInterface $carLists
 */
?>
<section>
<div class="container">
               <div class="text-center">
                    <h1>Car Lists</h1>

                    <br>

                    </div>
          </div>
	</section>	  
<section class="section-background">
    <div class="container">

        <div class="row">	
			
			<div class="col-lg-9 col-xs-12 carLists index large-9 medium-8 columns content">
				<h3><?= __('Car Lists') ?></h3>
				<table cellpadding="0" cellspacing="0" class="table">
					<thead>
						<tr>
							<th scope="col"><?= $this->Paginator->sort('id') ?></th>
							<th scope="col"><?= $this->Paginator->sort('name') ?></th>
							<th scope="col"><?= $this->Paginator->sort('user_id') ?></th>
							<th scope="col"><?= $this->Paginator->sort('car_price') ?></th>
							<th scope="col"><?= $this->Paginator->sort('is_sold') ?></th>
							<th scope="col"><?= $this->Paginator->sort('active') ?></th>
							<th scope="col"><?= $this->Paginator->sort('deleted') ?></th>
							<th scope="col" class="actions"><?= __('Actions') ?></th>
						</tr>
					</thead>
					<tbody>
						<?php foreach ($carLists as $carList): ?>
						<tr>
							<td><?= $this->Number->format($carList->id) ?></td>
							<td><?= h($carList->name) ?></td>
							<td><?= $carList->has('user') ? $this->Html->link($carList->user->name, ['controller' => 'Users', 'action' => 'view', $carList->user->id]) : '' ?></td>
							<td><?= h($carList->car_price) ?></td>
							<td><?= h($carList->is_sold) ?></td>
							<td><?= h($carList->active) ?></td>
							<td><?= h($carList->deleted) ?></td>
							<td class="actions">
								<?= $this->Html->link(__('View'), ['action' => 'view', $carList->id]) ?>
								<?= $this->Html->link(__('Edit'), ['action' => 'edit', $carList->id]) ?>
								<?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $carList->id], ['confirm' => __('Are you sure you want to delete # {0}?', $carList->id)]) ?>
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
	</div>
</section>
