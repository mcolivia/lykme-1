<!-- Include Head -->
<?php include "assest/head.php"; ?>
<?php
$stmt = $conn->prepare("SELECT category_id, category_name FROM category");
$stmt->execute();
$categories = $stmt->fetch();

$stmt = $conn->prepare("SELECT author_id, author_fullname FROM author");
$stmt->execute();
$authors = $stmt->fetchAll();

?>

<!-- JS TextEditor -->
<script src="//cdn.ckeditor.com/4.13.1/standard/ckeditor.js"></script>

<title>Add Post</title>

</head>

<body>

    <!-- Header -->
    <?php include "assest/header.php" ?>

    <!-- Main -->
    <main role="main" class="main">
        <div class="jumbotron text-center ">
            <h1 class="display-3 font-weight-normal text-muted">Submit a Post</h1>
        </div>

        <div class="container">
            <div class="row">

                <div class="col-lg-12 mb-4">
                    <!-- Form -->
                    <form action="assest/insert.php?type=article" method="POST" enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="arTitle">Title</label>
                            <input type="text" class="form-control" name="arTitle" id="arTitle" required>
                        </div>

                        <div class="form-group">
                            <label for="arContent">Content</label>

                            <textarea class="form-control" name="arContent" id="arContent" rows="3" required></textarea>
                        </div>

                        <div class="form-group">
                            <label for="arImage">Image</label>
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" name="arImage" id="arImage">
                                <label class="custom-file-label" for="arImage">Choose file</label>
                            </div>
                        </div>

                        <div class="form-group">
                        <input type="hidden" class="form-control" name="arCategory" id="arCategory" value="<?= $categories['category_id'] ?>">                           
                        </div>


                        <div class="form-group">
                        <input type="hidden" class="form-control" name="arAuthor" id="arAuthor" value="<?= $_SESSION['id'] ?>">                            
                        </div>

                        <div class="text-center">
                            <button type="submit" name="submit" class="btn btn-success btn-lg w-25">Submit</button>
                        </div>
                    </form>
                </div>

                <!-- <div class="col-lg-4 mb-4">
                     <h1> Random Articles </h1>
                </div> -->


            </div>
        </div>

    </main>

    <!-- Footer -->
    <!-- <?php include "assest/footer.php" ?> -->


    <!-- Text Editor Script -->
    <script>
        CKEDITOR.replace('arContent');
    </script>

</body>

</html>