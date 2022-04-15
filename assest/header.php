<header class="blog-header border-bottom shadow-sm bg-white">
    <div class="container-fluid" style="padding-left: 3rem; padding-right:3rem">

        <div class="d-flex flex-column flex-md-row align-items-center py-2">
            <a href="index.php" class="my-0 mr-md-auto" style="width: 6rem;">
                <img src="images/Heartlogo.jpg" alt="dev culture logo" style="width: 80%;height: auto;">
                
            </a>

            <?php            
            if ($loggedin) :?>
                
                <?php if ($_SESSION['role'] =='admin') :?>
                <nav class="my-2 my-md-0 mr-md-3">
                    <a class="p-2 px-5 text-muted" href="index.php">Home</a>
                    <a class="p-2 px-5 text-muted" href="personality_test/index.php">Take Personality Test</a>
                    <a class="p-2 px-5 text-muted" href="post.php">My Post</a>
                    <a class="p-2 px-5 text-muted" href="all_posts.php">All Post</a>
                    <a class="p-2 px-5 text-muted" href="users.php">Users</a>
                    <a class="p-2 px-5 text-muted" href="profile.php">My Profile</a>
                </nav>
                <?php else : ?>
                    <nav class="my-2 my-md-0 mr-md-3">
                    <a class="p-2 px-5 text-muted" href="index.php">Home</a>
                    <a class="p-2 px-5 text-muted" href="personality_test/index.php">Take Personality Test</a>
                    <a class="p-2 px-5 text-muted" href="post.php">My Post</a>
                    <!--a class="p-2 px-5 text-muted" href="author.php">Author</a-->
                     <a class="p-2 px-5 text-muted" href="profile.php">My Profile</a>
                </nav>

            <?php endif;  ?>
            <?php else : ?>
                <nav class="my-2 my-md-0 mr-md-3">
                    <a class="p-2 px-5 text-muted" href="index.php">Home</a>
                    <a class="p-2 px-5 text-muted" href="articleOfCategory.php">Post</a>
                </nav>

            <?php endif;  ?>

            <a class="btn btn-outline-success" href="<?= ($loggedin) ? 'Logout.php' : 'login.php'; ?>">
                <?= ($loggedin) ? 'Logout' : 'Sign in'; ?>
            </a>
            &nbsp;&nbsp;
            <?php if (!$loggedin){?>
                <a class="btn btn-outline-danger" href="register.php">
              Register 
            </a>
            <?php
            }?>
            

        </div>
    </div>
</header>