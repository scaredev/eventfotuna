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
						  <input name="company" placeholder="Your Company" id="first_name" type="text" class="validate" required>
						  <label for="company">Company</label>
						</div>
						<div class="input-field col s6">
						  <input name="cart-type" placeholder="Cart Type" id="first_name" type="text" class="validate">
						  <label for="cart-type">CVR</label>
						</div>
					</div>
					<div class="row">
						<div class="input-field col s6">
						  <input name="fname"placeholder="YourName" id="first_name" type="text" class="validate" required>
						  <label for="fname">First Name</label>
						</div>
						<div class="input-field col s6">
						  <input name="mobile" placeholder="xxxxxxxx" id="last_name" type="text" class="validate" pattern="-?[0-9]*(\.[0-9]+)?" length="8" required>
						  <label for="mobile">mobile number</label>
						</div>
					</div>
					<div class="row">
						<div class="input-field col s12">
						  <input name="email" placeholder="you@domain.com "id="last_name" type="email" class="validate" required>
						  <label for="email" data-error="wrong format" data-success="success">Email Address</label>
						</div>
						<div class="input-field col s12">
						  <input placeholder="Placeholder" id="first_name" type="password" class="validate" required length="8" >
						  <label for="first_name">Password</label>
						</div>
						
					</div>
				  </div>
				</div>
				<div class="modal-footer">
            <button type="reset" class="modal-action waves-effect waves-red btn-flat ">Reset</button>
			&nbsp;&nbsp;&nbsp;&nbsp;
            <button type="submit" class="modal-action waves-effect waves-green btn-flat">Agree<i class="material-icons right">send</i></button>
            </div>
			
			</form>
				 			
			</div>
          
     </div>
</main>