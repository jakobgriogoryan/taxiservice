<div class="page-content-wrapper">
    <div class="page-content">
        <!-- BEGIN PAGE HEADER-->
        <h3 class="page-title">
            Сервисы</h3>
        <!-- END PAGE HEADER-->
        <div class="row">
            <div class="col-md-12">
                <!-- BEGIN EXAMPLE TABLE PORTLET-->
                <div class="portlet box grey-cascade">
                    <div class="portlet-title">
                        <div class="caption">
                            <i class="fa fa-user"></i> Сервисы

                        </div>
                    </div>
                    <div class="portlet-body">

                        <table class="table table-striped table-bordered table-hover datatable">
                            <thead>
                            <tr>
                                <th>
                                    Имя
                                </th>
                                <th>
                                    Картинка
                                </th>
                                <th>
                                    Краткое описание
                                </th>
                                <th>
                                    Настроить
                                </th>
                            </tr>
                            </thead>
                            <tbody>

                            <?php foreach($services as $service): ?>
                                <tr class="odd gradeX">
                                    <td><?=$service->name ?></td>
                                    <td><img src="/assets/images/services/<?=$service->image ?>" height="100" class=""></td>
                                    <td><?=$service->min_description ?></td>
                                    <td>
                                        <a href="/admin/services/edit/<?=$service->id?>" title="Редактировать"><i class="fa fa-pencil"></i></a>
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