<main>
	<div class="ul-wrapper">
		<?php echo $errors;?>


      <table class="responsive-table highlight">
        <thead>
									<tr>
									  <th>Costumer</th>
									  <th>Event Type</th>
									  <th>Party type</th>
									  <th>No.of Guest</th>
									  <th>Location</th>
									  <th>Bid Amount</th>
									  <th>Status</th>
									</tr>
		</thead>

        <tbody>
								  <?php if( !empty($results) ) { ?>
									  <?php foreach($results as $bids){?>
									  
										<tr class="">
										  <td><?php echo $bids->costumer_fname;?> </td>
										  <td><?php echo $bids->party;?> </td>
										  <td><?php echo $bids->partytype;?> </td>
										  <td><?php echo $bids->participants;?> </td>
										  <td><?php echo $bids->address;?> <br><?php echo $bids->zipcode;?></td>
										  <td><?php echo $bids->bid_prize;?> </td>
										  
											<?php if ($bids->completed != 0){ ?>
													<?php if ($bids->completed === $bids->bid_barista_id){ ?>
														<td><div class="valign-wrapper"><div class="chip teal text-primary-color">Win</div></div></td>
													<?php } else {?>
														<td><div class="valign-wrapper"><div class="chip orange darken-4 text-primary-color">Lost</div></div></td>
													<?php } ?>
											<?php } else { ?>
												<td><div class="valign-wrapper"><div class="chip orange lighten-2 text-primary-color">Pending</div></div></td>
											<?php } ?>
										</tr>
									  <?php } ?>
								  <?php } ?>
								  </tbody>
      </table>
            
		<div class="container center">
		<?php echo $links;?>
		</div>

	</div>
</main>	