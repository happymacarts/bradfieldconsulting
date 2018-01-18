@extends('layouts.app')
@section('title', '| About Us')
@section('slider')

<div id="carousel-example-generic" class="carousel slide"
	data-ridex="carousel">
	<!-- Indicators -->
	<ol class="carousel-indicators">
		<li data-target="#carousel-example-generic" data-slide-to="0"
			class="active"></li>
		<li data-target="#carousel-example-generic" data-slide-to="1"></li>
		<li data-target="#carousel-example-generic" data-slide-to="2"></li>
	</ol>

	<!-- Wrapper for slides -->
	<div class="carousel-inner" role="listbox">
		<div class="item active">
			<!-- 
      <img src="..." alt="..."> -->
			<div class="jumbotron">
				<h1>Hello, world!</h1>
				<p>Slide 1</p>
				<p>
					<a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a>
				</p>
			</div>
			<div class="carousel-caption">Caption text</div>
		</div>

		<div class="item">
			<div class="jumbotron">
				<h1>Hello, world!</h1>
				<p>Slide 2</p>
				<p>
					<a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a>
				</p>
			</div>
			<div class="carousel-caption">Caption text</div>
		</div>

		<div class="item">
			<div class="jumbotron">
				<h1>Hello, world!</h1>
				<p>Slide 3</p>
				<p>
					<a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a>
				</p>
			</div>
			<div class="carousel-caption">Caption text</div>
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
		<div class="col-sm-12 jumbotron">
			<img class="img-responsive" src="images/bc_logo.png" alt="">
			<p>is a professional accounting services firm providing accounting,
				bookkeeping and controller services. Bradfield Consulting performs
				functions such as:</p>
			<ul class="">
				<li>General Ledger Accounting
				
				<li>Payroll
				
				<li>Financial Analysis
				
				<li>Bank Reconciliations
				
				<li>Financial Statement Preparation
				
				<li>Acclaimed for producing customizable service packages for the
					clients' accounting needs of all kinds
			
			</ul>
		</div>

	</div>

	<div class="row">
		<div class="col-sm-12">
			<h1>Our Team</h1>
			<p>
				A team of financial experts <strong>in business for over {{
					Date('Y') - 2012}} years</strong>, our Chief Consultant, Ana
				Bradfield and Web Developer, Joseph Bradfield, came together in 2012
				to start this company in the Inland Empire and Northern San Diego
				County area. As a business, we are recognized for <em>Construction
					Stabilization Agreements and Project Job Cost Accounting Knowledge,
					Budgets and Cash Flow Projections, Job Cost Accounting, Proven
					success in lowering overhead.</em> This level of expertise is
				usually not available to the average small businesses today,
				specifically to new small businesses in California. Bradfield
				Consulting uses the most popular accounting software such as
				QuickBooks, Quicken, Peachtree &amp;Timberline to <strong>stay
					compliant</strong> in the state of California and to comply with
				Federal regulations and timelines.
			</p>

			<h1>Why Choose Us</h1>
			<p>
				As a small business owner, I understand the <em>challenges with the
					ever changing laws in our beautiful Golden State of California.</em>
				Over the years I have <strong>developed relationships with some of
					the industry's top leaders</strong> in Human Resources, Payroll,
				and Small Business Insurance just to name a few. As a team, we make
				sure that you can access your data round the clock without any
				hassles to keep you on top of your finances, including but not
				limited to: working out of your office, utilization of Virtual
				Private Networks, Portable External Hard Drive or Dropbox. <strong>Your
					data remains safe and secure with us.</strong> We have taken
				special measures to safeguard your data against leakage, theft or
				loss by destruction. In addition to offsite work, <strong>we also
					provide &quot;On Site&quot; services.</strong> We understand that
				part of owning a successful business is always having the financial
				data at your fingertips. By offering On Site Services, <em>we can
					ensure that your business accounting department is "business as
					usual".</em>
			</p>

			<h1>Why we can help</h1>
			<p>
				Any business <strong>new</strong> or <strong>old</strong>, <strong>big</strong>
				or <strong>small</strong>, needs <em>efficient and correct
					accounting reports</em> to sustain and <em><strong>GROW</strong></em>.
				Having your accounts in top shape all year round is a remarkable
				achievement that can help your business function smoothly and
				provide grounds for sound and promising business decisions.
				Unfortunately, <strong>many small business owners, are unable to
					give the Accounting the time and attention it deserves</strong>.
				Thereby, <em>losing money to a variety of unnecessary fees,
					overcharges, and high interest credit card fees</em> just to name a
				few. As your accounting needs will continue to grow with your
				business, owners need to pay careful thought to a <em>long term and
				viable solution for this vital part</em> of your business. By hiring
				<strong>Bradfield Consulting</strong> to take care of <strong>all your accounting needs</strong>, you
				can ensure a step in the right direction. By letting us be your
				professional accountants, not only would you have availed the
				services of <em>highly qualified, experienced professionals not commonly
				available at an affordable price for small businesses</em>, you would
				also have <strong>more time and saved resources to run your business
				successfully</strong>. Given the opportunity to work for your promising
				company, we will prove with our dedication and high performance that
				you <strong>have actually bought peace of mind for yourself in the guise of
				our professional accounting services</strong>.
			</p>
		</div>
	</div>
</div>

@endsection
