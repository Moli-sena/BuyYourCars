
  <section style="padding:0 0;">
          <div class="container">
               <div class="text-center">
                    <h1>Car Listing</h1>

                    
               </div>
          </div>
     </section>

     <section class="section-background">
          <div class="container">
				
               <div class="row">
                    <div class="col-lg-3 col-xs-12">
						<div align="form">
									<?= $this->Form->create('search',['class'=>'form-horizontal','type' => 'get']); ?>		

									<div class="col-sm-6" style="margin:12px;padding-left:0px!important;">
									<?php 
												echo $this->Form->input('search',['class'=>'form-control','placeholder'=>'Search by Name Or Dealer Name','empty' => true,'label' => false,'div'=>false]);
									?>
									 </div> 
							<div class="col-sm-2" style="padding-top:12px!important;"> <?= $this->Form->button(__('Search'), ['class' => 'btn btn-success']) ?>
							</div>
							
						   

							<?= $this->Form->end() ?>
						</div>
                         <div class="form">
                              <form action="#">
                                   <div class="form-group">
                                        <label style="padding-left: 20px;">Used/New:</label>

                                        <select class="form-control">
                                             <option value="">All</option>
                                             <option value="new">New vehicle</option>
                                             <option value="used">Used vehicle</option>
                                        </select>
                                   </div>

                                   <div class="form-group">
                                        <label>Vehicle Type:</label>

                                        <select class="form-control">
                                             <option value="">--All --</option>
                                             <option value="">option 1</option>
                                             <option value="">option 2</option>
                                             <option value="">option 3</option>
                                             <option value="">option 4</option>
                                        </select>
                                   </div>

                                   <div class="form-group">
                                        <label>Make:</label>
                                        
                                        <select class="form-control">
                                             <option value="">-- All --</option>
                                             <option value="">option 1</option>
                                             <option value="">option 2</option>
                                             <option value="">option 3</option>
                                             <option value="">option 4</option>
                                        </select>
                                   </div>

                                   <div class="form-group">
                                        <label>Model:</label>
                                        
                                        <select class="form-control">
                                             <option value="">-- All --</option>
                                             <option value="">option 1</option>
                                             <option value="">option 2</option>
                                             <option value="">option 3</option>
                                             <option value="">option 4</option>
                                        </select>
                                   </div>

                                   <div class="form-group">
                                        <label>Price:</label>
                                        
                                        <select class="form-control">
                                             <option value="">-- All --</option>
                                             <option value="">option 1</option>
                                             <option value="">option 2</option>
                                             <option value="">option 3</option>
                                             <option value="">option 4</option>
                                        </select>
                                   </div>

                                   <div class="form-group">
                                        <label>Mileage:</label>
                                        
                                        <select class="form-control">
                                             <option value="">-- All --</option>
                                             <option value="">option 1</option>
                                             <option value="">option 2</option>
                                             <option value="">option 3</option>
                                             <option value="">option 4</option>
                                        </select>
                                   </div>

                                   <div class="form-group">
                                        <label>Engine size:</label>
                                        
                                        <select class="form-control">
                                             <option value="">-- All --</option>
                                             <option value="">option 1</option>
                                             <option value="">option 2</option>
                                             <option value="">option 3</option>
                                             <option value="">option 4</option>
                                        </select>
                                   </div>

                                   <div class="form-group">
                                        <label>Power:</label>
                                        
                                        <select class="form-control">
                                             <option value="">-- All --</option>
                                             <option value="">option 1</option>
                                             <option value="">option 2</option>
                                             <option value="">option 3</option>
                                             <option value="">option 4</option>
                                        </select>
                                   </div>

                                   <div class="form-group">
                                        <label>Fuel:</label>
                                        
                                        <select class="form-control">
                                             <option value="">-- All --</option>
                                             <option value="">option 1</option>
                                             <option value="">option 2</option>
                                             <option value="">option 3</option>
                                             <option value="">option 4</option>
                                        </select>
                                   </div>

                                   <div class="form-group">
                                        <label>Gearbox:</label>
                                        
                                        <select class="form-control">
                                             <option value="">-- All --</option>
                                             <option value="">option 1</option>
                                             <option value="">option 2</option>
                                             <option value="">option 3</option>
                                             <option value="">option 4</option>
                                        </select>
                                   </div>

                                   <div class="form-group">
                                        <label>Doors:</label>
                                        
                                        <select class="form-control">
                                             <option value="">-- All --</option>
                                             <option value="">option 1</option>
                                             <option value="">option 2</option>
                                             <option value="">option 3</option>
                                             <option value="">option 4</option>
                                        </select>
                                   </div>

                                   <div class="form-group">
                                        <label>Number of seats:</label>
                                        
                                        <select class="form-control">
                                             <option value="">-- All --</option>
                                             <option value="">option 1</option>
                                             <option value="">option 2</option>
                                             <option value="">option 3</option>
                                             <option value="">option 4</option>
                                        </select>
                                   </div>

                                   <button type="submit" class="section-btn btn btn-primary btn-block">Search</button>
                              </form>
                         </div>
                    </div>

                    <div class="col-lg-9 col-xs-12">
                         <div class="row">
						 <?php foreach ($carLists as $carList): ?>
                              <div class="col-lg-6 col-md-4 col-sm-6">
                                   <div class="courses-thumb courses-thumb-secondary">
                                        <div class="courses-top">
                                             <div class="courses-image">
                                                  <img src="<?=$this->Url->build('/upload/cars/'.$carList->image,true);?>" class="img-responsive" alt="">
                                             </div>
                                             <div class="courses-date">
                                                  <span title="Author"><i class="fa fa-dashboard"></i> <?= h($carList->milage) ?></span>
                                                  <span title="Author"><i class="fa fa-cube"></i> <?= h($carList->model_no) ?></span>
                                                  <span title="Views"><i class="fa fa-cog"></i> <?= h($carList->gearbox) ?></span>
                                             </div>
                                        </div>

                                        <div class="courses-detail">
                                             <h3>
											 
											 <a href="javascript:void(0);"><?= h($carList->name) ?></a></h3>

                                             <p class="lead"><small><del> $<?= h($carList->price) ?></del></small> <strong>$<?= h($carList->car_price) ?></strong></p>

                                             <p>190 hp &nbsp;&nbsp;/&nbsp;&nbsp; Petrol &nbsp;&nbsp;/&nbsp;&nbsp; 2008 &nbsp;&nbsp;/&nbsp;&nbsp; Used vehicle</p>
                                        </div>

                                        <div class="courses-info">
										<?= $this->Html->link(__('View More'), ['controller'=>"CarLists"
										, 'action' => 'view', $carList->id],['class' => 'section-btn btn btn-primary btn-block']) ?>
                                             
                                        </div>
                                   </div>
                              </div>
								<?php endforeach; ?>
                          </div>
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

   




