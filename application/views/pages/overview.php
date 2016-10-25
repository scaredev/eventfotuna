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
									  <th>Costumer</th>
									  <th>Cart Type</th>
									  <th>Event type</th>
									  <th>No.of Guest</th>
									  <th>Location</th>
									  <th>Status</th>
									</tr>
								  </thead>
								  <tbody>
								  <?php foreach($results as $orders){?>
									<tr class="">
									  <td><img src="<?= base_url();?>img/profilepic.jpg" alt="..." class="img-circle img-fluid"></td>
									  <td>Coffee cart</td>
									  <td><?php echo $orders->party; ?></td>
									  <td>50</td>
									 <td>#3412 st. lorem ipsum</button></td>
									  <td> <span class="bidder">
											<i class="fa fa-clock-o" aria-hidden="true"></i> <span>10 Bids</span></span>
											<a class="bidder" href="#" role="button">Bid</a> </td>
									
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