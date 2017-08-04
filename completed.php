<html>
<body>

<?php                                                                                   // to display the data captured from the form
        
        if(isset($_POST["lname"])) // Helps to avoid undefined index error
        {
        
        echo "Your Last Name is ".$_POST['lname']."<br />";
        echo "Your First Name is ".$_POST['fname']."<br />";
        echo "Your Email ID is ".$_POST['email']."<br />";
        echo "Your Phone Number is ".$_POST['pnumber']."<br />";
        echo "Your Address is ".$_POST['addr']."<br />";
        echo "Your Exam ID is ".$_POST['examId']."<br />";
        echo "Your Exam Name is ".$_POST['ename']."<br />";
        }
?>
<?php                                                                                   //To check if any field is empty
$fields = array("lname","fname","email","pnumber","addr","examId","ename");
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
    if(!empty($_POST["lname"])&&!empty($_POST['fname'])&&!empty($_POST['email'])&&!empty($_POST['pnumber'])&&!empty($_POST['addr'])&&!empty($_POST['examId'])&&!empty($_POST['ename']))
    {
        $last_name = $_POST['lname'];
        $first_name = $_POST['fname'];
        $email = $_POST['email'];
        $phone_number = $_POST['pnumber'];
        $address = $_POST['addr'];
        $exam_id = $_POST['examId'];
        $exam_name = $_POST['ename'];

        $query = "insert into  nye(Last_Name,First_Name,Email,Phone_Number,Address,Exam_Id,Exam_Name) 
           values('$last_name','$first_name','$email','$phone_number','$address','$exam_id','$exam_name')";
           

            
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