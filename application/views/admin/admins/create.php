<div class="page-content-wrapper">
    <div class="page-content">
        <!-- BEGIN PAGE HEADER-->
        <h3 class="page-title">
            Create Admin</h3>
        <div class="row">
            <div class="col-md-12">
                <!-- BEGIN PORTLET-->
                <div class="portlet box blue">
                    <div class="portlet-title">
                        <div class="caption">
                            <i class="fa fa-gift"></i>Create new administrator
                        </div>
                        <div class="tools">
                            <a href="javascript:;" class="collapse">
                            </a>
                        </div>
                    </div>
                    <div class="portlet-body form">
                        <div class="form-body">
                        <!-- BEGIN FORM-->
                        <form class="register-form" action="<?= base_url()?>admin/admins/create" method="post">
                            <?php echo validation_errors(); ?>
                            <p class="hint"><h4> Enter your personal details below:</h4></p>
                            <div class="form-group">
                                <label class="control-label" for="role">Role</label>
                                <select class="form-control " name="role_id" id="role">
                                    <?php foreach ($roles as $role): ?>
                                    <option value="<?=$role->id; ?>"><?=$role->name; ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                            <div class="form-group">
                                <label class="control-label" for="name">Name</label>
                                <input class="form-control" type="text" placeholder="Name" name="name" id="name"/>
                            </div>
                            <div class="form-group">
                                <label class="control-label" for="surname">Surname</label>
                                <input class="form-control" type="text" placeholder="Surname" name="surname" id="surname"/>
                            </div>
                            <div class="form-group">
                                <label class="control-label " for="email">Email</label>
                                <input class="form-control" type="text" placeholder="Email" name="email" id="email"/>
                            </div>
                            <div class="form-group">
                                <label class="control-label " for="phone_number">Phone number</label>
                                <input class="form-control" type="text" placeholder="Phone number" name="phone_number" id="phone_number" />
                            </div>
                            <p class="hint"><h4> Enter your account details below:</h4></p>
                            <div class="form-group">
                                <label class="control-label " for="login">Login</label>
                                <input class="form-control placeholder-no-fix" type="text" autocomplete="off" placeholder="Login" name="login" id="login" />
                            </div>
                            <div class="form-group">
                                <label class="control-label " for="register_password" >Password</label>
                                <input class="form-control placeholder-no-fix" type="password" autocomplete="off" id="register_password" placeholder="Password" name="password" />
                            </div>
                            <div class="form-group">
                                <label class="control-label " for="rpassword">Re-type Your Password</label>
                                <input class="form-control placeholder-no-fix" type="password" autocomplete="off" placeholder="Re-type Your Password" name="rpassword" id="rpassword"/>
                            </div>
                            <div class="form-actions">
                                <button type="submit" id="register-submit-btn" class="btn btn-success uppercase pull-left">Add</button>
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