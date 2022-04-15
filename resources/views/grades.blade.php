@extends('layouts.app')
@section('title', '| Grades')

@section('content')
  <div class="container">
	<div class="row">
		<div class="col-md-8">
			<div class="panel panel-default">
				<div class="panel-heading">
					<h3 class="panel-title">Grades</h3>
	
				</div>
			<div class="panel-body">
				<ol class="list-group">
					<li class="list-group-item">
						<a href="https://campus.tvusd.k12.ca.us/campus/portal/temecula_valley.jsp?" target="grades"> <span class="glyphicon glyphicon-log-in "></span> Go login then come back here</a>
					<!--<li class="list-group-item">		<a href="https://campus.tvusd.k12.ca.us/campus/portal/portal.xsl?x=portal.PortalOutline&lang=en&personType=parent&context=17300-607-599&personID=17300&studentFirstName=Jaden&lastName=Bradfield&firstName=Jaden&schoolID=20&calendarID=607&structureID=599&calendarName=16-17%20Chaparral%20High%20School&mode=grades&x=portal.PortalGrades" target="grades"><img class="img-rounded" src="/images/jaden.jpg" height ="60px"> Click your photo then hit "ctrl-p" in other window</a></li>-->
					<li class="list-group-item">Click your photo then hit "ctrl-p" in other window	
						<ul class="list-group">
							<li class="list-group-item">
								
								<a href="https://campus.tvusd.k12.ca.us/campus/portal/portal.xsl?x=portal.PortalOutline&lang=en&personType=parent&context=17300-661-647&personID=17300&studentFirstName=Jaden&lastName=Bradfield&firstName=Jaden&schoolID=20&calendarID=661&structureID=647&calendarName=17-18%20Chaparral%20High%20School&mode=grades&x=portal.PortalGrades" target="_blank">2017 <img class="img-rounded" src="/images/jaden.jpg" height ="60px"></a>
							</li>
						</ul>
					</li>
				</ol>
			</div>
		</div>
	</div>
</div>
</div>	</div>
@endsection