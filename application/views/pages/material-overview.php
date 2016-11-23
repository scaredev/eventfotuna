<main>
	<div class="ul-wrapper">
			
			  <ul class="collapsible collapsible-override" data-collapsible="accordion">
			   <?php if( !empty($results) ) { ?>
				<?php foreach($results as $items){?>
				<li>
				
				<div class="collapsible-header ">
						<span class="new badge hide-on-med-and-up" data-badge-caption="Total bidder">4</span>	
						<i class="material-icons secondary-text-color">person_pin</i><?php echo $items->orders_id;?>: <?php echo $items->name;?>
						<div class="right hide-on-small-and-down">
							
						<span class="left databits"><i class="material-icons secondary-text-color">supervisor_account</i><?php echo $items->participants;?> participants</span>
						<span class="left databits"><i class="material-icons secondary-text-color">location_on</i>zip code: <?php echo $items->zipcode;?></span>
							<i class="material-icons right tooltipped" data-position="left" data-delay="50" data-tooltip="More detials">more_vert</i>
							<span class="new badge" data-badge-caption="Total bidder">4</span>	
						</div>
				    </div>
				  <div class="collapsible-body">
				    
					 <div class="left ">
					 <p>More Details: Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, 
                       </p><br/>
					
							<span class="left databits"><i class="material-icons">supervisor_account</i><?php echo $items->partytype;?></span>
							<span class="left databits"><i class="material-icons">supervisor_account</i><?php echo $items->participants;?> participants</span>
							<span class="left databits"><i class="material-icons">language</i>Party host: <?php echo $items->party;?></span>
							<span class="left databits"><i class="material-icons">location_on</i>zip code: <?php echo $items->zipcode;?></span>
					</div>					
						<br/>
					  <div class="row ">
						<div class="container">
						<form class="bid-form" action="<?php echo base_url();?>Bid/submit_bid" method="post">
							 <div class="input-field col s6 m4 l4">
									<input name="order-id" type="hidden" value="<?php echo $items->orders_id;?>">
									<input name="prize" id="bid" type="text"  pattern="-?[0-9]*(\.[0-9]+)?" required class="validate">
									<label for="bid" data-error="not a number" ata-success="correct">place bid</label>
							</div>
							<div class="input-field col s6 m4 l4">
								<button class="chip btn btn-flat waves-effect waves-light accent-color text-primary-color" type="submit" name="action">Submit
									<i class="material-icons right">send</i>
								 </button>
							</div>
							</form>  
						</div>	
					  </div>
					
					
				  </div>	
				</li>
				
				  				
				<?php }?>
			 <?php } ?>	
			  </ul>
					
		
		
		<div class="container center">
		<?php echo $links;?>
		</div>
	</div>
</main>