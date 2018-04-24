<?php

# Jeżeli w liki jest '0' nie jest wstawiany link
#!!!!!! ELEMENTÓW W $USŁUGI I $LINKI MA BYĆ TYLE SAMO
function tab($numer_pliku)
{
	switch($numer_pliku)
	{
		case 0:# #bez zobowiązań
		{
			#pakiet mini
			$internet[0]=array('20 Mb/s', 'p30', '19 zł', '1 zł', '2,90 zł');


			#pakiet mały
			$internet[1]=array('40 Mb/s', 'p45', '19 zł', '1 zł', '2,90 zł');


			#pakiet średni
			$internet[2]=array('60 Mb/s', 'p60', '19 zł', '1 zł', '2,90 zł');


			#pakiet duży
			$internet[3]=array('80 Mb/s', 'p90', '19 zł', '1 zł', '2,90 zł');
			break;
		}
		case 1:# #12 miesięcy
		{
			#pakiet mini
			$internet[0]=array('80 Mb/s', 'p30', '19 zł', '1 zł', '2,90 zł');


			#pakiet mały
			$internet[1]=array('60 Mb/s', 'p45', '19 zł', '1 zł', '2,90 zł');


			#pakiet średni
			$internet[2]=array('40 Mb/s', 'p60', '19 zł', '1 zł', '2,90 zł');


			#pakiet duży
			$internet[3]=array('20 Mb/s', 'p90', '19 zł', '1 zł', '2,90 zł');
			break;
		}
		case 2:# #24 miesiące
		{
			#pakiet mini
			$internet[0]=array('10 Mb/s', 'p30', '19 zł', '1 zł', '2,90 zł');


			#pakiet mały
			$internet[1]=array('20 Mb/s', 'p45', '19 zł', '1 zł', '2,90 zł');


			#pakiet średni
			$internet[2]=array('30 Mb/s', 'p60', '19 zł', '1 zł', '2,90 zł');


			#pakiet duży
			$internet[3]=array('40 Mb/s', 'p90', '19 zł', '1 zł', '2,90 zł');
			break;
		}

		
	}



return $internet;
}

/*
print_r($kanały_1 );
echo '<br /><br />';
print_r($uslugi_1);
echo '<br /><br />';
print_r($linki_1);
echo '<br /><br />';
echo ($linki_1[0] != '0') ? 'siema' : 'nara' ;*/
function internet($numer_pliku)
{

	$t=tab($numer_pliku);


for($i =0; $i<count($t); $i++)
{
				echo '		<div class="oferta">
						<br/>
							
								
							<span class="kanaly"  style="text-align:center; margin-left:60px;">'.$t[$i][0].'</span>
							</br></br>
							<div class="pakiet" style="text-align:center;margin-left:60px;">
								<div id="'.$t[$i][1].'"></div>
							</div>
							</br>
							<div class="separator" ></div></br>
								<span class="TD"  style="text-align:center; margin-left:60px;">
							Aktywacja '.$t[$i][2].'</span>
							</br></br>
							<div class="separator" ></div>
							</br>
							<div class="cena" ><span  style="text-align:center;">'.$t[$i][3].'</span></div>
									
							<div class="cena" ><input type="button" value="zamów" style="font-size:20px;background:#00a500"/></div>	
							</br>
							<div class="separator" ></div>
							</br>
							
							</br>
							<div class="TD" ><span  style="text-align:center;">Router WiFi '.$t[$i][4].' / mies.</span>
							</br></br>
							
							</br>
					</div>
				
				
				</div>';
			
}			
				
			
}

					
				
				?>