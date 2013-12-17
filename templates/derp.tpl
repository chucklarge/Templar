<?php $a = "well hello <strong>$staff</strong>";?>

<?php
$str = <<<EOD
Example of string
spanning multiple lines
using heredoc syntax. $bcontent
<strong>$ccontent</strong>
EOD;
?>

<?php include "base.tpl"; ?>
