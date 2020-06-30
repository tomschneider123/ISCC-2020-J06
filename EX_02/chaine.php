<html>
<head>
<title> Chaîne </title>
</head>

<body>
<?php

$str1 = "La maîtrise des fondamentaux du code et de la programmation dans les domaines du business,du marketing et de la communication est un avantage sérieux et utile"
echo $str1;
echo strlen($str1);
echo str_word_count("La maîtrise des fondamentaux du code et de la programmation dans les domaines du business,du marketing et de la communication est un avantage sérieux et utile");
echo strtolower ($str1);
echo strtoupper ($str1);
echo str_shuffle ($str1);

$str1 = substr($str1,0,-32);
echo $str1;
?>
</body>





</html>