			// checks if all the fields are properly filled
			// Checks if data entered is correct
			
			function validate()
				{
					var button=document.getElementById('registerButton');
					var operator=document.getElementById('operator');

				//check which dwealer has been selected. default is mtn
				if(document.getElementById('MTN Money').checked==true)
				{
				var mtn= document.getElementById('mtn');

				var name = document.getElementById('name1');
				var account = document.getElementById('account1');
				var number = document.getElementById('number1');
				var password = document.getElementById('password1');
					
					// validates the fields
					if(name.value==""){
						alert( "Please provide your name!" );
						name.focus();

						}else if(number.value == ""){
							alert( "Please provide your Account Number!" );
							number.focus();
                    
						}else if(account.value == ""){
							alert( "Please provide your Account PIN." );
							account.focus();
                    
						}else if(password.value == ""){
							alert( "Please provide a Password!" );
							password.focus();
                    
						}else{
							operator.value="1";
							button.type='submit';
						}
                
				//check which dwealer has been selected
				}else if(document.getElementById('Airtel Money').checked==true){
            
				var airtel= document.getElementById('airtel');

				var name = document.getElementById('name2');
				var account = document.getElementById('account2');
				var number = document.getElementById('number2');
				var password = document.getElementById('password2');
					
					// validates the fields
					if(name.value==""){
						alert( "Please provide your name!" );
							name.focus();

					}else if(number.value == ""){
						alert( "Please provide your Account Number!" );
							number.focus();
                    
					}else if(account.value == ""){
						alert( "Please provide your Account PIN." );
							account.focus();
                    
					}else if(password.value == ""){
						alert( "Please provide a Password!" );
							password.focus();
                    
					}else{
						operator.value="2";
							button.type='submit';
							}
        
				//check which dwealer has been selected
				}else if(document.getElementById('Visa').checked==true){
            
				var visa= document.getElementById('visa');

				var cardnumber = document.getElementById('cardnumber');
				var secure = document.getElementById('secure');
				var namecard = document.getElementById('namecard');
				
				// validates the fields
				if(cardnumber.value == ""){
                    alert( "Please provide your Card Number!" );
						cardnumber.focus();
                    
					}else if(secure.value == ""){
                    alert( "Please provide your Security code!" );
						secure.focus();
                    
					}else if(namecard.value == ""){
                    alert( "Please provide name on card!" );
						namecard.focus();                  
					}else{
					operator.value="3";
						button.type='submit';
							}

				//check which dwealer has been selected
				}else if(document.getElementById('Zoona').checked==true){
            
				var zoona= document.getElementById('zoona');

				var name = document.getElementById('name3');
				var account = document.getElementById('account3');
				var number = document.getElementById('number3');
				var password = document.getElementById('password3');

				// validates the fields
				if(name.value==""){
                    alert( "Please provide your name!" );
						name.focus();

				}else if(number.value == ""){
                    alert( "Please provide your Account Number!" );
						number.focus();
                    
				}else if(account.value == ""){
                    alert( "Please provide your Account PIN." );
						account.focus();
                    
				}else if(password.value == ""){
                    alert( "Please provide a Password!" );
						password.focus();
                    
				}else{
					operator.value="4";
						button.type='submit';
							}
         }
         //end validATIONS


      }

