<script>
$("#reg-form").validate();

$("#order-form").validate({
    rules: {
	tel:"required",
	date-time:"required",
	participant:"required",
	address:"required",
	agreement:"required",
    name: "required",
    email: {
      required: true,
      email: true
    }
  },
  messages: {
    name: "Please specify your name",
    email: {
      required: "We need your email address to contact you",
      email: "Your email address must be in the format of name@domain.com"
    }
  }
});


</script>
<script type="text/javascript">
    $(".form_datetime").datetimepicker({
        format: "yyyy-mm-dd hh:ii",
        autoclose: true,
        todayBtn: true,
        pickerPosition: "bottom",
		startDate: "2016-01-01 10:00",
        minuteStep: 30
    });
</script>   

  </body>
</html>