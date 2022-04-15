<!-- Include Head -->
<?php include "assest/head.php"; ?>
<?php
$id=$_SESSION['id'];

// Check if the admin is already logged in, if yes then redirect him to home page
if (!$loggedin) {
    header("location: index.php");
    exit;
}

// Get all Articles Data
$stmt = $conn->prepare("SELECT * FROM article, author, category,users WHERE id_categorie = category_id AND user_id = id_author AND userid=user_id AND user_id = ? ORDER BY article_created_time DESC");
$stmt->execute(array($id));
$data = $stmt->fetchAll();
//var_dump($data);
?>

<!-- Custom CSS -->
<!-- <link href="css/home.css" rel="stylesheet"> -->
<link type="text/css" rel="stylesheet" href="css/style.css" />

<title>Add Posts</title>

</head>

<body>

    <!-- Header -->
    <?php include "assest/header.php" ?>
    <!-- </Header> -->

    <!-- Main -->
    <main class="main">

        <div class="jumbotron text-center mb-0">
            <h1 class="display-3 font-weight-normal text-muted">My Post</h1>
        </div>

        <div class="bg-white p-4">

            <div class="row ">

                <div class="col-lg-12 text-center mb-3">
                    <a class="btn btn-info" href="add_post.php">Add Post</a>
                </div>

            </div>

            <div class="row">
                <table class='table table-striped table-bordered'>

                    <thead class='thead-dark'>
                        <tr>
                            <th scope='col'>ID</th>
                            <th scope='col'>Title</th>
                            <th scope='col'>Content</th>
                            <th scope='col'>Image</th>
                            <th scope='col'>Created Time</th>                                                       
                            <th scope='col' colspan="3">Actions</th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php
                        foreach ($data as $row) :
                            echo "<tr>";
                            ?>

                            <td><?= $row['article_id'] ?></td>
                            <td><?= $row['article_title'] ?></td>
                            <td class="text-break"><?= strip_tags(substr($row['article_content'], 0, 40)) . "..." ?></td>
                            <td><img src="img/article/<?= $row['article_image'] ?>" style="width: 100px; height: auto;"></td>
                            <td><?= $row['article_created_time'] ?></td>
                           
                            

                            <td>
                                <a class="btn btn-info" href="single_post.php?id=<?= $row['article_id'] ?> ">
                                    <i class="fa fa-eye" aria-hidden="true"></i>
                                </a>
                            </td>
                            <td>
                                <a class="btn btn-success" href="update_post.php?id=<?= $row['article_id'] ?> ">
                                    <i class="fa fa-pencil " aria-hidden="true"></i>
                                </a>
                            </td>
                            <td>
                                <a class="btn btn-danger" href="assest/delete.php?type=article&id=<?= $row['article_id'] ?> ">
                                    <i class="fa fa-trash " aria-hidden="true"></i>
                                </a>
                            </td>

                        <?php
                            echo "</tr>";
                        endforeach;
                        ?>
                    </tbody>

                </table>
            </div>
        </div>


    </main>

    <!-- Footer -->
    <!-- <?php include "assest/footer.php" ?> -->


</body>

</html>