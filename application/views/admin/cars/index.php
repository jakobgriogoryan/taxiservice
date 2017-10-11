<div class="page-content-wrapper">
    <div class="page-content">
        <!-- BEGIN PAGE HEADER-->
        <h3 class="page-title">
            Машины</h3>
        <!-- END PAGE HEADER-->
        <div class="row">
            <div class="col-md-12">
                <!-- BEGIN EXAMPLE TABLE PORTLET-->
                <div class="portlet box grey-cascade">
                    <div class="portlet-title">
                        <div class="caption">
                            <i class="fa fa-user"></i>Машины

                        </div>
                    </div>
                    <div class="portlet-body">
                        <div class="table-toolbar">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="btn-group">
                                        <a id="sample_editable_1_new" href="/admin/cars/create" class="btn green">
                                            Дабавить <i class="fa fa-plus"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
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
                                <th>
                                    Создано
                                </th>
                                <th>
                                    Настроить
                                </th>
                            </tr>
                            </thead>
                            <tbody>

                            <?php foreach ($cars as $car): ?>
                                <tr class="odd gradeX">
                                    <td><?= $car->name ?></td>
                                    <td><?= $car->passengers_count ?></td>
                                    <td><?= $car->minimum_order ?></td>
                                    <td><?= $car->further ?></td>
                                    <td><?= $car->for_mkad ?></td>
                                    <td><?= $car->over_200km ?></td>
                                    <td><?= $car->create_at ?></td>
                                    <td>
                                        <a href="/admin/cars/edit/<?= $car->id ?>" title="Редактировать"><i
                                                    class="fa fa-pencil"></i></a>
                                        <button title="Удалить" class="delete-car" data-id="<?= $car->id ?>"><i
                                                    class="fa fa-remove"></i></button>
                                        <button class="btn watch-cars-images" data-id="<?= $car->id ?>">Посмотреть
                                            картинки
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