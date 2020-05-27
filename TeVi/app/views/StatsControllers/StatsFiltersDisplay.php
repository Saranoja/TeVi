<?php
function DisplayFiltersFor($selected_criterion) {
    foreach($selected_criterion as $choice): ?>
        <option value=<?=$choice?>> <?=$choice?> </option>
    <?php endforeach;
}
?>