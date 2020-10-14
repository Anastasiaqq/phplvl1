<?php
$pics=scandir("image");
for($i=2; $i<=count($pics); $i++):?>
<a href="server.php?url="$pics[$i]" target="_blank" width="50%" height="50%">
    <?=$pics[$i]?>
</a>
<?php
     endfor;
?>
?>