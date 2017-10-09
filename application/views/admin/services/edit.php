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
                            <form class="register-form" action="<?= base_url()?>admin/services/edit/<?=$id ?>" method="post" enctype="multipart/form-data">
                                <?php echo validation_errors(); ?>
                                <div class="form-group">
                                    <label class="control-label" for="name">Имя</label>
                                    <?php if(isset($_POST['name'])): ?>
                                        <input class="form-control" type="text" placeholder="Имя" value="<?= $_POST['name'] ?>" name="name" id="name"/>
                                    <?php else: ?>
                                        <input class="form-control" type="text" placeholder="Имя" value="<?=$service[0]->name ?>" name="name" id="name"/>
                                    <?php endif; ?>
                                </div>

                                <div class="form-group">
                                    <label class="control-label " for="min_description">Краткое описание (По Русский)</label>
                                    <?php if(isset($_POST['min_description'])): ?>
                                        <textarea name="min_description" rows="5" class="form-control"><?=$_POST['min_description'] ?></textarea>
                                    <?php else: ?>
                                        <textarea name="min_description" rows="5" class="form-control"><?=$service[0]->min_description ?></textarea>
                                    <?php endif; ?>
                                </div>

                                <div class="form-group">
                                    <label class="control-label " for="min_description_en">Краткое описание (English)</label>
                                    <?php if(isset($_POST['min_description_en'])): ?>
                                        <textarea name="min_description_en" rows="5" class="form-control"><?=$_POST['min_description_en'] ?></textarea>
                                    <?php else: ?>
                                        <textarea name="min_description_en" rows="5" class="form-control"><?=$service[0]->min_description_en ?></textarea>
                                    <?php endif; ?>
                                </div>

                                <div class="form-group">
                                    <label class="control-label " for="description">Описание (По Русский)</label>
                                    <?php if(isset($_POST['description'])): ?>
                                        <textarea name="description" rows="10" class="form-control"><?=$_POST['description'] ?></textarea>
                                    <?php else: ?>
                                        <textarea name="description" rows="10" class="form-control"><?=$service[0]->description ?></textarea>
                                    <?php endif; ?>
                                </div>

                                <div class="form-group">
                                    <label class="control-label " for="description_en">Описание (English)</label>
                                    <?php if(isset($_POST['description_en'])): ?>
                                        <textarea name="description_en" rows="10" class="form-control"><?=$_POST['description_en'] ?></textarea>
                                    <?php else: ?>
                                        <textarea name="description_en" rows="10" class="form-control"><?=$service[0]->description_en ?></textarea>
                                    <?php endif; ?>
                                </div>


                                <h3>Текущая картинка:</h3>
                                <div class="row">
                                    <?php if(!empty($service[0]->image)): ?>
                                        <div class="col-md-4">
                                            <a href="javascript:;" data-id="<?=$service[0]->id ?>" data-image="<?=$service[0]->image ?>" class="remove-service-image" style="color:red"><i class="fa fa-remove"></i></a>
                                            <img class="img-responsive" src="/assets/images/cars/<?=$service[0]->image ?>">
                                        </div>
                                    <?php endif; ?>
                                </div>
                                <h3>Выберите картинку (Заменить):</h3>
                                <input type="file" name="image">

                                <div class="form-actions">
                                    <button type="submit" id="register-submit-btn" class="btn btn-success uppercase pull-left">Изменить</button>
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