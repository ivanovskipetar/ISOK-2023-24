<?php
/*
 * Вежба 1.1 – Дефинирање на полиња
Дефинирајте 3 полиња и тоа:
1. Нумеричко поле кое ќе ги содржи вредностите: 2, 5, 6, 10, 41, 24, 32, 9, 16, 19.
2. Асоцијативно поле кое ќе содржи 3 вредности и тоа: клучот ќе биде: вашето име,
вредностa ќе биде: вашето име. Истото и за презиме и градот од кој доаѓате.
3. Повеќе-димензионално поле кое ќе содржи integer вредности по ваш избор.
 * */
$numericArray = array(2, 5, 6, 10, 41, 24, 32, 9, 16, 19);
$associativeArray = array("Petar" => "Petar", "Ivanovski" => "Ivanovski", "Skopje" => "Skopje");
$multidimensionalArray = array(array(10, 20, 30), array(40, 50, 60), array(70, 80, 90));
/*
 * Вежба 1.2 – Изминување на полиња
Со користење на foreach() циклусот, изминете го нумеричкото поле од претходната вежба.
Притоа на екран испишете ги вредностите на полето за секој клуч:
*/
echo "Numeric array: ";
foreach ($numericArray as $value) {
    echo $value . " ";
}
echo "</br>";
echo "Associative array: ";
foreach ($associativeArray as $key=>$value) {
    echo $key . "=>" . $value.", ";
}
echo "</br>";

/*Вежба 1.3 – Изминување на полиња и додавање во ново поле
Со помош на некое од горните изминувања, изминете го нумеричкото поле од првата
вежба и во ново поле додајте ги сите вредности поголеми од 20. Додавањето извршете го
со функцијата array_push().
*/
$above20 = array();
foreach ($numericArray as $na) {
    if ($na > 20) {
        array_push($above20, $na);
    }
}
echo "Above 20: ";
echo "<pre>";
print_r($above20);
echo "</pre>";
/*Вежба 1.4 - Должина на стринг
Во дадената реченица, пресметајте ја должината на секој од зборовите и вредностите
ставете ги во асоцијативно поле, така што клуч ќе биде самиот збор, а вредноста ќе биде
бројот на карактери во тој збор
*/

$sentence = "PHP is a widely-used general-purpose scripting language that is especially suited for Web development";
echo "The length of each word in the sentence \"$sentence\" are:";
$arr = array();
foreach (explode(" ", $sentence) as $word) {
    $arr[$word] = strlen($word);
}
echo "<pre>";
print_r($arr);
echo "</pre>";
