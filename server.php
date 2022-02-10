<?php
$servername="localhost";
$username="lynn";
$password="password";

try{
    $conn=new
PDO ("mysql:host=$servername;dbname=demo",$username,$password);
//set the PDO error mode to exception
$conn->setAttribute(pdo::ATTR_ERRMODE,
PDO::ERRMODE_EXCEPTION);
echo"connected successfully";
}
catch(PDOException $e)
{echo"connection failed: . $e->getMessage();
}

if ($user) { // if user exists
    if ($user['regNumber'] === $registrationNumber) {
      array_push($errors, "Registration number already exists");
    }
    if ($user['emailAddress'] === $email) {
      array_push($errors, "Email already exists");
    }
  }
  // Finally, register user if there are no errors in the form
  if (count($errors) == 0) {
    $password = md5($Confirm_password);//encrypt the password before saving in the database

    $query = "INSERT INTO register(firstName,middleName,lastName,regNumber,emailAddress,phoneNumber,confirmPassword) 
              VALUES('$firstname','$middlename','$lastname','$registrationNumber','$email','$phone','$password')";
    mysqli_query($db, $query);

    $_SESSION['firstname'] = $firstName;
    $_SESSION['lastname'] =$lastName;
    $_SESSION['emailaddress'] =$Email;
    $_SESSION['phonenumber'] =$Phone;
    $_SESSION['username']=  $regno;
    $_SESSION['success'] = "Successifully Registered";
    header('location: index.php');
    }
}

  
  










