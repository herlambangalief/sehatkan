<?php
	require 'koneksi.php'; 

	$page = isset($_GET['page']) ? $_GET['page'] : 1;
	$perPage = 5;
	$offset = ($page - 1) * $perPage;

	// Fetch data from the 'artikel' table with pagination
	$sql = "SELECT * FROM artikel WHERE status='disetujui' LIMIT $perPage OFFSET $offset";
	$result = $koneksi->query($sql);

	

	// Fetch total number of articles for pagination
	$totalSql = "SELECT COUNT(*) AS total FROM artikel";
	$totalResult = $koneksi->query($totalSql);
	$totalRow = $totalResult->fetch_assoc();
	$totalItems = $totalRow['total'];
	$totalPages = ceil($totalItems / $perPage);

	$searchResults="";

	if (isset($_GET['query'])) {
    $search = $_GET['query'];

    // SQL query to retrieve data
    $sql = "SELECT artikel.id_artikel, artikel.foto_artikel, artikel.judul_artikel, artikel.isi_artikel, kategori_artikel.nama_kategori_artikel
            FROM artikel
            INNER JOIN kategori_artikel ON artikel.id_kategori_artikel = kategori_artikel.id_kategori_artikel
            WHERE artikel.judul_artikel LIKE '%$search%'
                OR artikel.isi_artikel LIKE '%$search%'
                OR kategori_artikel.nama_kategori_artikel LIKE '%$search%'";

    $result = $koneksi->query($sql);

	   	if ($result->num_rows > 0) {
	    // Construct HTML for search results
		    while ($row = $result->fetch_assoc()) {
		        $pisah = explode(" ", $row['isi_artikel']);
		        $preview = '';
		        for ($i = 0; $i < 34; $i++) {
		            if (isset($pisah[$i])) {
		                $preview .= $pisah[$i] . " ";
		            }
		        }

		        $searchResults .= "<article class='blog wow fadeIn col-md-9'>";
		        $searchResults .= "<div class='row no-gutters'>";
		        $searchResults .= "<div class='col-lg-7'>";
		        $searchResults .= "<figure>";
		        $searchResults .= "<a href='artikel-post.php?id=" . $row['id_artikel'] . "'><img src='../admin_section/img/" . $row['foto_artikel'] . "' alt=''><div class='preview'><span>Read more</span></div></a>";
		        $searchResults .= "</figure>";
		        $searchResults .= "</div>";
		        $searchResults .= "<div class='col-lg-4'>";
		        $searchResults .= "<div class='post_info'>";
		        $searchResults .= "<h3><a href='artikel-post.php?id=" . $row['id_artikel'] . "'>" . $row['judul_artikel'] . "</a></h3>";
		        $searchResults .= "<p>";
		        $searchResults .= $preview . "..."; // Display the preview text
		        $searchResults .= "</p>";
		        $searchResults .= "</div>";
		        $searchResults .= "</div>";
		        $searchResults .= "</div>";
		        $searchResults .= "</article>";
		    }
	   	} 
	   	else {
		     $searchResults = "No results found.";
		}
	}
	// Display pagination links
	
?>

<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="Find easily a doctor and book online an appointment">
	<meta name="author" content="Ansonika">
	<?php require 'component/title.php'; ?>

	
    
    <!-- GOOGLE WEB FONT -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800" rel="stylesheet">

	<!-- BASE CSS -->
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/style.css" rel="stylesheet">
	<link href="css/menu.css" rel="stylesheet">
	<link href="css/vendors.css" rel="stylesheet">
	<link href="css/icon_fonts/css/all_icons_min.css" rel="stylesheet">
   
    <!-- SPECIFIC CSS -->
    <link href="css/blog.css" rel="stylesheet">
    
	<!-- YOUR CUSTOM CSS -->
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
	                   <h6 style="color:white;"><strong>Home > </strong> Artikel</h6>
	               </div>
	               <div class="col-md-6">
	               		<form method="GET" action="artikel.php" class="search_bar_list">
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
				<h1>Artikel Kesehatan</h1>
				<p>Temukan artikel menarik seputar kesehatan.</p>
			</div>
			<div class="widget">
				<div class="widget-title">
					<h4>Kategori Artikel</h4>
				</div>
				<div class="tags">
					<?php
						$tipe_query=mysqli_query($koneksi,"SELECT * FROM kategori_artikel");
						while ($data=mysqli_fetch_array($tipe_query)) {						?>
							<a href="artikel-category.php?id=<?php echo $data['id_kategori_artikel'] ?>">
								<?php echo $data['nama_kategori_artikel'] ?>
							</a>
							<?php } ?>
				</div>
			</div>
			<!-- /widget -->

			<div class="row">
				<?php echo $searchResults; ?>
				<div class="col-lg-9">
					<?php while ($data=mysqli_fetch_array($result)) {
						$pisah=explode(" ",$data['isi_artikel']);

					?>
					<article class="blog wow fadeIn">
						<div class="row no-gutters">
							<div class="col-lg-7">
								<figure>
									<a href="artikel-post.php?id=<?php echo $data['id_artikel'] ?>"><img src="../admin_section/img/<?php echo $data['foto_artikel'] ?>" alt=""><div class="preview"><span>Read more</span></div></a>
								</figure>
							</div>
							<div class="col-lg-4">
								<div class="post_info">
									<h3><a href="artikel-post.php?id=<?php echo $data['id_artikel'] ?>"><?php echo $data['judul_artikel']; ?></a></h3>
									<p>
										<?php for($i=0; $i < 34; $i++){echo $pisah[$i]." ";};?>
									</p>
								</div>
							</div>
						</div>
					</article>
					<?php } ?>
					<!-- /article -->
				</div>

				<!-- /col -->
				
				<aside class="col-md-12">
					
					
					<div class="widget">
						<div class="widget-title">
							<h4><b>Terbaru</b></h4>
							<?php $query1=mysqli_query($koneksi,"SELECT * FROM artikel ORDER BY id_artikel LIMIT 5") ?>
						</div>
						<ul class="comments-list">
							<?php while ($data1=mysqli_fetch_array($query1)) {
								$pisah1=explode(" ",$data1['judul_artikel']);
							?>
							<li>
								<div class="alignleft">
									<a href=""><img src="../admin_section/img/<?php echo $data1['foto_artikel'] ?>" alt=""></a>
								</div>
								<h3><a href="artikel-post.php?id=<?php echo $data1['id_artikel'] ?>" title=""><?php for($i=0; $i < 3; $i++){echo $pisah1[$i]." ";};?></a></h3>
							</li>
							<?php } ?>
						</ul>
					</div>


					<!-- /widget -->
					<!-- /widget -->

					
				</aside>
				<!-- /aside -->
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