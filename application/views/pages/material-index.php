<main>
<div class="ul-wrapper">
  <div class="parallax-container" >
    <div class="parallax "><img class="blurring" src="<?php echo base_url();?>img/coffeecar.jpg">        
	</div>
	<div class="row">
	  <div class="container">
		<div class="col s12 m8 l8">
			<section class="banner-img flow-text">
				<div class="tagline text-primary-color">
				  <h2>Event Fortuna.</h2>
				  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Confecta res esset. Negat esse eam, inquit, propter se expetendam. Is ita vivebat, ut nulla tam exquisita ...</p>
				  
				</div>
				<div class="action-button">
				<a href="#order" class="waves-effect waves-orange large-blue">
				
				Order Some Coffee
			  </a> 
				
			  <a href="#modal1" class="modal-trigger waves-effect waves-light  large-white accent-color" >				
				Register as Barista
			  </a>      
			 </div>
			
			
			<section>
		</div>
		<div class="col s12 m4 l4 hide-on-med-and-down">
			<section>
				
				  <div class="row">
					<div class="col s12">
					  <div class="card white default-primary-color">
						<div class="card-content white-text">
						  <span class="card-title primary-text-color center ">Quick Order!</span>
						  	<div class="divider"></div><br/>
							<?php echo $this->session->flashdata('msg'); ?>
							<ul id="host" class="tabs tabs-fixed-width">
							<label for="host">Party Host</label>
								<li class="tab col s3"><a href="#test1">Company</a></li>
								<li class="tab col s3"><a class="" href="#test2">Private</a></li>
							</ul>
							<br/>
							<div id="test1">
								<form id="company_form"  role="form" action="<?php echo base_url();?>Order/pre_order" method="post">
									<div  class="input-field">
										<select name="partytype" class="primary-text-color" id="party-type">
										  <option value="" disabled selected>Choose your option</option>
										  <option value="Bryllup">Bryllup</option>
										  <option value="Barnedab">Barnedab</option>
										  <option value="Komfirmation">Komfirmation</option>
										  <option value="Uniformation">Uniformation</option>
										  <option value="Fodseldag">Fodseldag</option>
										   <option value="Other...">Other...</option>
										</select>
										<label for="party-type">Select Party Type</label>
									</div>		
									<div  class="input-field">
									<input name="name" id="first_name" type="text" class="validate primary-text-color" required>
									<label for="first_name">First Name</label>
									</div>
									<div  class="input-field">
									<input  name="zipcode" id="zipcode" type="text" class="validate primary-text-color"pattern="-?[0-9]*(\.[0-9]+)?" required length="8">
									<label for="first_name">Zip Code</label>
									</div>
									<input  name="party" id="party" type="hidden" value="company">
									<button class="btn btn-small " type="submit" href="#">Submit</button>		
								</form>
							</div>
							<div id="test2" >
								<form id="private_form"  role="form" action="<?php echo base_url();?>Order/pre_order" method="post">
									<div  class="input-field">
										<select  name="partytype" class="primary-text-color" id="party-type">
										  <option value="" disabled selected>Choose your option</option>
										  <option value="Conference">Conference</option>
										  <option value="Reception">Reception</option>
										  <option value="Messe">Messe</option>
										  <option value="Promovering">Promovering</option>
										  <option value="Other...">Other...</option>
										</select>
										<label for="party-type">Select Party Type</label>
									</div>		
									<div  class="input-field">
									<input name="name" id="first_name" type="text" class="validate primary-text-color">
									<label for="first_name">First Name</label>
									</div>
									<div  class="input-field">
									<input name="zipcode" id="zipcode" type="text" class="validate primary-text-color"pattern="-?[0-9]*(\.[0-9]+)?" required length="8">
									<label for="first_name">Zip Code</label>
									</div>
									<input  name="party" id="party" type="hidden" value="private">
									<button class="btn btn-small " type="submit" href="#">Submit</button>
								</form>
							
							</div>
						  
						</div>
						<div class="card-action">
						  
						</div>
					  </div>
					</div>
				  </div>
            
			</section>
		</div>
	 </div>	
	</div>
</div>  
	
</div>
  
	<!-- modal-->
		<div id="modal1" class="modal modal-fixed-footer">
			<form class="col s12">  
			<div class="modal-content">
			
			  <div class="row">
				
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
				 			
			  </div>
        
			</div>
			<div class="modal-footer">
			   <button class="btn waves-effect waves-light accent-color" type="submit" name="action">Register
							<i class="material-icons right">send</i>
			   </button>
			</div>
			</form>
		</div>
			
	</div>
			
	<div style="clear:both;"></div>	
	<!-- -->
  <div class= " section white">
    <div class="row container hide-on-small-only" style="padding: 40px 0px;">
      <div class="col s12 " id="for_passengers">
		  <div class="col s12 l4 center step">
		  <div class="col l12 s3">
		  <img class="responsive-image circle" src="https://dcrft8y8615e6.cloudfront.net/assets/binoculars-icon-41eab3bec08f44282d44354bf3ed4085b8830c156f3eb1c6548e8fde85134ce9.png" alt="Binoculars icon 41eab3bec08f44282d44354bf3ed4085b8830c156f3eb1c6548e8fde85134ce9"></div>
		  <div class="col l12 s9">
		  <h4>Order</h4>
		  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Confecta res esset. Negat esse eam, inquit, propter se expetendam. </p>
		  </div></div>
	  <div class="col s12 l4 center step">
		<div class="col l12 s3"><img class="responsive-image circle" src="https://dcrft8y8615e6.cloudfront.net/assets/calendar-icon-c0ab1b5c4f18cb04e0d90804477cea002260e77ab98e55766672dff931e37685.png" alt="Calendar icon c0ab1b5c4f18cb04e0d90804477cea002260e77ab98e55766672dff931e37685"></div>
		  <div class="col l12 s9"><h4>Bid on It</h4><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Confecta res esset. Negat esse eam, inquit, propter se expetendam. </p></div></div>
	  <div class="col s12 l4 center step"><div class="col l12 s3">
		<img class="responsive-image circle" src="https://dcrft8y8615e6.cloudfront.net/assets/car-icon-672ac5eba7a39fe922ad9a0c39e58b65ff08f44ca6125c3a7ca6b02dfad53c97.png" alt="Car icon 672ac5eba7a39fe922ad9a0c39e58b65ff08f44ca6125c3a7ca6b02dfad53c97"></div><div class="col l12 s9">
			<h4>Party</h4><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Confecta res esset. Negat esse eam, inquit, propter se expetendam. </p></div></div>
	  </div>
    </div>
  </div >
  
   <div class="section default-primary-color hide-on-med-and-up">
    <div class="container">
			  <div class="row">
					<div class="col s12">
					  <div class="card white default-primary-color">
						<div class="card-content white-text">
						  <span class="card-title primary-text-color center ">Quick Order!</span>
						  	<div class="divider"></div><br/>
							<?php echo $this->session->flashdata('msg'); ?>
							<ul id="host" class="tabs tabs-fixed-width">
							<label for="host">Party Host</label>
								<li class="tab col s3"><a href="#test1">Company</a></li>
								<li class="tab col s3"><a class="" href="#test2">Private</a></li>
							</ul>
							<br/>
							<div id="test1">
								<form id="company_form"  role="form" action="<?php echo base_url();?>Order/pre_order" method="post">
									<div  class="input-field">
										<select name="partytype" class="primary-text-color" id="party-type">
										  <option value="" disabled selected>Choose your option</option>
										  <option value="Bryllup">Bryllup</option>
										  <option value="Barnedab">Barnedab</option>
										  <option value="Komfirmation">Komfirmation</option>
										  <option value="Uniformation">Uniformation</option>
										  <option value="Fodseldag">Fodseldag</option>
										   <option value="Other...">Other...</option>
										</select>
										<label for="party-type">Select Party Type</label>
									</div>		
									<div  class="input-field">
									<input name="name" id="first_name" type="text" class="validate primary-text-color" required>
									<label for="first_name">First Name</label>
									</div>
									<div  class="input-field">
									<input  name="zipcode" id="zipcode" type="text" class="validate primary-text-color"pattern="-?[0-9]*(\.[0-9]+)?" required length="8">
									<label for="first_name">Zip Code</label>
									</div>
									<input  name="party" id="party" type="hidden" value="company">
									<button class="btn btn-small " type="submit" href="#">Submit</button>		
								</form>
							</div>
							<div id="test2" >
								<form id="private_form"  role="form" action="<?php echo base_url();?>Order/pre_order" method="post">
									<div  class="input-field">
										<select  name="partytype" class="primary-text-color" id="party-type">
										  <option value="" disabled selected>Choose your option</option>
										  <option value="Conference">Conference</option>
										  <option value="Reception">Reception</option>
										  <option value="Messe">Messe</option>
										  <option value="Promovering">Promovering</option>
										  <option value="Other...">Other...</option>
										</select>
										<label for="party-type">Select Party Type</label>
									</div>		
									<div  class="input-field">
									<input name="name" id="first_name" type="text" class="validate primary-text-color">
									<label for="first_name">First Name</label>
									</div>
									<div  class="input-field">
									<input name="zipcode" id="zipcode" type="text" class="validate primary-text-color"pattern="-?[0-9]*(\.[0-9]+)?" required length="8">
									<label for="first_name">Zip Code</label>
									</div>
									<input  name="party" id="party" type="hidden" value="private">
									<button class="btn btn-small " type="submit" href="#">Submit</button>
								</form>
							
							</div>
						  
						</div>
						<div class="card-action">
						  
						</div>
					  </div>
					</div>
				  </div>
    </div>
  </div>
</main>