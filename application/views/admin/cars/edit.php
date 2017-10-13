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
                            <form class="cars-form" action="<?= base_url() ?>admin/cars/edit/<?= $id ?>"
                                  method="post" enctype="multipart/form-data">
                                <?php echo validation_errors(); ?>
                                <div class="form-group">
                                    <label class="control-label" for="name">Имя</label>
                                    <?php if (isset($_POST['name'])): ?>
                                        <input class="form-control" type="text" placeholder="Имя"
                                               value="<?= $_POST['name'] ?>" name="name" id="name"/>
                                    <?php else: ?>
                                        <input class="form-control" type="text" placeholder="Имя"
                                               value="<?= $car[0]->name ?>" name="name" id="name"/>
                                    <?php endif; ?>
                                </div>
                                <div class="form-group">
                                    <label class="control-label" for="name_en">Имя</label>
                                    <?php if (isset($_POST['name_en'])): ?>
                                        <input class="form-control" type="text" placeholder="Имя"
                                               value="<?= $_POST['name_en'] ?>" name="name_en"/>
                                    <?php else: ?>
                                        <input class="form-control" type="text" placeholder="Имя"
                                               value="<?= $car[0]->name_en ?>" name="name_en"/>
                                    <?php endif; ?>
                                </div>
                                <div class="form-group">
                                    <label class="control-label " for="min_description">Краткое описание (По
                                        Русский)</label>
                                    <?php if (isset($_POST['min_description'])): ?>
                                        <textarea name="min_description" rows="5"
                                                  class="form-control"><?= $_POST['min_description'] ?></textarea>
                                    <?php else: ?>
                                        <textarea name="min_description" rows="5"
                                                  class="form-control"><?= $car[0]->min_description ?></textarea>
                                    <?php endif; ?>
                                </div>

                                <div class="form-group">
                                    <label class="control-label " for="min_description_en">Краткое описание
                                        (English)</label>
                                    <?php if (isset($_POST['min_description_en'])): ?>
                                        <textarea name="min_description_en" rows="5"
                                                  class="form-control"><?= $_POST['min_description_en'] ?></textarea>
                                    <?php else: ?>
                                        <textarea name="min_description_en" rows="5"
                                                  class="form-control"><?= $car[0]->min_description_en ?></textarea>
                                    <?php endif; ?>
                                </div>

                                <div class="form-group">
                                    <label class="control-label " for="description">Описание (По Русский)</label>
                                    <?php if (isset($_POST['description'])): ?>
                                        <textarea name="description" rows="10"
                                                  class="form-control"><?= $_POST['description'] ?></textarea>
                                    <?php else: ?>
                                        <textarea name="description" rows="10"
                                                  class="form-control"><?= $car[0]->description ?></textarea>
                                    <?php endif; ?>
                                </div>

                                <div class="form-group">
                                    <label class="control-label " for="description_en">Описание (English)</label>
                                    <?php if (isset($_POST['description_en'])): ?>
                                        <textarea name="description_en" rows="10"
                                                  class="form-control"><?= $_POST['description_en'] ?></textarea>
                                    <?php else: ?>
                                        <textarea name="description_en" rows="10"
                                                  class="form-control"><?= $car[0]->description_en ?></textarea>
                                    <?php endif; ?>
                                </div>
                                <div class="form-group">
                                    <label class="control-label">Посадочные места</label>
                                    <select name="passengers_count" class="form-control">
                                        <?php foreach ($passengers_count as $count): ?>
                                            <?php if (isset($_POST['passengers_count']) && $_POST['passengers_count'] == $count): ?>
                                                <option selected value="<?= $count ?>"><?= $count ?></option>
                                            <?php else:; ?>
                                                <?php if ($car[0]->passengers_count == $count): ?>
                                                    <option selected value="<?= $count ?>"><?= $count ?></option>
                                                <?php else: ?>
                                                    <option value="<?= $count ?>"><?= $count ?></option>
                                                <?php endif; ?>

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
                                               value="<?= $car[0]->minimum_order ?>" name="minimum_order"
                                               id="minimum_order"/>
                                    <?php endif; ?>
                                </div>

                                <div class="form-group">
                                    <label class="control-label " for="further">Далее</label>
                                    <?php if (isset($_POST['further'])): ?>
                                        <input class="form-control" type="text" placeholder="Далее"
                                               value="<?= $_POST['further'] ?>" name="further" id="further"/>
                                    <?php else: ?>
                                        <input class="form-control" type="text" placeholder="Далее"
                                               value="<?= $car[0]->further ?>" name="further" id="further"/>
                                    <?php endif; ?>
                                </div>

                                <div class="form-group">
                                    <label class="control-label " for="login">За МКАД</label>
                                    <?php if (isset($_POST['for_mkad'])): ?>
                                        <input class="form-control" type="text" autocomplete="off"
                                               value="<?= $_POST['for_mkad'] ?>" placeholder="За МКАД" name="for_mkad"
                                               id="for_mkad"/>
                                    <?php else: ?>
                                        <input class="form-control" type="text" autocomplete="off"
                                               value="<?= $car[0]->for_mkad ?>" placeholder="За МКАД" name="for_mkad"
                                               id="for_mkad"/>
                                    <?php endif; ?>
                                </div>

                                <div class="form-group">
                                    <label class="control-label " for="Over_200km">Свыше 200км от МКАД</label>
                                    <?php if (isset($_POST['over_200km'])): ?>
                                        <input class="form-control" type="text" autocomplete="off"
                                               value="<?= $_POST['over_200km'] ?>" placeholder="Свыше 200км от МКАД"
                                               name="over_200km"/>
                                    <?php else: ?>
                                        <input class="form-control" type="text" autocomplete="off"
                                               value="<?= $car[0]->over_200km ?>" placeholder="Свыше 200км от МКАД"
                                               name="over_200km"/>
                                    <?php endif; ?>
                                </div>
                                <div class="form-group">
                                    <label><h3>Выберите тип маршрута для подходящих автомобилей</h3></label>
                                    <div class="row">
                                        <?php foreach ($all_car_types as $all_car_type): ?>
                                            <div class="col-md-3 car_type_block">
                                                <?php if (in_array($all_car_type->id, $car_types)): ?>
                                                    <input checked type="checkbox" class="checker" name="car_type[]"
                                                           value="<?= $all_car_type->id ?>">
                                                <?php else: ?>
                                                    <input type="checkbox" class="checker" name="car_type[]"
                                                           value="<?= $all_car_type->id ?>">
                                                <?php endif; ?>
                                                <?= $all_car_type->name ?>
                                            </div>
                                        <?php endforeach; ?>
                                    </div>
                                    <hr>

                                </div>
                                <h3>Текущие картинки:</h3>
                                <div class="row exist-images">
                                    <?php $i = 0;
                                    foreach ($images as $image): ?>
                                        <div class="col-md-4" data-id="<?= $image->image_id ?>">
                                            <a href="javascript:;" data-id="<?= $image->image_id ?>"
                                               data-image="<?= $image->name ?>" class="remove-image"
                                               style="color:red"><i class="fa fa-remove"></i></a>
                                            <span class="image-button-block">
                                                <?php if (!$image->main): ?>
                                                    <button type="button" class="" data-id="<?= $image->image_id ?>"
                                                            data-car-id="<?= $image->car_id ?>"
                                                            onclick="change_main_picture(this)">Сделать главным</button>
                                                <?php endif; ?>
                                            </span>
                                            <input type="hidden" name="exist_image_<?= $i ?>"
                                                   value="<?= $image->image_id ?>">
                                            <img class="img-responsive" src="/assets/images/cars/<?= $image->name ?>">
                                        </div>
                                        <?php $i++; endforeach; ?>
                                </div>
                                <h3>Выберите картинку:</h3>
                                <table class="car-file-table edit">
                                    <thead>
                                    <tr>
                                        <th>Выбрать файл</th>
                                        <th>Сделать главным</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php for ($i = 1; $i <= 10; $i++): ?>
                                        <tr>
                                            <td class="block-file"><input type="file" id="image_<?= $i ?>"
                                                                          name="image_<?= $i ?>"></td>
                                            <td class="block-main-checkbox">
                                                <input type="checkbox" class="checker file-checkbox"
                                                       name="main_image_<?= $i ?>">
                                            </td>
                                        </tr>
                                    <?php endfor; ?>
                                    </tbody>
                                </table>

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