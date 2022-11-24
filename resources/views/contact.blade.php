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
                        <h2 class="tm-blue-text tm-margin-b-p">Contact Us</h2>
                    </div>
                    <div class="col-md-6 col-sm-12 mb-md-0 mb-5 tm-overflow-auto">
                        <div class="mr-lg-5">
                            <!-- contact form -->
                            <form action="mailto:bashar66629@gmail.com" method="post" class="tm-contact-form">
                                <div class="form-group">
                                    <input type="text" id="contact_name" name="contact_name" class="form-control" placeholder="Name"  required/>
                                </div>
                                <div class="form-group">
                                    <input type="email" id="contact_email" name="contact_email" class="form-control" placeholder="Email"  required/>
                                </div>
                                <div class="form-group">
                                    <textarea id="contact_message" name="contact_message" class="form-control" rows="8" placeholder="Message" required></textarea>
                                </div>
                                <button type="submit" class="tm-btn tm-btn-blue float-right">Submit</button>
                            </form>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-12">
                        <p class="tm-margin-b-p"><b> تواصلو معنا عبر البريد الالكتروني </b></p>
                        <address>
                            <span class="tm-blue-text">عنوان المراسلة</span><br>
                            1126 Aenean ac mauris at ex,<br>
                            venenatis lobortis id in 11600 <br><br>
                            <div class="tm-blue-text">

                                Email of the devloper: <a class="tm-blue-text" href="mailto:info@company.com">bashar66629@gamil.com</a
                                ><br>
                                Tel: <a class="tm-blue-text" href="tel:+9630996400131">0996400131</a><br>

                            </div>
                        </address>

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
