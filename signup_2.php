<?php
// Include config file
require_once "config.php";

// Define variables and initialize with empty values
$firstname = $lastname = $email = $username = $password = $confirm_password = "";
$firstname_err = $lastname_err = $email_err =  $username_err = $password_err = $confirm_password_err = "";

// Processing form data when form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Validate firstname
    $firstname=$_POST["firstname"];
    if (empty(trim($_POST["firstname"]))) {
        ;
        $firstname_err = "Please enter a firstname.";
    } elseif (!preg_match('/^[a-zA-Z]+$/', trim($_POST["firstname"]))) {
        $firstname_err = "firstname can only contain letters";
    } else {
        // Prepare a select statement
        $sql = "SELECT id FROM users WHERE firstname = ?";

        if ($stmt = mysqli_prepare($connect, $sql)) {
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "s", $param_firstname);

            // Set parameters
            $param_firstname = trim($_POST["firstname"]);

            // Attempt to execute the prepared statement
            if (mysqli_stmt_execute($stmt)) {
                /* store result */
                mysqli_stmt_store_result($stmt);

                $firstname = trim($_POST["firstname"]);
            }


            // Close statement
            mysqli_stmt_close($stmt);
        }
    }

    // Validate email 
    $email = $_POST["email"];
    if (empty(trim($_POST["email"]))) {
       
        $email_err = "Please enter a email.";
    } elseif (!preg_match('/^[^0-9][_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/', trim($_POST["email"]))) {
        $email_err = "please enter valid email id";
    } else {
        // Prepare a select statement
        $sql = "SELECT id FROM users WHERE email = ?";

        if ($stmt = mysqli_prepare($connect, $sql)) {
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "s", $param_email);

            // Set parameters
            $param_email = trim($_POST["email"]);

            // Attempt to execute the prepared statement
            if (mysqli_stmt_execute($stmt)) {
                /* store result */
                mysqli_stmt_store_result($stmt);

                $email = trim($_POST["email"]);
            }


            // Close statement
            mysqli_stmt_close($stmt);
        }
    }

    // Validate lastname 
    $lastname = $_POST["lastname"];
    if (empty(trim($_POST["lastname"]))) {
       
        $lastname_err = "Please enter a lastname.";
    } elseif (!preg_match('/^[a-zA-Z]+$/', trim($_POST["lastname"]))) {
        $lastname_err = "lastname can only contain letters";
    } else {
        // Prepare a select statement
        $sql = "SELECT id FROM users WHERE lastname = ?";

        if ($stmt = mysqli_prepare($connect, $sql)) {
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "s", $param_lastname);

            // Set parameters
            $param_lastname = trim($_POST["lastname"]);

            // Attempt to execute the prepared statement
            if (mysqli_stmt_execute($stmt)) {
                /* store result */
                mysqli_stmt_store_result($stmt);

                $lastname = trim($_POST["lastname"]);
            }


            // Close statement
            mysqli_stmt_close($stmt);
        }
    }

    // Validate username
    $username = $_POST["username"];
    if (empty(trim($_POST["username"]))) {
        
        $username_err = "Please enter a username.";
    } elseif (!preg_match('/^[a-zA-Z0-9_]+$/', trim($_POST["username"]))) {
        $username_err = "Username can only contain letters, numbers, and underscores.";
    } else {
        // Prepare a select statement
        $sql = "SELECT id FROM users WHERE username = ?";

        if ($stmt = mysqli_prepare($connect, $sql)) {
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "s", $param_username);

            // Set parameters
            $param_username = trim($_POST["username"]);

            // Attempt to execute the prepared statement
            if (mysqli_stmt_execute($stmt)) {
                /* store result */
                mysqli_stmt_store_result($stmt);

                if (mysqli_stmt_num_rows($stmt) == 1) {
                    $username_err = "This username is already taken.";
                } else {
                    $username = trim($_POST["username"]);
                }
            } else {
                echo "Oops! Something went wrong. Please try again later.";
            }

            // Close statement
            mysqli_stmt_close($stmt);
        }
    }

    // Validate password
    $password = $_POST["password"];
    if (empty(trim($_POST["password"]))) {
        $password_err = "Please enter a password.";
    } elseif (strlen(trim($_POST["password"])) < 6) {
        $password_err = "Password must have atleast 6 characters.";
    } else {
        $password = trim($_POST["password"]);
    }

    // Validate confirm password
    if (empty(trim($_POST["confirm_password"]))) {
        $confirm_password_err = "Please confirm password.";
    } else {
        $confirm_password = trim($_POST["confirm_password"]);
        if (empty($password_err) && ($password != $confirm_password)) {
            $confirm_password_err = "Password did not match.";
        }
    }

    // Check input errors before inserting in database
    if (empty($firstname_err) && empty($lastname_err) && empty($email_err)  && empty($username_err) && empty($password_err) && empty($confirm_password_err)) {

        // Prepare an insert statement
      /*  $sql = "INSERT INTO users (firstname, lastname, email, username, password) VALUES (?, ?, ?, ?, ?)";

        if ($stmt = mysqli_prepare($connect, $sql)) {
            // Bind variables to the prepared statement as parameters
            //mysqli_stmt_bind_param($stmt, "sssss", $param_firstname, $param_lastname, $param_email, $param_username, $param_password);

            // Set parameters
            $param_firstname = $firstname;
            $param_lastname = $lastname;
            $param_email = $email;
            $param_username = $username;
            $param_password = password_hash($password, PASSWORD_DEFAULT); // Creates a password hash
print_r($_POST);
exit();
            // Attempt to execute the prepared statement
            try{
            mysqli_stmt_execute($stmt); 
            header("location: login.php");
            }catch(Exception $e){
                echo $e->getMessage();
            }
           

            // Close statement
            mysqli_stmt_close($stmt);
        }*/
        $param_firstname = $firstname;
        $param_lastname = $lastname;
        $param_email = $email;
        $param_username = $username;
        $param_password = password_hash($password, PASSWORD_DEFAULT); 
        //check if email exist
        $check_email = mysqli_query($connect, "SELECT * FROM users WHERE email='$param_email'");
        $count_email = mysqli_num_rows($check_email);
        if($count_email < 1){
            //check if username exist
            $check_username = mysqli_query($connect, "SELECT * FROM users WHERE username='$param_username'");
            $count_username = mysqli_num_rows($check_username);
            if($count_username < 1){
                $stmt = mysqli_query($connect,"INSERT INTO users(firstname, lastname, email, username, password) VALUES('$param_firstname','$param_lastname','$param_email','$param_username','$param_password')");
                if($stmt){
                    echo "
                        <script>alert('Account Registration Was Successful, You can Login Now!')</script>
                        <script>window.location = 'login.php'</script>
                    ";
                }else{
                    echo "
                        <script>alert('An Error Occurred, Please try again!')</script>
                        <script>window.location = 'register.php'</script>
                    ";
                }
            }else{
                $username_err = "This username is already taken.";
            }
        }else{
            $email_err = "This email is already taken.";
        }
        
        
        

        

    }

    // Close connection
    mysqli_close($connect);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- Additional Styling -->
    <link rel="stylesheet" href="style.css">
    <style>
        .wrapper {
            display: flex;
            justify-content: center;
        }
    </style>
    <title>lykme</title>
</head>

<body>
    <!-- Navbar -->

    <nav class="navbar  fixed-top navbar-dark navbar-expand-sm justify-content-between">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <img src="images/Heartlogo.png" alt="" width="30" height="24" class="d-inline-block align-text-top">
                lykme
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                    </li>
                    <!-- <li class="nav-item">
            <a class="nav-link" href="#">Features</a>
          </li> -->
                    <li class="nav-item">
                        <a class="nav-link" href="signup.php">Sign Up</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="login.php">Login</a>
                    </li>
                    <!-- <li class="nav-item">
                <a class="nav-link disabled">Disabled</a>
              </li> -->
                </ul>
            </div>
        </div>
    </nav>
    <h3>Sign Up</h3>
    <h5>Please fill this form to create an account.</h5>
    <div class="wrapper">

        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <div class="form-group">
                <label style="color:white">Firstname</label>
                <input type="text" name="firstname" class="form-control <?php echo (!empty($firstname_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $firstname; ?>">
                <span class="invalid-feedback"><?php echo $firstname_err; ?></span>
            </div>
            <div class="form-group">
                <label style="color:white">Lastname</label>
                <input type="text" name="lastname" class="form-control <?php echo (!empty($lastname_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $lastname; ?>">
                <span class="invalid-feedback"><?php echo $lastname_err; ?></span>
            </div>
            <div class="form-group">
                <label style="color:white">Email</label>
                <input type="text" name="email" class="form-control <?php echo (!empty($email_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $email; ?>">
                <span class="invalid-feedback"><?php echo $email_err; ?></span>
            </div>
            <div class="form-group">
                <label style="color:white">Username</label>
                <input type="text" name="username" class="form-control <?php echo (!empty($username_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $username; ?>">
                <span class="invalid-feedback"><?php echo $username_err; ?></span>
            </div>
            <div class="form-group">
                <label style="color:white">Password</label>
                <input type="password" name="password" class="form-control <?php echo (!empty($password_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $password; ?>">
                <span class="invalid-feedback"><?php echo $password_err; ?></span>
            </div>
            <div class="form-group">
                <label style="color:white">Confirm Password</label>
                <input type="password" name="confirm_password" class="form-control <?php echo (!empty($confirm_password_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $confirm_password; ?>">
                <span class="invalid-feedback"><?php echo $confirm_password_err; ?></span>
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-primary" value="Submit">
                <input type="reset" class="btn btn-secondary ml-2" value="Reset">
            </div>
            <p style="color:white">Already have an account? <a href="login.php">Login here</a>.</p>
        </form>
    </div>

    <!-- Bootstrap JS Bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>


</body>

</html>