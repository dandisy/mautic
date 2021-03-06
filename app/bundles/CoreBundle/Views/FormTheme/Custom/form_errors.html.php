<?php if (count($errors) > 0): ?>
    <div class="help-block">
    <?php if (count($errors) > 1): ?>
        <ul>
            <?php foreach ($errors as $error): ?>
                <li><?php echo $view->escape($error->getMessage()); ?></li>
            <?php endforeach; ?>
        </ul>
    <?php else: ?>
        <?php echo $view->escape($errors[0]->getMessage()); ?>
    <?php endif; ?>
    </div>
<?php endif; ?>
