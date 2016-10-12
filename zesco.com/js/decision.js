			
 // function is responsible for matching selected
 // radio buttons to the forms
 // selected radio button calls the form associated with it
			
    function PaymentDetails(radio_id)
	{
		var airtel= document.getElementById('airtel');
		var mtn= document.getElementById('mtn');
		var visa= document.getElementById('visa');
		var zoona= document.getElementById('zoona');
		var mtnblock = "MTN Money";
		var airtelblock = "Airtel Money";
		var zoonablock = "Zoona";
		var visablock = "Visa";
		
		// selected radio button blocks the display of other forms
		if(radio_id==mtnblock){
			mtn.style.display="block";					
			airtel.style.display="none";
			visa.style.display="none";
			zoona.style.display="none";
		}else if(radio_id==airtelblock){
			$('#airtel').show();
			mtn.style.display="none";
			airtel.style.display="block";
			visa.style.display="none";
			zoona.style.display="none";
		}else if(radio_id==visablock){
			mtn.style.display="none";
			airtel.style.display="none";
			visa.style.display="block";
			zoona.style.display="none";
		}else if(radio_id==zoonablock){
			mtn.style.display="none";
			airtel.style.display="none";
			visa.style.display="none";
			zoona.style.display="block";
		}else{
			 alert("Sorry!");
		}
	}
		