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
    foreach($selected_criterion as $column):
            if($column == 'Success'){ ?>
        <input type="radio" name="radioFilterGroupBy" value=<?=$column?> id=<?=$column?> checked>
        <label for=<?=$column?>> <?=$column?> </label>
        <br>
        <?php 
                }
        else {
            ?>
        <input type="radio" name="radioFilterGroupBy" value=<?=$column?>  id=<?=$column?>>
        <label for=<?=$column?>> <?=$column?> </label>
        <br>
       <?php 
        }
     endforeach;
}
?>


<?php
function DisplayChecksForDB($selected_criterion) {
    foreach($selected_criterion as $column): ?>
        <li><div>
        <input type="checkbox" name="checkboxFilterRestriction[]" value=<?=$column?> id=<?=$column?> >
        <label for=<?=$column?>> <?=$column?> </label>
        </div></li>
    <?php endforeach;
}
?>
