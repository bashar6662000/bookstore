
<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">




  <!--  <title>{/*$title->website_name*/}}</title>-->

  <!-- load stylesheets -->
 <link href= "{{URL::asset('font-awesome-4.7.0/css/font-awesome.min.css') }} rel="stylesheet type="text/css" >
 <link href= "{{URL::asset('css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" >
 <link href= "{{URL::asset('css/tooplate-style.css')}}"rel="stylesheet" type="text/css" >
 <link  href="{{URL::asset('css/style _header.css')}}" rel="stylesheet" type="text/css">



</head>

    <body>
        <div class="container">
            <header class="tm-site-header">
                <nav >
                    <ul>
                        <div class="middle">
                             <!------>
                             <form action="/books/searching">
                             <div class="search-box" style="float: left">
                            <button class="btn-search"><i class="fas fa-search"></i></button>
                              <input type="text" class="input-search" placeholder="Type to Search..." name="search" required>
                              </div>
                            </form>
                   <!------>
                        <li ><a href="#" class="current"> الصفحة الرئيسية </a></li>
                   <!--     <li><a href="/">حسابي</a></li> -->
                        <li><a href="/Return_contact"> الدعم الفني</a></li>

                        <li class="dropdown">
                            <a href="" class=" dropdown-toggle" type="button"
                            id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true"
                            aria-expanded="false">الفئات</a>

                                   <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">

                                    @foreach ($category as $cate)
                                    <a class="dropdown-item" href="/BG/{{$cate->id}}" >{{$cate->name}}</a>
                                    @endforeach

                                    </div>

                            </li>
                    </div>

                    </ul>
                </nav>
            </header>
            <div class="tm-main-content">
                <section class="tm-margin-b-l">
                    <header>
                        <h1 class="tm-main-title" style="float: right">  نتائج البحث </h1>
                        <br>
                    </header>


                    <div class="tm-gallery">
                        <div class="row"  >

                      <!-- work here -->
                      @foreach ($result as $books)
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

                <section class="media tm-highlight tm-highlight-w-icon">

                    <div class="tm-highlight-icon">
                        <i class="fa tm-fa-6x fa-meetup"></i>
                    </div>


                </section>
            </div>

            <footer>
                Copyright &copy; <span class="tm-current-year">2018</span> Shelf Company

                - Designed by Tooplate
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

