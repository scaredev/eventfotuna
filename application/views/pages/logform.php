<main>
<div class="container">
     <div class="row">
          <div class="col s12 m4 l4 offset-m4 offset-l4">
               <h1 class="flow-text center">Welcome Barista</h1>
          </div>
         
     </div>
</div>

<div class="container">
     <div class="row">
          <div class="col s12 m4 l4 offset-m4 offset-l4">
          <?php 
          $attributes = array("class" => "form-horizontal", "id" => "loginform", "name" => "loginform");
          echo form_open("login/loginform", $attributes);?>
          <fieldset style="padding:40px 40px;border-radius:5px;">
               <legend>Login</legend>
               <div  class="input-field">
									<input name="email" id="email" type="email" class="validate primary-text-color" required>
									<label for="email"for="email" data-error="wrong format" data-success="success">Email</label>
									</div>
									<div  class="input-field">
									<input  name="password" id="password" type="password" class="validate primary-text-color" required>
									<label for="password">Password</label>
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
</main>