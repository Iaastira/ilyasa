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
    <link rel="stylesheet" href="{{asset ('assets/egames/style.css')}}">

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
    <div class="breadcrumb-area bg-img bg-overlay" style="background-image: url(img/bg-img/27.jpg);">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <!-- Breadcrumb Text -->
                <div class="col-12">
                    <div class="breadcrumb-text">
                        <h2>Review</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ##### Breadcrumb Area End ##### -->

    <!-- ##### Game Review Area Start ##### -->
    <section class="game-review-area section-padding-100">
        <div class="container">
            <div class="row">
                <div class="col-12">

                    <!-- *** Single Review Area *** -->
                    <div class="single-game-review-area d-flex flex-wrap mb-30">
                        <div class="game-thumbnail">
                            <img src="{{asset('assets/egames/img/bg-img/28.jpg')}}" alt="">
                        </div>
                        <div class="game-content">
                            <span class="game-tag">Adventure</span>
                            <a href="single-game-review.html" class="game-title">NFS 2018</a>
                            <div class="game-meta">
                                <a href="#" class="game-date">July 12, 2018</a>
                                <a href="#" class="game-comments">2 Comments</a>
                            </div>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris velit arcu, scelerisque dignissim massa quis, mattis facilisis erat. Aliquam erat volutpat. Sed efficitur diam. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris velit arcu, scelerisque dignissim massa quis, mattis facilisis erat. Aliquam erat volutpat. Sed efficitur diam.</p>
                            <!-- Download & Rating Area -->
                            <div class="download-rating-area d-flex align-items-center justify-content-between">
                                <div class="download-area">
                                    <a href="#"><img src="{{asset('assets/egames/img/core-img/app-store.png')}}" alt=""></a>
                                    <a href="#"><img src="{{asset('assets/egames/img/core-img/google-play.png')}}" alt=""></a>
                                </div>
                                <div class="rating-area text-center">
                                    <h3>9.1</h3>
                                    <div class="stars">
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star-half-o" aria-hidden="true"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- *** Single Review Area *** -->
                    <div class="single-game-review-area d-flex flex-wrap mb-30">
                        <div class="game-thumbnail">
                            <img src="{{asset('assets/egames/img/bg-img/29.jpg')}}" alt="">
                        </div>
                        <div class="game-content">
                            <span class="game-tag">Adventure</span>
                            <a href="single-game-review.html" class="game-title">Call of Duty</a>
                            <div class="game-meta">
                                <a href="#" class="game-date">July 12, 2018</a>
                                <a href="#" class="game-comments">2 Comments</a>
                            </div>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris velit arcu, scelerisque dignissim massa quis, mattis facilisis erat. Aliquam erat volutpat. Sed efficitur diam. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris velit arcu, scelerisque dignissim massa quis, mattis facilisis erat. Aliquam erat volutpat. Sed efficitur diam.</p>
                            <!-- Download & Rating Area -->
                            <div class="download-rating-area d-flex align-items-center justify-content-between">
                                <div class="download-area">
                                    <a href="#"><img src="{{asset('assets/egames/img/core-img/app-store.png')}}" alt=""></a>
                                    <a href="#"><img src="{{asset('assets/egames/img/core-img/google-play.png')}}" alt=""></a>
                                </div>
                                <div class="rating-area text-center">
                                    <h3>8.1</h3>
                                    <div class="stars">
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star-half-o" aria-hidden="true"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- *** Single Review Area *** -->
                    <div class="single-game-review-area d-flex flex-wrap mb-30">
                        <div class="game-thumbnail">
                            <img src="{{asset('assets/egames/img/bg-img/30.jpg')}}" alt="">
                        </div>
                        <div class="game-content">
                            <span class="game-tag">Adventure</span>
                            <a href="single-game-review.html" class="game-title">Star Wars</a>
                            <div class="game-meta">
                                <a href="#" class="game-date">July 12, 2018</a>
                                <a href="#" class="game-comments">2 Comments</a>
                            </div>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris velit arcu, scelerisque dignissim massa quis, mattis facilisis erat. Aliquam erat volutpat. Sed efficitur diam. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris velit arcu, scelerisque dignissim massa quis, mattis facilisis erat. Aliquam erat volutpat. Sed efficitur diam.</p>
                            <!-- Download & Rating Area -->
                            <div class="download-rating-area d-flex align-items-center justify-content-between">
                                <div class="download-area">
                                    <a href="#"><img src="{{asset('assets/egames/img/core-img/app-store.png')}}" alt=""></a>
                                    <a href="#"><img src="{{asset('assets/egames/img/core-img/google-play.png')}}" alt=""></a>
                                </div>
                                <div class="rating-area text-center">
                                    <h3>9.3</h3>
                                    <div class="stars">
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star-half-o" aria-hidden="true"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- *** Single Review Area *** -->
                    <div class="single-game-review-area d-flex flex-wrap mb-30">
                        <div class="game-thumbnail">
                            <img src="{{asset('assets/egames/img/bg-img/31.jpg')}}" alt="">
                        </div>
                        <div class="game-content">
                            <span class="game-tag">Adventure</span>
                            <a href="single-game-review.html" class="game-title">DOOM 2018</a>
                            <div class="game-meta">
                                <a href="#" class="game-date">July 12, 2018</a>
                                <a href="#" class="game-comments">2 Comments</a>
                            </div>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris velit arcu, scelerisque dignissim massa quis, mattis facilisis erat. Aliquam erat volutpat. Sed efficitur diam. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris velit arcu, scelerisque dignissim massa quis, mattis facilisis erat. Aliquam erat volutpat. Sed efficitur diam.</p>
                            <!-- Download & Rating Area -->
                            <div class="download-rating-area d-flex align-items-center justify-content-between">
                                <div class="download-area">
                                    <a href="#"><img src="{{asset('assets/egames/img/core-img/app-store.png')}}" alt=""></a>
                                    <a href="#"><img src="{{asset('assets/egames/img/core-img/google-play.png')}}" alt=""></a>
                                </div>
                                <div class="rating-area text-center">
                                    <h3>9.1</h3>
                                    <div class="stars">
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star-half-o" aria-hidden="true"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- *** Single Review Area *** -->
                    <div class="single-game-review-area d-flex flex-wrap mb-30">
                        <div class="game-thumbnail">
                            <img src="{{asset('assets/egames/img/bg-img/34.jpg')}}" alt="">
                        </div>
                        <div class="game-content">
                            <span class="game-tag">Adventure</span>
                            <a href="single-game-review.html" class="game-title">Destiny 2</a>
                            <div class="game-meta">
                                <a href="#" class="game-date">July 12, 2018</a>
                                <a href="#" class="game-comments">2 Comments</a>
                            </div>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris velit arcu, scelerisque dignissim massa quis, mattis facilisis erat. Aliquam erat volutpat. Sed efficitur diam. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris velit arcu, scelerisque dignissim massa quis, mattis facilisis erat. Aliquam erat volutpat. Sed efficitur diam.</p>
                            <!-- Download & Rating Area -->
                            <div class="download-rating-area d-flex align-items-center justify-content-between">
                                <div class="download-area">
                                    <a href="#"><img src="{{asset('assets/egames/img/core-img/app-store.png')}}" alt=""></a>
                                    <a href="#"><img src="{{asset('assets/egames/img/core-img/google-play.png')}}" alt=""></a>
                                </div>
                                <div class="rating-area text-center">
                                    <h3>8.2</h3>
                                    <div class="stars">
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star-half-o" aria-hidden="true"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- ### Pagination Area ### -->
                    <nav aria-label="Page navigation example">
                        <ul class="pagination mt-100">
                            <li class="page-item active"><a class="page-link" href="#">01</a></li>
                            <li class="page-item"><a class="page-link" href="#">02</a></li>
                            <li class="page-item"><a class="page-link" href="#">03</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Game Review Area End ##### -->

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