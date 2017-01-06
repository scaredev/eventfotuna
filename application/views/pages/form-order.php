<main>
	<div class="container">
		<h3>Order Form</h3>
		<p style="margin-bottom:20px;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Confecta res esset. Negat esse eam, inquit, propter se expetendam. Is ita vivebat, ut nulla tam exquisita ...</p>
		<div class="divider"></div>	
		<br/><br/>
		
		<ul id="host" class="tabs tabs-fixed-width flow-text">
		<label for="host">Party Host</label>
			<li class="tab col s3"><a class="" href="#test1">Private</a></li>
			<li class="tab col s3"><a href="#test2">Company</a></li>
								
		</ul>
		<br/>
		<div id="test1">
			<div class="row">
			<form class="col s12" action="<?php echo base_url();?>Order/submit_order" method="post">
			  <div class="row">
				<div class="input-field col s6">
				  <input name="fname" id="last_name" type="text" class="validate">
				  <label for="last_name">Name:</label>
				</div>
				<div class="input-field col s6">
				  <select name="partytype" class="primary-text-color" id="party-type">
										  <option value="Bryllup">Bryllup</option>
										  <option value="Barnedab">Barnedab</option>
										  <option value="Komfirmation">Komfirmation</option>
										  <option value="Uniformation">Uniformation</option>
										  <option value="Fodseldag">Fodseldag</option>
										   <option value="Other...">Other...</option>
										</select>
				<label for="party-type">Party Type:</label>
				</div>
			  </div>
			  <div class="row">
				<div class="input-field col s6">
				  <input name="email" id="first_name" type="email" class="validate primary-text-color" required>
				  <label for="email" data-error="not an email" data-success="right" >Email:</label>
				</div>
				<div class="input-field col s6">
				  <input name="tel" id="tel" type="text" class="validate primary-text-color" pattern="-?[0-9]*(\.[0-9]+)?" required length="8" maxlength="8">
				  <label for="tel" data-error="not a number">Tel#:</label>
				</div>
			  </div>
			  <div class="row">
				<div class="input-field col s6">
				  <input name="participants" id="participanats" type="text" class="validate"pattern="-?[0-9]*(\.[0-9]+)?" required>
				  <label for="participants" data-error="not a number">No. of Guest:</label>
				</div>
				<div class="input-field col s6">
				  <input name="eventdate" id="date-picker" type="date" class="datepicker" placeholder="Date" required>
				 
				</div>
			  </div>
			  <div class="row">
				<div class="input-field col s6">
				  <input type="text" name="address" id="textarea1" class="validate" length="120" required>
				  <label for="textarea1">Adress:</label>
				</div>
				<div class="input-field col s6">
				  
				  <input name="zipcode" id="zipcode" type="text" class="validate" value="" pattern="-?[0-9]*(\.[0-9]+)?" required length="4" maxlength="4">
				  <label for="zipcode" >Zip Code:</label>
				</div>
			  </div>
			  <div class="divider"></div><br/>
			  <h5>More Details and Special instructions:</h5>
			  <div class="row">
				<div class="input-field col s12">
				  <i class="material-icons prefix">mode_edit</i>
				  <textarea name="address" id="textarea2" class="materialize-textarea" length="500" required placeholder="tell us more..."></textarea>
				  
				</div>
			  </div>	
			  
			  <div class="row">
				<div class="col s12">
				  You are about to send and Order
				  <div class="input-field">
					<button class="btn btn-flat btn-small waves-effect waves-light accent2-color text-primary-color" type="submit" name="submit">Submit
						<i class="material-icons right">send</i>
					</button>
					<button class="btn btn-flat btn-small waves-effect waves-light accent2-color text-primary-color" type="reset" name="action">Reset
						<i class="material-icons right">replay</i>
					</button>
				  </div>
				</div>
			  </div>
			</form>
		  </div>
		</div>
		<!-- tab #2-->
		<div id="test2">
			<div class="row">
			<form class="col s12" action="<?php echo base_url();?>Order/submit_order" method="post">
			  <div class="row">
				<div class="input-field col s6">
				  <input name="fname" id="last_name" type="text" class="validate">
				  <label for="last_name">Name:</label>
				</div>
				<div class="input-field col s6">
				  <select name="partytype" id="party-type">
										  <option value="Conference">Conference</option>
										  <option value="Reception">Reception</option>
										  <option value="Messe">Messe</option>
										  <option value="Promovering">Promovering</option>
										  <option value="Other...">Other...</option>
										</select>
										<label for="party-type">Party Type:</label>
				  
				</div>
			  </div>
			 <div class="row">
				<div class="input-field col s6">
				  <input name="email" id="first_name" type="email" class="validate primary-text-color" required>
				  <label for="email" data-error="not an email" data-success="right" >Email:</label>
				</div>
				<div class="input-field col s6">
				  <input name="tel" id="tel" type="text" class="validate primary-text-color" pattern="-?[0-9]*(\.[0-9]+)?" required length="8" maxlength="8">
				  <label for="tel" data-error="not a number">Tel#:</label>
				</div>
			  </div>
			  <div class="row">
				<div class="input-field col s6">
				  <input name="participants" id="participanats" type="text" class="validate"pattern="-?[0-9]*(\.[0-9]+)?" required>
				  <label for="participants" data-error="not a number">No. of Guest:</label>
				</div>
				<div class="input-field col s6">
				  <input name="eventdate" id="date-picker" type="date" class="datepicker" placeholder="Date" required>
				 
				</div>
			  </div>
			  <div class="row">
				<div class="input-field col s6">
				  <input type="text" name="address" id="textarea1" class="validate" length="120" required>
				  <label for="textarea1">Adress:</label>
				</div>
				<div class="input-field col s6">
				  
				  <input name="zipcode" id="zipcode" type="text" class="validate" value="" pattern="-?[0-9]*(\.[0-9]+)?" required length="4" maxlength="4">
				  <label for="zipcode" >Zip Code:</label>
				</div>
			  </div>
			  <div class="divider"></div><br/>
			  <h5>More Details and Special instructions:</h5>
			  <div class="row">
				<div class="input-field col s12">
				  <i class="material-icons prefix">mode_edit</i>
				  <textarea name="address" id="textarea2" class="materialize-textarea" length="500" required placeholder="tell us more..."></textarea>
				  
				</div>
			  </div>	
			  
			  <div class="row">
				<div class="col s12">
				  You are about to send and Order
				  <div class="input-field">
					<button class="btn btn-flat btn-small waves-effect waves-light accent2-color text-primary-color" type="submit" name="submit">Submit
						<i class="material-icons right">send</i>
					</button>
					<button class="btn btn-flat btn-small waves-effect waves-light accent2-color text-primary-color" type="reset" name="action">Reset
						<i class="material-icons right">replay</i>
					</button>
				  </div>
				</div>
			  </div>
			</form>
		  </div>
		</div>
			
	</div>
</main>