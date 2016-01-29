<?php
    require_once 'config.php';
    mysql_select_db("rhdir", $con);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Treatment Tube</title>

    <!-- Head -->
    <?php include 'include/head.php';  ?>

    <link rel="stylesheet" href="style.css" type="text/css" />

</head><!--/head-->

<body class="">

    <!-- Header -->
    <?php include 'include/mashableNav.php';  ?>
       
<section>
	<?php include 'include/tube-search.php'; ?>





<div id="sync1" class="owl-carousel">
  <div class="item"><h1>1</h1></div>
  <div class="item"><h1>2</h1></div>
  <div class="item"><h1>3</h1></div>
  <div class="item"><h1>4</h1></div>
  <div class="item"><h1>5</h1></div>
  <div class="item"><h1>6</h1></div>
  <div class="item"><h1>7</h1></div>
  <div class="item"><h1>8</h1></div>
  <div class="item"><h1>9</h1></div>
  <div class="item"><h1>10</h1></div>
  <div class="item"><h1>11</h1></div>
  <div class="item"><h1>12</h1></div>
  <div class="item"><h1>13</h1></div>
  <div class="item"><h1>14</h1></div>
  <div class="item"><h1>15</h1></div>
  <div class="item"><h1>16</h1></div>
  <div class="item"><h1>17</h1></div>
  <div class="item"><h1>18</h1></div>
  <div class="item"><h1>19</h1></div>
  <div class="item"><h1>20</h1></div>
  <div class="item"><h1>21</h1></div>
  <div class="item"><h1>22</h1></div>
  <div class="item"><h1>23</h1></div>
</div>
<div id="sync2" class="owl-carousel">
  <div class="item"><h1>1</h1></div>
  <div class="item"><h1>2</h1></div>
  <div class="item"><h1>3</h1></div>
  <div class="item"><h1>4</h1></div>
  <div class="item"><h1>5</h1></div>
  <div class="item"><h1>6</h1></div>
  <div class="item"><h1>7</h1></div>
  <div class="item"><h1>8</h1></div>
  <div class="item"><h1>9</h1></div>
  <div class="item"><h1>10</h1></div>
  <div class="item"><h1>11</h1></div>
  <div class="item"><h1>12</h1></div>
  <div class="item"><h1>13</h1></div>
  <div class="item"><h1>14</h1></div>
  <div class="item"><h1>15</h1></div>
  <div class="item"><h1>16</h1></div>
  <div class="item"><h1>17</h1></div>
  <div class="item"><h1>18</h1></div>
  <div class="item"><h1>19</h1></div>
  <div class="item"><h1>20</h1></div>
  <div class="item"><h1>21</h1></div>
  <div class="item"><h1>22</h1></div>
  <div class="item"><h1>23</h1></div>
</div>

<script type="text/javascript">
$(document).ready(function() {
 
  var sync1 = $("#sync1");
  var sync2 = $("#sync2");
 
  sync1.owlCarousel({
    singleItem : true,
    slideSpeed : 1000,
    navigation: true,
    pagination:false,
    afterAction : syncPosition,
    responsiveRefreshRate : 200,
  });
 
  sync2.owlCarousel({
    items : 15,
    itemsDesktop      : [1199,10],
    itemsDesktopSmall     : [979,10],
    itemsTablet       : [768,8],
    itemsMobile       : [479,4],
    pagination:false,
    responsiveRefreshRate : 100,
    afterInit : function(el){
      el.find(".owl-item").eq(0).addClass("synced");
    }
  });
 
  function syncPosition(el){
    var current = this.currentItem;
    $("#sync2")
      .find(".owl-item")
      .removeClass("synced")
      .eq(current)
      .addClass("synced")
    if($("#sync2").data("owlCarousel") !== undefined){
      center(current)
    }
  }
 
  $("#sync2").on("click", ".owl-item", function(e){
    e.preventDefault();
    var number = $(this).data("owlItem");
    sync1.trigger("owl.goTo",number);
  });
 
  function center(number){
    var sync2visible = sync2.data("owlCarousel").owl.visibleItems;
    var num = number;
    var found = false;
    for(var i in sync2visible){
      if(num === sync2visible[i]){
        var found = true;
      }
    }
 
    if(found===false){
      if(num>sync2visible[sync2visible.length-1]){
        sync2.trigger("owl.goTo", num - sync2visible.length+2)
      }else{
        if(num - 1 === -1){
          num = 0;
        }
        sync2.trigger("owl.goTo", num);
      }
    } else if(num === sync2visible[sync2visible.length-1]){
      sync2.trigger("owl.goTo", sync2visible[1])
    } else if(num === sync2visible[0]){
      sync2.trigger("owl.goTo", num-1)
    }
    
  }
 
});
</script>
<style>
#sync1 .item{
    background: #0c83e7;
    padding: 80px 0px;
    margin: 5px;
    color: #FFF;
    -webkit-border-radius: 3px;
    -moz-border-radius: 3px;
    border-radius: 3px;
    text-align: center;
}
#sync2 .item{
    background: #C9C9C9;
    padding: 10px 0px;
    margin: 5px;
    color: #FFF;
    -webkit-border-radius: 3px;
    -moz-border-radius: 3px;
    border-radius: 3px;
    text-align: center;
    cursor: pointer;
}
#sync2 .item h1{
  font-size: 18px;
}
#sync2 .synced .item{
  background: #0c83e7;
}
</style>

</section>