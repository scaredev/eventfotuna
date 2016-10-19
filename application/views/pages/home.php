<body style="background-image: url(<?= base_url();?>img/coffeecar.jpg);">  
  
  <div class="content">
	
   <div class= "container list-container">
		<div class="row"> 
			<div id="mainNav" class="hidden-sm-down spacer"></div>
			<div class="col-md-7 text">
				<div class="jumbotron transparent">
					<h3>Title</h3>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation</p>
				</div>
			</div>
			<div class="col-md-5">
			
			<div class="panel with-nav-tabs panel-default">
				
                <div class="panel-heading">
                        <ul class="nav nav-tabs">
                            <li class="active"><a href="#tab1default" data-toggle="tab">Am a customer</a></li>
                            <li><a href="#tab2default" data-toggle="tab">Am a Barista</a></li>
                            
                        </ul>
                </div>
                <div class="panel-body">
                    <div class="tab-content">
                        <div class="tab-pane fade in active" id="tab1default">
							<div class="form-bottom">
			                    <form role="form" action="" method="post" class="registration-form">
									<div class="form-group input-group-lg">
										<label for="inlineRadioOptions" class="control-label">Party type</label>
										<div class="radio">
										  <label>
											<input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked>
											Private
										  </label>
										</div>
										<div class="radio">
										  <label>
											<input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked>
											Company
										  </label>
										</div>
									 </div>
									
									<div class="form-group input-group-lg">
			                        	<label class="sr-only" for="form-email">No. of guests</label>
										
			                        </div>
									
			                        <div class="form-group input-group-lg">
										<label class="sr-only" for="form-email">Event</label>
			                        	
										  <select class="form-control" id="sel1" data-placeholder="Select Event..">
											<option>Bryllup</option>
											<option>Barnedab</option>
											<option>Komfirmation</option>
											<option>Konference</option>
											<option>Reception</option>
											<option>Unfirmation</option>
											<option>Fodselsdag</option>
											<option>Messe</option>
											<option>Other</option>
											<option>Promovering</option>
										  </select>
									
			                        </div>
									<div class="form-group input-group-lg">
			                        	<label class="sr-only" for="form-last-name">Location</label>
			                        	<input type="text" name="form-last-name" placeholder="Zip Code..." class="form-last-name form-control" id="form-last-name">
			                        </div>
									<button  type="button" data-toggle="modal" data-target="#squarespaceModal" class="btn btn-info btn-lg">Get 3 offers!</button>
									
									<div style=" padding-left: 15px;padding-top: 15px; font-size: 85%; float: right; font-size:85%">
										<a href="#" onclick="$('#loginbox').hide(); $('#signupbox').show()" style="padding:15px;">
                                            Log in
                                        </a>
                                            Don't have an account! 
                                        <a href="#" onclick="$('#loginbox').hide(); $('#signupbox').show()">
                                            Sign Up Here
                                        </a>
                                        </div>
									</form> 
									
									
									<!-- line modal -->
									<div class="modal fade" id="squarespaceModal" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
									  <div class="modal-dialog">
										<div class="modal-content">
											<div class="modal-header">
												<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
												<h3 class="modal-title" id="lineModalLabel">Personal Information</h3>
											</div>
											<div class="modal-body">
												
												<!-- content goes here -->
												<form>
												
												  <div class="form-group">
												  	<label for="exampleInputEmail1">Name</label>
													<input type="email" class="form-control" id="exampleInputEmail1" placeholder="Name">
												  </div>
												  <div class="form-group">
												  	<label for="exampleInputEmail1">Tel</label>
													<input type="email" class="form-control" id="exampleInputEmail1" placeholder="Tel #">
												  </div>
												  <div class="form-group">
													<label for="exampleInputEmail1">Date of Event</label>
													<input type="email" class="form-control" id="exampleInputEmail1" placeholder="Date of event">
												  </div>
												  <div class="form-group">
													<label for="exampleInputEmail1">Time interval</label>
													<input type="email" class="form-control" id="exampleInputEmail1" placeholder="Time interval">
												  </div>
												  <div class="form-group">
													<label for="exampleInputEmail1">Participants</label>
													<input type="email" class="form-control" id="exampleInputEmail1" placeholder="Estimated # of Participants">
												  </div>
												  <div class="form-group">
													<label for="exampleInputEmail1">Address</label>
													<input type="email" class="form-control" id="exampleInputEmail1" placeholder="Address/Postal Code">
												  </div>
												  
												  <div class="form-group">
													<label for="exampleInputFile">Upload Picture</label>
													<input type="file" id="exampleInputFile">
													<p class="help-block">Avatar or Event Icon</p>
												  </div>
												  
												  <a href= "<?= base_url();?>Event/thankyou"  class="btn btn-default">Submit</a>
												</form>

											</div>
											<div class="modal-footer">
												<div class="btn-group btn-group-justified" role="group" aria-label="group button">
													<div class="btn-group" role="group">
														<button type="button" class="btn btn-default" data-dismiss="modal"  role="button">Close</button>
													</div>
													
												</div>
											</div>
										</div>
									  </div>
									</div>
								   
									<!-- end modal-->
									
		                    </div>
						</div>
                        <div class="tab-pane fade" id="tab2default">
							 <form id="loginform" action='<?php echo base_url('Login/validate_credentials');?>' method='post' class="form-horizontal" role="form">
                                    
								<div style="margin-bottom: 25px" class="input-group input-group-lg">
											<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
											<input id="login-username" type="text" class="form-control" name="email" value="" placeholder="email">                                        
										</div>
									
								<div style="margin-bottom: 25px" class="input-group input-group-lg">
											<span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
											<input id="login-password" type="password" class="form-control" name="password" placeholder="password">
										</div>
										

									
								<div class="input-group">
										  <div class="checkbox">
											<label>
											  <input id="login-remember" type="checkbox" name="remember" value="1"> Remember me
											</label>
										  </div>
										</div>


                                <div style="margin-top:10px" class="form-group">
                                    <!-- Button -->

                                    <div class="col-sm-12 controls">
                                      <input id="btn-login" type="submit" class="btn btn-success" value="Login">
									  
							  
									 <a class="btn btn-primary" data-toggle="collapse" data-target="#tabs" aria-expanded="false" aria-controls="tablist">Register</a>
                                    </div>
									
								</div>
								</form>	
								<?php echo $this->session->flashdata('msg'); ?>
										<div class="collapse" id="tabs">
											<div class="well">
												<div role="tabpanel">
												<form method="POST" action="#" id="reg-form">												
												  <div class="form-group">
												  	<label for="company">Company</label>
													<input type="text" class="form-control" id="company" name="company" placeholder="Company Name" minlength="2" required>
												  </div>
												  <div class="form-group">
												  	<label for="cart-type">CVR</label>
													<input type="text" class="form-control" id="cart-type" name="cart-type" placeholder="Cart Type">
												  </div>
												  <div class="form-group">
													<label for="mobile">Mobile numbers</label>
													<input type="text" class="form-control" id="mobile" name="mobile" placeholder="+60 (038)XNNN-NNNN">
												  </div>
												  <div class="form-group">
													<label for="email">Email Address</label>
													<input type="email" class="form-control" id="email" name="email" placeholder="you@mailserver.domain">
												  </div>												  									  
												  <button type="submit" class="btn btn-success">Submit</button>
												  <button type="reset" class="btn">Cancel</button>
												</form>
												</div>
											</div>
										</div>	

                                <div class="form-group">
                                    <div class="col-md-12 control">
                                        <div style="border-top: 1px solid#888; padding-top:15px; font-size:85%">
                                            Create an account..
                                            Its Free!                                       
                                        </div>
                                    </div>
                                </div>    
                            
						</div>
                       
                    </div>
                </div>
            </div>
				
			</div>	
			
        </div>
	</div>
 </div>
  