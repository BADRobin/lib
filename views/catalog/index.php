<?php include ROOT . '/views/layouts/header.php'; ?>

<section>
    <div class="container">
        <div class="row">
            <div class="col-sm-3">
                <div class="left-sidebar">
                    <h2>Жанры</h2>
                    <div class="panel-group category-products">
                        <?php foreach ($categories as $categoryItem): ?>
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a href="/category/<?php echo $categoryItem['id']; ?>">
                                            <?php echo $categoryItem['name']; ?>
                                        </a>
                                    </h4>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                    <h2>Авторы</h2>
                    <div class="panel-group category-products">
                        <?php foreach ($authors as $authorItem): ?>
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a href="/author/<?php echo $authorItem['id']; ?>">
                                            <?php echo $authorItem['name']; ?>
                                        </a>
                                    </h4>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>

            <div class="col-sm-9 padding-right">
                <div class="features_items">
                    <h2 class="title text-center">Весь список</h2>
                    
                    <?php foreach ($latestBooks as $book): ?>
                        <div class="col-md-3 col-sm-6 hero-feature">
                            <div class="thumbnail">

                                <img src="<?php echo Book::getImage($book['id']); ?>" alt="" />

                                <hr>
                                <h2>$<?php echo $book['price']; ?></h2>

                                <div class="caption">
                                    <p>
                                        <a href="/book/<?php echo $book['id']; ?>">
                                            <?php echo $book['name']; ?>
                                        </a>
                                    </p>
                                    <?php if ($book['is_new']): ?>
                                        <img src="/template/images/home/new.png" class="new" alt="" />
                                    <?php endif; ?>

                                    </p>
                                </div>
                            </div>
                        </div>
                    <?php endforeach;?>                   

                </div>


            </div>
        </div>
    </div>
</section>
    <script src="/template/js/controller.js" type="text/javascript"></script>
<?php include ROOT . '/views/layouts/footer.php'; ?>