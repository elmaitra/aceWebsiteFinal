<!doctype html>

<!--Assignment Name: CAS 222 Ace Website Final 
File Name: contact.html.php
Date: 06/11/18
Programmer: Ellorashree Maitra
-->

<html lang="en">

<head>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, height=device-height, initial-scale=1">
<!--<base target="_blank"> <!-- this ensures that all links not marked "_self" will open in a new tab -->
    
<title>Ace Website Contact Page</title>
    
<link href="https://fonts.googleapis.com/css?family=Abril+Fatface|Open+Sans" rel="stylesheet">
<link rel="stylesheet" href="../css/reset.css" type="text/css">
<link rel="stylesheet" href="../css/helper.css" type="text/css">
<link rel="stylesheet" href="../css/grid.css" type="text/css">
<link rel="stylesheet" href="../css/navigation.css" type="text/css">
<link rel="stylesheet" href="../css/form.css" type="text/css">
<link rel="stylesheet" href="../css/style.css" type="text/css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"><!--This links to the external font-awesome stylesheet. I used several fa icons in this code for decoration. Cheatsheet here: http://fontawesome.io/cheatsheet/ To improve web accessibility, always use "aria-hidden="true" and provide a descriptive title. Also, you can make additional styling alterations to the fa class in the css file to make the icons consistent in style with the overall look of the page. -->
<script src="https://code.jquery.com/jquery-3.2.0.min.js"></script>
   
</head>

<body>

<nav>
    <?php include '../includes/navigation.inc.html.php';?>
        </nav>
<header>
    <?php include '../includes/header.inc.html.php';?>
</header>
    
<main>
    <section>
        
        <h1>Contact Page</h1>
        <p><span>QUESTIONS?</span></p>
        
        <p>Check out our <a href="../faqs/faqs.html.php">FAQS</a> page. </p>
        <p>Or send us a message in the form below.</p>
    </section>
    
        <h2>We'd love to hear from you!</h2>
    <section>
      <form method="post" action=" ">
        <input type="text" name="honeypot" id="honeypot" value="" alt="if you fill this field out then your email will not be sent"/>
        <label for="myName">Name:</label>
          <input type="text" name="myName" id="myName">
        <label for="myEmail">E-mail:</label>
          <input type="text" name="myEmail" id="myEmail">
        <label for="myParticipanttype">*Participant Type: </label>
          <select size="1" name="myParticipanttype" id="myParticipanttype">
          <option>Select Participation Type</option>
          <option value="athlete">Athlete</option>
          <option value="volunteer">Volunteer</option>
          <option value="interestedParty">Interested Party</option>
        </select>
        <label for="myQuestion">Question:</label>
          <textarea name="myQuestion" id="myQuestion"></textarea>
        <input id="mySubmit" type="submit" value="Submit">
      </form>
</section>



</main>
    
<footer>
    <?php include '../includes/footer.inc.html.php';?>
</footer>

<script src="../js/scripts.js"></script>
      
</body>

</html>