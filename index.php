<html><head><title>Counter Adblock</title>
<style>
#iframe1
{
position:absolute;
top:-400px;
}

</style>
</head>
<?php

if ($_GET['a'])
{
        $a= ($_GET['a']);
        echo "<body style='padding:0; margin:0; width:100%; height:100%;' id='bodyframe' name='bodyframe'>";
        echo "<iframe allowtransparency=true frameborder=0 id='frame1' name='frame1' style='width:100%; margin:0px; padding:0px; height:100%;' src='".$a."'>";
        echo "</iframe>";
}
else {
        echo "<body style='padding:0; margin:0; width:100%; height:100%;'>";
        echo "<center><div style='position:absolute;top:25%;height:100%;width:100%;margin:0px;padding:0px;'>
<form >Enter the Web Address that you wish to have ads removed from:<br />
<input type='text' size='100' id='addy' value='http://news.bbc.co.uk/' /></form>
<button onclick=\"location.href='/addads/index.php?a='+encodeURIComponent(document.getElementById('addy').value);\">
	Go</button>
</div></center>";
}

function check_input($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    //$data = htmlentities($data);
    $data = mysql_real_escape_string($data);
    return $data;
}

?>
</body>
</html>



