<?php
	// Defining the basic scraping function
    function scrape_between($data, $start, $end){
        $data = stristr($data, $start); // Stripping all data from before $start
        $data = substr($data, strlen($start));  // Stripping $start
        $stop = stripos($data, $end);   // Getting the position of the $end of the data to scrape
        $data = substr($data, 0, $stop);    // Stripping all data from after and including the $end of the data to scrape
        return $data;   // Returning the scraped data from the function
    }
	
	function reverse_scrape_between($data, $start, $end){
        $data = stristr($data, $start); // Stripping all data from before $start
        $data = substr($data, strlen($start));  // Stripping $start
		
        $stop = stripos($data, $end);   // Getting the position of the $end of the data to scrape
        $data = substr($data, 0, $stop);    // Stripping all data from after and including the $end of the data to scrape
        return $data;   // Returning the scraped data from the function
    }
	
	// Defining the basic cURL function
    function curl($url) {
        // Assigning cURL options to an array
        $options = Array(
            CURLOPT_RETURNTRANSFER => TRUE,  // Setting cURL's option to return the webpage data
            CURLOPT_FOLLOWLOCATION => TRUE,  // Setting cURL to follow 'location' HTTP headers
            CURLOPT_AUTOREFERER => TRUE, // Automatically set the referer where following 'location' HTTP headers
            CURLOPT_CONNECTTIMEOUT => 120,   // Setting the amount of time (in seconds) before the request times out
            CURLOPT_TIMEOUT => 120,  // Setting the maximum amount of time for cURL to execute queries
            CURLOPT_MAXREDIRS => 10, // Setting the maximum number of redirections to follow
            CURLOPT_USERAGENT => "Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.1a2pre) Gecko/2008073000 Shredder/3.0a2pre ThunderBrowse/3.2.1.8",  // Setting the useragent
            CURLOPT_URL => $url, // Setting cURL's URL option with the $url variable passed into the function
        );
         
        $ch = curl_init();  // Initialising cURL 
        curl_setopt_array($ch, $options);   // Setting cURL's options using the previously assigned array data in $options
        $data = curl_exec($ch); // Executing the cURL request and assigning the returned data to the $data variable
        curl_close($ch);    // Closing cURL 
        return $data;   // Returning the data from the function 
    }
	
	$url = "http://www.cardkingdom.com/catalog/view?search=mtg_advanced&filter%5Bname%5D=&filter%5Bkey_text1%5D=&filter%5Bkey_boolean%5D=AND&filter%5Bkey_text2%5D=&filter%5Btype%5D=&filter%5Btype_key%5D=&filter%5Bcategory_id%5D=2923&filter%5Bmanaprod_select%5D=&filter%5Brarity_all%5D=any&filter%5Bconcast1%5D=&filter%5Bconcast2%5D=&filter%5Bpow1%5D=&filter%5Bpow2%5D=&filter%5Btuf1%5D=&filter%5Btuf2%5D=&filter%5Bprice_op%5D=&filter%5Bprice%5D=";
	$url = "http://www.cardkingdom.com/catalog/view/2923?search=mtg_advanced&filter%5Bname%5D=&filter%5Bkey_text1%5D=&filter%5Bkey_boolean%5D=AND&filter%5Bkey_text2%5D=&filter%5Btype%5D=&filter%5Btype_key%5D=&filter%5Bcategory_id%5D=2923&filter%5Bmanaprod_select%5D=&filter%5Brarity_all%5D=any&filter%5Bconcast1%5D=&filter%5Bconcast2%5D=&filter%5Bpow1%5D=&filter%5Bpow2%5D=&filter%5Btuf1%5D=&filter%5Btuf2%5D=&filter%5Bprice_op%5D=&filter%5Bprice%5D=&filter%5Bname%5D=&filter%5Bkey_text1%5D=&filter%5Bkey_boolean%5D=AND&filter%5Bkey_text2%5D=&filter%5Btype%5D=&filter%5Btype_key%5D=&filter%5Bcategory_id%5D=2923&filter%5Bmanaprod_select%5D=&filter%5Brarity_all%5D=any&filter%5Bconcast1%5D=&filter%5Bconcast2%5D=&filter%5Bpow1%5D=&filter%5Bpow2%5D=&filter%5Btuf1%5D=&filter%5Btuf2%5D=&filter%5Bprice_op%5D=&filter%5Bprice%5D=&page=1";
	// $url = "http://www.cardkingdom.com/catalog/view/2923?search=mtg_advanced&filter%5Bname%5D=&filter%5Bkey_text1%5D=&filter%5Bkey_boolean%5D=AND&filter%5Bkey_text2%5D=&filter%5Btype%5D=&filter%5Btype_key%5D=&filter%5Bcategory_id%5D=2923&filter%5Bmanaprod_select%5D=&filter%5Brarity_all%5D=any&filter%5Bconcast1%5D=&filter%5Bconcast2%5D=&filter%5Bpow1%5D=&filter%5Bpow2%5D=&filter%5Btuf1%5D=&filter%5Btuf2%5D=&filter%5Bprice_op%5D=&filter%5Bprice%5D=&page=3&filter%5Bname%5D=&filter%5Bkey_text1%5D=&filter%5Bkey_boolean%5D=AND&filter%5Bkey_text2%5D=&filter%5Btype%5D=&filter%5Btype_key%5D=&filter%5Bcategory_id%5D=2923&filter%5Bmanaprod_select%5D=&filter%5Brarity_all%5D=any&filter%5Bconcast1%5D=&filter%5Bconcast2%5D=&filter%5Bpow1%5D=&filter%5Bpow2%5D=&filter%5Btuf1%5D=&filter%5Btuf2%5D=&filter%5Bprice_op%5D=&filter%5Bprice%5D=";
    $url="http://www.cardkingdom.com/catalog/view?search=mtg_advanced&filter%5Bname%5D=&filter%5Bkey_text1%5D=&filter%5Bkey_boolean%5D=AND&filter%5Bkey_text2%5D=&filter%5Btype%5D=&filter%5Btype_key%5D=&filter%5Bcategory_id%5D=2395&filter%5Bmanaprod_select%5D=&filter%5Brarity_all%5D=any&filter%5Bconcast1%5D=&filter%5Bconcast2%5D=&filter%5Bpow1%5D=&filter%5Bpow2%5D=&filter%5Btuf1%5D=&filter%5Btuf2%5D=&filter%5Bprice_op%5D=&filter%5Bprice%5D=";
	$results_page = curl($url); // Downloading the results page using our curl() funtion
    $i1="<b>Magic: the Gathering Singles</b><br><table class=grid width=100%>";
	$f1="</table>";
    $results_page2 = scrape_between($results_page,$i1, $f1); // Scraping out only the middle section of the results page that contains our results
     
    $separate_results = explode("<tr", $results_page2);   // Expploding the results into separate parts into an array
	// print_r($separate_results);
	
	
	$results=array();
	$imagenes=array();
	$links=array();

	$otros1=array();
	$otros2=array();
	$asd=array();
	$dolar=620;
	$cartas=array();
	foreach($separate_results as $ss){
		$carta=array();
		if(!strchr($ss,"<a")){
		
		}else{
			//separo entre la imagen oculta y el link
			$sep=explode('-->',$ss);

			// if(!strchr($sep[1],"Out of stock")){
				$carta['Imagen']=scrape_between($sep[0], "href=\"", "\"");
				$carta['Link']=scrape_between($sep[1], "<a href=\"", "\">");
				$nom=scrape_between($sep[1], "<td><a href=\"", "</a></td>");
				$nom2=explode("\">",$nom);
				$carta['Nombre']=$nom2[1];
				$sep[1]=str_replace(' ','',$sep[1]);
				$asd=explode('<td>',trim(str_replace('</td>','',trim(scrape_between($sep[1], "<td>NM</td>", "<form")))));
				// $carta['Precio']=$asd[2]*1;
				
				//ahora trataremos de sacar losa datos del link
				$detail_page = curl($carta['Link']);
				$tabla_medium=scrape_between($detail_page,"<!-- Column 1 start -->", "Don't see what you need?");
				$tabla_medium2=scrape_between($tabla_medium,"<tr valign=top>", "<form action=/cart/add");
				
				$carta['Oracle_Text']="";
				// if(strstr($tabla_medium2,"Oracle Text:")!=false){
				if(strpos($tabla_medium2,"Oracle Text:")!==false){
					$s1="Oracle Text:<br>";
					$s2="<table class='grid' border=0>";
					$carta['Oracle_Text']=scrape_between($tabla_medium2,$s1, $s2);
					$carta['Oracle_Text']=str_replace('<BR>','',$carta['Oracle_Text']);
				}
				if(strpos($tabla_medium2,"Edition:")!==false){
					$s1="Edition:</td>";
					$s2="</td>";
					$carta['Edition']=str_replace('<td>','',scrape_between($tabla_medium2,$s1, $s2));
				}
				if(strpos($tabla_medium2,"Type:")!==false){
					$s1="Type:</td>";
					$s2="</td>";
					$carta['Type']=str_replace('<td>','',scrape_between($tabla_medium2,$s1, $s2));
					
				}
				if(strpos($tabla_medium2,"Cast:")!==false){
					$s1="Cast:</td>";
					$s2="</td>";
					$carta['Cast']=str_replace('<td>','',scrape_between($tabla_medium2,$s1, $s2));
					
				}
				if(strpos($tabla_medium2,"Rarity:")!==false){
					$s1="Rarity:</td>";
					$s2="</td>";
					$carta['Rarity']=str_replace('\t','',str_replace('<td>','',scrape_between($tabla_medium2,$s1, $s2)));
					
				}
				if(strpos($tabla_medium2,"Pow/Tuf:")!==false){
					$s1="Pow/Tuf:</td>";
					$s2="</td>";
					$carta['Pow/Tuf']=str_replace('<td>','',scrape_between($tabla_medium2,$s1, $s2));
					
				}
				// echo $tabla_medium2;
				
				
				
				$s1="<table class='grid compact' cellpadding=5 cellspacing=0 width=100% style='border: 1px solid #666666;'>";
				$s2="</table>";
				$precios=scrape_between($tabla_medium,$s1, $s2);
				$precios = stristr($precios,"<tr bgcolor=#dddddd>");
				//hasta acá estan separados por <tr y el color
				$precios_td=explode('</tr>',$precios);
				// print_r($precios_td);
				// $nm1="<td align=left style='border-top: 1px solid #666666;'>NM</td>";
				$nm2="<td style='text-align:center; border-top:1px solid #666666;'>";
				$precios_a=array();
				$precios_a['NM']=scrape_between($precios_td[0],$nm2, "</td>")+1-1;
				$precios_a['EX']=scrape_between($precios_td[1],$nm2, "</td>")+1-1;
				$precios_a['VG']=scrape_between($precios_td[2],$nm2, "</td>")+1-1;
				$precios_a['G']=scrape_between($precios_td[3],$nm2, "</td>")+1-1;
				
				$carta['Precios']=$precios_a;
				$cartas[]=$carta;
				// echo $precios.'';
			// }else{
			
			// }
		}
		
	}
	// foreach($asd as $rr){
		// echo 'precio ='.($rr[2]*$dolar).'<br />';
	// }
	 // print_r($imagenes);
	 // print_r($links);
	 // print_r($otros1);
	 echo '<pre>';
	 var_dump($cartas);
	 echo '</pre>';
    // For each separate result, scrape the URL
    // foreach ($separate_results as $separate_result) {
        // if ($separate_result != "") {
            // $results_urls[] = "http://www.imdb.com" . scrape_between($separate_result, "href=\"", "\" title="); // Scraping the page ID number and appending to the IMDb URL - Adding this URL to our URL array
        // }
    // }
     
    // print_r($results_urls); // Printing out our array of URLs we've just scraped
	
	
?>