<?php

// Edit or Replace this try/catch statement to work with the current site configuration
try
{
  $pdo = new PDO('mysql:host=localhost;dbname=ellorama_ace_db', 'ellorama_ace_user10', 'Y5cd1#gR7v!');
  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $pdo->exec('SET NAMES "utf8"');
}
catch (PDOException $e)
{
  $error = 'Unable to connect to the database server.';
  include '../includes/error.html.php';
  exit();
}
// Modify the If statement so the try only runs if the First Name field has been submitted AND the honeypot field is empty ''
if (isset($_POST['myfname']) and ($_POST['honeypot'] == ''))
  {
    $satevent = $_POST['satevent'];
    $sunevent = $_POST['sunevent'];
    $name = $_POST['myfname'];
    $email = $_POST['myemail'];
    $phone = $_POST['myphone'];
    $participanttype = $_POST['myparticipationtype'];
    $contactname = $_POST['mycontactname'];
    $contactphone = $_POST['mycontactphone'];
    $gender = $_POST['gender'];
    $tshirtsize = $_POST['tshirtsize'];
      
    // If the if statement is true, save each form field value as a variable. These variable values will be used in the thank you page.

    // And run the try/catch to attempt to insert data in the database. Modify the INSERT statement to write all the form filed values (except the honeypot) to the database.
    try {
      $sql = 'INSERT INTO registration SET
          satevent = :satevent,
          sunevent = :sunevent,
          name = :name,
          email = :email,
          phone = :phone,
          participanttype = :participanttype,
          contactname = :contactname,
          contactphone = :contactphone,
          gender = :gender,
          tshirtsize = :tshirtsize';
          
        
      $s = $pdo->prepare($sql);
      $s->bindValue(':satevent', $_POST['satevent']);
      $s->bindValue(':sunevent', $_POST['sunevent']);
      $s->bindValue(':name', $_POST['myfname']);
      $s->bindValue(':email', $_POST['myemail']); 
      $s->bindValue(':phone', $_POST['myphone']);
      $s->bindValue(':participanttype', $_POST['myparticipationtype']);
      $s->bindValue(':contactname', $_POST['mycontactname']);  
      $s->bindValue(':contactphone', $_POST['mycontactphone']);
      $s->bindValue(':gender', $_POST['gender']);
      $s->bindValue(':tshirtsize', $_POST['tshirtsize']);  
      $s->execute();
    }
    catch (PDOException $e)
    {
      $error = 'Error adding submitted information: ' . $e->getMessage();
      include '../includes/error.html.php';
      exit();
    }
      
     include 'success.html.php';
    // load the thank you page after the INSERT runs

    // Add an else to load the initial page if the initial (line 19) of statement is false   
  }

  else {
      include 'registration.html.php';
  }

 //Modify this to include the initial file for this folder
