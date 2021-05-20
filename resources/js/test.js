$(document).ready(function() {

  $("#registerUser").click(function(event){
      event.preventDefault();

  
      let name = $("input[name=name]").val();
      let email = $("input[name=email]").val();
      let password = $("input[name=password]").val();
      let _token   = $('meta[name="csrf-token"]').attr('content');

      $.ajax({
        url: "https://first-laravel-nlks.herokuapp.com/api/user/create",
        type:"POST",
        data:{
          name:name,
          email:email,
          password:password,
          _token: _token
        },
        success:function(response){
          console.log(response);
          if(response) {
            $('.success').text(response.success);
            $("#ajaxform")[0].reset();
          }
        },
       });    
  });
});