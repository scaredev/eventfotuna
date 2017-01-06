<main>
<div class="containe">
     <div class="row">
          <div class="col s12 m4 l4 offset-m4 offset-l4">
               <h1 class="flow-text center">Barista Registration</h1>
          </div>
         
     </div>
</div>

<div class="container">
     <div class="row">
          <div class="col s12 m8 l8 offset-m2 offset-l2">
          <form class="col s12" id="barista_form"  role="form" action="<?php echo base_url();?>Register/registration" method="post">  
			
			
			  <div class="row">
				<div class="ul-wrapper">
					<div class="row">
						<div class="input-field col s6">
						  <input name="company"  id="first_name" type="text" class="validate" required>
						  <label for="company">Firma:</label>
						</div>
						<div class="input-field col s6">
						  <input name="cart-type"  id="first_name" type="text" class="validate" pattern="-?[0-9]*(\.[0-9]+)?" length="8" maxlength="8" required>
						  <label for="cart-type">CVR:</label>
						</div>
					</div>
					<div class="row">
						<div class="input-field col s6">
						  <input name="fname" id="first_name" type="text" class="validate" required>
						  <label for="fname">Fulde navm:</label>
						</div>
						<div class="input-field col s6">
						  <input name="mobile"  id="last_name" type="text" class="validate" pattern="-?[0-9]*(\.[0-9]+)?" length="8" maxlength="8" required>
						  <label for="mobile">Mobil nr:</label>
						</div>
					</div>
					<div class="row">
						<div class="input-field col s12">
						  <input name="email"  "id="last_name" type="email" class="validate" required>
						  <label for="email" data-error="wrong format" data-success="success">Email:</label>
						</div>
						<div class="input-field col s12">
						  <input name="password" id="first_name" type="password" class="validate" required minlength="8" >
						  <label for="password">Password:</label>
						</div>
						
					</div>
				  </div>
				</div>
				<div class="modal-footer">
           
            <button type="submit" class="btn btn-flat btn-small waves-effect waves-light accent2-color text-primary-color">Videre<i class="material-icons right">send</i></button>
            </div>
			
			</form>
				 			
			</div>
          
     </div>
</main>