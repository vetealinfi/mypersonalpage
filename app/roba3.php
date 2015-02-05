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

	$url="http://sales.starcitygames.com/spoiler/display.php?name=&namematch=EXACT&text=&oracle=1&textmatch=AND&flavor=&flavormatch=EXACT&c_all=All&multicolor=&colormatch=OR&t_all=All&z%5B%5D=&critter%5B%5D=&crittermatch=OR&ccl=0&ccu=99&pwrop=%3D&pwr=&pwrcc=&tghop=%3D&tgh=-&tghcc=-&r_all=All&format=&s%5Bcor5%5D=1003&mincost=0.00&maxcost=9999.99&minavail=0&maxavail=9999&g_all=All&foil=nofoil&for=no&sort1=4&sort2=1&sort3=10&sort4=0&display=1&numpage=25&action=Show+Results";
	$url="http://sales.starcitygames.com/spoiler/display.php?name=&namematch=EXACT&text=&oracle=1&textmatch=AND&flavor=&flavormatch=EXACT&c_all=All&multicolor=&colormatch=OR&t_all=All&z%5B%5D=&critter%5B%5D=&crittermatch=OR&ccl=0&ccu=99&pwrop=%3D&pwr=&pwrcc=&tghop=%3D&tgh=-&tghcc=-&r_all=All&format=&s%5Bcor5%5D=1003&mincost=0.00&maxcost=9999.99&minavail=0&maxavail=9999&g_all=All&foil=nofoil&for=no&sort1=4&sort2=1&sort3=10&sort4=0&display=1&numpage=300&action=Show+Results";
	
	$results_page = curl($url); // Downloading the results page using our curl() funtion
    $i1="<section id=\"body_content\">";
	$f1="</section>";
    $results_page2 = scrape_between($results_page,$i1, $f1); // Scraping out only the middle section of the results page that contains our results
     
	$s1="Advanced Search</a>
</div></td></tr>"; 
	$s2="<tr><td colspan=\"11\"><b><a"; 
	
	$results_page2 = scrape_between($results_page2,$s1, $s2);
	
    echo $results_page2;
	
	
	
?>