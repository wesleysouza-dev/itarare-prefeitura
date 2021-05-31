<?php 
    $class ='py-4';
    $classDisplay = 'justify-content-between';
    if (!$title_page) {
        $class ='pb-4 bg-white';
        $classDisplay = 'px-0 justify-content-start';
    }
?>
<div id="breadcrumb-main" class="<?= $class; ?>">
    <div class="container py-2 d-flex flex-wrap <?= $classDisplay; ?>">
        <?php if ($title_page) : ?><h2 class="mr-0 mr-sm-5"><?= $title_page; ?></h2> <?php endif; ?>

        <ul class="list-style-none d-flex flex-wrap align-items-center p-0 my-2">
            <li>
                <a href="index.php">Home</a>
            </li>
            <li>
                <a href="index.php">Caminho 01</a>
            </li>
            <li>
                Caminho Atual
            </li>
        </ul>
    </div>
</div>