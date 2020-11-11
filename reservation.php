<?php

// php code -> 1bestcsharp.blogspot.com
// php insert data to mysql database using PDO

if(isset($_POST['insert']))
{
    try {

        // connect to mysql

        $pdoConnect = new PDO("mysql:host=localhost;dbname=testresort","root","");
    } catch (PDOException $exc) {
        echo $exc->getMessage();
        exit();
    }

    // get values form input text and number
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$email = $_POST['email'];
$phonenumber = $_POST['phonenumber'];
$arrivaldate = $_POST['arrivaldate'];
$departuredate = $_POST['departuredate'];
$chooseadults = $_POST['chooseadults'];
$choosechildren = $_POST['choosechildren'];
$chooseroom = $_POST['chooseroom'];
$comment = $_POST['comment'];
    
    // mysql query to insert data

    $pdoQuery = "INSERT INTO `test`(`firstname`, `lastname`, `email`, `phonenumber`, `arrivaldate`, `departuredate`, `chooseadults`, `choosechildren`,  `chooseroom`,  `comment`,)
     VALUES (:firstname,:lastname,:email,:phonenumber,:arrivaldate,:departuredate,:chooseadults,:choosechildren,:chooseroom,:comment)";
    
    $pdoResult = $pdoConnect->prepare($pdoQuery);
    
    $pdoExec = $pdoResult->execute(array(":firstname"=>$firstname,":lastname"=>$lastname,":email"=>$email,":phonenumber"=>$phonenumber,":arrivaldate"=>$arrivaldate,":departuredate"=>$departuredate,":chooseadults"=>$chooseadults,":choosechildren"=>$choosechildren,":chooseroom"=>$chooseroom,":comment"=>$comment));
    
        // check if mysql insert query successful
    if($pdoExec)
    {
        echo 'Data Inserted';
    }else{
        echo 'Data Not Inserted';
    }
}


?>

$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$email = $_POST['email'];
$phonenumber = $_POST['phonenumber'];
$arrivaldate = $_POST['arrivaldate'];
$departuredate = $_POST['departuredate'];
$chooseadults = $_POST['chooseadults'];
$choosechildren = $_POST['choosechildren'];
$chooseroom = $_POST['chooseroom'];
$comment = $_POST['comment'];

//Database Connection
$conn = new mysqli('localhost', 'root','','testreservation');
if($conn->connect_error){
    die('Connection Failed  :  '.$conn->connect_error);
}else{
    $sql = "INSERT INTO bookrooms (firstname, lastname, email,  
    phonenumber, arrivaldate, departuredate, chooseadults, choosechildren, chooseroom, comment)
    values(?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

  $stmt = $conn->prepare("insert into testbookings(firstname, lastname,
     email, number, arrivaldate, departuredate, chooseadults, choosechildren, chooseroom, message)
     values(?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("sssissssss",$firstname, $lastname, $email, $number, $arrivaldate, $departuredate, $chooseadults, $choosechildren, $chooseroom, $message);
     $stmt->execute();
    //this worked on local??
    //let see phpmyadmin on xamp
    


    // PHP program to pop an alert 
// message box on the screen 
  // Function defnition 
function function_alert($message) { 
      
    // Display the alert box  
    echo "<script>alert('$message');</script>"; 
} 
  
  
// Function call 
function_alert("Reservation Successfull"); 
  

   // echo "Reservation Successful...";
  // $stmt->close();
   // $conn->close();
}


<?php

// DB SUBMISSION from LIVE SITE
/*


$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$email = $_POST['email'];
$number = $_POST['number'];
$arrivaldate = $_POST['arrivaldate'];
$departuredate = $_POST['departuredate'];
$chooseadults = $_POST['chooseadults'];
$choosechildren = $_POST['choosechildren'];
$chooseroom = $_POST['chooseroom'];
$comment = $_POST['comment'];


//Database Connection
$conn = new mysqli('localhost:3306', 'eddytech_Admin','Hotel@macaire','eddytech_macaireresort');
if($conn->connect_error){
    die('Connection Failed  :  '.$conn->connect_error);
}else{
    $stmt = $conn->prepare("insert into roomreservation(firstname, lastname, email, number, arrivaldate, departuredate, chooseadults, choosechildren, chooseroom, comment)
    values(?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("sssissssss",$firstname, $lastname, $email, $number, $arrivaldate, $departuredate, $chooseadults, $choosechildren, $chooseroom, $comment);
    $stmt->execute();
    
// PHP program to pop an alert 
// message box on the screen 
  
// Function defnition 
function function_alert($message) { 
      
    // Display the alert box  
    echo "<script>alert('$message');</script>"; 
} 
  
  
// Function call 
function_alert("Reservation Successfully Created"); 
  

    //echo "Reservation Successfully Created...";
     $stmt->close();
    $conn->close();
 
*/
?>
