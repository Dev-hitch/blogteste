<!DOCTYPE html>
<html lang="en-US">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <title>Medigo Blue, Blog, free template</title>
        <meta name="keywords" content="">
        <meta name="description" content="">
        <meta name="author" content="templatemo">
        <!--
        Medigo Template
        http://www.templatemo.com/preview/templatemo_460_medigo
        -->
        
        <!-- Google Fonts -->
        <link href="http://fonts.googleapis.com/css?family=PT+Serif:400,700,400italic,700itali" rel="stylesheet">
        <link href="http://fonts.googleapis.com/css?family=Raleway:400,900,800,700,500,200,100,600" rel="stylesheet">
        
        
        <!-- Stylesheets -->
        <link rel="stylesheet" href="../bootstrap/bootstrap.css">
        <link rel="stylesheet" href="../css/misc.css">
        <link rel="stylesheet" href="../css/blue-scheme.css">
        
        <!-- JavaScripts -->
        <script src="../js/jquery-1.10.2.min.js"></script>
        <script src="../js/jquery-migrate-1.2.1.min.js"></script>
        
        <link rel="shortcut icon" href="../images/favicon.ico" type="image/x-icon"/>
    
    </head>
    <body>
        
        
        <div class="responsive_menu">
            <ul class="main_menu">
                <li>
                    <a href="index.html">Home</a>
                </li>
                <li>
                    <a href="#">Portfolio</a>
                    <ul>
                        <li>
                            <a href="portfolio.html">Portfolio Grid</a>
                        </li>
                        <li>
                            <a href="project-image.html">Project Image</a>
                        </li>
                        <li>
                            <a href="project-slideshow.html">Project Slideshow</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#">Blog</a>
                    <ul>
                        <li>
                            <a href="blog.html">Blog Standard</a>
                        </li>
                        <li>
                            <a href="blog-single.html">Blog Single</a>
                        </li>
                        <li>
                            <a href="#">visit templatemo</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="archives.html">Archives</a>
                </li>
                <li>
                    <a href="contact.html">Contact</a>
                </li>
            </ul> <!-- /.main_menu -->
        </div> <!-- /.responsive_menu -->
        
        <header class="site-header clearfix">
            <div class="container">
                
                <div class="row">
                    
                    <div class="col-md-12">
                        
                        <div class="pull-left logo">
                            <a href="index.html">
                                <img src="images/logo.png" alt="Medigo">
                            </a>
                        </div>    <!-- /.logo -->
                        
                        <div class="main-navigation pull-right">
                            
                            <nav class="main-nav visible-md visible-lg">
                                <ul class="sf-menu">
                                    <li>
                                        <a href="index.html">Home</a>
                                    </li>
                                    <li>
                                        <a href="#">Portfolio</a>
                                        <ul>
                                            <li>
                                                <a href="portfolio.html">Portfolio Grid</a>
                                            </li>
                                            <li>
                                                <a href="project-image.html">Project Image</a>
                                            </li>
                                            <li>
                                                <a href="project-slideshow.html">Project Slideshow</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="active">
                                        <a href="#">Blog</a>
                                        <ul>
                                            <li>
                                                <a href="blog.html">Blog Standard</a>
                                            </li>
                                            <li>
                                                <a href="blog-single.html">Blog Single</a>
                                            </li>
                                            <li>
                                                <a href="#">visit templatemo</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="archives.html">Archives</a>
                                    </li>
                                    <li>
                                        <a href="contact.html">Contact</a>
                                    </li>
                                </ul> <!-- /.sf-menu -->
                            </nav> <!-- /.main-nav -->
                            
                            <!-- This one in here is responsive menu for tablet and mobiles -->
                            <div class="responsive-navigation visible-sm visible-xs">
                                <a href="#nogo" class="menu-toggle-btn">
                                    <i class="fa fa-bars"></i>
                                </a>
                            </div> <!-- /responsive_navigation -->
                        
                        </div> <!-- /.main-navigation -->
                    
                    </div> <!-- /.col-md-12 -->
                
                </div> <!-- /.row -->
            
            </div> <!-- /.container -->
        </header> <!-- /.site-header -->
        
        <div class="first-widget parallax" id="blog">
            <div class="parallax-overlay">
                <div class="container pageTitle">
                    <div class="row">
                        <div class="col-md-6 col-sm-6">
                            <h2 class="page-title">Blog</h2>
                        </div> <!-- /.col-md-6 -->
                        <div class="col-md-6 col-sm-6 text-right">
                            <span class="page-location">Home / Blog</span>
                        </div> <!-- /.col-md-6 -->
                    </div> <!-- /.row -->
                </div> <!-- /.container -->
            </div> <!-- /.parallax-overlay -->
        </div> <!-- /.pageTitle -->
        
        <div class="container">
            <div class="row">
                @if(!empty($posts))
                    <div class="col-md-8 blog-posts">
                        <div class="row">
                            <div class="col-md-12">
                                
                                @foreach($posts as $post)
                                    <div class="post-blog">
                                        <div class="blog-image">
                                            <a href="blog-single.html">
                                                <img src="images/includes/blog1.jpg" alt="">
                                            </a>
                                        </div> <!-- /.blog-image -->
                                        <div class="blog-content">
                                            <span class="meta-date">
                                                <a href="#">28 February 2084</a>
                                            </span>
                                            <span class="meta-comments">
                                                <a href="#">14 Comments</a>
                                            </span>
                                            <span class="meta-author">
                                                <a href="#">{!! $post->author !!}</a>
                                            </span>
                                            <h3>
                                                <a href="blog-single.html">{!! $post->title !!}</a>
                                            </h3>
                                            {!! $post->synopsis !!}
                                            <a href="blog-single.html">Continue Reading...</a>
                                        </div> <!-- /.blog-content -->
                                    </div> <!-- /.post-blog -->
                                @endforeach
                                
                                
                                {{--                            <div class="post-blog">--}}
                                {{--                                <div class="blog-image">--}}
                                {{--                                    <a href="blog-single.html">--}}
                                {{--                                        <img src="images/includes/blog2.jpg" alt="">--}}
                                {{--                                    </a>--}}
                                {{--                                </div> <!-- /.blog-image -->--}}
                                {{--                                <div class="blog-content">--}}
                                {{--                                    <span class="meta-date"><a href="#">24 February 2084</a></span>--}}
                                {{--                                    <span class="meta-comments"><a href="#">32 Comments</a></span>--}}
                                {{--                                    <span class="meta-author"><a href="#">Candy Sharp</a></span>--}}
                                {{--                                    <h3><a href="blog-single.html">Bird Profile Wellington New Zealand</a></h3>--}}
                                {{--                                    <p class="light-text">Sed consequat lobortis risus, in rutrum arcu tristique eget. Etiam accumsan lectus quis cursus porta.  Etiam a turpis sed sapien malesuada pellentesque quis id tortor.  Phasellus mattis quam enim, non accumsan nibh tincidunt sed.</p>--}}
                                {{--                                    <p>Nunc ullamcorper nisi sit amet eros dictum, eget vulputate quam rhoncus. Nulla diam eros, ultrices id lacinia ut, aliquet sit amet erat. Duis ut nulla molestie, ullamcorper ligula eu, ultricies tortor. Suspendisse quis consequat a turpis sed sapien quis id tortor <a href="blog-single.html">Continue Reading...</a></p>--}}
                                {{--                                </div> <!-- /.blog-content -->--}}
                                {{--                            </div> <!-- /.post-blog -->--}}
                                {{--                            --}}
                                
                                {{--                            <div class="post-blog">--}}
                                {{--                                <div class="blog-image">--}}
                                {{--                                    <a href="blog-single.html">--}}
                                {{--                                        <img src="images/includes/blog3.jpg" alt="">--}}
                                {{--                                    </a>--}}
                                {{--                                </div> <!-- /.blog-image -->--}}
                                {{--                                <div class="blog-content">--}}
                                {{--                                    <span class="meta-date"><a href="#">20 February 2084</a></span>--}}
                                {{--                                    <span class="meta-comments"><a href="#">64 Comments</a></span>--}}
                                {{--                                    <span class="meta-author"><a href="#">Candy Sharp</a></span>--}}
                                {{--                                    <h3><a href="blog-single.html">Standard Blog Post Formating Medigo</a></h3>--}}
                                {{--                                    <p class="light-text">Sed consequat lobortis risus, in rutrum arcu tristique eget. Etiam accumsan lectus quis cursus porta.  Etiam a turpis sed sapien malesuada pellentesque quis id tortor.  Phasellus mattis quam enim, non accumsan nibh tincidunt sed.</p>--}}
                                {{--                                    <p>Nunc ullamcorper nisi sit amet eros dictum, eget vulputate quam rhoncus. Nulla diam eros, ultrices id lacinia ut, aliquet sit amet erat. Duis ut nulla molestie, ullamcorper ligula eu, ultricies tortor. Suspendisse quis consequat a turpis sed sapien quis id tortor <a href="blog-single.html">Continue Reading...</a></p>--}}
                                {{--                                </div> <!-- /.blog-content -->--}}
                                {{--                            </div> <!-- /.post-blog -->--}}
                                {{--                            <div class="post-blog">--}}
                                {{--                                <div class="blog-image">--}}
                                {{--                                    <a href="blog-single.html">--}}
                                {{--                                        <img src="images/includes/blog4.jpg" alt="">--}}
                                {{--                                    </a>--}}
                                {{--                                </div> <!-- /.blog-image -->--}}
                                {{--                                <div class="blog-content">--}}
                                {{--                                    <span class="meta-date"><a href="#">24 February 2084</a></span>--}}
                                {{--                                    <span class="meta-comments"><a href="#">128 Comments</a></span>--}}
                                {{--                                    <span class="meta-author"><a href="#">Candy Sharp</a></span>--}}
                                {{--                                    <h3><a href="blog-single.html">Hochbunker High Definition Photography</a></h3>--}}
                                {{--                                    <p class="light-text">Sed consequat lobortis risus, in rutrum arcu tristique eget. Etiam accumsan lectus quis cursus porta.  Etiam a turpis sed sapien malesuada pellentesque quis id tortor.  Phasellus mattis quam enim, non accumsan nibh tincidunt sed.</p>--}}
                                {{--                                    <p>Nunc ullamcorper nisi sit amet eros dictum, eget vulputate quam rhoncus. Nulla diam eros, ultrices id lacinia ut, aliquet sit amet erat. Duis ut nulla molestie, ullamcorper ligula eu, ultricies tortor. Suspendisse quis consequat a turpis sed sapien quis id tortor <a href="blog-single.html">Continue Reading...</a></p>--}}
                                {{--                                </div> <!-- /.blog-content -->--}}
                                {{--                            </div> <!-- /.post-blog -->--}}
                                {{--                        </div> <!-- /.col-md-12 -->--}}
                                <div class="col-md-12">
                                    <ul class="pages">
                                        <li>
                                            <a href="#" class="active">1</a>
                                        </li>
                                        <li>
                                            <a href="#">2</a>
                                        </li>
                                        <li>
                                            <a href="#">3</a>
                                        </li>
                                        <li>
                                            <a href="#">...</a>
                                        </li>
                                        <li>
                                            <a href="#">13</a>
                                        </li>
                                    </ul>
                                </div> <!-- /.col-md-12 -->
                            </div> <!-- /.row -->
                        </div> <!-- /.col-md-8 -->
                        
                        <div class="col-md-4">
                            <div class="sidebar">
                                <div class="sidebar-widget">
                                    <h5 class="widget-title">Recent Posts</h5>
                                    <div class="last-post clearfix">
                                        <div class="thumb pull-left">
                                            <a href="#">
                                                <img src="images/includes/blogthumb1.jpg" alt="">
                                            </a>
                                        </div>
                                        <div class="content">
                                            <span>24 February 2084</span>
                                            <h4>
                                                <a href="#">Standard Post Formating Medigo</a>
                                            </h4>
                                        </div>
                                    </div> <!-- /.last-post -->
                                    <div class="last-post clearfix">
                                        <div class="thumb pull-left">
                                            <a href="#">
                                                <img src="images/includes/blogthumb2.jpg" alt="">
                                            </a>
                                        </div>
                                        <div class="content">
                                            <span>24 February 2084</span>
                                            <h4>
                                                <a href="#">Standard Post Formating Medigo</a>
                                            </h4>
                                        </div>
                                    </div> <!-- /.last-post -->
                                    <div class="last-post clearfix">
                                        <div class="thumb pull-left">
                                            <a href="#">
                                                <img src="images/includes/blogthumb3.jpg" alt="">
                                            </a>
                                        </div>
                                        <div class="content">
                                            <span>24 February 2084</span>
                                            <h4>
                                                <a href="#">Standard Post Formating Medigo</a>
                                            </h4>
                                        </div>
                                    </div> <!-- /.last-post -->
                                </div> <!-- /.sidebar-widget -->
                                <div class="sidebar-widget">
                                    <h5 class="widget-title">Categories</h5>
                                    <div class="row categories">
                                        <div class="col-md-6">
                                            <ul>
                                                <li>
                                                    <a href="#">Standard</a>
                                                </li>
                                                <li>
                                                    <a href="#">Audio</a>
                                                </li>
                                                <li>
                                                    <a href="#">Video</a>
                                                </li>
                                                <li>
                                                    <a href="#">Branding</a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="col-md-6">
                                            <ul>
                                                <li>
                                                    <a href="#">iOS Design</a>
                                                </li>
                                                <li>
                                                    <a href="#">Business</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div> <!-- /.row -->
                                </div> <!-- /.sidebar-widget -->
                                <div class="sidebar-widget">
                                    <h5 class="widget-title">Flickr Feed</h5>
                                    <ul id="flickr-feed" class="thumbs"></ul>
                                </div> <!-- /.sidebar-widget -->
                                <div class="sidebar-widget">
                                    <h5 class="widget-title">Text Widget</h5>
                                    <p class="light-text">Fusce dapibus, tellus ac cursus commodo, tortor mauris
                                        condimentum nibh, ut fermentum massa justo sit amet risus. Cum sociis natoque
                                        penatibus et magnis dis parturient…
                                    </p>
                                </div> <!-- /.sidebar-widget -->
                            </div> <!-- /.sidebar -->
                        </div> <!-- /.col-md-4 -->
                    
                    </div> <!-- /.row -->
                @endif
            </div> <!-- /.container -->
            
            
            <footer class="site-footer">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <nav class="footer-nav clearfix">
                                <ul class="footer-menu">
                                    <li>
                                        <a href="index.html">Home</a>
                                    </li>
                                    <li>
                                        <a href="portfolio.html">Portfolio</a>
                                    </li>
                                    <li>
                                        <a href="blog.html">Blog Posts</a>
                                    </li>
                                    <li>
                                        <a href="archives.html">Shortcodes</a>
                                    </li>
                                    <li>
                                        <a href="contact.html">Contact</a>
                                    </li>
                                </ul> <!-- /.footer-menu -->
                            </nav> <!-- /.footer-nav -->
                        </div> <!-- /.col-md-12 -->
                    </div> <!-- /.row -->
                    <div class="row">
                        <div class="col-md-12">
                            <p class="copyright-text">Copyright &copy; 2084 Company Name</p>
                        </div> <!-- /.col-md-12 -->
                    </div> <!-- /.row -->
                </div> <!-- /.container -->
            </footer> <!-- /.site-footer -->
            
            <!-- Scripts -->
            <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
                    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
                    crossorigin="anonymous"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
                    integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
                    crossorigin="anonymous"></script>
            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
                    integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
                    crossorigin="anonymous"></script>
            <script src="../js/min/plugins.min.js"></script>
            <script src="../js/min/medigo-custom.min.js"></script>
        </div>
    </body>
</html>
