<main class="teal">
  
	<section>
		
      <div class="row">
        <div class="col s12 m6 l6 offset-m3 offset-l3">
          <div class="card ">
            <div class="card-image">
              <img class="center-align " src="<?php echo base_url();?>img/coffeecar.jpg"/>
              <span class="card-title"><strong><?php echo $user->company;?></strong></span>
            </div>
            <div class="card-action ">
			<span class="edit-butt">
					   <a class="btn-floating btn-large waves-effect waves-light red "><i class="material-icons">mode_edit</i></a>
			</span>
             <div class="row ">
					
					<div class="col s12 m4 valign-wrapper">
					 <img class="responsive-image circle" src="https://dcrft8y8615e6.cloudfront.net/assets/binoculars-icon-41eab3bec08f44282d44354bf3ed4085b8830c156f3eb1c6548e8fde85134ce9.png" alt="Binoculars icon 41eab3bec08f44282d44354bf3ed4085b8830c156f3eb1c6548e8fde85134ce9"/>
					</div>
					<div class="col s12 m8 valign-wrapper">
					   <address>
							<p><?php echo $user->company_address;?></p>
							<i class="material-icons ">perm_phone_msg</i> <?php echo $user->mobile;?>
							<br />
                        
                            <i class="material-icons ">email</i><?php echo $user->email;?>
                            <br />
                            <i class="material-icons ">language</i><a href="http://www.scaredev.com"> www.scaredev.com </a>
                            <br />
                            <i class="material-icons ">location_on</i>Zip: 00000
						
						</address>
					</div>
				</div>
            </div>
          </div>
		  
        </div>
      </div>
            
	</section>
	<section>
		<div class="row">
		<div class="col s12 m6 l6 offset-m3 offset-l3">	
		  <div class="carousel carousel-slider" data-indicators="true">
			<a class="carousel-item" href="#one!"><img src="http://lorempixel.com/800/400/food/1"></a>
			<a class="carousel-item" href="#two!"><img src="http://lorempixel.com/800/400/food/2"></a>
			<a class="carousel-item" href="#three!"><img src="http://lorempixel.com/800/400/food/3"></a>
			<a class="carousel-item" href="#four!"><img src="http://lorempixel.com/800/400/food/4"></a>
		  </div>
        </div>
	  </div>
            
	</section>
	
 
</main>