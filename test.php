<?php
$file = file_get_contents('city.list.json');

echo "<pre>";
print_r(json_decode("[".$file."]"));
echo "</pre>";
