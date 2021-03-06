<?php include('perch/runtime.php');?>
<!doctype html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Forma Fiber Arts - Yarn, Weaving and Knitting Supplies - Whitmore Lake, MI</title>
    
    <link rel="stylesheet" type="text/css" href="css/slick.css"/>
    <link rel="stylesheet" type="text/css" href="css/slick-theme.css"/>
    <link rel="stylesheet" href="css/style.css" />
    
    <script src="js/jquery-1.11.2.min.js"></script>
    <script src="js/modernizr.custom.86647.js"></script>
    <script src="js/forma.js"></script> 
    
    <script src="https://maps.googleapis.com/maps/api/js"></script>
    <script>
      function initialize() {
        var myLatlng = new google.maps.LatLng(42.357973,-83.747713);
        var mapCenter = new google.maps.LatLng(42.357973,-83.747713);
        var mapCanvas = document.getElementById('map_canvas');
        var mapOptions = {
          center: mapCenter,
          zoom: 11,
          scrollwheel: false,
          draggable: true,
          disableDefaultUI: false,
          mapTypeId: google.maps.MapTypeId.ROADMAP
        }

        var map = new google.maps.Map(mapCanvas, mapOptions)

        map.set('styles', [
         {
             featureType: 'landscape',
             elementType: 'geometry',
             stylers: [
               { hue: '#ffff00' },
               { saturation: 30 },
               { lightness: 10}
             ]
           },
        ]);

        var contentString = 
          '<div id="content">'+
          '<div id="siteNotice">'+
          '</div>'+
          '<h1 id="firstHeading" class="firstHeading">Forma</h1>'+
          '<div id="bodyContent">'+
          '<p>111 East Northfield Church Road</p>'+
          '<p>Whitmore Lake, MI</p>'+
          '<p>USA</p>'+
          '</div>'+
          '</div>';

        var infowindow = new google.maps.InfoWindow({
            content: contentString,
            maxWidth: 300
        });

        var marker = new google.maps.Marker({
            position: myLatlng,
            map: map,
            title: 'Forma Fiberarts'
        });
        google.maps.event.addListener(marker, 'click', function() {
          infowindow.open(map,marker);
        });
      }

      google.maps.event.addDomListener(window, 'load', initialize);
    </script>
  </head>
  <body>
  <!--[if lt IE 9]>
    <p class="chromeframe">You are using an <strong>outdated</strong> browser.</p>
    <p>Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="https://www.google.com/chrome/browser/desktop/">download Google Chrome</a> to improve your experience.</p>
    <![endif]-->
  <div id="content">
    <section class="notice" id="site-notice">
      <div class="container">
        <h2>Notice!</h2>
        <p>We will be <strong>CLOSED</strong> for the month of February, the 1st thru the 28th.</p>
        <p><strong>We will re-open March 1st, 2017</strong></p>
        <p>As always, it is always okay to call before making the trek out here - <strong>734-761-1102</strong></p>
      </div>
    </section>
    <section class="welcome" id="welcome">
      <div class="container">
        <header>
          <h1><span>Forma</span></h1>
          <h2>We specialize in yarn and equipment for hand-weaving, knitting, spinning and dyeing.</h2>
        </header>
        <div class="hours">
          <h3>Business Hours:</h3>
          <?php perch_content('Hours'); ?>
        </div>

        <div class="address" itemscope itemtype="http://schema.org/LocalBusiness">
          <h2 itemprop="name" class="visuallyhidden">Forma</h2>
          <p itemprop="paymentAccepted" class="visuallyhidden">We accept cash or check</p>
          <h3>Visit us at:</h3>
            <div itemtype="http://schema.org/GeoCoordinates" itemscope="" itemprop="geo" class="visuallyhidden">
                <meta itemprop="latitude" content="42.357916" />
                <meta itemprop="longitude" content="-83.747747" />
            </div>
          <p itemtype="http://schema.org/PostalAddress" itemscope="" itemprop="address">
            <!-- <span class="icon-map-marker"></span>&nbsp; -->
            <span itemprop="streetAddress">111 Northfield Church Road</span>
            <span itemprop="addressLocality">Whitmore Lake,</span> 
            <span itemprop="addressRegion">MI</span>
            <span itemprop="postalCode">48149-9542</span>
          </p>
          <p>Or call us at: 
          <span itemprop="telephone">734-761-1102</span></p>
          
        </div>
        
        <p class="attn">Sorry, We Do NOT Accept Credit Cards! Cash and Check ONLY</p>

      </div>
    </section>
    <section class="image-slider">
      <div class="container">
        <div class="slick-slider">
          <?php perch_content('Image Slider'); ?>
        </div>
      </div>
    </section>
    <section class="classes-equip">
      <div class="container">
        <div class="classes" id="classes">
          <h2>Classes</h2>
          <p>We regularly host onsite weaving classes taught by the wonderful and talented Sondra Hoffman. Space is limited, so please call us for more information!</p>

          <h3>Class Schedule 2017</h3>
          <?php perch_content('Class Schedule'); ?>
          
          <?php perch_content('Class Info'); ?>
        </div>

        <div class="equip" id="equip">  
          <h2>Equipment</h2>
          <p>FORMA is proud to be a licensed dealer of LeClerc and Schact Looms &amp; Accessories.</p>
          <h3>We have in stock:</h3>
          <ul>
            <li>LeClerc and Schact Looms</li>
            <li>Boat Shuttles</li>
            <li>Ski Shuttles</li>
            <li>Flat Shuttles</li>
            <li>Bobbins</li>
            <li>Pick up Sticks</li>
            <li>Ball Winders</li>
            <li>Warping Boards</li>
            <li>Warping Mills/Reels</li>
            <li>Spolmaskin - Swedish Bobbin Winders &amp; Umbrella Swifts</li>
          </ul>
        </div>

      </div>
    </section>
    <section class="yarn" id="yarn">
      <div class="container">

        <h2>Yarn</h2>
        <p>We are stocked with a wide variety of yarn in a FULL RANGE OF COLORS for both weavers and knitters</p>
        
        <div class="left-col">

          <div class="expander">
            <a href="javascript:void(0)" id="js-expander-trigger" class="expander-trigger expander-hidden">New Item: Merino Wool!</a>
            <div id="js-expander-content" class="expander-content">
              <ul>
                <li>Hand space dyed skeins by Tracey Schuh</li>
                <li>1100 Yards per approx 8 ounce skein 100% Superwash Merino Wool</li>
              </ul>
            </div>
          </div>

          <div class="expander">
            <a href="javascript:void(0)" id="js-expander-trigger" class="expander-trigger expander-hidden">Brown Sheep Wool &amp; Mohair</a>
            <div id="js-expander-content" class="expander-content">
              <ul>
                <li>Full Line of Colors!</li>
                <li>Lamb's Pride</li>
                <li>Burly Spun</li>
              </ul>
            </div>
          </div>

          <div class="expander">
            <a href="javascript:void(0)" id="js-expander-trigger" class="expander-trigger expander-hidden">UKI Mercerized Cotton</a>
            <div id="js-expander-content" class="expander-content">
              <ul>
                <li>FULL LINE OF COLORS IN ALL WEIGHTS</li>
                <li>3/2 5/2 10/2 20/2</li>
              </ul>
            </div>
          </div>

          <div class="expander">
            <a href="javascript:void(0)" id="js-expander-trigger" class="expander-trigger expander-hidden">Super-10 Mercerized Cotton</a>
            <div id="js-expander-content" class="expander-content">
              <ul>
                <li>FULL LINE OF COLORS</li>
              </ul>
            </div>
          </div>

          <div class="expander">
            <a href="javascript:void(0)" id="js-expander-trigger" class="expander-trigger expander-hidden">Cotton</a>
            <div id="js-expander-content" class="expander-content">
              <ul>
                <li>20/6 Tencel in hand space-dyed skeins and natural cones</li>
                <li>Carded Cotton 4/2 5/2 6/2 8/2 10/2</li>
                <li>Cotton Flake- Assorted weights</li>
                <li>20/6 Bamboo-Cotton Natural Cones</li>
              </ul>
            </div>
          </div>

          <div class="expander">
            <a href="javascript:void(0)" id="js-expander-trigger" class="expander-trigger expander-hidden">Linen Rug Warp 7/5 &amp; 7/10</a>
            <div id="js-expander-content" class="expander-content">
              
            </div>
          </div>

        </div>
        <div class="right-col">
          
          <div class="expander">
            <a href="javascript:void(0)" id="js-expander-trigger" class="expander-trigger expander-hidden">Bamboo</a>
            <div id="js-expander-content" class="expander-content">
              <ul>
                <li>New Shipments!</li>
              </ul>
            </div>
          </div>

          <div class="expander">
            <a href="javascript:void(0)" id="js-expander-trigger" class="expander-trigger expander-hidden">Rayon</a>
            <div id="js-expander-content" class="expander-content">
              <ul>
                <li>Full line of Colors in Multiple Weights, 6/2 8/2 10/2</li>
                <li>Rayon Boucle "Rick Rack" solid color cones and hand space-dyed skeins</li>
                <li>8/2 Ring spun rayon in a multitude of colors</li>
                <li>20/6 Bamboo-Rayon Natural Cones</li>
              </ul>
            </div>
          </div>

          <div class="expander">
            <a href="javascript:void(0)" id="js-expander-trigger" class="expander-trigger expander-hidden">Rayon Chenile</a>
            <div id="js-expander-content" class="expander-content">
              <ul>
                <li>Solid Colors &amp; Space Dyed</li>
                <li>Special Prices on Space Dyed Rayon Chenile By the Cone!</li>
              </ul>
            </div>
          </div>

          <div class="expander">
            <a href="javascript:void(0)" id="js-expander-trigger" class="expander-trigger expander-hidden">Blends</a>
            <div id="js-expander-content" class="expander-content">
              <ul>
                <li>Cravenella Type- Wool &amp; Rayon or Wool &amp; Nylon</li>
                <li>3-ply Wool &amp; Silk</li>
                <li>Rayon/Cotton/Flax</li>
                <li>Rayon/Cotton/Linen</li>
                <li>Cotton/Linen</li>
              </ul>
            </div>
          </div>

          <div class="expander">
            <a href="javascript:void(0)" id="js-expander-trigger" class="expander-trigger expander-hidden">Mohair Loop</a>
            <div id="js-expander-content" class="expander-content">
              <ul>
                <li>Loop Yarn- Multiple Weights &amp; Colors</li>
                <li>72% Mohair/13% Wool/13% Nylon</li>
              </ul>
            </div>
          </div>

        </div>


      </div>
    </section>
    <div id="map_canvas"></div>
    <section class="visit">
      <div class="container">
        <div class="directions">
          <h2>Visit Us!</h2>
          <p>We'll admit it, we are sort of out of the way...</p>
          <div class="left-col">
            <p>But we're really not that hard to find!</p>
            <ul>
              <li>Get off US-23 North or South at exit 49</li>
              <li>Take Whitmore Lake Rd south to Joy Road</li>
              <li>Follow Joy back over US-23 and then turn immediately left onto East Northfield Church Road.</li>
              <li>Take Northfield Church until it makes a sharp right turn. At the bend of this turn is our driveway, marked out by an old stone gate.</li>
            </ul>
          </div>
          <div class="right-col">
            <h3>IMPORTANT!</h3> 
            <p>Joy Rd is unpaved; so it is always best to come by way of Whitmore Lake Road.</p>
          </div>
        </div>
      
      </div>
    </section>
    <section class="social" id="social">
      <div class="container">
        <h2>Keep in touch!</h2>
        <div class="address" itemscope itemtype="http://schema.org/LocalBusiness">
          <h2 itemprop="name" class="visuallyhidden">Forma</h2>
          <p itemprop="paymentAccepted" class="visuallyhidden">We accept cash or check</p>
          <div itemtype="http://schema.org/GeoCoordinates" itemscope="" itemprop="geo" class="visuallyhidden">
              <meta itemprop="latitude" content="42.357916" />
              <meta itemprop="longitude" content="-83.747747" />
          </div>
          <h3>Write to us at:</h3>
          <p itemtype="http://schema.org/PostalAddress" itemscope="" itemprop="address">
            <span itemprop="streetAddress">111 Northfield Church Road</span>
            <span itemprop="addressLocality">Whitmore Lake,</span> 
            <span itemprop="addressRegion">MI</span>
            <span itemprop="postalCode">48149-9542</span>
          </p>
          <p>Or call us at: 
          <span itemprop="telephone">734-761-1102</span></p>
        </div>

        <div class="review">
          <h3>Spread the word:</h3>
          <p>Longtime Customer and Fan of FORMA?<br />
          Share your Love by writing us a review on...<br />
          <a href="http://local.yahoo.com/info-16203974-forma-whitmore-lake;_ylt=AlX3d483hdpc2IfayJ7Ez62HNcIF;_ylv=3?csz=Whitmore+Lake,+MI+48189">Yahoo!</a> or <a href="http://maps.google.com/maps/place?um=1&ie=UTF-8&q=forma+michigan&fb=1&gl=us&hq=forma&hnear=Michigan&cid=13779433848303550445&ei=of4tTLznH5bqnQfuqPCDBA&sa=X&oi=local_result&ct=result&resnum=1&ved=0CBMQnQIwAA">Google</a></p>
        </div>

        <div class="mailChimp">
        <h3>Subscribe to our mailing list:</h3>
        <!-- Begin MailChimp Signup Form -->
          <div id="mc_embed_signup">
            <form action="http://forma-fiberarts.us6.list-manage.com/subscribe/post?u=414a431234&amp;id=be589ca51e" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
            
              <div class="mc-field-group">
              <label for="mce-EMAIL" class="visuallyhidden">Email Address </label>
              <input type="email" placeholder="youremail@example.com" name="EMAIL" class="required email" id="mce-EMAIL">
              </div>

              <div class="submit">
                <input type="submit" value="SEND" name="subscribe" id="mc-embedded-subscribe" class="button">
              </div>

              <div id="mce-responses" class="clear">
                <div class="response" id="mce-error-response" style="display:none"></div>
                <div class="response" id="mce-success-response" style="display:none"></div>
              </div>
            </form>
          </div>
        <!--End mc_embed_signup-->
        </div>

      </div>
    </section>
    <footer>
      <div class="container">
        <p>If you have ANY questions... Please call us at: 734-761-1102</p>
      </div>
    </footer>
  </div>
  <script src="js/slick.min.js"></script> 
  <script type="text/javascript">
    $('.slick-slider').slick({
      dots: true,
      infinite: false,
      speed: 300,
      slidesToShow: 3,
      slidesToScroll: 3,
      responsive: [
        {
          breakpoint: 860,
          settings: {
            slidesToShow: 2,
            slidesToScroll: 2,
            infinite: true,
            dots: true
          }
        },
        {
          breakpoint: 640,
          settings: {
            slidesToShow: 2,
            slidesToScroll: 2
          }
        },
        {
          breakpoint: 560,
          settings: {
            slidesToShow: 1,
            slidesToScroll: 1
          }
        }
        // You can unslick at a given breakpoint now by adding:
        // settings: "unslick"
        // instead of a settings object
      ]
    });
  </script>
  <script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
    (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
    m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

    ga('create', 'UA-12829556-5', 'auto');
    ga('send', 'pageview');

  </script>
  </body>
</html>