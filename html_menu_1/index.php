<?php 
	require 'koneksi.php';
	$sql_get_doctor="SELECT * FROM dokter ORDER BY rating_dokter DESC LIMIT 5";
	$query_get_doctor=mysqli_query($koneksi,$sql_get_doctor);

	$sql_get_tipe_rs="SELECT * FROM kategori_rs";
	$query_get_tipe_rs=mysqli_query($koneksi,$sql_get_tipe_rs);
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
	
	<!-- REVOLUTION STYLE SHEETS -->
	<link href="rev-slider-files/css/settings.css" rel="stylesheet">
    
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
	<!-- /header -->
	
	<main>
		<div id="rev_slider_72_1_wrapper" class="rev_slider_wrapper fullwidthbanner-container" data-alias="doctor_slider_1" data-source="gallery" style="margin:0px auto;background:transparent;padding:0px;margin-top:0px;margin-bottom:0px;">
			<div id="rev_slider_72_1" class="rev_slider fullwidthabanner" style="display:none;" data-version="5.4.1">
				<ul>
					<!-- SLIDE  -->
					<li data-index="rs-188" data-transition="fade" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off" data-easein="default" data-easeout="default" data-masterspeed="default" data-thumb="assets/100x50_b9dee-42512210_ml.jpg" data-delay="5150" data-rotate="0" data-saveperformance="off" data-title="Slide" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
						<!-- MAIN IMAGE -->
						<img src="rev-slider-files/assets/hosp-1.jpg" alt="" data-bgposition="center center" data-kenburns="on" data-duration="10000" data-ease="Linear.easeNone" data-scalestart="100" data-scaleend="110" data-rotatestart="0" data-rotateend="0" data-blurstart="0" data-blurend="0" data-offsetstart="0 0" data-offsetend="0 0" class="rev-slidebg" data-no-retina>
						<!-- LAYERS -->

						<!-- LAYER NR. 1 -->
						<div class="tp-caption   tp-resizeme" id="slide-188-layer-1" data-x="111" data-y="259" data-width="['auto']" data-height="['auto']" data-type="text" data-responsive_offset="on" data-frames='[{"delay":510,"speed":800,"frame":"0","from":"x:50px;opacity:0;","to":"o:1;","ease":"Power4.easeOut"},{"delay":"+3260","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]' data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 5; white-space: nowrap; font-size: 60px; line-height: 22px; font-weight: 700; color: #3f4177;font-family:Poppins;text-transform:uppercase;background-color:rgba(0, 122, 255, 0);">Choose a Doctor </div>

						<!-- LAYER NR. 2 -->
						<div class="tp-caption   tp-resizeme" id="slide-188-layer-2" data-x="114" data-y="325" data-width="['auto']" data-height="['auto']" data-type="text" data-responsive_offset="on" data-frames='[{"delay":1170,"speed":800,"frame":"0","from":"x:50px;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"+2730","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]' data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 6; white-space: nowrap; font-size: 56px; line-height: 22px; font-weight: 700; color: #3f4177;font-family:Poppins;text-transform:uppercase;">or Clinic! </div>
					</li>
					<!-- SLIDE  -->
					<li data-index="rs-189" data-transition="crossfade" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off" data-easein="default" data-easeout="default" data-masterspeed="default" data-thumb="assets/100x50_4e36b-42512211_ml.jpg" data-delay="5150" data-rotate="0" data-saveperformance="off" data-title="Slide" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
						<!-- MAIN IMAGE -->
						<img src="rev-slider-files/assets/hosp-2.jpg" alt="" data-bgposition="center center" data-kenburns="on" data-duration="10000" data-ease="Linear.easeNone" data-scalestart="100" data-scaleend="110" data-rotatestart="0" data-rotateend="0" data-blurstart="0" data-blurend="0" data-offsetstart="0 0" data-offsetend="0 0" class="rev-slidebg" data-no-retina>
						<!-- LAYERS -->

						<!-- LAYER NR. 3 -->
						<div class="tp-caption   tp-resizeme" id="slide-189-layer-1" data-x="161" data-y="center" data-voffset="-31" data-width="['auto']" data-height="['auto']" data-type="text" data-responsive_offset="on" data-frames='[{"delay":520,"speed":800,"frame":"0","from":"x:-50px;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"+3160","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]' data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 5; white-space: nowrap; font-size: 60px; line-height: 22px; font-weight: 700; color: #3f4177;font-family:Poppins;text-transform:uppercase;">Book online </div>

						<!-- LAYER NR. 4 -->
						<div class="tp-caption   tp-resizeme" id="slide-189-layer-2" data-x="165" data-y="318" data-width="['auto']" data-height="['auto']" data-type="text" data-responsive_offset="on" data-frames='[{"delay":1080,"speed":800,"frame":"0","from":"x:-50px;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"+2800","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]' data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 6; white-space: nowrap; font-size: 52px; line-height: 22px; font-weight: 700; color: #3f4177;font-family:Poppins;text-transform:uppercase;">Your Visit! </div>
					</li>
					<!-- SLIDE  -->
					<li data-index="rs-190" data-transition="crossfade" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off" data-easein="default" data-easeout="default" data-masterspeed="default" data-thumb="assets/100x50_364e0-37885311_ml.jpg" data-delay="5150" data-rotate="0" data-saveperformance="off" data-title="Slide" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
						<!-- MAIN IMAGE -->
						<img src="rev-slider-files/assets/hosp-4.jpg" alt="" data-bgposition="center center" data-kenburns="on" data-duration="10000" data-ease="Linear.easeNone" data-scalestart="100" data-scaleend="110" data-rotatestart="0" data-rotateend="0" data-blurstart="0" data-blurend="0" data-offsetstart="0 0" data-offsetend="0 0" class="rev-slidebg" data-no-retina>
						<!-- LAYERS -->

						<!-- LAYER NR. 5 -->
						<div class="tp-caption   tp-resizeme" id="slide-190-layer-1" data-x="84" data-y="384" data-width="['auto']" data-height="['auto']" data-type="text" data-responsive_offset="on" data-frames='[{"delay":500,"speed":800,"frame":"0","from":"x:-50px;opacity:0;","to":"o:1;","ease":"Power3.easeOut"},{"delay":"+3260","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]' data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 5; white-space: nowrap; font-size: 90px; line-height: 22px; font-weight: 700; color: #3f4177;font-family:Poppins;text-transform:uppercase;">Feel Good </div>

						<!-- LAYER NR. 6 -->
						<div class="tp-caption   tp-resizeme" id="slide-190-layer-2" data-x="79" data-y="454" data-width="['auto']" data-height="['auto']" data-type="text" data-responsive_offset="on" data-frames='[{"delay":960,"speed":800,"frame":"0","from":"x:-50px;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"+2930","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]' data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 6; white-space: nowrap; font-size: 52px; line-height: 22px; font-weight: 700; color: #3f4177;font-family:Poppins;text-transform:uppercase;">and Happy! </div>
					</li>
				</ul>
				<div class="tp-bannertimer tp-bottom" style="visibility: hidden !important;"></div>
			</div>
		</div>
		<!-- /REVOLUTION SLIDER -->

		<div class="container margin_120_95">
			<div class="main_title">
				<h2>Temukan Dokter Secara <strong>Online</strong></h2>
				<p>mempermudah diri anda untuk berobat dan mencari informasi seputar kesehatan.</p>
			</div>
			<div class="row add_bottom_30">
				<div class="col-lg-4">
					<div class="box_feat" id="icon_1">
						<span></span>
						<h3>Temukan Dokter</h3>
						<p>Cari dokter sesuai dengan kebutuhan anda.</p>
					</div>
				</div>
				<div class="col-lg-4">
					<div class="box_feat" id="icon_2">
						<span></span>
						<h3>Lihat Profil</h3>
						<p>Lihat keterangan dan detail dari dokter.</p>
					</div>
				</div>
				<div class="col-lg-4">
					<div class="box_feat" id="icon_3">
						<h3>Buat Janji</h3>
						<p>Buatlah janji pertemuan antara anda dan dokter.</p>
					</div>
				</div>
			</div>
			<!-- /row -->
			<p class="text-center"><a href="dokter.php" class="btn_1 medium">Cari Dokter</a></p>

		</div>
		<!-- /container -->

		<div class="bg_color_1">
			<div class="container margin_120_95">
				<div class="main_title">
					<h2>Dokter Populer</h2>
					<p>Temukan dokter yang memiliki keahlian pada bidangnya.</p>
				</div>
				<div id="reccomended" class="owl-carousel owl-theme">
					<?php while ($data=mysqli_fetch_array($query_get_doctor)) { ?>
						<?php
							$id=$data['id_kategori_penyakit']; 
							$sql_bidang="SELECT * FROM kategori_penyakit WHERE id_kategori_penyakit=$id";
							$query_bidang=mysqli_query($koneksi,$sql_bidang);
							$fetch_bidang=mysqli_fetch_array($query_bidang);
						?>
						<div class="item">
							<a href="dokter-detail.php?id=<?php echo $data['id_dokter'] ?>">
								<div class="views"><i class="icon-star-5"></i><?php echo $data['rating_dokter']; ?></div>
								<div class="title">
									<h4>
										<?php echo $data['nama_dokter']; ?>
										<em><?php echo "Bidang-".$fetch_bidang['nama_kategori_penyakit']; ?></em>
									</h4>
								</div><img src="../admin_section/img/<?php echo $data['foto_dokter'] ?>" alt="">
							</a>
						</div>
					<?php } ?>
				</div>
				<!-- /carousel -->
			</div>
			<!-- /container -->
		</div>
		<!-- /white_bg -->

		<div class="container margin_120_95">
			<div class="main_title">
				<h2>Temukan Rumah Sakit</h2>
				<p>Temukan kategori rumah sakit yang sesuai dengan keperluan anda</p>
			</div>
			<div class="row justify-content-center">
				<div class="col-xl-10 col-lg-6 col-md-12">
					<div class="list_home">
						<div class="list_title">
							<i class="icon_archive_alt"></i>
							<h3>Search by type</h3>
						</div>
						<ul>
							<?php $i=0; while ($data2=mysqli_fetch_array($query_get_tipe_rs)) { 
								$i++;
							?>
								<li>
									<a href="rs.php?category=<?php echo $data2['id_kategori_rs'] ?>">
										<strong><?php echo $i; ?></strong>
										<?php echo $data2['nama_kategori_rs']; ?>
									</a>
								</li>
							<?php } ?>
						</ul>
					</div>
				</div>
			</div>
			<!-- /row -->
		</div>
		<!-- /container -->

	</main>
	<!-- /main content -->
	
	<?php require 'component/footer.php'; ?>
	<!--/footer-->

	<div id="toTop"></div>
	<!-- Back to top button -->

	<!-- COMMON SCRIPTS -->
	<script src="js/jquery-2.2.4.min.js"></script>
	<script src="js/common_scripts.min.js"></script>
	<script src="js/functions.js"></script>
	
	<!-- REVOLUTION SLIDER SCRIPTS -->
	<script type="text/javascript" src="rev-slider-files/js/jquery.themepunch.tools.min.js"></script>
	<script type="text/javascript" src="rev-slider-files/js/jquery.themepunch.revolution.min.js"></script>
	<script type="text/javascript" src="rev-slider-files/js/extensions/revolution.extension.actions.min.js"></script>
	<script type="text/javascript" src="rev-slider-files/js/extensions/revolution.extension.carousel.min.js"></script>
	<script type="text/javascript" src="rev-slider-files/js/extensions/revolution.extension.kenburn.min.js"></script>
	<script type="text/javascript" src="rev-slider-files/js/extensions/revolution.extension.layeranimation.min.js"></script>
	<script type="text/javascript" src="rev-slider-files/js/extensions/revolution.extension.migration.min.js"></script>
	<script type="text/javascript" src="rev-slider-files/js/extensions/revolution.extension.navigation.min.js"></script>
	<script type="text/javascript" src="rev-slider-files/js/extensions/revolution.extension.parallax.min.js"></script>
	<script type="text/javascript" src="rev-slider-files/js/extensions/revolution.extension.slideanims.min.js"></script>
	<script type="text/javascript" src="rev-slider-files/js/extensions/revolution.extension.video.min.js"></script>
	<script type="text/javascript">
			var tpj=jQuery;
			var revapi72;
			tpj(document).ready(function() {
				if(tpj("#rev_slider_72_1").revolution == undefined){
					revslider_showDoubleJqueryError("#rev_slider_72_1");
				}else{
					revapi72 = tpj("#rev_slider_72_1").show().revolution({
						sliderType:"standard",
						jsFileLocation:"rev-slider-files/js/",
						sliderLayout:"auto",
						dottedOverlay:"none",
						delay:9000,
						navigation: {
							keyboardNavigation:"off",
							keyboard_direction: "horizontal",
							mouseScrollNavigation:"off",
                             mouseScrollReverse:"default",
							onHoverStop:"off",
							touch:{
								touchenabled:"on",
								touchOnDesktop:"off",
								swipe_threshold: 75,
								swipe_min_touches: 1,
								swipe_direction: "horizontal",
								drag_block_vertical: false
							}
							,
							arrows: {
								style:"gyges",
								enable:true,
								hide_onmobile:true,
								hide_under:560,
								hide_onleave:true,
								hide_delay:200,
								hide_delay_mobile:1200,
								tmp:'',
								left: {
									h_align:"left",
									v_align:"center",
									h_offset:20,
                                    v_offset:0
								},
								right: {
									h_align:"right",
									v_align:"center",
									h_offset:20,
                                    v_offset:0
								}
							}
						},
						visibilityLevels:[1240,1024,778,480],
						gridwidth:1240,
						gridheight:600,
						lazyType:"none",
						shadow:0,
						spinner:"spinner0",
						stopLoop:"off",
						stopAfterLoops:-1,
						stopAtSlide:-1,
						shuffle:"off",
						autoHeight:"off",
						disableProgressBar:"on",
						hideThumbsOnMobile:"off",
						hideSliderAtLimit:0,
						hideCaptionAtLimit:0,
						hideAllCaptionAtLilmit:0,
						debugMode:false,
						fallbacks: {
							simplifyAll:"off",
							nextSlideOnWindowFocus:"off",
							disableFocusListener:false,
						}
					});
				}
			});	/*ready*/
	</script>

</body>

</html>