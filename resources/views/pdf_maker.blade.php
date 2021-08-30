<!DOCTYPE html>
<html lang="en-US">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @if(session('username'))
    <title>{{session('username')}} | Resume</title>
    @else
    <title>Your Resume</title>
    @endif
    
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- <link href="css/cv/bootstrap.min.css" rel="stylesheet"> -->
    <!-- <link href="css/cv/aos.css" rel="stylesheet"> -->
    <!-- <link href="css/cv/main.css" media = "print" rel="stylesheet"> -->
    <!-- <noscript> -->
    <style type="text/css">
        [data-aos] {
            opacity: 1 !important;
            transform: translate(0) scale(1) !important;
        }

        /* Buttons */
        /* Inputs */
        /* Timeline custom component */
        .timeline {
            border-left: 2px solid #E6E9ED;
            padding: 1rem 0;
        }

        .ppimg {
            object-fit: cover;
        }

        .social .card {
            border: none;
            border-radius: 0;
            box-shadow: 0px 5px 12px grey;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
        }

        .social a {
            color: #000;
            text-decoration: none;
        }

        .social a:hover {
            text-decoration: none;
            color: #000;
        }

        .timeline-card {
            position: relative;
            margin-left: 31px;
            border-left: 2px solid;
            margin-bottom: 2rem;
        }

        .timeline-card:last-child {
            margin-bottom: 1rem;
        }

        .timeline-card:before {
            content: '';
            display: inline-block;
            position: absolute;
            background-color: #fff;
            border-radius: 10px;
            width: 12px;
            height: 12px;
            top: 20px;
            left: -41px;
            border: 2px solid;
            z-index: 2;
        }

        .timeline-card:after {
            content: '';
            display: inline-block;
            position: absolute;
            background-color: currentColor;
            width: 29px;
            height: 2px;
            top: 25px;
            left: -29px;
            z-index: 1;
        }

        .timeline-card-primary {
            border-left-color: #4A89DC;
        }

        .timeline-card-primary:before {
            border-color: #4A89DC;
        }

        .timeline-card-primary:after {
            background-color: #4A89DC;
        }

        .timeline-card-success {
            border-left-color: #37BC9B;
        }

        .timeline-card-success:before {
            border-color: #37BC9B;
        }

        .timeline-card-success:after {
            background-color: #37BC9B;
        }

        html {
            scroll-behavior: smooth;
        }

        .site-title {
            font-size: 1.25rem;
            line-height: 2.5rem;
        }

        .nav-link {
            padding: 0;
            font-size: 1.25rem;
            line-height: 2.5rem;
            color: rgba(0, 0, 0, 0.5);
        }

        .nav-link:hover,
        .nav-link:focus,
        .active .nav-link {
            color: rgba(0, 0, 0, 0.8);
        }

        .nav-item+.nav-item {
            margin-left: 1rem;
        }

        .cover {
            border-radius: 10px;
        }

        .cover-bg {
            background-color: #4A89DC;
            background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='100' height='100' viewBox='0 0 100 100'%3E%3Cg fill-rule='evenodd'%3E%3Cg fill='%23ffffff' fill-opacity='0.12'%3E%3Cpath opacity='.5' d='M96 95h4v1h-4v4h-1v-4h-9v4h-1v-4h-9v4h-1v-4h-9v4h-1v-4h-9v4h-1v-4h-9v4h-1v-4h-9v4h-1v-4h-9v4h-1v-4h-9v4h-1v-4H0v-1h15v-9H0v-1h15v-9H0v-1h15v-9H0v-1h15v-9H0v-1h15v-9H0v-1h15v-9H0v-1h15v-9H0v-1h15v-9H0v-1h15V0h1v15h9V0h1v15h9V0h1v15h9V0h1v15h9V0h1v15h9V0h1v15h9V0h1v15h9V0h1v15h9V0h1v15h4v1h-4v9h4v1h-4v9h4v1h-4v9h4v1h-4v9h4v1h-4v9h4v1h-4v9h4v1h-4v9h4v1h-4v9zm-1 0v-9h-9v9h9zm-10 0v-9h-9v9h9zm-10 0v-9h-9v9h9zm-10 0v-9h-9v9h9zm-10 0v-9h-9v9h9zm-10 0v-9h-9v9h9zm-10 0v-9h-9v9h9zm-10 0v-9h-9v9h9zm-9-10h9v-9h-9v9zm10 0h9v-9h-9v9zm10 0h9v-9h-9v9zm10 0h9v-9h-9v9zm10 0h9v-9h-9v9zm10 0h9v-9h-9v9zm10 0h9v-9h-9v9zm10 0h9v-9h-9v9zm9-10v-9h-9v9h9zm-10 0v-9h-9v9h9zm-10 0v-9h-9v9h9zm-10 0v-9h-9v9h9zm-10 0v-9h-9v9h9zm-10 0v-9h-9v9h9zm-10 0v-9h-9v9h9zm-10 0v-9h-9v9h9zm-9-10h9v-9h-9v9zm10 0h9v-9h-9v9zm10 0h9v-9h-9v9zm10 0h9v-9h-9v9zm10 0h9v-9h-9v9zm10 0h9v-9h-9v9zm10 0h9v-9h-9v9zm10 0h9v-9h-9v9zm9-10v-9h-9v9h9zm-10 0v-9h-9v9h9zm-10 0v-9h-9v9h9zm-10 0v-9h-9v9h9zm-10 0v-9h-9v9h9zm-10 0v-9h-9v9h9zm-10 0v-9h-9v9h9zm-10 0v-9h-9v9h9zm-9-10h9v-9h-9v9zm10 0h9v-9h-9v9zm10 0h9v-9h-9v9zm10 0h9v-9h-9v9zm10 0h9v-9h-9v9zm10 0h9v-9h-9v9zm10 0h9v-9h-9v9zm10 0h9v-9h-9v9zm9-10v-9h-9v9h9zm-10 0v-9h-9v9h9zm-10 0v-9h-9v9h9zm-10 0v-9h-9v9h9zm-10 0v-9h-9v9h9zm-10 0v-9h-9v9h9zm-10 0v-9h-9v9h9zm-10 0v-9h-9v9h9zm-9-10h9v-9h-9v9zm10 0h9v-9h-9v9zm10 0h9v-9h-9v9zm10 0h9v-9h-9v9zm10 0h9v-9h-9v9zm10 0h9v-9h-9v9zm10 0h9v-9h-9v9zm10 0h9v-9h-9v9z'/%3E%3Cpath d='M6 5V0H5v5H0v1h5v94h1V6h94V5H6z'/%3E%3C/g%3E%3C/g%3E%3C/svg%3E");
            border-radius: 10px;
        }

        .avatar {
            max-width: 216px;
            max-height: 216px;
            margin-top: 20px;
            text-align: center;
            margin-left: auto;
            margin-right: auto;
        }

        .avatar img {
            /* Safari 6.0 - 9.0 */
            filter: grayscale(100%);

        }

        footer a:not(.nav-link) {
            color: inherit;
            border-bottom: 1px dashed;
            text-decoration: none;
            cursor: pointer;
        }

        @media (min-width: 48em) {
            .site-title {
                float: left;
            }

            .site-nav {
                float: right;
            }

            .avatar {
                margin-bottom: -80px;
                margin-left: 0;
            }
        }

        @media print {
            body {
                background-color: #fff;
            }

            .container {
                width: auto;
                max-width: 100%;
                padding: 0;
            }

            .cover,
            .cover-bg {
                border-radius: 0;
            }

            .cover.shadow-lg {
                box-shadow: none !important;
            }

            .cover-bg {
                padding: 5rem !important;
                padding-bottom: 10px !important;
            }

            .avatar {
                margin-top: -10px;
            }

            .about-section {
                padding: 6.5rem 5rem 2rem !important;
            }

            .skills-section,
            .work-experience-section,
            .education-section,
            .contant-section {
                padding: 1.5rem 5rem 2rem !important;
            }

            .page-break {
                padding-top: 5rem;
                page-break-before: always;
            }
        }







        .abouttext {
            color: #4A89DC;
        }

        .about {
            width: 100%;
            background-color: ghostwhite;
            padding: 15px;
            height: 300px;
            

           
        }
        .aboutleft{
            width: 350px;
            font-size: 20px;
            height: 300px;
            padding: 5px;
            float: left;
        }
        .aboutright{
          
            
            padding:15px;
           
        }
        .leftbox{
            
            
            
            float: left;
        }
        .barr{
            width: 350px;
           padding: 2px 0;
           border-radius: 10px;
            text-align: center;
           background-color: #E6E9ED;
            
            margin-bottom: 10px;
            
        }
        .innerbar{
            background-color: #4A89DC;
            text-align: center;
          padding: 0px ;
          border-top-left-radius: 10px;
           border-bottom-left-radius: 10px;
        }
        .timeline-box{
            width: 100%;
            height: auto;
            padding: 15px;
           background-color:ghostwhite;
           margin-bottom:10px;
        }
        .compt{
            font-size: 25px;
            color:#4A89DC;
            font-weight: 600;
        }
        .comp{
            font-size: 18px;
            font-weight: 500;
        }
        .dat{
            font-size: 16px;
            font-weight: 500;
        }
        .hrr{
            margin-top: 70px;
        }
    </style>
    <!-- </noscript> -->
</head>

<body id="top">
    <!-- <header class="d-print-none">

        <div class="container text-center text-lg-left">
            <a class="btn btn-success shadow-sm mt-1" href="/">Go Back</a> 
            <div class="py-3 clearfix">
                <!-- @if(session('username'))
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
    </header> -->
    <div class="page-content">
        <div class="container">
            <div class="cover shadow-lg bg-white">
                <div class="cover-bg p-3 p-lg-4 text-white">
                    <div class="row">
                        <div class="col-lg-4 col-md-5">
                            @if(count($profile))

                            <div class="avatar hover-effect bg-white shadow-sm p-1">
                                <img src="{{$pic}}" width="150" height="150" style="object-fit: cover;border-radius: 50%;" />
                                <!-- <img src="{{asset('img/upload/').'/'.$profile[0]->profileimg}}" width="200" height="200" class="ppimg" /> -->
                            </div>
                            @else
                            <div class="avatar hover-effect bg-white shadow-sm p-1"><img src="{{$pic}}" width="150" height="150" style="object-fit: cover;border-radius: 50%;" /></div>
                            @endif

                        </div>
                        <div class="col-lg-8 col-md-7 text-center text-md-start">
                            @if(session('username'))
                            <h2 class="h1 mt-2" data-aos="fade-left" data-aos-delay="0" style="text-align:center;color:white">{{session('username')}}</h2>
                            @else
                            <h2 class="h1 mt-2" data-aos="fade-left" data-aos-delay="0" style="text-align:center;color:white">Your Name</h2>
                            @endif

                            @if(count($profile))
                            @foreach($profile as $pro)
                            <p data-aos="fade-left" data-aos-delay="100" style="text-align:center;color:white">{{$pro->title}}</p>
                            @endforeach
                            @else
                            <p data-aos="fade-left" data-aos-delay="100" style="text-align:center;color:white">Your Title</p>
                            @endif


                            <!-- <div class="d-print-none" data-aos="fade-left" data-aos-delay="200"><a class="btn btn-light text-dark shadow-sm mt-1 me-1" href="/download_pdf" target="_blank">Download CV</a><a class="btn btn-success shadow-sm mt-1" href="#myskills">Know More</a></div> -->
                        </div>
                    </div>
                </div>


                <section>
                    <h2 class="abouttext">About Me</h2>
                    <div class="about" >
                        <div class="aboutleft">
                            @if(count($profile))
                            <!-- <p>{{$profile[0]->aboutme}}</p> -->
                            @foreach($profile as $pro)
                            <p>{{$pro->aboutme}}</p>
                            @endforeach
                            @else
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores, placeat labore voluptate blanditiis nobis praesentium, maiores ad numquam perferendis culpa facilis accusantium? Ducimus, tempore. Eum ratione est minima velit assumenda.</p>
                            @endif
                        </div>

                        <div class="aboutright">
                            @if(count($profile))
                            
                            @foreach($profile as $pro)
                            
                            <h4 class=""> <strong>Age : </strong> {{$pro->age}}</h4> 
                            @if(session('useremail'))
                            <h4 class=""> <strong>Email : </strong> <a href="" >{{session('useremail')}}</a></h4> 
                                        
                                        @else
                                        <h4 class=""> <strong>Email : </strong> No</h4> 
                                       
                            @endif

                            <h4 class=""> <strong>Phone : </strong> {{$pro->phone}}</h4> 
                            <h4 class=""> <strong>Address : </strong> {{$pro->address}}</h4> 
                           
                            
                            
                            
                            @endforeach
                            @else
                            
                            @endif
                        </div>

                    </div>

                </section>






               

                @if( count($skils))
                <div class="skills-section px-3 px-lg-4" id="myskills">
                    <h2 class="h3 mb-3">Professional Skills</h2>
                    <div class="row">


                        @foreach ($skils as $skil)
                        <div class="col-md-6">

                            <div class="mb-2"><span>{{$skil->skil}} </span>
                                
                                <div class="barr">
                                    <div class="innerbar" {{$skil->sty_per}}>
                                    {{$skil->percentage}}%
                                    </div>
                                       
                                </div>
                            </div>


                        </div>
                        @endforeach





                    </div>
                </div>
                @endif
               


                @if(count($works))
                <div class="work-experience">
                    <h2 class="">Work Experience</h2>
                    
                        @foreach ($works as $work)

                        <div class="timeline-box">
                            
                                <div class=""> <strong class="compt">{{$work->work}}</strong> <span class="comp">at {{$work->company}}</span></div>
                                <div class="dat">{{date_format(date_create($work->sdate),"d M, Y") }} - {{date_format(date_create($work->edate),"d M, Y") }}</div>
                                <div class=""><p>{{$work->desc}}</p></div>
                           
                        </div>
                        @endforeach



                   
                </div>
                @endif


                @if(count($edus))
                <div class="work-experience">
                    <h2 class="">Education</h2>
                    
                        @foreach ($edus as $edu)

                        <div class="timeline-box">
                            
                                <div class=""> <strong class="compt">{{$edu->degree}}</strong> <span class="comp">at {{$edu->institute}}</span></div>
                                <div class="dat">{{date_format(date_create($edu->sdate),"Y") }} - {{date_format(date_create($edu->edate),"Y") }}</div>
                                <div class=""><p>{{$edu->desc}}</p></div>
                           
                        </div>
                        @endforeach



                   
                </div>
                @endif



                
                @if(count($links))
                <div class="container p-3 social">
                    <h2 class="h3 mb-4">Social Links</h2>
                    <div class="row">
                        @foreach ($links as $link)
                        <h4 class=""> <strong>Facebook : </strong> <a href="" target="_blank">{{$link->facebook}}</a> </h4> 
                        <h4 class=""> <strong>Github : </strong> <a href="" target="_blank">{{$link->github}}</a> </h4> 
                        <h4 class=""> <strong>Linkedin : </strong> <a href="" target="_blank">{{$link->linkedin}}</a> </h4> 
                        <h4 class=""> <strong>Twitter : </strong> <a href="" target="_blank">{{$link->twitter}}</a> </h4> 
                        
                        
                        @endforeach
                    </div>
                </div>
                @endif

            </div>
        </div>
    </div>
    <hr class="hrr">
    <footer class="pt-4 pb-4 text-muted text-center d-print-none">
        <div class="container">
            <div class="my-3" style="text-align: center; margin-bottom:15px">

                @if(session('username'))
                <div class="h4">{{session('username')}}</div>
                @else
                <div class="h4">Your Name</div>
                @endif
                <div class="footer-nav">

                </div>
            </div>
            <div class="text-small" style="text-align: center;">
                <div class="mb-1">&copy; Right Resume. All rights reserved.</div>
                <div>Design - <a href="/" target="_blank">Make cV</a></div>
            </div>
        </div>
    </footer>

    <script src="js/cv/aos.js"></script>
    <script src="js/cv/main.js"></script>

</body>

</html>