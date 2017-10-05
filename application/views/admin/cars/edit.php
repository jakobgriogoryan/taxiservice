<div class="page-content-wrapper" xmlns="http://www.w3.org/1999/html">
    <div class="page-content">
        <!-- BEGIN PAGE HEADER-->
        <h3 class="page-title">
            Дабавить автомобиль
        </h3>
        <div class="row">
            <div class="col-md-12">
                <!-- BEGIN PORTLET-->
                <div class="portlet box blue">
                    <div class="portlet-title">
                        <div class="caption">
                            <i class="fa fa-gift"></i>Дабавить
                        </div>
                        <div class="tools">
                            <a href="javascript:;" class="collapse">
                            </a>
                        </div>
                    </div>
                    <div class="portlet-body form">
                        <div class="form-body">
                            <!-- BEGIN FORM-->
                            <form class="register-form" action="<?= base_url()?>admin/cars/add" method="post">
                                <?php echo validation_errors(); ?>
                                <div class="form-group">
                                    <label class="control-label" for="name">Имя</label>
                                    <?php if(isset($_POST['name'])): ?>
                                        <input class="form-control" type="text" placeholder="Имя" value="<?= $_POST['name'] ?>" name="name" id="name"/>
                                    <?php else: ?>
                                        <input class="form-control" type="text" placeholder="Имя" value="" name="name" id="name"/>
                                    <?php endif; ?>
                                </div>
                                <div class="form-group">
                                    <span><h4>Посадочные места</h4></span>
                                    <?php if(isset($_POST['passengers_count'])): ?>
                                        <select value="<?= $_POST['passengers_count'] ?>" name="passengers_count"/>
                                        <option>4</option>
                                        <option>5</option>
                                        <option>5-6</option>
                                        <option>6-7</option>
                                        <option>7-8</option>
                                        <option>9-11</option>
                                        <option>12-17</option>
                                        <option>18-20</option>
                                        </select>
                                    <?php else: ?>
                                        <select  value="" name="passengers_count"/>
                                        <option>4</option>
                                        <option>5</option>
                                        <option>5-6</option>
                                        <option>6-7</option>
                                        <option>7-8</option>
                                        <option>9-11</option>
                                        <option>12-17</option>
                                        <option>18-20</option>
                                        </select>
                                    <?php endif; ?>
                                </div>

                                <div class="form-group">
                                    <label class="control-label " for="minimum_order">Минимальный заказ</label>
                                    <?php if(isset($_POST['minimum_order'])): ?>
                                        <input class="form-control" type="text" placeholder="Минимальный заказ " value="<?= $_POST['minimum_order'] ?>" name="minimum_order" id="minimum_order"/>
                                    <?php else: ?>
                                        <input class="form-control" type="text" placeholder="Минимальный заказ" name="minimum_order" id="minimum_order"/>
                                    <?php endif; ?>
                                </div>

                                <div class="form-group">
                                    <label class="control-label " for="further">Далее</label>
                                    <?php if(isset($_POST['further'])): ?>
                                        <input class="form-control" type="text" placeholder="Далее" value="<?= $_POST['further'] ?>" name="further" id="further" />
                                    <?php else: ?>
                                        <input class="form-control" type="text" placeholder="Далее" name="further" id="further" />
                                    <?php endif; ?>
                                </div>

                                <div class="form-group">
                                    <label class="control-label " for="login">За МКАД</label>
                                    <?php if(isset($_POST['for_mkad'])): ?>
                                        <input class="form-control" type="text" autocomplete="off" value="<?= $_POST['for_mkad'] ?>" placeholder="За МКАД" name="for_mkad" id="for_mkad" />
                                    <?php else: ?>
                                        <input class="form-control" type="text" autocomplete="off" placeholder="За МКАД" name="for_mkad" id="for_mkad" />
                                    <?php endif; ?>
                                </div>

                                <div class="form-group">
                                    <label class="control-label " for="Over_200km">Свыше 200км от МКАД</label>
                                    <?php if(isset($_POST['Over_200km'])): ?>
                                        <input class="form-control" type="text" autocomplete="off" value="<?= $_POST['Over_200km'] ?>" placeholder="Свыше 200км от МКАД" name="Over_200km" id="Over_200km" />
                                    <?php else: ?>
                                        <input class="form-control" type="text" autocomplete="off" placeholder="Свыше 200км от МКАД" name="Over_200km" id="Over_200km" />
                                    <?php endif; ?>
                                </div>

                                <h3>Выберите картинку:</h3>
                                <input type="file" name="image" id="fileToUpload">

                                <div class="form-actions">
                                    <button type="submit" id="register-submit-btn" class="btn btn-success uppercase pull-left">Дабавить</button>
                                </div>
                            </form>
                            <!-- END FORM-->
                        </div>
                    </div>
                </div>
                <!-- END PORTLET-->
            </div>
        </div>
    </div>
</div>