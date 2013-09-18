<?php
$string = 'This,is,a,comma,deliemited,string';
$delim = ',';
echo "string = $string<br />";
echo "delim = $delim<br />";
echo '<br />Tokens Follow:<br />';
$tok = strtok($string, $delim);
while ($tok !== false) {
    echo "toekn = '$tok'<br />";
    $tok = strtok($delim);
}
?>

