<?php
    $contenido=file_get_contents("http://localhost/codeigniter/gitHub/formularioREAL/form1.php");

    $DOM = new DOMDocument();
	$DOM->loadHTML($contenido);

include('simple_html_dom.php');

	$Header = $DOM->getElementsByTagName('th');
	$Detail = $DOM->getElementsByTagName('td');

  foreach($Header as $NodeHeader)
{
  $aDataTableHeaderHTML[] = trim($NodeHeader->textContent);
}
//print_r($aDataTableHeaderHTML); die();

//#Get row data/detail table without header name as key
	/*$i = 0;
	$j = 0;
	foreach($Detail as $sNodeDetail)
	{
		$aDataTableDetailHTML[$j][] = trim($sNodeDetail->textContent);
		$i = $i + 1;
		$j = $i % count($aDataTableHeaderHTML) == 0 ? $j + 1 : $j;
	}
	print_r($aDataTableDetailHTML); die();
*/
$html = str_get_html(file_get_contents("http://localhost/codeigniter/gitHub/formularioREAL/form1.php"));


  foreach($html->find('td') as $e){

    echo $e->plaintext.'<br>';




  }
  die();


 ?>
