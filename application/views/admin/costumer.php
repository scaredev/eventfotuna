<main>
	<div class="row">
		<div class="ul-wrapper">
			<div class="ul-wrapper">
				<?php echo $errors;?>
					<table class="responsive-table highlight">
						<thead>
							<tr>
								<th>Name</th>
								<th>Email</th>
								<th>Type</th>
								<th>Contact</th>
								<th>Address</th>
								<th>Order Status</th>
								
							</tr>
						</thead>
						<tbody>
							<?php if( !empty($results) ) { ?>
								<?php foreach($results as $persons){?>
									<tr class="">
									<td><?php echo $persons->fname;?> </td>
									<td><?php echo $persons->email;?> </td>
									<td><?php echo $persons->party;?> </td>
									<td><?php echo $persons->tel;?> </td>
									<td><?php echo $persons->address;?></td>
									<?php if ($persons->completed == 0){ ?>
									<td><div class="valign-wrapper"><div class="chip green lighten-2 text-primary-color">Open</div></div></td>
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