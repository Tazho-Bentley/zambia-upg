	// function is responsible for checking what
	// payment methods have been selected by the merchant

	$(document).ready(function(){
	
		// url that checks payment methods from UPG
		var xhr = new XMLHttpRequest();
		var url = "http://localhost:8000/merchant/1";
	
		xhr.onreadystatechange = function(){
			if(xhr.readyState == 4 && xhr.status == 200){
				myFuntion(xhr.responseText);
			}
		}
		xhr.open("GET", url, true);
		xhr.send();
		
		// responsible for display the payment methods on the stub
		function myFuntion(response){
			var arr = JSON.parse(response);
			var i;
			var method = [];
			var array = [];
			
			for(key in arr){
				var item = arr[key];
				for(key2 in item){
				 method.push(item[key2]);	
				 
				}
				var out = "";
				for(var i = 0; i < method.length; i++){
					var id = method[i];
					$('#paymentMethod').append('<label style="text-align:center;" for="username">'+method[i]+'</label>'+
					'<input class="checkbox" checked="true" style="width:20px;" type="radio" id="'+id+'" name="radio1" onclick= "PaymentDetails(\''+id+'\')" value="'+id+'"></input>');
				
				}
				
			}
			
			
					
		}
		
	
		
	});

