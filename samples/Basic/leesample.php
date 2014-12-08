<?php
require __DIR__ .'/../src/autoload.php';
$faker = Faker\Factory::create();
$faker->seed(5);
echo '<?xml version="1.0" encoding="UTF-8"?>';

for ($i=0; $i < 10; $i++){
echo "Name : ".$faker->firstName;
echo "</br>";

echo "city : ".$faker->city;
echo "</br>";
}
?>