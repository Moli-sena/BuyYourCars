<?php $placeholder1=isset($placeholder)?implode(',',$placeholder):'';?>
<div align="left"><?= $this->Form->create('search',['class'=>'form-horizontal','type' => 'get']); ?>		

			<div class="col-sm-6" style="margin:12px;padding-left:0px!important;">
			<?php 
			            echo $this->Form->input('search',['class'=>'form-control','placeholder'=>$placeholder1,'empty' => true,'label' => false,'div'=>false]);
			?>
			 </div> <div class="col-sm-2" style="padding-top:12px!important;"> <?= $this->Form->button(__('Search'), ['class' => 'btn btn-success']) ?>
	</div>
	
   

    <?= $this->Form->end() ?></div>
	