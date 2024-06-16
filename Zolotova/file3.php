<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div class="conteiner31">
    <div class="number 2"> <p><h4>4. Даны два файла, состоящие из предложений. <br>
    Создать третий файл, содержащий все предложения, которые есть хотя бы в одном из файлов. <br>
    Повторы не добавлять в третий файл.<br>5.Даны два файла, состоящие из предложений. <br>
    Создать третий файл, содержащий все повторяющиеся предложения.</h4></p>
     <p> 
    <?php
    $file = fopen('file.txt', 'w');
    $file1 = fopen('file2.txt', 'w');
    function merge_files($file, $file1)
    {
      $sent = file($file, file_ignore_new_lines);
      $sent1 = file($file1, file_ignore_new_lines);
      $newsent = array_unique(array_merge($sent, $sent1));
      file_put_contents($file3, implode("\n", $newsent));
    }
 $file = file_get_contents('file.txt');
 
foreach(explode(".", $file) as $v){
    echo "$v<br />";
}
     ?>
</body>
</html>