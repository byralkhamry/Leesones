<?php 
### دوال التلاعب بالمصفوفات

array()
   
   $array = array(1, 2, 3);
 

count()
   
   $array = array(1, 2, 3, 4, 5);
   echo count($array);  5
   

array_push()
   $array = array(1, 2, 3);
   array_push($array, 4, 5);
   print_r($array);  Array ( [0] => 1 [1] => 2 [2] => 3 [3] => 4 [4] => 5 )
 

array_pop()
   $array = array(1, 2, 3);
   $last = array_pop($array);
   echo $last;  3
   print_r($array);  Array ( [0] => 1 [1] => 2 )


array_shift()
   $array = array(1, 2, 3);
   $first = array_shift($array);
   echo $first;  1
   print_r($array);  Array ( [0] => 2 [1] => 3 )


array_unshift()
   
 
   $array = array(1, 2, 3);
   array_unshift($array, 0);
   print_r($array);  Array ( [0] => 0 [1] => 1 [2] => 2 [3] => 3 )
  

### دوال البحث في المصفوفات

in_array()
   
   $array = array(1, 2, 3);
   if (in_array(2, $array)) {
       echo "العنصر موجود";
   }


array_search()
 
   $array = array(1, 2, 3);
   $key = array_search(2, $array);
   echo $key;  1
  

### دوال التصفية والفرز

array_filter()
   $array = array(1, 2, 3, 4, 5);
   $even = array_filter($array, function($value) {
       return $value % 2 === 0;
   });
   print_r($even);  Array ( [1] => 2 [3] => 4 )
 

sort()

   $array = array(3, 1, 4, 1, 5);
   sort($array);
   print_r($array); Array ( [0] => 1 [1] => 1 [2] => 3 [3] => 4 [4] => 5 )


rsort()
   
   $array = array(3, 1, 4, 1, 5);
   rsort($array);
   print_r($array); Array ( [0] => 5 [1] => 4 [2] => 3 [3] => 1 [4] => 1 )
 

array_reverse()
   
   
   $array = array(1, 2, 3);
   $reversed = array_reverse($array);
   print_r($reversed);  Array ( [0] => 3 [1] => 2 [2] => 1 )
   

### دوال الدمج والتجزئة

array_merge()
   
 
   $array1 = array(1, 2, 3);
   $array2 = array(4, 5, 6);
   $merged = array_merge($array1, $array2);
   print_r($merged);  Array ( [0] => 1 [1] => 2 [2] => 3 [3] => 4 [4] => 5 [5] => 6 )


array_slice()
   
  
   $array = array(1, 2, 3, 4, 5);
   $slice = array_slice($array, 1, 3);
   print_r($slice); Array ( [0] => 2 [1] => 3 [2] => 4 )
 

### دوال المفاتيح والقيم

array_keys()
   
   $array = array("a" => 1, "b" => 2, "c" => 3);
   $keys = array_keys($array);
   print_r($keys);  Array ( [0] => a [1] => b [2] => c )
   

array_values()
   
   $array = array("a" => 1, "b" => 2, "c" => 3);
   $values = array_values($array);
   print_r($values);  Array ( [0] => 1 [1] => 2 [2] => 3 )
 

array_key_exists()
   
   $array = array("a" => 1, "b" => 2, "c" => 3);
   if (array_key_exists("b", $array)) {
       echo "المفتاح موجود";
   }


### دوال إضافية

array_map()
   
   
   $array = array(1, 2, 3);
   $squared = array_map(function($value) {
       return $value * $value;
   }, $array);
   print_r($squared);  Array ( [0] => 1 [1] => 4 [2] => 9 )
  

array_reduce()
   
   
   $array = array(1, 2, 3, 4);
   $sum = array_reduce($array, function($carry, $item) {
       return $carry + $item;
   }, 0);
   echo $sum; // 10
   


?>