<?php 
	require 'koneksi.php';

	$page = isset($_GET['page']) ? $_GET['page'] : 1;
	$perPage = 5;
	$offset = ($page - 1) * $perPage;

	// Fetch data from the 'artikel' table with pagination
	$sql = "SELECT * FROM penyakit ORDER BY nama_penyakit LIMIT $perPage OFFSET $offset";
	$query = $koneksi->query($sql);

	

	// Fetch total number of articles for pagination
	$totalSql = "SELECT COUNT(*) AS total FROM penyakit";
	$totalResult = $koneksi->query($totalSql);
	$totalRow = $totalResult->fetch_assoc();
	$totalItems = $totalRow['total'];
	$totalPages = ceil($totalItems / $perPage);

	$searchResults="";

	if (isset($_GET['query'])) {
    $search = $_GET['query'];

    // SQL query to retrieve data
   $sqli = "SELECT penyakit.id_penyakit, penyakit.nama_penyakit, penyakit.pengertian_penyakit, penyakit.gejala_penyakit, penyakit.penyebab_penyakit, penyakit.diagnosis_penyakit, penyakit.pengobatan_penyakit, penyakit.pencegahan_penyakit, kategori_penyakit.nama_kategori_penyakit
            FROM penyakit
            INNER JOIN kategori_penyakit ON penyakit.id_kategori_penyakit = kategori_penyakit.id_kategori_penyakit
            WHERE penyakit.nama_penyakit LIKE '%$search%'
                OR penyakit.pengertian_penyakit LIKE '%$search%'
                OR penyakit.gejala_penyakit LIKE '%$search%'
                OR penyakit.penyebab_penyakit LIKE '%$search%'
                OR penyakit.diagnosis_penyakit LIKE '%$search%'
                OR penyakit.pengobatan_penyakit LIKE '%$search%'
                OR penyakit.pencegahan_penyakit LIKE '%$search%'
                OR kategori_penyakit.nama_kategori_penyakit LIKE '%$search%'";

    $result = $koneksi->query($sqli);

	   	if ($result->num_rows > 0) {
	    // Construct HTML for search results
		    while ($row = $result->fetch_assoc()) {
		        $pisah1=explode(" ",$row['pengertian_penyakit']);
				$pisah2=explode(" ",$row['gejala_penyakit']);
				$pisah3=explode(" ",$row['penyebab_penyakit']);
		        $preview1 = '';
		        $preview2 = '';
		        $preview3 = '';
		        for ($i = 0; $i < 34; $i++) {
		            if (isset($pisah1[$i])) {
		                $preview1 .= $pisah1[$i] . " ";
		            }
		            if (isset($pisah2[$i])) {
		                $preview2 .= $pisah2[$i] . " ";
		            }
		            if (isset($pisah3[$i])) {
		                $preview3 .= $pisah3[$i] . " ";
		            }
		        }

		        $searchResults .= "<div class='row'>";
		        $searchResults .= "<div class='col-lg-12'>";
		        $searchResults .= "<article class='blog wow fadeIn'>";
		        $searchResults .= "<div class='row no-gutters'>";
		        $searchResults .= "<div class='col-lg-12'>";
		        $searchResults .= "<div class='post_info'>";
		        $searchResults .= "<h2><a href='penyakit-post.php?id=".$row['id_penyakit']."'>".$row['nama_penyakit']."</a></h2>";
		        $searchResults .= "<br>";
		        $searchResults .= "<b>Pengertian Penyakit:</b>";
		        $searchResults .= "<p>".$preview1."...</p>";
		        $searchResults .= "<b>Gejala Penyakit:</b>";
		        $searchResults .= "<p>".$preview2."...</p>";
		        $searchResults .= "<b>Penyebab Penyakit:</b>";
		        $searchResults .= "<p>".$preview3."...</p>"; // Display the preview text
		        $searchResults .= "</div>";
		        $searchResults .= "</div>";
		        $searchResults .= "</div>";
		        $searchResults .= "</article>";
		        $searchResults .= "</div>";
		        $searchResults .= "</div>";

		    }
	   	} 
	   	else {
		     $searchResults = "No results found.";
		}
	}
?>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="Find easily a doctor and book online an appointment">
	<meta name="author" content="Ansonika">
	<?php require 'component/title.php'; ?>

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800" rel="stylesheet">

	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/style.css" rel="stylesheet">
	<link href="css/menu.css" rel="stylesheet">
	<link href="css/vendors.css" rel="stylesheet">
	<link href="css/icon_fonts/css/all_icons_min.css" rel="stylesheet">
   
    <link href="css/blog.css" rel="stylesheet">
    
	<link href="css/custom.css" rel="stylesheet">

</head>

<body>

	<div class="layer"></div>
	<!-- Mobile menu overlay mask -->

	<div id="preloader">
		<div data-loader="circle-side"></div>
	</div>
	<!-- End Preload -->
    
	<?php require 'component/header.php'; ?>
	<!-- /Header -->
	
	<main>
		<div id="breadcrumb">
			<div class="container">
				<div class="row">
               <div class="col-md-6">
                   <h6 style="color:white;"><strong>Home > </strong> Penyakit</h6>
               </div>
               <div class="col-md-6">
               	<form method="GET" action="penyakit.php" class="search_bar_list">
						    <input class="form-control" type="text" placeholder="Search..." aria-label="Search" name="query">
						    <input type="submit" value="Search">
						</form>
                </div>
            </div>
         </div>
		</div>
		<!-- /breadcrumb -->

		<div class="container margin_60">
			<div class="main_title">
				<h1>Data Penyakit</h1>
			</div>

			<?php echo $searchResults;?>


			<div class="row">
				<div class="col-lg-12">
				<?php 
        // Check if a search is running
		        $searchIsRunning = isset($_GET['query']); // Assuming 'query' is the parameter for search

		        if (!$searchIsRunning) {
				?>
					<?php while ($fetch=mysqli_fetch_array($query)) {
						$pisah1=explode(" ",$fetch['pengertian_penyakit']);
						$pisah2=explode(" ",$fetch['gejala_penyakit']);
						$pisah3=explode(" ",$fetch['penyebab_penyakit']);
					?>
						<article class="blog wow fadeIn">
							<div class="row no-gutters">
								<div class="col-lg-12">
									<div class="post_info">
										<h2><a href="penyakit-post.php?id=<?php echo $fetch['id_penyakit'] ?>"><?php echo $fetch['nama_penyakit']; ?></a></h2>
										<br>
										<b>Pengertian Penyakit:</b>
										<p><?php for($i=0; $i < 30; $i++){echo $pisah1[$i]." ";};?>...</p>
										<b>Gejala Penyakit:</b>
										<p><?php for($i=0; $i < 30; $i++){echo $pisah2[$i]." ";};?>...</p>
										<b>Penyebab Penyakit:</b>
										<p><?php for($i=0; $i < 30; $i++){echo $pisah3[$i]." ";};?>...</p>
									</div>
								</div>
							</div>
						</article>
					<?php }
				}
					 ?>
					<!-- /article -->

				</div>
				<!-- /col -->
			</div>
			<?php 
				echo "<div class='container'>";
				echo "<ul class='pagination justify-content-left'>";
				for ($i = 1; $i <= $totalPages; $i++) {
				    echo "<h5><li class='page-item'><a class='page-link' href='?page=$i'>$i</a></li></h5>";
				}
				echo "</ul>";
				echo "</div>";
			?>
			<!-- /row -->
		</div>
		<!-- /container -->
	</main>
	<!-- /main -->
	
	<?php require 'component/footer.php'; ?>
	<!--/footer-->

	<div id="toTop"></div>
	<!-- Back to top button -->

	<!-- COMMON SCRIPTS -->
	<script src="js/jquery-2.2.4.min.js"></script>
	<script src="js/common_scripts.min.js"></script>
	<script src="js/functions.js"></script>
   
</body>
</html>