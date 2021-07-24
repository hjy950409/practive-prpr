<?php
if ( $pageCode == "home" ) {
  $title = "홈";
}
else if ( $pageCode == "sub1" ) {
  $title = "서브1";
}
?>

<title><?=$title?></title>

<style>
  .active {
    color:red;
  }
</style>

<?php
$navItemHomeClass = "";
$navItemSub1Class = "";

if ( $pageCode == "home" ) {
  $navItemHomeClass = "active";
}
else if ( $pageCode == "sub1" ) {
  $navItemSub1Class = "active";
}
?>

<div style="border:1px solid black; text-align:right;">
  <a class="<?=$navItemHomeClass?>" href="index.php">홈</a>
  <a class="<?=$navItemSub1Class?>" href="sub1.php">서브1</a>
</div>