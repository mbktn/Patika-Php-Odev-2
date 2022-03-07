




<?php




$planets = ["Mercury", "Venus", "Earth", "Mars", "Jupiter", "Saturn", "Uranus", "Neptune", "", "", NULL];

$planets2=array_filter($planets);

$random = array_rand($planets2, 2); // 2 tane

$items = array_map(function($index) use ($planets2){
    return $planets2[$index];
}, $random);

print_r($items);



























