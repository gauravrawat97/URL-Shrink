<html>
<body>
<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
    <input type="text" name="val">
    <input type="submit">
</form>
</body>
</html>
<?php
if(isset($_GET['val'])) {
    $val = $_GET['val'];
    $new_url = get_tiny_url($val);
    echo "<input value=".$new_url.">";

}



function get_tiny_url($url)  {
    $ch = curl_init();
    $timeout = 5;
    curl_setopt($ch,CURLOPT_URL,'http://tinyurl.com/api-create.php?url='.$url);
    curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);
    curl_setopt($ch,CURLOPT_CONNECTTIMEOUT,$timeout);
    $data = curl_exec($ch);
    curl_close($ch);
    return $data;
}

?>
