<!DOCTYPE HTML>
<!--
	Spectral by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<?php
session_start();
if(!empty($_SESSION['name']))
{
    $user=$_SESSION['name'];
   

if((isset($_COOKIE['username']))&&($_COOKIE['username']==$user)){
    header('Location:gestionaredb.php');
}}
?>

<html>
	<head>
		<title>Jucatori de fotbal</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
	</head>
	<body class="landing is-preload">

		<!-- Page Wrapper -->
			<div id="page-wrapper">

				<!-- Header -->
					<header id="header" class="alt">
						<h1><a href="index.html">Jucatori de fotbal</a></h1>
						<nav id="nav">
							<ul>
								<li class="special">
									<a href="#menu" class="menuToggle"><span>Meniu</span></a>
									<div id="menu">
										<ul>
											<li><a href="index.php">Acasă</a></li>
											
											<li><a href="elements.php">Contact</a></li>
											<!--<li><a href="contact.php">Sign Up</a></li>-->
											<li><a href="login1.php">Conectează-te</a></li>
										</ul>
									</div>
								</li>
							</ul>
						</nav>
					</header>

				<!-- Banner -->
					<section id="banner">
						<div class="inner">
							<h2>Jucatori de fotbal</h2>
							
							<ul class="actions special">
                                                            <li><a href="register.php" class="button primary">ÎNREGISTREZĂ-TE</a></li><br>
                                                            <li><a href="jucatori.xml" class="button primary">TABEL</a></li>
                                                            <br>
                                                            <li><a href="mathml.xml" class="button primary">DESEN</a></li>
							</ul>
						</div>
						<a href="#one" class="more scrolly">Află mai multe</a>
					</section>

				<!-- One -->
					<section id="one" class="wrapper style3 special ">
						<div class="inner">
                                                  

<form name="search_form" method="post" action="search.php">
    <br>
Caută: <input type="text" name="search_box" value=""/>
<br>
<input type="submit" name="search" value="Caută"> 
<echo "   ">
<input type="reset" value="Resetează"/>
</form>
 
                                                </div>
						
                                  </section>   
                                <?php
 $xml_data=simplexml_load_file("data_img.xml") or die ("Error:Object Creation failure");?>



    <?php
     foreach($xml_data->children()as $data){?>
					<section id="two" class="wrapper alt style2">
						<section class="spotlight">
                                                    <div class="image"><img src="<?php echo $data->src;?>"width="100" height="500"></div><div class="content">
								<h2><?php echo $data->title;?><br/>
								</h2>
                                                        <p><a <?php echo "<a href=".$data->view.""?> class="button primary">View</a></p>
							</div>
                                                </section><br>
                                             <?php } ?> 
						
					

				<!-- CTA -->
					<section id="cta" class="wrapper style4">
						<div class="inner">
						 
						</div>
					</section>
                                
                                

				<!-- Footer -->
					<footer id="footer">
						<ul class="icons">
							<li><a href="#" class="icon brands fa-twitter"><span class="label">Twitter</span></a></li>
							<li><a href="#" class="icon brands fa-facebook-f"><span class="label">Facebook</span></a></li>
							<li><a href="#" class="icon brands fa-instagram"><span class="label">Instagram</span></a></li>
							<li><a href="#" class="icon brands fa-dribbble"><span class="label">Dribbble</span></a></li>
							<li><a href="#" class="icon solid fa-envelope"><span class="label">Email</span></a></li>
						</ul>
						<ul class="copyright">
							<li>&copy;</li><li>Facultatea de Matematică</li>
						</ul>
					</footer>

			</div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.scrollex.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>
                        <script src="assets/js/1.js"></script>
                       <!-- <script src="assets/js/2.js"></script>-->

	</body>
</html>
