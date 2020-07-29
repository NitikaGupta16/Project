<div id="headertop" class="fix">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-sm-3 col-xs-4">
                       <a href="http://themes.vibethemes.com/wplms/skins/default" class="homeicon"><img src="http://themes.vibethemes.com/wplms/skins/default/wp-content/themes/wplms/assets/images/logo.png" width="100" height="48" alt="WPLMS"></a> 
                    </div>
                    <div class="col-md-8 col-sm-9 col-xs-8">
                                            <ul class="topmenu">
                            <li><a href="#login" class="smallimg vbplogin">Login</a></li>
                            <li><a href="http://themes.vibethemes.com/wplms/skins/default/register/" class="vbpregister" title="Create an account">Sign Up</a>                             </li>
                        </ul>
                    <ul id="menu-top-menu" class="topmenu"><li id="menu-item-2043" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2043"><a href="http://themes.vibethemes.com/wplms/skins/default/all-courses/">Courses</a></li>
<li id="menu-item-2042" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2042"><a href="http://themes.vibethemes.com/wplms/skins/default/shop/">Shop</a></li>
<li id="menu-item-2044" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2044"><a href="http://themes.vibethemes.com/wplms/skins/default/cart/">Cart</a></li>
</ul>                    </div>
                                        <div id="vibe_bp_login" class="default_login active" style="display: block; position:fixed">
                    
    
    <form name="login-form" id="vbp-login-form" class="standard-form" action="http://themes.vibethemes.com/wplms/skins/default/wp-login.php" method="post">
      <label>Username<br>
      <input type="text" name="log" id="side-user-login" class="input" tabindex="1" value=""></label>
      
      <label>Password <a href="http://themes.vibethemes.com/wplms/skins/default/wp-login.php?action=lostpassword" tabindex="5" class="tip" title="" data-original-title="Forgot Password"><i class="icon-question"></i></a><br>
      <input type="password" tabindex="2" name="pwd" id="sidebar-user-pass" class="input" value=""></label>
      
  <div class="checkbox small">
    <input type="checkbox" name="sidebar-rememberme" id="sidebar-rememberme" value="forever"><label for="sidebar-rememberme">Remember Me</label>
  </div>
      
            <input type="submit" name="user-submit" id="sidebar-wp-submit" value="Log In" tabindex="100">
      <input type="hidden" name="user-cookie" value="1">
      <a href="http://themes.vibethemes.com/wplms/skins/default/register/" class="vbpregister" title="Create an account" tabindex="5">Sign Up</a>       </form>
    
    
    <div class="bp_social_connect">		<div id="fb-root" class="bp_social_connect_fb fb_reset"><div style="position: absolute; top: -10000px; height: 0px; width: 0px;"><div><iframe name="fb_xdm_frame_http" frameborder="0" allowtransparency="true" allowfullscreen="true" scrolling="no" id="fb_xdm_frame_http" aria-hidden="true" title="Facebook Cross Domain Communication Frame" tabindex="-1" src="http://staticxx.facebook.com/connect/xd_arbiter/r/P5DLcu0KGJB.js?version=42#channel=f7f6ef9a7fb51c&amp;origin=http%3A%2F%2Fthemes.vibethemes.com" style="border: none;"></iframe><iframe name="fb_xdm_frame_https" frameborder="0" allowtransparency="true" allowfullscreen="true" scrolling="no" id="fb_xdm_frame_https" aria-hidden="true" title="Facebook Cross Domain Communication Frame" tabindex="-1" src="https://staticxx.facebook.com/connect/xd_arbiter/r/P5DLcu0KGJB.js?version=42#channel=f7f6ef9a7fb51c&amp;origin=http%3A%2F%2Fthemes.vibethemes.com" style="border: none;"></iframe></div></div><div style="position: absolute; top: -10000px; height: 0px; width: 0px;"><div></div></div></div>
		<script type="text/javascript">
		window.fbAsyncInit = function() {
			FB.init({
				appId      : "716909178340645", // replace your app id here
				status     : true, 
				cookie     : true, 
				xfbml      : true,
				version    : 'v2.0'  
			});
			FB.Event.subscribe('auth.authResponseChange', function(response){
				
				if (response.status === 'connected'){
					 console.log('success');
				}else if (response.status === 'not_authorized'){
					console.log('failed');
				} else{
					console.log('unknown error');
				}
			});
		};
		(function(d){
			var js, id = 'facebook-jssdk', ref = d.getElementsByTagName('script')[0];
			if (d.getElementById(id)) {return;}
			js = d.createElement('script'); js.id = id; js.async = true;
			js.src = "//connect.facebook.net/en_US/all.js";
			ref.parentNode.insertBefore(js, ref);
		}(document));
				jQuery(document).ready(function($){
			$('.bp_social_connect_facebook').unbind('click');
			$('.bp_social_connect_facebook').on('click',function(){
					var $this = $(this);
					$this.addClass('loading');
					var security = $('#bp_social_connect_security').val();
					FB.login(function(response){
						if (response.authResponse){

							FB.api('/me?fields=email,link,first_name,name', function(response) {
								$.ajax({
									url: ajaxurl,
									data: 'action=bp_social_connect_facebook_login&id='+response.id+'&email='+response.email+'&first_name='+response.first_name+'&last_name='+response.last_name+'&gender='+response.gender+'&name='+response.name+'&link='+response.link+'&locale='+response.locale+'&security='+security,
									type: 'POST',
									dataType: 'JSON',
									success:function(data){
										$this.removeClass('loading');
										console.log(data);
										if (data.redirect_uri){
											if (data.redirect_uri =='refresh') {
												window.location.href =jQuery(location).attr('href');
											} else {
												window.location.href = data.redirect_uri;
											}
										}else{
											window.location.href = "http://themes.vibethemes.com/wplms/skins/default";
										}
									},
									error: function(xhr, ajaxOptions, thrownError) {
										$this.removeClass('loading');
										window.location.href = "http://themes.vibethemes.com/wplms/skins/default";
									}
								});
							
							});
						}else{

						}
					}, {scope: 'email,user_likes', return_scopes: true});
			});		
		});
		</script>
		<a class="bp_social_connect_facebook" href="javascript:void(0)">FACEBOOK</a><a class="bp_social_connect_google" href="https://accounts.google.com/o/oauth2/auth?response_type=code&amp;redirect_uri=http%3A%2F%2Fthemes.vibethemes.com%2Fwplms%2Fskins%2Fdefault%2F&amp;client_id=354362991023-7d3mt93lt52h2668np78vblj4u9bhev7.apps.googleusercontent.com&amp;scope=https%3A%2F%2Fwww.googleapis.com%2Fauth%2Fplus.me+https%3A%2F%2Fwww.googleapis.com%2Fauth%2Fuserinfo.email&amp;access_type=offline&amp;approval_prompt=force">GOOGLE</a><style>.bp_social_connect { display: inline-block; width: 100%; }
			.bp_social_connect_facebook{background:#3b5998;}.bp_social_connect_google{background:#DD4B39 !important;}.bp_social_connect > a{text-align:center;float:left;padding:15px;border-radius:2px;color:#fff !important;width:200px;margin:0 5px;}.bp_social_connect > a:first-child{margin-left:0;}
			.bp_social_connect > a:before{float:left;font-size:16px;font-family:fontawesome;opacity:0.6;}.bp_social_connect_facebook:before{content:"\f09a";}.bp_social_connect_google:before{content:"\f0d5";}</style></div>                   </div>
                </div>
            </div>
        </div>