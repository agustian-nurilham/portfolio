<!DOCTYPE html>
  <html>
    <head>
      <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	  <!--Import materialize.css-->		
      <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
	  <link rel="stylesheet" href="css/style.css"/>	
	  <link rel="stylesheet" href="css/animation.css"/>	
      <!--Let browser know website is optimized for mobile-->
	  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	  <script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
    </head>

<body>
<!-- event preloader -->
<div class="preloader">
	<div class="loading">
		<img src="img/load2.gif" width="80">
		<p>Harap Tunggu</p>
	</div>
</div>

<!-- event floating action button -->
<div class="fixed-action-btn">
  <a class="btn-floating btn white" href="#homepage">
    <img src="img/up.png" width="40px">
  </a>
</div>

<div class="header" id="homepage"> 	<!-- section header -->
<!-- navbar -->
<nav class="N/A transparent nav-menu">
	<div class="nav-wrapper">
		<a href="#!" class="brand-logo"><img src="img/logo.png" class="logo-home"></a>
		<a href="#" data-target="sidemob-togle" class="sidenav-trigger"><img src="img/menu.png"></a>
		<ul class="right hide-on-med-and-down">
			<li><a href='#about'>Who Am I</a></li>
			<li><a href="#skill">Skill</a></li>
			<li><a href="#academy">Academy</a></li>
			<li><a href="#portfolio">Portfolio</a></li>			
		</ul>
	</div>	
</nav>
<!-- list menu mobile version -->
<ul class="sidenav nav-menu" id="sidemob-togle">
	<h3>menu</h3>
	<li><a href="#about">Who Am I</a></li>
	<li><a href="#skill">Skill</a></li>
	<li><a href="#academy">Academy</a></li>
	<li><a href="#portfolio">Portfolio</a></li>	
</ul>
<!-- view header/ menu utama -->
	<div class="row konten-head" style="margin-bottom: -10px;">
		<div class="col s12 m3" align="center">
				<img class="profimg" src="img/profil2.png"/>
				<div class="hide-on-small-only boxhead1"></div>
		</div>
		<div class="col s12 m9">
			<div class="texthead">
				<h4>ILHAM NUR AGUSTIAN</h4>
				<hr class="line-head left"> <br>
				<h5>Junior Web Programmer</h5> <br>
				<h6>"Find you're passion !"</h6>
			</div>
		</div>		
	</div>
	<br><br><br>
	<div class="center">
		<h5>klik here!</h5>
		<a class="btn-floating btn-large pulse white" href="#boxintro"><img src="img/exmore.png"/></a>
	</div>	
</div> 			<!-- ./header -->
	

</div>
<!-- konten web about, skill, academy-->
<div class="boxintro" id="boxintro"></div>
<div class="parallax-container">		<!--parallax for body konten-->
	  <div class="parallax"><img src="img/night.jpg"></div>

<div class="line-title"  id="about"><h5 class="title center">let me introduce my self!</h5><hr class="line-title"></div>

<div class="row konten-web" id="kontenweb">
	<div class="col m6 s12">		<!-- section about -->			
		<div class="title-card-konten center boxlight">
			<div class="row">
			<div class="col m6 s12"><img src="img/profil.jpg" class="profil center"></div>
			<div class="col m6 s12">
				<table class="biodata">
				<tr><td class="txthvr">Ilham Nur Agustian</td></tr>
				<tr><td class="txthvr">Breath was 01 august 2002</td></tr>
				<tr><td class="txthvr">167 cm</td></tr>
				<tr><td class="txthvr">56 kg</td></tr>
				<tr><td class="txthvr">coding, watch anm, rubik</td></tr>	
				</table>
			</div>
			</div>			
		</div>
		<div class="descript-konten boxlight" align="justify">
			Hai !, saya Ilham Nur Agustian <br>
			seorang junior web programmer, skill dan pengalaman dibidang front end belum terlalu banyak.
			Namun, untuk sekedar 
			dasar-dasar saya sudah menguasai html, css, php dan javascript. Tidak hanya itu, saya 
			juga bisa menggunakan beberapa framework seperti bootstrap, materialize, codeigniter, dan react js.
			Kedepannya saya ingin tidak hanya mengusai web programming, tetapi juga menguasai desktop, 
			mobile application, serta desain grafis.
			<h3>"I Want to be an big person !"</h3>
		</div>
	</div>
	<div class="col m6 s12" id="skill">
		<div class="row" >			<!-- section skill -->
			<div class="col m6 s12">		<!-- programming skill -->
				<div class="title-card-konten center boxlight tooltipped" data-position="bottom" data-tooltip="My Programming Skill">
					<img src="img/skill.png" class="imgcoll" />
				</div>
				<div class="descript-konten-skill boxlight">
					<table class="skill">
						<tr>							
							<td width="20%" >HTML</td>					
							<td width="70%"><div class="progress"><div class="determinate" style="width: 65%"></div></div></td>
							<td width="10%">65%</td>
						</tr>
						<tr>
							<td width="20%">CSS</td>
							<td width="70%"><div class="progress"><div class="determinate" style="width: 50%"></div></div></td>
							<td width="10%">50%</td>
						</tr>
						<tr>
							<td width="20%">PHP</td>
							<td width="70%"><div class="progress"><div class="determinate" style="width: 47%"></div></div></td>
							<td width="10%">47%</td>
						</tr>
						<tr>
							<td width="20%">JAVASCRIPT</td>
							<td width="70%"><div class="progress"><div class="determinate" style="width: 23%"></div></div></td>
							<td width="10%">23%</td>
						</tr>
						<tr>
							<td width="20%">MYSQL</td>
							<td width="70%"><div class="progress"><div class="determinate" style="width: 15%"></div></div></td>
							<td width="10%">15%</td>
						</tr>
					</table>
				</div>
			</div>
			<div class="col m6 s12">	<!-- editting skill -->
				<div class="title-card-konten center boxlight  tooltipped" data-position="bottom" data-tooltip="My Editting Skill">
					<img src="img/skill.png" class="imgcoll"/>
				</div>
				<div class="descript-konten-skill boxlight">
					<table class="skills">
						<tr>							
							<td width="20%">PS</td>					
							<td width="70%"><div class="progress"><div class="determinate" style="width: 47%"></div></div></td>
							<td width="10%">47%</td>
						</tr>
						<tr>
							<td width="20%">CDR</td>
							<td width="70%"><div class="progress"><div class="determinate" style="width: 30%"></div></div></td>
							<td width="10%">30%</td>
						</tr>
					</table>
				</div>
			</div>
		</div>
		<div class="row" id="academy">			<!-- section academy -->
			<div class="col m12 s12">
				<div class="title-card-konten center boxlight tooltipped" data-position="bottom" data-tooltip="Academy">
					<img src="img/acd.png" class="imgcoll"/>
				</div>
				<div>
					<div class="row">
						<div class="col m3 s6">							
							<div class="card boxlight">
								<div class="card-image waves-effect waves-block waves-light">
									<img  class="activator" src="img/sd.png">
								</div>
								<div class="card-content">
									<span class="card-title activator grey-text text-darken-4"><h6>Elementary</h6></span>
								</div>
								<div class="card-reveal">
									<span class="card-title grey-text text-darken-4"><b>X</b> close</span>
									<p>2008 - 2013</p>
								</div>
							</div>
						</div>
						<div class="col m3 s6">							
							<div class="card boxlight">
								<div class="card-image waves-effect waves-block waves-light">
									<img  class="activator" src="img/smp.jpg">
								</div>
								<div class="card-content">
									<span class="card-title activator grey-text text-darken-4 center"><h6>Junior</h6></span>
								</div>
								<div class="card-reveal">
									<span class="card-title grey-text text-darken-4"><b>X</b> close</span>
									<p>2014 - 2017</p>
								</div>
							</div>
						</div>
						<div class="col m3 s6">							
							<div class="card boxlight">
								<div class="card-image waves-effect waves-block waves-light">
									<img  class="activator" src="img/smk.png">
								</div>
								<div class="card-content">
									<span class="card-title activator grey-text text-darken-4"><h6>Highschool</h6></span>
								</div>
								<div class="card-reveal">
									<span class="card-title grey-text text-darken-4"><b>X</b> close</span>
									<p>2017 - now</p>
								</div>
							</div>
						</div>
						<div class="col m3 s6">							
							<div class="card boxlight">
								<div class="card-image waves-effect waves-block waves-light">
									<img  class="activator" src="img/soon.png">
								</div>
								<div class="card-content">
									<span class="card-title activator grey-text text-darken-4"><h6>oncoming</h6></span>
								</div>
								<div class="card-reveal">
									<span class="card-title grey-text text-darken-4"><b>X</b> close</span>
									<p>-</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
</div>	<!-- ./parallax konten body -->



<!-- section portfolio -->
<div class="boxintro"></div>
<!-- title portfolio -->
<div class="portfolio center" id="portfolio">
	<div class="row title-portfolio">
		<div class="center line-title"><h4 class="title center">
		My P<img src="img/portf.png" class="card-icon">rtfolio</h4><hr class="line-title"><br>
		</div>
	</div>	
	<div class="row">
		<div class="col m3 s12"><img src="img/prtf1.jpg" alt="that is me" class="profil-portfolio"></div>
		<div class="col m9 s12">		<!-- caroussel galery -->
			<div class="carousel">
				<a class="carousel-item" href="#one!"><img src="img/pict1.png"></a>
				<a class="carousel-item" href="#two!"><img src="img/pict2.png"></a>
				<a class="carousel-item" href="#three!"><img src="img/pict3.jpg"></a>
				<a class="carousel-item" href="#four!"><img src="img/pict4.jpg"></a>
				<a class="carousel-item" href="#five!"><img src="img/pict5.png"></a>
				<a class="carousel-item" href="#five!"><img src="img/pict6.jpg"></a>
			</div>
		</div>			
		<div class="col m9 s12 right portfolio-margin">	<!-- portfolio project web-->
			<div class="progress blue darken-4">
				<div class="indeterminate deep-purple accent-4"></div>
			</div>
			<h5>Project Web</h5>
			<a href="https://agustian-techno.firebaseapp.com/" target="_blank">
				<img class="web-portfolio tooltipped" data-position="bottom" data-tooltip="Web profil company" src="img/prtf2.png" alt="project web">
			</a>
			<a href="http://agustianurilham.rf.gd/" target="_blank">
				<img class="web-portfolio tooltipped" data-position="bottom" data-tooltip="CRUD with php" src="img/prtf3.png" alt="project web">
			</a>
			<a href="">
				<img class="web-portfolio tooltipped" data-position="bottom" data-tooltip="Portfolio" src="img/prtf4.png" alt="project web">
			</a>
		</div>
	</div>
</div>
	<!-- footer section -->
	<footer class="page-footer grey darken-4">
		  <div class="row row-footer">
		    <div class="col m4 s12  center ">
				<img src="img/logo.png" width="200px">
		      <h5 class="white-text">Last word,</h5>
		      <h6>Thanks for visit my portfolio.</h6>
			</div>
			<div class="col m4 menu-footer hide-on-small-only">
				<ul>
					<h5>Menu</h5><br>
					<li><a href="#about">Who Am I</a></li>
					<li><a href="#skill">Skill</a></li>
					<li><a href="#academy">Academy</a></li>
					<li><a href="#portfolio">Portfolio</a></li>	
				</ul>
		    </div>
			<div class="col m4 s12 center">				
			<h5 class="white-text">Follow me</h5>
			<br><br>
				<div class="col s3">
					<a class="txthvr" href="https://www.facebook.com/profile.php?id=100008456045849" target="_blank">
						<img src="img/fb.png" alt="sosmed">
					</a>
				</div>
				<div class="col s3">
					<a class="txthvr" href="https://www.instagram.com/ilhamnuragustian/?hl=id" target="_blank">
						<img src="img/ig.png" alt="sosmed">
					</a>
				</div>
				<div class="col s3">
					<a class="txthvr" href="https://plus.google.com/u/0/111708346090054722588" target="_blank">
						<img src="img/gplus.png" alt="sosmed">
					</a>
				</div>
				<div class="col s3">
					<a class="txthvr" href="https://www.youtube.com/channel/UCTdboeOtk4ANO5FEnUCH4uw?view_as=subscriber" target="_blank">
						<img src="img/yt.png" alt="sosmed">
					</a>
				</div>	
			</div>
			<div class="col m12 center">
			<br><br><br>&copy; 2018 Portfolio | Ilham Nur Agustian <br>
			</div>		   
		  </div>  <!-- ./row  -->
	</footer>

	  <!--JavaScript at end of body for optimized loading-->	
		<script type="text/javascript" src="js/materialize.min.js"></script>
		<script type="text/javascript" src="js/script.js">	
	 	</script>
	</body>
</html>