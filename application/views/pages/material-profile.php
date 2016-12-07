<main class="grey lighten-3">
  

        <div class="ul-wrapper ">
          <div class="card">
			<div class="card-content grey-text text-darken-3">
				<div class="row">
				 <div class="valign-wrapper">
					<div class="col s12 m4 center">
					  <span class="card-title ">
						 <img class="responsive-image circle tooltipped" data-position="left" data-delay="50" data-tooltip="Logo"" src="<?php echo base_url();?>img/binoculars.png"/>				 
					  </span>
					  
						  
					</div> 
					<div class="col s12 m8">
					  <h2 class="grey-text text-darken-3"><?php echo $user->company;?></h2>
					  <p>Duis aute irure dolor in reprehenderit in voluptate velit esse
											cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
											proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p><br/>
					  <a class="grey-text text-darken-3" href="#" style="margin-right: 20px;"><i class="material-icons">location_on</i> <?php echo $user->company_address;?></a>
					  <a class="grey-text text-darken-3" href="#" style="margin-right: 20px;"><i class="material-icons">email</i> <?php echo $user->email;?></a>
					  <a class="grey-text text-darken-3" href="#" style="margin-right: 20px;"><i class="material-icons">call</i> <?php echo $user->mobile;?></a>
					  <a class="grey-text text-darken-3" href="#"><i class="material-icons">language</i><?php echo $user->email;?></a>
						  
					  
					</div>
				 </div>			
				</div>
			</div>
            <div class="card-action">
				<span class="edit-butt">
						   <a class="btn-floating btn-large waves-effect waves-light red tooltipped modal-trigger" href="#modal2" data-position="bottom" data-delay="50" data-tooltip="Edit Profile"><i class="material-icons">mode_edit</i></a>
				</span>
					<!-- modal-->
					<div id="modal2" class="modal">
						<div class="modal-content">
							  
							 <form class="col s12" id="barista_form"  role="form" action="<?php echo base_url();?>Profile/update" method="post">  
							
								<div class="ul-wrapper">	
									<div class="row">
										<div class="file-field input-field col s6">
										  <div class="btn">
											<span>Logo</span>
											<input type="file">
										  </div>
										  <div class="file-path-wrapper">
											<input name="userfile" class="file-path validate" type="text">
										  </div>
										</div>
										<div class="file-field input-field col s6">
										  <div class="btn">
											<span>Profile Pic</span>
											<input type="file">
										  </div>
										  <div class="file-path-wrapper">
											<input name="userfile" class="file-path validate" type="text">
										  </div>
										</div>
									</div>
							  
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
										<div class="input-field col s3">
										  <input name="fname"placeholder="YourName" id="first_name" type="text" class="validate" required>
										  <label for="fname">First Name</label>
										</div>
										<div class="input-field col s3">
										  <input name="fname"placeholder="YourName" id="first_name" type="text" class="validate" required>
										  <label for="fname">Last Name</label>
										</div>
										<div class="input-field col s6">
										  <input name="mobile" placeholder="xxxxxxxx" id="last_name" type="text" class="validate" pattern="-?[0-9]*(\.[0-9]+)?" length="8" required>
										  <label for="mobile">mobile number</label>
										</div>
									</div>
									<div class="row">
										<div class="input-field col s12">
										  <i class="material-icons prefix">mode_edit</i>
										  <textarea id="icon_prefix2" class="materialize-textarea"></textarea>
										  <label for="icon_prefix2">About Our Company</label>
										</div>
									  </div>
									<div class="row">
										<div class="input-field col s12">
										  <i class="material-icons prefix">mode_edit</i>
										  <textarea id="icon_prefix2" class="materialize-textarea"></textarea>
										  <label for="icon_prefix2">About your self</label>
										</div>
									  </div>
									<div class="row">
										<div class="input-field col s3">
										  <input name="fname"placeholder="YourName" id="first_name" type="text" class="validate" required>
										  <label for="fname">Cart Type1</label>
										</div>
										<div class="input-field col s3">
										  <input name="fname"placeholder="YourName" id="first_name" type="text" class="validate" required>
										  <label for="fname">Cart Type2</label>
										</div>
										<div class="input-field col s3">
										  <input name="mobile" placeholder="xxxxxxxx" id="last_name" type="text" class="validate" pattern="-?[0-9]*(\.[0-9]+)?" length="8" required>
										  <label for="mobile">Cart Type3</label>
										</div>
										<div class="input-field col s3">
										  <input name="mobile" placeholder="xxxxxxxx" id="last_name" type="text" class="validate" pattern="-?[0-9]*(\.[0-9]+)?" length="8" required>
										  <label for="mobile">Cart Type4</label>
										</div>
									</div>
									<div class="row">
										<div class="input-field col s12">
										  <input name="email" placeholder="you@domain.com "id="last_name" type="email" class="validate" required>
										  <label for="email" data-error="wrong format" data-success="success">Email Address</label>
										</div>
										<div class="input-field col s12">
										  <input name="password" placeholder="Placeholder" id="first_name" type="password" class="validate" required length="8" >
										  <label for="password">Password</label>
										</div>
										
									</div>
								  
								
									<div class="modal-footer">
										<button type="reset" class="modal-action waves-effect waves-red btn-flat ">Reset</button>
										&nbsp;&nbsp;&nbsp;&nbsp;
										<button type="submit" class="modal-action waves-effect waves-green btn-flat">Register<i class="material-icons right">send</i></button>
									</div>
								</div>
							</form>
						</div>
					</div>		
					<!-- -->
				</div>	
				
				<ul class="tabs center">
					<li class="tab col s3"><a class="active grey-text text-darken-3" href="#test1">Products</a></li>
					<li class="tab col s3"><a  class="grey-text text-darken-3" href="#test2">Staff</a></li>
					<li class="tab col s3"><a class="grey-text text-darken-3" href="#test3">Cart</a></li>
				</ul>
				<h2></h2>
				<div id="test1" >
					<ul class="collection">
							<li class="collection-item avatar">
							 <img src="<?php echo base_url();?>img/REGxSz.jpg" alt="" class="circle responsive-img">
									<span class="title">Title</span>
									  <p>Duis aute irure dolor in reprehenderit in voluptate velit esse<br>
										Duis aute irure dolor in reprehenderit in voluptate velit esseDuis aute irure dolor in reprehenderit in voluptate velit esse
									  </p>
							  <a href="#!" class="secondary-content"><i class="material-icons">grade</i></a>
							</li>
							<li class="collection-item avatar">
							  <i class="material-icons circle">folder</i>
							  <span class="title">Title</span>
							  <p>First Line <br>
								 Second Line
							  </p>
							  <a href="#!" class="secondary-content"><i class="material-icons">grade</i></a>
							</li>
							<li class="collection-item avatar">
							  <i class="material-icons circle green">insert_chart</i>
							  <span class="title">Title</span>
							  <p>First Line <br>
								 Second Line
							  </p>
							  <a href="#!" class="secondary-content"><i class="material-icons">grade</i></a>
							</li>
							<li class="collection-item avatar">
							  <i class="material-icons circle red">play_arrow</i>
							  <span class="title">Title</span>
							  <p>First Line <br>
								 Second Line
							  </p>
							  <a href="#!" class="secondary-content"><i class="material-icons">grade</i></a>
							</li>
					</ul>
				</div>
				<div id="test2" >
					<div class="row">
						<div class="col s12 m4 l3 center">
								<img class="responsive-image circle" src="<?php echo base_url();?>img/binoculars.png">
								<h4>Mr. Name</h4>
								<p>CEO</p>
						</div>
						<div class="col s12 m4 l3 center">
								<img class="responsive-image circle" src="<?php echo base_url();?>img/binoculars.png">
								<h4>Name</h4>
								<p>Manager</p>
						</div>
						<div class="col s12 m4 l3 center">
								<img class="responsive-image circle" src="<?php echo base_url();?>img/binoculars.png">
								<h4>Ms.Name</h4>
								<p>Barista</p>
						</div>
						<div class="col s12 m4 l3 center">
								<img class="responsive-image circle" src="<?php echo base_url();?>img/binoculars.png">
								<h4>Mr. Name</h4>
								<p>Barista</p>
						</div>
					</div>
				</div>
				<div id="test3" >
					<div class="row">
						<div class="col s12 m4 l3">
						  <div class="card">
							<div class="card-image waves-effect waves-block waves-light">
							  <img class="activator" src="<?php echo base_url();?>img/Starbucks-Company-Logo.png">
							</div>
							<div class="card-content">
							  <span class="card-title activator grey-text text-darken-4">Card Title<i class="material-icons right">more_vert</i></span>
							  <p><a href="#">This is a link</a></p>
							</div>
							<div class="card-reveal">
							  <span class="card-title grey-text text-darken-4">Card Title<i class="material-icons right">close</i></span>
							  <p>Here is some more information about this product that is only revealed once clicked on.</p>
							</div>
						  </div>
						</div>
						<div class="col s12 m4 l3">
						   <div class="card">
							<div class="card-image waves-effect waves-block waves-light">
							  <img class="activator" src="<?php echo base_url();?>img/Starbucks-Company-Logo.png">
							</div>
							<div class="card-content">
							  <span class="card-title activator grey-text text-darken-4">Card Title<i class="material-icons right">more_vert</i></span>
							  <p><a href="#">This is a link</a></p>
							</div>
							<div class="card-reveal">
							  <span class="card-title grey-text text-darken-4">Card Title<i class="material-icons right">close</i></span>
							  <p>Here is some more information about this product that is only revealed once clicked on.</p>
							</div>
						  </div>
						</div>  
						<div class="col s12 m4 l3">
						   <div class="card">
							<div class="card-image waves-effect waves-block waves-light">
							  <img class="activator" src="<?php echo base_url();?>img/Starbucks-Company-Logo.png">
							</div>
							<div class="card-content">
							  <span class="card-title activator grey-text text-darken-4">Card Title<i class="material-icons right">more_vert</i></span>
							  <p><a href="#">This is a link</a></p>
							</div>
							<div class="card-reveal">
							  <span class="card-title grey-text text-darken-4">Card Title<i class="material-icons right">close</i></span>
							  <p>Here is some more information about this product that is only revealed once clicked on.</p>
							</div>
						  </div>
						 </div> 
						<div class="col s12 m4 l3">
						   <div class="card">
							<div class="card-image waves-effect waves-block waves-light">
							  <img class="activator" src="<?php echo base_url();?>img/Starbucks-Company-Logo.png">
							</div>
							<div class="card-content">
							  <span class="card-title activator grey-text text-darken-4">Card Title<i class="material-icons right">more_vert</i></span>
							  <p><a href="#">This is a link</a></p>
							</div>
							<div class="card-reveal">
							  <span class="card-title grey-text text-darken-4">Card Title<i class="material-icons right">close</i></span>
							  <p>Here is some more information about this product that is only revealed once clicked on.</p>
							</div>
						  </div>
						</div>
						
					</div>
				</div>
				<span class="add-butt">
						   <a class="btn-floating btn-large waves-effect waves-light red tooltipped modal-trigger" href="#modal2" data-position="bottom" data-delay="50" data-tooltip="Edit Profile"><i class="material-icons">mode_edit</i></a>
				</span>
            </div>  
			 
			 
           </div>
        </div>
    </div>			
		
</section>
	
</main>