						<div class="logo">
							<a href="http://event.design4web.dk/"><img src="<?=base_url();?>img/profilepic.jpg" alt="..." class="img-circle img-fluid hidden-xs hidden-sm">
							</a>
						</div>
						<div class="navi">
							<ul>
								<li class="<?php if($this->uri->segment(1)=="Home"){echo "active";}?>">
								<a href="<?=base_url();?>Event/dashboard"><i class="fa fa-home" aria-hidden="true"></i><span class="hidden-xs hidden-sm">Home</span></a></li>	
								<li class="<?php if($title=="Overview"){echo "active";}?>">
								<a href="<?=base_url();?>Event/overview"><i class="fa fa-tasks" aria-hidden="true"></i><span class="hidden-xs hidden-sm">Overview</span></a></li>
								<li class="<?php if($title=="History"){echo "active";}?>">
								<a href="<?=base_url();?>Event/history"><i class="fa fa-bar-chart" aria-hidden="true"></i><span class="hidden-xs hidden-sm">History</span></a></li>
								<li class="<?php if($title=="Profile"){echo "active";}?>">
								<a href="<?=base_url();?>Event/profile"><i class="fa fa-user" aria-hidden="true"></i><span class="hidden-xs hidden-sm">Profile</span></a></li>								
								<li class="<?php if($title=="Calendarview"){echo "active";}?>">
								<a href="<?=base_url();?>Event/calendarview"><i class="fa fa-calendar" aria-hidden="true"></i><span class="hidden-xs hidden-sm">Calendar</span></a></li>
								<li class="<?php if($title=="Cashier"){echo "active";}?>">
								 <a href="<?=base_url();?>Event/cashier"><i class="fa fa-shopping-cart" aria-hidden="true"></i><span class="hidden-xs hidden-sm">Cashier</span></a></li>
								<li class="<?php if($title=="Settings"){echo "active";}?>">
								 <a href="<?=base_url();?>Event/settings"><i class="fa fa-cog" aria-hidden="true"></i><span class="hidden-xs hidden-sm">Setting</span></a></li>
							</ul>
						</div>