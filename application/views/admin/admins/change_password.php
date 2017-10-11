/
<div class="page-content-wrapper">
    <div class="page-content">
        <!-- BEGIN PAGE HEADER-->
        <h3 class="page-title">
            Изменить пароль</h3>
        <div class="row">
            <div class="col-md-12">
                <!-- BEGIN PORTLET-->
                <div class="portlet box blue">
                    <div class="portlet-title">
                        <div class="caption">
                            <i class="fa fa-gift"></i>Изменить пароль
                        </div>
                        <div class="tools">
                            <a href="javascript:;" class="collapse">
                            </a>
                        </div>
                    </div>
                    <div class="portlet-body form">
                        <div class="form-body">
                            <!-- BEGIN FORM-->
                            <form class="register-form" action="<?= base_url() ?>admin/admins/changePassword/<?= $id ?>"
                                  method="post">
                                <?php echo validation_errors(); ?>
                                <p class="hint"><h4> Введите ваш новый пароль:</h4></p>
                                <div class="form-group">
                                    <label class="control-label " for="password">Новый пароль</label>
                                    <input class="form-control" type="password" autocomplete="off"
                                           placeholder="Новый пароль" name="password" id="password"/>
                                </div>
                                <div class="form-group">
                                    <label class="control-label " for="rpassword">Павторите пароль</label>
                                    <input class="form-control" type="password" autocomplete="off"
                                           placeholder="Павторите пароль" name="rpassword" id="rpassword"/>
                                </div>
                                <div class="form-actions">
                                    <button type="submit" id="register-submit-btn"
                                            class="btn btn-success uppercase pull-left">Сохранить
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