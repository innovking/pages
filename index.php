<?php
 //values
  $dif='';
  $pList=array(;//page list
   'doctype'=>$dif.'_pgs/doctype.php',//doctype
    'head'=>$dif.'_pgs/head.php',//head
    'body'=>$dif.'_pgs/bod.php',//body
    'footer'=>$dif.'_pgs/footer.php'//footer
  );
 //includes
  include("pages.php");//includes the pages class_alias
 //classes
  $pge=new pg(array());//pages
 $pge->load(array( 'pages'=>$pList ));//loads pages
   $pge->make(array( 'list'=>'doctype, head, bod, footer', 'return'=>'string' ));//creates the current page
  $curPage=$pge->doc(array( 'obj'=>'current' ));//gets current page
 echo $curPage;//outputs current page
?>
