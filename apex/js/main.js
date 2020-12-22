$(document).ready(function(){

	$('#login').click(function() {
		
		$('.load').removeClass("display");
		setTimeout(function() {	
		$.ajax({
			type:'POST',
			url:'validate.php',
			data: {
				username : $('#username').val(),
				password : $('#password').val()
			},
			success: function(data) {
				if (data == 'success') {
					$('.load').addClass("display");
					setTimeout(function(){
						window.location.replace('../admin');
					},1000)
				}else{
					$('.load').addClass("display");

				}
			}
		})
		},4000)
	})

    });
		$('#fade').click(function() {
					
					$('.sidenav').css("width","250px");
					$('#main').css("margin-left","250px");
					$('#bar').removeClass("fa-bars");
					$('#bar').addClass("fa-times");
					$('#fade').attr("onclick","clos();");
					$('#fade').attr("id","clos");
				});
	
			function clos() {
				
				$('.sidenav').css("width","0");
				$('#main').css("margin-left","0");
				$('#bar').removeClass("fa-times");
				$('#bar').addClass("fa-bars");
				$('#clos').attr("id","fade");
				$('#fade').removeAttr("onclick");


			}
		 $(window).scroll(function(){
		  	var scroll = $(window).scrollTop();
			  if (scroll > 80) {
			    $("#navbar").addClass("nav-scrolled");
			  }

			  else{
				  $("#navbar").removeClass("nav-scrolled");  	
			  }
		  })