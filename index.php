<!doctype html>

<!--Assignment Name: CAS 222 Ace Website Final
File Name: index.php
Date: 06/11/18
Programmer: Ellorashree Maitra
-->

<html lang="en">

<head>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, height=device-height, initial-scale=1">
<!-- <base target="_blank"> <!-- this ensures that all links not marked "_self" will open in a new tab -->
    
<title>Ace Website Home Page</title>
    
<link href="https://fonts.googleapis.com/css?family=Abril+Fatface|Open+Sans" rel="stylesheet">
<link rel="stylesheet" href="css/reset.css" type="text/css">
<link rel="stylesheet" href="css/helper.css" type="text/css">
<!--<link rel="stylesheet" href="css/grid.css" type="text/css">-->
<link rel="stylesheet" href="css/navigation.css" type="text/css">
<link rel="stylesheet" href="css/style.css" type="text/css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"><!--This links to the external font-awesome stylesheet. I used several fa icons in this code for decoration. Cheatsheet here: http://fontawesome.io/cheatsheet/ To improve web accessibility, always use "aria-hidden="true" and provide a descriptive title. Also, you can make additional styling alterations to the fa class in the css file to make the icons consistent in style with the overall look of the page. -->
<script src="https://code.jquery.com/jquery-3.2.0.min.js"></script>
   
</head>

<body>


<nav>
    <?php include 'includes/navigation.inc.html.php';?>
        </nav>
<header>
    <?php include 'includes/header.inc.html.php';?>
</header>
    
<main>
    <div id="main-content"> 
        
        <h1>Home Page</h1>
 
<h2>About Us</h2>

<p>Ace in the Hole Multisport Events is an event company based in Portland, OR, specializing in hosting multisport athletic events. We are proud to offer running and triathlon events for athletes of all shapes and sizes, national origins, races, gender identifications, sexual orientations, and cultural backgrounds. We offer Events for Every Body: our events over the past years have attracted participants of all abilities and experience-levels. We warmly welcome those who wouldn't normally consider doing triathlons, so do come join us for an unforgettable experience. We even have a special events for kids(ages 6-12), so bring your little ones along to share the fun.</p>


     
<h2>Annual Ace in the Hole Multisport Weekend</h2>

<p>Each year we are proud to host the Annual Ace in the Hole Multisport Weekend, a legendary event in the Oregon triathlon and running community. Over the past couple of years, it has become the go-to destination race for athletes from all over the nation. Our 2018 weekend event will take place over two days, Saturday, June 23 and Sunday, June 24. </p>
   
<p>In keeping with our company motto, Events for Every Body, we have something for every level of athletic ability. The weekend includes a first timer triathlon, a sprint, Olympic and Half-Iron/Long Course triathlons, and 10K and Half Marathon runs. We also have a duathlon for kids aged 6 and above: Splash-n-Dash. Come to experience your first race, or come to compete to win, but make sure you come to have fun. Want to come cheer for a loved one? Sign up as a volunteer!</p>

 

<h2>Annual Multisport Events Weekend: Events for Every Body</h2>
  <dl>
    
   <dt>Long Course/Half-Iron Triathlon:</dt> 
    <dd>Also known as a Half-Iron, the <span>Long Course Triathlon</span> features a 1.2 mile swim, a 58 mile bike course, and a 13.1 mile run.</dd> 
    <dd><span> Cost:</span> $240.</dd>
    <a href="events/events.html.php" class="button">Learn more</a>
    
    <dt>Olympic Triathlon:</dt>
      <dd>The <span>Olympic Triathlon</span> features a 1500 meter swim, a 28 mile bike course, and a 10K run.<span> Cost:</span> $110. </dd>
    <a href="events/events.html.php" class="button">Learn more</a>
      
    <dt>10K Run:</dt>
      <dd>The <span>10K Run</span> takes place in the Athletes Village, through beautiful paved forest paths.<span> Cost:</span> $50. </dd>
    <a href="events/events.html.php" class="button">Learn more</a>  
      
      <dt>Half-Marathon Run:</dt>
      <dd>The <span>Half-Marathon Run</span> takes place in the Athletes village on a 13.1 mile course.<span> Cost:</span> $75. </dd>
   <a href="events/events.html.php" class="button">Learn more</a>   
          
      
      <dt>Sprint Triathlon:</dt>
      <dd>The <span>Sprint Triathlon</span> features a .5 mile swim, 28 mile bike course, and 3.1 mile run. <span> Cost:</span> $90. </dd>
      <a href="events/events.html.php" class="button">Learn more</a>
      
      <dt>Try-a-Tri:</dt>
      <dd>Designed for new triathletes and Junior Triathletes, the <span>Try-a-Tri</span> features as .25 mile swim, 10 mile bike and 2 mile run.<span> Cost:</span> $65. </dd>
      <a href="events/events.html.php" class="button">Learn more</a>
      
      <dt>Splash-n-Dash:</dt>
      <dd>Specially designed for kids between 6 and 12, the <span>Splash-n-Dash Duathlon</span> features a 100 yard swim and a 50 meter run.<span> Cost:</span> $25 or FREE with 1 adult event registration.</dd>
      <a href="events/events.html.php" class="button">Learn more</a>
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
    <?php include 'includes/footer.inc.html.php';?>
</footer>

<script src="js/scripts.js"></script>
      
</body>

</html>