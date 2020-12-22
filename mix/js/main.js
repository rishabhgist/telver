$(document).ready(function(){
      $('#btn-login').click(function(){
      	/*loader*/
      		$("#loader").removeClass("loader-hide");
      		$('#btn-login').attr("disabled","disabled");
      		/*Check Values of fields*/
      	if (($('#username').val() == '') && ($('#password').val() == '')) {
      			$('.err-message').html('Invalid username & password');
      			$('.error-alert').addClass('show');
      			setTimeout(function() {
      			$("#loader").addClass("loader-hide");
      			$('#btn-login').removeAttr("disabled");
      			},2000)
      			setTimeout(function() {
					$('.error-alert').removeClass('show');
					
				},5000)
      	}else{

      		if (($('#username').val() == '')) {
      			$('.err-message').html('Invalid username');
				$('.error-alert').addClass('show');
				setTimeout(function() {
      			$("#loader").addClass("loader-hide");
      			$('#btn-login').removeAttr("disabled");
      			},2000)
				setTimeout(function() {
					$('.error-alert').removeClass('show');
				},5000)
      		}else if(($('#password').val() == '')){
      			$('.err-message').html('Invalid password');
				$('.error-alert').addClass('show');
				setTimeout(function() {
      			$("#loader").addClass("loader-hide");
      			$('#btn-login').removeAttr("disabled");
      			},2000)
				setTimeout(function() {
					$('.error-alert').removeClass('show');
				},5000)
      		}else{
      			$.ajax({
					type:'POST',
					url:'ds_store/validate.php',
					data: {
						username : $('#username').val(),
						password : $('#password').val()
					},
					success: function(data) {
						if (data == 'success') {
							$('.load').addClass("display");
							setTimeout(function(){
								window.location.replace('admin/');
							},2000)
						}else{
							setTimeout(function(){
							$('.err-message').html("User not found");
							$('.error-alert').addClass('show');
							$("#loader").addClass("loader-hide");
				      		$('#btn-login').removeAttr("disabled");
							setTimeout(function() {
								$('.error-alert').removeClass('show');
							},5000)
						},3000)
						}
					}
				})
      		}
      	}
      })
         
      $('#close-alert').click(function() {
      		$('.error-alert').removeClass('show');	
      })
})