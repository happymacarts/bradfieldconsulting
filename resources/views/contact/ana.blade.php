@extends('layouts.app') 

@section('title', '| Contact Us')

@section('banner')
    <h1>Contact Ana Bradfield</h1>
@endsection

@section('content')
<div class="container"> 
    <div class="panel panel-default">
        <div class="panel-heading" style="text-align: center;color:#fff;background-color:#1a5d94;">
            <h2>Ana Bradfield</h2>
            <h2>Bradfield Consulting Inc</h2>
        </div>
        <div class="panel-subheading" style="text-align: center;color:#fff;background-color:#1a5d94b3;display: flex;    justify-content: space-around;">
            <div class="button " >
                <a href="tel:(951) 757-4813" style="color:#fff;">
                    <i class="fa fa-4x fa-phone"></i><br/>  
                    <small >CALL</small>
                </a>
    
            </div>
            <div class="button" style="padding:4px;">
                <a class="header-button " style="color:#fff;">
                    <i class="fa fa-4x fa-paper-plane"></i><br/>
                    <small class="dynamicTextColor">EMAIL</small>
                </a>
            </div>
        </div>
        <style type="text/css">
            .socialMedia.list-group-item{
                background-color: #e1e1e1;
            }
        </style>
        <ul class="list-group " style="">
            <li class="list-group-item" >
                <a href="tel:(951) 757-4813" >
                    <i class="fa fa-2x fa-fw fa-phone"></i> (951) 757-4814
                </a>
            </li>

            <li class="list-group-item">
                <a href="mailtoana@bradfieldconsulting.com">
                    <i class="fa fa-2x fa-fw fa-envelope"></i> ana@bradfieldconsulting.com
                </a>
            </li>
            <li class="list-group-item">
                <a href="//bradfieldconsulting.com">
                    <i class="fa fa-2x fa-fw fa-globe"></i> www.bradfieldconsulting.com
                </a>
            </li>
            <li class="socialMedia list-group-item">
                Social Media
                <div style="display: flex;    justify-content: space-around;">
                    <a href="http://www.facebook.com/bradfieldconsulting/" target="_blank" class="" id="channel-item-Facebook" >
                        <i class="fa fa-2x fa-facebook"></i>
                    </a>
                    <a href="https://www.linkedin.com/in/ana-bradfield-606ab279/" target="_blank" class="" id="channel-item-LinkedIn">
                        <i class="fa fa-2x fa-linkedin"></i>
                    </a>
                    <a href="http://www.instagram.com/bradfield_consulting" target="_blank" class="">
                        <i class="fa fa-2x fa-instagram"></i>                                
                    </a>
                </div>
            </li>
        </ul>
        <div class="panel-body" style="text-align: center;">
            <a href="/vcard_ana_bradfield.vcf">
                <i class="fa fa-address-card"></i> DOWNLOAD VCARD
            </a>
        </div>
        
    </div>
</div>


@endsection
