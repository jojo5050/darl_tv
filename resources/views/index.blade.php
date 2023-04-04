<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>DarlTV </title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="breaking news, commedy videos, interviews"  name="keywords">
    <meta content="commedy videos, breaking news on politics, sports, business and celebrity interviews" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&display=swap" rel="stylesheet">  

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.0/css/all.min.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
   
    <!-- Navbar Start -->
        <div class="container-fluid p-0">
            <nav class="navbar navbar-expand-lg bg-dark navbar-dark py-2 py-lg-0 px-lg-5 navbar-static-top">
            
                    <div class="row align-items-right bg-dark ">
                        <div class="col-lg-4">
                            <a href="index.html" class="navbar-brand p-0 d-none d-lg-block">
                                <h1 class="m-0 display-4 text-uppercase text-primary">Darl<span class="text-white font-weight-bold">TV</span></h1>
                            </a>
                        </div>
                            <div class="col-lg-8 text-center text-lg-right">
                                <a href="https://htmlcodex.com"><img class="img-fluid" src="img/ads-728x90.png" alt=""></a>
                            </div>
                    </div>
                <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-between px-0 px-lg-2" id="navbarCollapse">
                    <div class="navbar-nav mr-auto py-0">
                        <a href="{{url('/')}}" class="nav-item font-weight-bold nav-link active">Home</a>
                        <a href="{{url('about')}}" class="nav-item font-weight-bold nav-link">About</a>
                
                        <a href="{{url('contact')}}" class="nav-item font-weight-bold nav-link">Contact</a>
                        <a href="{{url('trending')}}" class="nav-item font-weight-bold nav-link">Trending</a>
                        <a href="{{url('jobs')}}" class="nav-item font-weight-bold nav-link">Careers</a>
                        <a href="https://www.darlcloudsoft.com" class="nav-item font-weight-bold nav-link">e-Learning</a>

                            <div class="nav-item dropdown">
                                <a href="#" class="nav-link dropdown-toggle text-white font-weight-bold" data-toggle="dropdown">CATEGORIES</a>
                                <div class="dropdown-menu rounded-0 m-0">
                                    <a href="{{url('news')}}" class="dropdown-item ">News BroadCast</a>
                                    <a href="{{url('interviews')}}" class="dropdown-item">Interviews</a>
                                    <a href="{{url('commedy')}}" class="dropdown-item">Commedy Skits</a>
                                    <a href="{{url('sport')}}" class="dropdown-item">Sport</a>
                                    <a href="{{url('business')}}" class="dropdown-item">Bussiness</a>
                                    <a href="{{url('politics')}}" class="dropdown-item">Politics</a>
                                </div>
                            </div>

                            <div class="nav-item dropdown">
                                <a href="#" class="nav-link dropdown-toggle text-white font-weight-bold" data-toggle="dropdown">Admin</a>
                                <div class="dropdown-menu rounded-0 m-0">
                                    <a href="{{url('registration')}}" class="dropdown-item ">Register</a>
                                    <a href="{{url('login')}}" class="dropdown-item">Login</a>
                                    
                                </div>
                            </div>
                    </div>    
                       

            
                </div>
            </nav>
        </div>
    <!-- Navbar End -->


    <!-- Main News Slider Start -->
    <div class="container-fluid">
          <div class="row">
            <div class="col-lg-12 px-0">
                <div class="owl-carousel main-carousel position-relative">
                    <div class="position-relative overflow-hidden" style="height: 500px;">
                        <img class="img-fluid h-100" src="img/image3.JPG" style="object-fit: cover;">
                        <div class="overlay mb-5 py-5" >
                            <div class="mb-2">
                                <a class="badge text-uppercase font-weight-semi-bold p-2 mr-2"
                                    href=""><b style="font-size: 90px;">DARL TV</b></a>
                            </div>
                            <a class="h2 m-0 text-white font-weight-bold" href=""><i class="fa fa-quote-left text-primary" style="font-size: 50px"></i> Bringing Information to your Doorstep <i class="fa fa-quote-right text-primary" style="font-size: 50px"></i></a>
                        </div>
                    </div>
                    <div class="position-relative overflow-hidden" style="height: 500px;">
                        <img class="img-fluid h-100" src="img/image2.jpg" style="object-fit: cover;">
                          <div class="overlay mb-5 py-5" >
                            <div class="mb-2">
                                <a class="badge text-uppercase font-weight-semi-bold p-2 mr-2"
                                    href=""><b style="font-size: 90px;">DARL TV</b></a>
                            </div>
                            <a class="h2 m-0 text-white font-weight-bold" href=""><i class="fa fa-quote-left text-primary" style="font-size: 50px"></i> We help you share your story <i class="fa fa-quote-right text-primary" style="font-size: 50px"></i></a>
                        </div>
                    </div>
                    <div class="position-relative overflow-hidden" style="height: 500px;">
                        <img class="img-fluid h-100" src="img/image4.jpg" style="object-fit: cover;">
                         <div class="overlay mb-5 py-5" >
                            <div class="mb-2">
                                <a class="badge text-uppercase font-weight-semi-bold p-2 mr-2"
                                    href=""><b style="font-size: 90px;">DARL T V</b></a>
                            </div>
                            <a class="h2 m-0 text-white font-weight-bold" href=""><i class="fa fa-quote-left text-primary" style="font-size: 50px"></i> A New Revolution of the Entertainment Industry <i class="fa fa-quote-right text-primary" style="font-size: 50px"></i></a>
                        </div>
                    </div>
                </div>
            </div>
          </div>
    </div>
    <!-- Main News Slider End -->


    <!-- Breaking News on header pic Start -->
    <div class="container-fluid bg-dark py-3 mb-3">
        <div class="container">
            <div class="row align-items-center bg-dark">
                <div class="col-12">
                    <div class="d-flex justify-content-between">
                        <div class="bg-primary text-dark text-center font-weight-medium py-2" style="width: 170px;">Trending</div>
                        <div class="owl-carousel tranding-carousel position-relative d-inline-flex align-items-center ml-3"
                            style="width: calc(100% - 170px); padding-right: 90px;">
                            <div class="text-truncate"><a class="text-white text-uppercase font-weight-semi-bold" href="">Trending Story displays on this test rail</a></div>
                            <div class="text-truncate"><a class="text-white text-uppercase font-weight-semi-bold" href="">More Trending Story displays on this test rail</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breaking News on header pic End -->

    <!-- commedy skits Slider Start -->
    <div class="container-fluid pt-5 mb-3">
        <div class="container">
            <div class="section-title">
                <h4 class="m-0 text-uppercase font-weight-bold">Commedy Skits</h4>
            </div>
            <div class="owl-carousel news-carousel carousel-item-4 position-relative">
                <div class="position-relative overflow-hidden" style="height: 300px;">
                    <img class="img-fluid h-100" src="img/akpororo.jpg" style="object-fit: cover;">
                    <div class="overlay">
                        <div class="mb-2">
                            
                                <a class="h6 m-0 text-white font-weight-semi-bold" href="">Caption here</a>
                        </div>
                        <a class="text-white" href=""><small>Jan 01, 2045</small></a>
                        
                    </div>
                </div>
                <div class="position-relative overflow-hidden" style="height: 300px;">
                    <img class="img-fluid h-100" src="img/degeneral.jpg" style="object-fit: cover;">
                    <div class="overlay">
                        <div class="mb-2">
                            
                                <a class="h6 m-0 text-white font-weight-semi-bold" href="">Caption here</a>
                        </div>
                        <a class="text-white" href=""><small>Jan 01, 2045</small></a>
                        
                    </div>
                </div>
                <div class="position-relative overflow-hidden" style="height: 300px;">
                    <img class="img-fluid h-100" src="img/funnybros.jpg" style="object-fit: cover;">
                    <div class="overlay">
                        <div class="mb-2">
                            
                                <a class="h6 m-0 text-white font-weight-semi-bold" href="">Caption here</a>
                        </div>
                        <a class="text-white" href=""><small>Jan 01, 2045</small></a>
                        
                    </div>
                </div>
                <div class="position-relative overflow-hidden" style="height: 300px;">
                    <img class="img-fluid h-100" src="img/macaroni.jpg" style="object-fit: cover;">
                    <div class="overlay">
                        <div class="mb-2">
                            
                                <a class="h6 m-0 text-white font-weight-semi-bold" href="">Caption here</a>
                        </div>
                        <a class="text-white" href=""><small>Jan 01, 2045</small></a>
                        
                    </div>
                </div>
                <div class="position-relative overflow-hidden" style="height: 300px;">
                    <img class="img-fluid h-100" src="img/emanuela.jpg" style="object-fit: cover;">
                    <div class="overlay">
                        <div class="mb-2">
                            
                                <a class="h6 m-0 text-white font-weight-semi-bold" href="">Caption here</a>
                        </div>
                        <a class="text-white" href=""><small>Jan 01, 2045</small></a>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- commedy skits Slider End -->


    <!-- News With Sidebar Start -->
    <div class="container-fluid">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="row">
                        <div class="col-12">
                            <div class="section-title">
                                <h4 class="m-0 text-uppercase font-weight-bold">Breaking News</h4>
                                <a class="text-secondary font-weight-medium text-decoration-none" href="">View All</a>
                            </div>
                        </div>

                        <div class="col-lg-4">
                            <div class="position-relative mb-3">
                                <img class="img-fluid w-100" src="img/politics3.jpg" style="object-fit: cover;">
                                <div class="bg-white border border-top-0 p-4">
                                    <div class="mb-1">
                            
                                        <a class="text-body" href=""><small>Jan 01, 2045</small></a>
                                    </div>
                                    <a class="h4 d-block mb-0 text-secondary font-weight-bold" href="">Lorem ipsum dolor sit amet elit...</a>
                                    <p class="m-0">Dolor lorem eos dolor duo et eirmod sea. Dolor sit magna
                                        rebum clita rebum dolor stet amet justo</p>
                                        <div class="mb-1 text-align-left">
                                           <a class="badge badge-primary  font-weight-semi-bold p-2 mr-2"
                                            href="">See more</a>
                            
                                        </div>
                                </div>
                                    
                            
                            </div>
                        </div>
                        
                        <div class="col-lg-4">
                            <div class="position-relative mb-3">
                                <img class="img-fluid w-100" src="img/politics5.jpg" style="object-fit: cover;">
                                <div class="bg-white border border-top-0 p-4">
                                    <div class="mb-1">
                            
                                        <a class="text-body" href=""><small>Jan 01, 2045</small></a>
                                    </div>
                                    <a class="h4 d-block mb-0 text-secondary font-weight-bold" href="">Lorem ipsum dolor sit amet elit...</a>
                                    <p class="m-0">Dolor lorem eos dolor duo et eirmod sea. Dolor sit magna
                                        rebum clita rebum dolor stet amet justo</p>
                                        <div class="mb-1 text-align-left">
                                           <a class="badge badge-primary  font-weight-semi-bold p-2 mr-2"
                                            href="">See more</a>
                            
                                        </div>
                                </div>
                                    
                            </div>
                        </div>

                        <div class="col-lg-4">
                            <div class="position-relative mb-3">
                                <img class="img-fluid w-100" src="img/politics3.jpg" style="object-fit: cover;">
                                <div class="bg-white border border-top-0 p-4">
                                    <div class="mb-1">
                            
                                        <a class="text-body" href=""><small>Jan 01, 2045</small></a>
                                    </div>
                                    <a class="h4 d-block mb-0 text-secondary font-weight-bold" href="">Lorem ipsum dolor sit amet elit...</a>
                                    <p class="m-0">Dolor lorem eos dolor duo et eirmod sea. Dolor sit magna
                                        rebum clita rebum dolor stet amet justo</p>
                                        <div class="mb-1 text-align-left">
                                           <a class="badge badge-primary  font-weight-semi-bold p-2 mr-2"
                                            href="">See more</a>
                            
                                        </div>
                                </div>
                                    
                            
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="position-relative mb-3">
                                <img class="img-fluid w-100" src="img/politics4.jpg" style="object-fit: cover;">
                                <div class="bg-white border border-top-0 p-4">
                                    <div class="mb-1">
                            
                                        <a class="text-body" href=""><small>Jan 01, 2045</small></a>
                                    </div>
                                    <a class="h4 d-block mb-0 text-secondary font-weight-bold" href="">Lorem ipsum dolor sit amet elit...</a>
                                    <p class="m-0">Dolor lorem eos dolor duo et eirmod sea. Dolor sit magna
                                        rebum clita rebum dolor stet amet justo</p>
                                        <div class="mb-1 text-align-left">
                                           <a class="badge badge-primary  font-weight-semi-bold p-2 mr-2"
                                            href="">See more</a>
                            
                                        </div>
                                </div>
                                    
                            
                            </div>
                        </div>
                    
                        <div class="col-lg-4">
                            <div class="position-relative mb-3">
                                <img class="img-fluid w-100" src="img/politics3.jpg" style="object-fit: cover;">
                                <div class="bg-white border border-top-0 p-4">
                                    <div class="mb-1">
                            
                                        <a class="text-body" href=""><small>Jan 01, 2045</small></a>
                                    </div>
                                    <a class="h4 d-block mb-0 text-secondary font-weight-bold" href="">Lorem ipsum dolor sit amet elit...</a>
                                    <p class="m-0">Dolor lorem eos dolor duo et eirmod sea. Dolor sit magna
                                        rebum clita rebum dolor stet amet justo</p>
                                        <div class="mb-1 text-align-left">
                                           <a class="badge badge-primary  font-weight-semi-bold p-2 mr-2"
                                            href="">See more</a>
                            
                                        </div>
                                </div>
                                    
                            
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="position-relative mb-3">
                                <img class="img-fluid w-100" src="img/politics4.jpg" style="object-fit: cover;">
                                <div class="bg-white border border-top-0 p-4">
                                    <div class="mb-1">
                            
                                        <a class="text-body" href=""><small>Jan 01, 2045</small></a>
                                    </div>
                                    <a class="h4 d-block mb-0 text-secondary font-weight-bold" href="">Lorem ipsum dolor sit amet elit...</a>
                                    <p class="m-0">Dolor lorem eos dolor duo et eirmod sea. Dolor sit magna
                                        rebum clita rebum dolor stet amet justo</p>
                                        <div class="mb-1 text-align-left">
                                           <a class="badge badge-primary  font-weight-semi-bold p-2 mr-2"
                                            href="">See more</a>
                            
                                        </div>
                                </div>
                                    
                            
                            </div>
                        </div>
                        
                    </div>
                </div>
                
                <div class="col-lg-4">
                    <!-- Social Follow Start -->
                    <div class="mb-3">
                        <div class="section-title mb-0">
                            <h4 class="m-0 text-uppercase font-weight-bold">Categories</h4>
                        </div>
                        <div class="bg-white border border-top-0 p-3">
                            <a href="" class="d-block w-100 text-white text-decoration-none mb-1" style="background: black;">
                                <i class="fa fa-balance-scale text-center py-3 mr-3 " style="width: 65px; background: rgba(0, 0, 0, .2); font-size: 30px"></i>
                                <span class="font-weight-medium" style="font-size: 20px">Politics</span>
                            </a>
                            <a href="" class="d-block w-100 text-white text-decoration-none mb-1" style="background: black;">
                                <i class="fa fa-life-ring text-center py-3 mr-3" style="width: 65px; background: rgba(0, 0, 0, .2); font-size: 30px"></i>
                                <span class="font-weight-medium " style="font-size: 20px">Sports</span>
                            </a>
                            <a href="" class="d-block w-100 text-white text-decoration-none mb-1" style="background: black;">
                                <i class="fa fa-medkit text-center py-3 mr-3" style="width: 65px; background: rgba(0, 0, 0, .2); font-size: 30px"></i>
                                <span class="font-weight-medium" style="font-size: 20px">Health</span>
                            </a>
                            <a href="" class="d-block w-100 text-white text-decoration-none mb-1" style="background: black;">
                                <i class=" fa fa-graduation-cap text-center py-3 mr-3" style="width: 65px; background: rgba(0, 0, 0, .2); font-size: 30px"></i>
                                <span class="font-weight-medium">Education</span>
                            </a>
                            <a href="" class="d-block w-100 text-white text-decoration-none mb-1" style="background: black;">
                                <i class="fa fa-podcast text-center py-3 mr-3" style="width: 65px; background: rgba(0, 0, 0, .2); font-size: 30px"></i>
                                <span class="font-weight-medium">Entertainment</span>
                            </a>
                            <a href="" class="d-block w-100 text-white text-decoration-none" style="background: black;">
                                <i class="fa fa-podcast text-center py-3 mr-3" style="width: 65px; background: rgba(0, 0, 0, .2); font-size: 30px"></i>
                                <span class="font-weight-medium">Life Style</span>
                            </a>
                        </div>
                    </div>
                    <!-- Social Follow End --> 
                    <div class="mb-3">
                        <div class="section-title mb-0">
                            <h4 class="m-0 font-weight-bold">Porpular Stories</h4>
                        </div>
                        <div class="bg-white border border-top-0 p-3">
                            <div class="d-flex align-items-center bg-white mb-3" style="height: 110px;">
                                <img class="img-fluid" src="img/new1.jpg" alt="">
                                <div class="w-100 h-100 px-3 d-flex flex-column justify-content-center border border-left-0">
                                    <div class="mb-2">
                                        
                                        <a class="text-body" href=""><small>Jan 01, 2045</small></a>
                                    </div>
                                    <a class="h6 m-0 text-secondary font-weight-bold" href="">Lorem ipsum dolor sit amet elit...</a>
                                    <a class="badge badge-primary font-weight-semi-bold p-1 mr-2" href="">See more</a>
                                </div>
                            </div>
                            <div class="d-flex align-items-center bg-white mb-3" style="height: 110px;">
                                <img class="img-fluid" src="img/new1.jpg" alt="">
                                <div class="w-100 h-100 px-3 d-flex flex-column justify-content-center border border-left-0">
                                    <div class="mb-2">
                                        
                                        <a class="text-body" href=""><small>Jan 01, 2045</small></a>
                                    </div>
                                    <a class="h6 m-0 text-secondary font-weight-bold" href="">Lorem ipsum dolor sit amet elit...</a>
                                    <a class="badge badge-primary font-weight-semi-bold p-1 mr-2" href="">See more</a>
                                </div>
                            </div>
                            <div class="d-flex align-items-center bg-white mb-3" style="height: 110px;">
                                <img class="img-fluid" src="img/new1.jpg" alt="">
                                <div class="w-100 h-100 px-3 d-flex flex-column justify-content-center border border-left-0">
                                    <div class="mb-2">
                                        
                                        <a class="text-body" href=""><small>Jan 01, 2045</small></a>
                                    </div>
                                    <a class="h6 m-0 text-secondary font-weight-bold" href="">Lorem ipsum dolor sit amet elit...</a>
                                    <a class="badge badge-primary font-weight-semi-bold p-1 mr-2" href="">See more</a>
                                </div>
                            </div>
                            
                        
                        </div>
                    </div>         
                </div>
            </div>
        </div>
    </div>
    <!-- News With Sidebar End -->

    <!-- interview Slider Start -->
    <div class="container-fluid pt-5 mb-3">
        <div class="container">
            <div class="section-title">
                <h4 class="m-0 text-uppercase font-weight-bold">Interviews</h4>
            </div>
            <div class="owl-carousel news-carousel carousel-item-4 position-relative">
                <div class="position-relative overflow-hidden" style="height: 300px;">
                    <img class="img-fluid h-100" src="img/inter1.jpg" style="object-fit: cover;">
                    <div class="overlay">
                        <div class="mb-2">
                            
                                <a class="h6 m-0 text-white font-weight-semi-bold" href="">Caption here</a>
                        </div>
                        <a class="text-white" href=""><small>Jan 01, 2045</small></a>
                        
                    </div>
                </div>
                <div class="position-relative overflow-hidden" style="height: 300px;">
                    <img class="img-fluid h-100" src="img/inter2.jpg" style="object-fit: cover;">
                    <div class="overlay">
                        <div class="mb-2">
                            
                                <a class="h6 m-0 text-white font-weight-semi-bold" href="">Caption here</a>
                        </div>
                        <a class="text-white" href=""><small>Jan 01, 2045</small></a>
                        
                    </div>
                </div>
                <div class="position-relative overflow-hidden" style="height: 300px;">
                    <img class="img-fluid h-100" src="img/inter3.jpg" style="object-fit: cover;">
                    <div class="overlay">
                        <div class="mb-2">
                            
                                <a class="h6 m-0 text-white font-weight-semi-bold" href="">Caption here</a>
                        </div>
                        <a class="text-white" href=""><small>Jan 01, 2045</small></a>
                        
                    </div>
                </div>
                <div class="position-relative overflow-hidden" style="height: 300px;">
                    <img class="img-fluid h-100" src="img/inter4.jpg" style="object-fit: cover;">
                    <div class="overlay">
                        <div class="mb-2">
                            
                                <a class="h6 m-0 text-white font-weight-semi-bold" href="">Caption here</a>
                        </div>
                        <a class="text-white" href=""><small>Jan 01, 2045</small></a>
                        
                    </div>
                </div>
                <div class="position-relative overflow-hidden" style="height: 300px;">
                    <img class="img-fluid h-100" src="img/interview1.jpg" style="object-fit: cover;">
                    <div class="overlay">
                        <div class="mb-2">
                            
                                <a class="h6 m-0 text-white font-weight-semi-bold" href="">Caption here</a>
                        </div>
                        <a class="text-white" href=""><small>Jan 01, 2045</small></a>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- interview Slider End -->


    <!-- Footer Start -->
    <div class="container-fluid bg-dark pt-5 px-sm-3 px-md-5 mt-5">
        <div class="row py-4">
            <div class="col-lg-3 col-md-6 mb-5">
                    <h5 class="mb-4 text-white text-uppercase font-weight-bold">Contact us</h5>
                    <p class="font-weight-medium"><i class="fa fa-map-marker-alt mr-2"></i>The Carpenter Plaza, Jikwoyi Abuja, Nigeria </p>
                    <p class="font-weight-medium"><i class="fa fa-phone-alt mr-2"></i>+1718 814 1725</p>
                    <p class="font-weight-medium"><i class="fa fa-phone-alt mr-2"></i>+1347 327 5398</p>
                    <p class="font-weight-medium"><i class="fa fa-envelope mr-2"></i>info@darltv.com</p>
                    <h6 class="mt-4 mb-3 text-white text-uppercase font-weight-bold">Follow Us</h6>
                <div class="d-flex justify-content-start">
                    <a class="btn btn-lg btn-secondary btn-lg-square mr-2" href="#"><i class="fab fa-twitter"></i></a>
                    <a class="btn btn-lg btn-secondary btn-lg-square mr-2" href="#"><i class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-lg btn-secondary btn-lg-square mr-2" href="#"><i class="fab fa-linkedin-in"></i></a>
                    <a class="btn btn-lg btn-secondary btn-lg-square mr-2" href="#"><i class="fab fa-instagram"></i></a>
                    <a class="btn btn-lg btn-secondary btn-lg-square" href="#"><i class="fab fa-youtube"></i></a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-5">
                <h5 class="mb-4 text-white text-uppercase font-weight-bold">Popular News</h5>
                <div class="mb-3">
                    <div class="mb-2">
                        <a class="badge badge-primary font-weight-semi-bold p-1 mr-2" href="">Details</a>
                        <a class="text-body" href=""><small>Jan 01, 2045</small></a>
                    </div>
                    <a class="small text-body font-weight-medium" href="">Sample news story heading..</a>
                </div>
                <div class="mb-3">
                    <div class="mb-2">
                        <a class="badge badge-primary font-weight-semi-bold p-1 mr-2" href="">Details</a>
                        <a class="text-body" href=""><small>Jan 01, 2045</small></a>
                    </div>
                    <a class="small text-body font-weight-medium" href="">Sample news story heading..</a>
                </div>
                <div class="">
                    <div class="mb-2">
                        <a class="badge badge-primary font-weight-semi-bold p-1 mr-2" href="">Details</a>
                        <a class="text-body" href=""><small>Jan 01, 2045</small></a>
                    </div>
                    <a class="small text-body font-weight-medium" href="">Sample news story heading..</a>
                </div>
            </div>
           
            <div class="col-lg-3 col-md-6 mb-5">
                <h5 class="mb-4 text-white text-uppercase font-weight-bold">Gallery</h5>
                <div class="row">
                    <div class="col-4 mb-3">
                        <a href=""><img class="w-100" src="img/img2.jpg" alt=""></a>
                    </div>
                    <div class="col-3 mb-3">
                        <a href=""><img class="w-100" src="img/news-110x110-2.jpg" alt=""></a>
                    </div>
                    <div class="col-3 mb-3">
                        <a href=""><img class="w-100" src="img/new1.jpg" alt=""></a>
                    </div>
                    <div class="col-3 mb-3">
                        <a href=""><img class="w-100" src="img/news-110x110-4.jpg" alt=""></a>
                    </div>
                    <div class="col-3 mb-3">
                        <a href=""><img class="w-100" src="img/img2.jpg" alt=""></a>
                    </div>
                    <div class="col-3 mb-3">
                        <a href=""><img class="w-100" src="img/news-110x110-1.jpg" alt=""></a>
                    </div>
                    
                   
                </div>
            </div>

            <div class="col-lg-3 col-md-6 mb-5">
                <h5 class="mb-4 text-white text-uppercase font-weight-bold">News Letter</h5>
                <div class="row">
                        
                    <div class="input-group mb-2" style="width: 100%;">
                        <input type="text" class="form-control form-control-lg" placeholder="Your Email">
                        <div class="input-group-append">
                            <button class="btn btn-primary font-weight-bold px-3">Sign Up</button>
                        </div>
                    </div>
                         
                    
                </div>
            </div>

        </div>
    </div>
    <div class="container-fluid py-4 px-sm-3 px-md-5" style="background: #111111;">
        <p class="m-0 text-center">&copy; <a href="#">Darltv</a>. All Rights Reserved. 
		
		<!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
		Design by <a href="https://htmlcodex.com">Joshua Ehiatue</a></p>
    </div>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-primary btn-square back-to-top"><i class="fa fa-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>