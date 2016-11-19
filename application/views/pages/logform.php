<body>
<div class="container">
     <div class="row">
          <div class="col-lg-6 col-sm-6">
               <h1>Welcome Barista</h1>
          </div>
          <div class="col-lg-6 col-sm-6">
               
               <ul class="nav nav-pills pull-right" style="margin-top:20px">
                    <li class="active"><a href="#">Login</a></li>
                    <li><a href="#">Signup</a></li>
               </ul>
               
          </div>
     </div>
</div>
<hr/>

<div class="container">
     <div class="row">
          <div class="col-lg-4 col-sm-4 well">
          <?php 
          $attributes = array("class" => "form-horizontal", "id" => "loginform", "name" => "loginform");
          echo form_open("login/loginform", $attributes);?>
          <fieldset style="padding:40px 40px;border-radius:5px;">
               <legend>Login</legend>
               <div  class="input-field">
									<input name="name" id="first_name" type="text" class="validate primary-text-color" required>
									<label for="first_name">Email</label>
									</div>
									<div  class="input-field">
									<input  name="zipcode" id="zipcode" type="text" class="validate primary-text-color" required>
									<label for="first_name">Password</label>
									</div>
                              
               <div class="form-group">
               <div class="col-lg-12 col-sm-12 text-center">
                    <input id="btn_login" name="btn_login" type="submit" class="btn btn-default" value="Login" />
                    <input id="btn_cancel" name="btn_cancel" type="reset" class="btn btn-default" value="Cancel" />
               </div>
               </div>
          </fieldset>
          <?php echo form_close(); ?>
          <?php echo $this->session->flashdata('msg'); ?>
          </div>
     </div>
</div>