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
                                <?php if(isset($_POST['name'])): ?>
                                <input class="form-control" type="text" placeholder="Name" value="<?= $_POST['name'] ?>" name="name" id="name"/>
                                <?php else: ?>
                                <input class="form-control" type="text" placeholder="Name" value="" name="name" id="name"/>
                                <?php endif; ?>
                            </div>
                            <div class="form-group">
                                <label class="control-label" for="surname">Surname</label>
                                <?php if(isset($_POST['surname'])): ?>
                                <input class="form-control" type="text" placeholder="Surname" value="<?= $_POST['surname'] ?>" name="surname" id="surname"/>
                                <?php else: ?>
                                <input class="form-control" type="text" placeholder="Surname" name="surname" id="surname"/>
                                <?php endif; ?>
                            </div>
                            <div class="form-group">
                                <label class="control-label " for="email">Email</label>
                                <?php if(isset($_POST['email'])): ?>
                                <input class="form-control" type="text" placeholder="Email" value="<?= $_POST['email'] ?>" name="email" id="email"/>
                                <?php else: ?>
                                <input class="form-control" type="text" placeholder="Email" name="email" id="email"/>
                                <?php endif; ?>
                            </div>
                            <div class="form-group">
                                <label class="control-label " for="phone_number">Phone number</label>
                                <?php if(isset($_POST['phone_number'])): ?>
                                <input class="form-control" type="text" placeholder="Phone number" value="<?= $_POST['phone_number'] ?>" name="phone_number" id="phone_number" />
                                <?php else: ?>
                                <input class="form-control" type="text" placeholder="Phone number" name="phone_number" id="phone_number" />
                                <?php endif; ?>
                            </div>
                            <div class="form-group">
                                <label class="control-label " for="login">Login</label>
                                <?php if(isset($_POST['login'])): ?>
                                <input class="form-control" type="text" autocomplete="off" value="<?= $_POST['login'] ?>" placeholder="Login" name="login" id="login" />
                                <?php else: ?>
                                <input class="form-control" type="text" autocomplete="off" placeholder="Login" name="login" id="login" />
                                <?php endif; ?>
                            </div>
                            <div class="form-group">
                                <label class="control-label " for="register_password" >Password</label>
                                <input class="form-control" type="password" autocomplete="off" id="register_password" placeholder="Password" name="password" />
                            </div>
                            <div class="form-group">
                                <label class="control-label " for="rpassword">Re-type Your Password</label>
                                <input class="form-control" type="password" autocomplete="off" placeholder="Re-type Your Password" name="rpassword" id="rpassword"/>
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