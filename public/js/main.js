jQuery( document ).ready(function() {
    //console.log( "ready!" );

    $.ajaxSetup({
	  headers: {
	    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
	  }
	});

    $( "#modal-auth-a" ).click(function() {
		$( "#modal-auth" ).fadeIn();
		return false;
	});

	$( ".popup-close-2W0cr" ).click(function() {
		$( "#modal-auth" ).fadeOut();
		return false;
	});

	$( "input" ).click(function() {

		 if ( $(this).parent().hasClass("alert-error") ) {
			 $(this).parent().removeClass("alert-error") ;
		}
	});

	$( ".input-password-toggle-3XvdM" ).click(function() {

		var type = $('#password').attr('type');

		 if ( type == "password" ) {
			$('#password').attr('type','text');
			$('#password').attr('type','text');
			$('.input-root-25XI-').addClass('input-password-root_show-password');
		}
		else if( type == "text" ){
			$('#password').attr('type','password');
			$('.input-root-25XI-').removeClass('input-password-root_show-password');
		}
	});

	$( "#button-login" ).click(function() {
		//event.preventDefault()
		var postData = $( "#login-form" ).serialize();

		$.ajax({
		  type: "POST",
		  //dataType: 'json',
		  url: '/authlogin',
		  data: postData,
		  success: function(data){

		  	//console.log(data);

		  		if ($.isEmptyObject(data.error)) 
		  		{
		  			console.log(data);

		  			$("#modal-auth").fadeOut();

		  			$(location).attr('href', '/profile');

		  		}else
		  		{
		  				console.log(data.error);
			  		var errors = data.error;
			  		var fistItemKey = Object.keys(errors)[0];

			  		//console.log(fistItemKey);

			  		var id = "#"+fistItemKey;

			  		if (fistItemKey == 'email') {
			  			$(id).parent().addClass("alert-error");
			  		}
			  		else if(fistItemKey == 'password'){
			  			$(id).parent().addClass("alert-error");
			  		}

				  	//var fistItem = Object.values(errors)[0];

				  	//console.log(fistItem[0]);
			  	//.email["0"]

			  	}

		  	//$("#modal-auth").fadeOut();

		  	//$(location).attr('href', '/profile');
		  	
		  },
		  error: function(data){

		  
		  	//.email["0"]

		  	}

		 
		  
		})

	});
});