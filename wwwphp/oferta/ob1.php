<?php
		 
if(!isset($_SESSION))
{
	session_start();
}


# Jeżeli w liki jest '0' nie jest wstawiany link
#!!!!!! ELEMENTÓW W $USŁUGI I $LINKI MA BYĆ TYLE SAMO
function tab($numer_pliku)
{
	switch($numer_pliku)
	{
		case 0:# #bez zobowiązań
		{
			#pakiet mini
			$oferta[0]=array(
			$kanały_1 = Array('102 bez', '60 HD','Smart', 'ABOX42'),
			$uslugi_1 = Array('Multimedia', 'Epg', 'ePVR nagrywarka', 'Catch-UP', 'Start-over', 'eVOD', 'Timeshift', 'e-GO'),
			$linki_1 = Array('http://www.evio.info/nowe-aplikacje-na-dekoderze-ebox-m15/', '0', '0', '0', '0', '0', '0','0' )
			);


			#pakiet mały
			$oferta[1]=array(
			$kanały_1 = Array('102 bez', '60 HD','mały', 'ABOX42'),
			$uslugi_1 = Array('Multimedia', 'Epg', 'ePVR nagrywarka', 'Catch-UP', 'Start-over', 'eVOD', 'Timeshift', 'e-GO'),
			$linki_1 = Array('0', '0', '0', '0', '0', '0', '0', '0')
			);


			#pakiet średni
			$oferta[2]=array(
			$kanały_1 = Array('102 bez', '60 HD','średni', 'ABOX42'),
			$uslugi_1 = Array('Multimedia', 'Epg', 'ePVR nagrywarka', 'Catch-UP', 'Start-over', 'eVOD', 'Timeshift', 'e-GO'),
			$linki_1 = Array('0', '0', '0', '0', '0', '0', '0', '0')
			);


			#pakiet duży
			$oferta[3]=array(
			$kanały_1 = Array('102 bez', '60 HD','duży', 'ABOX42'),
			$uslugi_1 = Array('Multimedia', 'Epg', 'ePVR nagrywarka', 'Catch-UP', 'Start-over', 'eVOD', 'Timeshift', 'e-GO'),
			$linki_1 = Array('0', '0', '0', '0', '0', '0', '0', '0')
			);
			break;
		}
		case 1:# #12 miesięcy
		{
			#pakiet mini
			$oferta[0]=array(
			$kanały_1 = Array('102 12 12', '60 HD','Smart', 'ABOX42'),
			$uslugi_1 = Array('Multimedia', 'Epg', 'ePVR nagrywarka', 'Catch-UP', 'Start-over', 'eVOD', 'Timeshift', 'e-GO'),
			$linki_1 = Array('http://www.evio.info/nowe-aplikacje-na-dekoderze-ebox-m15/', '0', '0', '0', '0', '0', '0','0' )
			);


			#pakiet mały
			$oferta[1]=array(
			$kanały_1 = Array('102 12 12', '60 HD','Smart', 'ABOX42'),
			$uslugi_1 = Array('Multimedia', 'Epg', 'ePVR nagrywarka', 'Catch-UP', 'Start-over', 'eVOD', 'Timeshift', 'e-GO'),
			$linki_1 = Array('0', '0', '0', '0', '0', '0', '0', '0')
			);


			#pakiet średni
			$oferta[2]=array(
			$kanały_1 = Array('102 12 12', '60 HD','Smart', 'ABOX42'),
			$uslugi_1 = Array('Multimedia', 'Epg', 'ePVR nagrywarka', 'Catch-UP', 'Start-over', 'eVOD', 'Timeshift', 'e-GO'),
			$linki_1 = Array('0', '0', '0', '0', '0', '0', '0', '0')
			);


			#pakiet duży
			$oferta[3]=array(
			$kanały_1 = Array('102 12 12', '60 HD','Smart', 'ABOX42'),
			$uslugi_1 = Array('Multimedia', 'Epg', 'ePVR nagrywarka', 'Catch-UP', 'Start-over', 'eVOD', 'Timeshift', 'e-GO'),
			$linki_1 = Array('0', '0', '0', '0', '0', '0', '0', '0')
			);
			break;
		}
		case 2:# #24 miesiące
		{
			#pakiet mini
			$oferta[0]=array(
			$kanały_1 = Array('102 24 24', '60 HD','Smart', 'ABOX42'),
			$uslugi_1 = Array('Multimedia', 'Epg', 'ePVR nagrywarka', 'Catch-UP', 'Start-over', 'eVOD', 'Timeshift', 'e-GO'),
			$linki_1 = Array('http://www.evio.info/nowe-aplikacje-na-dekoderze-ebox-m15/', '0', '0', '0', '0', '0', '0','0' )
			);


			#pakiet mały
			$oferta[1]=array(
			$kanały_1 = Array('102 24 24', '60 HD','Smart', 'ABOX42'),
			$uslugi_1 = Array('Multimedia', 'Epg', 'ePVR nagrywarka', 'Catch-UP', 'Start-over', 'eVOD', 'Timeshift', 'e-GO'),
			$linki_1 = Array('0', '0', '0', '0', '0', '0', '0', '0')
			);


			#pakiet średni
			$oferta[2]=array(
			$kanały_1 = Array('102 24 24', '60 HD','Smart', 'ABOX42'),
			$uslugi_1 = Array('Multimedia', 'Epg', 'ePVR nagrywarka', 'Catch-UP', 'Start-over', 'eVOD', 'Timeshift', 'e-GO'),
			$linki_1 = Array('0', '0', '0', '0', '0', '0', '0', '0')
			);


			#pakiet duży
			$oferta[3]=array(
			$kanały_1 = Array('102 24 24', '60 HD','Smart', 'ABOX42'),
			$uslugi_1 = Array('Multimedia', 'Epg', 'ePVR nagrywarka', 'Catch-UP', 'Start-over', 'eVOD', 'Timeshift', 'e-GO'),
			$linki_1 = Array('0', '0', '0', '0', '0', '0', '0', '0')
			);
			break;
		}
		
	}



return $oferta;
}

/*
print_r($kanały_1 );
echo '<br /><br />';
print_r($uslugi_1);
echo '<br /><br />';
print_r($linki_1);
echo '<br /><br />';
echo ($linki_1[0] != '0') ? 'siema' : 'nara' ;*/
function oferta($numer_oferty, $numer_pliku)
{

	$t=tab($numer_pliku);
	$t_petla=$t[$numer_oferty][1];
	$t_petla2=$t[$numer_oferty][2];

	echo '<div class="oferta">
		<br/>
					<a href="https://telewizjaswiatlowodowa.pl/wybierz-pakiet" class="kanaly" target="_blank">'.$t[$numer_oferty][0][0].'</a> &nbsp;('.$t[$numer_oferty][0][1].')<br/>
					<br/>
					<div class="separator"></div>
					<span class="TD">Telewizja:</span><span style="font-weight: bold">
					<a href="https://telewizjaswiatlowodowa.pl/wybierz-pakiet" target="_blank"> '.$t[$numer_oferty][0][2].'</a></span><br/>
					<span class="TD">Dekoder:</span><span style="font-weight: bold"> '.$t[$numer_oferty][0][3].'</span><br/>
				
					<div class="separator"></div>
					<table class="punkty" style="margin-bottom:40px">';
						for($i =0; $i<count($t_petla); $i++)
						{
							echo '<tr><td>';
							echo ($t_petla2[$i] != '0') ? '<a href="'.$t_petla2[$i].'" class="kanaly" target="_blank"><i class="icon-check"></i> '.$t_petla[$i].'</a>' : '&nbsp;<i class="icon-check"></i> '.$t_petla[$i] ;

							echo '</td></tr>';
						}
					
					echo '</table>';
	
					echo '<div class="separator3"></div></br>
						<div class="cena" ><span  style="text-align:center;">1 zł</span></div>
						<form action="../kontakt/sprzedaz.php" method="post" enctype="multipart/form-data">';
						
						switch($numer_pliku)
						{
							case 0:
							{
								$_SESSION['zamow']= "Oferta bez zobowiązań\nPakiet: ";
								break;
							}
							case 1:
							{
								$_SESSION['zamow']= "Oferta na 12 miesięcy\nPakiet: ";
								break;
							}
							case 2:
							{
								$_SESSION['zamow']= "Oferta na 24 miesiące\nPakiet: ";
								break;
							}
						}
						$_SESSION['zamow']=$_SESSION['zamow'].$t[$numer_oferty][0][2] ;
					echo '<input type="hidden" name="zamow" value="'.$_SESSION['zamow'].'" />
							<div class="cena" ><input type="submit" value="zamów" style="font-size:20px;background:#00a500; padding: 10px 12px;"/>
							</div></br></form>	
							<div class="separator" ></div></br>
							<span class="TD"  style="text-align:center; margin-left:60px;">Aktywacja 19 zł</span>
							</br>
							</br>
							<div class="separator3"></div>
							</div>';
	
}

					
				
				?>