<main>
<div class="container">
	<h3>Order Details</h3>
	<p style="margin-bottom:20px;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Confecta res esset. Negat esse eam, inquit, propter se expetendam. Is ita vivebat, ut nulla tam exquisita ...</p>
	<div class="divider"></div>	
<br/><br/>	
	<div class="row">
    <form class="col s12" action="<?php echo base_url();?>Order/submit_order" method="post">
      <div class="row">
        <div class="input-field col s6">
          <input name="party" id="last_name" type="text" value="<?php echo $party;?>"class="validate">
          <label for="last_name">Party Host</label>
        </div>
        <div class="input-field col s6">
          <select name="partytype" id="party-type">
			 <option value="<?php echo $partytype;?>" selected><?php echo $partytype;?></option>
		  </select>
		<label for="party-type">Party Type</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s6">
          <input name="email" id="first_name" type="email" class="validate primary-text-color" required>
		  <label for="email" data-error="not an email" data-success="right" >Email</label>
        </div>
		<div class="input-field col s6">
          <input name="tel" id="first_name" type="text" class="validate primary-text-color" pattern="-?[0-9]*(\.[0-9]+)?" required length="8">
		  <label for="tel" data-error="not a number">Tel#</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s6">
          <input name="participants" id="participanats" type="text" class="validate"pattern="-?[0-9]*(\.[0-9]+)?" required>
          <label for="participants" data-error="not a number">No. of Participants</label>
        </div>
		<div class="input-field col s6">
          <input name="eventdate" id="date-picker" type="date" class="datepicker" required>
          <label for="date-picker">Date</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s6">
          <textarea name="address" id="textarea1" class="materialize-textarea" length="120" required></textarea>
          <label for="textarea1">Adress</label>
        </div>
		<div class="input-field col s6">
		  <input name="fname" id="zipcode" type="hidden" class="validate" value="<?php echo $fname;?>">
          <input name="zipcode" id="zipcode" type="text" class="validate" value="<?php echo $zip;?>">
          <label for="zipcode" >Zip Code</label>
        </div>
      </div>
	  <div class="divider"></div><br/>
	  <h5>More Details and Special instructions:</h5>
	  <div class="row">
        <div class="input-field col s12">
          <textarea name="address" id="textarea2" class="materialize-textarea" length="500" required placeholder="tell us more..."></textarea>
          <label for="textarea2">Details and Instructions: </label>
        </div>
	  </div>	
	  
      <div class="row">
        <div class="col s12">
          You are about to send and Order
          <div class="input-field">
            <button class="chip btn btn-flat waves-effect waves-light accent-color text-primary-color" type="submit" name="submit">Submit
				<i class="material-icons right">send</i>
			</button>
			<button class="chip btn btn-flat waves-effect waves-light accent-color text-primary-color" type="reset" name="action">Reset
				<i class="material-icons right">replay</i>
			</button>
          </div>
        </div>
      </div>
    </form>
  </div>
        
</div>
</main>