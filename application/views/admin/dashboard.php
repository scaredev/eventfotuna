<main>
	<div class="ul-wrapper">
		<div class="row">
                            <div class="col s12 m6 l3">
                                <div class="card">
                                    <div class="card-content  green white-text">
                                        <p class="card-stats-title"><i class="mdi-social-group-add"></i> Clients</p>
                                        <h4 class="card-stats-number">566</h4>
                                        <p class="card-stats-compare"><i class="mdi-hardware-keyboard-arrow-up"></i> 15% <span class="green-text text-lighten-5">from yesterday</span>
                                        </p>
                                    </div>
                                    <div class="card-action  green darken-2">
                                        <div id="clients-bar" class="center-align"><canvas width="227" height="25" style="display: inline-block; width: 227px; height: 25px; vertical-align: top;"></canvas></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col s12 m6 l3">
                                <div class="card">
                                    <div class="card-content pink lighten-1 white-text">
                                        <p class="card-stats-title"><i class="mdi-editor-insert-drive-file"></i> Barista</p>
                                        <h4 class="card-stats-number">1806</h4>
                                        <p class="card-stats-compare"><i class="mdi-hardware-keyboard-arrow-down"></i> 3% <span class="deep-purple-text text-lighten-5">from last month</span>
                                        </p>
                                    </div>
                                    <div class="card-action  pink darken-2">
                                        <div id="invoice-line" class="center-align"><canvas width="202" height="25" style="display: inline-block; width: 202px; height: 25px; vertical-align: top;"></canvas></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col s12 m6 l3">
                                <div class="card">
                                    <div class="card-content blue-grey white-text">
                                        <p class="card-stats-title"><i class="mdi-action-trending-up"></i> Open Orders</p>
                                        <h4 class="card-stats-number">$806.52</h4>
                                        <p class="card-stats-compare"><i class="mdi-hardware-keyboard-arrow-up"></i> 80% <span class="blue-grey-text text-lighten-5">from yesterday</span>
                                        </p>
                                    </div>
                                    <div class="card-action blue-grey darken-2">
                                        <div id="profit-tristate" class="center-align"><canvas width="227" height="25" style="display: inline-block; width: 227px; height: 25px; vertical-align: top;"></canvas></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col s12 m6 l3">
                                <div class="card">
                                    <div class="card-content purple white-text">
                                        <p class="card-stats-title"><i class="mdi-editor-attach-money"></i>Closed Orders</p>
                                        <h4 class="card-stats-number">$8990.63</h4>
                                        <p class="card-stats-compare"><i class="mdi-hardware-keyboard-arrow-up"></i> 70% <span class="purple-text text-lighten-5">last month</span>
                                        </p>
                                    </div>
                                    <div class="card-action purple darken-2">
                                        <div id="sales-compositebar" class="center-align"><canvas width="214" height="25" style="display: inline-block; width: 214px; height: 25px; vertical-align: top;"></canvas></div>
                                    </div>
                                </div>
                            </div>
        </div>
		<div class="row">
			<div class="col s12 m6">
          <div class="card ">
            <div class="card-content">
              <span class="card-title">Latest Open Orders</span>
              <p>Lorem isda.</p>
				  <table  class="striped">
					<thead>
					<tr>
						  <th data-field="id">Costumer Name</th>
						  <th data-field="name">Party Ttype</th>
						  <th data-field="price">Participants</th>
					  </tr>
					</thead>
					<tbody>
					<?php if( !empty($orders) ) { ?>
						<?php foreach($orders as $order){?>
					  <tr>
						<td><?php echo $order->costumer_fname;?></td>
						<td><?php echo $order->party; ?></td>
						<td><?php echo $order->participants;?></td>
					  </tr>
						<?php } ?>
					<?php } ?>	 
					</tbody>
				  </table>
            </div>
            <div class="card-action">
              <a href="#">This is a link</a>
              <a href="#">This is a link</a>
            </div>
          </div>
        </div>
		  <div class="col s12 m6">
          <div class="card ">
            <div class="card-content">
              <span class="card-title">Latest Closed Orders</span>
              <p>I am a very simple card. I am good at containing small bits of information.
              I am convenient because I require little markup to use effectively.</p>
				 <table  class="striped">
					<thead>
					<tr>
						  <th data-field="id">Costumer Name</th>
						  <th data-field="name">Party Ttype</th>
						  <th data-field="price">Barista</th>
					  </tr>
					</thead>
					<tbody>
					<?php if( !empty($closed) ) { ?>
						<?php foreach($closed as $close){?>
					  <tr>
						<td><?php echo $close->costumer_fname;?></td>
						<td><?php echo $close->party; ?></td>
						<td><?php echo $close->winner_id;?></td>
					  </tr>
						<?php } ?>
					<?php } ?>	 
					</tbody>
				  </table>
            </div>
            <div class="card-action">
              <a href="#">This is a link</a>
              <a href="#">This is a link</a>
            </div>
          </div>
        </div>
		</div>
		<div class="row">
        <div class="col s12 m6">
          <div class="card ">
            <div class="card-content">
              <span class="card-title">New Costumers</span>
              <p>I am a very simple card. I am good at containing small bits of information.
              I am convenient because I require little markup to use effectively.</p>
			  <ul class="collection">
					<li class="collection-item avatar">
					  <img src="images/yuna.jpg" alt="" class="circle">
					  <span class="title">Title</span>
					  <p>First Line <br>
						 Second Line
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
            <div class="card-action">
              <a href="#">This is a link</a>
              <a href="#">This is a link</a>
            </div>
          </div>
        </div>
      
        <div class="col s12 m6">
          <div class="card ">
            <div class="card-content">
              <span class="card-title">New Barista</span>
              <p>I am a very simple card. I am good at containing small bits of information.
              I am convenient because I require little markup to use effectively.</p>
			  <ul class="collection">
					<li class="collection-item avatar">
					  <img src="images/yuna.jpg" alt="" class="circle">
					  <span class="title">Title</span>
					  <p>First Line <br>
						 Second Line
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
            <div class="card-action">
              <a href="#">This is a link</a>
              <a href="#">This is a link</a>
            </div>
          </div>
        </div>
      </div>
	  
		
	</div>
	
</div>