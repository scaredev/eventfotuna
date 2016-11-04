<main>
  <div class="parallax-container" style="position:relative;">
    <div class="parallax"><img src="<?php echo base_url();?>img/coffeecar.jpg">        
	</div>
	<div class="action-button">
		<a href="#order" class="waves-effect btn-large large-blue">
		
		Order Coffee
	  </a> 
		
	  <a class="modal-trigger waves-effect waves-light btn-large large-white" href="#modal1">
		
		Im a Barista
	  </a>      
		
	</div>
  </div>
	<!-- modal-->
		<div id="modal1" class="modal">
			<div class="modal-content">
			  <div class="col s12 m6 l6 ">
			<div class="login-panel order-form center">
				<div class="section">
					<h5 style="font-style:italic;">REGISTER A BARISTA</h5>
				</div>	
				<div class="row">
					<div class="col s12 input-field">
					<i class="material-icons prefix">store</i>
				    <input id="icon_prefix" type="text" class="validate">
				    <label for="icon_prefix">Company Name</label>
					</div>
				</div>
				<div class="row">
					<div class="col s12 input-field">
					<i class="material-icons prefix">account_circle</i>
				    <input id="icon_prefix" type="text" class="validate">
				    <label for="icon_prefix">Your Name</label>
					</div>
				</div>
				<div class="row">
					<div class="col s12 input-field">
					<i class="large material-icons prefix">email</i>
				    <input id="icon_prefix" type="text" class="validate">
				    <label for="icon_prefix">Email Address</label>
					</div>
				</div>
				<div class="row">
					<div class="col s12 input-field">
					<i class="material-icons prefix">vpn_key</i>
				    <input id="icon_prefix" type="text" class="validate">
				    <label for="icon_prefix">Password</label>
					</div>
				</div>
				<div class="row">
					<div class="col s12 input-field">				
					  <button class="btn waves-effect waves-light" type="submit" name="action">Submit
						<i class="material-icons right">send</i>
					  </button>
					</div>
				</div>
			</div>
        </div>
			</div>
			<div class="modal-footer">
			  
			</div>
		</div>
    <!-- -->
  <div class="section white">
    <div class="row container hide-on-small-only" style="padding: 40px 0px;">
      <div class="col s12 " id="for_passengers">
		  <div class="col s12 l4 center step">
		  <div class="col l12 s3">
		  <img class="responsive-image circle" src="https://dcrft8y8615e6.cloudfront.net/assets/binoculars-icon-41eab3bec08f44282d44354bf3ed4085b8830c156f3eb1c6548e8fde85134ce9.png" alt="Binoculars icon 41eab3bec08f44282d44354bf3ed4085b8830c156f3eb1c6548e8fde85134ce9"></div>
		  <div class="col l12 s9">
		  <h4>Discover</h4>
		  <p>Search driver listings leaving from your city and get where you need to go.</p>
		  </div></div>
	  <div class="col s12 l4 center step">
		<div class="col l12 s3"><img class="responsive-image circle" src="https://dcrft8y8615e6.cloudfront.net/assets/calendar-icon-c0ab1b5c4f18cb04e0d90804477cea002260e77ab98e55766672dff931e37685.png" alt="Calendar icon c0ab1b5c4f18cb04e0d90804477cea002260e77ab98e55766672dff931e37685"></div>
		  <div class="col l12 s9"><h4>Book it</h4><p>Connect with drivers, confirm arrangements, and pay – all through Jumpr’s secure services.</p></div></div>
	  <div class="col s12 l4 center step"><div class="col l12 s3"><img class="responsive-image circle" src="https://dcrft8y8615e6.cloudfront.net/assets/car-icon-672ac5eba7a39fe922ad9a0c39e58b65ff08f44ca6125c3a7ca6b02dfad53c97.png" alt="Car icon 672ac5eba7a39fe922ad9a0c39e58b65ff08f44ca6125c3a7ca6b02dfad53c97"></div><div class="col l12 s9"><h4>Go Somewhere</h4><p>Enjoy the trip, make some new friends, and safely arrive at your destination.</p></div></div>
	  </div>
    </div>
  </div>
  <section id="order" style="background-color:#03A9F4;padding:20px 0px;">
      <div class="row">
        <div class="col s12 m6 l6 ">
			<div class="login-panel order-form">
				<div class="section">
					<h5 class="center" style="font-style:italic;">ORDER A COFFEE</h5>
				</div>
				<div class="row">
				
					<div class="col s12 left-align input-field">
					<div class="switch">
						
						<p> Party Host</p>
						<p>
						  <i class="material-icons prefix">business</i>
						  <input name="group1" type="radio" id="test1" />
						  <label for="test1">Private</label>
						</p>
						<p>
						  <i class="material-icons prefix">store</i>
						  <input name="group1" type="radio" id="test2" />
						  <label for="test2">Company</label>
						</p>
					  </div>
					</div>
				</div>
				
				<div class="row">
					<div class="col s12 input-field">
						<i class="material-icons prefix">queue_music</i>
						<select class="initialized">
						  <option value="" disabled="" selected="">Choose Party Type</option>
						  <option value="1">Option 1</option>
						  <option value="2">Option 2</option>
						  <option value="3">Option 3</option>
						</select>
						<label for="icon_prefix">Party Type</label>
						
					</div>
				</div>
				<div class="row">
					<div class="col s12 input-field">
					<i class="material-icons prefix">location_on</i>
				    <input id="icon_prefix" type="text" class="validate">
				    <label for="icon_prefix">Zip Code</label>
					</div>
				</div>
				<div class="row">
					<div class="col s12 input-field">				
					  <button class="btn waves-effect waves-light" type="submit" name="action">Submit
						<i class="material-icons right">send</i>
					  </button>
					</div>
				</div>
            </div>
        </div>
		<div class="col s12 m6 l6 ">
			
			  <div class="row valign-wrapper">
					<div class="card valign">
						<div class="card-image">
						  <img src="<?php echo base_url();?>img/coffeecup.jpg">
						  <span class="card-title">Card Title</span>
						</div>
					
					
					</div>
				
			  </div>
            
        </div>
      </div>
            
	</div>
  </section>
   <div class="section white">
    <div class="row container">
      <h2 class="header">More About Us</h2>
      <p class="grey-text text-darken-3 lighten-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
    </div>
  </div>
</main>