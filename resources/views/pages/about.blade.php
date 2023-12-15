@extends('layouts.app') @section('title', '| About Us')
@section('slider')

<style>
.thumbnailx {
	text-align: center;
}
</style>

<div id="carousel-example-generic" class="carousel slide"
	data-ridex="carousel">
	<!-- Indicators -->
	<ol class="carousel-indicators">
		<li data-target="#carousel-example-generic" data-slide-to="0"
			class="active"></li>
		<li data-target="#carousel-example-generic" data-slide-to="1"></li>
		<!-- <li data-target="#carousel-example-generic" data-slide-to="2"></li> -->
	</ol>

	<!-- Wrapper for slides -->
	<div class="carousel-inner" role="listbox">
		<div class="item active">
			<!-- 
			"C:\Users\me\Downloads\AdobeStock_220900672.jpeg" -- web dev
"C:\Users\me\Downloads\AdobeStock_253663256.jpeg" -- small plant
"C:\Users\me\Downloads\AdobeStock_301122730.jpeg" -- calulator
"C:\Users\me\Downloads\AdobeStock_305191864.jpeg" -- gears
"C:\Users\me\Downloads\AdobeStock_189175814.jpeg" -- coin stacks
"C:\Users\me\Downloads\AdobeStock_234404592.jpeg" -- laptop
      <img src="..." alt="..."> -->
			<div class="jumbotron" 
			style="background-image:url('{{asset('images/AdobeStock_189175814.jpeg')}}');    
			background-size: cover;
		    background-repeat: NO-REPEAT;
		    background-position-y: center;color:#3d0f0a">
				<h1  style="color:#3d0f0a">Accounting</h1>
				<p >We got you!</p>
				<p>
					<a class="btn btn-primary btn-lg" href="/services" role="button">Learn more</a>
				</p>
			</div>
			<div class="carousel-caption"></div>
		</div>

		<div class="item">
			<div class="jumbotron"
				style="background-image: url('{{ asset('images/pexels-photo-270404.jpeg')}}');
				background-size: cover;
		    background-repeat: NO-REPEAT;
		    background-position-y: center;">
				<h1>Programming</h1>
				<p>We got you!</p>
				<p>
					<img src="" class="img-responsive" /> <a
						class="btn btn-primary btn-lg" href="/services" role="button">Learn more</a>
				</p>
			</div>
			<div class="carousel-caption"></div>
		</div>


	</div>

	<!-- Controls -->
	<a class="left carousel-control" href="#carousel-example-generic"
		role="button" data-slide="prev"> <span
		class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span> <span
		class="sr-only">Previous</span>
	</a> <a class="right carousel-control" href="#carousel-example-generic"
		role="button" data-slide="next"> <span
		class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span> <span
		class="sr-only">Next</span>
	</a>
</div>




@endsection @section('content')
<div class="container">

	<div class="row">
		<div class="col-sm-12">
			<h1>Our Team</h1>

			<p>Bradfield Consulting, Inc. was started in 2012 by Joseph and Ana Bradfield. Joseph has over {{ Date('Y') - 1995}}  years experience and knowledge in the graphic arts and web coding industry and Ana has over {{ Date('Y') - 1995}}  years experience as a Job Costing Accountant and Project Coordinator in the Construction Industry. Initially Bradfield Consulting, Inc. was developed to bring web based solutions to small businesses with limited resources. Over time as the Temecula Valley grew, Ana noticed another need&hellip; Accountants. 
			</p>
			<p>
			There seemed to be a disconnect between the Tax Preparer or CPA and the Bookkeeper which was causing thousands of dollars to be missed in deductions in local business taxes. After this discovery, Ana set out to help small businesses understand their financials and to not fear the IRS. By sitting with business owners and reviewing their final Profit & Loss and Balance Sheet prior to the Tax Preparer, Bradfield Consulting, Inc. has been able to help small business owners save thousands, not just in taxes, but in overall Financial Management & Health of their company. 
			</p>
			<p> 
			After five years of working full time and managing Bradfield Consulting, Inc. part time, Ana could no longer keep up with the needs of the business and quit her full time job in August of 2017 to become a full time Consultant while her husband Joseph continued his career as a Web Developer at a local University of California.
			</p>
			<p>
			For Ana, the goal at the end of the day is to secure the small business owner’s mind so that they know and understand EXACTLY what it costs to run their business along with educating them on basic understandings and knowledge of IRS qualified business expenses. Bradfield Consulting, Inc. keeps the pulse on each of their clients by meeting with them weekly, bi-weekly or monthly so there are no misunderstandings in the clients financials. 
			</p>
			<p>
			In addition to educating our clients, Bradfield Consulting, Inc. is dedicated to networking with only the best and brightest professionals in the Valley. In March of 2019 Bradfield Consulting, Inc. became a Founding Member of Business Networking International (BNI) - Temecula Business Uncorked. 
			</p>
			<!-- <p>
			If you are interested in booking a FREE CONSULTATION, you can now book your appointment via <a target="_blank" href="https://www.facebook.com/bradfieldconsulting/#:~:text=Book%20now">Facebook&hellip;</a> we look forward to working with you!</p>
			 -->
		<a class="btn btn-primary btn-lg" href="https://calendly.com/biztaxconsult" target="_blank" role="button">Free Consultation</a>
			<div class="row">
				<div class="col-md-6">
					<div class="thumbnailx">
						<img src="{{ asset('images/ana.jpg') }}" alt="..."
							style="width: 200px;" class="img-circle">
						<div class="caption">
							<h3>Accountant</h3>
							<p>Ana Bradfield</p>
							<p>
								<a href="mailto:ana@bradfieldconsulting.com">ana@bradfieldconsulting.com</a>
							</p>

							<p>
								<a href="tel:9517574814">(951) 757-4814</a>
							</p>
							<p>
								<a href="https://www.linkedin.com/in/ana-bradfield-606ab279/"
									class="btn btn-primary" role="button" title="LinkenIn"><span
									class="fa fa-linkedin"></span></a>
								<!-- <a
									href="#" class="btn btn-default" role="button">Button</a>-->
							</p>
						</div>
					</div>
				</div>

				<div class="col-md-6">
					<div class="thumbnailx">
						<img src="{{ asset('images/joe.jpg') }}" alt="..."
							style="width: 200px;" class="img-circle">
						<div class="caption">
							<h3>Web Developer</h3>
							<p>Joe Bradfield</p>
							<p>
								<a href="mailto:joe@bradfieldconsulting.com">joe@bradfieldconsulting.com</a>
							</p>
							<p>
								<a href="tel:9517574813">(951) 757-4813</a>
							</p>
							<p>
								<a href="https://www.linkedin.com/in/josephbradfield/"
									class="btn btn-primary" role="button" title="LinkenIn"><span
									class="fa fa-linkedin"></span></a>
								<!-- <a
									href="#" class="btn btn-default" role="button">Button</a>-->
							</p>
						</div>
					</div>
				</div>
			</div>
		</div>		
	</div>
</div>


<!-- div class="container-fluid" 
	style="height: 80px; 
	background-color: #e1e1e1; 
	text-align:center;    
	line-height: 80px;">
	
	<ul class="list-inline">
		<li><img src="https://via.placeholder.com/200x50?text=ClientLogo" /></li>
		<li><img src="https://via.placeholder.com/200x50?text=ClientLogo" /></li>
		<li><img src="https://via.placeholder.com/200x50?text=ClientLogo" /></li>
	</ul>

</div> -->

<div class="container">
	<div class="row">

		<h1>Why Choose Us</h1>
		<p>
			As a small business owner, I understand the <em>challenges with the ever changing laws in our beautiful Golden State of California.</em>
			Over the years I have <strong>developed relationships with some of the industry's top leaders</strong> in Human Resources, Payroll, and Small Business Insurance just to name a few. As a team, we make sure that you can access your data round the clock without any hassles to keep you on top of your finances, including but not limited to: working out of your office, utilization of Virtual Private Networks, Portable External Hard Drive or Dropbox. <strong>Your data remains safe and secure with us.</strong> We have taken special measures to safeguard your data against leakage, theft or loss by destruction. In addition to offsite work, <strong>we also provide &quot;On Site&quot; services.</strong> We understand that part of owning a successful business is always having the financial data at your fingertips. By offering On Site Services, <em>we can ensure that your business accounting department is "business as usual".</em>
		</p>

		<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
		  <!-- Indicators -->
		  <ol class="carousel-indicators">
		    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
		    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
		    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
		  </ol>

		  <!-- Wrapper for slides -->
		  <div class="carousel-inner" role="listbox">
		    <div class="item active text-center">
		      <div class="fb-post" data-href="https://www.facebook.com/jennifer.c.stockton/posts/10225207662959410" data-width="500" data-show-text="true"><blockquote cite="https://www.facebook.com/jennifer.c.stockton/posts/10225207662959410" class="fb-xfbml-parse-ignore"><p>Anna came highly recommended on our local Community Facebook group by many people. She offered me a free consultation...</p>Posted by <a href="#" role="button">Jennifer Perez</a> on&nbsp;<a href="https://www.facebook.com/jennifer.c.stockton/posts/10225207662959410">Thursday, January 21, 2021</a></blockquote></div>
		    	
		    </div>
		    <div class="item text-center">
		    	
		    	
		    		<div class="fb-post" data-href="https://www.facebook.com/juliebrat/posts/10157986220101419" data-width="500" data-show-text="true"><blockquote cite="https://www.facebook.com/juliebrat/posts/10157986220101419" class="fb-xfbml-parse-ignore"><p>Extremely knowledgeable, very helpful and wonderful quick customer service. If you need tax help, don&#039;t hesitate to consult with Ana. She is awesome!</p>Posted by <a href="#" role="button">Julie Bogner</a> on&nbsp;<a href="https://www.facebook.com/juliebrat/posts/10157986220101419">Sunday, January 5, 2020</a></blockquote></div>
		    	
		    </div>

		    <div class="item text-center">
				<div class="fb-post" data-href="https://www.facebook.com/whitney.dawson.3/posts/3424178137679925" data-width="500" data-show-text="true"><blockquote cite="https://www.facebook.com/whitney.dawson.3/posts/3424178137679925" class="fb-xfbml-parse-ignore"><p>I highly recommend Bradfeild Consulting for your business needs! Ana has been my biggest source of help and direction...</p>Posted by <a href="#" role="button">Whitney Whitcher</a> on&nbsp;<a href="https://www.facebook.com/whitney.dawson.3/posts/3424178137679925">Thursday, January 28, 2021</a></blockquote> 
		    </div>

		</div>
		
	</div>

		  <!-- Controls -->
		  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
		    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
		    <span class="sr-only">Previous</span>
		  </a>
		  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
		    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
		    <span class="sr-only">Next</span>
		  </a>
		</div>

		

		
      
      


		<h1>Why We Can Help</h1>
		<p>
			Any business <strong>new</strong> or <strong>old</strong>, <strong>big</strong> or <strong>small</strong>, needs <em>efficient and correct accounting reports</em> to sustain and <em><strong>GROW</strong></em>. Having your accounts in top shape all year round is a remarkable achievement that can help your business function smoothly and provide grounds for sound and promising business decisions. Unfortunately, <strong>many small business owners, are unable to give the Accounting the time and attention it deserves</strong>. Thereby, <em>losing money to a variety of unnecessary fees, overcharges, and high interest credit card fees</em> just to name a few. As your accounting needs will continue to grow with your business, owners need to pay careful thought to a <em>long term and viable solution for this vital part</em> of your business. By hiring <strong>Bradfield Consulting, Inc.</strong> to take care of <strong>all your accounting needs</strong>, you can ensure a step in the right direction. By letting us be your professional accountants, not only would you have availed the services of <em>highly qualified, experienced professionals not commonly available at an affordable price for small businesses</em>, you would also have <strong>more time and saved resources to run your business successfully</strong>. Given the opportunity to work for your promising company, we will prove with our dedication and high performance that you <strong>have actually bought peace of mind for yourself in the guise of our professional accounting services</strong>.
		</p>
	</div>
	<div class="row">
		<div class="col-sm-12 jumbotron">
			<img class="img-responsive" src="images/bc_logo.png" alt="">
<!-- 			<p>is a professional accounting services firm providing accounting,
	bookkeeping and controller services. Bradfield Consulting, Inc. performs
	functions such as:</p>
<ul class="">
	<li>General Ledger Accounting
	
	<li>Payroll
	
	<li>Financial Analysis
	
	<li>Bank Reconciliations
	
	<li>Financial Statement Preparation
	
	<li>Acclaimed for producing customizable service packages for the
		clients' accounting needs of all kinds

</ul> -->
			<h2>
				<!-- <a href="/contact?s=Free%20Consult" class="btn btn-primary">Book your free consultation now</a> -->

				<a class="btn btn-primary btn-lg" href="https://calendly.com/biztaxconsult" target="_blank" role="button">Free Consultation</a>
			</h2>
		</div>
 
	</div>
</div>
</div>

@endsection
