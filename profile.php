<!-- Include Head -->
<?php include "assest/head.php"; ?>
<?php

$author_id = $_SESSION["id"];
print_r($author_id);
// Get author Data to display
$stmt = $conn->prepare("SELECT * FROM author,users WHERE users.userid = author.user_id AND user_id = ?");
$stmt->execute([$author_id]);
$author = $stmt->fetch();

?>

<title>My Profile</title>
</head>

<body>

    <!-- Header -->
    <?php include "assest/header.php" ?>

    <!-- Main -->
    <main role="main" class="main">

        <div class="jumbotron text-center">
            <h1 class="display-3 font-weight-normal text-muted">My Profile</h1>
        </div>

        <div class="container">
            <div class="row">

                <div class="col-lg-12 mb-4">
                    <!-- Form -->
                    <form action="assest/update.php?type=profile&id=<?= $author_id ?>&img=<?= $author["author_avatar"] ?>" method="POST" enctype="multipart/form-data">
                    <div class="form-group">
                            <label for="authName">Username</label>
                            <input type="text" class="form-control" name="username" id="username" value="<?= $author['username'] ?>" readonly>
                        </div>

                        <div class="form-group">
                            <label for="authName">Full Name</label>
                            <input type="text" class="form-control" name="authName" id="authName" value="<?= $author['author_fullname'] ?>">
                        </div>

                        <div class="form-group">
                            <label for="authDesc">Description</label>
                            <input type="text" class="form-control" name="authDesc" id="authDesc" value="<?= $author['author_desc'] ?>">
                        </div>

                        <div class="form-group">
                            <label for="authEmail">Email</label>
                            <input type="text" class="form-control" name="authEmail" id="authEmail" value="<?= $author['author_email'] ?>" readonly>
                        </div>

                        <div class="form-group">
                            <label for="authImage">Avatar/Profile Picture</label>
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" name="authImage" id="authImage">
                                <label class="custom-file-label" for="authImage"> <?= $author['author_avatar'] ?> </label>
                            </div>
                        </div>

                        <div class="my-2" style="width: 200px;">
                            <img class="w-100 h-auto" src="img/avatar/<?= $author['author_avatar'] ?>" alt="">
                        </div>

                        <div class="form-group">
                            <label for="authTwitter">Twitter Username <span class="text-info">(optional)</span></label>
                            <input type="text" class="form-control" name="authTwitter" id="authTwitter" value="<?= $author['author_twitter'] ?>">
                        </div>
                        <div class="form-group">
                            <label for="authGithub">Github Username <span class="text-info">(optional)</span></label>
                            <input type="text" class="form-control" name="authGithub" id="authGithub" value="<?= $author['author_github'] ?>">
                        </div>
                        <div class="form-group">
                            <label for="authLinkedin">Linkedin Username <span class="text-info">(optional)</span></label>
                            <input type="text" class="form-control" name="authLinkedin" id="authLinkedin" value="<?= $author['author_link'] ?>">
                        </div>
                        <label for="authDesc">Update password</label>
                        <hr>
                        <div class="form-group">
                            <label for="authDesc">Old Password</label>
                            <input type="password" class="form-control" name="opassword" id="opassword">
                            <input type="hidden" class="form-control" name="fopassword" id="fopassword" value="<?= $author['password'] ?>">
                        </div>

                        <div class="form-group">
                            <label for="authEmail">New Password</label>
                            <input type="password" class="form-control" name="npassword" id="npassword" >
                        </div>
                        <div class="form-group">
                            <label for="authEmail">Confirm New Password</label>
                            <input type="password" class="form-control" name="cnpassword" id="cnpassword">
                        </div>

                        <div class="text-center">
                            <button type="submit" name="update" class="btn btn-success btn-lg w-25">Update</button>
                        </div>


                    </form>
                </div>


            </div>

        </div>

    </main>

    <!-- Footer -->
    <!-- <?php include "assest/footer.php" ?> -->

</body>

</html>