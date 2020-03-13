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
                <div class="container" ng-app="cartApp" ng-controller="cartCtrl">

                    <div class="row">
                        <div class="col-lg-12">
                            <h1 class="page-header"><h2><?php echo $book['name']; ?></h2>

                            </h1>
                        </div>
                    </div>

                    <div class="row">

                        <div class="col-md-6">
                            <?php if ($book['is_new']): ?>
                                <img src="/template/images/product-details/new.jpg" class="newarrival" alt="" />
                            <?php endif; ?>
                            <img class="img-responsive detalles"
                            <img src="<?php echo Book::getImage($book['id']); ?>" alt="" />
                        </div>

                        <div class="col-md-6">

                            <h3 class="text-info">Сведения о книге</h3>
                            <table class="table table-hover table-condensed">
                                <thead>
                                <tr>
                                    <td></td>
                                    <td></td>
                                </tr>
                                </thead>
                                <tr>
                                    <td><h4>Автор</h4></td>
                                    <td><h4><a href="/author/<?php echo $authorItem['id']; ?>"> <?php echo $authorItem['name']; ?></a></p></h4></td>
                                </tr>
                                <tr>
                                    <td><h4>Жанр</h4></td>
                                    <td><h4><?php echo $categoryItem['name']; ?></h4></td>
                                </tr>

                                <tr>

                                    <td><h3 class="text-info">Краткое описание</h3></td>
                                    <td><p><?php echo $book['description']; ?></p></td>
                                </tr>
                                <td rowspan="2">
                                    <div class="pager">
                                        <li>
                                            <a href="javascript:history.back()">
                                                <span class="glyphicon glyphicon-backward"></span> Назад
                                            </a>
                                        </li>
                                    </div>
                                </td>
                                <td rowspan="2">
                                    <div class="pager">
                                    <a href="#" data-id="<?php echo $book['id']; ?>"
                                       class="btn btn-default add-to-cart">

                                        <i class="fa fa-shopping-cart"></i>В корзину
                                    </a>
                                    </div>
                                </td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>




                <script src="/resources/js/controller.js" type="text/javascript"></script>
</section>

<?php include ROOT . '/views/layouts/footer.php'; ?>