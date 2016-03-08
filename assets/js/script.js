$(document).ready(function(){
  $.material.init();
  $('.close_error').click(function(){
    $('.error_capacity').hide('slow');
  });
  $(".submit_button").click(function(event){
    $('.app_submit').hide('slow');
    $('.app_loading').show('slow');
    var input=$('.form-control');
    var values = {};
    var i=0;
    input.each(function() {
      if (i==5){
        values[i] = $(this).val();
      }
      else{
        values[i] = $(this).val();
        i++;
      }
    });
    /*$.ajax({
      type: "POST",
      url: "https://code-igniter-blog-asergey91.c9users.io/index.php/reservation/make_reservation",
      dataType: 'json',
      data: {
        email: values[0],
        first_name: values[1],
        last_name: values[2],
        tel: values[3],
        size: values[4],
        start: values[5]
      },
      success: function(res){
        if (res['status']=='success'){
          $('.customer_input').hide('slow');
          $('.customer_success').show('slow');
        }
        else if (res['status']=='fail'){
          $('.app_loading').hide('slow');
          $('.app_submit').show('slow');
          $('.error_capacity').show('slow');
          $('.error_content').text(res['error']);
        }
      },
      fail: function(res){
        $('.app_loading').hide('slow');
        $('.app_submit').show('slow');
        $('.error_capacity').show('slow');
      }
    });*/
    
  });
});