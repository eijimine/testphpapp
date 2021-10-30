<div class="rightSticky">
   <div class="i_right_container"> 
        <div class="rightSidebar_in">
            <div class="leftSidebarWrapper leftSidebarWrapper_mobile">
                <div class="btest">
                <?php
                    include("widgets/topinoras.php");
                    include("widgets/sponsored.php");
                    include("widgets/suggestedCreators.php");
                    if($conditionStatus == '0'){
                      include("widgets/becomeCreator.php");
                    } 
                ?>
                </div>
            </div>
        </div>  
   </div>
</div>
<?php if($logedIn == '1'){ ?>
<script src="<?php echo filter_var($base_url, FILTER_VALIDATE_URL);?>src/worker.js"></script>
<?php } ?>
<script type="text/javascript">
/*var message = "Function Disabled!";
function clickIE4() {
  if (event.button == 2) {
    //alert(message);
    return false;
  }
}
function clickNS4(e) {
  if (document.layers || (document.getElementById && !document.all)) {
    if (e.which == 2 || e.which == 3) {
      //alert(message);
      return false;
    }
  }
}
if (document.layers) {
  document.captureEvents(Event.MOUSEDOWN);
  document.onmousedown = clickNS4;
} else if (document.all && !document.getElementById) {
  document.onmousedown = clickIE4;
}
document.oncontextmenu = new Function("return false");*/
</script>