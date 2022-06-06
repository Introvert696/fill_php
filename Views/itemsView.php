<?php
require_once 'layout/header.php';
//print_r($items_arr );
?>
<!--  -->

<section class="py-5 text-center container">
    <div class="row py-lg-5">
        <div class="col-lg-6 col-md-8 mx-auto">
            <h1 class="fw-light">Мои работы</h1>
            <p class="lead text-muted">Здесь представлена коллекция моих работ за всю жизнь.</p>
        </div>
    </div>
</section>
<div class="album py-5 bg-light">
    <div class="container">

        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
            <!--  -->
            <?php foreach ($items_arr as $key => $value) { ?>

                <div class="col">
                    <div class="card shadow-sm">
                        <img src="<?php echo $value['image']; ?>" alt="<?php echo $value['title']; ?>">

                        <div class="card-body">
                            <p>
                            <h3><?php echo $value['title']; ?></h3>
                            </p>
                            <p class="card-text"><?php echo $value['desk']; ?></p>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="btn-group">
                                    <a href="/items/get/<?php echo $value['id']?>">
                                        <button type="button" class="btn btn-sm btn-outline-secondary">Посмотреть</button>
                                    </a>


                                </div>
                                <small class="text-muted"><?php echo $value['date']; ?></small>
                            </div>
                        </div>
                    </div>
                </div>
            <?php } ?>


            <!--  -->
        </div>
    </div>
</div>

<!--  -->
<?php
require_once 'layout/footer.php';

?>