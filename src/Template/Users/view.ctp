<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */
?>

<div class="container">
               <div class="text-center">
                    <h1> View Users</h1>

                    <br>

                    </div>
          </div>

<section class="section-background">
    <div class="container">

        <div class="row">

			<nav class="col-lg-3 col-xs-12" id="actions-sidebar">
				<ul class="side-nav">
					<li class="heading"><?= __('Actions') ?></li>
					<li><?= $this->Html->link(__('Edit User'), ['action' => 'edit', $user->id]) ?> </li>
					<li><?= $this->Form->postLink(__('Delete User'), ['action' => 'delete', $user->id], ['confirm' => __('Are you sure you want to delete # {0}?', $user->id)]) ?> </li>
					<li><?= $this->Html->link(__('List Users'), ['action' => 'index']) ?> </li>
					<li><?= $this->Html->link(__('New User'), ['action' => 'add']) ?> </li>
					<li><?= $this->Html->link(__('List Car Lists'), ['controller' => 'CarLists', 'action' => 'index']) ?> </li>
					<li><?= $this->Html->link(__('New Car List'), ['controller' => 'CarLists', 'action' => 'add']) ?> </li>
					<li><?= $this->Html->link(__('List Carts'), ['controller' => 'Carts', 'action' => 'index']) ?> </li>
					<li><?= $this->Html->link(__('New Cart'), ['controller' => 'Carts', 'action' => 'add']) ?> </li>
				</ul>
			</nav>
			<div class="col-lg-9 col-xs-12 users view large-9 medium-8 columns content">
				<h3><?= h($user->name) ?></h3>
				<table class="vertical-table">
					<tr>
						<th scope="row"><?= __('Name') ?></th>
						<td><?= h($user->name) ?></td>
					</tr>
					<tr>
						<th scope="row"><?= __('Email') ?></th>
						<td><?= h($user->email) ?></td>
					</tr>
					<tr>
						<th scope="row"><?= __('Phone Number') ?></th>
						<td><?= h($user->phone_number) ?></td>
					</tr>
					<tr>
						<th scope="row"><?= __('Password') ?></th>
						<td><?= h($user->password) ?></td>
					</tr>
					<tr>
						<th scope="row"><?= __('Id') ?></th>
						<td><?= $this->Number->format($user->id) ?></td>
					</tr>
					<tr>
						<th scope="row"><?= __('User Type') ?></th>
						<td><?= $this->Number->format($user->user_type) ?></td>
					</tr>
					<tr>
						<th scope="row"><?= __('Created At') ?></th>
						<td><?= h($user->created_at) ?></td>
					</tr>
					<tr>
						<th scope="row"><?= __('Deleted') ?></th>
						<td><?= $user->deleted ? __('Yes') : __('No'); ?></td>
					</tr>
				</table>
				<div class="related">
					<h4><?= __('Related Car Lists') ?></h4>
					<?php if (!empty($user->car_lists)): ?>
					<table cellpadding="0" cellspacing="0">
						<tr>
							<th scope="col"><?= __('Id') ?></th>
							<th scope="col"><?= __('Name') ?></th>
							<th scope="col"><?= __('User Id') ?></th>
							<th scope="col"><?= __('Car Price') ?></th>
							<th scope="col"><?= __('Is Sold') ?></th>
							<th scope="col"><?= __('Active') ?></th>
							<th scope="col"><?= __('Deleted') ?></th>
							<th scope="col" class="actions"><?= __('Actions') ?></th>
						</tr>
						<?php foreach ($user->car_lists as $carLists): ?>
						<tr>
							<td><?= h($carLists->id) ?></td>
							<td><?= h($carLists->name) ?></td>
							<td><?= h($carLists->user_id) ?></td>
							<td><?= h($carLists->car_price) ?></td>
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
				<div class="related">
					<h4><?= __('Related Carts') ?></h4>
					<?php if (!empty($user->carts)): ?>
					<table cellpadding="0" cellspacing="0">
						<tr>
							<th scope="col"><?= __('Id') ?></th>
							<th scope="col"><?= __('User Id') ?></th>
							<th scope="col"><?= __('Price') ?></th>
							<th scope="col"><?= __('Tax') ?></th>
							<th scope="col"><?= __('Car List Id') ?></th>
							<th scope="col" class="actions"><?= __('Actions') ?></th>
						</tr>
						<?php foreach ($user->carts as $carts): ?>
						<tr>
							<td><?= h($carts->id) ?></td>
							<td><?= h($carts->user_id) ?></td>
							<td><?= h($carts->price) ?></td>
							<td><?= h($carts->tax) ?></td>
							<td><?= h($carts->car_list_id) ?></td>
							<td class="actions">
								<?= $this->Html->link(__('View'), ['controller' => 'Carts', 'action' => 'view', $carts->id]) ?>
								<?= $this->Html->link(__('Edit'), ['controller' => 'Carts', 'action' => 'edit', $carts->id]) ?>
								<?= $this->Form->postLink(__('Delete'), ['controller' => 'Carts', 'action' => 'delete', $carts->id], ['confirm' => __('Are you sure you want to delete # {0}?', $carts->id)]) ?>
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