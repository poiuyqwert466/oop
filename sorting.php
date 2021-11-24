<?php
class Sorting{
    public function sort_and_show(){
        $file = fopen("data.txt", "r");
$array = array();
while ( $line = fgets($file, 1000) ){
    $nl = mb_strtolower($line,'UTF-8');
    $array[] = $nl;
}
        sort($array);
        $string = implode('',$array);
        $name = strtolower($string);
            $name = preg_split('/\.|\!/', $name);              
            foreach ($name as &$sentence) {
                $sentence = ucwords(trim($sentence));
            }
            $output = "";
            $arr = explode("\n", $sentence);
        $array_count_values = array_count_values($arr);
        if(is_array($array_count_values) && count($array_count_values)>0){
            $num=0;
        foreach ($array_count_values as $key => $value){
               echo "Patient".$num." Name: ".$arr[$num];
               echo "<br>";
                   $num++;
              }
            }
        }
}
?>
