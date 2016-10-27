<!-- start row user dashboard -->

				<div class="row">
					<div class="col-md-12">

							
							<form class="form-inline pull-xm-right">
								<div class="form-group">
							   <label for="exampleInputName2"><strong>Orders View</strong></label>
							   
								<input class="form-control" type="text" placeholder="Search">
							   </div>	
								<button class="btn btn-outline-success" type="submit">Search</button>
							
							</form>
							<hr>
								
								<table class="table table-condensed table-hover">
								  <thead>
									<tr>
									  <th>#</th>
									  <th>Costumer</th>
									  <th>Even Type</th>
									  <th>Party type</th>
									  <th>No.of Guest</th>
									  <th>Location</th>
									  <th>Status</th>
									</tr>
								  </thead>
								  <tbody>
								  <?php foreach($results as $orders){?>
									<tr class="">
									  <td><?php echo $orders->id;?></td>
									  <td><?php echo $orders->name;?></td>
									  <td><?php echo $orders->party; ?></td>
									  <td><?php echo $orders->partytype; ?></td>
									  <td><?php echo $orders->participants;?></td>
									 <td><?php echo $orders->address;?></td>
									  <td> <span class="bidder">
											<i class="fa fa-clock-o" aria-hidden="true"></i> <span>10 Bids</span></span>
											<form id="order-form" data-toggle="validator" role="form" action="<?php echo base_url();?>Bid/submit_bid" method="post">
												<input  class="bidder" type="hidden" name="order-id" value="<?php echo $orders->id;?>">
												<input class="bidder" type="text" name="prize">
												<button type="submit" class="bidder" href="#" role="button">Bid</button> </td>
											</form>	
									
									</tr>
									<?php }?>  
								  </tbody>
								</table>
								
								<div class="row">
									<nav aria-label="...">									 	
											<?php echo $links;?>
									</nav>
								</div>
								
							

					</div>
					
				</div>
<!-- end user dashboard -->