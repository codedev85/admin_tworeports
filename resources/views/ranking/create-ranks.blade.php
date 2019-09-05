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
    <link rel="stylesheet" href="vendor/css/owl.carousel.min.css">
    <link rel="stylesheet" href="vendor/css/owl.theme.default.min.css">

    <!-- <link rel="stylesheet" href="resources/css/modal.css"> -->
    <!-- <link rel="stylesheet" href="vendors/css/animate.css"> -->
    <link href="resource/css/styles.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <style>
            .center__container--wrapper{
                height:1200px;
            }
            .select_box {
    margin: 7px 0;
    width: 880px;
    padding: 8px 12px;
    border-radius: 4px;
    box-shadow: none;
    border: 1px solid #000;
}

    </style>

    <title>TWOREPORT OurServices Update</title>
</head>
<body>
<div class="top__bar">

        <div class="top__bar--main">

            <span><img src="../resource/images/tworeport__logo.svg" alt="" class="home__img"></span>

            <div class="top__bar-hero">

                    <div><span>RANK CREATE</span></div>

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
                    <img src="../resource/images/edithero__tworeport.svg" alt="" class="left__menu--icon">
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
                <a href="{{url('/ranks-category/')}}">
                <button class="red__homepage--btn"><span>Add Category</span></button> 
</a>
                <button class="red__homepage--btn" id="form-submit-button"><span>Save Changes</span></button>

                
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
                    </P>  -->
                </div>

            </div>


            <div class="main__container">

<form action="{{url('/rank-post/')}}" id="form-submit" method="post" enctype="multipart/form-data">
    @csrf
                <div class="center__container">

                    <!-- <div class="center__container--wrapper">
                        <input name="teams" placeholder="teams">
                        <input type="date" name="date" placeholder="date">
                        <input name="twitter" placeholder="twitter">
                        <input name="twitter_value" placeholder="value">
                        <input name="instagram" placeholder="Instagram">
                        <input name="instagram_value" placeholder="Value">
                        <input name="facebook" placeholder="Facebook">
                        <input name="facebook_value" placeholder="Value">
                        <select name="cat_id" class="select_box">
                           @foreach($rank_cats as $rank_cat)
                            <option class="form-control" value="{{$rank_cat->id}}">{{$rank_cat->name}}</option>
                            @endforeach
                        </select>
                        <div class="six__btn--wrapper">
                                <button class="red__homepage--btn"><span>Save </span></button>

                        </div>





                    </div> -->

          
    
        <input type="hidden" name="cat_id" value="3"/>

                <div class="rank-container">
                        <h2 class="rank__heading">
                            Sports
                       <select class="select_box " name="sub_rank_id">
                             @foreach($sub_rank_cats as $rank)
                                <option value="{{$rank->id}}">
                                  {{$rank->name}}
                               </option>
                            
                             @endforeach
                      </select>
                        </h2>
                <div class="rank-input__container__title">
                    <div class="rank-title__container">
                        <h2 type="text" class="rank__title">
                       Teams
                        </h2> 
                        <span class="rank__tooltip" >Teams</span>
                    </div>
                    <div class="rank-title__container">
                        <h2 type="text" class="rank__title">
                        Date
                        </h2> 
                        <span class="rank__tooltip" >Date</span>
                    </div>
                    <div class="rank-title__container">
                        <h2 type="text" class="rank__title">
                        Twitter<br>(000+)

                        </h2> 
                        <span class="rank__tooltip" >Twitter <br>   ( 000+)</span>
                    </div>
                    <div class="rank-title__container">
                        <h2 type="text" class="rank__title">
                        Twitter  Value<br>(000+)
                        </h2> 
                        <span class="rank__tooltip" >Twitter Value<br>(000+)</span>
                    </div>
                    <div class="rank-title__container">
                        <h2 type="text" class="rank__title">
                        Facebook<br>(000+)
                        </h2> 
                        <span class="rank__tooltip" > Facebook<br>(000+)</span>
                    </div>
                    <div class="rank-title__container">
                        <h2 type="text" class="rank__title">
                        Facebook Value <br>(000+)
                        </h2> 
                        <span class="rank__tooltip" >Facebook  Value<br>(000+)</span>
                    </div>
                    <div class="rank-title__container">
                        <h2 type="text" class="rank__title">
                        Instagram <br>(000+)
                        </h2> 
                        <span class="rank__tooltip" >Instagram <br>(000+)</span>
                    </div>
                    <div class="rank-title__container">
                        <h2 type="text" class="rank__title">
                        Instagram Value <br>(000+)
                        </h2> 
                        <span class="rank__tooltip" >Instagram Value<br>(000+)</span>
                    </div>
                </div>

                    <div class="rank-input__container">
                       <input type="text"type="text" name="teams[]" class="rank-input">
                       <input type="text" type="date" name='date[]' class="rank-input">
                       <input type="text" type="text" name='twitter[]' class="rank-input">
                       <input type="text" type="number" name="twitter_value[]" class="rank-input">
                       <input type="text"type="text" name="facebook[]" class="rank-input">
                       <input type="text"type="number" name="facebook_value[]" class="rank-input">
                       <input type="text" type="text" name="instagram[]" class="rank-input">
                       <input type="text" type="number" name="instagram_value[]" class="rank-input">
                    </div>
                    <span class="rank__adder">
                        <svg height="24px" viewBox="0 0 448 448" width="24px" xmlns="http://www.w3.org/2000/svg"><path d="m408 184h-136c-4.417969 0-8-3.582031-8-8v-136c0-22.089844-17.910156-40-40-40s-40 17.910156-40 40v136c0 4.417969-3.582031 8-8 8h-136c-22.089844 0-40 17.910156-40 40s17.910156 40 40 40h136c4.417969 0 8 3.582031 8 8v136c0 22.089844 17.910156 40 40 40s40-17.910156 40-40v-136c0-4.417969 3.582031-8 8-8h136c22.089844 0 40-17.910156 40-40s-17.910156-40-40-40zm0 0" fill="#ffffff"/></svg>
                    </span>
                </div>
                
            </div>


            </form>
            </div>

        </div>

    </div>


</section>

<script>
    let rankContainer = document.querySelector(".rank-container");
    let rankInputContainer = document.querySelector(".rank-input__container")
    let rankAdderTriggerBtn = document.querySelector(".rank__adder");

    rankAdderTriggerBtn.addEventListener("click", function(e){
        e.preventDefault();
        let clonedElement = rankInputContainer.cloneNode(true);
        rankContainer.appendChild(clonedElement);
    })
                    
    $('#form-submit-button').on('click', function(){
    $('#form-submit').submit();
     });


</script>

<script src="resources/js/admin.js"></script>


</body>
</html>

