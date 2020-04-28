<?php
function DisplayChecksFor($selected_criterion) {
    foreach($selected_criterion as $column): ?>
        <input type="checkbox" id=<?=$column?> name=<?=$column?>>
        <label for=<?=$column?>> <?=$column?> </label>
        <br>
    <?php endforeach;
}
?>