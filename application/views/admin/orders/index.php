<div class="page-content-wrapper">
    <div class="page-content">
        <!-- BEGIN PAGE HEADER-->
        <h3 class="page-title">
            Заказы</h3>
        <!-- END PAGE HEADER-->
        <div class="row">
            <div class="col-md-12">
                <!-- BEGIN EXAMPLE TABLE PORTLET-->
                <div class="portlet box grey-cascade">
                    <div class="portlet-title">
                        <div class="caption">
                            <i class="fa fa-user"></i> Заказы

                        </div>
                    </div>
                    <div class="portlet-body">

                        <table class="table table-striped table-bordered table-hover datatable">
                            <thead>
                            <tr>
                                <th>
                                    Тип заказа
                                </th>
                                <th>
                                    Откуда
                                </th>
                                <th>
                                    Куда
                                </th>
                                <th>
                                    Когда
                                </th>
                                <th>
                                    Имя
                                </th>
                                <th>
                                    Телефон
                                </th>
                                <th>
                                    Эл. адрес
                                </th>
                                <th>
                                    Статус
                                </th>
                                <th>
                                    Создан
                                </th>
                                <th>
                                    Настроить
                                </th>
                            </tr>
                            </thead>
                            <tbody>

                            <?php foreach ($orders as $order): ?>
                                <tr class="odd gradeX">
                                    <td><?= $order->order_type ?></td>
                                    <td><?= $order->location ?></td>
                                    <td><?= $order->where_to ?></td>
                                    <td><?= $order->datetime ?></td>
                                    <td><?= $order->name ?></td>
                                    <td><?= $order->phone ?></td>
                                    <td><?= $order->email ?></td>
                                    <td><?= $status[$order->status] ?></td>
                                    <td><?= $order->create_at ?></td>
                                    <td>
                                        <?php if($order->status == 1): ?>
                                        <a href="/admin/orders/order/<?=$order->id ?>/2" onclick="return confirm('Вы уверены?')" class="btn btn-info">Потвердить</a>
                                        <a href="/admin/orders/order/<?=$order->id ?>/3" onclick="return confirm('Вы уверены?')" class="btn btn-danger">Отклонить</a>
                                        <?php endif; ?>
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