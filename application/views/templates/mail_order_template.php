
<main>
<div class= "container">
	<div class="row">
		<div class="col-md-6 col-md-offset-3 centro">
		
			<img class="" src="<?php echo base_url();?>img/success-icon.png" alt="..." class="img-rounded icon_pic">
			<h1>Thank You <?php echo $email;?></h1>
			<p>Your order id is <?php echo $code;?></p>
<p class="mensahe">You can visit the link<?php echo base_url();?>myorder/<?php echo $orders->order_id;?>/<?php echo $code ;?> to check your order.</p>

			<a class="homebutt" href="<?php echo base_url();?>" >BACK TO HOME</a>
   </div>
 </div>  
 </main>