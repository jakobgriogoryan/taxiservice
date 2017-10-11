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
                            <form class="register-form" action="<?= base_url() ?>admin/cars/create" method="post"
                                  enctype="multipart/form-data">
                                <?php echo validation_errors(); ?>
                                <div class="form-group">
                                    <label class="control-label" for="name">Имя (По Русский)</label>
                                    <?php if (isset($_POST['name'])): ?>
                                        <input class="form-control" type="text" value="<?= $_POST['name'] ?>"
                                               name="name" id="name"/>
                                    <?php else: ?>
                                        <input class="form-control" type="text" value="" name="name" id="name"/>
                                    <?php endif; ?>
                                </div>
                                <div class="form-group">
                                    <label class="control-label" for="name_en">Имя (English)</label>
                                    <?php if (isset($_POST['name_en'])): ?>
                                        <input class="form-control" type="text" value="<?= $_POST['name_en'] ?>"
                                               name="name_en"/>
                                    <?php else: ?>
                                        <input class="form-control" type="text" value="" name="name_en"/>
                                    <?php endif; ?>
                                </div>

                                <div class="form-group">
                                    <label class="control-label " for="min_description">Краткое описание (По
                                        Русский)</label>
                                    <?php if (isset($_POST['min_description'])): ?>
                                        <textarea name="min_description" rows="5"
                                                  class="form-control"><?= $_POST['min_description'] ?></textarea>
                                    <?php else: ?>
                                        <textarea name="min_description" rows="5" class="form-control"></textarea>
                                    <?php endif; ?>
                                </div>

                                <div class="form-group">
                                    <label class="control-label " for="min_description_en">Краткое описание
                                        (English)</label>
                                    <?php if (isset($_POST['min_description_en'])): ?>
                                        <textarea name="min_description_en" rows="5"
                                                  class="form-control"><?= $_POST['min_description_en'] ?></textarea>
                                    <?php else: ?>
                                        <textarea name="min_description_en" rows="5" class="form-control"></textarea>
                                    <?php endif; ?>
                                </div>

                                <div class="form-group">
                                    <label class="control-label " for="description">Описание (По Русский)</label>
                                    <?php if (isset($_POST['description'])): ?>
                                        <textarea name="description" rows="10"
                                                  class="form-control"><?= $_POST['description'] ?></textarea>
                                    <?php else: ?>
                                        <textarea name="description" rows="10" class="form-control"></textarea>
                                    <?php endif; ?>
                                </div>

                                <div class="form-group">
                                    <label class="control-label " for="description_en">Описание (English)</label>
                                    <?php if (isset($_POST['description_en'])): ?>
                                        <textarea name="description_en" rows="10"
                                                  class="form-control"><?= $_POST['description_en'] ?></textarea>
                                    <?php else: ?>
                                        <textarea name="description_en" rows="10" class="form-control"></textarea>
                                    <?php endif; ?>
                                </div>
                                <div class="form-group">
                                    <label class="control-label">Посадочные места</label>
                                    <select name="passengers_count" class="form-control">
                                        <?php foreach ($passengers_count as $count): ?>
                                            <?php if (isset($_POST['passengers_count']) && $_POST['passengers_count'] == $count): ?>
                                                <option selected value="<?= $count ?>"><?= $count ?></option>
                                            <?php else:; ?>
                                                <option value="<?= $count ?>"><?= $count ?></option>
                                            <?php endif; ?>
                                        <?php endforeach; ?>
                                    </select>

                                </div>

                                <div class="form-group">
                                    <label class="control-label " for="minimum_order">Минимальный заказ</label>
                                    <?php if (isset($_POST['minimum_order'])): ?>
                                        <input class="form-control" type="text" placeholder="Минимальный заказ "
                                               value="<?= $_POST['minimum_order'] ?>" name="minimum_order"
                                               id="minimum_order"/>
                                    <?php else: ?>
                                        <input class="form-control" type="text" placeholder="Минимальный заказ"
                                               name="minimum_order" id="minimum_order"/>
                                    <?php endif; ?>
                                </div>

                                <div class="form-group">
                                    <label class="control-label " for="further">Далее</label>
                                    <?php if (isset($_POST['further'])): ?>
                                        <input class="form-control" type="text" placeholder="Далее"
                                               value="<?= $_POST['further'] ?>" name="further" id="further"/>
                                    <?php else: ?>
                                        <input class="form-control" type="text" placeholder="Далее" name="further"
                                               id="further"/>
                                    <?php endif; ?>
                                </div>

                                <div class="form-group">
                                    <label class="control-label " for="login">За МКАД</label>
                                    <?php if (isset($_POST['for_mkad'])): ?>
                                        <input class="form-control" type="text" autocomplete="off"
                                               value="<?= $_POST['for_mkad'] ?>" placeholder="За МКАД" name="for_mkad"
                                               id="for_mkad"/>
                                    <?php else: ?>
                                        <input class="form-control" type="text" autocomplete="off" placeholder="За МКАД"
                                               name="for_mkad" id="for_mkad"/>
                                    <?php endif; ?>
                                </div>

                                <div class="form-group">
                                    <label class="control-label " for="Over_200km">Свыше 200км от МКАД</label>
                                    <?php if (isset($_POST['over_200km'])): ?>
                                        <input class="form-control" type="text" autocomplete="off"
                                               value="<?= $_POST['over_200km'] ?>" placeholder="Свыше 200км от МКАД"
                                               name="over_200km" id="Over_200km"/>
                                    <?php else: ?>
                                        <input class="form-control" type="text" autocomplete="off"
                                               placeholder="Свыше 200км от МКАД" name="over_200km" id="Over_200km"/>
                                    <?php endif; ?>
                                </div>

                                <h3>Выберите картинку:</h3>
                                <?php for ($i = 1; $i <= 10; $i++): ?>
                                    <div class="checkbox-list">
                                        <label> Сделать главным
                                            <input type="checkbox" class="checker" name="main_image_<?= $i ?>">
                                        </label>
                                    </div>
                                    <input type="file" name="image_<?= $i ?>">
                                <?php endfor; ?>

                                <div class="form-actions">
                                    <button type="submit" id="register-submit-btn"
                                            class="btn btn-success uppercase pull-left">Дабавить
                                    </button>
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