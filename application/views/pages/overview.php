<div class="row">
	<div class="col s12 m4 l3">
		<?php $this->load->view('templates/material-nav.php'); ?>
	</div>	
	<div class="col s12 m8 l9">

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
									  <td><?php echo $orders->orders_id;?></td>
									  <td><?php echo $orders->name;?></td>
									  <td><?php echo $orders->party; ?></td>
									  <td><?php echo $orders->partytype; ?></td>
									  <td><?php echo $orders->participants;?></td>
									 <td><?php echo $orders->address;?></td>
									  <td> <span class="bidder">
											<i class="fa fa-clock-o" aria-hidden="true"></i> <span>10 Bids</span></span>
											<form id="order-form" data-toggle="validator" role="form" action="<?php echo base_url();?>Bid/submit_bid" method="post">
												<input  class="bidder accent-color" type="hidden" name="order-id" value="<?php echo $orders->orders_id;?>">
												<input class="bidder" type="text" name="prize" placeholder = "enter your prize">
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
								
							
	</div><!-- end col s12 m8 l9 -->
</div><!-- end row -->
