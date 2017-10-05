<div class="page-content-wrapper">
    <div class="page-content">
        <!-- BEGIN PAGE HEADER-->
        <h3 class="page-title">
            Edit Admin</h3>
        <div class="row">
            <div class="col-md-12">
                <!-- BEGIN PORTLET-->
                <div class="portlet box blue">
                    <div class="portlet-title">
                        <div class="caption">
                            <i class="fa fa-gift"></i>Редактировать администратора
                        </div>
                        <div class="tools">
                            <a href="javascript:;" class="collapse">
                            </a>
                        </div>
                    </div>
                    <div class="portlet-body form">
                        <div class="form-body">
                            <!-- BEGIN FORM-->

                            <form class="register-form" action="<?= base_url()?>admin/admins/edit/<?=$id?>" method="post">

                                <?php echo validation_errors(); ?>
                                <div class="form-group">
                                    <label class="control-label" for="role">Роль</label>
                                    <select class="form-control " name="role_id" id="role">
                                        <?php foreach ($roles as $role): ?>
                                            <?php if($admin[0]->role_id == $role->id): ?>
                                            <option selected value="<?=$role->id; ?>"><?=$role->name; ?></option>
                                            <?php else: ?>
                                            <option value="<?=$role->id; ?>"><?=$role->name; ?></option>
                                            <?php endif; ?>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                                <div class="form-group">

                                    <label class="control-label" for="name">Имя</label>
                                    <input class="form-control" type="text" placeholder="Имя" name="name" value="<?=$admin[0]->name?>" id="name"/>
                                </div>
                                <div class="form-group">
                                    <label class="control-label" for="surname">Фамилия</label>
                                    <input class="form-control" type="text" placeholder="Фамилия" name="surname" value="<?=$admin[0]->surname?>" id="surname"/>
                                </div>
                                <div class="form-group">
                                    <label class="control-label " for="email">Электронная почта</label>
                                    <input class="form-control" type="text" placeholder="Электронная почта" name="email" value="<?=$admin[0]->email?>" id="email"/>
                                </div>
                                <div class="form-group">
                                    <label class="control-label " for="phone_number">Номер мобильного телефона</label>
                                    <input class="form-control" type="text" placeholder="Номер мобильного телефона" name="phone_number" value="<?=$admin[0]->phone_number?>" id="phone_number" />
                                </div>
                                <div class="form-group">
                                    <label class="control-label " for="login">Логин</label>
                                    <input class="form-control placeholder-no-fix" type="text" autocomplete="off" placeholder="Логин" name="login" value="<?=$admin[0]->login?>" id="login" />
                                </div>
                                <div class="form-actions">
                                    <button type="submit" id="register-submit-btn" class="btn btn-success uppercase pull-left">Сохранить</button>
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