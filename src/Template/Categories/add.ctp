<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Category $category
 */
?>
<section>
          <div class="container">
               <div class="text-center">
                    <h1>Add Category</h1>

                    <br>

                    </div>
          </div>
   
</section>


<section class="section-background">
    <div class="container">

        <div class="row">		 
			<?= $this->Form->create($category) ?>
			
  <div class="form-group">
    <label for="exampleInputEmail1">Category Name</label>
     <?= $this->Form->input('name', ['class'=>'form-control','label'=>false,'div'=>false]); ?>
	  </div>
	  
	  <div class="form-group form-check">
	<label class="form-check-label" for="exampleCheck1"><?= $this->Form->control('status');?></label>
	  
  </div>
	  
	  
	
  <div class="form-group form-check"><button type="submit" class="btn btn-primary">Save</button></div>
<?= $this->Form->end() ?>
			
			
		</div>
	</div>
</section>




