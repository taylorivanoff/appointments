@extends('layouts.app')

@section('content')
<div id="hero" class="py-4">
    <div class="container">
        <div class="row">
            <div class="col-lg-9 my-4">
                <h1 class="display-4">I help architects upgrade their portfolio websites to  win more projects.</h1>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-8 my-2">
                <p class="h2" id="subtext">I've used the guaranteed BeSpoke™ program to help architectural studios grow their business by attracting 200% to 500% or more befitting and qualified clientele in 6 weeks.</p>
            </div>

            <div class="col-lg-8 my-1">
                <p>Register your interest below to learn more.</p>
            </div>

            <div class="col-lg-6 my-2">
                <register-interest></register-interest>
            </div>
        </div>
    </div>  
</div>

<div class="">
    <div class="container py-lg-5 py-4 my-2">
        <div class="row">
            <div class="col-lg-5 py-2">
                <h2>Meet Taylor Ivanoff</h2>
                <h3 class="h4">Director, Portfolio Consulting Expert</h3>
                <p class="py-1">Taylor Ivanoff is a technical consultant with a background in digital advertising and architectural design training.</p><p>He's advised organisations like Bywave and and maintained platforms for CanTeen, LTrent Driving School, ioFABRIC's Vicinity, Odyssey Traveller and Sydney Skydivers.</p>
                <div class="text-center text-lg-left py-1">
                    <a
                    href="{{route('contact.index')}}" 
                    class="btn btn-primary text-uppercase badge-pill py-2 px-3"
                >Get In Touch</a>
                </div>
            </div>
            <div class="offset-lg-1 col-lg-4 text-center">
                <img src="{{asset('img/headshot.jpeg')}}" alt="Photo of Taylor Ivanoff" class="rounded-circle my-2 px-4 w-100">
            </div>
        </div>
        
    </div>
    <div class="bg-light py-1">
        <div class="container">
            <div class="row">
                <div class="col text-center align-middle">
                    <img src="{{asset('img/canteen.png')}}" alt="CanTeen Company Logo" style="width:100px">
                </div>
                <div class="col text-center align-middle p-3">
                    <img src="{{asset('img/ltrent.png')}}" alt="LTrent Driving School Company Logo" style="width:100px">
                </div>
                <div class="col text-center align-middle" style="padding-top: 37px;">
                    <img src="{{asset('img/iofabric.png')}}" alt="ioFABRIC Company Logo" style="width:100px">
                </div>
                <div class="col text-center align-middle p-3">
                    <img src="{{asset('img/odyssey.png')}}" alt="Odyssey Traveller Company Logo" style="width:100px">
                </div>
            </div>
        </div>
    </div>
</div>

<div class="py-5" style="background-color: #212529">
    <div class="container">
        <div class="row text-light">
            <div class="col-lg-5">
                <h1>BeSpoke™ Program For Architects</h1>
                <div class="py-2">
                    <p>Join the premier program for architects to attract 200% to 500% or more befitting and qualified clientele in 6 weeks.</p>
                
                <p>This program is for studio and firm business owners that want to build or upgrade their digital portolio marketing to consistently attract ideal clientele and communicate the higher value creative differentiation for the work you do.</p>

                </div>

                
                <div class="py-3">
                    <register-interest></register-interest>
                </div>
            </div>

            <div class="offset-lg-1 col-lg-6 pt-lg-5">
                <img src="{{asset('img/suburbs.svg')}}" class="w-100" alt="">
            </div>
        </div>
    </div>
</div>
@endsection
