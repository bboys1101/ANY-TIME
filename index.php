<?php 

	include("source/head.php"); 
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
	$url = "http://www.findrate.tw/JPY/#.VeQti52qqko";
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
	// print_r($array);


	$subArray = array_slice($array,1,2);
	// print_r($subArray);

	$bank = $subArray[0];
	$currency = $subArray[1];
	// echo $bank;
	// echo $currency;


?>



<body>
	<div class="whole-page-wrap">
		<!-- header -->
		<div class="logo-wrap">
			<img src="images/logo.png" class="logo" title="日幣匯率">
			<!-- <h1 class="logo">AN<span class="dark-red">¥</span> TIME</h1> -->
			<img src="images/dialogue.png" class="dialogue">
		</div>

		<!-- content -->

		<!-- 輸入金額 -->
		<div class="input-wrap content-wrap">
			<h3><i class="fa fa-cog"></i> 轉換工具</h3>
			<div class="input-sec">
				<input id="MyTWD"type="number" placeholder="請輸入台幣金額" ng-model="TWD">
			</div>
			<!-- <input id ="RATE" type="number" placeholder="匯率" ng-model="rate"> -->
			<div class="down"><i class="fa fa-arrow-circle-down"></i></div>
			<div class="input-sec">
				<p>你將換到</p>
				<div class="totalNum dark-red"></div>
			</div>
		</div>

		
		<div class="upper-wrap">
			<h3><i class="fa fa-bolt"></i> 即時匯率報價</h3>
			<div class="upper-sec">
				<h5>目前現在最划算的匯率是</h5>
				<div class="main-currency dark-red" style="font-size:100px;">0.30</div>
				<h5><i class="fa fa-sign-out"></i>來自 <span class="bank cursor-item" data-toggle="tooltip" title="點擊尋找離你最近的分行"></span></h5>
			</div>
			
		</div>
		
		


	</div>
	<div class="spinning">
		<i class="fa fa-refresh fa-spin"></i>
	</div>

	<!-- 金額：<input type="text" ng-model="price" ng-init="price=300" /><br />
    數量：<input type="number" ng-model="amt" ng-init="amt=1" style="display:none"/><br />
    總金額：{{price * amt}} -->
    <!-- <input type="text" >  -->
    
	

</body>

<script type="text/javascript">
	
	// myApp = angular.module('myApp',[]);
	// myApp.controller('myController',function($scope,$http){
	// 	$http.get('https://currency-api.appspot.com/api/JPY/TWD.jsonp')
	// 	.success(function(response){
	// 		$scope.myData = response;
	// 	});

	// });


	// function MyController($scope, $http){   
	//     $http({   
	//         method: 'GET',   
	//         url: 'https://currency-api.appspot.com/api/JPY/TWD.jsonp'  
	//     }).success(function(data, status, headers, config) {   
	//         $scope.school=data;   
	           
	//     }).error(function(data, status, headers, config) {   
	           
	//     });   

	// }  


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


		// 近場畫面
		setTimeout(function(){
			$('.whole-page-wrap').addClass('open');
			$('.spinning').hide();
			$('.upper-wrap .main-currency').html(theCurrency);

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