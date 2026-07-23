<?php
// 301 redirect: old mixed-case URL -> standardized lowercase-hyphenated URL
header("HTTP/1.1 301 Moved Permanently");
header("Location: https://maya.edu.in/coe.php");
exit;
