<main>
	<div class="ul-wrapper">
			
			  <ul class="collapsible collapsible-override" data-collapsible="accordion">
				<h2>Heading</h2>
				<li >
					<div class="collapsible-header">
					<div class="row valign-wrapper">
						<div class="col s2">
						 <i class="material-icons">filter_drama</i>
						</div>
						<div class="col s10">
						 <span class="title">Title</span>
						  <p>First Line <br>
							 Second Line
						  </p>
						</div>
					  </div>
					
				  </div>
				  <div class="collapsible-body">
					<div class="row">
					<form class="col s12">
					  <div class="row">
					     <div class="input-field col s6">
								<input id="bid" type="text" class="validate">
								<label for="bid">place bid</label>
						</div>
						<div class="input-field col s6">		
								<button class="btn waves-effect waves-light" type="submit" name="action">Submit
								<i class="material-icons right">send</i></button>
						</div>
					  </div>
					</form>  
					</div>
				  </div>	
				</li>
				<?php foreach($results as $orders){?>
				<li>
				  <div class="collapsible-header">
					<span class="new badge" data-badge-caption="Total bidder">4</span>				
					<i class="material-icons">filter_drama</i>
					<span class="title"><?php echo $orders->orders_id;?> <?php echo $orders->partytype;?></span>
					<span class="title"><?php echo $orders->participants;?></span>
					<span class="title"><?php echo $orders->zipcode;?></span>
						
					
				  </div>
				 <div class="collapsible-body">
					<div class="row">
					<form class="col s12">
					  <div class="row">
					     <div class="input-field col s6 m2 l2">
								<input id="bid" type="text" class="validate">
								<label for="bid">place bid</label>
						</div>
						<div class="input-field col s4 m2 l2">		
								<button class="btn waves-effect waves-light" type="submit" name="action">Submit
								<i class="material-icons right">send</i></button>
						</div>
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