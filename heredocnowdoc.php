<?php
/* *
 * heredoc is a multiline string declaring syntax
 * it behaves as a "" string i.e. it parses the passed
 * variables
 * */
$b=10;
$c=<<<EDS
this is a variable $b in heredoc <br/>
EDS;

echo $c;

/* *
 * nowdoc is yet another multiline string declaring syntax
 * it behaves as a '' string i.e. it does not parse the passed
 * variables
 * */
$c=<<<'EDS'
this is a variable $b in nowdoc
EDS;
echo $c;
?>