<html>
<body>
<?php 
if(isset($_GET['key']))
{
$url =$_GET['key'];
$site = DB::table('shrinkings')->where('key',$url)->value('url');
echo $site;
header("location:". $site);
    exit();
}
    else
        echo "nothing";
    ?>
</body>
</html>