<main>
	<div class="container">
	<div class="ul-wrapper">
	<?php if( !empty($results) ) { ?>
		<?php echo $errors;?>
    <h4>Hi <?php echo $orders->costumer_fname;?>, Your OrderId: <?php echo $orders->transaction_id;?></h4>
    <p>List of bidders for your Upcomming Event, Order last: <?php echo $orders->orderdate;?></p>
	<p>With the following details: </br> Total number of expected guest: <?php echo $orders->participants;?></p>
	<p>Parytype: <?php echo $orders->partytype;?></p>
	<p>Event Date: <?php echo $orders->eventdate;?></p>
	<p>Address: <?php echo $orders->address; ?></p>
	<?php } ?>
	
      <table class="responsive-table highlight">
        <thead>
									<tr>
									  <th>Bidder</th>
									  <th>Company</th>
									  <th>Contact</th>
									  <th>Cart</th>
									  <th>Services</th>
									  <th>Bid Prize</th>
									  <th><div class="chip accent-color">Action</div></th>
									</tr>
		</thead>

        <tbody>
								  <?php if( !empty($results) ) { ?>
									  <?php foreach($results as $bids){?>
									  
										<tr class="">
										  <td><?php echo $bids->fname;?> </td>
										  <td><?php echo $bids->company;?> </td>
										  <td><?php echo $bids->mobile;?> </td>
										  <td><?php echo $bids->cart_type;?></td>
										  <td><?php echo $bids->services?></td>
										  <td><?php echo $bids->bid_prize;?> </td>
										  
											<?php if ($bids->completed != 0){ ?>
													
														<td><div class="valign-wrapper"><div class="chip teal text-primary-color">Win</div></div></td>
													
														<td><div class="valign-wrapper"><div class="chip orange darken-4 text-primary-color">Lost</div></div></td>
													
											<?php } else { ?>
												<td><div class="valign-wrapper"><button class="btn_flat chip orange lighten-2 text-primary-color">Pending</button></div></td>
											<?php } ?>
										</tr>
									  <?php } ?>
								  <?php } ?>
								  </tbody>
      </table>
            
		<div class="container center">
		
		</div>

	</div>
	</div>
</main	