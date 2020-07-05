<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Cart $cart
 */
?>
<div class="container">
               <div class="text-center">
                    <h1>Edit Category</h1>

                    <br>

                    </div>
          </div>
		  
<section class="section-background">
    <div class="container">

        <div class="row">
			<nav class="col-lg-3 col-xs-12 large-3 medium-4 columns" id="actions-sidebar">
				<ul class="side-nav">
					<li class="heading"><?= __('Actions') ?></li>
					<li><?= $this->Html->link(__('List Carts'), ['action' => 'index']) ?></li>
					<li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
					<li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
					<li><?= $this->Html->link(__('List Car Lists'), ['controller' => 'CarLists', 'action' => 'index']) ?></li>
					<li><?= $this->Html->link(__('New Car List'), ['controller' => 'CarLists', 'action' => 'add']) ?></li>
				</ul>
			</nav>
			<div class="col-lg-9 col-xs-12 carts form large-9 medium-8 columns content">
				<?= $this->Form->create($cart) ?>
				<fieldset>
					<legend><?= __('Add Cart') ?></legend>
					<?php
						echo $this->Form->control('user_id', ['options' => $users]);
						echo $this->Form->control('price');
						echo $this->Form->control('tax');
						echo $this->Form->control('car_list_id', ['options' => $carLists]);
					?>
				</fieldset>
				<?= $this->Form->button(__('Submit')) ?>
				<?= $this->Form->end() ?>
			</div>
		</div>
	</div>
</section>