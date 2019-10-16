<?php include 'header.php';?>
<!DOCTYPE html>

<html>
    <head>
        
        <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
        <script src="https://cdn.datatables.net/1.10.15/js/jquery.dataTables.min.js"></script>
        <script src="https://cdn.datatables.net/1.10.15/js/dataTables.bootstrap.min.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.4/css/bootstrap-datepicker.css" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.4/js/bootstrap-datepicker.js"></script>
    </head>
    <style>
           #order_data{
       display: none;
   }
    </style>
    <body>
        <!-- /Header -->

        <!--Google Map-->
<div class="container">
            <br>
            <div class="row">
                <div class="col-sm-6" >
                    <div id="map" style="width: 100%; height: 400px">
                    </div>
                </div>
                <div class="col-sm-6" >
                    <form>
                        <div class="row">
                            <label>Search</label>
                            <input class="form-control" type="text" id="mapsearch" placeholder="Where Do You Want To Meet?">
                            <div class="col input-daterange">
                                <label>Check In</label>
                                    <input type="text" name="start_date" id="start_date" class="form-control" />
                            </div>
                            <div class="col input-daterange">
                                <label>Check Out</label>
                                    <input type="text" name="end_date" id="end_date" class="form-control" />
                            </div>
                            <div class="col">
                                <label>No. of People</label>
                                <input type="number" name="people" id="people" class="form-control" required="">
                            </div><br>
                            <input type="button" name="search" id="search" value="Search" class="btn btn-warning btn-block " />
                        </div>
                    </form>
                </div>
            </div>
        </div> 
                    
    <script>
        $('#search').click(function()
{   
    $("#order_data").toggle();     
});
    </script>
            </div>
            </div>
                <!--                <div class="form-group row">
                                    <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                                        
                                        <div class="form-group row">
                                            <div class="col">
                                            <label  >Search</label>
                
                                            <input class="form-control" type="text" id="mapsearch" placeholder="Where Do You Want To Meet?">
                                            </div>
                                            </div>
                                        <div class="col-lg-4">
                                        
                                        <div class="form-group row">
                                           
                                            <label for="example-number-input" >Number</label>
                
                                            <input class="form-control" type="number" value="42" id="box">
                                            
                                        </div>
                                    </div>
                                        <div class="col-lg-4">
                                        <div class="form-group row">
                                            
                                            <label for="example-datetime-local-input" >Date and time</label>
                
                                            <input class="form-control" type="datetime-local" value="2011-08-19T13:45:00" id="box">
                                           
                                        </div>
                                        </div>
                                        <div class="col-lg-4">
                                        <div class="form-group row">
                                            <label for="example-date-input" >Date</label>
                
                                            <input class="form-control" type="date" value="2011-08-19" id="box">
                
                                        </div>
                                        </div>
                                        <div class="col-lg-4">
                                        <div class="form-group row">
                                            <label for="example-time-input" >Time</label>
                
                                            <input class="form-control" type="time" value="13:45:00" id="box">
                
                                        </div>
                                        </div>
                                    </div>
                                </div>-->
            </div>
        </div>
        <!--            <script>
                        function myMap() {
                        var myCenter = new google.maps.LatLng(24.946218, 67.005615);
                        var mapCanvas = document.getElementById("map");
                        var mapOptions = {center: myCenter, zoom: 5};
                        var map = new google.maps.Map(mapCanvas, mapOptions);
                        var marker = new google.maps.Marker({position:myCenter});
                        marker.setMap(map);
                        }
                    </script>-->
        <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBtAhDlFsiYajt2kwxhk-ajU4DBU3QeeYM&libraries=places"></script>
        <!--            <script src="https://maps.googleapis.com/maps/api/js?key=
                            AIzaSyBtAhDlFsiYajt2kwxhk-ajU4DBU3QeeYM
                    &callback=myMap&libraries=places"></script>-->

        <script>
                        var map = new google.maps.Map(document.getElementById('map'), {
                            center: {
                                lat: 24.946218,
                                lng: 67.005615
                            },
                            zoom: 7
                        });
                        var marker = new google.maps.Marker({
                            position: {
                                lat: 24.946218,
                                lng: 67.005615
                            },animation: google.maps.Animation.BOUNCE,
                            map: map,
                            draggable: true
                        });
                        var searchBox = new google.maps.places.SearchBox(document.getElementById('mapsearch'));
                        google.maps.event.addListener(searchBox, 'places_changed', function () {
                            var places = searchBox.getPlaces();

                            var bounds = new google.maps.LatLngBounds();
                            var i, place;

                            for (i = 0; place = places[i]; i++) {

                                bounds.extend(place.geometry.location);
                                marker.setPosition(place.geometry.location);
                            }
                            map.fitBounds(bounds);
                            map.setZoom(7);
                        });
        </script>
        
                <table id="order_data" class="table table-bordered table-striped">
     <thead>
      <tr>
       <th>Order ID</th>
       <th>Hotel Name</th>
       <th>Description</th>
       <th>Space</th>
       <th>Availability</th>
      </tr>
     </thead>
    </table>
        
        
        <script type="text/javascript" language="javascript" >
    $(document).ready(function () {

        $('.input-daterange').datepicker({
            todayBtn: 'linked',
            format: "yyyy-mm-dd",
            autoclose: true
        });

        fetch_data('no');

        function fetch_data(is_date_search, start_date = '', end_date = '')
        {
            var dataTable = $('#order_data').DataTable({
                "processing": true,
                "serverSide": true,
                "order": [],
				"bPaginate": false,
				"bLengthChange": false,
				"bFilter": true,
				"bInfo": false,
				"bAutoWidth": false,
                "ajax": {
                    url: "fetch.php",
                    type: "POST",
                    data: {
                        is_date_search: is_date_search, start_date: start_date, end_date: end_date
                    }
                }
            });
        }

        $('#search').click(function () {
            var start_date = $('#start_date').val();
            var end_date = $('#end_date').val();
            if (start_date != '' && end_date != '')
            {
                $('#order_data').DataTable().destroy();
                fetch_data('yes', start_date, end_date);
            } else
            {
                alert("Both Date is Required");
            }
        });

    });
</script>
        <!--------------FOOTER---------------->
        <br>
<footer>
            <div class="container">
                <div class="row text-left">
                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-6" id="footer">
                        <h4>CUSTOMERS</h4>
                        <ul>
                            <li><a href="how-it-works.php" target="_self">How it works</a></li>
                            <li><a href="signup.php" target="_self">Sign Up</a></li>
                            <li><a href="login.php" target="_self">Login</a></li>
                        </ul>
                    </div>
                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-6" id="footer">
                        <h4>PRODUCTS</h4>
                        <ul>
                            <li><a href="meeting_rooms.php" target="_self">Meeting rooms</a></li>
                            <li><a href="/products/conference-rooms" target="_self">Conference rooms</a></li>
                            <li><a href="/products/training-rooms" target="_self">Training rooms</a></li>
                            <li><a href="/products/boardrooms" target="_self">Boardrooms</a></li>
                            <li><a href="/products/event-space" target="_self">Event space</a></li>
                            <li><a href="/products/video-conferencing-studios" target="_self">Video Conferencing</a></li>
                            <li><a href="/court-reporting" target="_self">Court Reporting</a></li>
                            <li><a href="/corporate-solutions" target="_self">Corporate Solutions</a></li>
                        </ul>
                    </div>
                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-6" id="footer">
                        <h4>OUR COMPANY</h4>
                        <ul>
                            <li><a href="about-us.php" target="_self">About Us</a></li>
                            <li><a href="/our-mission" target="_self">Our Mission</a></li>
                            <li><a href="/our-team" target="_self">Our Team</a></li>
                            <li><a href="/privacy-policy" target="_self">Privacy Policy</a></li>
                            <li><a href="/terms-of-service" target="_self">Terms Of Service</a></li>
                            <li><a href="/ContactUs" target="_self">Contact Us</a></li>
                        </ul>
                    </div>
                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-6" id="footer">
                        <h4>CONNECT WITH US</h4>
                        <a href="https://www.linkedin.com/company/meetingrooms-com" target="_blank" title="Connect with us on LinkedIn">
                            <img src="images/linkedin.png" alt="linkedin" class="social-icon">
                        </a>
                        <a href="https://twitter.com/meetingroomscom" target="_blank" title="Follow us on Twitter">
                            <img src="images/twitter.png" alt="twitter" class="social-icon">
                        </a>
                        <a href="https://www.facebook.com/meetingroomsCOM" target="_blank" title="Join our Facebook community">
                            <img src="images/facebook.png" alt="facebook" class="social-icon">
                        </a>
                        <a href="https://instagram.com/meetingrooms" target="_blank" title="Follow us on Instagram">
                            <img src="images/insta-icon.png" alt="instagram" class="social-icon">
                        </a>

                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 text-left text-white" id="footer">
                        <p class="remove-all-margin"><small id="footer">© 2015 Meeting Space Ltd is registered in England and Wales, company number 08577946</small></p>
                    </div>

                </div>
            </div>
        </footer>

    </body>
</html>

<!--
                        <div class="form-group row">
                            <div class="col">
                            <label  >Search</label>

                            <input class="form-control" type="text" id="mapsearch" placeholder="Where Do You Want To Meet?">
                            </div>
                            </div>-->