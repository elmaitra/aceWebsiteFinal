<!doctype html>

<!--Assignment Name: CAS 222 Ace Website Registration
File Name: registration.html.php
Date: 06/11/18
Programmer: Ellorashree Maitra
-->

<html lang="en">

<head>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, height=device-height, initial-scale=1">
<!--<base target="_blank"> <!-- this ensures that all links not marked "_self" will open in a new tab -->
    
<title>Ace Website Registration Page</title>
    
<link href="https://fonts.googleapis.com/css?family=Abril+Fatface|Open+Sans" rel="stylesheet">
<link rel="stylesheet" href="../css/reset.css" type="text/css">
<link rel="stylesheet" href="../css/helper.css" type="text/css">
<link rel="stylesheet" href="../css/grid.css" type="text/css">
<link rel="stylesheet" href="../css/navigation.css" type="text/css">
<link rel="stylesheet" href="../css/table.css" type="text/css">
<link rel="stylesheet" href="../css/form.css" type="text/css"> 
<link rel="stylesheet" href="../css/style.css" type="text/css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"><!--This links to the external font-awesome stylesheet. I used several fa icons in this code for decoration. Cheatsheet here: http://fontawesome.io/cheatsheet/ To improve web accessibility, always use "aria-hidden="true" and provide a descriptive title. Also, you can make additional styling alterations to the fa class in the css file to make the icons consistent in style with the overall look of the page. -->
<script src="https://code.jquery.com/jquery-3.2.0.min.js"></script>
<!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->   
</head>

<body>


<nav>
    <?php include '../includes/navigation.inc.html.php';?>
        </nav>
<header>
    <?php include '../includes/header.inc.html.php';?>
</header>
    
<main>
    <div id="main-content"> 
        
        <h1>Registration Page</h1>

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
        
    
      <p><span>*FREE TECH SHIRT ELIGIBILITY: Tech shirts guaranteed to pre-registered participants only.</span></p>
      <p><span>PACKET PICK UP: All packet pick up will occur at Why Worry Racing, 123 NW Everett, Portland OR. Packet pick up hours: Thursday 8-5, Friday 9-noon. No day of event packet pick up. </span></p>
      <p><span>QUESTIONS?--Check our our <a href="../faqs/faqs.html.php">FAQS</a> page.</span></p>
        
<h2>Registration Form</h2>

<div id="source">Required fields are marked with an asterisk (*).</div>
      <section id="registration">
      <form method="post" action=" ">
        <input type="text" name="honeypot" id="honeypot" value="" alt="if you fill this field out then your email will not be sent"/>
        <label for="satevent">*Sat., June 23:</label>
        <select size="1" name="satevent" id="satevent">
          <option>Choose Your Event</option>
          <option value="None">None</option>
          <option value="Long Course Triathlon - 7:00AM">Long Course Triathlon - 7:00AM</option>
          <option value="Olympic Triathlon - 7:30AM">Olympic Triathlon - 7:30AM</option>
          <option value="10K - 7:15AM">10K - 7:15AM</option>
          <option value="Half Marathon - 7:15AM">Half Marathon - 7:15AM</option>
          </select>
          
          <label for="sunevent">*Sun., June 24:</label>
          <select size="1" name="sunevent" id="sunevent">
            <option>Choose your Event</option>
            <option value="None">None</option>
            <option value="Sprint Triathlon - 8:00AM">Sprint - 8:00AM</option>
            <option value="Try-A-Tri - 8:20AM">Try-a-Tri - 8:20AM</option>
            <option value="Splash n Dash - 12:00PM">Splash n Dash - 12:00PM</option> 
        </select>
          
        <label for="myfname">*Full Name:</label>
          <input type="text" name="myfname" id="myfname" required>
        <label for="myemail">*Email Address:</label>
          <input type="email" name="myemail" id="myemail" required>
        <label for="myphone">Phone Number:</label>
          <input type="tel" name="myphone" id="myphone">
        <label for="myparticipationtype">*Participant Type: </label>
          <select size="1" name="myparticipationtype" id="myparticipationtype">
          <option>Select Participation Type</option>
          <option value="Athlete">Athlete</option>
          <option value="Volunteer">Volunteer</option>
        </select>
        <label for="mycontactname">*Emergency Contact Name: </label>
          <input type="text" name="mycontactname" id="mycontactname" required>
        <label for="mycontactphone">*Emergency Contact Phone: </label>
          <input type="tel" name="mycontactphone" id="mycontactphone" required>
        <label for="gender">*Gender:</label>
          <select size="1" name="gender" id="gender">
          <option>Select Your Gender</option>
            <option value="Female">Female</option>
            <option value="Male">Male</option>
            <option value="Non-Binary">Non-Binary</option>
          </select>
        <label for="tshirtsize">*T-shirt Size:</label>
          <select size="1" name="tshirtsize" id="tshirtsize">
          <option>Your T-shirt Size</option>
            <option value="XS - Extra-Small">XS - Extra-Small</option>
            <option value="S - Small">S - Small</option>
            <option value="M - Medium">M - Medium</option>
            <option value="L - Large">L - Large</option>
            <option value="XL - Extra-Large">XL - Extra-Large</option>
            <option value="XXL - XX-Large">XXL - XX-Large</option>
            <option value="XXXL - XXX-Large">XXXL - XXX-Large</option>
          </select> 
          
          <input id="mysubmit" type="submit" value="Submit">
      </form>
      </section>
        
        <h2>Registration Cost Includes:</h2>
        <ul>
        <li>Food and Beer;</li>
        <li>Access to the Weekend's live entertainment and Fitness Expo;</li>
        <li>Commemorative Finisher Medal;</li>
        <li>Accurate Chip Timing for competitive races;</li>
        <li>Ace in the Hole Multisport Weekend Tech Shirt;</li>
        <li>Post-event party and entertainment</li>
        </ul>
        
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
      
</body>

</html>