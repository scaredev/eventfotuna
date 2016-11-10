<main>
	<div class="container">
		
			  <ul class="foldable " data-collapsible="accordion">
				<li class="collection-item avatar">
				  
				</li>
				<?php foreach($results as $orders){?>
				<li>
				  <div class="collapsible-header">
					<i class="material-icons">filter_drama</i>
						<span class="title"><?php echo $orders->orders_id;?> <?php echo $orders->party;?></span>
											
				  </div>
				  <div class="collapsible-body"><p><?php echo $orders->partytype;?><br>
						 <?php echo $orders->participants;?><?php echo $orders->address;?></p>
						<div class="input-field inline">
							<input id="email" type="email" class="validate">
							<label for="email" data-error="wrong" data-success="right">Email</label>
						 </div>
				</div>
						 
				</li>
				
				  				
				<?php }?>
			  </ul>
					
		
		
		<div class="container center">
		<?php echo $links;?>
		</div>
	</div>
</main>