/<div class="page-content-wrapper">
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
                            <form class="register-form" action="<?= base_url()?>admin/admins/changePassword/<?=$id ?>" method="post">
                                <?php echo validation_errors(); ?>
                                <p class="hint"><h4> Enter your new password:</h4></p>
                                <div class="form-group">
                                    <label class="control-label " for="password">New password</label>
                                    <input class="form-control" type="password" autocomplete="off" placeholder="Password" name="password" id="password" />
                                </div>
                                <div class="form-group">
                                    <label class="control-label " for="rpassword">Re-type Your New Password</label>
                                    <input class="form-control" type="password" autocomplete="off" placeholder="Re-type Your Password" name="rpassword" id="rpassword"/>
                                </div>
                                <div class="form-actions">
                                    <button type="submit" id="register-submit-btn" class="btn btn-success uppercase pull-left">Save</button>
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