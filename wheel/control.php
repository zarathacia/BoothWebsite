<?php
$myfile = fopen("./wheel.txt","w");
$page=$_GET['page'];

if($page=="tsyp")
{
    if (isset($myfile)){
        $txt = 1500;
        fwrite($myfile, $txt);
        fclose($myfile);
        header("Location: ../index.html");
        exit();
    }
}

if($page=="sb")
{
    if (isset($myfile)){
        $txt = 2000;
        fwrite($myfile, $txt);
        fclose($myfile);
        header("Location: ../sb.html");
        exit();
    }
}

if($page=="grss")
{
    if (isset($myfile)){
        $txt = 3000;
        fwrite($myfile, $txt);
        fclose($myfile);
        header("Location: ../grss.html");
        exit();
    }
}
if($page=="cs")
{
    if (isset($myfile)){
        $txt = 4000;
        fwrite($myfile, $txt);
        fclose($myfile);
        header("Location: ../cs.html");
        exit();
    }
}
if($page=="ras")
{
    if (isset($myfile)){
        $txt = 5000;
        fwrite($myfile, $txt);
        fclose($myfile);
        header("Location: ../ras.html");
        exit();
    }
}

if($page=="wie")
{
    if (isset($myfile)){
        $txt = 6000;
        fwrite($myfile, $txt);
        fclose($myfile);
        header("Location: ../wie.html");
        exit();
    }
}

 ?>