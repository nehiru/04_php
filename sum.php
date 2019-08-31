<?php
/* 1.引数に数値を指定して実行すると、数値を2倍にして返す関数を作成してください */
function a($max) {
  $result = $max * 2;
  return $result;
}
echo a(100) . "\n";
?>
<?php
/*2.$a と $b を仮引数に持ち、　$a と $b　を足した結果を返す関数を作成してください*/
function sum($a , $b) {
  $result = $a + $b;
  return $result;
}
echo sum(3, 5) . "\n";
?>
<?php
/*3.$arr という配列の仮引数を持ち、数値が入った配列array(1, 3, 5 ,7, 9) を渡すとその要素をすべてかけた結果を返す関数を作成してください。*/
function f($arr) {
  $total = 1;
  foreach($arr as $value){
    $total *= $value;
  }
  return $total;
}
echo f(array(1, 3, 5, 7, 9)) . "\n";
?>
<?php
/*4.【応用】　次のプログラムは、配列の中で一番大きい値を返す max_array という関数を実装しようとしています。途中の部分を完成させてください。*/
function max_array($arr) {
 $max_number = $arr[0];
 foreach($arr as $a) {
   if ($max_number < $a) {
     $max_number = $a;
   }
 }
 return $max_number;
}
echo max_array(array(1, 3, 5, 7, 9)) . "\n";

?>
<?php
/*5.次のビルトイン関数の用途、使い方を調べて実際に使ってみてください。*/
/* strip_tag使用の場合*/
$text = '<p>Test paragraph.<p><!-- Comment --><a href="#fragment">Other text</a>';
echo strip_tags($text);
echo "\n";
echo strip_tags($text, '<p><a>');

/*array_push使用の場合*/
$stack = array("orange", "banana");
array_push($stack, "apple", "raspberry");
print_r($stack);

/*array_merge*/
$array1 = array("color" => "red", 2 ,4);
$array2 = array("a", "b", "color" => "green", "shape" => "trapezoid", 4);
$result = array_merge($array1, $array2);
print_r($result);

/*time, mktime*/
$nextWeek = time() + (7 * 24 * 60 * 60);
echo 'Now:' .date('Y-m-d')."\n";
echo 'Now Week:' .date('Y-m-d', $nextWeek)."\n";

date_default_timezone_set('UTC');
echo "July 1, 2000 is on a" .date("l", mktime(0, 0, 0, 7, 1, 2000));

/*date*/
echo date('Y-m-d H:i:s', 10);