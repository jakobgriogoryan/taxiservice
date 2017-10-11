<div class="page-content-wrapper">
    <div class="page-content">
        <!-- BEGIN PAGE HEADER-->
        <h3 class="page-title">
            Главная страница</h3>

        <div class="portlet light">
            <div class="portlet-body">
                <div class="row">
                    <div class="col-md-12 blog-page">
                        <div class="col-md-12">
                            <!-- BEGIN EXAMPLE TABLE PORTLET-->
                            <div class="portlet box grey-cascade">


                                <?php foreach ($cars as $car): ?>
                                <div class="portlet-body">
                                    <table class="table table-striped table-bordered table-hover datatable">
                                        <thead>
                                        <tr>
                                            <th>
                                                Имя
                                            </th>
                                            <th>
                                                Посад.мест
                                            </th>
                                            <th>
                                                Минимальный заказ
                                            </th>
                                            <th>
                                                Далее
                                            </th>
                                            <th>
                                                За МКАД
                                            </th>
                                            <th>
                                                Свыше 200км от МКАД
                                            </th>
                                            <div class="col-md-8 blog-article">
                                                <h3>
                                                    <a href="page_blog_item.html">
                                                        <?=$car->min_description?> </a>
                                                </h3>
                                                <p><?=$car->description?></p>
                                            </div>
                                        </tr>
                                        </thead>
                                        <tbody>

                                            <tr class="odd gradeX">
                                                <td><?= $car->name ?></td>
                                                <td><?= $car->passengers_count ?></td>
                                                <td><?= $car->minimum_order ?></td>
                                                <td><?= $car->further ?></td>
                                                <td><?= $car->for_mkad ?></td>
                                                <td><?= $car->over_200km ?></td>
                                                <td>
                                                    <button class="btn watch-cars-images" data-id="<?= $car->id ?>">
                                                        Посмотреть картинки
                                                    </button>
                                                </td>
                                            </tr>
                                        <?php endforeach ?>


                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <!-- END EXAMPLE TABLE PORTLET-->
                        </div>
                        <div class="row">

                            <!--end col-md-9-->
                            <!--end col-md-3-->
                        </div>
                        <ul class="pagination pull-right">
                            <li>
                                <a href="#">
                                    <i class="fa fa-angle-left"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    1 </a>
                            </li>
                            <li>
                                <a href="#">
                                    2 </a>
                            </li>
                            <li>
                                <a href="#">
                                    3 </a>
                            </li>
                            <li>
                                <a href="#">
                                    4 </a>
                            </li>
                            <li>
                                <a href="#">
                                    5 </a>
                            </li>
                            <li>
                                <a href="#">
                                    6 </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fa fa-angle-right"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>

<div class="page-content-wrapper">
    <div class="page-content">
        <!-- BEGIN PAGE HEADER-->
        <!-- END PAGE HEADER-->
        <div class="row">

        </div>

    </div>
</div>

<!-- Modal -->
<div id="watchCarsImages" class="modal fade" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Картинки</h4>
            </div>
            <div class="modal-body">
                <div id="carCarousel" class="carousel slide" data-ride="carousel">

                    <!-- Wrapper for slides -->
                    <div class="carousel-inner">

                    </div>

                    <!-- Left and right controls -->
                    <a class="left carousel-control" href="#carCarousel" data-slide="prev">
                        <span class="glyphicon glyphicon-chevron-left"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="right carousel-control" href="#carCarousel" data-slide="next">
                        <span class="glyphicon glyphicon-chevron-right"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Закрыть</button>
            </div>
        </div>

    </div>
</div>