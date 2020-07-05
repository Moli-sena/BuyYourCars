<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\CarList $carList
 */
?>
<div class="container">
               <div class="text-center">
                    <h1>Add Car</h1>

                    <br>

                    </div>
          </div>
		  
<section class="section-background">
    <div class="container">

        <div class="row">		 
			<?= $this->Form->create($carList,['type'=>'file']) ?>
			<div class="form-group">
    <label for="exampleInputEmail1">Category</label>
     <?= $this->Form->input('category_id', ['options'=>$category,'class'=>'form-control','label'=>false,'div'=>false]); ?>
	  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Name</label>
     <?= $this->Form->input('name', ['class'=>'form-control','label'=>false,'div'=>false]); ?>
	  </div>
	  <div class="form-group">
    <label for="exampleInputEmail1">Model No</label>
     <?= $this->Form->input('model_no', ['class'=>'form-control','label'=>false,'div'=>false]); ?>
	  </div>
	  
	  <div class="form-group">
    <label for="exampleInputPassword1">Car Price</label>
    <?= $this->Form->input('price', ['class'=>'form-control','label'=>false,'div'=>false]); ?>
  </div>
	  
  <div class="form-group">
    <label for="exampleInputPassword1">Selling Price</label>
    <?= $this->Form->input('car_price', ['class'=>'form-control','label'=>false,'div'=>false]); ?>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Milage</label>
    <?= $this->Form->input('milage', ['class'=>'form-control','label'=>false,'div'=>false]); ?>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Engine Size</label>
    <?= $this->Form->input('engine_size', ['class'=>'form-control','label'=>false,'div'=>false]); ?>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Power</label>
    <?= $this->Form->input('power', ['class'=>'form-control','label'=>false,'div'=>false]); ?>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Gear Box</label>
    <?= $this->Form->input('gearbox', ['class'=>'form-control','label'=>false,'div'=>false]); ?>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Number Of Seats</label>
    <?= $this->Form->input('number_of_seats', ['type'=>'number','class'=>'form-control','label'=>false,'div'=>false]); ?>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Colour</label>
    <?= $this->Form->input('color', ['class'=>'form-control','label'=>false,'div'=>false]); ?>
  </div>
   <div class="form-group">
    <label for="exampleInputPassword1">Description</label>
    <?= $this->Form->input('description', ['class'=>'form-control','label'=>false,'div'=>false]); ?>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Image</label>
    <?= $this->Form->input('image', ['type'=>'file','class'=>'form-control','label'=>false,'div'=>false]); ?>
  </div>
  
  <div class="form-group form-check"><button type="submit" class="btn btn-primary">Save</button></div>
<?= $this->Form->end() ?>
			
			
		</div>
	</div>
</section>