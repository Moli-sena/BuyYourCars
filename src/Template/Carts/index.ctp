<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Cart[]|\Cake\Collection\CollectionInterface $carts
 */
?>




<section style="padding:0 0;!important">
	<div class="container">
               <div class="text-center">
                    <h1>My Order</h1>

                    </div>
    </div>
	</section>	  
<section class="section-background">
<div class="container">
	<table id="cart" class="table table-hover table-condensed">
    				<thead>
						<tr>
							<th style="width:50%">Car Name</th>
							<th style="width:10%">Price</th>
							<th style="width:8%">Quantity</th>
							<th style="width:22%" class="text-center">Subtotal</th>
							<th style="width:10%"></th>
						</tr>
					</thead>
					<tbody>
					<?php 
					$total=0;
					foreach ($carts as $cart): 
					$total=$cart->total_amount;
							foreach($cart->cart_items as $c ){
					?>
						<tr>
							<td data-th="Product">
								<div class="row">
									<div class="col-sm-2 hidden-xs"><img src="<?=$this->Url->build('/upload/cars/'.$c->car_list->image,true);?>" alt="..." class="img-responsive"/></div>
									<div class="col-sm-10">
										<h4 class="nomargin"><?=$c->car_list->name?></h4>
										<p><?=$c->car_list->description?></p>
									</div>
								</div>
							</td>
							<td data-th="Price"><?=$c->total_amount?></td>
							<td data-th="Quantity">
								1
							</td>
							<td data-th="Subtotal" class="text-center"><?=$cart->total_amount?></td>
							<td class="actions" data-th="">
								<button class="btn btn-info btn-sm"><i class="fa fa-refresh"></i></button>								
							</td>
						</tr>
						<?php 
							}
						endforeach; ?>
					</tbody>
					<tfoot>
						<tr class="visible-xs">
							<td class="text-center"><strong>Total <?=$total?></strong></td>
						</tr>
						<tr>
							<td><a href="#" class="btn btn-warning"><i class="fa fa-angle-left"></i> Continue Shopping</a></td>
							<td colspan="2" class="hidden-xs"></td>
							<td class="hidden-xs text-center"><strong>Total <?=$total?></strong></td>
							<td><a href="<?=$this->Url->build(['controller'=>'carts',"action"=>'checkout',"prefix"=>false],true);?>">Checkout <i class="fa fa-angle-right"></i></a></td>
						</tr>
					</tfoot>
				</table>
</div>
  </section>
