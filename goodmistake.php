<?php 
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
	<div class="cont-outer">
		<!-- <img src="images/logo.png"> -->
		<!-- <h2>#GIVEMEJAPAN</h2> -->
		<div class="upper-wrap">
			<h5>現在最划算的匯率來自<span class="bank"></span></h5><br/>
			<h1 ng-model="rate" class="dark-red" style="font-size:100px;"></h1><br/>
			
		</div>
		<br/>
		
		<input id="MyTWD"type="number" placeholder="請輸入台幣金額" ng-model="TWD">
		<!-- <input id ="RATE" type="number" placeholder="匯率" ng-model="rate"> -->
		<p>你將換到<span class="totalNum"></span></p>   

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


		// var theBank = <?php echo  ?>




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
		console.log(BankArr);

		// 除掉td tag
		for(i=0;i<bestPriceArr.length;i++){
			BankArr[i] = BankArr[i].replace(/<td>/g, "");  
			BankArr[i] = BankArr[i].replace(/<\/td>/g, "");  
		}



		console.log(BankArr);

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

		// 塞到前台
		$('.upper-wrap h1').html(bestCurrency);
		$('.bank').html(BankArr[bankIndex]);

		// ＃＃＃＃＃＃＃＃＃＃＃＃＃＃＃＃＃＃＃＃＃＃＃＃＃＃＃
		// ＃＃＃＃＃＃＃＃＃＃＃＃＃＃＃＃＃＃＃＃＃＃＃＃＃＃＃
		// ＃＃＃＃＃＃＃＃＃＃＃＃＃＃＃＃＃＃＃＃＃＃＃＃＃＃＃
		// ＃＃＃＃＃＃＃＃＃＃＃＃＃＃＃＃＃＃＃＃＃＃＃＃＃＃＃
		var InFo = bestCurrency;

		$('#MyTWD').bind("keyup", function() {


		   	
		   var theVal = $(this).val();

		   if( theVal !== "" && theVal !== null){
		   	
			   var theTotal = parseInt(theVal / InFo)+'日幣';

			   $('.totalNum').html(theTotal);
		   }else{
		   		$('.totalNum').html("");
		   }
		   
		   
		 
		});

		
		// var InFo;
		// $.ajax({

		// 	url: 'https://currency-api.appspot.com/api/JPY/TWD.jsonp',
		// 	dataType: "jsonp",
		// 	data: {amount: '1.00'},
		// 	success: function(response) {

		// 		if (response.success) {
					
					

		// 			InFo =  parseFloat(response.rate).toFixed(3) ;
		// 			$('body h1').append(InFo);
		// 			$("#RATE").attr("placeholder",InFo);
					
		// 		}
		// 	}
		// });
			

	});



</script>



</html>