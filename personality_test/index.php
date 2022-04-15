 <?php include "database.php"; ?>

<?php
	//Get the total questions
	$query="select * from questions";
	//Get Results
	$results = $mysqli->query($query) or die ($mysqli->error.__LINE__);
	$total = $results->num_rows;

 ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <title>Pesonality Tester</title>
    <link rel="stylesheet" href="css/style.css" type="text/css" />
  </head>
  <body>
    <div id="container">
      <header>
        <div class="container">
          <h1>Pesonality Test</h1>
	</div>
      </header>


      <main>
      <div class="container">
        <h2>Test your Personality</h2>
	<p>This is a multiple choice quize to test your Personality</p>
	<ul>
		<li><strong>Number of Questions: </strong><?php echo $total; ?></ul>
		<li><strong>Type: </strong>Multiple Choice</ul>
		<li><strong>Estimatd Time: </strong><?php echo $total*0.5; ?> minutes</ul>
	</ul>
	<a href="question.php?n=1" class="start">Start Quiz</a>
  <a href="../index.php" class="start">Go to Home</a>
      </div>
    </div>
    </main>


    <footer>
      <div class="container">
      Copyright &copy; 2022, LYKME
      </div>
    </footer>
  </body>
</html>