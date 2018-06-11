<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Ace in the Hole Multisport Contact Confirmation Page</title>
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
                <h1>Thank you!</h1>
                <p>Our records show you submitted the following:<br>
                  Name: <?php echo htmlspecialchars($name, ENT_QUOTES, 'UTF-8');?><br>
                  Email: <?php echo htmlspecialchars($email, ENT_QUOTES, 'UTF-8');?><br>
                  Participant Type: <?php echo htmlspecialchars($participanttype, ENT_QUOTES, 'UTF-8');?><br>
                  Question: <?php echo htmlspecialchars($question, ENT_QUOTES, 'UTF-8');?><br>
                  We will get back to you about your query as soon as we can.<br>
                </p>
            </main>
    
<footer>
    <?php include '../includes/footer.inc.html.php';?>
</footer>

<script src="../js/scripts.js"></script>
      
</body>

</html>

<!--$name = $_POST['myName'];
    $email = $_POST['myEmail'];
    $participanttype = $_POST['myParticipanttype'];
    $question = $_POST['myQuestion']; -->
