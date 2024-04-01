<?php
include_once 'menu.php';
?>
 <style>
    
    h1{
      font-size: 35px;
      color: black;
      line-height: 95px;
      text-transform: uppercase;
      font-weight: 1000;}
  
      a{
        color: black;
        display: inline-block;
        padding: 10px 15px;
        line-height: 1;
        text-decoration: none; }
    
      </style>
<h1 align="center" style="background-color:khaki; height:100px;">WEB Shofi</h1>
    <div style="text-align:center;  color:black;">
    <!-- Home | Produk | Galeri | Gesbuk -->

<?php
foreach ($menu_atas as $key => $value){
    // echo "$key $value <br>";
    echo "<a href='index.php?hal=$key'> $value</a> |";
}
?>

</div>