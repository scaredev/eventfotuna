<main>
	<div class="ul-wrapper">
		


      <table class="responsive-table highlight">
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
														<td><?php echo $bids->completed ;?><span class="new badge" data-badge-caption="Win"><i class="material-icons">location_on</i></span></td>
													<?php } else {?>
														<td><?php echo $bids->completed ;?><span class="new badge" data-badge-caption="Lose"><i class="material-icons">location_on</i></span></td>
													<?php } ?>
											<?php } else { ?>
												<td><?php echo $bids->completed ;?><span class="new badge " data-badge-caption="Pending"><i class="material-icons">location_on</i></span></td>
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