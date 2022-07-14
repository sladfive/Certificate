<!DOCTYPE html>
<html lang="en">
<head>
<title>Create a Certificate Signed by a Certificate Authority</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.noirsolutions.net/esempi/php/CRT7/stile/fogliostile.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<style>
body,h1,h2,h3,h4,h5 {font-family: "Raleway", sans-serif}
</style>
</head>
<body class="w3-light-grey">

<div class="w3-content" style="max-width:1400px">

<!-- Header -->
<header class="w3-container w3-center w3-padding-32"> 
  <h1><b>Create Certificate</b></h1>
  
</header>

<!-- Grid -->
<div class="w3-row">

<!-- Blog entries -->
<div class="w3-col l8 s12">
  <!-- Blog entry -->
  <div class="w3-card-4 w3-margin w3-white">
    
    <div class="w3-container">
  
    </div>

    <div class="w3-container">
    
      <h2><b>CA Certificate Authority</b></h2>
      <img src="https://www.noirsolutions.net/esempi/php/CRT7/CA%20Certificate.png" alt="Certificate CA Autority" width="800" height="600">
      
     
	
<p>	In cryptography, a Certificate Authority, or Certification Authority CA, is a public or private trusted third part, authorized to issue a digital certificate through a procedure certification that follows international standards and in compliance with the relevant European and national legislation.

The system in question uses double-key, or asymmetric, cryptography, in which one of the two keys is made public within the certificate (public key), while the second, uniquely correlated with the first, remains secret and associated with the owner ( private key). A key pair can only be assigned to one owner.

The authority has a certificate with which all certificates issued to users are signed, and of course it must be installed on a secure machine
</p>
<p>

<strong> Certification Authorities </strong> are characteristics of a public key infrastructure (PKI), organized as follows:

a security policy that establishes the general principles;
a certificate practice statement (CPS), that is the document which illustrates the procedure for issuing, registering, suspending and revoking the certificate;
a certification authority (CA) system;
a registration authority (RA) system, that is the registration and authentication system of users who request the certificate;
a certificate server or the Validation Authority (VA) function that certifies the certificate-user / entity correspondence on behalf of (on behalf of) the CA.
Individuals, organizations, servers, software applications, websites, interconnection networks, digital content (ie the file that represents the content) can be certified; each CA specifies in its CPS who are the final entities that it is willing to certify and for what purposes of use (e-mail message signature and encryption certificates, network server authentication certificates, etc.).

Obviously, in order to be signed (digitally) the object must be a computer component (for example, you sign the "login credential" of a person, not the "person") but in the jargon the expression is simplified). The object can be digital native (a file that contains a document) or reduced to digital (a computer that is described through a configuration file that contains its identification properties).

</p>
	
	<div class="example">
<script>
var myRequest = null;

function CreateXmlHttpReq2(handler) {
  var xmlhttp = null;
  try {
    xmlhttp = new XMLHttpRequest();
  } catch(e) {
    try {
        xmlhttp = new ActiveXObject("Msxml2.XMLHTTP");
    } catch(e) {
        xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
    }
  }
  xmlhttp.onreadystatechange = handler;
  return xmlhttp;
}

function myHandler2() {
    if (myRequest.readyState == 4 && myRequest.status == 200) {
        e = document.getElementById("ex4result");
        e.innerHTML = myRequest.responseText;
    }
}

function esempio4() {
    var field1 = document.f1.field1.value;
	var field2 = document.f1.field2.value;
	var field3 = document.f1.field3.value;
	var field4 = document.f1.field4.value;
	var field5 = document.f1.field5.value;
	var field6 = document.f1.field6.value;
	var field7 = document.f1.field7.value;
	var fieldCA1 = document.f1.fieldCA1.value;
	var fieldCA2 = document.f1.fieldCA2.value;
	var fieldCA3 = document.f1.fieldCA3.value;
	
	
	
    var r = Math.random();
    myRequest = CreateXmlHttpReq2(myHandler2);
    myRequest.open("GET","secondo.php?field1="+escape(field1)+"&field2="+escape(field2)+"&field3="+escape(field3)+"&field4="+escape(field4)+"&field5="+escape(field5)+"&field6="+escape(field6)+"&field7="+escape(field7)+"&fieldCA1="+escape(fieldCA1)+"&fieldCA2="+escape(fieldCA2)+"&fieldCA3="+escape(fieldCA3)+"&rand="+escape(r));
    myRequest.send(null);
}
</script>
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
      <p>
	  
	  
	    <h3><b>Date Client Example</b></h3>

	 	 
	<form name="f1">  
	  
	  <label for="fname">State Or Province Name:</label><br><br>
  <input type="text" id="field1" name="field1"><br>
  <label for="lname">Country Name:</label><br>
  
  
  
  <select id="field2" name="field2">
  <option value="IT">Italia</option>
  <option value="GE">Germania</option>
  <option value="FR">Francia</option>
  <option value="US">USA</option>
  <option value="ES">Spagna</option>
  
  
  
  
  
</select>
	  
	<br><label for="lname">Locality Name:</label><br>
  <input type="text" id="field3" name="field3">
    
	   
	<br><label for="lname">Organization Name:</label><br>
  <input type="text" id="field4" name="field4">
  
  
  
  <br><label for="lname">Organization Unit Name:</label><br>
  <input type="text" id="field5" name="field5">
	  
	 

 <br> <label for="lname">Common Name:</label><br>
  <input type="text" id="field6" name="field6">
	  


<br>  <label for="lname">Email Address:</label><br>
  <input type="text" id="field7" name="field7">
  
  
  
	 
	  </p>
	  
	  <p>
	  
	  
	  
	    <h5><b>Date CA Certification Authority</b></h5>
	  
	  
<br>  <label for="lname">Common Name:</label><br>
  <input type="text" id="fieldCA1" name="fieldCA1">
  
	<br>    <label for="lname">Organizzation:</label><br>
  <input type="text" id="fieldCA2" name="fieldCA2">
  
	  
<br>	      <label for="lname">Country Name:</label><br>
  



<select id="fieldCA3" name="fieldCA3">
  <option value="IT">Italia</option>
  <option value="GE">Germania</option>
  <option value="FR">Francia</option>
  <option value="US">USA</option>
  <option value="ES">Spagna</option>
  
  
  
  
  
</select>

	  
	  </p>
	  
	  
	  
	<input type="button" onClick="esempio4()" value="Print Certificate" />  
	  
	  
	  
	  <div id="ex4result"></div>
	  
	  
	  
	  
	</form>  
	  
	  
	  
	  
	  
	  
	  
	  
	  
      <div class="w3-row">
        <div class="w3-col m8 s12">
         <h4>Tutorials</h4>
         
        <p> <a href="https://www.noirsolutions.net/esempi/php/date/">Compute difference Date</a></p>
         
          <p> <a href="https://www.noirsolutions.net/esempi/php/Euclide/">Lemma Euclide</a></p>
          
             <ul class="w3-ul w3-hoverable w3-white">
      <li class="w3-padding-16">
        <img src="img/Wordpress.jpg" alt="Wordpress Lesson" class="w3-left w3-margin-right" style="width:50px">
        <a href="https://www.noirsolutions.net/wordpress-tutorial-lezioni/">Wordpress Tutorial Lesson</a>
        
      </li>
      <li class="w3-padding-16">
        <img src="img/PHP.jpg" alt="PHP" class="w3-left w3-margin-right" style="width:50px">
        <a href="https://www.noirsolutions.net/la-rete-world-wide-web-funzionamento-definizioni/">Lesson PHP </a>
        
      </li>
	  <li class="w3-padding-16">
        <img src="img/MetodiMatematici.jpg" alt="Metodi Matematici" class="w3-left w3-margin-right" style="width:50px">
        <a href="https://www.noirsolutions.net/metodi-matematici-ingegneria/">Math for Engegnering</a>        
      </li>
	  
	  
	   <li class="w3-padding-16">
        <img src="img/Elettrotecnica.jpg" alt="Elettronic" class="w3-left w3-margin-right" style="width:50px">
        <a href="https://www.noirsolutions.net/lezioni-di-elettrotecnica/">Lesson of Elettronic </a>        
      </li>
	  <li class="w3-padding-16">
        <img src="img/SicurezzaInformatica.jpg" alt="Lesson Cyber Security" class="w3-left w3-margin-right" style="width:50px">
        <a href="https://www.noirsolutions.net/tutorial-sicurezza-informatica/">Lesson Cyber Security</a>        
      </li>
	  
	  
	  <li class="w3-padding-16">
        <img src="img/Fisica.jpg" alt="physics" class="w3-left w3-margin-right" style="width:50px">
        <a href="https://www.noirsolutions.net/materialedidattico/fisica/lezioni/">Physics</a>        
      </li>
	  
	  
	   <li class="w3-padding-16">
        <img src="img/RetiTelecomunicazioni.jpg" alt="Telecomunication System" class="w3-left w3-margin-right" style="width:50px">
        <a href="https://www.noirsolutions.net/la-rete-world-wide-web-funzionamento-definizioni/">Telecomunication System</a>        
      </li>
	  
	  
	  
	 
    </ul>
          
          
        </div>
        <div class="w3-col m4 w3-hide-small">
        
        </div>
      </div>
    </div>
  </div>
  <hr>

  <!-- Blog entry -->
 
<!-- END BLOG ENTRIES -->
</div>

<!-- Introduction menu -->
<div class="w3-col l4">
  <!-- About Card -->
 
  
  <!-- Posts -->
</div>
  <hr> 
 
  <!-- Labels / tags -->
  
  
<!-- END Introduction Menu -->
</div>

<!-- END GRID -->
</div><br>

<!-- END w3-content -->
</div>

<!-- Footer -->
<footer class="w3-container w3-dark-grey w3-padding-32 w3-margin-top">

</footer>

</body>
</html>
