<?php
$xmlString = '<employees>
                   <employee EmpType="SalesManager">
                     <lastName>Cashman</lastName>
                     <firstName>Briant</firstName>
                   </employee>
                   <employee EmpType="SalesManager">
                     <lastName>Moneyman</lastName>
                     <firstName>John</firstName>
                   </employee>
                   <employee EmpType="Boss">
                     <lastName>Goldman</lastName>
                     <firstName>Wick</firstName>
                   </employee>
                 </employees>';
$doc = new DOMDocument();
$doc->preserveWhiteSpace=false;
$doc->loadXML($xmlString);
$root = $doc->documentElement;
$root->setAttribute("id", "777");

/* Modify Child Node Element */
$xpath = new DOMXPath($doc);
$entries = $xpath->query("/employees/employee[1]");
$entries[0]->setAttribute("id", "001") ;

$entries = $xpath->query("/employees/employee[1]/lastName");
$entries[0]->nodeValue = "Cashman 2" ;

$entries = $xpath->query("/employees/employee[1]/@id");
$entries[0]->nodeValue = "002" ;

/* Delete Child Node  */
// $entries = $xpath->query("/employees/employee[1]/firstName");
// $entries[0]->parentNode->removeChild($entries[0]);

/* for loop modify or remove child element  */
$entries = $xpath->query("/employees/employee/firstName");
foreach($entries as $arr){
  $arr->parentNode->removeChild($arr) ;
}

header("Content-type: text/xml", true);
echo $doc->saveXML();


?>
