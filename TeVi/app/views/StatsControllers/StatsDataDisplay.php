<?php
function DisplayChecksFor($selected_criterion) {
    foreach($selected_criterion as $column): ?>
        <input type="checkbox" name="checkboxFilterRestriction[]" value=<?=$column?> id=<?=$column?> >
        <label for=<?=$column?>> <?=$column?> </label>
        <br>
    <?php endforeach;
}
?>


<?php
function DisplayRadioButtonsFor($selected_criterion) {
    foreach($selected_criterion as $column): ?>
        <input type="radio" name="radioFilterGroupBy" value=<?=$column?>  id=<?=$column?>>
        <label for=<?=$column?>> <?=$column?> </label>
        <br>
    <?php endforeach;
}
?>