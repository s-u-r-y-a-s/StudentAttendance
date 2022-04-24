<script>
history.pushState(null, null, document.title);
window.addEventListener('popstate', function () {
    history.pushState(null, null, document.title);
});
</script>
<!--
removed all the unnecessary comments for this comment !!
};

</script>-->
<?php
clearstatcache();
session_destroy();
header("location:index.php");
?>
