<?php
// For PHP 5 and up

# accept a term (keyword)
# respond with a value
// $query = $_REQUEST['q'];

// $definition = [
//     "definition" => "a statement of the exact meaning of a word, especially in a dictionary.",
//     "bar" => "a place that sells alcholic beverages",
//     "ajax" => "technique which involves the use of javascript and xml"
// ];

// print $query;
// print "<br>";
// print($definition[$query]);
// // print $definition['definition']

header("Content-type: text/xml");
print("");
$string = <<<XML
<ol>
	<li>
		<definition>
			definition = a statement of the exact meaning of a word, especially in a dictionary.
		</definition>
		<authors>
			<p>Author: <h2>Damion Lowers</h2></p>
		</authors>
	</li>
	<li>
		<definition>
			bar = a place that sells alcholic beverages.
		</definition>
		<authors>
			<p>Author: <h2>Damion Lowers</h2></p>
		</authors>
	</li>
	<li>
		<definition>
			ajax = technique which involves the use of javascript and xml.
		</definition>
		<authors>
			<p>Author: <h2>Damion Lowers</h2></p>
		</authors>
	</li>
  </ol>
XML;
$xml = new SimpleXMLElement($string);
echo $xml->asXML();


?>
