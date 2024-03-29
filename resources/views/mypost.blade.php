<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title -->
    <title>GAVI - Gaming Magazine Template</title>

    <!-- Favicon -->
    <link rel="icon" href="{{asset('assets/egames/img/core-img/favicon.ico')}}">

    <!-- Stylesheet -->
    <link rel="stylesheet" href="{{asset('assets/egames/style.css')}}">

</head>

<body>
    <!-- Preloader -->
    <div class="preloader d-flex align-items-center justify-content-center">
        <div class="spinner">
            <div class="bounce1"></div>
            <div class="bounce2"></div>
            <div class="bounce3"></div>
        </div>
    </div>

    <!-- ##### Header Area Start ##### -->
    @include('layouts.front.header')
    <!-- ##### Header Area End ##### -->

    <!-- ##### Breadcrumb Area Start ##### -->
    <section class="breadcrumb-area bg-img bg-overlay" style="background-image: url(img/bg-img/23.jpg);">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <!-- Breadcrumb Text -->
                <div class="col-12">
                    <div class="breadcrumb-text">
                        <h2>Article</h2>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Breadcrumb Area End ##### -->

    <!-- ##### Post Details Area Start ##### -->
    <section class="post-news-area section-padding-0-100">
        <div class="container">
            <div class="row justify-content-center">
                <!-- Post Details Content Area -->
                <div class="col-12 col-lg-8">
                    <div class="mt-100">
                        <div class="post-details-content mb-100">
                            <div class="blog-thumbnail mb-50">
                                <img src="{{asset('assets/egames/img/bg-img/24.jpg')}}" alt="">
                            </div>
                            <div class="blog-content">
                                <h4 class="post-title">Sony’s new releases for 2018</h4>
                                <div class="post-meta mb-30">
                                    <a href="#" class="post-date">July 12, 2018</a>
                                    <a href="#" class="post-author">By Admin</a>
                                    <a href="#" class="post-comments">2 Comments</a>
                                </div>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris velit arcu, scelerisque dignissim massa quis, mattis facilisis erat. Aliquam erat volutpat. Sed efficitur diam.Aenean ut eros in ligula mollis lacinia eu in metus. In diam leo, convallis id nisi sed, mollis malesuada arcu. Aenean nisi tellus, posuere quis quam nec, mattis tempor dui. Suspendisse non ante mollis, fermentum erat non, fermentum neque. Phasellus vulputate, odio sit amet rhoncus interdum, est est condimentum velit, non condimentum lectus sapien id ante. Nullam sed quam hendrerit, cursus augue at, ultricies erat. Nulla sed pharetra ligula.</p>

                                <p>n vitae nisi aliquam, scelerisque leo a, volutpat sem. Vivamus rutrum dui fermentum eros hendrerit, id lobortis leo volutpat. Maecenas sollicitudin est in libero pretium interdum. Nullam volutpat dui sem, ac congue purus luctus nec. Curabitur luctus luctus erat, sit amet facilisis quam congue quis. Quisque ornare luctus erat id dignissim. Nullam ac nunc quis ex porttitor luctus.</p>

                                <p>Integer sed facilisis eros. In iaculis rhoncus velit in malesuada. In hac habitasse platea dictumst. Fusce erat ex, consectetur sit amet ornare suscipit, porta et erat. Donec nec nisi in nibh commodo laoreet. Mauris dapibus justo ut feugiat malesuada. Fusce ultricies ante tortor, non vestibulum est feugiat ut.</p>

                                <div class="row mt-50">
                                    <div class="col-6">
                                        <img src="{{asset('assets/egames/img/bg-img/25.jpg')}}" alt="">
                                    </div>
                                    <div class="col-6">
                                        <img src="{{asset('assets/egames/img/bg-img/26.jpg')}}" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Comment Area Start -->
                        <div class="comment_area clearfix mb-70">
                            <h4 class="mb-50">Comments</h4>

                            <ol>
                                <!-- Single Comment Area -->
                                <li class="single_comment_area">
                                    <!-- Comment Content -->
                                    <div class="comment-content d-flex">
                                        <!-- Comment Author -->
                                        <div class="comment-author">
                                            <img src="{{asset('assets/egames/img/bg-img/32.jpg')}}" alt="author">
                                        </div>
                                        <!-- Comment Meta -->
                                        <div class="comment-meta">
                                            <a href="#" class="post-author">William Smith</a>
                                            <a href="#" class="post-date">July 12, 2018</a>
                                            <p>Integer sed facilisis eros. In iaculis rhoncus velit in malesuada. In hac habitasse platea dictumst. Fusce erat ex, consectetur sit amet ornare suscipit, porta et erat. Donec nec nisi in nibh commodo laoreet.</p>
                                            <a href="#reply" class="reply">Reply</a>
                                        </div>
                                    </div>

                                    <ol class="children">
                                        <li class="single_comment_area">
                                            <!-- Comment Content -->
                                            <div class="comment-content d-flex">
                                                <!-- Comment Author -->
                                                <div class="comment-author">
                                                    <img src="{{asset('assets/egames/img/bg-img/33.jpg')}}" alt="author">
                                                </div>
                                                <!-- Comment Meta -->
                                                <div class="comment-meta">
                                                    <a href="#" class="post-author">Jaku Smith</a>
                                                    <a href="#" class="post-date">July 12, 2018</a>
                                                    <p>Facilisis eros. In iaculis rhoncus velit in malesuada. In hac habitasse platea dictumst. Fusce erat ex, consectetur sit amet ornare suscipit, porta et erat. Donec nec nisi in nibh commodo laoreet.</p>
                                                    <a href="#reply" class="reply">Reply</a>
                                                </div>
                                            </div>
                                        </li>
                                    </ol>
                                </li>

                                <!-- Single Comment Area -->
                                <li class="single_comment_area">
                                    <!-- Comment Content -->
                                    <div class="comment-content d-flex">
                                        <!-- Comment Author -->
                                        <div class="comment-author">
                                            <img src="{{asset('assets/egames/img/bg-img/32.jpg')}}" alt="author">
                                        </div>
                                        <!-- Comment Meta -->
                                        <div class="comment-meta">
                                            <a href="#" class="post-author">James Carter</a>
                                            <a href="#" class="post-date">July 12, 2018</a>
                                            <p>Integer sed facilisis eros. In iaculis rhoncus velit in malesuada. In hac habitasse platea dictumst. Fusce erat ex, consectetur sit amet ornare suscipit, porta et erat. Donec nec nisi in nibh commodo laoreet.</p>
                                            <a href="#reply" class="reply">Reply</a>
                                        </div>
                                    </div>
                                </li>
                            </ol>
                        </div>

                        <div class="post-a-comment-area mb-30 clearfix" id="reply">
                            <h4 class="mb-50">Leave a reply</h4>

                            <!-- Reply Form -->
                            <div class="contact-form-area">
                                <form action="#" method="post">
                                    <div class="row">
                                        <div class="col-12 col-lg-6">
                                            <input type="text" class="form-control" id="name" placeholder="Name*">
                                        </div>
                                        <div class="col-12 col-lg-6">
                                            <input type="email" class="form-control" id="email" placeholder="Email*">
                                        </div>
                                        <div class="col-12">
                                            <input type="text" class="form-control" id="subject" placeholder="Website">
                                        </div>
                                        <div class="col-12">
                                            <textarea name="message" class="form-control" id="message" cols="30" rows="10" placeholder="Message"></textarea>
                                        </div>
                                        <div class="col-12">
                                            <button class="btn egames-btn w-100" type="submit">Submit Comment</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Sidebar Widget -->
                <div class="col-12 col-sm-9 col-md-6 col-lg-4">
                    <div class="sidebar-area mt-100">

                        <!-- Single Widget Area -->
                        <div class="single-widget-area add-widget">
                            <a href="#"><img src="{{asset('assets/egames/img/bg-img/add.png')}}" alt=""></a>
                            <!-- Side Img -->
                            <img src="{{asset('assets/egames/img/bg-img/side-img.png')}}" class="side-img" alt="">
                        </div>

                        <!-- Single Widget Area -->
                        <div class="single-widget-area video-widget">
                            <!-- Single Video Widget -->
                            <div class="single-video-widget d-flex">
                                <div class="video-thumbnail">
                                    <img src="{{asset('assets/egames/img/bg-img/14.jpg')}}" alt="">
                                </div>
                                <div class="video-text">
                                    <a href="#" class="video-title">Assemble Your Squad and Join the Battle</a>
                                    <span>Nintendo Wii, PS4, XBox 360</span>
                                </div>
                                <div class="video-rating">8.3/10</div>
                            </div>

                            <!-- Single Video Widget -->
                            <div class="single-video-widget d-flex">
                                <div class="video-thumbnail">
                                    <img src="{{asset('assets/egames/img/bg-img/15.jpg')}}" alt="">
                                </div>
                                <div class="video-text">
                                    <a href="#" class="video-title">Tips to improve your game</a>
                                    <span>Nintendo Wii, PS4, XBox 360</span>
                                </div>
                                <div class="video-rating">8.3/10</div>
                            </div>

                            <!-- Single Video Widget -->
                            <div class="single-video-widget d-flex">
                                <div class="video-thumbnail">
                                    <img src="{{asset('assets/egames/img/bg-img/16.jpg')}}" alt="">
                                </div>
                                <div class="video-text">
                                    <a href="#" class="video-title">Game reviews: the best of 2018</a>
                                    <span>Nintendo Wii, PS4, XBox 360</span>
                                </div>
                                <div class="video-rating">8.3/10</div>
                            </div>

                            <!-- Single Video Widget -->
                            <div class="single-video-widget d-flex">
                                <div class="video-thumbnail">
                                    <img src="{{asset('assets/egames/img/bg-img/17.jpg')}}" alt="">
                                </div>
                                <div class="video-text">
                                    <a href="#" class="video-title">Assemble Your Squad and Join the Battle</a>
                                    <span>Nintendo Wii, PS4, XBox 360</span>
                                </div>
                                <div class="video-rating">8.3/10</div>
                            </div>

                            <!-- Single Video Widget -->
                            <div class="single-video-widget d-flex">
                                <div class="video-thumbnail">
                                    <img src="{{asset('assets/egames/img/bg-img/18.jpg')}}" alt="">
                                </div>
                                <div class="video-text">
                                    <a href="#" class="video-title">New to gaming? Here are some tips</a>
                                    <span>Nintendo Wii, PS4, XBox 360</span>
                                </div>
                                <div class="video-rating">8.3/10</div>
                            </div>
                        </div>

                        <!-- Single Widget Area -->
                        <div class="single-widget-area post-widget">
                            <h4 class="widget-title">Latest Posts</h4>
                            <!-- Single Post Widget -->
                            <div class="single-post-area d-flex">
                                <div class="blog-thumbnail">
                                    <img src="{{asset('assets/egames/img/bg-img/19.jpg')}}" alt="">
                                </div>
                                <div class="blog-content">
                                    <a href="#" class="post-title">New to gaming? Here are some tips</a>
                                    <span>Nintendo Wii, PS4, XBox 360</span>
                                </div>
                            </div>

                            <!-- Single Post Widget -->
                            <div class="single-post-area d-flex">
                                <div class="blog-thumbnail">
                                    <img src="{{asset('assets/egames/img/bg-img/20.jpg')}}" alt="">
                                </div>
                                <div class="blog-content">
                                    <a href="#" class="post-title">Gaming at a new lever: 2018 new release</a>
                                    <span>Nintendo Wii, PS4, XBox 360</span>
                                </div>
                            </div>

                            <!-- Single Post Widget -->
                            <div class="single-post-area d-flex">
                                <div class="blog-thumbnail">
                                    <img src="{{asset('assets/egames/img/bg-img/21.jpg')}}" alt="">
                                </div>
                                <div class="blog-content">
                                    <a href="#" class="post-title">2018 Comicon: See the lastest news</a>
                                    <span>Nintendo Wii, PS4, XBox 360</span>
                                </div>
                            </div>

                            <!-- Single Post Widget -->
                            <div class="single-post-area d-flex">
                                <div class="blog-thumbnail">
                                    <img src="{{asset('assets/egames/img/bg-img/22.jpg')}}" alt="">
                                </div>
                                <div class="blog-content">
                                    <a href="#" class="post-title">New to gaming? Here are some tips</a>
                                    <span>Nintendo Wii, PS4, XBox 360</span>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Post Details Area End ##### -->

    <!-- ##### Footer Area Start ##### -->
    @include('layouts.front.footer')
    <!-- ##### Footer Area End ##### -->

    <!-- ##### All Javascript Script ##### -->
    <!-- jQuery-2.2.4 js -->
    <script src="{{asset('assets/egames/js/jquery/jquery-2.2.4.min.js')}}"></script>
    <!-- Popper js -->
    <script src="{{asset('assets/egames/js/bootstrap/popper.min.js')}}"></script>
    <!-- Bootstrap js -->
    <script src="{{asset('assets/egames/js/bootstrap/bootstrap.min.js')}}"></script>
    <!-- All Plugins js -->
    <script src="{{asset('assets/egames/js/plugins/plugins.js')}}"></script>
    <!-- Active js -->
    <script src="{{asset('assets/egames/js/active.js')}}"></script>
</body>

</html>