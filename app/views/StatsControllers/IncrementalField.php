<?php
function IncrementalField($lower, $upper) {
    for ($i=$lower; $i<=$upper; $i++) { ?>
        <option value=" <?php echo $i;?>"><?php echo $i;?> </option>
    <?php }
}
?>