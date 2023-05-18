<?php
$output=null;
$retval=null;
exec('lpr -o raw -H localhost -P GEZHI_micro-printer data.txt
', $output, $retval);