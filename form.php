<!DOCTYPE html>
<html>
<head>
    <title>Review Your Information</title>
</head>
<body>
    <h1>Review Your Information</h1>
    <?php 
       $first_name = $_POST['first_name'];
       $last_name = $_POST['last_name'];
       $fullName = $first_name . " " . $last_name; 
      $address = $_POST['address']; 
      $skills = $_POST['skills'];
      $department = $_POST['department'];
      //check gender and set Result
      $gender = "male"; 
      $salutation = ($gender == "male") ? "Miss." : "Mr.";
      // Verification of user name 
      $user_name=$_POST["user_name"];
      $problem =[];                  //array because may be have errors 
      if(isset($_POST['user_name']) && !empty($_POST['user_name']))
        {
           $user_name = $_POST['user_name'];
           echo "";
        }
     else
         $errors['user_name'] = "Invalid username, please enter it again";

       // Verification of pssword 
       if(isset($_POST['password']) && !empty($_POST['password']))
        {
           $password = $_POST['password'];
           echo "";
        }
     else
         $errors['password'] = "Invalid password, please enter it again";

    //This code checks for errors 
         if(!empty($errors))
        {
         $errors = json_encode($errors); // conversion data from array to string

        //There is a problem, go back to this page
         header('Location:rej.php?errors='.$errors);
        }
    
    ?>
    <p>Thanks <?php echo $salutation; ?> <?php echo $fullName; ?></p>
    <p>please Review your Information</p>
    <p><strong>Name:</strong> <?php echo $fullName ; ?></p>
    <p><strong>address:</strong> <?php echo $address ; ?></p>
    <p><strong>Department:</strong> <?php echo $department; ?></p>
    <p><strong>Your Skills:</strong></p>
    <?php
   foreach ($skills as $skill) {
    echo $skill . "<br>"; } ?>
</body>
</html>
