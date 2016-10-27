<!-- start row user dashboard -->

					<div class="row">
							<div class="user-dashboard">
							
							<form class="form-inline pull-xm-right">
							<div class="form-group">
							   <label for="exampleInputName2"><strong>Transaction History</strong></label>
							   
								<input class="form-control" type="text" placeholder="Search">
							   </div>	
								<button class="btn btn-outline-success" type="submit">Search</button>
							
							</form>
							<hr>
							<div class="table-responsive">
								<table class="table table-hover">
								  <thead>
									<tr>
									  <th>Costumer</th>
									  <th>Event Type</th>
									  <th>Party type</th>
									  <th>No.of Guest</th>
									  <th>Location</th>
									  <th>Status</th>
									</tr>
								  </thead>
								  <tbody>
								  <?php if( !empty($results) ) { ?>
									  <?php foreach($results as $bids){?>
									  
										<tr class="">
										  <td><?php echo $bids->name;?> </td>
										  <td><?php echo $bids->party;?> </td>
										  <td><?php echo $bids->partytype;?> </td>
										  <td><?php echo $bids->participants;?> </td>
										  <td><?php echo $bids->address;?> <br><?php echo $bids->zipcode;?></td>
										  
											<?php if ($bids->completed != 0){ ?>
													<?php if ($bids->completed === $bids->barista_id){ ?>
														<td><?php echo $bids->completed ;?><span class="badge badge-success badge-icon"><i class="fa fa-check" aria-hidden="true"></i><span>Complete</span></span></td>
													<?php } else {?>
														<td><?php echo $bids->completed ;?><span class="badge alert-danger badge-icon"><i class="fa fa-ban-circle" aria-hidden="true"></i><span>BidOut!</span></span></td>
													<?php } ?>
											<?php } else { ?>
												<td><?php echo $bids->completed ;?><span class="badge badge-warning badge-icon"><i class="fa fa-time" aria-hidden="true"></i><span>Pending</span></span></td>
											<?php } ?>
										</tr>
									  <?php } ?>
								  <?php } ?>
								  </tbody>
								</table>
								<div class="row">
									<nav aria-label="...">									 	
											<?php echo $links;?>
									</nav>
								</div>
								
							</div>
						</div>	

					
					</div>
<!-- end user dashboard -->