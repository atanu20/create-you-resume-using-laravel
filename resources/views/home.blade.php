<x-layout>
    <x-slot name="title">Make You Resume</x-slot>
    <x-slot name="content">
    @include('includes.navbar')
        <div class="home">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-12 mx-auto mb-3 order-md-1 order-2">
                <!-- @if(session('username'))
                            <p>{{session('username')}}</p>
                            @endif -->
       <h1 class="text">Create a <span class="maintext">Beautiful Resume</span>, Fast and Free.</h1>
       <a class="btn btn-info m-1" href="/profile">Create Resume Free</a>
       
                </div>
                <div class="col-md-6 col-12 mx-auto mb-3 order-md-2 order-1">
                    <img src="{{asset('img/home.svg')}}" alt="" class="homeimg">

                </div>
            </div>
            
        </div>
        
        </div>
        <div class="text-center dev">
            <p>Design & Devloped By <a href="https://github.com/atanu20" target="_blank"> Atanu jana</a></p>
            
        </div>
    </x-slot>
</x-layout>