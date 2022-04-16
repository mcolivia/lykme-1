<!-- Include Head -->
<?php include "assest/head.php"; ?>
<?php

// Check if the admin is already logged in, if yes then redirect him to home page
if (!$loggedin) {
    header("location: index.php");
    exit;
}
$id = $_SESSION['id'];
$stmt = $conn->prepare("SELECT * FROM author,users WHERE users.userid = author.user_id AND userid !='$id'");
$stmt->execute();
$authors = $stmt->fetchAll();
?>

<title>Users</title>
<link type="text/css" rel="stylesheet" href="css/style.css" />

<style>
    .fa-twitter,
    .fa-github,
    .fa-linkedin-square {
        font-size: 2.3rem;
    }
</style>
</head>

<body>

    <!-- Header -->
    <?php include "assest/header.php" ?>
    <!-- </Header> -->

    <!-- Main -->
    <main role="main" class="main">
        <div class="jumbotron text-center mb-0">
            <h1 class="display-3 font-weight-normal text-muted">All Users</h1>
        </div>

        <div class="bg-white py-3 px-5">
            <div class="row">

                <div class="col-lg-12 text-center mb-3">
                    <a class="btn btn-info" href="add_user.php">Add User</a>
                </div>

            </div>

            <div class="row">
                <table class='table table-striped table-bordered'>

                    <thead class='thead-dark'>
                        <tr>
                            <th scope='col'>ID</th>
                            <th scope='col'>Username</th>
                            <th scope='col'>Full Name</th>
                            <th scope='col'>Description</th>
                            <th scope='col'>Status</th>
                            <th scope='col'>Avatar</th>
                            <th scope='col'>Email</th>
                            <th scope='col'>Twitter</th>                            
                            <th scope='col'>Linkedin</th>
                            <th scope='col' colspan="2">Actions</th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php
                        foreach ($authors as $author) :
                            echo "<tr>";
                            ?>

                            <td><?= $author['author_id'] ?></td>
                            <td><?= $author['username'] ?></td>
                            <td><?= $author['author_fullname'] ?></td>
                            <td><?= $author['author_desc'] ?></td>
                            <?php if ($author['status'] == 'enabled' ){ ?>
									
									<td width="120"><a class="btn btn-success"><i class="icon-check"></i> Active</a></td>
									
									<?php }else{ ?>
									<td width="120"><a class="btn btn-danger"><i class="icon-remove"></i> Disabled</a></td>			
									<?php } ?>
                            <td>
                                <img src="img/avatar/<?= $author['author_avatar'] ?>" style="width: 100px; height: auto;border-radius: 100%;">
                            </td>
                            <td><?= $author['author_email'] ?></td>
                            <td class="text-center">
                                <a href="https://twitter.com/<?= $author['author_twitter'] ?>" target="_blank">
                                    <i class="fa fa-twitter"></i>
                                </a>
                            </td>
                            
                            <td class="text-center">
                                <a href="https://www.linkedin.com/in/<?= $author['author_link'] ?>" target="_blank">
                                    <i class="fa fa-linkedin-square"></i>
                                </a>
                            </td>

                            <td>
                                <a class="btn btn-success" href="update_user.php?id=<?= $author['userid'] ?>">
                                    <i class="fa fa-pencil " aria-hidden="true"></i>
                                </a>
                            </td>
                            <td>
                                <a class="btn btn-danger" href="assest/delete.php?type=users&id=<?= $author['userid'] ?>">
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

    </main><!-- </Main> -->

    <!-- Footer -->
    <!-- <?php include "assest/footer.php" ?> -->

</body>

</html>