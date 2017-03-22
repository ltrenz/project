     <?php
// define variables and set to empty values


$nameErr = $emailErr = $phoneErr = $childErr = $adultErr =$DdateErr =$RdateErr = $destErr = $actErr ="";

$name = $email = $phone = $child = $adult = $Ddate = $Rdate = $dest =$act= "";


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    
            if (empty($_POST["name"])) {
               $nameErr = "Name is required";
                 }
    else    {
               $name = test_input($_POST["name"]);
            }
    
        if (empty($_POST["email"])) {
               $emailErr = "Email is required";
            }
    
    else     {
               $email = test_input($_POST["email"]);
               
               // check if e-mail address is well-formed
               if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                  $emailErr = "Invalid email format"; 
               }
            }
    
     if (empty($_POST["phone"])) {
               $phoneErr = "Phone number required";
            }else {
               $phone = test_input($_POST["phone"]);
            }
    
    
     if (empty($_POST["child"])) {
               $childErr = "Number of children required";
            }else {
               $child = test_input($_POST["child"]);
            }
    
     if (empty($_POST["adult"])) {
               $adultErr = "Number of adults required";
            }else {
               $adult = test_input($_POST["adult"]);
            }
    
    
     if (empty($_POST["Ddate"])) {
               $DdateErr = "Departure Date required";
            }else {
               $Ddate = test_input($_POST["Ddate"]);
            }
    
    if (empty($_POST["Rdate"])) {
               $RdateErr = "Return Date required";
            }else {
               $Rdate = test_input($_POST["Rdate"]);
            }
    
    
      if (empty($_POST["dest"])) {
               $destErr = "Select a Destination";
            }else {
               $dest = test_input($_POST["dest"]);
            }
    
      if (empty($_POST["act"])) {
               $actErr = "select one or more activities";
            }else {
               $act = test_input($_POST["act"]);
            }
    
    function test_input($data) {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
         }
      ?>

 <?php
         echo "<h2>Your given values are as :</h2>";
         echo ("<p>Your name is $name</p>");
         echo ("<p> your email address is $email</p>");
         echo ("<p>Your phone number is $phone</p>");
         echo ("<p>number of children traveling is $child </p>");
         echo ("<p>number of adults traveling is $adult</p>");
         echo ("<p>Date of departure is $Ddate</p>");
         echo ("<p>Date of return is $Rdate</p>");
         echo ("<p>The destination you selected is $dest</p>");
         echo ("<p>the activities you have chosen are $act</p>");
    
        
      ?>