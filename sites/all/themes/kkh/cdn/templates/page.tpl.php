<?php
/**
 * @file
 * Default theme implementation to display a single Drupal page.
 *
 * The doctype, html, head and body tags are not in this template. Instead they
 * can be found in the html.tpl.php template in this directory.
 *
 * Available variables:
 *
 * General utility variables:
 * - $base_path: The base URL path of the Drupal installation. At the very
 *   least, this will always default to /.
 * - $directory: The directory the template is located in, e.g. modules/system
 *   or themes/bartik.
 * - $is_front: TRUE if the current page is the front page.
 * - $logged_in: TRUE if the user is registered and signed in.
 * - $is_admin: TRUE if the user has permission to access administration pages.
 *
 * Site identity:
 * - $front_page: The URL of the front page. Use this instead of $base_path,
 *   when linking to the front page. This includes the language domain or
 *   prefix.
 * - $logo: The path to the logo image, as defined in theme configuration.
 * - $site_name: The name of the site, empty when display has been disabled
 *   in theme settings.
 * - $site_slogan: The slogan of the site, empty when display has been disabled
 *   in theme settings.
 *
 * Navigation:
 * - $main_menu (array): An array containing the Main menu links for the
 *   site, if they have been configured.
 * - $secondary_menu (array): An array containing the Secondary menu links for
 *   the site, if they have been configured.
 * - $breadcrumb: The breadcrumb trail for the current page.
 *
 * Page content (in order of occurrence in the default page.tpl.php):
 * - $title_prefix (array): An array containing additional output populated by
 *   modules, intended to be displayed in front of the main title tag that
 *   appears in the template.
 * - $title: The page title, for use in the actual HTML content.
 * - $title_suffix (array): An array containing additional output populated by
 *   modules, intended to be displayed after the main title tag that appears in
 *   the template.
 * - $messages: HTML for status and error messages. Should be displayed
 *   prominently.
 * - $tabs (array): Tabs linking to any sub-pages beneath the current page
 *   (e.g., the view and edit tabs when displaying a node).
 * - $action_links (array): Actions local to the page, such as 'Add menu' on the
 *   menu administration interface.
 * - $feed_icons: A string of all feed icons for the current page.
 * - $node: The node object, if there is an automatically-loaded node
 *   associated with the page, and the node ID is the second argument
 *   in the page's path (e.g. node/12345 and node/12345/revisions, but not
 *   comment/reply/12345).
 *
 * Regions:
 * - $page['help']: Dynamic help text, mostly for admin pages.
 * - $page['highlighted']: Items for the highlighted content region.
 * - $page['content']: The main content of the current page.
 * - $page['sidebar_first']: Items for the first sidebar.
 * - $page['sidebar_second']: Items for the second sidebar.
 * - $page['header']: Items for the header region.
 * - $page['footer']: Items for the footer region.
 *
 * @see bootstrap_preprocess_page()
 * @see template_preprocess()
 * @see template_preprocess_page()
 * @see bootstrap_process_page()
 * @see template_process()
 * @see html.tpl.php
 *
 * @ingroup themeable
 */
?>
<!--TOP-->
		    <div class="section top hidden-xs" role="top">
		      <div class="container">
		        <div class="row">  
				<div class="col-sm-6 col-xs-12 links-top">
				   <a href="http://medicalcity.ksu.edu.sa/">الرئيسية </a> | 
				   <a href="http://medicalcity.ksu.edu.sa/ar/sitemap">خريطة الموقع </a> | 
				   <a href="http://medicalcity.ksu.edu.sa/ar/contact">اتصل بنا </a>
				  </div>
				  <!-- col-social -->
				  <div class="col-sm-6 col-xs-12 social-top col-social-top">
				  <div class="twitter-follow"><iframe id="twitter-widget-0" scrolling="no" frameborder="0" allowtransparency="true" class="twitter-follow-button twitter-follow-button-rendered" title="Twitter Follow Button" src="http://platform.twitter.com/widgets/follow_button.fd774b599f565016d763dd860cb31c79.en.html#dnt=false&amp;id=twitter-widget-0&amp;lang=en&amp;screen_name=ksumedicalcity&amp;show_count=false&amp;show_screen_name=true&amp;size=m&amp;time=1461134567947" style="position: static; visibility: visible; width: 149px; height: 20px;" data-screen-name="ksumedicalcity"></iframe>
		          <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script></div>
				  <a href="https://www.facebook.com/pages/Ksumedicalcity/261124750734401" target="_blank" title="" data-toggle="tooltip" data-placement="bottom" class="btn azm-social azm-size-26 azm-r-square azm-facebook" data-original-title="Facebook"><i class="fa fa-facebook"></i></a>
				  <a href="https://twitter.com/ksumedicalcity" target="_blank" title="" data-toggle="tooltip" data-placement="bottom" class="btn azm-social azm-size-26 azm-r-square azm-twitter" data-original-title="Twitter"><i class="fa fa-twitter"></i></a>
				  <a href="http://www.youtube.com/user/ksumedicalcity" target="_blank" title="" data-toggle="tooltip" data-placement="bottom" class="btn azm-social azm-size-26 azm-r-square azm-youtube" data-original-title="Youtube"><i class="fa fa-youtube"></i></a>
				  <a href="http://instagram.com/Ksumedicalcity" target="_blank" title="" data-toggle="tooltip" data-placement="bottom" class="btn azm-social azm-size-26 azm-r-square azm-instagram" data-original-title="Instagram"><i class="fa fa-instagram"></i></a>
				  <a href="http://medicalcity.ksu.edu.sa/ar/rss" title="" data-toggle="tooltip" data-placement="bottom" class="btn azm-social azm-size-26 azm-r-square azm-rss" data-original-title="Rss"><i class="fa fa-rss"></i></a>
				  <a href="https://plus.google.com/u/0/111481662818802536210/posts" target="_blank" title="" data-toggle="tooltip" data-placement="bottom" class="btn azm-social azm-size-26 azm-r-square azm-google-plus" data-original-title="Google Plus"><i class="fa fa-google-plus"></i></a>
				  <a href="http://medicalcity.ksu.edu.sa/ar/contact" target="_self" title="" data-toggle="tooltip" data-placement="bottom" class="btn azm-social azm-size-26 azm-r-square azm-email-1" data-original-title="contact-us"><i class="fa fa-envelope"></i></a>
				  </div> <!--/col-social-->
		        </div>
		      </div>
    		</div>
<!--/TOP-->
<div class="container">
	<div class="design-container">
    	<!--header-->
		<header id="header hidden-xs" role="header" class="<?php print $navbar_classes; ?>">
			<?php /*if (!empty($site_slogan)): ?>
      		<p class="lead"><?php print $site_slogan; ?></p>
    		<?php endif; ?>
		    <?php if (!empty($primary_nav) || !empty($secondary_nav) || !empty($page['navigation'])): ?>
		      <div class="navbar-collapse collapse">
		        <nav role="navigation">
		          <?php if (!empty($primary_nav)): ?>
		            <?php print render($primary_nav); ?>
		          <?php endif; ?>
		          <?php if (!empty($secondary_nav)): ?>
		            <?php print render($secondary_nav); ?>
		          <?php endif; ?>
		        </nav>
		      </div>
		    <?php endif;*/ ?>
			<div class="container">
				<div class="row">
				    <div class="col-xs-12 col-sm-5">
						<div class="col-xs-12 col-sm-3 logocol">
						<!-- site logo--> 
				        </div>
							<div class="col-xs-12 col-sm-9 textlogo">
				           <!-- site name -->
				        </div>
					</div>
				            <div class="col-xs-12 col-sm-7">

				<!-- weather -->
				<div id="weather"><h2><i class="iconw-28"></i><span class="tempc">24°C</span></h2><ul><li>Riyadh, SA</li><li class="currently">Mostly Cloudy</li></ul></div>
				  <!-- col-search -->
				                <div class="col-search">
				                  <!--searh form--><form class="navbar-form navbar-right col-search-form helloClass" method="post" action="" data-publisher-updated="true">
								<div class="hiddenFields">
										<input type="hidden" name="ACT" value="6">
										<input type="hidden" name="RES" value="20">
										<input type="hidden" name="meta" value="XyvC3EX/rFXi93Pq3TM4BBPpQxNyslqzQ8nuavqINCKd8ZuzfblZvuM1toSyFR7FurNxz0+L2sLH9+hWxIdNkWGHAPU8Qy0/t1nB1YWdbCTvDWERz4d9NYGH5r+Dajgcb6MaTntiVSgA3FDeHZSDfhxhCddinJgrXlWs4zUIeVn3vDoa3RzOyqf1LdwZDlZvKtrw6M/3S0uBl2cV7OHxC+5iXLRF4nwiRxJS7XAe+32wMr2zplBWgPUq/st5phItdKQ8I3QizBKnuGWhW3OMJx9jNghTfiZLu2IfUbgdQQlXD0qc3k9ja9WFESiL6rVw2hlG0YMlVQgirm9GAMo9DesBb6b7DSRJC1T5k5faj9McJDXXaknoJBqihCD6Kfck/0/VFAla2hQyxvqCs/7w9COjLm8J/IlpkbABFZf9nCw=">
										<input type="hidden" name="site_id" value="1">
										<input type="hidden" name="csrf_token" value="a1312e3b50d483602a80185f527d7d8fc85c0d0b">
								</div>


				                      <div class="form-group">
				                        <input name="keywords" class="form-control" placeholder="ابحث عن أي شي"> 
				                      </div>
				                      <button type="submit" class="btn btn-inverse"><i class="fa fa-search"></i></button>

				                  </form>
				                    
				                </div><!--/col-search-->  
								<div id="medicalcitydate">الأربعاء 20 إبريل 2016 م - 13 رجب 1437 هـ &nbsp;&nbsp;</div>
				            </div>
				        </div>
			</div>
		</header>
		<!--/header-->
		<!-- navigation-->
		<nav class="navbar navbar-fixed navbar-gray yamm navigation affix-top" role="navigation" data-spy="affix" data-offset-top="167" data-offset-bottom="00">
    	<div class="container">
		<div class="row">
	
	
		<div class="navbar-header">
            <div class="col-xs-2">
		<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#menu-collapse">
            <i class="fa fa-bars"></i>
          </button>
     
		 </div>
		<div class="col-xs-10">
		  	<a class="navbar-brand" href="#">المدينة الطبية الجامعية
	        <img alt="Brand" src="http://medicalcity.ksu.edu.sa/assets/img/icon-36-ldpi.png">
	      	</a>
			  <!-- col-search -->
	                <div class="col-search hidden-xs">
	                  	<form class="navbar-form navbar-right col-search-form helloClass" method="post" action="http://medicalcity.ksu.edu.sa/ar/" data-publisher-updated="true">
						<div class="hiddenFields">
							<input type="hidden" name="ACT" value="6">
							<input type="hidden" name="RES" value="20">
							<input type="hidden" name="meta" value="XyvC3EX/rFXi93Pq3TM4BBPpQxNyslqzQ8nuavqINCKd8ZuzfblZvuM1toSyFR7FurNxz0+L2sLH9+hWxIdNkWGHAPU8Qy0/t1nB1YWdbCTvDWERz4d9NYGH5r+Dajgcb6MaTntiVSgA3FDeHZSDfhxhCddinJgrXlWs4zUIeVn3vDoa3RzOyqf1LdwZDlZvKtrw6M/3S0uBl2cV7OHxC+5iXLRF4nwiRxJS7XAe+32wMr2zplBWgPUq/st5phItdKQ8I3QizBKnuGWhW3OMJx9jNghTfiZLu2IfUbgdQQlXD0qc3k9ja9WFESiL6rVw2hlG0YMlVQgirm9GAMo9DesBb6b7DSRJC1T5k5faj9McJDXXaknoJBqihCD6Kfck/0/VFAla2hQyxvqCs/7w9COjLm8J/IlpkbABFZf9nCw=">
							<input type="hidden" name="site_id" value="1">
							<input type="hidden" name="csrf_token" value="79f50d34a6ee24eaa982e2edd9cdcf7c02a93c1f">
						</div>
						<div class="form-group">
				                        <input name="keywords" class="form-control" placeholder="ابحث عن أي شي"> 
				    	</div>
		             		<button type="submit" class="btn btn-inverse"><i class="fa fa-search"></i></button>

		                </form>
	                    
	            	</div><!--/col-search--> 
		
        </div>

 		</div>

 		</div>
	
        <!-- navbar-collapse -->
        <div class="collapse navbar-collapse" id="menu-collapse">
          <ul class="nav navbar-nav  navbar-left _navbar-primary">
                       
              
              
        </div><!--/navbar-collapse -->

   			</div>
		</nav>
		<!-- navigation-->
		<!-- footer -->
		<footer class="footer" role="footer">
			  <div class="container">
			    <div class="row">
			      <div class="col-md-4">
			        <!-- col-logo -->
			        <div class="col-logo">
			          <div class="row">
			            <div class="col-xs-12 col-md-12">
			              <img src="http://medicalcity.ksu.edu.sa/assets/img/footer_logo.png" alt="" class="img-responsive blacklogo">
						  	<div class="mapco" style="width: 352px; height: 145px;"><div class="zoomicon"></div><a class="popup-gmaps" href="https://maps.google.com/maps?q=Medical+City,+King+Saud+University,+Riyadh&amp;hl=en&amp;t=v">
				<img id="medicalcitymap" class="img-responsive" style="border-radius: 20px 0px;" src="http://medicalcity.ksu.edu.sa/assets/img/map1.png" data-zoom-image="http://medicalcity.ksu.edu.sa/assets/img/map2.jpg">
				</a></div>
			            </div>
			          </div>
			        </div><!--/col-logo-->
			      </div>     
			      <div class="col-sm-6 col-xs-12 col-md-3">
 			      </div>
			      
			      <div class="col-sm-6 col-xs-12 col-md-3">
 			      </div>
				  <div class="hidden-xs col-xs-12 col-md-2">
				  <img src="http://medicalcity.ksu.edu.sa/assets/img/qr_code.png" class="img-responsive qrcode" alt="">
			<ul class="smartcode">
			<!-- <li><img src="http://medicalcity.ksu.edu.sa/assets/img/market_03.png" alt=""></li> -->
			<li><a href="http://play.google.com/store/apps/details?id=com.medicalcity.ksu" class="app-android"></a></li>
			<li><a href="#" class="app-wp8"></a></li>
			</ul>
				  

			      </div>
			    </div>

			  </div>
		</footer>
		<!-- /footer -->
	</div>
</div>
<!-- bottom_footer-->
<div class="section bottom" role="bottom">
      <div class="container">
        <div class="row">  
		  <div class="col-sm-3 col-xs-12 social-top col-social-top">
		  <a href="https://www.facebook.com/pages/Ksumedicalcity/261124750734401" target="_blank" title="" data-toggle="tooltip" data-placement="top" class="btn azm-social azm-size-26 azm-r-square azm-facebook" data-original-title="Facebook"><i class="fa fa-facebook"></i></a>
		  <a href="https://twitter.com/ksumedicalcity" target="_blank" title="" data-toggle="tooltip" data-placement="top" class="btn azm-social azm-size-26 azm-r-square azm-twitter" data-original-title="Twitter"><i class="fa fa-twitter"></i></a>
		  <a href="http://www.youtube.com/user/ksumedicalcity" target="_blank" title="" data-toggle="tooltip" data-placement="top" class="btn azm-social azm-size-26 azm-r-square azm-youtube" data-original-title="Youtube"><i class="fa fa-youtube"></i></a>
		  <a href="http://instagram.com/Ksumedicalcity" target="_blank" title="" data-toggle="tooltip" data-placement="top" class="btn azm-social azm-size-26 azm-r-square azm-instagram" data-original-title="Instagram"><i class="fa fa-instagram"></i></a>
		  <a href="http://medicalcity.ksu.edu.sa/ar/rss" title="" data-toggle="tooltip" data-placement="top" class="btn azm-social azm-size-26 azm-r-square azm-rss" data-original-title="Rss"><i class="fa fa-rss"></i></a>
		  <a href="https://plus.google.com/u/0/111481662818802536210/posts" target="_blank" title="" data-toggle="tooltip" data-placement="top" class="btn azm-social azm-size-26 azm-r-square azm-google-plus" data-original-title="Google Plus"><i class="fa fa-google-plus"></i></a>
		  <a href="http://medicalcity.ksu.edu.sa/ar/contact" target="_self" title="" data-toggle="tooltip" data-placement="top" class="btn azm-social azm-size-26 azm-r-square azm-email-1" data-original-title="contact-us"><i class="fa fa-envelope"></i></a>
		  </div> 
		  <div class="col-sm-6 col-xs-12 copyright-col">
         <p class="copyright">
                جميع الحقوق محفوظة للمدينة الطبية بجامعة الملك سعود | © 2016     
		 </p><!--/copyright-->
		  </div>
		  <!-- col-social -->
		   <div class="col-sm-3 col-xs-12 links-bottom">
					   <a href="http://medicalcity.ksu.edu.sa/">الرئيسية </a> | 
		   <a href="http://medicalcity.ksu.edu.sa/ar/sitemap">خريطة الموقع </a> | 
		   <a href="http://medicalcity.ksu.edu.sa/ar/contact">اتصل بنا </a>
		  </div><!--/col-social-->

        </div>
      </div>
    </div>
<!-- /bottom_footer-->
