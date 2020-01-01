	<footer>
		<div class="container">
			<div class="row">
				<div class="col-lg-3" style="text-align: center;">
					<img src="img/logo.png" width="70%"/>
				</div>
				<div class="col-lg-3">
					<h6>LOKAL GINIBEER</h6>
					<div style="color: gray;">Zapraszamy do naszego lokalu od poniedziałku do soboty w godzinach 12 - 24</div><br />
					<i class="fa fa-home footerContactIco"></i>&nbsp; Tarnów 33-100<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Bernardyńska 15/4<br /><!--http://www.tarnowiak.pl/ogloszenie/1184298/tarnow-bernardynska-15-4-lokal-uzytkowy-w-centrum-tarnowa-ul-po-bylym-outlet/-->
					<i class="fa fa-envelope footerContactIco" style="font-size: 14px;"></i>&nbsp; kontakt@ginibeer.pl<br />
					<i class="fa fa-phone footerContactIco"></i>&nbsp; +48 784 099 089<br /><br />
				</div>
				<div class="col-lg-3">
					<h6>O NAS</h6>
					<a href="<?php echo $server."index.php?page=Kontakt"; ?>">> Kontakt</a><br />
					<a href="<?php echo $server."index.php?page=Kontakt"; ?>">> Współpraca</a><br />
					<a href="" data-toggle="modal" data-target="#rekrutacja" >> Rekrutacja do zespołu</a><br />
					<a href="<?php echo $server."index.php?page=Oferta"; ?>"> > Oferta</a><br />
				</div>
				<div class="col-lg-3">
					<h6>NEWSLETTER</h6>
					<form action=""><input type="text" name="mail" class="newsletterInput" /><button type="submit" class="newsletterButton">Wyślij</button></form><br />
					Zapisując się na nasz newsletter akceptujesz <b><a href="" data-toggle="modal" data-target="#regulamin" >Regulamin</a></b> i <b><a href="" data-toggle="modal" data-target="#polityka" >Politykę Prywatności</a></b>
				</div>
			</div>
			<div class="row">
			<div class="col-lg-3">
					<h6>POMOC</h6>
					<a href="" data-toggle="modal" data-target="#faq" >> FAQ</a><br />
					<a href="" data-toggle="modal" data-target="#zamowienia" >> Zamówienia online</a><br />
					<a href="" data-toggle="modal" data-target="#formularzNewsletter" >> Formularz rezygnacji z newslettera</a><br /><br />
				</div>
				<div class="col-lg-3">
					<h6>ZAINSPIRUJ SIĘ NA</h6>
					<div class="socialBox2">
						<a href="">F</a> <a href="">I</a> <a href="">S</a> <a href="">P</a> <a href="">G</a>
					</div>       
					
				</div>
				<div class="col-lg-3">
					
				</div>
				<div class="col-lg-3 copyright">
				<br /><br />
					© Strona stworzona przez Dominika Pająk<br />
					Praktyki 2018
				</div>
			</div>
		</div>
	</footer>
	<?php 
		include('pages/modal_regulamin.php');
		include('pages/modal_polityka.php');
		include('pages/modal_rekrutacja.php');
		include('pages/modal_faq.php');
		include('pages/modal_zamowienia.php');
		include('pages/modal_newsletter.php');
	?>
	<!-- Bootstrap JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Moje skrypciki -->
    <script src="js/main.js">
	
	</script>
	</body>
</html>