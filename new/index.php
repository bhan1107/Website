<!DOCTYPE html>
<html>
	<head>
	
	<meta charset="utf-8">
	<title> My Website for CISC282 </title>
	<meta name="author" content="Ben Han (Dongho Han)">
	<link rel="stylesheet" href="./new.css">
	<script src="new.js"></script>
	<script src="https://code.jquery.com/jquery-1.11.0.min.js"></script>
	<script type="text/javascript" src="./jquery.jscroll.js"></script>


	</head>
	
	<body>
		<h1 id="custom-header"><a href="http://benhan.ddns.net" title="Website Banner"><img src="./banner5.png" width="auto" height="100px" alt="BEN HAN" />BEN HAN</a></h1>
			
	<div class="row">

		<nav id="navigation" class="navigation-main" role="navigation">
			<span class="menu-toggle">Menu</span>
				<div class="menu-street-container"><ul id="menu-street" class="menu">
					<li class="menu-item"><a href="http://benhan.ddns.net">Home</a></li>
					<li class="menu-item"><a href="http://bhan1107.ddns.net:5000">NAS</a></li>
					<li class="menu-item"><a href="http://benhan.ddns.net/contact">Contact</a></li>
					</ul></div>
		</nav>
	</div>

	<div id="wrapper">
		
		<div class="content" id="side-bar">
			<div id="search-text">
				<p>Search</p>
			</div>
			<div class="box">
				<div class="container-1">
				<span class="icon"><i class="fa fa-search"></i></span>
				<input type="text" id="search-box" placeholder="Search..." />
				</div>
			</div>
			<script>
			$(document).ready(function(){
				$("#search-box").on("keyup", function() {
					var value = $(this).val().toLowerCase();
					$(".content-post").filter(function() {
						$(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
					});
				});
				
				$("#email").click(function() {
					alert( "Send email feature was disabled due to spam" );
				});
				$("#message").prop('disabled', true);
			});
			
			</script>
			
			
			<div class="icon-bar">
				<a href="https://twitter.com"><img  class="twitter-icon" src="./icons/twitter-logo.png"/></a> 
				<a href="./facebook-logo-button.png"><img  class="twitter-icon" src="./icons/facebook-logo.png"/></a> 
				<a href="./linkedin-logo-button.png"><img  class="twitter-icon" src="./icons/linkedin-logo.png"/></a>
			</div>
			
			<div id="email-text">
				<p>Send e-mail</p>
			</div>
			<form action="" method="post">
			<div class="form__group">
				<input name="email" type="text" id="email" class="form__field" placeholder="Your Email">
				<label for="email" class="form__label">Your Email</label>
			</div>
			<div class="form__group">
				<textarea name="message" id="message" class="form__field" placeholder="Your Message" rows="6"></textarea>
				<label for="message" class="form__label">Your Message</label>
			</div>
			</form>
			
			<?php 
				if(isset($_POST['submit'])){
				$to = "bhan1107@gmail.com"; 
				$from = $_POST['email']; 
				$subject = "Form submission";
				$message = $_POST['message'];
				
				$headers = "From:" . $from;
				$headers2 = "From:" . $to;
				mail($to,$subject,$message,$headers);
				echo "Mail Sent. Thank you, we will contact you shortly.";
				}
			?>
			
			<div id="recent-post">
				<p>Recently posted</p>
			</div>
			<div class="gallery-wrapper">
				<div class="column"><img src="./images/temple.jpg" class="gallery"/></div>
				<div class="column"><img src="./images/111.jpg" class="gallery"/></div>
				<div class="column"><img src="./images/116.jpg" class="gallery"/></div>
			</div>
			<script>
			$(document).ready(function(){
				$(".column").click(function() {
					var childElement = $(this).children();
					var imgName = $(childElement).attr('src');
					alert(imgName);
				});
			});
			</script>
			
			
		</div>
		<script>
		$(document).ready(function () {
			$('#autoScroll').jscroll({
			autoTrigger: true,
			loadingHtml: '<div class="next"><img src="./images/loading.gif" alt="Loading" /></div>',
			nextSelector: 'a.nextPage:last'
			});
		});
		</script>
	
	
		<div class="content-post">
			<h1 class="title-text">Japanese Temple</h1>
			<div class="date-text">
				<p><img class="time-icon" src="./icons/119.png"/> 
				Posted on January 3, 2019</p>
			</div>
			<div class="article">
				<p><img class="images" src="./images/temple.jpg"></P>
				<div class="postmeta">
					<div>
						<p class="tag"><img class="time-icon" src="./icons/115.png"/> Tag: 
						<a class="tags" href="https://www.google.com/search?client=firefox-b-ab&q=kyoto" rel="category tag">Kyoto,</a>
						<a class="tags" href="https://www.google.com/search?hl=en&source=hp&ei=umgxXMzYKIHejgSVnomACw&q=myoshinji&btnK=Google+Search&oq=myo" rel="category tag"> 妙心寺</a>
						</p>
						
					</div>
				</div>
			</div>
		</div>
		
		<div class="content-post">
			<h1 class="title-text">A Town With an Ocean View</h1>
			<p class="date-text"><img class="time-icon" src="./icons/114.png"/> Posted on January 2, 2019</p>
			<div class="article">
				<p><img class="images" src="./images/111.jpg"></P>
				<div class="postmeta">
					<div>
						<p class="tag"><img class="time-icon" src="./icons/115.png"/> Tag: 
						<a class="tags" href="https://www.google.com/search?client=firefox-b-ab&q=kyoto" rel="category tag">Kyoto,</a>
						<a class="tags" href="https://www.google.com/search?client=firefox-b-ab&q=kyoto" rel="category tag"> Village name IDK</a>
						</p>
						
					</div>
				</div>
			</div>
		</div>
		
		<div class="content-post">
			<h1 class="title-text">Japanese Iris</h1>
			<p class="date-text"><img class="time-icon" src="./icons/114.png"/> Posted on January 2, 2019</p>
			<div class="article">
				<p><img class="images" src="./images/116.jpg"></P>
				<div class="postmeta">
					<div>
						<p class="tag"><img class="time-icon" src="./icons/115.png"/> Tag: 
						<a class="tags" href="https://www.google.com/search?client=firefox-b-ab&q=kyoto" rel="category tag">Kyoto,</a>
						<a class="tags" href="https://www.google.com/search?hl=en&source=hp&ei=umgxXMzYKIHejgSVnomACw&q=myoshinji&btnK=Google+Search&oq=myo" rel="category tag"> 妙心寺</a>
						</p>
						
					</div>
				</div>
			</div>
		</div>
		
		<div class="scroll" id="autoScroll">
			<div class="content-post"><a href="contents.php?mode=auto&page=2" class="nextPage">다음 페이지</a></div>
		</div>
		
	
	</div>
	<div id="thanks">
	Icons made by <a href="https://www.flaticon.com/authors/freepik" title="Freepik">Freepik</a> from <a href="https://www.flaticon.com/" 		    title="Flaticon">www.flaticon.com</a> is licensed by <a href="http://creativecommons.org/licenses/by/3.0/" 		    title="Creative Commons BY 3.0" target="_blank">CC 3.0 BY</a>
	</div>
	</body>
	
</html>
