<!-- Include Head -->
<?php include "assest/head.php"; ?>
<?php

$article_id = $_GET["id"];

// Get article Data to display
$stmt = $conn->prepare("SELECT * FROM article WHERE article_id = ?");
$stmt->execute([$article_id]);
$article = $stmt->fetch();

// Get categories Data to display
$stmt = $conn->prepare("SELECT category_id, category_name FROM category");
$stmt->execute();
$categories = $stmt->fetch();

// Get authors Data to display
$stmt = $conn->prepare("SELECT author_id, author_fullname FROM author");
$stmt->execute();
$authors = $stmt->fetchAll();

?>

<!-- JS TextEditor -->
<script src="//cdn.ckeditor.com/4.13.1/standard/ckeditor.js"></script>

<title>Update Post</title>
</head>

<body>

    <!-- Header -->
    <?php include "assest/header.php" ?>


    <!-- Main -->
    <main role="main" class="main">

        <div class="jumbotron text-center">
            <h1 class="display-3 font-weight-normal text-muted">Update Post</h1>
        </div>

        <div class="container">
            <div class="row">

                <div class="col-lg-8 mb-4">
                    <!-- Form -->
                    <form action="assest/update.php?type=article&id=<?= $article_id ?>&img=<?= $article["article_image"] ?>" method="POST" enctype="multipart/form-data">

                        <div class="form-group">
                            <label for="arTitle">Title</label>
                            <input type="text" class="form-control" name="arTitle" id="arTitle" value="<?= $article["article_title"] ?>">
                        </div>

                        <div class="form-group">
                            <label for="arContent">Content</label>
                            <textarea class="form-control" name="arContent" id="arContent" rows="3">
                            <?= $article["article_content"] ?>
                        </textarea>
                        </div>

                        <div class="form-group">
                            <label for="UploadImage">Image</label>
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" name="arImage" id="arImage">
                                <label class="custom-file-label" for="UploadImage"> <?= $article['article_image'] ?></label>
                            </div>

                        </div>

                        <div class="my-2" style="width: 200px;">
                            <img class="w-100 h-auto" src="img/article/<?= $article["article_image"] ?>" alt="">
                        </div>                      


                        <div class="form-group">
                       
                        <input type="hidden" class="form-control" name="arCategory" id="arCategory" value="<?= $categories['category_id'] ?>">
                        <input type="hidden" class="form-control" name="arAuthor" id="arAuthor" value="<?= $_SESSION['id'] ?>">  


                            </select>
                        </div>
                        <div class="text-center">
                            <button type="submit" name="update" class="btn btn-success btn-lg w-25">Update</button>
                        </div>


                    </form>
                </div>

                <div class="col-lg-4 mb-4">
                    <!-- <h1> Random Articles </h1>  -->
                </div>


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