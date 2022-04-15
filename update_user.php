<!-- Include Head -->
<?php include "assest/head.php"; ?>
<?php

$author_id = $_GET["id"];

// Get author Data to display
$stmt = $conn->prepare("SELECT * FROM author,users WHERE users.userid = author.user_id AND user_id = ?");
$stmt->execute([$author_id]);
$author = $stmt->fetch();

?>

<title>Update User</title>
</head>

<body>

    <!-- Header -->
    <?php include "assest/header.php" ?>

    <!-- Main -->
    <main role="main" class="main">

        <div class="jumbotron text-center">
            <h1 class="display-3 font-weight-normal text-muted">Update User</h1>
        </div>

        <div class="container">
            <div class="row">

                <div class="col-lg-12 mb-4">
                    <!-- Form -->
                    <form action="assest/update.php?type=author&id=<?= $author_id ?>&img=<?= $author["author_avatar"] ?>" method="POST" enctype="multipart/form-data">
                    <div class="form-group">
                            <label for="authName">username</label>
                            <input type="text" class="form-control" name="username" id="username" value="<?= $author['username'] ?>">
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
                            <input type="text" class="form-control" name="authEmail" id="authEmail" value="<?= $author['author_email'] ?>">
                        </div>

                        <div class="form-group">
                            <label for="authImage">Avatar</label>
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
                        <div class="form-group">
                            <label for="arCategory">Password</label>
                            <input type="text" class="form-control" name="password" id="password">

                        </div>
                        <div class="form-group">
                            <label for="arCategory">Role</label>
                            <select class="custom-select" name="role" id="role">
                            <option value="<?= $author['role'] ?>"><?= $author['role'] ?></option>  
                            <option disabled>-- Select User role --</option>                               
                                <option value="admin">Admin</option>
                                <option value="user">User</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="arCategory">Status</label>
                            <select class="custom-select" name="status" id="status">
                            <option value="<?= $author['status'] ?>"><?= $author['status'] ?></option>  
                            <option disabled>-- Select Status --</option>                               
                                <option value="enabled">Active</option>
                                <option value="disabled">Disable</option>
                            </select>
                        </div>


                        <div class="text-center">
                            <button type="submit" name="update" class="btn btn-success btn-lg w-25">Submit</button>
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