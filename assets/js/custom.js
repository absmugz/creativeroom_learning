// Ajax post
$(document).ready(function() {
$(".confirm").click(function(e) {
e.preventDefault();

$('#account').html('<div class="row"><div class="text-center"><img src="http://creativeroom_learning/assets/images/preloader.gif"/><div><div>');

var order_ref = $("input[name=order_ref]").val();
var course_name = $("input[name=course_name]").val();
var bank_info = $("input[name=bank_info]").val();

  $.ajax({
                url: 'http://creativeroom_learning/payment/checkout/',
                type: "POST",
                dataType: 'json',
                data: {order_ref: order_ref, course_name: course_name, bank_info:bank_info },
                success: function (result) {
                    
 
                $('#account').html('<div class="row"><div><div class="panel-heading"><h5 class="text-subhead">' + result + '</h5><h5 class="text-subhead">Banking Details</h5><h5 class="text-subhead">Makabongwe Mabhena</h5><h5 class="text-subhead">FNB Cheque Account</h5><h5 class="text-subhead">62081001473</h5></div></div></div>');

}
});
});
});