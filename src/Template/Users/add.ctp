<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */
?>

<div class="container">
               <div class="text-center">
                    <h1>Add Users</h1>

                    <br>

                    </div>
          </div>
		  
		  
<section class="section-background">
    <div class="container">
<legend><?= __('User Registration') ?></legend>
        <div class="row">		 
			<?= $this->Form->create($user) ?>
			
  <div class="form-group">
    <label for="exampleInputEmail1">Name</label>
     <?= $this->Form->input('name', ['class'=>'form-control','label'=>false,'div'=>false]); ?>
	  </div>
	  <div class="form-group">
    <label for="exampleInputEmail1">email</label>
     <?= $this->Form->input('email', ['class'=>'form-control','label'=>false,'div'=>false]); ?>
	  </div>
	  
	  <div class="form-group">
    <label for="exampleInputPassword1">Phone Number</label>
    <?= $this->Form->input('phone_number', ['class'=>'form-control','label'=>false,'div'=>false]); ?>
  </div>
	  
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <?= $this->Form->input('password', ['type'=>'password','class'=>'form-control','label'=>false,'div'=>false]); ?>
  </div>
  
  <div class="form-group">
    <label for="exampleInputEmail1">User Type</label>
     <?= $this->Form->input('user_type', ['options'=>['1'=>'Seller','2'=>'Buyer'],'class'=>'form-control','label'=>false,'div'=>false]); ?>
	  </div>
  
  
  
  <div class="form-group form-check"><button type="submit" class="btn btn-primary">Save</button></div>
<?= $this->Form->end() ?>
			
			
		</div>
	</div>
</section>	