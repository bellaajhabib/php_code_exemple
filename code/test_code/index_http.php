<?php

echo "<pre>";

//print_r($_ENV);
//print_r($_SERVER);
header_remove('X-Powered-By');
print_r(headers_list());
echo "</pre>";
