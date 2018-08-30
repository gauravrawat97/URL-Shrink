<html>
<body>
<?php 
$url =$_GET['url'];
$num = rand(10000,90000);
$key = base_convert($num,18,32);
DB::table('shrinkings')->insert(
    ['num' => $num, 'url' => $url,'key'=>$key]
);
    
    
    echo "<input value=http://127.0.0.1:8000/".$key.">";  

    ?>
</body>
</html>