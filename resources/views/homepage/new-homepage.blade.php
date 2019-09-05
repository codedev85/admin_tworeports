<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css" rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css?family=Montserrat:200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css?family=Roboto:200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">
    <link rel="stylesheet" href="../vendor/css/owl.carousel.min.css">
    <link rel="stylesheet" href="../vendor/css/owl.theme.default.min.css">

    <!-- <link rel="stylesheet" href="resources/css/modal.css"> -->
    <!-- <link rel="stylesheet" href="vendors/css/animate.css"> -->
    <link href="../resource/css/styles.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>


    <title>TWOREPORT Homepage</title>
</head>
<body>
<div class="top__bar">

        <div class="top__bar--main">
          <a href="{{url('/')}}">
            <span><img src="../resource/images/tworeport__logo.svg" alt="" class="home__img"></span>
            </a>

            <div class="top__bar-hero">

                    <div><span>HOME PAGE UPDATE</span></div>

            </div>

        </div>

</div>



<section class="">

    <div class="mainContainer">

        <div class="left__bar">

            <div class="left__homepage--container">

                <div class="left__menu--item">
                    <img src="../resource/images/dropdown__icon.svg" alt="" class="left__menu--icon">
                    <a href="{{url('/admin')}}">Dashboard</a>
                </div>
                <div class="left__menu--item">
                    <img src="../resource/images/Vector (1).svg" alt="" class="left__menu--icon">
                    <a href="{{url('/')}}">Back To Main Site</a>
                </div>
                <!-- <div class="left__menu--item">
                    <img src="../resource/images/Vector (2).svg" alt="" class="left__menu--icon">
                    <a>Log Out</a>
                </div> -->
                <div class="left__menu--item">
                    <img src="resource/images/Vector (2).svg" alt="" class="left__menu--icon">
                    <a class="dropdown-item" href="{{ route('logout') }}"
                    onclick="event.preventDefault();
                                  document.getElementById('logout-form').submit();">
                     {{ __('Logout') }}
                 </a>

                 <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                     @csrf
                 </form>
                </div>
                <div class="left__menu--item left__clicked--text">
                    <img src="../resource/images/edithero__tworeport.svg" alt="" class="left__menu--icon">
                    <a>Edit</a><img src="../resource/images/dropdownicon.svg" class="dropdown__arrow">

                </div>
            </div>
                <div class="left__menu--sub-item">
                    <a>Video</a>
                     <a href="{{url('/homepage/new/all')}}">Company News</a>
                    <a href="{{url('all/partners')}}">Partners/Clients</a>
                </div>
                <button class="red__homepage--btn"><span>Save</span></button>
                <!-- <button class="red__homepage--btn"><span>Add New Item</span></button> -->
            </div>



        </div>

        <div class="center__Container">
            <div class="form__header--list">

                <div class="form__header--list1">
                    <p class="">
                        <img src="../resource/images/left-arrow.svg" alt="" class="back__arrow"><span class=""><a>Back</a></span>
                    </p>
                    <P class="homepage__para">
                        EDIT HERO IMAGE
                    </P>
                </div>

            </div>


            <div class="main__container">
                    {{-- @include('flash.flash') --}}

                <div class="center__container">

                    <div class="center__container--wrapper home_switchable--container home--switchable-container--on">

                        <input placeholder="title">
                        <textarea placeholder="subtitle"></textarea>

                        <div class="container custom__edit--img-inner1">
                            <span>Width - 1366 Height - 700</span>
                            <img src="../resource/images/featuredimg__tworeport.jpg">
                            <div class="white__small--btn-wrapper">
                            <button class="white__small--btn home-js-btn">1</button>
                            <button class="white__small--btn home-js-btn">2</button>
                            <button class="white__small--btn home-js-btn">3</button>
                            <button class="white__small--btn home-js-btn">4</button>
                            </div>
                        </div>

                    </div>



                <form method="post" action="{{url('/create-video-post/')}}" class="center__container--wrapper center__container--second-wrapper">
                         @csrf
                           <input placeholder="title" name="url">
                            <div class="container custom__edit--img-inner">
                                <span class="span__text--container">Width - 700 Height - 287</span>
                                <iframe width="697" height="200" src="https://www.youtube.com/embed/e2gu5g9Ebk8" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                            </div>
                            <button type="submit">Submit</button>
                    </form>
                    {{-- <div class="center__container--wrapper">
                            <input placeholder="title">
                            <textarea placeholder="subtitle"></textarea>
                            <div class="container custom__edit--img-inner">
                                <span>Width - 1366 Height - 700</span>
                                <div class="three__column--img">
                                    <img src="../resource/images/Market-Research.jpg">
                                    <img src="../resource/images/sports.jpg">
                                    <img src="../resource/images/buhari-osinbajo.jpg">
                                </div>
                                <div class="white__small--btn-wrapper add__btn--width">
                                <button class="white__small--btn">1</button>
                                <button class="white__small--btn">2</button>
                                <button class="white__small--btn">3</button>
                                </div>
                            </div>
                    </div> --}}
                    <div class="four__section--container-wrapper">
                        <div class="four__section--wrapper">

                            <div class="left__section">
                                    <h3>Upload Banner</h3>
                            <form method="post" action="{{url('/post/banner/')}}" enctype="multipart/form-data">
                                @csrf
                                <input type="file" name="url" placeholder="title">
                                <button type="submit">Submit</button>
                            </form>
                                <div class="container custom__img-inner">
                                <span>Width - 700 Height - 616</span>
                                <img src="../resource/images/Banner.jpg">
                                </div>
                            </div>
                            {{-- <div class="left__section">
                                    <h3>Upload Infographics</h3>
                                <input placeholder="title">
                                <div class="container custom__img-inner">
                                <span>Width - 1366 Height - 267</span>
                                <div class="sub__img--container add__border--class">
                                    <img src="../resource/images/Transparent Long.jpg">
                                    <img src="../resource/images/unscripted logo.jpg">
                                </div>
                                </div>
                            </div> --}}
                        </div>
                        <div class="four__section--wrapper">
                            <div class="right__section">
                                    <h3>Upload Infographics</h3>
                            <form method="post" enctype="multipart/form-data" action="{{url('/post/infographics/')}}">
                                @csrf
                                <input type="file" name="url" placeholder="title">
                                <button type="submit">Submit</button>
                            </form>
                                <div class="container custom__img-inner">

                                <span>Width - 270 Height - 150</span>
                                <div class="sub__img--container">
                                    <img src="../resource/images../AFCoN Sponsors.jpg">
                                    <img src="../resource/images/Prize Money Comparison.jpg">
                                    <br>
                                </div>
                                </div>

                            </div>
                            {{-- <div class="right__section">
                                <input placeholder="title">
                                <div class="container custom__img-inner">
                                <span>Width - 120 Height - 120</span>
                                <div class="add__black--border">
                                    <img src="../resource/images/CampsBay Logo 250x250 (1).1.jpg">
                                </div>
                                </div>
                            </div> --}}
                        </div>

                    </div>

                    <div class="center__container--wrapper center__container--second-wrapper">

                        <input placeholder="title">
                        <div class="container custom__edit--img-inner">
                            <span>Width - 250 Height - 130</span>
                            <div class="three__column--img">
                                <img src="../resource/images/black and white.jpg">
                                <img src="../resource/images/women and sports.jpg">
                                <img src="../resource/images/pixabay nigeria.jpg">
                            </div>
                            <div class="white__small--btn-wrapper add__btn--width">
                            <button class="white__small--btn">1</button>
                            <button class="white__small--btn">2</button>
                            <button class="white__small--btn">3</button>
                            <button class="white__small--btn">4</button>
                            <button class="white__small--btn">5</button>
                            </div>
                        </div>
                </div>

                </div>

            </div>

        </div>

    </div>


</section>

<script src="../resource/js/admin.js"></script>
<script>
        //switching missions;
        let homeswitchBtns = document.querySelectorAll(".home-js-btn");
        let homeswitchableContainers = document.querySelectorAll(".home_switchable--container");
        for (let i = 0; i < switchBtns.length; i++) {
            homeswitchBtns[i].addEventListener('click', function(e) {
                e.preventDefault();
                homeswitchableContainers.forEach(function(item) {
                    item.classList.remove('home--switchable-container--on');
                });
                homeswitchBtns.forEach(function(item) {
                    item.classList.remove('active');
                });
                homeswitchableContainers[i].classList.add('home--switchable-container--on');
                homeswitchBtns[i].classList.add('active')
            })
        }
        </script>

</body>
</html>

