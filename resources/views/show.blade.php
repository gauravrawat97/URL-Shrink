<html>
<body>
<?php
    if(sizeof($site)!=0){
header("location:". $site);
exit();
    }
    else
        echo "<h1>sorry wrong url</h1>";
    ?>
</body>
</html>