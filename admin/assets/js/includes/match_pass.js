
		$( 'input[id=retype]').keyup(function(){
			
			var pass1 = document.getElementById('password').value;
			var pass2 = document.getElementById('password2').value;
			if( pass1 != pass2)
				{$("#error").show(); 
				$("#match").hide();
				$("#fillin").hide();
			}
			if ( pass1 == pass2){$("#match").show(); $("#error").hide(); $("#fillin").hide();}
			
		});
	