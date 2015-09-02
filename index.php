<?php 

	include("source/head.php"); 

	// parse the Rate Exchange website
	$url = "http://www.findrate.tw/JPY/#.VeQti52qqko";
	$curl = curl_init($url);
	curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
	$ret = curl_exec($curl);
	$doc = new DOMDocument;
	@$doc->loadHTML($ret);

	// parse the td tag into an array
	foreach($doc->getElementsByTagName('td') as $node)
	{
	    $array[] = $doc->saveHTML($node);
	}

	// get the specific items 
	$subArray = array_slice($array,1,2);

	// the best currency now
	$currency = $subArray[1];
	// the bank which provides the best currency now
	$bank = $subArray[0];
	
	// include("source/head.php"); 
	// $url = "http://www.taiwanrate.org/exchange_rate.php?c=JPY";
	// $curl = curl_init($url);
	// curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
	// $ret = curl_exec($curl);
	// // var_dump($ret);
	// $doc = new DOMDocument;
	// @$doc->loadHTML($ret);

	// foreach($doc->getElementsByTagName('td') as $node)
	// {
	//     $array[] = $doc->saveHTML($node);
	// }
	
	// $subArray = array_slice($array,3,72);
	

	// echo $array;
	// print_r($array);


	
	// print_r($subArray);

	
	// echo $bank;
	// echo $currency;


?>



<body>
	<div class="whole-page-wrap">

		<!-- logo -->
		<div class="logo-wrap">
			<img src="images/logo.png" class="logo" title="日幣匯率">
			<img src="images/dialogue.png" class="dialogue">
		</div>

		

		<!-- Rate Exchanger-->
		<div class="cont-sec cont-sec-l">
			<h3><i class="fa fa-cog"></i> 匯率轉換工具</h3>
			<div class="input-sec">
				<input id="MyTWD"type="number" placeholder="請輸入欲兌換台幣金額" ng-model="TWD">
			</div>
			
			<div class="down"><i class="fa fa-arrow-circle-down"></i></div>
			<div class="input-sec">
				<p>您將換到</p>
				<div class="totalNum dark-red"></div>
			</div>
		</div>

		
		<div class="cont-sec cont-sec-r">
			<h3><i class="fa fa-bolt"></i> 即時匯率報價</h3>
			<div class="upper-sec">
				<h5>目前現在最划算的匯率是</h5>
				<div class="main-currency dark-red" style="font-size:100px;">0.30</div>
				<h5><i class="fa fa-sign-out"></i>來自 <span class="bank cursor-item" data-toggle="tooltip" title="點擊尋找離你最近的分行"></span></h5>
			</div>
			
		</div>

	</div>

	<!-- loading -->
	<div class="spinning">
		<i class="fa fa-refresh fa-spin"></i>
	</div>

</body>

<script type="text/javascript">
	

	$(document).ready(function(){


		var theBank = '<?php echo $bank; ?>';
		var theCurrency = '<?php echo $currency; ?>';

		theCurrency = theCurrency.replace(/<td class="red">/g, "");  
		theCurrency = theCurrency.replace(/<\/td>/g, "");  

		theBank = theBank.replace(/<td>/g, "");  
		theBank = theBank.replace(/<\/td>/g, "");  


		// 塞到前台
		
		$('.bank').html(theBank);



		// 尋找最近的銀行
		$('.bank').on('click',function(){

			var bankName = $(this).text();
			var url = "https://www.google.com.tw/maps/search/"+bankName;
			// alert(url);
			// window.location.replace(url);
			window.open(url);

			// window.location.href = url;

		});

		$('[data-toggle="tooltip"]').tooltip(); 


		// the intro

		var animation = {top:'-50px'};

		setTimeout(function(){
			$('.whole-page-wrap').addClass('open');
			$('.spinning').fadeOut(400);
			$('.main-currency').html(theCurrency);
			setTimeout(function(){
				$('.dialogue').animate(animation,800,'easeOutElastic');
			},500);
		},1000);


		// ＃＃＃＃＃＃＃＃＃＃＃＃＃＃＃＃＃＃＃＃＃＃＃＃＃＃＃
		// ＃＃＃＃＃＃＃＃＃＃＃＃＃＃＃＃＃＃＃＃＃＃＃＃＃＃＃
		// ＃＃＃＃＃＃＃＃＃＃＃＃＃＃＃＃＃＃＃＃＃＃＃＃＃＃＃
		// ＃＃＃＃＃＃＃＃＃＃＃＃＃＃＃＃＃＃＃＃＃＃＃＃＃＃＃
		
		// var obj = [];
		// 把array從php帶來javascript
		// var obj = <?php echo json_encode($subArray); ?>;
		// console.log(obj);
		// console.log(obj.length);

		

		// 每家銀行的現金賣出價arr
		// var bestPriceArr = [];		

		// var maxNum = (obj.length)/3;

		// for(i=0;i<maxNum;i++){
		// 	var p = (3*i)+2;

		// 	bestPriceArr.push(obj[p]);
		// }


		// var BankArr = [];
		// for(i=0;i<maxNum;i++){
		// 	var p = (3*i);

		// 	BankArr.push(obj[p]);
		// }
		// console.log(BankArr);

		// // 除掉td tag
		// for(i=0;i<bestPriceArr.length;i++){
		// 	BankArr[i] = BankArr[i].replace(/<td>/g, "");  
		// 	BankArr[i] = BankArr[i].replace(/<\/td>/g, "");  
		// }



		// console.log(BankArr);

		// // 現金值with html tag
		// console.log(bestPriceArr);

		// var pureBestPriceArr = [];

		// for(i=0;i<bestPriceArr.length;i++){
			
		// 	bestPriceArr[i] = bestPriceArr[i].replace(/<td>/g, "");  
		// 	bestPriceArr[i] = bestPriceArr[i].replace(/<\/td>/g,""); 

		// 	pureBestPriceArr.push(bestPriceArr[i]);

		// }

		// // pure現金值
		// console.log(pureBestPriceArr);

		// //擷取最划算的匯率值和銀行的順位
		// var bestCurrency;
		// // 和銀行的順位
		// var bankIndex;

		// $.each(pureBestPriceArr,function(index,value){
			
		// 	// console.log(index);
		// 	// console.log(value);

		// 	if(index == 0){
		// 		bestCurrency = value;
		// 	}else{

		// 		if(bestCurrency>value){
		// 			bestCurrency = value;
		// 			bankIndex = index;

		// 		}

		// 	}

		// });

		// console.log(bestCurrency);
		// console.log(bankIndex);

		// console.log(BankArr[bankIndex]);

		

		// ＃＃＃＃＃＃＃＃＃＃＃＃＃＃＃＃＃＃＃＃＃＃＃＃＃＃＃
		// ＃＃＃＃＃＃＃＃＃＃＃＃＃＃＃＃＃＃＃＃＃＃＃＃＃＃＃
		// ＃＃＃＃＃＃＃＃＃＃＃＃＃＃＃＃＃＃＃＃＃＃＃＃＃＃＃
		// ＃＃＃＃＃＃＃＃＃＃＃＃＃＃＃＃＃＃＃＃＃＃＃＃＃＃＃



		var InFo = parseInt(theCurrency);

		$('#MyTWD').bind("keyup", function() {


		   	
		   var theVal = $(this).val();

		   if( theVal !== "" && theVal !== null){
		   	
			   var theTotal = parseInt(theVal / theCurrency)+'日幣';

			   $('.totalNum').html(theTotal);
		   }else{
		   		$('.totalNum').html("");
		   }
		   
		   
		 
		});

		
	

	});



</script>



</html>