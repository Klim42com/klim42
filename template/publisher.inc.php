<ul class="list-group col-md-12 col-sm-12">
<?php
if (count($publisher)) :
    for ($i = 0; $i < count($publisher); $i++) {
        ?>
        <li class="list-group-item">
            <input type="checkbox"   id="exampleCheck<?=$i?>">
            <label class="form-check-label" for="exampleCheck<?=$i?>"><?= $publisher[$i]?></label>
        </li>
    <?php
    }
   ?>
        <li class="list-group-item">
        <button type="button" class="btn btn-success">Найти</button>
        </li>
<?php
else :
?>
    <li class="list-group-item">
        <p class="form-check-label">No publisher!</p>
    </li>
<?php
endif;
?>
</ul>
