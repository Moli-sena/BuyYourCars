<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\CarList $carList
 */
?>

 
     <section>
          <div class="container">
               <div class="row">
                    <div class="col-md-6 col-xs-12">
                         <div>
                              <img src="<?=$this->Url->build('/upload/cars/'.$carList->image,true);?>" alt="" class="img-responsive wc-image">
                         </div>

                         <br>

                         <div class="row">
                              <div class="col-sm-4 col-xs-6">
                                   <div>
                                        <img src="<?=$this->Url->build('/upload/cars/'.$carList->image,true);?>" alt="" class="img-responsive">
                                   </div>
                                   
                                   <br>
                              </div>

                              
                         </div>
                    </div>

                    <div class="col-md-6 col-xs-12">
                         <form action="#" method="post" class="form">
                              <h2><?= h($carList->name) ?></h2>

                              <p class="lead"></p>
                              
                              <p class="lead"><small><del> $<?= h($carList->price) ?></del></small> <strong class="text-primary">$<?= h($carList->car_price) ?></strong></p>

                              <div class="row">
                                   <div class="col-md-4 col-sm-6">
                                        <p>
                                             <span>Type</span>

                                             <br>

                                             <strong>Used vehicle</strong>
                                        </p>
                                   </div>

                                   <div class="col-md-4 col-sm-6">
                                        <p>
                                             <span>Make</span>

                                             <br>

                                             <strong>Lorem ipsum dolor sit</strong>
                                        </p>
                                   </div>

                                   <div class="col-md-4 col-sm-6">
                                        <p>
                                             <span> Model</span>

                                             <br>

                                             <strong>Lorem ipsum dolor sit</strong>
                                        </p>
                                   </div>

                                   <div class="col-md-4 col-sm-6">
                                        <p>
                                             <span>First registration</span>

                                             <br>

                                             <strong>05/2010</strong>
                                        </p>
                                   </div>

                                   <div class="col-md-4 col-sm-6">
                                        <p>
                                             <span>Mileage</span>

                                             <br>

                                             <strong><?= h($carList->milage) ?></strong>
                                        </p>
                                   </div>

                                   <div class="col-md-4 col-sm-6">
                                        <p>
                                             <span>Model</span>

                                             <br>

                                             <strong><?= h($carList->model_no) ?></strong>
                                        </p>
                                   </div>

                                   <div class="col-md-4 col-sm-6">
                                        <p>
                                             <span>Engine size</span>

                                             <br>

                                             <strong><?= h($carList->engine_size) ?></strong>
                                        </p>
                                   </div>

                                   <div class="col-md-4 col-sm-6">
                                        <p>
                                             <span>Power</span>

                                             <br>

                                             <strong><?= h($carList->power) ?></strong>
                                        </p>
                                   </div>


                                   <div class="col-md-4 col-sm-6">
                                        <p>
                                             <span>Gearbox</span>

                                             <br>

                                             <strong><?= h($carList->gearbox) ?></strong>
                                        </p>
                                   </div>

                                   <div class="col-md-4 col-sm-6">
                                        <p>
                                             <span>Number of seats</span>

                                             <br>

                                             <strong><?= h($carList->number_of_seats) ?></strong>
                                        </p>
                                   </div>

                                   <div class="col-md-4 col-sm-6">
                                        <p>
                                             <span>Doors</span>

                                             <br>

                                             <strong>2/3</strong>
                                        </p>
                                   </div>

                                   <div class="col-md-4 col-sm-6">
                                        <p>
                                             <span>Color</span>

                                             <br>

                                             <strong><?= h($carList->color) ?></strong>
                                        </p>
                                   </div><div class="col-md-4 col-sm-6"></div>
								   
								   <div class="col-md-12 col-sm-12 aa-prod-view-bottom">
                                        <p>
                                             <div class="courses-info">
										<?= $this->Html->link(__('Add to Cart'), ['controller'=>"Carts"
										, 'action' => 'add', $carList->id],['class' => 'section-btn btn btn-primary btn-block']) ?>
                                             
                                        </div>

                                             
                                        </p>
                                   </div>
								   
                              </div>
                         </form>
                    </div>
               </div>

               <div class="row">
                    <div class="col-lg-8 col-xs-12">
                         <div class="panel panel-default">
                              <div class="panel-heading">
                                   <h4>Vehicle Description</h4>
                              </div>

                              <div class="panel-body">
                                   <p><?= h($carList->description) ?></p>
                              </div>
                         </div>
                    </div>

                    <div class="col-lg-4 col-xs-12">
                         <div class="panel panel-default">
                              <div class="panel-heading">
                                   <h4>Contact Details</h4>
                              </div>

                              <div class="panel-body">
                                   <p>
                                        <span>Name</span>

                                        <br>

                                        <strong>John Smith</strong>
                                   </p>

                                   <p>
                                        <span>Phone</span>

                                        <br>

                                        <strong><a href="tel:123-456-789">123-456-789</a></strong>
                                   </p>


                                   <p>
                                        <span>Mobile phone</span>

                                        <br>

                                        <strong><a href="tel:456789123">456789123</a></strong>
                                   </p>

                                   <p>
                                        <span>Email</span>

                                        <br>

                                        <strong><a href="mailto:john@carsales.com">john@carsales.com</a></strong>
                                   </p>
                              </div>
                         </div>
                    </div>
               </div>
          </div>
     </section>