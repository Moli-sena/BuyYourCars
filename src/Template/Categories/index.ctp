<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Category[]|\Cake\Collection\CollectionInterface $categories
 */
?>
<section>
<div class="container">
               <div class="text-center">
                    <h1> Category List</h1>

                    <br>

                    </div>
          </div>
</section>

<section class="section-background">
    <div class="container">

        <div class="row">


			<nav class="col-lg-3 col-xs-12" id="actions-sidebar">
				<ul class="side-nav">
					<li class="heading"><?= __('Actions') ?></li>
					<li><?= $this->Html->link(__('New Category'), ['action' => 'add']) ?></li>
					<li><?= $this->Html->link(__('List Car Lists'), ['controller' => 'CarLists', 'action' => 'index']) ?></li>
					<li><?= $this->Html->link(__('New Car List'), ['controller' => 'CarLists', 'action' => 'add']) ?></li>
				</ul>
			</nav>
			<div class="col-lg-9 col-xs-12 categories index large-9 medium-8 columns content">
				<h3><?= __('Categories') ?></h3>
				 <table class="table">
					<thead>
						<tr>
							<th scope="col"><?= $this->Paginator->sort('id') ?></th>
							<th scope="col"><?= $this->Paginator->sort('name') ?></th>
							<th scope="col"><?= $this->Paginator->sort('status') ?></th>
							<th scope="col"><?= $this->Paginator->sort('deleted') ?></th>
							<th scope="col" class="actions"><?= __('Actions') ?></th>
						</tr>
					</thead>
					<tbody>
						<?php foreach ($categories as $category): ?>
						<tr>
							<td><?= $this->Number->format($category->id) ?></td>
							<td><?= h($category->name) ?></td>
							<td><?= h($category->status) ?></td>
							<td><?= h($category->deleted) ?></td>
							<td class="actions">
								<?= $this->Html->link(__('View'), ['action' => 'view', $category->id]) ?>
								<?= $this->Html->link(__('Edit'), ['action' => 'edit', $category->id]) ?>
								<?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $category->id], ['confirm' => __('Are you sure you want to delete # {0}?', $category->id)]) ?>
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