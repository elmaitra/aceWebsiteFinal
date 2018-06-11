<!doctype html>

<!--Assignment Name: CAS 222 Ace Website Final
File Name: events.html.php
Date: 06/11/18
Programmer: Ellorashree Maitra
-->

<html lang="en">

<head>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, height=device-height, initial-scale=1">
<!-- <base target="_blank"> <!-- this ensures that all links not marked "_self" will open in a new tab -->
    
<title>Ace Website Events Page</title>
    
<link href="https://fonts.googleapis.com/css?family=Abril+Fatface|Open+Sans" rel="stylesheet">
<link rel="stylesheet" href="../css/reset.css" type="text/css">
<link rel="stylesheet" href="../css/helper.css" type="text/css">
<!--<link rel="stylesheet" href="css/grid.css" type="text/css">-->
<link rel="stylesheet" href="../css/navigation.css" type="text/css">
<link rel="stylesheet" href="../css/table.css" type="text/css">
<link rel="stylesheet" href="../css/style.css" type="text/css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"><!--This links to the external font-awesome stylesheet. I used several fa icons in this code for decoration. Cheatsheet here: http://fontawesome.io/cheatsheet/ To improve web accessibility, always use "aria-hidden="true" and provide a descriptive title. Also, you can make additional styling alterations to the fa class in the css file to make the icons consistent in style with the overall look of the page. -->
<script src="https://code.jquery.com/jquery-3.2.0.min.js"></script>
   
</head>

<body>

<nav>
    <?php include '../includes/navigation.inc.html.php';?>
        </nav>
<header>
    <div class="hero-text">
    <h2>Ace in the Hole Multisport Events</h2><br>
    <h2>Annual Weekend Event</h2>
    <h3>June 23 &amp; 24, 2018</h3>
    <h4>Portland, Oregon</h4>
    </div>
</header>
    
<main>
    <div id="main-content">
    
<section class="gallery" style="cursor: pointer;">
    
    <h2>Browse our Photo Gallery</h2>
    <img src="../images/slideshow/ironman_thumb.jpg" id="thumb_ironman" alt="Ironman Thumbnail Image">
    <img src="../images/slideshow/kidsRace_thumb.jpg" id="thumb_kidsRace" alt="Kids Race Thumbnail Image">
    <img src="../images/slideshow/marathonBikers_thumb.jpg" id="thumb_marathonBikers" alt="Marathon Bikers Thumbnail Image"> 
    <img src="../images/slideshow/runner_thumb.jpg" id="thumb_runner" alt="Runner Thumbnail Image">
    <img src="../images/slideshow/seniorBikers_thumb.jpg" id="thumb_seniorBikers" alt="Senior Bikers Thumbnail Image">
    <img src="../images/slideshow/triathlonSwim_thumb.jpg" id="thumb_triathlonSwim" alt="Triathlon Swim Thumbnail Image">
</section><br><br>
<section>
    <h1>Weekend Events At A Glance</h1>
<table>
        <tr>
          <th id="eventname">Event Name</th>
          <th id="eventdate">Event Date</th>
          <th id="starttime">Start Time</th>
          <th id="cost">Cost</th>
        </tr>
        
                
        <tr>
                
          <td headers="eventname">Long Course</td>
          <td headers="eventdate">Sat., June 23, 2018</td>
          <td headers="starttime">7:00AM</td>
          <td headers="cost">$240</td>

                  
          </tr>
             
        <tr>
                
          <td headers="eventname">Olympic</td>
          <td headers="eventdate">Sat., June 23, 2018</td>
          <td headers="starttime">7:30AM</td>
          <td headers="cost">$110</td>
                  
          </tr>
             
        <tr>
                
          <td headers="eventname">10K</td>
          <td headers="eventdate">Sat., June 23, 2018</td>
          <td headers="starttime">7:15AM</td>
          <td headers="cost">$50</td>
          
                  
          </tr>
    
    <tr>
                
          <td headers="eventname">Half Marathon</td>
          <td headers="eventdate">Sat., June 23, 2018</td>
          <td headers="starttime">7:15AM</td>
          <td headers="cost">$75</td>
          
                  
          </tr>
    
    <tr>
                
          <td headers="eventname">Sprint</td>
          <td headers="eventdate">Sun., June 24, 2018</td>
          <td headers="starttime">8:00Am</td>
          <td headers="cost">$90</td>
          
                  
          </tr>
    
    <tr>
                
          <td headers="eventname">Try-A-Tri</td>
          <td headers="eventdate">Sun., June 24, 2018</td>
          <td headers="starttime">8:20AM</td>
          <td headers="cost">$65</td>
          
                  
          </tr>
    
    <tr>
                
          <td headers="eventname">Splash-n-Dash</td>
          <td headers="eventdate">Sun., June 24, 2018</td>
          <td headers="starttime">12:00PM</td>
          <td headers="cost">$25*</td>
          
                  
          </tr>
          
          
      </table>
        
    <p><span>*NOTE: Splash-n-Dash event is free for kids (aged 6-12) with one paid event registration per child.</span></p>
    
</section>
        
    <h2>Registration Cost Includes:</h2>
        <ul>
        <li>Food and Beer;</li>
        <li>Access to the Weekend's live entertainment and Fitness Expo;</li>
        <li>Commemorative Finisher Medal;</li>
        <li>Accurate Chip Timing for competitive races;</li>
        <li>Ace in the Hole Multisport Weekend Tech Shirt;*</li>
        <li>Post-event party and entertainment</li>
        </ul>
      <p><span>*FREE TECH SHIRT ELIGIBILITY: Tech shirts guaranteed to pre-registered participants only.</span></p>
     
<h2>Event and Course Details</h2>
<p><span>NOTE: WATER TEMPERATURE is expected to be between 62 and 66 degrees. The temperature will be taken on Friday and the morning of the race. Wetsuits are recommended.</span></p>
  <dl>
    
   <dt>Long Course/Half-Iron Triathlon:</dt> 
    <dd>Also known as a Half-Iron, the <span>Long Course Triathlon</span> will take place on Saturday, June 23, starting at 7:00AM.</dd>
    <dd>Long Course SWIM (1.2mi) - Participants will make two counter-clockwise loops. Large buoys will mark the turn points. Kayakers will be positioned on the water to support the swimmers. Medical support will be present on the beach.</dd>
    <dd>Long Course BIKE (58 mi): A scenic point-to-point course that travels over gently rolling hills prior to three hard climbs. The bike course will be marked with large directional signage and there will be course marshals at key intersections to help direct you. </dd>
    <dd>Long Course RUN (13.1mi) - A mostly flat loop course on widely paved bike paths that traverse through and around this beautiful and scenic destination resort (two hills total with a minimal elevation gain).</dd>
    <dd><span> Cost:</span> $240.</dd>
    <a href="../registration/registration.html.php" class="button">Register</a>
    
    <dt>Olympic Triathlon:</dt>
      <dd>The <span>Olympic Triathlon</span> will take place on Saturday, June 23, starting at 7:30AM.</dd>
      <dd>OLYMPIC SWIM (1,500 meters) - Participants will make two counter-clockwise loops. Large buoys will mark the turn points. Kayakers will be positioned on the water to support the swimmers. Medical support will be present on the beach.</dd>
      <dd>OLYMPIC BIKE (28mi) - A scenic point-to-point course that travels over gently rolling hills. The bike course will be marked with large directional signage and course marshals will be present at key intersections.</dd>
      <dd>OLYMPIC RUN (10K) - A mostly flat loop course on widely paved bike paths that traverse through and around this beautiful and scenic destination resort (one hill total with a minimal elevation gain).</dd>
      <dd><span> Cost:</span> $110. </dd>
    <a href="../registration/registration.html.php" class="button">Register</a>
      
    <dt>10K Run:</dt>
      <dd>The <span>10K</span> event will take place on Saturday, June 23, starting at 7:30AM. It starts and finishes in the Athletes Village. The paths are approximately 6 ft wide, perfectly paved and wind around through the forest. Each course has only two small hills with a minimal elevation gain to navigate and a fast downhill to flat finish to the roaring cheers of the crowd.</dd>
      <dd><span> Cost:</span> $50. </dd>
    <a href="../registration/registration.html.php" class="button">Register</a>
      
      <dt>Half-Marathon Run:</dt>
      <dd>The <span>Half-Marathon Run</span> event will take place on Saturday, June 23, starting at 7:15AM. The event starts and finishes in the Athletes Village to the cheers of the enthusiastic crowd. Once finished, runners can enjoy the finish line festivities, including the Sports and Fitness Expo and live entertainment. Post-race refreshments will be provided and the Awards Ceremony for the Half-Marathon will begin once the results have been certified.</dd>
      <dd><span> Cost:</span> $75. </dd>
   <a href="../registration/registration.html.php" class="button">Register</a>
          
      
      <dt>Sprint Triathlon:</dt>
      <dd>The <span>Sprint Triathlon</span> event will take place on Sunday, June 24, starting at 8:00AM. Course will offer a 1-loop 1/2 mile swim, the exact same 28 mile Bike Course as the Olympic distance and a 5km run.</dd>
      <dd><span> Cost:</span> $90. </dd>
      <a href="../registration/registration.html.php" class="button">Register</a>
      
      <dt>Try-a-Tri:</dt>
      <dd>The <span>Try-a-Tri</span> event will take place on Sunday, June 24, starting at 8:20AM. This novice race is designed for the first time triathlete, those new to the sport, our Junior Triathletes. The swim is a shorter, more manageable 1/4 mile distance, (instead of the standard 1/2-mile Sprint distance swim), 10 mile bike ride (vs 12 miles and it's a 2 loop course making it very spectator friendly!) and a flat 2 mile run (vs 3 mile sprint course).</dd>
      <dd><span> Cost:</span> $65. </dd>
      <a href="../registration/registration.html.php" class="button">Register</a>
      
      <dt>Splash-n-Dash:</dt>
      <dd>Starting at 12:00 PM on Sunday, June 24, the <span>Splash-n-Dash Duathlon</span> is specially designed for kids between 6 and 12. It features a 100 yard swim and a 50 meter run.<span> Cost:</span> $25 or FREE with 1 adult event registration per child.</dd>
      <a href="../registration/registration.html.php" class="button">Register</a>
 </dl>

</div>
      
 <div id="sidebar-right">
     
<section>
    <h1>Weather Forecast</h1>
     <a class="weatherwidget-io" href="https://forecast7.com/en/45d52n122d68/portland/?unit=us" data-label_1="PORTLAND" data-label_2="WEATHER" data-font="Open Sans" data-theme="gray" >PORTLAND WEATHER</a>
<script>
!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src='https://weatherwidget.io/js/widget.min.js';fjs.parentNode.insertBefore(js,fjs);}}(document,'script','weatherwidget-io-js');
</script>
     
</section>
     
     <section class="facebook-feed"> 
         <h1>Check us out on Facebook</h1>
     
 <center><iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2Fcas222cascade&tabs=timeline&width=300&height=500&small_header=true&adapt_container_width=true&hide_cover=true&show_facepile=true&appId" width="300" height="500" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true" allow="encrypted-media"></iframe></center>
</section>
     
     <section class="twitter-feed">
      <h1>Check us out on Twitter</h1>
    <center><a class="twitter-timeline" data-width="320" data-height="500" href="https://twitter.com/pcccas222?ref_src=twsrc%5Etfw">Tweets by pcccas222</a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script></center>
    </section>
     
 </div>  
   
</main>
    
 
    
<footer>
    <?php include '../includes/footer.inc.html.php';?>
</footer>
    


<script src="../js/scripts.js"></script>
 <script src="../js/gallery.js"></script>     
      
</body>

</html>