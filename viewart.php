<?php require_once("assets/header.php"); ?>
<?php require_once("assets/nav.php"); ?>

		<article>
			<h1>View all art</h1>
			<?php
				// mocking up dataset that we will get back from the database
				$results= array(
					array("id"=>1, "title"=>"SunFlowers", "imageurl"=>"sunflowers.jpg"), // first record
					array("id"=>2, "title"=>"Hands", "imageurl"=>"hands.jpg"), 
					array("id"=>3, "title"=>"Cat", "imageurl"=>"cat.jpg")
				);

				// print_r($results);
				
				foreach($results as $row){
					echo $row["title"]."<br>";
				}
				
			?>
		</article>

<?php require_once("assets/footer.php"); ?>
