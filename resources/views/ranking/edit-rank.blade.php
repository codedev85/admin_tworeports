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
    <link rel="stylesheet" href="../resource/vendor/css/owl.carousel.min.css">
    <link rel="stylesheet" href="../resource/vendor/css/owl.theme.default.min.css">

    <!-- <link rel="stylesheet" href="resources/css/modal.css"> -->
    <!-- <link rel="stylesheet" href="vendors/css/animate.css"> -->
    <link href="../resource/css/styles.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <style>
    .rank_cat{
 width:875px;
    }
    .center__container--wrapper{
        height:700px;
    }
    </style>

    <title>TWOREPORT OurServices Update</title>
</head>
<body>
<div class="top__bar">

        <div class="top__bar--main">

            <span><img src="../resource/images/tworeport__logo.svg" alt="" class="home__img"></span>

            <div class="top__bar-hero">

                    <div><span>UPDATE RANKING</span></div>

            </div>

        </div>

</div>



<section class="">

    <div class="mainContainer">

        <div class="left__bar">

            <div class="left__homepage--container">

                <div class="left__menu--item">
                    <img src="../resource/images/dropdown__icon.svg" alt="" class="left__menu--icon">
                    <a >Dashboard</a>
                </div>
                <div class="left__menu--item">
                    <img src="../resource/images/Vector (1).svg" alt="" class="left__menu--icon">
                    <a>Back To Main Site</a>
                </div>
                <div class="left__menu--item">
                    <img src="../resource/images/Vector (2).svg" alt="" class="left__menu--icon">
                    <a>Log Out</a>
                </div>
                <div class="left__menu--item left__clicked--text">
                    <img src="../edithero__tworeport.svg" alt="" class="left__menu--icon">
                    <a>Edit</a><img src="../resource/images/dropdownicon.svg" class="dropdown__arrow">
                </div>
            </div>
                <div class="left__menu--sub-item">
                    <a>Video</a>
                    <a>Company News</a>
                    <a>Infographics</a>
                    <a>Banner</a>
                    <a>Subscribe</a>
                    <a>Partners/Clients</a>
                    <a>Articles</a>
                </div>

                <button class="red__homepage--btn" id="form-submit-button"><span>Save Changes</span></button>

                <!-- <button class="red__homepage--btn"><span>Add New Item</span></button> -->
            </div>



        </div>

        <div class="center__Container">
  
            <div class="form__header--list">

                <div class="form__header--list1">
                    <p class="">
                        <img src="../resource/images/left-arrow.svg" alt="" class="back__arrow"><span class=""><a>Back</a></span>
                    </p>
                    <!-- <P class="homepage__para">
                        EDIT HERO IMAGE
                    </P> -->
                </div>

            </div>


            <div class="main__container">

            <form id="form-submit" action="{{url('/update-ranks/'.$edit_rank->id)}}" method="post" enctype="multipart/form-data">
    @csrf
                <div class="center__container">

                    <div class="center__container--wrapper">
                        <input name="teams" placeholder="teams" value="{{$edit_rank->rank_name}}">
                        <input type="date" name="date" placeholder="date" value="{{$edit_rank->date}}">
                        <input name="twitter" placeholder="twitter" value="{{$edit_rank->twitter}}">
                        <input name="twitter_value" placeholder="Twitter value" value="{{$edit_rank->add_sub_twit}}">
                        <input name="instagram" placeholder="Instagram" value="{{$edit_rank->instagram}}">
                        <input name="instagram_value" placeholder="Instagram Value" value="{{$edit_rank->add_sub_inst}}">
                        <input name="facebook" placeholder="Facebook" value="{{$edit_rank->facebook}}">
                        <input name="facebook_value" placeholder="Facebook Value" value="{{$edit_rank->add_sub_fb}}">
                        <!-- <input type="hidden" class="form-control" value="{{$edit_rank->category_id}}"> -->
                        <select  name="cat_id">
                        <option class="rank_cat" value="{{$edit_rank->category_id}}">{{$edit_rank->category['name']}}<option>
                        @foreach($cats as $cat)
                        <option class="rank_cat"  value="{{$cat->id}}">{{$cat->name}}<option>
                        @endforeach
                        </select>

                    </div>

                </div>

            </form>
            

            </div>

        </div>

    </div>


</section>
<script>
        //switching missions;
        //jquery  to subbmifom

    $('#form-submit-button').on('click', function(){
    $('#form-submit').submit();
     });

    </script>
<script src="../resource/js/admin.js"></script>


</body>
</html>

