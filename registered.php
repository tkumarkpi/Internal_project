<html>
<body>
<h1>WELCOME!!<br /></h1>
<?php
if(isset($_POST["name"])) // Helps to avoid undefined index error
        {
        
        
        
        echo "Your Name is ".$_POST['name']."<br />";
        echo "Your Username is ".$_POST['uname']."<br />";
        echo "Your Email ID is ".$_POST['email']."<br />";
        echo "Your password is ".$_POST['pass']."<br />";
        echo "Your Confirm Password is ".$_POST['cpass']."<br />";
        }
?>
<?php                                                                                   //To check if any field is empty
$fields = array("name","uname","email","pass","cpass");
foreach($fields as $field_agent){
    if(empty($_POST[$field_agent])){
    echo " <b>$field_agent is missing</b>"."<br />"; 
}}?>
<?php                                                                                   // to send data to MYSQL Database(assessment_exam)
$username = "root";
$servername = "localhost";
$password = "";
$database = "assessment_exam";
// Create connection
$conn = mysqli_connect($servername, $username, $password);

// Check connection
    if (!$conn) {
        die("Connection failed: ".mysqli_connect_error());
    }
    echo "Connected successfully";


$db_selected = mysqli_select_db($conn,"assessment_exam");

    if (!$db_selected){
        die("<br />Database not found");
    }
    echo "<br />Database found";
    if(!empty($_POST["name"])&&!empty($_POST['uname'])&&!empty($_POST['email'])&&!empty($_POST['pass'])&&!empty($_POST['cpass']))
    {
       
        $name = $_POST['name'];
        $email = $_POST['email'];
        $username = $_POST['uname'];
        $password = $_POST['pass'];
        $confirm_pass = $_POST['cpass'];
        

        $query = "insert into  users(Name,Email,Username,Password,Confirm_password) 
           values('$name','$email','$username','$password','$confirm_pass')";
           

            
            if (mysqli_query($conn,$query)){
                echo "<br /><br /><b>Your Data has been submitted successfully</b>";
                mysqli_close($conn);
            }   
            else {
                echo "Error: " . $query . "<br>" . mysqli_error($conn);
            }
    }
    else 
    {
        echo "<br /><br /><b>Data Not Submitted<b>";
    }
?>


</body>
</html>