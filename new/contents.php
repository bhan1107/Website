<?php
$page = $_GET['page'];
$mode = $_GET['mode'];
$start = 65;

if($mode == "auto") {
    sleep(2);
    
    $no1 = ($page - 2) * 2 + $start;
    $no2 = $no1 + 1;
    $nextPage = $page + 1;
    
    echo('<div class="content-post">');
	echo('<h1 class="title-text">Japanese Iris</h1>');
	echo('<p class="date-text"><img class="time-icon" src="./114.png"/> Posted on January 2, 2019</p>');
	echo('<div class="article">');
	echo('<p><img class="images" src="./116.jpg"></P>');
	echo('<div class="postmeta">');
	echo('<div>');
	echo('<p class="tag"><img class="time-icon" src="115.png"/> Tag: ');
	echo('<a class="tags" href="https://www.google.com/search?client=firefox-b-ab&q=kyoto" rel="category tag">Kyoto,</a>');
	echo('<a class="tags" href="https://www.google.com/search?hl=en&source=hp&ei=umgxXMzYKIHejgSVnomACw&q=myoshinji&btnK=Google+Search&oq=myo" rel="category tag"> 妙心寺</a></p>');
	echo('</div>
				</div>
			</div>
		</div>');
						
					
    if($page < 5) {
        echo('<div class="next"><a href="contents.php?mode=auto&page='.$nextPage.'" class="nextPage">다음 페이지</a></div>');
    }
}
?>