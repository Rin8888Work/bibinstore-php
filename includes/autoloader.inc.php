<?php
  spl_autoload_register("myAutoloader");

  function myAutoloader($className)
  {
    $fullpath ="classes/".$className.".class.php";

    if(!file_exists($fullpath))
    {
      return false;
    }

    include_once $fullpath;
  }
?>
