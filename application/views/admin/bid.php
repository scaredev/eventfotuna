<main>
	<div class="row">
		<div class="ul-wrapper">
			<div class="ul-wrapper">
				<?php echo $errors;?>
					<table class="responsive-table highlight">
						<thead>
							<tr>
								<th>Transaction code</th>
								<th>Costumer Name</th>
								<th>Costumer Email</th>
								<th>Event Type</th>
								<th>Barista Bidder</th>
								<th>Winner</th>
								<th>Order Status</th>
								
							</tr>
						</thead>
						<tbody>
							<?php if( !empty($results) ) { ?>
								<?php foreach($results as $bids){?>
									<tr class="">
									<td><?php echo $bids->transaction_id;?> </td>
									<td><?php echo $bids->costumer_fname;?> </td>
									<td><?php echo $bids->costumer_email;?> </td>
									<td><?php echo $bids->party;?> </td>
									<td><?php echo $bids->fname;?> </td>
									<td><?php echo $bids->bid_completed;?></td>
									<?php if ($bids->bid_completed == 0){ ?>
									<td><div class="valign-wrapper"><div class="chip green darken-4 text-primary-color">Open</div></div></td>
									<?php } else { ?>
									<td><div class="valign-wrapper"><div class="chip red lighten-2 text-primary-color">Closed</div></div></td>
									<?php } ?>
								<?php } ?>
							<?php } ?>
							</tr>
						</tbody>
					</table>
			<div class="container center">
				<?php echo $links;?>
			</div>
		</div>
	</div>				
</main>