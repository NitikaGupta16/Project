jQuery(document).ready(function($)
	{     
		//scroll feature begin
		var windowheight= 0;
		windowheight = $(window).height();
		$(window).scroll(function(e)
		{	  
			var windscroll = $(window).scrollTop();
			if (windscroll >= 850) 
			{
			  $('.wrapper section').each(function(i) 
				{
					var $this=$(this);
					var h1= $this.offset().top;
					if ($(this).position().top <= windscroll -h1)    
						{
							$('nav a.active').removeClass('active');
							$('nav a').eq(i).addClass('active');
						}
				});
			}
			else 
			{
				$('nav a.active').removeClass('active');
				$('nav a:first').addClass('active');
			}


			var navheight = $('.navbar-default').offset().top;
			if(windowheight < navheight)
			{
			  $('.navbar-default').addClass('fixed');
			  $('.to_home').addClass('show');
			  
			}

			else
			{
			  $('.to_home').removeClass('show');
			  $('.navbar-default').removeClass('fixed');
			}

		});
		
		//scroll feature closed
		/* contact form ajax begin*/
		
		 $('#contact_form').submit(function(e)
		{
			$.ajax
			({
				type: "POST",
				url: 'ajax.php',
				data: 
				{ 
					name: $('#contact_form input[id="name"]').val(),
					phone: $('#contact_form input[id="phone"]').val(),
					email: $('#contact_form input[id="email"]').val(),
					message: $('#contact_form textarea[id="message"]').val(),
				}
			})
			.done
			(function(html){
				var abc=html;
				console.log(html);
				$('span').remove('.success');
				$('span').remove('.notsuccess');
				$( "#name" ).removeClass('not_success_border');
				$( "#phone" ).removeClass('not_success_border');
				$( "#email" ).removeClass('not_success_border');
				$( "#message" ).removeClass('not_success_border');
				if((abc.indexOf("name_empty"))!= "-1")
				{
					$( "#name" ).after( '<span class="notsuccess">*Name cant be empty</span>' );
					$( "#name" ).focus();
					$( "#name" ).addClass('not_success_border ');
				}
				if((abc.indexOf("name_notchar"))!= "-1")
				{
					$( "#name" ).after( '<span class="notsuccess">*Name Only Characters</span>' );
					$( "#name" ).addClass('not_success_border');
					$( "#name" ).focus();
				}
				if((abc.indexOf("email_empty"))!= "-1")
				{
					$( "#email" ).after( '<span class="notsuccess">*Email Cannot be empty</span>' );
					$( "#email" ).addClass('not_success_border');
					$( "#email" ).focus();
				}
				if((abc.indexOf("email_invalid"))!= "-1")
				{
					$( "#email" ).after( '<span class="notsuccess">*Invalid Email!</span>' );
					$( "#email" ).addClass('not_success_border');
					$( "#email" ).focus();
				}
				if((abc.indexOf("phone_empty"))!= "-1")
				{
					$( "#phone" ).after( '<span class="notsuccess">Phone Cannot be empty</span>' );
					$( "#phone" ).addClass('not_success_border');
					$( "#phone" ).focus();
				}
				if((abc.indexOf("phone_invalid"))!= "-1")
				{
					$( "#phone" ).after( '<span class="notsuccess">*Please Enter Only Numbers!</span>' );
					$( "#phone" ).addClass('not_success_border');
					$( "#phone" ).focus();
				}
				if((abc.indexOf("phone_10"))!= "-1")
				{
					$( "#phone" ).after( '<span class="notsuccess">*Enter in this format XXXXXXXXXX</span>' );
					$( "#phone" ).addClass('not_success_border');
					$( "#phone" ).focus();
				}
				if((abc.indexOf("message_empty"))!= "-1")
				{
					$( "#message" ).after( '<span class="notsuccess">*Message Cannot be empty</span>' );
					$( "#message" ).addClass('not_success_border');
					$( "#message" ).focus();
				}
				if((abc.indexOf("invalid"))!= "-1")
				{
					$('#contact_form').append('<span class="notsuccess">*Message Not Sent</span>');
				}
				if((abc.indexOf("not"))!= "-1")
				{
					$('#contact_form').append('<span class="notsuccess">Message Not Sent, Server Error!</span>');
				}
				if((abc.indexOf("success"))!= "-1")
				{
					
					$('#contact_form').append('<span class="success">Message Sent</span>');
						setTimeout(function()
						{
							$('span').remove('.success');
						}, 1000);
						setTimeout(function()
						{
							$('h1').text("Thanks for the feedback.");
							$('form').remove('#contact_form');
						}, 1000);
				}
				
			})
			e.preventDefault();	 
		});
		
		/* contact form ajax closed*/
		/*admin login ajax begin*/
	
		$('#admin_form').submit(function(e)
		{
			$.ajax
			({
				type: "POST",
				url: 'ajax_admin.php',
				data: 
				{ 
					name: $('#admin_form input[id="name"]').val(),
					password: $('#admin_form input[id="password"]').val(),
				}
			})
			.done
			(function(html){
				var abc=html;
				console.log(html);
				$('span').remove('.success');
				$('span').remove('.notsuccess');
				$( "#name" ).removeClass('not_success_border');
				$( "#password" ).removeClass('not_success_border');
				if((abc.indexOf("name_empty"))!= "-1")
				{
					$( "#name" ).after( '<span class="notsuccess">*Name cant be empty</span>' );
					$( "#name" ).focus();
					$( "#name" ).addClass('not_success_border ');
				}
				if((abc.indexOf("name_notchar"))!= "-1")
				{
					$( "#name" ).after( '<span class="notsuccess">*Name Only Chars</span>' );
					$( "#name" ).focus();
					$( "#name" ).addClass('not_success_border ');
				}
				if((abc.indexOf("password_empty"))!= "-1")
				{
					$( "#password" ).after( '<span class="notsuccess">*Password cant be empty</span>' );
					$( "#password" ).focus();
					$( "#password" ).addClass('not_success_border ');
				}
				if((abc.indexOf("wrong_combination"))!= "-1")
				{
					$( "#admin_form" ).after( '<span class="notsuccess">*Invalid User/Password Combination</span>' );
					$( "#name" ).focus();
					$( "#name" ).addClass('not_success_border ');
					$( "#password" ).addClass('not_success_border ');
				}
				if((abc.indexOf("success"))!= "-1")
				{
					
					$('#admin_form').append('<span class="success">Login Successful</span>');
						setTimeout(function()
						{
							$('span').remove('.success');
						}, 5000);
            window.location.href = "admin.php";
				}
			})
			e.preventDefault();
			
			 
		});
		/*admin login ajax closed*/

		/*Magnific Popup open*/
		
		$('.popup_video').magnificPopup
		({
			type: 'inline'
		});
		
	 	/*Magnific Popup closed*/
		
		/*Magnific Popup gallery open*/
		$('.popup-gallery').magnificPopup
		({
			delegate: 'a',
			type: 'image',
			gallery: 
			{
				enabled: true,
				navigateByImgClick: true,
			},
		});
		/*Magnific Popup gallery closed*/
		
		/*owl crousel open*/
		$("#owl-1").owlCarousel
		({
			autoPlay:'2000'
		});
		/*Owl Crousel Closed*/
	});
//Document ready closed

$(window).load(function() {
  $('.flexslider').flexslider
  ({
    slideshow:"true" ,
    slideshowSpeed:"2000", 
    animation:"fade",
    controlNav:"false"
  });

    $('.flexslider2').flexslider
  ({
    slideshow:"true" ,
    slideshowSpeed:"1000", 
    animation:"slide",
    controlNav:"false"
  });

});


jQuery(document).ready(function($)
	{
    $( '.admin_hover').click
    (
      function()
      {
        $('.admin_options').toggleClass('admin_options_hover ');
      }
    )
	  var lastId;
	  var topMenu = $(".navbar-default"); 
	  var topMenuHeight = 0;//topMenu.outerHeight()+15
	  var menuItems = topMenu.find("a"),
	  scrollItems = menuItems.map(function()
	  {
			var item = $($(this).attr("href"));
			if (item.length) 
			{
				return item; 
			}
	  });

	  menuItems.click(function(e)
	  {
		e.preventDefault();
		var href = $(this).attr("href"),
		offsetTop = href === "#" ? 0 : $(href).offset().top-topMenuHeight-50;
		$('html, body').stop().animate(
		{ 
		  scrollTop: offsetTop
		}, 500);
	  
	  });
	  jQuery('.to_home').click(function(event){
		  event.preventDefault();
		  $('body,html').animate({
				  scrollTop: 0
				}, 800);
				return false;
		});
	});









