
		<ul id="slide-out" class="side-nav fixed">
		
		<li>
			<div class="userView teal">
			  <div class="background ">
				<!--img src=""-->
			  </div>
			  <a href="#!user" class="tooltipped" data-position="right" data-delay="50" data-tooltip="Logo" ><img class="circle" src="<?php echo base_url();?>img/binoculars.png"></a>
			  <a href="#!name"><span class="white-text name"><?php echo $user->company;?></span></a>
			  <a href="#!email"><span class="white-text email"><?php echo $user->email;?></span></a>
			</div>
		</li>
		<li class="<?php if($title=="Profile"){echo "active";}?>">
					<a href="<?=base_url();?>Event/materialprof"><i class="material-icons teal-text">perm_identity</i>Profile</a></li>
		<li class="<?php if($title=="Overview"){echo "active";}?>">
					<a href="<?=base_url();?>Event/overview"><i class="material-icons teal-text">description</i>Overview</a></li>
		<li class="<?php if($title=="History"){echo "active";}?>">
					<a href="<?=base_url();?>Event/history"><i class="material-icons teal-text">subject</i>History</a></li>
		<li class="<?php if($title=="Calendarview"){echo "active";}?>">
					<a href="<?=base_url();?>Event/calendarview"><i class="material-icons teal-text">today</i>Calendar</a></li>
		<li class="<?php if($title=="Cashier"){echo "active";}?>">
					<a href="<?=base_url();?>Event/cashier"><i class="material-icons teal-text">shopping_cart</i>Cashier</a></li>
		
		<li><div class="divider"></div></li>
	   <li class="<?php if($title=="Settings"){echo "active";}?>">
					<a href="<?=base_url();?>Event/settings"><i class="material-icons teal-text">settings</i>Settings</a></li>
		<li class="<?php if($title=="Settings"){echo "active";}?>">
					<a href="<?=base_url();?>Login/logout"><i class="material-icons teal-text">exit_to_app</i>Logout</a></li>
	  </ul>
