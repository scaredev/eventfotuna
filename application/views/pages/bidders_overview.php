<main>
	<div class="container">
	<div class="ul-wrapper">
		<?php echo $errors;?>

    <p>List of bidders for your Upcomming Event <?php $orders->partytype;?></p>
	
      <table class="responsive-table highlight">
        <thead>
									<tr>
									  <th>Bidder</th>
									  <th>Company</th>
									  <th>Products</th>
									  <th>Cart</th>
									  <th>Bid Prize</th>
									  <th></th>
									  <th>Status</th>
									</tr>
		</thead>

        <tbody>
								  <?php if( !empty($results) ) { ?>
									  <?php foreach($results as $bids){?>
									  
										<tr class="">
										  <td><?php echo $bids->fname;?> </td>
										  <td><?php echo $bids->company;?> </td>
										  <td><?php echo $bids->services;?> </td>
										  <td><?php echo $bids->cart_type;?></td>
										  <td><?php echo $bids->prize;?></td>
										  <td><?php echo $bids->prize;?> </td>
										  
											<?php if ($bids->completed != 0){ ?>
													<?php if ($bids->completed === $bids->barista_id){ ?>
														<td><div class="valign-wrapper"><div class="chip teal text-primary-color">Win</div></div></td>
													<?php } else {?>
														<td><div class="valign-wrapper"><div class="chip orange darken-4 text-primary-color">Lost</div></div></td>
													<?php } ?>
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