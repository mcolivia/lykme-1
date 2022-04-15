<!-- Include Head -->
<?php include "assest/head.php"; ?>

<title>Add User</title>
</head>

<body>

    <!-- Header -->
    <?php include "assest/header.php" ?>

    <!-- Main -->
    <main role="main" class="main">

        <div class="jumbotron text-center">
            <h1 class="display-3 font-weight-normal text-muted">Add User</h1>
        </div>

        <div class="container">
            <div class="row">

                <div class="col-lg-12 mb-4">
                    <!-- Form -->
                    <form action="assest/insert.php?type=author" method="POST" enctype="multipart/form-data">
                    <div class="form-group">
                            <label for="authName">Username</label>
                            <input type="text" class="form-control" name="username" id="username">
                            <label for="authLinkedin">Default Password for New User is <span class="text-danger">12345</span></label>
                        </div>
                        <div class="form-group">
                            <label for="authName">Full Name</label>
                            <input type="text" class="form-control" name="authName" id="authName">
                        </div>

                        <div class="form-group">
                            <label for="authDesc">Description</label>
                            <input type="text" class="form-control" name="authDesc" id="authDesc">
                        </div>

                        <div class="form-group">
                            <label for="authEmail">Email</label>
                            <input type="email" class="form-control" name="authEmail" id="authEmail">
                        </div>

                        <div class="form-group">
                            <label for="authImage">Avatar/profile picture</label>
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" name="authImage" id="authImage">
                                <label class="custom-file-label" for="authImage">Choose file</label>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="arCategory">Role</label>
                            <select class="custom-select" name="role" id="role">                           
                            <option disabled>-- Select User role --</option>                               
                                <option value="admin" selected>Admin</option>
                                <option value="user">User</option>
                            </select>
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


                        <div class="text-center">
                            <button type="submit" name="submit" class="btn btn-success btn-lg w-25">Submit</button>
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