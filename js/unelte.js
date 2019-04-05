
function mesCheck(){

	var mesaj=document.forms["contact"]["mesaj"];
	mesaj.style.background = 'Black';
	mesaj.style.color = 'White';

	if (mesaj.value.length < 5) {

			mesaj.style.color = 'Black';
			error = "Mesajul trebuie sa fie de cel putin 5 litere!\n";
			document.getElementById("eroareV").innerHTML=error;

			return false;
		}
		else
		{
			return true;
			}
}

function validare(){
	var nume=document.forms["contact"]["nume"];
	var email=document.forms["contact"]["mail"];
	var mesaj=document.forms["contact"]["mesaj"];
	nume.style.background = 'Black';
	email.style.background = 'Black';
	mesaj.style.background = 'Black';
	nume.style.color = 'White';
	email.style.color = 'White';
	mesaj.style.color = 'White';
	var error = "";
	var illegalChars = /\W/;

	    if (nume.value == "" || email.value=="" || mesaj.value=="") {

	        nume.style.color = 'Black';
			    email.style.color = 'Black';
			    mesaj.style.color = 'Black';

	        error = "Completeaza toate câmpurile!\n";
	        document.getElementById("eroareV").innerHTML=error;

	        return false;

	    } else if ((nume.value.length < 4) || (nume.value.length > 20)) {

	        nume.style.color = 'Black';
	        error = "Numele trebuie sa contina intre 4 si 20 de litere!\n";
	        document.getElementById("eroareV").innerHTML=error;

			return false;

	    } else if (illegalChars.test(nume.value)) {

	        nume.style.color = 'Black';
	        error = "Atentie! Numele conține caractere nepermise!\n";
	        document.getElementById("eroareV").innerHTML=error;

			return false;

	    }
	    else {

	        nume.style.background = 'Black';
	        nume.style.color = 'White';

	        var apostrof = email.value.indexOf("@");
	      	var punctul = email.value.lastIndexOf(".");
	    	    if (apostrof<1 || punctul<apostrof+2)
            {
	    		      
	    		       email.style.color = 'Black';
	    		       error="Adresa de email invalidă!";
	    		       document.getElementById("eroareV").innerHTML=error;
                 return false;
	      	  }
	    	    else{
                email.style.background = 'Black';
	              email.style.color = 'White';
	    	    }
	    }
			if(mesCheck())
			{
	    return true;
			}
			else {
			return false;
			}
}



function goBack()
{
		alert('$message');
		window.location.href = '../index.php';
}
function loadDoc(pagina) {
	var xmlhttp;

	if (window.XMLHttpRequest) {
		xmlhttp = new XMLHttpRequest();
		xmlhttp.onreadystatechange = function() {
			if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
				document.getElementById("continut").innerHTML = xmlhttp.responseText;

			}
		}
	}

	xmlhttp.open("GET", pagina, true);
	xmlhttp.send();
}
