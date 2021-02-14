<?php
require 'config.php';
require 'condb-inc.php';

$json = array();
$sql = mysqli_query($result, "select title,
    url,
    icon
    from jos_weblinks
    where published = '1'
    order by ordering
");
while($rs = mysqli_fetch_assoc($sql)){
    array_push($json, $rs);
}
print json_encode($json, JSON_UNESCAPED_UNICODE);
mysqli_close($result);
?>