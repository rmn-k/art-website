<?php require_once("assets/header.php"); ?>
<?php require_once("assets/nav.php"); ?>

		<article>
			<h1>View all art</h1>
			<?php
				// (old comment , not valid now) mocking up dataset that we will get back from the database
				include("models/ArtModel.php");
				$artModel= new ArtModel(); // new instance
				$results= $artModel->getAllArt(); // fn call

				// print_r($results);
				
				foreach($results as $row){
					echo '<a href="viewart.php?id=' . $row["id"] . '">' . $row["title"] . '</a> <br>';
					// echo $row["title"]."<br>";
					// <a href="viewart.php?id=X"> Title </a>
				}

				
			?>
		</article>

<?php require_once("assets/footer.php"); ?>
