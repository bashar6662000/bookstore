<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title></title>

    <!-- load stylesheets -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400">  <!-- Google web font "Open Sans" -->
    <!-- load stylesheets -->
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400">
<link href= "{{URL::asset('font-awesome-4.7.0/css/font-awesome.min.css') }} rel="stylesheet" type="text/css" >
<link href="{{ URL::asset('css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" >
<link href= "{{URL::asset('css/tooplate-style.css')}}"rel="stylesheet" type="text/css" >
</head>

    <body>
        <div class="container">
            <div class="tm-main-content no-pad-b">
                <section class="row tm-item-preview">
                    <div class="col-md-6 col-sm-12 mb-md-0 mb-5">
                        <img src="{{URL('public/Image/'.$preview_book->image)}}" alt="Image" class="img-fluid tm-img-center-sm">
                        <br> <br> <br>
<!-- comments are here -->
<div class="comment_sec">
@foreach ($comments as $item)
<p style="color: blue"> {{ Return_user_by_userid($item->User_id)}}</p>
{{$item->text}}
<br>
<a href="/priview/comment/edit/{{$item->id}}" style="visibility:{{hide_comment_options($item->User_id,$session_user)}}" ><small >edit</small><a></a>
<br> <br>
@endforeach
</div>
<!--Comments end here-->

                    </div>
                    <div class="col-md-6 col-sm-12">
                        <h2 class="tm-blue-text tm-margin-b-p">{{$preview_book->title}}</h2>
                        <p class="tm-margin-b-p">{{$preview_book->bio}}</p>
                        <p class="tm-blue-text ">Categories: {{Return_categories_bynum($preview_book->categories_id)}}<br><a href="#" class="tm-blue-text">
                        <p class="tm-blue-text tm-s">page number:{{$preview_book->pagenumber}} <br> <a href="#" class="tm-blue-text">
                        <p class="tm-blue-text tm-s">Author:{{$preview_book->Author}} <br> <a href="#" class="tm-blue-text">
                        <p class="tm-blue-text tm-s">price:{{$preview_book->price}}  <br><a href="#" class="tm-blue-text"> <br>
                       <a href="#" class="tm-btn tm-btn-blue">شراء</a>
                       <br> <br>

<form method="post" action="/priview/comment/{{$preview_book->id}}" enctype="multipart/form-data">
    {{  csrf_field()  }}
    <!--text area-->
    <div class="mb-3">
        <label for="exampleFormControlTextarea1" class="form-label tm-blue-text"> اكتب تعليقا</label>
        <textarea name="comment_textarea" class="form-control "  id="exampleFormControlTextarea1" rows="3"   >
        </textarea>
      </div>
    <!--End text area-->
    <input type="submit"  class="tm-btn tm-btn-gray tm-margin-r-20 tm-margin-b-s" value="اكتب تعليق" >
   <a href="/priview/comment/refresh/{{$preview_book->id}}"> <input type="submit"  class="tm-btn tm-btn-gray tm-margin-r-20 tm-margin-b-s" value=" اعادة تحميل التعليقات" ></a>
</form>
<br>
</div>
<!----->
</section>

                <div class="tm-gallery no-pad-b">
                    <div class="row">


                    </div>
                </div>

            </div>

            <footer>

            </footer>
        </div>

        <!-- load JS files -->
        <script src="js/jquery-1.11.3.min.js"></script>         <!-- jQuery (https://jquery.com/download/) -->
        <script src="js/popper.min.js"></script>                <!-- Popper (https://popper.js.org/) -->
        <script src="js/bootstrap.min.js"></script>             <!-- Bootstrap (https://getbootstrap.com/) -->
        <script>



        </script>

</body>
</html>
