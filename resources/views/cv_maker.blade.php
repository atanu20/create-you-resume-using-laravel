<!DOCTYPE html>
<html lang="en-US">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Right Resume</title>
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="crossorigin" />
    <link rel="preload" as="style" href="https://fonts.googleapis.com/css2?family=Poppins:wght@600&amp;family=Roboto:wght@300;400;500;700&amp;display=swap" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@600&amp;family=Roboto:wght@300;400;500;700&amp;display=swap" media="print" onload="this.media='all'" />
    <noscript>
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@600&amp;family=Roboto:wght@300;400;500;700&amp;display=swap" />
    </noscript>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link href="css/cv/bootstrap.min.css" rel="stylesheet">
    <link href="css/cv/aos.css" rel="stylesheet">
    <link href="css/cv/main.css" rel="stylesheet">
    <noscript>
        <style type="text/css">
            [data-aos] {
                opacity: 1 !important;
                transform: translate(0) scale(1) !important;
            }
            
        </style>
    </noscript>
</head>

<body id="top">
    <header class="d-print-none">

        <div class="container text-center text-lg-left">
            <a class="btn btn-success shadow-sm mt-1" href="/">Go Back</a>
            <div class="py-3 clearfix">
                @if(session('username'))
                <h1 class="site-title mb-0 " style="color:crimson" >{{session('username')}}</h1>
                @else
                <h1 class="site-title mb-0">Your Name</h1>
                @endif

                @if(count($links))

                <div class="site-nav">
                    <nav role="navigation">
                        @foreach ($links as $link)
                        <ul class="nav justify-content-center">
                            <li class="nav-item"><a class="nav-link" href="{{$link->twitter}}" target="_blank" title="Twitter"><i class="fa fa-twitter"></i><span class="menu-title sr-only">Twitter</span></a>
                            </li>
                            <li class="nav-item"><a class="nav-link" href="{{$link->facebook}}" target="_blank" title="Facebook"><i class="fa fa-facebook"></i><span class="menu-title sr-only">Facebook</span></a>
                            </li>
                            <li class="nav-item"><a class="nav-link" href="{{$link->linkedin}}" target="_blank" title="Linkedin"><i class="fa fa-linkedin"></i><span class="menu-title sr-only">Linkedin</span></a>
                            </li>
                            <li class="nav-item"><a class="nav-link" href="{{$link->github}}" target="_blank" title="Github"><i class="fa fa-github"></i><span class="menu-title sr-only">Github</span></a>
                            </li>
                        </ul>
                        @endforeach
                    </nav>
                </div>

                @endif
            </div>
        </div>
    </header>
    <div class="page-content">
        <div class="container">
            <div class="cover shadow-lg bg-white">
                <div class="cover-bg p-3 p-lg-4 text-white">
                    <div class="row">
                        <div class="col-lg-4 col-md-5">
                            @if(count($profile))
                            <div class="avatar hover-effect bg-white shadow-sm p-1">
                                <img src="{{asset('img/upload/').'/'.$profile[0]->profileimg}}" width="200" height="200" class="ppimg" />
                                <!-- <img src="https://cdn.pixabay.com/photo/2015/11/26/00/14/woman-1063100_960_720.jpg" width="200" height="200" class="ppimg" /> -->
                                
                            </div>
                            @else
                            <div class="avatar hover-effect bg-white shadow-sm p-1"><img src="img/user.png" width="200" height="200" class="ppimg" /></div>
                            @endif

                        </div>
                        <div class="col-lg-8 col-md-7 text-center text-md-start">
                            @if(session('username'))
                            <h2 class="h1 mt-2" data-aos="fade-left" data-aos-delay="0">{{session('username')}}</h2>
                            @else
                            <h2 class="h1 mt-2" data-aos="fade-left" data-aos-delay="0">Your Name</h2>
                            @endif

                            @if(count($profile))
                            @foreach($profile as $pro)
                            <p data-aos="fade-left" data-aos-delay="100">{{$pro->title}}</p>
                            @endforeach
                            @else
                            <p data-aos="fade-left" data-aos-delay="100">Your Title</p>
                            @endif


                            <div class="d-print-none" data-aos="fade-left" data-aos-delay="200"><a class="btn btn-light text-dark shadow-sm mt-1 me-1" href="/download_pdf" target="_blank">Download CV</a><a class="btn btn-success shadow-sm mt-1" href="#myskills">Know More</a></div>
                        </div>
                    </div>
                </div>
                <div class="about-section pt-4 px-3 px-lg-4 mt-1">
                    <div class="row">
                        <div class="col-md-6">
                            <h2 class="h3 mb-3">About Me</h2>
                            @if(count($profile))
                            @foreach($profile as $pro)
                            <p data-aos="fade-left" data-aos-delay="100">{{$pro->aboutme}}</p>
                            @endforeach
                            @else
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores, placeat labore voluptate blanditiis nobis praesentium, maiores ad numquam perferendis culpa facilis accusantium? Ducimus, tempore. Eum ratione est minima velit assumenda.</p>
                            @endif

                        </div>
                        <div class="col-md-5 offset-md-1">
                            <div class="row mt-2">
                                <div class="col-sm-4">
                                    <div class="pb-1">Age</div>
                                </div>
                                <div class="col-sm-8">
                                    @if(count($profile))
                                    <div class="pb-1 text-secondary">{{$profile[0]->age}}</div>
                                    @else
                                    <div class="pb-1 text-secondary">Your Age</div>
                                    @endif

                                </div>
                                <div class="col-sm-4">
                                    <div class="pb-1">Email</div>
                                </div>
                                <div class="col-sm-8">
                                    <div class="pb-1 text-secondary">
                                        @if(session('useremail'))
                                        <a href="" class="__cf_email__">{{session('useremail')}}</a>
                                        @else
                                        <a href="" class="__cf_email__">no</a>
                                        @endif


                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="pb-1">Phone</div>
                                </div>
                                <div class="col-sm-8">
                                    @if(count($profile))
                                    <div class="pb-1 text-secondary">{{$profile[0]->phone}}</div>
                                    @else
                                    <div class="pb-1 text-secondary">Your Number</div>
                                    @endif

                                </div>
                                <div class="col-sm-4">
                                    <div class="pb-1">Address</div>
                                </div>
                                <div class="col-sm-8">
                                    @if(count($profile))
                                    <div class="pb-1 text-secondary">{{$profile[0]->address}}</div>
                                    @else
                                    <div class="pb-1 text-secondary">Your Address</div>
                                    @endif

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <hr class="d-print-none" />
                @if( count($skils))
                <div class="skills-section px-3 px-lg-4" id="myskills">
                    <h2 class="h3 mb-3">Professional Skills</h2>
                    <div class="row">
                        

                        @foreach ($skils as $skil)
                        <div class="col-md-6">

                            <div class="mb-2"><span>{{$skil->skil}} </span>
                                <div class="progress my-1">
                                    <div class="progress-bar progress-bar-striped bg-primary" role="progressbar" data-aos="zoom-in-right" data-aos-delay="100" data-aos-anchor=".skills-section" 
                                  {{$skil->sty_per}}  aria-valuenow="{{$skil->percentage}}" aria-valuemin="0" aria-valuemax="100">{{$skil->percentage}}%</div>
                                </div>
                            </div>


                        </div>
                        @endforeach

                       



                    </div>
                </div>
                @endif
                <hr class="d-print-none" />
                @if(count($works))
                <div class="work-experience-section px-3 px-lg-4">
                    <h2 class="h3 mb-4">Work Experience</h2>
                    <div class="timeline">
                    @foreach ($works as $work)
                   
                        <div class="timeline-card timeline-card-primary card shadow-sm">
                            <div class="card-body">
                                <div class="h5 mb-1">{{$work->work}} <span class="text-muted h6">at {{$work->company}}</span></div>
                                <div class="text-muted text-small mb-2">{{date_format(date_create($work->sdate),"d M, Y") }} - {{date_format(date_create($work->edate),"d M, Y") }}</div>
                                <div>{{$work->desc}}</div>
                            </div>
                        </div>
                        @endforeach
                        
                        
                       
                    </div>
                </div>
                @endif
                @if(count($edus))
                <hr class="d-print-none" />
                <div class="page-break"></div>
                <div class="education-section px-3 px-lg-4 pb-4">
                    <h2 class="h3 mb-4">Education</h2>
                    <div class="timeline">
                    @foreach ($edus as $edu)
                        <div class="timeline-card timeline-card-success card shadow-sm">
                            <div class="card-body">
                                <div class="h5 mb-1">{{$edu->degree}} <span class="text-muted h6">from {{$edu->institute}}</span></div>
                                <div class="text-muted text-small mb-2">{{date_format(date_create($edu->sdate),"Y") }} - {{date_format(date_create($edu->edate),"Y") }}</div>
                                <div>{{$edu->desc}}</div>
                            </div>
                        </div>
                    @endforeach
                       
                    </div>
                </div>
                @endif
                <hr class="d-print-none" />
                @if(count($links))
                <div class="container p-3 social">
                    <h2 class="h3 mb-4">Social Links</h2>
                    <div class="row">
                    @foreach ($links as $link)
                        <div class="col-lg-3 col-md-4 col-6  mb-3">
                            <a href="{{$link->facebook}}" target="_blank">
                            <div class="card p-3">
                               <h4>Facebook</h4>
                              
                            </div>
                            </a>
                        </div>
                        <div class="col-lg-3 col-md-4 col-6 mb-3">
                        <a href="{{$link->github}}" target="_blank">
                            <div class="card p-3">
                               <h4>Github</h4>
                              
                            </div>
                            </a>
                        </div>
                        <div class="col-lg-3 col-md-4 col-6 mb-3">
                        <a href="{{$link->linkedin}}" target="_blank">
                            <div class="card p-3">
                               <h4>Linkedin</h4>
                              
                            </div>
                            </a>
                        </div>
                        <div class="col-lg-3 col-md-4 col-6 mb-3">
                        <a href="{{$link->twitter}}" target="_blank">
                            <div class="card p-3">
                               <h4>Twitter</h4>
                              
                            </div>
                            </a>
                        </div>
                        @endforeach
                    </div>
                </div>
                @endif

            </div>
        </div>
    </div>
    <footer class="pt-4 pb-4 text-muted text-center d-print-none">
        <div class="container">
            <div class="my-3">
               
                @if(session('username'))
                <div class="h4">{{session('username')}}</div>
                @else
                <div class="h4">Your Name</div>
                @endif
                <div class="footer-nav">
                   
                </div>
            </div>
            <div class="text-small">
                <div class="mb-1">&copy; Right Resume. All rights reserved.</div>
                <div>Design - <a href="/" target="_blank">Make cV</a></div>
            </div>
        </div>
    </footer>

    <script src="js/cv/aos.js"></script>
    <script src="js/cv/main.js"></script>

</body>

</html>