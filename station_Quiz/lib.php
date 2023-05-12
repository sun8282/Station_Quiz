<?php


function views($page,$datas=[]){
    extract((array)$datas);
    require_once("./views/templates/header.php");
    require_once("./views/{$page}.php");
    require_once("./views/templates/footer.php");
}

function script($t){
    echo "<script>$t</script>";
}

function alert($t=""){
    !empty($t) && script("alert('$t')");
}
function move($p,$t){
    alert($t);
    script("location.href = '$p';");
}
function ss(){    
    return isset($_SESSION['user']) ? $_SESSION['user'] : false;
}