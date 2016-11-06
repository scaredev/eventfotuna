<main>
  <div class="parallax-container" style="position:relative;">
    <div class="parallax"><img src="<?php echo base_url();?>img/coffeecar.jpg">        
	</div>
	<div class="action-button">
		<a href="#order" class="waves-effect btn-large large-blue">
		
		Order Some Coffee
	  </a> 
		
	  <a class="modal-trigger waves-effect waves-light btn-large large-white" href="#modal1">
		
		Register as Barista
	  </a>      
		
	</div>
  </div>
	<!-- modal-->
		<div id="modal1" class="modal">
			<div class="modal-content">
			  
			  <div class="row">
				<form class="col s12">
				  <div class="row">
					<div class="input-field col s6">
					  <input placeholder="Placeholder" id="first_name" type="text" class="validate">
					  <label for="first_name">First Name</label>
					</div>
					<div class="input-field col s6">
					  <input id="last_name" type="text" class="validate">
					  <label for="last_name">Last Name</label>
					</div>
				  </div>
				  <div class="row">
					<div class="input-field col s12">
					  <input disabled value="I am not editable" id="disabled" type="text" class="validate">
					  <label for="disabled">Disabled</label>
					</div>
				  </div>
				  <div class="row">
					<div class="input-field col s12">
					  <input id="password" type="password" class="validate">
					  <label for="password">Password</label>
					</div>
				  </div>
				  <div class="row">
					<div class="input-field col s12">
					  <input id="email" type="email" class="validate">
					  <label for="email">Email</label>
					</div>
				  </div>
				  <div class="row">
					<div class="col s12">
					  <button class="btn waves-effect waves-light" type="submit" name="action">Submit
							<i class="material-icons right">send</i>
					  </button>
					</div>
				  </div>
				</form>
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
		<div class="col s12 m6 l6 hide-on-small-and-down">
			<div class="row">
				<div class="right-align">
						<div class="card col s12 m7 l7 offset-m5 offset-l5">
							<div class="card-image">
								<div class="valign-wrapper">
									<div class="valign">	
									&nbsp;<img class="img" src="<?php echo base_url();?>img/coffeecup.jpg">
									</div>
								</div>
							  <span class="card-title">Card Title</span>
							</div>					
						</div>
				</div>
            </div>
        </div>
		<div class="col s12 m6 l6 ">
			<div class="row">
				<div class="col s12 m8 l8 login-panel order-form">
					<div class="section">
						<h5 class="center" style="font-style:italic;">ORDER A COFFEE</h5>
					</div>
					<div class="row">
					
						<div class="col s12 input-field">
						<div class="switch">
							
							<p><i class="material-icons">business</i> Party Host						
							  
							</p>  
							  <input name="group1" type="radio" id="test1" />
							  <label for="test1">Private</label>
							  <input name="group1" type="radio" id="test2" />
							  <label for="test2">Company</label>
							<br/>
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
						<i class="material-icons prefix">date_range</i>
						<input id="eventdate" type="date" class="datepicker" placeholder="Event Date">
						
					</div>
					</div>
					<div class="row">
						<div class="col s12 input-field">
						<i class="material-icons prefix">location_on</i>
						<input type="text" class="validate" id="location">
						<label for="location">Zip Code</label>
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