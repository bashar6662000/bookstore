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
    <title>SHELF - Your Online Bookstore</title>

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400">
    <link href= {{URL::asset('font-awesome-4.7.0/css/font-awesome.min.css') }} rel="stylesheet" type="text/css" >
    <link href="{{ URL::asset('css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" >
    <link href= "{{URL::asset('css/tooplate-style.css')}}" rel="stylesheet" type="text/css" >
</head>

    <body>

        <div class="container">
            <div class="tm-main-content">
                <section class="row tm-margin-b-l">
                    <div class="col-12">
                    </div>
                    <div class=" col-sm-12 mb-md-0 mb-5 tm-overflow-auto">
                        <div class="mr-lg-5">
                            <h2 class="tm-blue-text tm-margin-p">Your total is:80$</h2>
                            <h4 class="tm-blue-text tm-margin-b-p">Your cart</h4>
                            <table class="table ">
                                <thead class="thead-dark">
                                  <tr>
                                    <th scope="col">book title</th>
                                    <th scope="col">price</th>
                                    <th scope="col">count</th>
                                  </tr>
                                </thead>
                                <tbody>
                                    @foreach ($order as $item)
                                   <tr>
                                    <td>

                                  {{Return_book_by_id($item)}}
                                  </td>
                                  <td>
                                  {{Return_book_by_price($item)}}
                                  </td>
                                  <td>
                                    1
                                  </td>
                                  </tr>

                                  @endforeach
                                </tbody>
                              </table>
                              <div class="form-group">
                                <button type="submit" class="tm-btn tm-btn-blue ">pay</button>
                            </div>


                    </div>
                </section>

           <!--     <section class="row tm-margin-b-l">
                    <div class="col-12">
                        <header>
                            <h4 class="tm-blue-text tm-margin-b">Our Location</h4>
                        </header>
                        <div id="google-map"></div>
                    </div>
                </section>

                <section class="media tm-highlight tm-highlight-w-icon">

                    <div class="tm-highlight-icon">
                        <i class="fa tm-fa-6x fa-meetup"></i>
                    </div>  -->




        </div>

        <!-- load JS files -->
        <script src="js/jquery-1.11.3.min.js"></script>         <!-- jQuery (https://jquery.com/download/) -->
        <script src="js/popper.min.js"></script>                <!-- Popper (https://popper.js.org/) -->
        <script src="js/bootstrap.min.js"></script>             <!-- Bootstrap (https://getbootstrap.com/) -->
        <script>

            /* Google map
            ------------------------------------------------
            var map = '';
            var center;

            function initialize() {
                var mapOptions = {
                    zoom: 16,
                    center: new google.maps.LatLng(37.769725, -122.462154),
                    scrollwheel: false
                };

                map = new google.maps.Map(document.getElementById('google-map'),  mapOptions);

                google.maps.event.addDomListener(map, 'idle', function() {
                  calculateCenter();
                });

                google.maps.event.addDomListener(window, 'resize', function() {
                  map.setCenter(center);
                });
            }

            function calculateCenter() {
                center = map.getCenter();
            }

            function loadGoogleMap(){
                var script = document.createElement('script');
                script.type = 'text/javascript';
				// use your own API key for Google Maps
                script.src = 'https://maps.googleapis.com/maps/api/js?key=AIzaSyC_iLYB-9nzlBfwB18WEDTCMla3Cr97lsg&v=3.exp&sensor=false&' + 'callback=initialize';
                document.body.appendChild(script);
            }

            $(document).ready(function(){

                // Google Map
                loadGoogleMap();

                // Update the current year in copyright
                $('.tm-current-year').text(new Date().getFullYear());

            });*/

        </script>

</body>
</html>
