<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Ace in the Hole Multisport Events Registration Confirmation Page</title>
        <meta name="description" content="Register to participate as athlete or volunteer in our Annual Multisport Weekend.">
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://fonts.googleapis.com/css?family=Abril+Fatface|Open+Sans" rel="stylesheet">
<link rel="stylesheet" href="../css/reset.css" type="text/css">
<link rel="stylesheet" href="../css/helper.css" type="text/css">
<link rel="stylesheet" href="../css/grid.css" type="text/css">
<link rel="stylesheet" href="../css/navigation.css" type="text/css">
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
                <h1>Thank you for registering!</h1>
                <p>Our records show you submitted the following information:<br>
                  Sat., June 23 Event: <?php echo htmlspecialchars($satevent, ENT_QUOTES, 'UTF-8');?><br>
                  Sun., June 24 Event: <?php echo htmlspecialchars($sunevent, ENT_QUOTES, 'UTF-8');?><br>
                  Full Name: <?php echo htmlspecialchars($name, ENT_QUOTES, 'UTF-8');?><br>
                  Email Address: <?php echo htmlspecialchars($email, ENT_QUOTES, 'UTF-8');?><br>
                  Phone Number: <?php echo htmlspecialchars($phone, ENT_QUOTES, 'UTF-8');?><br>
                  Participation Type: <?php echo htmlspecialchars($participanttype, ENT_QUOTES, 'UTF-8');?><br>
                  Emergency Contact Name: <?php echo htmlspecialchars($contactname, ENT_QUOTES, 'UTF-8');?><br>
                  Emergency Contact Phone: <?php echo htmlspecialchars($contactphone, ENT_QUOTES, 'UTF-8');?><br>
                  Gender: <?php echo htmlspecialchars($gender, ENT_QUOTES, 'UTF-8');?><br>
                  T-shirt Size: <?php echo htmlspecialchars($tshirtsize, ENT_QUOTES, 'UTF-8');?><br>
                </p>
                
             <p>We look forward to your participation in our Annual Weekend Multisport Event. Please read the guidelines below for payment and packet pickup, and what to bring on the day of your chosen event. We recommend that you print or save this page for your records.</p>
                
    <h2>PACKET PICK UP:</h2>

<p>All packet pick up will occur at <span>Why Worry Racing, 123 NW Everett, Portland OR.</span> Packet pick up hours: <span>Thursday 8-5, Friday 9-noon</span>. No day of event packet pick up. 
 </p>
                
<h2>PAYMENT and ID:</h2>

<p>Payment will be accepted at packet pickup. We accept cash, VISA, MasterCard, and American Express. No checks, please. Please remember to bring a picture identification with you.</p>
                
<h2>WHAT TO BRING:</h2>

<ul>
    <li><span>WEATHER</span>: Watch the weather closely.  The show goes on no matter what the weather is doing.</li>
    <li><span>CHIP TIMING PIECE</span>: You must wear your chip timing piece during the entire event.  You will be given a band that will hold your chip timing piece around your ankle throughout the entire event. Be sure that it is snapped tightly. Be sure to have your Chip Timing piece on before you start the race and be sure to step over the timing mats after each segment of the race. If you are wearing a wet-suit, make sure the timing piece goes under your wetsuit otherwise, you will have a very difficult time getting off your wet suit.</li>
    <li><span>SWIM</span>:  Water temperature is expected to be between 62 and 66 degrees. The temperature will be taken on Friday and the morning of the race. Wetsuits are recommended as they will provide buoyancy and warmth. But they are optional. Many people opt for no wetsuit for a triathlon so no worries if you don’t have one.  We will provide you with a swim cap but you will want to bring your own goggles.</li>
    <li><span>BIKE</span>:  A biking helmet is mandatory.  You will also receive 2 stickers in your package with your race number on them.  The small sticker should go on the front of your helmet.  The bigger sticker will wrap around your bike frame.  Road or mountain bikes are acceptable.  For safety reasons, be sure to have end-caps on the end of your handle-bars.</li>
    <li><span>RUN</span>:  You must finish the race with your bib number on the front of you.  Some people choose to pin it on at the beginning of the race and have it on for the whole event so they donít have to worry about it.  Others pin it on a singlet that they put on once they finish the swim before they head out for the bike.  Others use an elastic racing strap that they pin their bib number to and then quickly strap it on before they leave for the run.  Use whatever option feels best for you.</li>
    <li><span>CHANGE OF CLOTHING</span>: Remember to bring a change of clothing so you can enjoy the post-event festivities. </li>
                
</ul>
                
            
</main>
    
<footer>
    <?php include '../includes/footer.inc.html.php';?>
</footer>

<script src="../js/scripts.js"></script>
      
</body>

</html>


  <!--  $satevent = $_POST['satevent'];
    $sunevent = $_POST['sunevent'];
    $name = $_POST['myfname'];
    $email = $_POST['myemail'];
    $phone = $_POST['myphone'];
    $participanttype = $_POST['myparticipationtype'];
    $contactname = $_POST['mycontactname'];
    $contactphone = $_POST['mycontactphone'];
    $gender = $_POST['gender'];
    $tshirtsize = $_POST['tshirtsize'];