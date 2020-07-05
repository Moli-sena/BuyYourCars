<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Category $category
 */
?>
<section>
<div class="container">
               <div class="text-center">
                    <h1>View Category</h1>

                    <br>

                    </div>
          </div>
	</section>	  
<section class="section-background">
    <div class="container">

        <div class="row">	
			<nav class="col-lg-3 col-xs-12 large-3 medium-4 columns" id="actions-sidebar">
				<ul class="side-nav">
					<li class="heading"><?= __('Actions') ?></li>
					<li><?= $this->Html->link(__('Edit Category'), ['action' => 'edit', $category->id]) ?> </li>
					<li><?= $this->Form->postLink(__('Delete Category'), ['action' => 'delete', $category->id], ['confirm' => __('Are you sure you want to delete # {0}?', $category->id)]) ?> </li>
					<li><?= $this->Html->link(__('List Categories'), ['action' => 'index']) ?> </li>
					<li><?= $this->Html->link(__('New Category'), ['action' => 'add']) ?> </li>
					<li><?= $this->Html->link(__('List Car Lists'), ['controller' => 'CarLists', 'action' => 'index']) ?> </li>
					<li><?= $this->Html->link(__('New Car List'), ['controller' => 'CarLists', 'action' => 'add']) ?> </li>
				</ul>
			</nav>
			<div class="col-lg-9 col-xs-12 categories view large-9 medium-8 columns content">
				<h3><?= h($category->id) ?></h3>
				<table class="vertical-table">
					<tr>
						<th scope="row"><?= __('Category Name') ?></th>
						<td><?= h($category->name) ?></td>
					</tr>
					<tr>
						<th scope="row"><?= __('Id') ?></th>
						<td><?= $this->Number->format($category->id) ?></td>
					</tr>
					<tr>
						<th scope="row"><?= __('Status') ?></th>
						<td><?= $category->status ? __('Yes') : __('No'); ?></td>
					</tr>
					<tr>
						<th scope="row"><?= __('Deleted') ?></th>
						<td><?= $category->deleted ? __('Yes') : __('No'); ?></td>
					</tr>
				</table>
				<div class="related">
					<h4><?= __('Related Car Lists') ?></h4>
					<?php if (!empty($category->car_lists)): ?>
					<table cellpadding="0" cellspacing="0">
						<tr>
							<th scope="col"><?= __('Id') ?></th>
							<th scope="col"><?= __('Name') ?></th>
							<th scope="col"><?= __('User Id') ?></th>
							<th scope="col"><?= __('Category Id') ?></th>
							<th scope="col"><?= __('Car Price') ?></th>
							<th scope="col"><?= __('Image') ?></th>
							<th scope="col"><?= __('Description') ?></th>
							<th scope="col"><?= __('Model No') ?></th>
							<th scope="col"><?= __('Milage') ?></th>
							<th scope="col"><?= __('Is Sold') ?></th>
							<th scope="col"><?= __('Active') ?></th>
							<th scope="col"><?= __('Deleted') ?></th>
							<th scope="col" class="actions"><?= __('Actions') ?></th>
						</tr>
						<?php foreach ($category->car_lists as $carLists): ?>
						<tr>
							<td><?= h($carLists->id) ?></td>
							<td><?= h($carLists->name) ?></td>
							<td><?= h($carLists->user_id) ?></td>
							<td><?= h($carLists->category_id) ?></td>
							<td><?= h($carLists->car_price) ?></td>
							<td><?= h($carLists->image) ?></td>
							<td><?= h($carLists->description) ?></td>
							<td><?= h($carLists->model_no) ?></td>
							<td><?= h($carLists->milage) ?></td>
							<td><?= h($carLists->is_sold) ?></td>
							<td><?= h($carLists->active) ?></td>
							<td><?= h($carLists->deleted) ?></td>
							<td class="actions">
								<?= $this->Html->link(__('View'), ['controller' => 'CarLists', 'action' => 'view', $carLists->id]) ?>
								<?= $this->Html->link(__('Edit'), ['controller' => 'CarLists', 'action' => 'edit', $carLists->id]) ?>
								<?= $this->Form->postLink(__('Delete'), ['controller' => 'CarLists', 'action' => 'delete', $carLists->id], ['confirm' => __('Are you sure you want to delete # {0}?', $carLists->id)]) ?>
							</td>
						</tr>
						<?php endforeach; ?>
					</table>
					<?php endif; ?>
				</div>
			</div>
		</div>
	</div>
</section>	
