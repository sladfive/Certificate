<?php

global $gbl, $login, $ghtml;


$dn = array(
    "countryName" => $field2,
    "stateOrProvinceName" => $field1,
    "localityName" => $field3,
    "organizationName" => $field4,
    "organizationalUnitName" => $field5,
    "commonName" => $field6,
    "emailAddress" => $field7
);



$today = date("m.d.y") + rand(1,10000);



$certpath = "Client3.crt";






$keypath = "Client3.key";



$requestpath = "Client3.csr";









openssl_pkey_export($res, $privkey);




openssl_pkey_export_to_file($privkey, $keypath);
$csr = openssl_csr_new($dn, $privkey);
openssl_csr_export_to_file($csr, $requestpath);
$sscert = openssl_csr_sign($csr, null, $privkey, 365);
openssl_x509_export_to_file($sscert, $certpath);
$src = getcwd();
$dest = '/usr/local/lxlabs/kloxo/ext/lxhttpd/conf';

//////////////////////////////
//////////////////////////////
/////////////////////////////




$dn1 = array(
    "countryName" => $fieldCA3,
    "organizationName" => $fieldCA2,
    "commonName" => $fieldCA1,    
    "keyUsage" => "Digital Signature, Non Repudiation, Key Encipherment",
    "extendedKeyUsage" => "E-mail Protection, TLS Web Client Authentication"
    
);




$todayCA = date("m.d.y") + rand(1,10000);




$cerpathCA = "CA3.crt";

$keypathCA = "CA3.key";



$requestpathCA = "CA3.csr";


$privkeyCA = openssl_pkey_new();



openssl_pkey_export_to_file($privkeyCA, $keypathCA);
$csr1 = openssl_csr_new($dn1, $privkeyCA);
openssl_csr_export_to_file($csr1, $requestpathCA);
$sscert1 = openssl_csr_sign($csr1, null, $privkeyCA , 365);
openssl_x509_export_to_file($sscert1, $cerpathCA);
$src1 = getcwd();
$dest1 = '/usr/local/lxlabs/kloxo/ext/lxhttpd/conf';
//////////////////////////////////////
///////////////////////////////////////



$csrdata ="file://Client3.csr";


$cacert = "file://CA3.crt";
$privkey = array("file://CA3.key", "antares_9450_ANTARES");

$usercert = openssl_csr_sign($csrdata, $cacert, $privkey, 365);

openssl_x509_export($usercert, $certout);
//echo "<br>IL CERTIFICATO FINALE è :<br> $certout";

echo "<br> $certout<br>";

$cerpath2 = "final1.crt";
openssl_x509_export_to_file($usercert, $cerpath2);


openssl_csr_export_to_file($csr, $requestpath);

$src1 = getcwd();
$dest1 = '/usr/local/lxlabs/kloxo/ext/lxhttpd/conf';

echo '<p>

<a href="Client3.crt" download>
<img src="Clientcrt.jpg" alt="Client CRT" width="250" height="250">
</a>

</p>

';



echo '<p>
    
<a href="CA3.crt" download>
<img src="Cacrt.jpg" alt="CA CRT" width="250" height="250">
</a>
    
</p>
    
';


echo '<p>
    
<a href="final1.crt" download>
<img src="Certificate.jpg" alt="Final CRT" width="450" height="450">
</a>
    
</p>
    
';




while (($e = openssl_error_string()) !== false) {
    echo $e . "\n";
}




?>