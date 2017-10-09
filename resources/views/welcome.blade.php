<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Newline CSS Template with a video background</title>
<!--
Newline Template
http://www.templatemo.com/tm-503-newline
-->
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="apple-touch-icon" href="apple-touch-icon.png">
        
        <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css')}}">
        <link rel="stylesheet" href="{{ asset('css/bootstrap-theme.min.css')}}">
        <link rel="stylesheet" href="{{ asset('css/fontAwesome.css')}}">
        <link rel="stylesheet" href="{{ asset('css/templatemo-style.css')}}">

        <link href="{{ asset('https://fonts.googleapis.com/css?family=Montserrat:100,200,300,400,500,600,700,800,900')}}" rel="stylesheet">

        <script src="{{ asset('js/vendor/modernizr-2.8.3-respond-1.4.2.min.js')}}"></script>
    </head>
    <body>

        <div class="overlay"></div>
        <section class="top-part">
          <video controls autoplay loop>
            <source src="{{asset('videos/video.mp4')}}" type="video/mp4">
            <source src="{{asset('videos/video.ogg')}}" type="video/ogg">
          Your browser does not support the video tag.
          </video>
        </section>
        
        <section class="cd-hero">

          <div class="cd-slider-nav">
            <nav>
              <span class="cd-marker item-1"></span>
              <ul>
                <li class="selected"><a href="#0"><div class="image-icon"><img src="{{asset('img/home-icon.png')}}"></div><h6>Welcome</h6></a></li>
                <li><a href="#0"><div class="image-icon"><img src="{{asset('img/about-icon.png')}}"></div><h6>About Us</h6></a></li>
                <li><a href="#0"><div class="image-icon"><img src="{{asset('img/featured-icon.png')}}"></div><h6>Featured</h6></a></li>
                <li><a href="#0"><div class="image-icon"><img src="{{asset('img/projects-icon.png')}}"></div><h6>Projects</h6></a></li>
                <li><a href="#0"><div class="image-icon"><img src="{{asset('img/contact-icon.png')}}"></div><h6>Log-in</h6></a></li>
              </ul>
            </nav> 
          </div> <!-- .cd-slider-nav -->

          <ul class="cd-hero-slider">

            <li class="selected">
              <div class="heading">
                <h1>NEWLINE</h1>
                <span>Welcome To Web Design Agency</span>
              </div>
              <div class="cd-full-width first-slide">
                <div class="container">
                  <div class="row">
                    <div class="col-md-12">
                      <div class="content first-content">
                        <h4>Let’s Talk More About Newline</h4>
                        <p>Newline is free CSS template by templatemo. Credits go to <a href="https://videos.pexels.com/videos/busy-street-in-the-city-1089" target="_blank">Pexels.com</a> for a video background and <a href="http://unsplash.com" target="_blank">Unsplash</a> for images. Please tell your friends about templatemo and this is a way to help back. Thank you. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque dictum convallis mi. In dapibus auctor dictum donec mattis quis eros ultricies feugiat.</p>
                        <div class="primary-button">
                          <a href="#">Discover More</a>
                        </div>
                      </div>
                    </div>
                  </div>                  
                </div>
              </div>
            </li>

            <li>
              <div class="heading">
                <h1>About Us</h1>
                <span>Get More Info About Our Agency</span> 
              </div>
              <div class="cd-half-width second-slide">   
                <div class="container">
                  <div class="row">
                    <div class="col-md-12">
                      <div class="content second-content">
                        <div class="row">
                          <div class="col-md-7 left-image">
                            <img src="img/left-about-image.jpg">
                          </div>
                          <div class="col-md-5">
                            <div class="right-about-text">
                              <h4>Who we are?</h4>
                              <p>Fusce neque leo, dapibus sed imperdiet sed, vulputate sed purus. Nam eget justo in nibh facilisis rhoncus. Donec et risus non mauris lobortis convallis. Aliquam id urna quis ante blandit semper.</p>
                              <div class="primary-button">
                                <a href="#">Discover More</a>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-md-7">
                            <div class="left-about-text">
                              <h4>What we do?</h4>
                              <p>Nam aliquam ultrices interdum. Vivamus metus mi, accumsan a tincidunt a, efficitur id felis. Vivamus non nibh malesuada, vestibulum nulla in, iaculis sem. Aenean tincidunt faucibus ipsum, ac aliquet nunc accumsan sed. Nulla sodales nunc sit amet libero egestas, ut interdum ex congue.</p>
                              <div class="primary-button">
                                <a href="#">Discover More</a>
                              </div>
                            </div>
                          </div>
                          <div class="col-md-5 right-image">
                            <img src="{{asset('img/right-about-image.jpg')}}">
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>                  
                </div>
              </div>
            </li>

            <li>
              <div class="heading">
                <h1>Featured</h1>
                <span>We produce featured product every week</span> 
              </div>
              <div class="cd-half-width third-slide">
                <div class="container">
                  <div class="row">
                    <div class="col-md-12">
                      <div class="content third-content">
                        <div class="row">
                          <div class="col-md-7 left-image">
                            <img src="{{asset('img/left-feature-image.png')}}">
                          </div>
                          <div class="col-md-5">
                            <div class="right-feature-text">
                              <h4>Featured Product: <em>Newline</em></h4>
                              <p>Lorem ipsum dolor amet, consecte adipiscing elit, quisque dictum convallis mi. In dapibus auctor dictum donec mattis quis eros ultricies feugiat. Morbi congue faucibus mi, ague blandit curabitur ac lacinia.</p>
                              <div class="feature-list">
                                <ul>
                                  <p>- Suspendisse mattis finibus sem</p>
                                  <p>- Pellentesque et urna vel lectus</p>
                                  <p>- Vestibulum iaculis nisi dui</p>
                                  <p>- Donec sagittis eros , ac tempus ligula</p>
                                  <p>- Integer sapien risus, auctor</p>
                                </ul>
                              </div>
                              <div class="primary-button">
                                <a href="#">Discover More</a>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>                  
                </div>
              </div>
            </li>

            <li>
              <div class="heading">
                <h1>Our projects</h1>
                <span>Here you can check our recent projects</span> 
              </div>
              <div class="cd-half-width fourth-slide">
                <div class="container">
                  <div class="row">
                    <div class="col-md-12">
                      <div class="content fourth-content">
                        <div class="row">
                          <div class="col-md-3 project-item">
                            <a href="{{asset('img/item-01.jpg')}}" data-lightbox="image-1"><img src="{{asset('img/project-item-01.jpg')}}"></a>
                          </div>
                          <div class="col-md-3 project-item">
                            <a href="{{asset('img/item-02.jpg')}}" data-lightbox="image-1"><img src="{{asset('img/project-item-02.jpg')}}"></a>
                          </div>
                          <div class="col-md-3 project-item">
                            <a href="{{asset('img/item-03.jpg')}}" data-lightbox="image-1"><img src="{{asset('img/project-item-03.jpg')}}"></a>
                          </div>
                          <div class="col-md-3 project-item">
                            <a href="{{asset('img/item-04.jpg')}}" data-lightbox="image-1"><img src="{{asset('img/project-item-04.jpg')}}"></a>
                          </div>
                          <div class="col-md-3 project-item">
                            <a href="{{asset('img/item-05.jpg')}}" data-lightbox="image-1"><img src="{{asset('img/project-item-05.jpg')}}"></a>
                          </div>
                          <div class="col-md-3 project-item">
                            <a href="{{asset('img/item-06.jpg')}}" data-lightbox="image-1"><img src="{{asset('img/project-item-06.jpg')}}"></a>
                          </div>
                          <div class="col-md-3 project-item">
                            <a href="{{asset('img/item-07.jpg')}}" data-lightbox="image-1"><img src="{{asset('img/project-item-07.jpg')}}"></a>
                          </div>
                          <div class="col-md-3 project-item">
                            <a href="{{asset('img/item-08.jpg')}}" data-lightbox="image-1"><img src="{{asset('img/project-item-08.jpg')}}"></a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>                  
                </div>
              </div>
            </li>

             <li>
              <div class="heading">
                <h1>Login</h1>
                <span>Sign-up and be one of us</span> 
              </div>
              <div class="cd-half-width fivth-slide">
                <div class="container">
                  <div class="row">
                    <div class="col-md-12">
                      <div class="content fivth-content">
                        <div class="row">
                          <div class="col-md-4">
                            <div class="left-info">
                              
                            <div class="container">
                            <div class="row">
                            <div class="col-md-8 col-md-offset-2">
                            <div class="panel panel-default">
                            <div class="panel-heading">Login</div>

                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{ route('login') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Password</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}>Remember Me
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-8 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Login
                                </button>

                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                    Forgot Your Password?
                                </a>
                                <br>
                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                    Register?
                                </a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>                  
                </div>
              </div>
            </li>


        <footer>
          <p>Copyright &copy; 2017 Your Company 
                                
            | Designed by <a href="{{asset('http://www.templatemo.com')}}" target="_parent"><em>templatemo</em></a></p>
        </footer>
    
        <script src="{{asset('//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js')}}"></script>
        <script>window.jQuery || document.write('<script src="{{asset('js/vendor/jquery-1.11.2.min.js')}}"></script>

        <script src="{{asset('js/vendor/bootstrap.min.js')}}"></script>
        <script src="{{asset('js/plugins.js')}}"></script>
        <script src="{{asset('js/main.js')}}"></script>

    </body>
</html>