<?php
	include("source/head.php"); 

 // 	class Crawler
	// {
	// 	public function main()
	// 	{
			$url = "http://www.taiwanrate.org/exchange_rate.php?c=JPY";
			$curl = curl_init($url);
			curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
			$ret = curl_exec($curl);
			// var_dump($ret);
			$doc = new DOMDocument;
			@$doc->loadHTML($ret);

			foreach($doc->getElementsByTagName('td') as $node)
			{
			    $array[] = $doc->saveHTML($node);
			}

			// echo $array;
			print_r($array);

			
			// $subArray = array_slice($array,3,72);
			// print_r($subArray);

				// $table_doms = $doc->getElementsByTagName('div');

				// foreach ($table_doms as $table_dom) {
				// 	if ($table_dom->getAttribute('align') === 'center'){
				// 		// echo "7";
				// 		// break;



				// 	}
				// 	// echo $table_dom -> getAttribute('headers');
				// 	// $i = 0;
				// 	// echo $i;	

				// 	// echo $$table_dom->getAttribute('class')

				// 	// if ($table_dom->getAttribute('class') === 'yui-dt0-col-sell1'){
				// 	// 	echo '1';	
				// 	// }
					

				// 	// echo $table_dom->getAttribute('headers');
				// }
			// @$doc->loadhtmlfile($ret);

			// $table_doms = $doc->getElementsByTagName('td');



			// foreach ($table_doms as $table_dom) {
			// 	echo "11";
			// 	// echo "11";
			// 	// echo $table_dom->getAttribute('class')."\n";
			// }

			
			// echo $ret;


	// 	}
	// }
	// $c = new Crawler;
	// $c ->main();


				// $siteurl = "http://www.taiwanrate.org/exchange_rate.php?c=JPY";
	// $content = file_get_contents($siteurl);
	// echo $content;
	// class Crawler
	// {
	// 	public function main()
	// 	{
	// 		$url = "http://www.taiwanrate.org/exchange_rate.php?c=JPY";
	// 		$curl = curl_init($url);
	// 		curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
	// 		// curl_setopt($curl, CURLOPT_POSt, true);
	// 		$ret = curl_exec($curl);
	// 		// var_dump($ret);
	// 		$doc = new DOMDocument;
	// 		$doc->loadHTML($ret);

	// 		$table_doms = $doc->getElementsByTagName('td');
	// 		foreach ($table_doms as $table_dom) {
	// 			echo $table_dom->getAttribute('class')."\n";
	// 		}

			
	// 		echo $ret;


	// 		// $doc = new DOMDocument;
 //   //  		$doc->loadHTML($ret);

 //   //  		$table_doms = $doc->getElementsByTagName('div');
 //   //  		foreach ($table_doms as $table_dom){
 //   //  			echo $table_dom->getAttribute('_atssh')."\n";
    			
 //   //  		}
	// 	}
	// }
	// $c = new Crawler;
	// $c ->main();
	// $t1 = time();
	    
	// $page_content = file_get_contents($url);
	// $ch = curl_init();
 //    curl_setopt($ch, CURLOPT_URL, $url);
 //    curl_setopt($ch, CURLOPT_HEADER, 0);
 //    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
 //    $html = curl_exec($ch);
 //    curl_close($ch);

    // echo $html;
	// foreach($html->find('a') as $element){
	// 	echo $element->href . '<br>'; 
	// }
	// $artlist = pq("a"); 
	// echo $page_content;
	// $t2 = time();
	// foreach($html('div[id="sellname1"]') as $element) {
	//    echo $element->id, "<br>\n"; 
	// };

	// $url = "http://www.xxx.com/Index/xxx/id/100"; //從此站抓取數據
	// $fp = @fopen($url, "r") or die("超時"); //打開指定的網頁
	// $fcontents = file_get_contents($fp); //獲取網頁html源碼
	// $str_html = "/<img src=\"images\/t_01.gif\" width=\"500\" height=\"150\" border=\"0\" ><\/td>(.*)<td width=\"21\" valign=\"top\"><\/td>/ "; //正則表達式
	// preg_match($str_html, $fcontents, $regs); //檢索需要的數據
	// $regs[1] = str_replace("src=\"..\/images\/", "src=\"http://www.xxxcom\/images\/",  $regs[1]);
	// echo $regs[1];

	// ＠＠＠＠＠＠＠＠＠＠＠＠＠＠＠＠＠＠＠＠＠＠＠＠＠＠＠＠＠＠＠＠＠＠＠＠＠＠＠＠＠＠＠＠＠＠＠＠＠＠
	// $url = ""; //您想抓取的網址
 //    $html = file_get_contents($url); //將網址讀入buffer變數   

 //    $c = curl_init('http://www.taiwanrate.org/exchange_rate.php?c=JPY');
	// curl_setopt($c, CURLOPT_RETURNTRANSFER, true);
	// //curl_setopt(... other options you want...)

	// $html = curl_exec($c);

	// if (curl_error($c))
	//     die(curl_error($c));

	// // Get the status code
	// $status = curl_getinfo($c, CURLINFO_HTTP_CODE);

	// // echo $status;

	// curl_close($c);
    // echo $buffer;
 //   	$doc = new DOMDocument;
	// $doc->loadHTML($buffer);

	

	// $table_doms = $doc->getElementById('sellname1');
	// echo $table_doms;
	// foreach ($table_doms as $table_dom){
	// 	echo $table_dom->getAttribute('_atssh')."\n";
		
	// }

    // 先找銀行
    // for( $i=0; $i<count($buffer); $i++){
    //      $start = strpos($buffer[$i],'台灣銀行'); 
    //      if($start !== false){
    //      	// echo $i;
    //      	// $i = $i + 1;
         	 
    //      	$bankStr = strip_tags($buffer[$i]);

    //      	print_r (explode("0.",$bankStr));
    //      	// echo $bankStr;
    //          // do something
    //      }
    // } (edited)
    // ＠＠＠＠＠＠＠＠＠＠＠＠＠＠＠＠＠＠＠＠＠＠＠＠＠＠＠＠＠＠＠＠＠＠＠＠＠＠＠＠＠＠＠＠＠＠＠＠＠＠




?>

<body>



</body>

<script type="text/javascript">

<?php
	// $js_array = json_encode($subArray);
	// echo "var javascript_array = ". $js_array . ";\n";


	
?>

// document.write('<?php echo $subArray; ?>');

</script>


<script type="text/javascript">

	$(document).ready(function(){

		// setTimeout(function(){
		
		// var obj = [];
		// 把array從php帶來javascript
		var obj = <?php echo json_encode($subArray); ?>;
		// console.log(obj);
		// console.log(obj.length);

		

		// 每家銀行的現金賣出價arr
		var bestPriceArr = [];		

		var maxNum = (obj.length)/3;

		for(i=0;i<maxNum;i++){
			var p = (3*i)+2;

			bestPriceArr.push(obj[p]);
		}


		var BankArr = [];
		for(i=0;i<maxNum;i++){
			var p = (3*i);

			BankArr.push(obj[p]);
		}
		console.log(BankArr)




		// 現金值with html tag
		console.log(bestPriceArr);

		var pureBestPriceArr = [];

		for(i=0;i<bestPriceArr.length;i++){
			
			bestPriceArr[i] = bestPriceArr[i].replace(/<td>/g, "");  
			bestPriceArr[i] = bestPriceArr[i].replace(/<\/td>/g,""); 

			pureBestPriceArr.push(bestPriceArr[i]);

		}

		// pure現金值
		console.log(pureBestPriceArr);

		//擷取最划算的匯率值和銀行的順位
		var bestCurrency;
		// 和銀行的順位
		var bankIndex;

		$.each(pureBestPriceArr,function(index,value){
			
			// console.log(index);
			// console.log(value);

			if(index == 0){
				bestCurrency = value;
			}else{

				if(bestCurrency>value){
					bestCurrency = value;
					bankIndex = index;

				}

			}

		});

		console.log(bestCurrency);
		console.log(bankIndex);

		console.log(BankArr[bankIndex]);
		

	});
	



</script>

</html>
