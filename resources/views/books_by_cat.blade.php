
<!DOCTYPE html>

<html>

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
<!--

Template 2092 Shelf

http://www.tooplate.com/view/2092-shelf

-->
  <!--  <title>{/*$title->website_name*/}}</title>-->
<!--
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400">
  <link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" >
  <link rel="stylesheet" href="css/tooplate-style.css" rel="stylesheet" type="text/css" >
  <link rel="stylesheet" href="css/bootstrap.min.css" rel="stylesheet" type="text/css" >

-->

    <!-- load stylesheets -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400">
    <link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{URL::asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{URL::asset('css/tooplate-style.css')}}">
    <link rel="stylesheet" href="{{URL::asset('css/style _header.css')}}">
</head>
    <body>
        <div class="container">
            <div class="tm-main-content">

                <section class="tm-margin-b-l">
                        <h1 class="tm-main-title" style="float: right">  العرض حسب فئة :
                            {{$res_cat->name}} </h1>
                            <br>
                    <div class="tm-gallery">

                        <div class="row">

                      <!-- work here -->
                      @foreach ($book as $books)
                        <ul>
                             <!-- test-->

                          <div>
                            <li  style="display: block"  >
               <!--complete-->  <a href="/books/preview/{{$books->id}}">
                                <div class="tm-gallery-item-overlay">
                                <img src="{{URL('public/Image/'.$books->image)}}" alt="Image" class="img-fluid tm-img-center">
                                </div>
                                <p class="tm-figcaption">{{$books->title}}</p>
                            </a>
                            </li>
                        </div>

                         </ul>
                         @endforeach
                           <!--end test-->
                        </div>
                    </div>
                </section>
            </div>
            <footer>

                Copyright &copy; <span class="tm-current-year">2018</span> Manhal Company~
            </footer>
        </div>

        <!-- load JS files -->
        <script src="js/jquery-1.11.3.min.js"></script>         <!-- jQuery (https://jquery.com/download/) -->
        <script src="js/popper.min.js"></script>                <!-- Popper (https://popper.js.org/) -->
        <script src="js/bootstrap.min.js"></script>             <!-- Bootstrap (https://getbootstrap.com/) -->
        <script>

            $(document).ready(function(){
                // Update the current year in copyright
                $('.tm-current-year').text(new Date().getFullYear());

            });
        </script>

</body>
</html>
