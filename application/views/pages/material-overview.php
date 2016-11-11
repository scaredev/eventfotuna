<main>
	<div class="ul-wrapper">
			
			  <ul class="collapsible collapsible-override" data-collapsible="accordion">
				<?php foreach($results as $orders){?>
				<li>
				
				<div class="collapsible-header">
						<span class="new badge hide-on-med-and-up" data-badge-caption="Total bidder">4</span>	
						<i class="material-icons">person_pin</i><?php echo $orders->orders_id;?>: <?php echo $orders->name;?>
						<div class="right hide-on-small-and-down">
							<span class="left databits"><i class="material-icons">supervisor_account</i><?php echo $orders->partytype;?></span>
							<span class="left databits"><i class="material-icons">supervisor_account</i><?php echo $orders->participants;?> participants</span>
							<span class="left databits"><i class="material-icons">language</i>Party host: <?php echo $orders->party;?></span>
							<span class="left databits"><i class="material-icons">location_on</i>zip code: <?php echo $orders->zipcode;?></span>
							
							<i class="material-icons right tooltipped" data-position="left" data-delay="50" data-tooltip="More detials">more_vert</i>
							<span class="new badge" data-badge-caption="Total bidder">4</span>	
						</div>
				    </div>
				  <div class="collapsible-body">
				    <p>More Details</p>
					<div class="right hide-on-med-and-up">
							<span class="left databits"><i class="material-icons">supervisor_account</i><?php echo $orders->partytype;?></span>
							<span class="left databits"><i class="material-icons">supervisor_account</i><?php echo $orders->participants;?> participants</span>
							<span class="left databits"><i class="material-icons">language</i>Party host: <?php echo $orders->party;?></span>
							<span class="left databits"><i class="material-icons">location_on</i>zip code: <?php echo $orders->zipcode;?></span>
					</div>
					
					
					  <div class="row">
						<form action="<?php echo base_url();?>Bid/submit_bid" method="post">
					     <div class="input-field col s6 m4 l4">
								<input name="order-id" type="hidden" value="<?php echo $orders->orders_id;?>">
								<input name="prize" id="bid" type="text" class="validate">
								<label for="bid">place bid</label>
						</div>
						<div class="input-field col s6 m4 l4">
							<button class="btn btn-small waves-effect waves-light" type="submit" name="action">Submit
								<i class="material-icons right">send</i>
							 </button>
						</div>
						</form>  
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