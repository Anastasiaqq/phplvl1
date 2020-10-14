<?php
    for($i=1; $i<=count($row); $i++){
        if($i!=0):?>
<a href="server1.php?url='$lk[$i]'" target="_blank" width="50%" height="50%"><img src="<?=$lk[$i]"?></a>
    <?php
    endif;
    endfor;
?>