<a href="#" id="ui-to-top" class="ui-to-top fa fa-angle-up active hide"></a>
<footer id="footer" class="container-fluid">
	<div class="row">
		<div id="footer_alt" class="no-print footer_alt col-sm-12">
			<div class="row">
				<div class="col-lg-3 col-md-6">
					<div class="row">
						<div class="col-sm-12">
							<h2><a class="" href="#"><img class="img-responsive"
						src="/images/bc_logo_white.png" alt="" ></a></h2>
						</div>
					</div>	
					<div class="row">
						<div class="col-sm-12">
							<p>Welcome to the leading company delivering accounting services that combine quality, reliability and compliance!</p> 
						<p><em>Follow Us:</em> 
							<a target="_blank" href="#">
							<span class="fa-stack fa-lg ">
							  <i class="fa fa-circle fa-stack-2x "></i>
							  <i class="fa fa-facebook-f fa-stack-1x fa-inverse text-primary"></i>
							</span></a>
							
							<a target="_blank" href="#">
							<span class="fa-stack fa-lg ">
							  <i class="fa fa-circle fa-stack-2x "></i>
							  <i class="fa fa-linkedin fa-stack-1x fa-inverse text-primary"></i>
							</span></a>
							
							<a target="_blank" href="#">
							<span class="fa-stack fa-lg ">
							  <i class="fa fa-circle fa-stack-2x "></i>
							  <i class="fa fa-instagram fa-stack-1x fa-inverse text-primary"></i>
							</span></a>
							
							
					
						</div>
					</div>	
					
						
				</div>

				<div class="col-lg-3 col-md-6 footer-nav">
					<div class="row">
						<div class="col-sm-12">
							<h3>Navigation</h3>
						</div>
					</div>					
					<ul class="list-unstyled">
						<li ><a href="about">About</a></li>	
						<li ><a href="/services">Services</a></li>	
						<li ><a href="/Partners">Partners</a></li>
						<li ><a href="contact">Contact Us</a></li>	
						
						<li class="{{Route::current()->getName()=='calendar'?'active':''}}"><a href="/calendar">Calendar</a></li>
						<li class="{{Route::current()->getName()=='blog'?'active':''}}"><a href="/blog">Blog</a></li>				
					</ul>
				</div>
<div class="clearfix visible-md-block"></div>
				<div class="col-lg-3 col-md-6 contact">
					<h3>Contact Info</h3> 
					<ul class="list-unstyled">
						<li><a href="tel:#{{ config('app.phone', '(951) 757-4814') }}"><span class="fa fa-phone fa-fw text-info"></span>
								{{env('APP_PHONE','(951) 757-4814')}}</a></li>
						<li><a href="mailto:{{env('APP_EMAIL','#')}}"><span class="fa fa-envelope-o fa-fw text-info"></span>
								{{env('APP_EMAIL','info@bradfieldconsulting.com')}}</a></li>
						<li><a href="#">
								<span class="fa fa-clock-o fa-fw text-info"></span><span style="display:inline-block; vertical-align:top;margin-left:3px;">
								<span class="text-bold text-gray-base reveal-block">Mon - Sat: 9AM - 6PM</span>
								<span>Sunday CLOSED</span></span></a></li>
						<li><a href="#"><span class="fa fa-map-marker fa-fw text-info"></span>
								<address>
									<span class="text-bold text-gray-base 
									reveal-block">39804 Oak Cliff Drive</span>
										<span>Temecula, CA 92591</span>
								</address></a></li>
					</ul>
				</div>

				<div class="col-lg-3 col-md-6">
					<h3>Subscribe</h3>
					<div>Get the latest info</div>
					<div class="row">
						<form class="inline-form">
							<div class="col-sm-12">
								<div class="input-group input-group-lg">
									<input type="text" class="form-control" placeholder="Email"> <span
										class="input-group-btn">
										<button class="btn btn-default " type="button">Sign Up</button>
									</span>
								</div>
								<!-- /input-group -->
							</div>
							<!-- /.col-lg-6 -->
						</form>
					</div>
				</div>
			</div>

		</div>
	</div>
	<div class="row">
		<div id="footer2" class="no-print footer2 col-sm-12">
			<div class="">
				<div class="row">
					<div class="col-lg-12">
						<div class="copyright">
							<p>
							{{ config('app.name', 'Laravel') }} &copy;<?= Date('Y');?> - All Rights Reserved
						</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</footer>
<script>

</script>
