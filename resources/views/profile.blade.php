<x-layout>
    <x-slot name="title">Make You Cv</x-slot>
    <x-slot name="content">
        @include('includes.navbar')
        <div class="profile">
            <div class="container">
            @if(session('profile'))
                            <div class="alert alert-info alert-dismissible fade show">
                                <button type="button" class="close" data-dismiss="alert">&times;</button>
                                {{session('profile')}}
                            </div>
                @endif
                <h2 class="text-center pb-5">Add Details</h2>
                <div class="row">
                    <div class="col-lg-2 col-md-3 col-6 mb-3">
                        <a href="/update_login">
                            <div class="card">
                             Change Password
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-2 col-md-3 col-6 mb-3">
                        <a href="/update_profile">
                            <div class="card">
                                Profile Details
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-2 col-md-3 col-6 mb-3">
                        <a href="/skil">
                            <div class="card">
                                Skils Details
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-2 col-md-3 col-6 mb-3">
                        <a href="/work">
                            <div class="card">
                                Work Details
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-2 col-md-3 col-6 mb-3">
                        <a href="/education">
                            <div class="card">
                                Education Details
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-2 col-md-3 col-6 mb-3">
                        <a href="/social_links">
                            <div class="card">
                                Link Details
                            </div>
                        </a>
                    </div>

                </div>
            </div>
            @if(count($profile))
            <div class="container mt-5">
                <h3 class="">Profile details </h3>
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead>
                            <tr>

                                <th>Title</th>
                                <th>Image</th>
                                <th>Age</th>
                                <th>Phone</th>
                                <th>About Me</th>
                                <th>Address</th>
                                <th>Action</th>

                            </tr>
                        </thead>
                        <tbody>
                        @foreach ($profile as $pro)
                            <tr>

                                <td>{{$pro->title}}</td>
                                <td>
                                    <img src="{{asset('img/upload/').'/'.$pro->profileimg}}" alt="" class="proimg">
                                </td>
                                <td>{{$pro->age}}</td>
                                <td>{{$pro->phone}}</td>
                                <td>{{$pro->aboutme}}</td>
                                <td>{{$pro->address}}</td>
                                <td>
                                    <a href="{{url('/edit_profile',$pro->id)}}" class="btn btn-warning ml-1 mr-1">Edit</a>
                                    
                                </td>

                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            
            @endif

            @if( count($skils))
            <div class="container mt-5">
                <h3 class="">Skils details</h3>
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead>
                            <tr>

                                <th>Name</th>
                                <th>Percentage</th>
                                <th>Action</th>


                            </tr>
                        </thead>
                        <tbody>
                        @foreach ($skils as $skil)
                        <tr>

                                <td>{{$skil->skil}}</td>
                                <td>{{$skil->percentage}}%</td>
                                <td>
                                    <a href="{{url('/edit_skil',$skil->id)}}" class="btn btn-warning ml-1 mr-1">Edit</a>
                                    <a href="{{url('/delete_skil',$skil->id)}}" class="btn btn-danger ml-1 mr-1">Delete</a>
                                </td>

                            </tr>
                        @endforeach

                        </tbody>
                    </table>
                </div>
            </div>
            @endif

        @if(count($works))
        <div class="container mt-5">
                <h3 class="">Work details</h3>
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead>
                            <tr>

                                <th>Category</th>
                                <th>Company</th>
                                <th>Start Date</th>
                                <th>End Date</th>
                                <th>Description</th>
                                <th>Action</th>


                            </tr>
                        </thead>
                        <tbody>
                        @foreach ($works as $work)
                            <tr>

                                <td>{{$work->work}}</td>
                                <td>{{$work->company}}</td>
                                <td>{{date_format(date_create($work->sdate),"d M, Y") }}</td>
                                <td>{{date_format(date_create($work->edate),"d M, Y") }}</td>
                                <td>{{$work->desc}}</td>
                                <td>
                                    <a href="{{url('/edit_work',$work->id)}}" class="btn btn-warning m-1 ">Edit</a>
                                    <a href="{{url('/delete_work',$work->id)}}" class="btn btn-danger m-1 ">Delete</a>
                                </td>

                            </tr>

                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>

        @endif
            
           
        @if(count($edus))
            <div class="container mt-5">
                <h3 class="">Education details</h3>
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead>
                            <tr>

                                <th>Degree</th>
                                <th>Institute</th>
                                <th>Start Date</th>
                                <th>End Date</th>
                                <th>Description</th>
                                <th>Action</th>


                            </tr>
                        </thead>
                        <tbody>
                            

                            @foreach ($edus as $edu)
                            <tr>

                                <td>{{$edu->degree}}</td>
                                <td>{{$edu->institute}}</td>
                                <td>{{date_format(date_create($edu->sdate),"d M, Y") }}</td>
                                <td>{{date_format(date_create($edu->edate),"d M, Y") }}</td>
                                <td>{{$edu->desc}}</td>
                                <td>
                                    <a href="{{url('/edit_education',$edu->id)}}" class="btn btn-warning m-1 ">Edit</a>
                                    <a href="{{url('/delete_education',$edu->id)}}" class="btn btn-danger m-1 ">Delete</a>
                                </td>

                            </tr>

                            @endforeach

                            
                        </tbody>
                    </table>
                </div>
            </div>
            @endif

            @if(count($links))
            <div class="container mt-5">
                <h3 class="">Link details</h3>
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead>
                            <tr>

                                <th>Facebook</th>
                                <th>Github</th>
                                <th>Linkedin</th>
                                <th>Twitter</th>
                                <th>Action</th>


                            </tr>
                        </thead>
                        <tbody>
                        @foreach ($links as $link)
                            <tr>

                                <td>{{$link->facebook}}</td>
                                <td>{{$link->github}}</td>
                                <td>{{$link->linkedin}}</td>
                                <td>{{$link->twitter}}</td>
                                <td>
                                    <a href="{{url('/edit_links',$link->id)}}" class="btn btn-warning m-1">Edit</a>
                                   
                                </td>

                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            @endif
        </div>


    </x-slot>
</x-layout>