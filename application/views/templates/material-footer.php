	 
	 <footer class="default-primary-color">
          <div class="container">
            <div class="row">
              <div class="col l6 s12">
                <h5 class="white-text">Footer Content</h5>
                <p class="grey-text text-lighten-4">Lrem ipsonm.........</p>
              </div>
              <div class="col l4 offset-l2 s12">
                <h5 class="white-text">Links</h5>
                <ul>
                  <li><a class="grey-text text-lighten-3" href="#!">Link 1</a></li>
                  <li><a class="grey-text text-lighten-3" href="#!">Link 2</a></li>
                  <li><a class="grey-text text-lighten-3" href="#!">Link 3</a></li>
                  <li><a class="grey-text text-lighten-3" href="#!">Link 4</a></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="footer-copyright">
            <div class="container">
            <i class="material-icons white-text">copyright</i> 2016 Copyright Text
            <a class="grey-text text-lighten-4 right" href="#!">More Links</a>
            </div>
          </div>
        </footer>
	 
	 <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
      <script type="text/javascript" src="<?php echo base_url();?>js/materialize.min.js"></script>
	   <script type="text/javascript">
	  $('.carousel.carousel-slider').carousel({full_width: true});
	  </script>
	  <script type="text/javascript">
	  
    $(document).ready(function(){
      $('.parallax').parallax();
    });
        </script>
	<script type="text/javascript">
		$(".button-collapse").sideNav({
			menuWidth: 300, // Default is 240
			edge: 'left', // Choose the horizontal origin
			closeOnClick: true, // Closes side-nav on <a> clicks, useful for Angular/Meteor
			draggable: true});
			
		$('.collapsible').collapsible();
	</script>
	<script type="text/javascript">
	$(document).ready(function() {
    $('select').material_select();
  });</script>
  <script type="text/javascript">
  $(document).ready(function(){
    // the "href" attribute of .modal-trigger must specify the modal ID that wants to be triggered
    $('.modal').modal();
  });
  </script >
  <script type="text/javascript">
  $('.datepicker').pickadate({
    selectMonths: true, // Creates a dropdown to control month
    selectYears: 15 ,// Creates a dropdown of 15 years to control year
	formatSubmit: 'yyyy-mm-dd'
  });</script>
  <script type="text/javascript">
	$(document).ready(function(){
    $('.collapsible').collapsible();
  });
  </script>
    </body>
	
  </html>