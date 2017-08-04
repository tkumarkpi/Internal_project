<html>
<body>
<title>
NYE Regeration Page
</title>
<center>
<marquee scrollamount = "20" direction= "right" ><h1>Welcome candidate register Here!</h1></marquee>
<h4>All Fields are mandatory**.</h4>

<form action = "completed.php" method = "post">
<table>
    <tr>
        <td>
            Last Name(required):
        </td>
        <td>
            <input type = "text" name = "lname">
        </td>
    </tr>
    <tr>
        <td>
            First Name(required):
        </td>
        <td>
            <input type = "text" name = "fname">
        </td>
    </tr>
    <tr>
        <td>
            Email(required):
        </td>
        <td>
            <input type = "text" name = "email" >
        </td>
    </tr>
    <tr>
        <td>
            Phone Number(required):
        </td>
        <td>
            <input type = "text" name = "pnumber" >
        </td>
    </tr>
    <tr>
        <td>
            Address(required):
        </td>
        <td>
            <textarea name="addr" rows="3" cols="40"></textarea>
        </td>
    </tr>
    <tr>
        <td>
            Exam ID(required):
        </td>
        <td>
            <input type = "text" name = "examId">
        </td>
    </tr>
    <tr>
        <td>
            Exam Name(required):
        </td>
        <td>
            <input type = "text" name = "ename">
        </td>
    </tr>
</table>
<br /><input type ="submit" value = "Submit" >&nbsp;<input type="reset">
</form>
</center>
</body>
</html>