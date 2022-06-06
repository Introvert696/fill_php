<?php
require_once 'layout/header.php';
//print_r($result_item);
?>
<!--  -->
<div class="container border">
    <h1 class="mt-2 mb-2">
        <p class="text-center"><?php echo $result_item['title'] ?></p>
    </h1>
    <hr>

    <img src="<?php echo $result_item['image'] ?>" alt="img-item" class="img-fluid rounded mx-auto d-block mt-5">
    <div class="container">
        <div class="container">
            <h3 class="mt-5">Описание:</h3>
            <hr>
            <div class="container mb-5">
                <p class="lead">
                    <?php echo $result_item['text'] ?>
                </p>
            </div>

        </div>
    </div>
</div>
<!--  -->
<?php
require_once 'layout/footer.php';

?>