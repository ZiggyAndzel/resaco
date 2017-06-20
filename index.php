<?php
	if (isset($_POST["submit"])) {
		$name = $_POST['name'];
		$email = $_POST['email'];
		$compName = $_POST['compName'];
		$message = $_POST['message'];
		$human = intval($_POST['human']);
		$from = 'PYTANIE'; 
		$to = 'magdalena.preisner@resaco.pl'; 
		$subject = 'PYTANIE: ';
		$subject .= $_POST['name'];
		
		$body = "$name\n";
		$body .= "$compName\n";
		$body .= "$email\n\n";
		$body .= "PYTANIE:\n";
		$body .= "$message\n";
		
		if (!$_POST['email'] || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
			$errEmail = 'Podaj poprawny adres email';
		}
 
		if (!$errEmail) {
			if (mail ($to, $subject, $body, $from)) {
				$result='<div class="alert alert-success">Dziękujemy za złożenie zamówienia. Wkrótce skontaktujemy się w celu potwierdzenia!</div>';
			} else {
				$result='<div class="alert alert-danger">Coś poszło nie tak. Prosimy o ponowne złożenie zamówienia.</div>';
			}
		}
	}
?>
<!DOCTYPE html>
<html lang="pl-PL">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
		<title>Resaco</title>
		<link href="https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300" rel="stylesheet">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="css/bootstrap.css">
		<link rel="stylesheet" href="css/style.css">
		<link rel="stylesheet" href="css/responsive.css">
		<link rel="stylesheet" href="css/animate.css">
		<link rel="stylesheet" href="css/lightbox.css">
	</head>
	<body>
		<nav class="navbar navbar-default animated">
			<div class="container">
				<a class="navbar-brand">
					<img class="welcome-logo" src="./images/resaco-logo.png" alt="Resaco" />
				</a>
				<!-- Toggle -->
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#collapse-1" aria-expanded="false">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
				</div>
				<!-- Navigation -->
				<div class="collapse navbar-collapse" id="collapse-1">
					<ul class="nav navbar-nav navbar-right">
						<li><a class="site-link" href="#section2">O firmie<span class="sr-only">(current)</span></a></li>
						<li><a class="site-link go-to-offer" href="#section3">Oferta</a></li>
						<li><a class="site-link go-to-offer" href="#section4">Galeria</a></li>
						<li class="dropdown">
						<a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Nasze produkty<span class="caret"></span></a>
						<ul class="dropdown-menu">
							<li><a class="site-link go-to-film" href="#section3">Rękawy foliowe</a></li>
							<li><a class="site-link go-to-bags" href="#section3">Worki</a></li>
							<li role="separator" class="divider"></li>
							<li><a class="site-link go-to-calc" href="#section3">Kalkulator folii</a></li>
						</ul>
						</li>
						<li><a class="site-link" href="#section5">Kontakt</a></li>
					</ul>
				</div><!-- /.navbar-collapse -->
			</div><!-- /.container -->
		</nav>
		<section class="hero">
			<img src="./images/resaco-logo.png" alt="Resaco" />
			<div class="welcome-graphic">
				<h1 class="h1-welcome animated">Producent folii i worków</h1>
				<a class="site-link" href="#section1">
					<button id="bt-enter" class="btn btn-lg btn-success animated">Wejdź</button>
				</a>
			</div>
			<div id="slider" class="carousel slide">
				<ol class="carousel-indicators">
					<li data-target="#slider" data-slide-to="0" class="active"></li>
					<li data-target="#slider" data-slide-to="1"></li>
					<li data-target="#slider" data-slide-to="2"></li>
				</ol>
				<div class="carousel-inner">
					<div id="s1" class="item active"></div>
					<div id="s2" class="item"></div>
					<div id="s3" class="item"></div>
				</div>
			</div>
		</section>
		<section class="offer">
			<a id="section1"></a>
			<div class="container">
				<div class="row">
					<div id="offer1" class="col col-xs-12 col-sm-12 col-md-4 col-lg-4 animated">
						<a class="site-link go-to-offer" href="#section3"><i class="fa fa-cogs"></i></a>
						<h1>Co produkujemy?</h1>
						<h3>Sprawdź szeroką gamę folii oraz worków znajdujących się
						w naszej ofercie!</h3>
					</div>
					<div id="offer2" class="col col-xs-12 col-sm-12 col-md-4 col-lg-4 animated">
						<a class="site-link go-to-calc" href="#section3"><i class="fa fa-calculator"></i></a>
						<h1>Kalkulator</h1>
						<h3>Nasz kalkulator pozwoli obliczyć Ci parametry oraz
						szacowany koszt Twojego zamówienia.</h3>
					</div>
					<div id="offer3" class="col col-xs-12 col-sm-12 col-md-4 col-lg-4 animated">
						<a class="site-link"  href="#message-form"><i class="fa fa-envelope"></i></a>
						<h1>Skontaktuj się!</h1>
						<h3>Masz więcej pytań, a może chciałbyś nawiązać współpracę?
						Nie czekaj dłużej i napisz do nas!</h3>
					</div>
				</div>
			</div>
		</section>
		<section class="about">
			<a id="section2"></a>
			<div class="container">
				<div id="about1" class="row">
					<p class="first-p animated"><span>N</span>asza firma dzięki długoletniemu doświadczeniu pozwala nam produkować
					folię oraz worki na odpady najwyższej jakości. Zbierając przez lata doświadczenie
					doskonale poznaliśmy wymogi rynku, natomiast wdrożenie najnowszych technologii
					w produkcji pozwoliło nam na jak najlepsze możliwości dostosowania naszych produktów
					indywidualnie do potrzeb klienta. Jesteśmy elastyczną firmą, która docenia partnerstwo
					i gwarantuje niezawodność produktów. Nasze doświadczenie konsekwentnie wzrasta wraz
					z pozyskiwaniem nowych klientów, ponieważ to dzięki nim jesteśmy w stanie wyprodukować
					folię oraz worki na odpady o najwyższym standardzie jakości.</p>
					<p class="second-p animated"><span>J</span>ako profesjonalna firma zdajemy sobie sprawę z tego,
					że dobierając folię oraz worki na odpady należy zwrócić uwagę na kilka
					istotnych czynników, tak aby finalny produkt w pełni spełniał oczekiwania
					klienta zarówno pod względem wielkości jak i użyteczności. Nasze wyroby właśnie
					to zapewniają, ponieważ zarazem są elastyczne i wytrzymałe. Jako producent folii
					i worków jesteśmy w stanie zrealizować każde zamówienie zachowując przy tym najwyższe
					standardy jakości, z tego powodu jesteśmy w stanie dostarczyć naszym klientom szeroki
					wybór opakowań. Również na życzenie klienta worki wykonujemy z regranulatu lub oryginału.</p>
				</div>
			</div>
		</section>
		<section class="gallery">
			<a id="section4"></a>
			<div class="container">
				<div class="row">
					<div class="tab-content">
						<div id="pic-1" class="tab-pane fade in active"></div>
						<div id="pic-2" class="tab-pane fade"></div>
						<div id="pic-3" class="tab-pane fade"></div>
						<div id="pic-4" class="tab-pane fade"></div>
						<div id="pic-5" class="tab-pane fade"></div>
						<div id="pic-6" class="tab-pane fade"></div>
						<div id="pic-7" class="tab-pane fade"></div>
						<div id="pic-8" class="tab-pane fade"></div>
						<div id="pic-9" class="tab-pane fade"></div>
						<div id="pic-10" class="tab-pane fade"></div>
					</div>
					<div id="gallery-navigation">
						<h4><span id="desktop-command">Najedź</span><span id="mobile-command">Dotknij</span>, aby wybrać zdjęcie.</h4>
						<span id="go-left" class="scroller" data-scroll-modifier="-1"><i class="fa fa-angle-left"></i></span>
						<span id="go-right" class="scroller" data-scroll-modifier="1"><i class="fa fa-angle-right"></i></span>
						<div id="scrolling">
							<ul class="nav nav-pills">
								<li class="active thumbs"><a data-toggle="pill" href="#pic-1">
									<img src="./images/img-gal1-sm.jpg" alt="" />
								</a></li>
								<li class="thumbs"><a data-toggle="pill" href="#pic-2">
									<img src="./images/img-gal2-sm.jpg" alt="" />
								</a></li>
								<li class="thumbs"><a data-toggle="pill" href="#pic-3">
									<img src="./images/img-gal3-sm.jpg" alt="" />
								</a></li>
								<li class="thumbs"><a data-toggle="pill" href="#pic-4">
									<img src="./images/img-gal4-sm.jpg" alt="" />
								</a></li>
								<li class="thumbs"><a data-toggle="pill" href="#pic-5">
									<img src="./images/img-gal5-sm.jpg" alt="" />
								</a></li>
								<li class="thumbs"><a data-toggle="pill" href="#pic-6">
									<img src="./images/img-gal6-sm.jpg" alt="" />
								</a></li>
								<li class="thumbs"><a data-toggle="pill" href="#pic-7">
									<img src="./images/img-gal7-sm.jpg" alt="" />
								</a></li>
								<li class="thumbs"><a data-toggle="pill" href="#pic-8">
									<img src="./images/img-gal8-sm.jpg" alt="" />
								</a></li>
								<li class="thumbs"><a data-toggle="pill" href="#pic-9">
									<img src="./images/img-gal9-sm.jpg" alt="" />
								</a></li>
								<li class="thumbs"><a data-toggle="pill" href="#pic-10">
									<img src="./images/img-gal10-sm.jpg" alt="" />
								</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</section>
		<section class="products">
			<a id="section3"></a>
			<div id="products-mask">
			<div id="our-products" class="container animated">
				<div class="row products-title">
					<div class="col title-col col-xs-12 col-sm-12 col-md-4 col-lg-4">
						<h1>Nasza Oferta</h1>
					</div>
					<div class="col title-col col-xs-12 col-sm-12 col-md-8 col-lg-8">
					<div class="tabbed-nav">
						<ul class="nav nav-pills nav-justified product-list" role="tablist">
							<li role="presentation" class="intro-products active"><a href="#intro" aria-controls="intro" role="tab" data-toggle="tab"><h3></h3></a></li>
							<li role="presentation" id="tab1" class="animated"><a href="#film" aria-controls="film" role="tab" data-toggle="tab"><h3>Rękawy foliowe</h3></a></li>
							<li role="presentation" id="tab2" class="animated"><a href="#bags" aria-controls="bags" role="tab" data-toggle="tab"><h3>Worki</h3></a></li>
							<li role="presentation" id="tab3" class="animated"><a href="#calculator" aria-controls="caculator" role="tab" data-toggle="tab"><h3>Kalkulator folii</h3></a></li>
						</ul>
					</div>
					</div>
				</div>
				<div class="row product-content">					
					<div class="tab-content inner-content">
						<div role="tabpanel" class="tab-pane fade in active" id="intro">
							<div class="row">
								<div class="col col-xs-12 col-sm-12 col-md-12 col-lg-12">
									<p>Worki i asortyment foliowy odpowiadają wymaganiom higienicznym co potwierdza
									posiadany przez nas Atest Państwowego Zakładu Higieny. Dodatkowo nasze produkty
									zostały poddane badaniom laboratoryjnym, które potwierdzają, że worki oraz folia nie
									posiadają szkodliwych pierwiastków w swoim składzie, w związku z tym mogą być
									poddane procesowi spalania.</p>
									<p>Worki i asortyment foliowy jest dobierany indywidualnie do potrzeb klienta według parametrów:</p>
									<ul>
										<li>grubość,</li>
										<li>rozmiar,</li>
										<li>kolor,</li>
										<li>sposób pakowania,</li>
										<li>ilość worków w pakiecie,</li>
										<li>szerokość zakładek,</li>
										<li>nadruk,</li>
										<li>dziurki w górnej części worka z tasiemką polipropylenową.</li>
									</ul>
								</div>
							</div>
						</div>
						<div role="tabpanel" class="tab-pane fade" id="film">
							<div class="row">
								<div class=" col col-xs-12 col-sm-12 col-md-3 col-lg-3">
									<ul class="nav nav-pills nav-stacked" role="tablist">
										<li role="presentation" class="tile active"><a href="#r1" aria-controls="r1" role="tab" data-toggle="tab">Rękaw foliowy</a></li>
										<li role="presentation" class="tile"><a href="#r2" aria-controls="r2" role="tab" data-toggle="tab">Półrękaw foliowy</a></li>
										<li role="presentation" class="tile"><a href="#r3" aria-controls="r3" role="tab" data-toggle="tab">Taśma</a></li>
									</ul>
									<a href="./images/fol.png" data-lightbox="gallery2"><img src="./images/fol.png" /></a>
								</div>
								<div class="col col-xs-12 col-sm-12 col-md-9 col-lg-9">
									<div class="tab-content inner-description">
										<p>Jesteśmy w stanie wyprodukować półrękaw oraz rękaw foliowy w rozmaitych kolorach
										zależnie od preferencji klienta. Do najczęściej produkowanych przez nas kolorów
										zaliczamy: żółty, zielony, niebieski, brązowy, czerwony, biały i transparentny.
										W zależności od przeznaczenia, rękaw foliowy może być przezroczysty lub
										nieprzezroczysty. Na zamówienie klienta rękaw foliowy może posiadać logo oraz
										dane firmy zlecającej produkcję.</p>
										<div role="tabpanel" class="tab-pane fade in active" id="r1">
											<table class="table">
												<tr class="table-title">
													<td>Rodzaj</td>
													<td>Surowiec</td>
												</tr>
												<tr>
													<td>Rękaw</td>
													<td>Oryginał/regranulat</td>
												</tr>
												<tr>
													<td>Rękaw</td>
													<td>Oryginał/regranulat</td>
												</tr>
												<tr>
													<td>Rękaw + nadruk jednokolorowy</td>
													<td>Oryginał/regranulat</td>
												</tr>
												<tr>
													<td>Rękaw + nadruk dwukolorowy</td>
													<td>Oryginał/regranulat</td>
												</tr>
											</table>
										</div>
										<div role="tabpanel" class="tab-pane fade" id="r2">
											<table class="table">
												<tr class="table-title">
													<td>Rodzaj</td>
													<td>Surowiec</td>
												</tr>
												<tr>
													<td>Półrękaw</td>
													<td>Oryginał/regranulat</td>
												</tr>
												<tr>
													<td>Półrękaw</td>
													<td>Oryginał/regranulat</td>
												</tr>
												<tr>
													<td>Półrękaw + nadruk jednokolorowy</td>
													<td>Oryginał/regranulat</td>
												</tr>
												<tr>
													<td>Półrękaw + nadruk dwukolorowy</td>
													<td>Oryginał/regranulat</td>
												</tr>
											</table>
										</div>
										<div role="tabpanel" class="tab-pane fade" id="r3">
											<table class="table">
												<tr class="table-title">
													<td>Rodzaj</td>
													<td>Surowiec</td>
												</tr>
												<tr>
													<td>Taśma</td>
													<td>Oryginał/regranulat</td>
												</tr>
												<tr>
													<td>Taśma</td>
													<td>Oryginał/regranulat</td>
												</tr>
												<tr>
													<td>Taśma + nadruk jednokolorowy</td>
													<td>Oryginał/regranulat</td>
												</tr>
												<tr>
													<td>Taśma + nadruk dwukolorowy</td>
													<td>Oryginał/regranulat</td>
												</tr>
											</table>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div role="tabpanel" class="tab-pane fade" id="bags">
							<div class="row">
								<div class="col col-xs-12 col-sm-12 col-md-3 col-lg-3">
									<ul class="nav nav-pills nav-stacked" role="tablist">
										<li role="presentation" class="tile active"><a href="#1" aria-controls="1" role="tab" data-toggle="tab">Worki na rolkach czarne</a></li>
										<li role="presentation" class="tile"><a href="#2" aria-controls="2" role="tab" data-toggle="tab">Worki na rolkach kolorowe</a></li>
										<li role="presentation" class="tile"><a href="#3" aria-controls="3" role="tab" data-toggle="tab">Worki do selektywnej zbiórki</a></li>
										<li role="presentation" class="tile"><a href="#4" aria-controls="4" role="tab" data-toggle="tab">Inne rodzaje</a></li>
									</ul>
								</div>
								<div class="col col-xs-12 col-sm-12 col-md-9 col-lg-9">
									<div class="tab-content inner-description">
										<p>Jako firma od lat zajmująca się produkcją worków na odpady zdajemy sobie sprawę
										z tego, że dobierając worki należy zwrócić uwagę na szereg istotnych czynników,
										takich jak grubość, rozmiar nadruk czy kolor. Doskonale zdajemy sobie sprawę z tego,
										że finalny produkt w pełni musi spełniać oczekiwania klienta, dlatego worki naszej
										produkcji są zarówno elastyczne jak i wytrzymałe. Wiemy, że worek musi być gruby
										oraz wystarczająco plastyczny, aby spełnił najważniejsze wymagania konsumenta jakimi
										są prostota i wygoda jego użytkowania.</p>
										<div role="tabpanel" class="tab-pane fade in active" id="1">
											<table class="table">
												<tr class="table-title">
													<td>Pojemność worka</td>
													<td>Ilość sztuk na rolce</td>
													<td>Rozmiar worka</td>
													<td>Grubość worka</td>
												</tr>
												<tr>
													<td>Worki 35l</td>
													<td>15 sztuk na rolce</td>
													<td>500x600 mm</td>
													<td>18 &mu;m</td>
												</tr>
												<tr>
													<td>Worki 35l</td>
													<td>50 sztuk na rolce</td>
													<td>500x600 mm</td>
													<td>18 &mu;m</td>
												</tr>
												<tr>
													<td>Worki 60l</td>
													<td>10 sztuk na rolce</td>
													<td>600x800 mm</td>
													<td>19 &mu;m</td>
												</tr>
												<tr>
													<td>Worki 60l</td>
													<td>50 sztuk na rolce</td>
													<td>600x800 mm</td>
													<td>19 &mu;m</td>
												</tr>
												<tr>
													<td>Worki 120l</td>
													<td>10 sztuk na rolce</td>
													<td>700x1050 mm</td>
													<td>25 &mu;m</td>
												</tr>
												<tr>
													<td>Worki 120l</td>
													<td>25 sztuk na rolce</td>
													<td>700x1050 mm</td>
													<td>25 &mu;m</td>
												</tr>
												<tr>
													<td>Worki 160l</td>
													<td>10 sztuk na rolce</td>
													<td>900x1100 mm</td>
													<td>30 &mu;m</td>
												</tr>
												<tr>
													<td>Worki 240l</td>
													<td>10 sztuk na rolce</td>
													<td>900x1400 mm</td>
													<td>35 &mu;m</td>
												</tr>
											</table>
										</div>
										<div role="tabpanel" class="tab-pane fade" id="2">
											<table class="table">
												<tr class="table-title">
													<td colspan="4">
														<h4>*Dostępne w kolorach:  zielony, żółty, czerwony, niebieski.</h4>
													</td>
												</tr>
												<tr class="table-title">
													<td>Pojemność worka</td>
													<td>Ilość sztuk na rolce</td>
													<td>Rozmiar worka</td>
													<td>Grubość worka</td>
												</tr>
												<tr>
													<td>Worki 35l</td>
													<td>50 sztuk na rolce</td>
													<td>500x600 mm</td>
													<td>18 &mu;m</td>
												</tr>
												<tr>
													<td>Worki 60l</td>
													<td>50 sztuk na rolce</td>
													<td>600x800 mm</td>
													<td>19 &mu;m</td>
												</tr>
												<tr>
													<td>Worki 120l</td>
													<td>25 sztuk na rolce</td>
													<td>700x1050 mm</td>
													<td>25 &mu;m</td>
												</tr>
												<tr>
													<td>Worki 160l</td>
													<td>10 sztuk na rolce</td>
													<td>900x1100 mm</td>
													<td>30 &mu;m</td>
												</tr>
											</table>
										</div>
										<div role="tabpanel" class="tab-pane fade" id="3">
											<table class="table">
												<tr class="table-title">
													<td>Pojemność worka</td>
													<td>Kolor / Przeznaczenie</td>
													<td>Rozmiar worka</td>
													<td>Grubość worka</td>
												</tr>
												<tr>
													<td>Worki 120l</td>
													<td>Worek żółty na plastik</td>
													<td>700x1050 mm</td>
													<td>30 &mu;m</td>
												</tr>
												<tr>
													<td>Worki 120l</td>
													<td>Zielony / szkło</td>
													<td>700x1050 mm</td>
													<td>60 &mu;m</td>
												</tr>
												<tr>
													<td>Worki 80l</td>
													<td>Zielony / szkło</td>
													<td>500x1050 mm</td>
													<td>60 &mu;m</td>
												</tr>
												<tr>
													<td>Worki 120l</td>
													<td>Niebieski / makulatura</td>
													<td>700x1050 mm</td>
													<td>40 &mu;m</td>
												</tr>
												<tr>
													<td>Worki 120l</td>
													<td>Brązowy / odpady biodegradowalne</td>
													<td>700x1050 mm</td>
													<td>50 &mu;m</td>
												</tr>
												<tr>
													<td>Worki 120l</td>
													<td>Czarny / odpady komunalne</td>
													<td>700x1050 mm</td>
													<td>50 &mu;m</td>
												</tr>
												<tr>
													<td>Worki 80l</td>
													<td>Szary, czarny / popiół</td>
													<td>500x1050 mm</td>
													<td>60 &mu;m</td>
												</tr>
											</table>
										</div>
										<div role="tabpanel" class="tab-pane fade" id="4">
											<table class="table">
												<tr class="table-title">
													<td>Pojemność worka</td>
													<td>Kolor / Przeznaczenie</td>
													<td>Rozmiar worka</td>
													<td>Grubość worka</td>
												</tr>
												<tr>
													<td>Worki 30l</td>
													<td>Brykiet/pellet</td>
													<td>350x590 mm</td>
													<td>60 &mu;m</td>
												</tr>
												<tr>
													<td>Worki 30l</td>
													<td>Brykiet/pellet + nadruk jednokolorowy</td>
													<td>350x590 mm</td>
													<td>60 &mu;m</td>
												</tr>
												<tr>
													<td>Worki 30l</td>
													<td>Brykiet/pellet + nadruk dwukolorowy</td>
													<td>350x590 mm</td>
													<td>60 &mu;m</td>
												</tr>
												<tr>
													<td>Worki 120l</td>
													<td>Czarny, szary / gruz</td>
													<td>700x1050 mm</td>
													<td>100 &mu;m</td>
												</tr>
												<tr>
													<td>Worki 240l</td>
													<td>Czarny, szary / gruz</td>
													<td>900x1050 mm</td>
													<td>120 &mu;m</td>
												</tr>
												<tr>
													<td>Worki 80l</td>
													<td>Niebieski / odpady medyczne</td>
													<td>500x1050 mm</td>
													<td>60 &mu;m</td>
												</tr>
												<tr>
													<td>Worki 80l</td>
													<td>Czerwony / odpady niebezpieczne</td>
													<td>500x1050 mm</td>
													<td>80 &mu;m</td>
												</tr>
												<tr>
													<td>Worki 120l</td>
													<td>Worek do nadleśnictw</td>
													<td>700x1050 mm</td>
													<td>60 &mu;m</td>
												</tr>
											</table>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div role="tabpanel" class="tab-pane fade" id="calculator">
							<div class="row">
								<div id="calc-info" class="inner-description">
									<div class="col col-xs-12 col-sm-6 col-lg-6">
										<h2>Podaj podstawowe parametry, aby obliczyć sugerowaną
										cenę oraz przydatne informacje o produkcie, który zamawiasz.</h2>
										<p>Jeśli chcesz poznać więcej szczegółów na temat naszych produktów lub masz
										inne pytania skontaktuj się z nami poprzez <a href="#message-form" class="site-link">formularz kontaktowy</a>.</p>
									</div>
									<div class="col col-xs-12 col-sm-6 col-lg-6">
										<div id="calc-body">
											<div id="calc-row" class="input-data">
												<div id="calc-cell">
													<h3>Szerokość worka:</h3>
												</div>
												<div id="calc-cell">
													<input id="width"></input>
												</div>
												<div id="calc-cell">
													<h3>mm</h3>
												</div>
											</div>
											<div id="calc-row" class="input-data">
												<div id="calc-cell">
													<h3>Długość worka:</h3>
												</div>
												<div id="calc-cell">
													<input id="length"></input>
												</div>
												<div id="calc-cell">
													<h3>mm</h3>
												</div>
											</div>
											<div id="calc-row" class="input-data">
												<div id="calc-cell">
													<h3>Grubość folii:</h3>
												</div>
												<div id="calc-cell">
													<input type="number" min="5" max="200" step="1" id="thickness"></input>
												</div>
												<div id="calc-cell">
													<h3>&mu;m <span>(0.001mm)</span></h3>
												</div>
											</div>
											<div id="calc-row" class="input-data">
												<button type="submit" onclick="countFilm()">Oblicz wagę</button>
											</div>
											<div id="calc-row" class="outcome">
												<div id="outcome-cell">
													<h3>Jeden worek waży:</h3>
												</div>
												<div id="outcome-cell">
													 <span id="output">-</span>
												</div>
											</div>
											<div id="calc-row" class="outcome">
												<div id="outcome-cell">
													<h3>Sztuk z kilograma:</h3>
												</div>
												<div id="outcome-cell">
													<span id="piece-per-kg">-</span>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<section class="contact-form">
			<a id="message-form"></a>
			<div class="container">
				<h1>Napisz do nas</h1>
				<form class="form-horizontal" role="form" method="post" action="index.php">
					<div class="row">
						<div class="col col-xs-12 col-md-6 col-lg-6">
							<input type="name" name="name" class="form-control animated" id="name" placeholder="Imię i Nazwisko" value="<?php echo htmlspecialchars($_POST['name']); ?>">
							<input type="email" name="email" class="form-control animated" id="email" placeholder="Email" value="<?php echo htmlspecialchars($_POST['email']); ?>">
							<?php echo "<p class='text-warning'>$errEmail</p>";?>
							<input type="compName" name="compName" class="form-control animated" id="compName" placeholder="Nazwa firmy" value="<?php echo htmlspecialchars($_POST['compName']); ?>">
						</div>
						<div class="col col-xs-12 col-md-6 col-lg-6">
							<textarea id="message" name="message" class="form-control animated" placeholder="Wiadomość" rows="10"></textarea>
						</div>
					</div>
					<div class="row">
						<button id="submit" name="submit" type="submit" value="Send" class="btn btn-danger animated">Wyślij wiadomość</button>
					</div>
				</form>
			</div>
		</section>
		<section id="section5" class="footer">
			<div class="container">
				<div class="row">
					<div class="col col-xs-12 col-sm-6 col-md-6 col-lg-6">
						<table>
							<tr><td><img src="./images/resaco-logo.png" /></td></tr>
							<tr><td>ul. Słowiańska 2c</td></tr>
							<tr><td>75-846 Koszalin</td></tr>
							<tr><td>NIP: 669-25-20-172</td></tr>
							<tr><td>info@resaco.pl</td></tr>
						</table>
					</div>
					<div class="col col-xs-12 col-sm-6 col-md-6 col-lg-6">
						<table>
							<tr><td><h2>Specjalista ds. sprzedaży</h2></td></tr>
							<tr><td>Magdalena Preisner</tr>
							<tr><td>+48 786 864 908</td></tr>
							<tr><td>magdalena.preisner@resaco.pl</td></tr>
							<tr><td>
								<a class="site-link" href="#message-form"><button id="btn-message" class="btn btn-success animated">Napisz do nas</button></a>
							</td></tr>
						</table>
					</div>
				</div>
			</div>
			<div id="map-canvas">
				<iframe id="map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2335.0978498297077!2d16.169188715559248!3d54.17834288016184!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4701cce012c005e5%3A0xdf8356ec7a2fe0d1!2sS%C5%82owia%C5%84ska+2%2C+75-846+Koszalin!5e0!3m2!1spl!2spl!4v1486463543421" <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2444.229111029695!2d20.96256691547113!3d52.22105517975872!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x471ecca09eebe8fb%3A0xdfcaefc5ce65611e!2sWarszawa+Zachodnia!5e0!3m2!1spl!2spl!4v1486464120202" frameborder="0" allowfullscreen></iframe>
			</div>
			<div class="copyrights">
				<span><p>&#x24B8; 2017 Resaco | Designed by <a href="http://www.zbigniewandzel.pl">Z.Andzel</a></p></span>
			</div>
		</section>
		<script src="https://code.jquery.com/jquery-3.0.0.min.js" integrity="sha256-JmvOoLtYsmqlsWxa7mDSLMwa6dZ9rrIdtrrVYRnDRH0=" crossorigin="anonymous"></script>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
		<script type="text/javascript" src="js/bootstrap.js"></script>
		<script type="text/javascript" src="js/script.js"></script>
		<script type="text/javascript" src="js/jquery.waypoints.min.js"></script>
		<script type="text/javascript" src="js/lightbox.min.js"></script>
	</body>
</html>