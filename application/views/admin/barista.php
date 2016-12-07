<main>
	<div class="row">
		<div class="ul-wrapper">
			<div class="ul-wrapper">
				<?php echo $errors;?>
					<table class="responsive-table highlight">
						<thead>
							<tr>
								<th>Id</th>
								<th>Company</th>
								<th>Name</th>
								<th>Email</th>
								<th>Address</th>
								<th>Status</th>
								<th>Priviledge</th>
							</tr>
						</thead>
						<tbody>
							<?php if( !empty($results) ) { ?>
								<?php foreach($results as $persons){?>
									<tr class="">
									<td><?php echo $persons->user_id;?> </td>
									<td><?php echo $persons->company;?> </td>
									<td><?php echo $persons->fname;?> </td>
									<td><?php echo $persons->email;?> </td>
									<td><?php echo $persons->company_address;?></td>
									<td>
									<?php if($persons->active == 1){
									echo "Active";}
									else{
									echo "Not verified" ;}
									?>
									</td>
									<?php if ($persons->admin == 1){ ?>
									<td><div class="valign-wrapper"><div class="chip red darken-4 text-primary-color">Admin</div></div></td>
									<?php } else { ?>
									<td><div class="valign-wrapper"><div class="chip orange lighten-2 text-primary-color">User Barista</div></div></td>
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