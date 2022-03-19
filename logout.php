<script>
history.pushState(null, null, document.title);
window.addEventListener('popstate', function () {
    history.pushState(null, null, document.title);
});
</script>
<!--
<script type = "text/javascript" >

function disableBackButton()

{

window.history.forward();

}

setTimeout("disableBackButton()", 0);

window.onunload=function()

{

null

};

</script>-->
<?php
clearstatcache();
session_destroy();
header("location:index.php");
?>
