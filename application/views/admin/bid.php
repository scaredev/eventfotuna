<main>
	<div class="row">
		<div class="ul-wrapper">
			<div class="ul-wrapper">
				<?php echo $errors;?>
					<table class="responsive-table highlight">
						<thead>
							<tr>
								<th>Transaction code</th>
								<th>Costumer</th>
								<th>Event Type</th>
								<th>Total Bidders</th>
								<th>Winner</th>
								<th>Order Status</th>
								
							</tr>
						</thead>
						<tbody>
							<?php if( !empty($results) ) { ?>
								<?php foreach($results as $bids){?>
									<tr class="">
									<td><?php echo $bids->fname;?> </td>
									<td><?php echo $bids->email;?> </td>
									<td><?php echo $bids->party;?> </td>
									<td><?php echo $bids->tel;?> </td>
									<td><?php echo $bids->address;?></td>
									<?php if ($bids->completed == 0){ ?>
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