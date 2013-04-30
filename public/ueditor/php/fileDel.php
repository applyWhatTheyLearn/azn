<?php
$name=trim($_REQUEST["name"]);
$path='./';
unlink($path.$name);