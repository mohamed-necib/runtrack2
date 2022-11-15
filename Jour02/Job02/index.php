<?php

echo "Il manque certains nombres:";
echo "<br>";
for ($i = 0; $i <= 1337; $i++){
  switch ($i) {
    case 26:
        echo "=========> ICI <br> ";
        break;
    case 37:
        echo "=========> ICI <br> ";
        break;
    case 88:
        echo "=========> ICI <br> ";
        break;
    case 1111:
        echo "=========> Et ICI <br> ";
        break;
    default:
        echo "$i <br>";
}
}

?>