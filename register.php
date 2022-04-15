<!-- Include Head -->
<?php include "assest/head.php"; ?>
<?php
function test_input($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

function uploadImage2($name, $dest)
{

    $target_dir = $dest;
    $target_file = $target_dir . basename($_FILES[$name]["name"]);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

    // Check if image file is a actual image or fake image   
    $check = getimagesize($_FILES[$name]["tmp_name"]);
    if ($check !== false) {
        //echo "File is an image - " . $check["mime"] . ".";
    
        if ($_FILES[$name]["size"] < 5000000) {
           
            if ($imageFileType == "jpg" || $imageFileType == "png" || $imageFileType == "jpeg") {
               
               
                   
                    if (move_uploaded_file($_FILES[$name]["tmp_name"], $target_file)) {
                       // echo "The file " . basename($_FILES[$name]["name"]) . " has been uploaded.";
                        //exit();
                    } else {
                        echo "Sorry, there was an error uploading your file.";
                        exit();
                    }
                
                
            }else{
                echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
                exit();
            }
            
         }else{
              echo "Sorry, your file is too large. Greater than 5MB";
              exit();
         }
      
    }else{
       echo "File is not an image - " . $check["mime"] . "."; 
       exit();
    } 
    // Check if file already exists
   
}
 if($_SERVER["REQUEST_METHOD"] == "POST"){
    //uploadImage2("authImage", "../img/avatar/");
 $author_fullname = test_input($_POST["authName"]);
 $author_desc = test_input($_POST["authDesc"]);
 $author_email =  test_input($_POST["authEmail"]);
 $author_twitter =  test_input($_POST["authTwitter"]);
 $author_github = test_input($_POST["authGithub"]);
 $author_link = test_input($_POST["authLinkedin"]);
 $author_avatar = test_input($_FILES["authImage"]["name"]);
 $password = test_input($_POST["password"]);
 $cpassword = test_input($_POST["c_password"]);
 $username = test_input($_POST["username"]);
 $encrpted_password = password_hash($password, PASSWORD_BCRYPT);

 if($password == $cpassword){
    $stmt = $conn->prepare("SELECT * FROM users WHERE username = ? OR email = ?");
    $stmt->execute(array($username, $author_email));   
    $row = $stmt->rowCount();
	$fetch = $stmt->fetch();
    if($row < 1) {
        try{
        uploadImage2("authImage", "img/avatar/");
        $insert_1 = $conn->prepare("INSERT INTO users(`email`, `username`, `password`) VALUES ('$author_email','$username', '$encrpted_password')");
		$insert_1->execute();
       // print_($insert_1);
        //exit();
        $select_1 = $conn->prepare("SELECT * FROM users WHERE email=?");
		$select_1->execute(array($author_email));
        $fetch_selected = $select_1->fetch();
        $fetched = $fetch_selected['userid'];
        print_r($fetched);
        $insert_2 = $conn->prepare("INSERT INTO author(`author_fullname`, `author_desc`, `author_email`, `author_twitter`, `author_github`, `author_link`, `author_avatar`, `user_id`) VALUES
         ('$author_fullname', '$author_desc', '$author_email', '$author_twitter','$author_github','$author_link','$author_avatar','$fetched')");
		$insert_2->execute();
        echo "
        <script>alert('Registration SuccessFul, You Can Login now')</script>
        <script>window.location = 'index.php'</script>
        ";
        
    }catch(PDOException $e){
        echo $e->getMessage();
    }
           
       
    }else{
       echo "
        <script>alert('Duplicate Entry Username/Email Exist')</script>
        <script>window.location = 'register.php'</script>
        "; 
        exit(); 
    }
    
 }else{
    echo "
        <script>alert('Password Mismatch, Password and Confirm Password Does Not Match')</script>
        <script>window.location = 'register.php'</script>
        "; 
        exit();
 }
 

 }
?>
<html>
<title>Register</title>
</head>

<body>

    <!-- Header -->
    <?php include "assest/header.php" ?>

    <!-- Main -->
    <main role="main" class="main">
        <!-- Latest Articles -->
        <div class="section jumbotron mb-0 h-100">
            <!-- container -->
            <div class="container d-flex flex-column justify-content-center align-items-center h-100">

                <div class="wrapper my-0 pt-3 bg-white w-50 text-center">
                    <h2>Register</h2>
                </div>

                <!-- row -->
                <div class="wrapper bg-white rounded px-4 py-4 w-50">
                    <!-- Form -->
                    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST" enctype="multipart/form-data">
                    <div class="form-group">
                            <label for="authName">Full Name</label>
                            <input type="text" class="form-control" name="authName" id="authName" required>
                        </div>
                        <div class="form-group">
                            <label for="authName">Username</label>
                            <input type="text" class="form-control" name="username" id="username" required>
                        </div>                       

                        <div class="form-group">
                            <label for="authDesc">Description(about self)</label>
                            <input type="text" class="form-control" name="authDesc" id="authDesc">
                        </div>

                        <div class="form-group">
                            <label for="authEmail">Email</label>
                            <input type="email" class="form-control" name="authEmail" id="authEmail" required>
                        </div>

                        <div class="form-group">
                            <label for="authImage">Avatar/Profile Picture</label>
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" name="authImage" id="authImage">
                                <label class="custom-file-label" for="authImage">Choose file</label>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="authTwitter">Twitter Username <span class="text-info">(optional)</span></label>
                            <input type="text" class="form-control" name="authTwitter" id="authTwitter" placeholder="Ex: Moon96Schwarz">
                        </div>
                        <div class="form-group">
                            <label for="authGithub">Github Username <span class="text-info">(optional)</span></label>
                            <input type="text" class="form-control" name="authGithub" id="authGithub" placeholder="Ex: Moon96Schwarz">
                        </div>
                        <div class="form-group">
                            <label for="authLinkedin">Linkedin Username <span class="text-info">(optional)</span></label>
                            <input type="text" class="form-control" name="authLinkedin" id="authLinkedin" placeholder="Ex: Moon96Schwarz">
                        </div>
                        <div class="form-group">
                            <label>Password</label>
                            <input type="password" name="password" class="form-control" required>
                           
                        </div>
                        <div class="form-group">
                            <label>Confirm Password</label>
                            <input type="password" name="c_password" class="form-control" required>
                           
                        </div>

                        <div class="text-center">
                            <button type="submit" name="submit" class="btn btn-success btn-lg w-25">Register</button>
                        </div>
                    </form>
                    </form>
                </div>

                <!-- /row -->

            </div>
            <!-- /container -->
        </div>


    </main>

    <!-- Footer -->
    <!-- <?php include "assest/footer.php" ?> -->


</body>

</html>