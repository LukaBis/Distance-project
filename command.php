#!/usr/bin/php
<?php

$arguments = getopt("f:s:");

$str1 = $arguments["f"];
$str2 = $arguments["s"];

echo(levenshtein($str1, $str2));
