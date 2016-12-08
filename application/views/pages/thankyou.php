<main>
<div class= "container">
	<div class="row">
		<div class="col-md-6 col-md-offset-3 centro">
		
			<img src="<?php echo base_url();?>img/success-icon.png" alt="..." class="img-rounded icon_pic">
			<h1>Thank You ..!</h1>
			<a href="#"><span class="chip ">YOUR ORDER ID : <?php echo $code ;?></span></a>
<p class="mensahe">Thank you for your order, a link will be sent to your e-mail <?php echo $email;?>
Remember to check your private your spam tray after 24 hrs</p>
</p>
			<p class="mensahe">You can visit the link <?php echo base_url();?>myorder/<?php echo $orders->orders_id;?>/<?php echo $code ;?> to check your order.</p> OR <a class="homebutt" href="<?php echo base_url();?>">BACK TO HOME</a>
   </div>
   
 </main>