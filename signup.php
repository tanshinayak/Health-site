<?php
$servername = "localhost";
$username_db = "tanshi";
$password = "tanshi123";
$dbname = "healthcare";
// Create connection
$conn = mysqli_connect($servername, $username_db, $password, $dbname);
// Check connection
if (!$conn) {
    die("connection failed:". mysqli_connect_error());
}
 
// Define variables and initialize with empty values
$username = $password =$location=$phone=$email="";
$username_err = $password_err = $location_err = $phone_err=$email_err="";
 
// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
    // Validate username
    if(empty(trim($_POST["Username"]))){
        $username_err = "Please enter a username.";
    } else{
        // Prepare a select statement
        $sql = "SELECT u_id FROM user WHERE Username = ?";
        
        if($stmt = mysqli_prepare($conn, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "s", $param_username);
            
            // Set parameters
            $param_username = trim($_POST["Username"]);
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                /* store result */
                mysqli_stmt_store_result($stmt);
                
                if(mysqli_stmt_num_rows($stmt) == 1){
                    $username_err = "This username is already taken.";
                } else{
                    $username = trim($_POST["Username"]);
                    $email = trim($_POST["email"]);
                    $phone = trim($_POST["phone"]);
                }
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }

            // Close statement
            mysqli_stmt_close($stmt);
        }
    }
    
    // Validate password
    if(empty(trim($_POST["password"]))){
        $password_err = "Please enter a password.";     
    } elseif(strlen(trim($_POST["password"])) < 6){
        $password_err = "Password must have atleast 6 characters.";
    } else{
        $password = trim($_POST["password"]);
    }
    
    // Validate confirm password
    if(empty(trim($_POST["location"]))){
        $location_err = "Please enter location";     
    } else{
        $location = trim($_POST["location"]);
    }
    // Check input errors before inserting in database
    if(empty($username_err) && empty($password_err) && empty($location_err)){
        
        // Prepare an insert statement
        $sql = "INSERT INTO user (`Username`,`Location`,`Phone`,`password`,`email`) VALUES (?, ?, ?, ?, ?)";
         
        if($stmt = mysqli_prepare($conn, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "sssss", $param_username, $param_location,$param_phone,$param_password,$param_email);
            
            // Set parameters
            $param_username = $username;
            $param_location=$location;
            $param_phone=$phone;
            $param_email=$email;
            $param_password = $password; // Creates a password hash
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                // Redirect to login page
                header("location: login.php");
            } else{
                echo "Something went wrong. Please try again later.";
            }

            // Close statement
            mysqli_stmt_close($stmt);
        }
    }
    
    // Close connection
    mysqli_close($conn);
}
?>
 
 <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Sign Up</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <style type="text/css">
        body{ font: 14px sans-serif; }
        .wrapper{ width: 350px; padding: 20px; }
    </style>
</head>
<body>
    <div class="wrapper">
        <h2>Sign Up</h2>
        <p>Please fill this form to create an account.</p>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <div class="form-group <?php echo (!empty($username_err)) ? 'has-error' : ''; ?>">
                <label>Username</label>
                <input type="text" name="Username" class="form-control" value="<?php echo $username; ?>">
                <span class="help-block"><?php echo $username_err; ?></span>
            </div>    
            <div class="form-group <?php echo (!empty($location_err)) ? 'has-error' : ''; ?>">
                <label>Location</label>
                <input type="text" name="location" class="form-control" value="<?php echo $location; ?>">
                <span class="help-block"><?php echo $location_err; ?></span>
            </div>
            <div class="form-group <?php echo (!empty($phone_err)) ? 'has-error' : ''; ?>">
                <label>Phone</label>
                <input type="text" name="phone" class="form-control" value="<?php echo $phone; ?>">
                <span class="help-block"><?php echo $phone_err; ?></span>
            </div>
            <div class="form-group <?php echo (!empty($email_err)) ? 'has-error' : ''; ?>">
                <label>Email</label>
                <input type="email" name="email" class="form-control" value="<?php echo $email; ?>">
                <span class="help-block"><?php echo $email_err; ?></span>
            </div>
            <div class="form-group <?php echo (!empty($password_err)) ? 'has-error' : ''; ?>">
                <label>Password</label>
                <input type="password" name="password" class="form-control" value="<?php echo $password; ?>">
                <span class="help-block"><?php echo $password_err; ?></span>
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-primary" value="Submit">
                <input type="reset" class="btn btn-default" value="Reset">
            </div>
            <p>Already have an account? <a href="login.php">Login here</a>.</p>
        </form>
    </div>    
</body>
</html>
<?php
/*if(isset($_POST['username']))
{
    $username=$_POST['username'];
    $location=$_POST['location'];
    $pass=$_POST['pass'];
}
if(isset($_POST['phone']))
{
    $phone=$_POST['phone'];
}
if($username!=""){
$username_check="SELECT * from user where `Username`='$username';";
$result=mysqli_query($conn,$username_check);
if(mysqli_num_rows($result)>=1){
    $username_err="Username already taken";
}else{
$sql="INSERT into user (`Username`,`place`,`Phone`,`password`) values ('$username','$location','$phone','$pass');";
if(mysqli_query($conn,$sql))
{
    //redirect to login page on successful signin
    header("location: login.php");
}
else{
    echo "Query not executed";
}
}
}*/
?>
