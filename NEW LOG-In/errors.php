<?php $error = array(); ?>
<?php if (count($error) > 0 ) : ?>
    <div class="err">
        <?php foreach ($error as $error) : ?>
            <p><?php echo $error ?></p>
        <?php endforeach?>
    </div>
<?php endif ?>