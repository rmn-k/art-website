<!-- this page is to experiment with html layout, when we feel its okay, we will copy it to index.php -->

<!DOCTYPE html>
<html>
	<head>
		<meta charset= "UTF-8">
		<meta name= "viewport" content="width=device-width initial-scale=1.0" />
		<title>Layout example</title>
		
		<!--following three lines for the google font-->
		<link rel="preconnect" href="https://fonts.googleapis.com">
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
		<link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&family=Source+Sans+3:ital,wght@0,200..900;1,200..900&display=swap" rel="stylesheet">
		
		<link rel= "stylesheet" href="assets/css/default.css" />
	</head>
	
	<body>
		<header>
			<h1>The Little Art Website</h1>
		</header>

		<article>
			<h1>Title goes here</h1>
			<p>This is a sample content. This is a sample content. This is a sample content. This is a sample content. This is a sample content. This is a sample content. This is a sample content. This is a sample content. This is a sample content. This is a sample content.</p>
			<img src= "assets/images/vangogh.jpg"/>
		</article>
		
		<nav>
			<ul>
				<li><a href= "homepage.php">Home</a></li>
				<li><a href= "viewallart.php">Browse all art</a></li>
				<li><a href= "viewbyartist.php">Browse by artist</a></li>
				<li><a href= "viewbykeywords.php">Keywords</a></li>
				<li><a href= "search.php">Search</a></li>
				<li><a href= "about.php">About</a></li>
			</ul>
		</nav>

		<footer>
			&copy; 2020 The Little Art Website
		</footer>
	</body>
</html>
