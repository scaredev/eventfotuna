	 
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
	  
	  $(document).ready(function() {
      $('input#tel, input#zipcode, input#zipcode2, input#mobile').characterCounter();});
	</script>
	   <script type="text/javascript">
	  $('.carousel.carousel-slider').carousel({full_width: true});
	  </script>
	    <script type="text/javascript">	  
				
		  $('.dropdown-button').dropdown({
			  inDuration: 300,
			  outDuration: 225,
			  constrain_width: false, // Does not change width of dropdown to that of the activator
			  belowOrigin: true, // Displays dropdown below the button
			  hover: false, // Activate on hover
			  gutter: 0, // Spacing from edge
			  
			  alignment: 'left' // Displays dropdown with edge aligned to the left of button
			}
		  );
               
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
  
 
  <script type="text/javascript">
  
   $('#company_form').validate({
        rules: {
            uname: {
                required: true,
                minlength: 5
            },
            cemail: {
                required: true,
                email:true
            },
            password: {
				required: true,
				minlength: 5
			},
			cpassword: {
				required: true,
				minlength: 5,
				equalTo: "#password"
			},
			curl: {
                required: true,
                url:true
            },
            crole:"required",
            ccomment: {
				required: true,
				minlength: 15
            },
			zipcode: {
                required: true,
				minlength: 8,
               
			},
            cgender:"required",
			cagree:"required",
			
        },
        //For custom messages
        messages: {
            uname:{
                required: "Enter a username",
                minlength: "Enter at least 5 characters"
            },
            curl: "Enter your website",
        },
        errorElement : 'div',
        errorPlacement: function(error, element) {
          var placement = $(element).data('error');
          if (placement) {
            $(placement).append(error)
          } else {
            error.insertAfter(element);
          }
        }
     });
	 </script>
    </body>
	
  </html>