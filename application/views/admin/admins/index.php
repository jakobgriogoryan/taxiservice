<div class="page-content-wrapper">
    <div class="page-content">
        <!-- BEGIN PAGE HEADER-->
        <h3 class="page-title">
            Home</h3>
        <!-- END PAGE HEADER-->
        <div class="row">
            <div class="col-md-12">
                <!-- BEGIN EXAMPLE TABLE PORTLET-->
                <div class="portlet box grey-cascade">
                    <div class="portlet-title">
                        <div class="caption">
                            <i class="fa fa-user"></i>Managed Admins
                        </div>
                    </div>
                    <div class="portlet-body">
                        <div class="table-toolbar">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="btn-group">
                                        <a id="sample_editable_1_new" href="/admin/admins/create" class="btn green">
                                            Add New <i class="fa fa-plus"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <table class="table table-striped table-bordered table-hover datatable">
                            <thead>
                            <tr>
                                <th>
                                    Role
                                </th>
                                <th>
                                    Name
                                </th>
                                <th>
                                    Phone
                                </th>
                                <th>
                                    Login
                                </th>
                                <th>
                                    Created At
                                </th>
                                <th>
                                    Actions
                                </th>
                            </tr>
                            </thead>
                            <tbody>

                            <?php foreach($admins as $admin): ?>
                            <tr class="odd gradeX">
                                <td><?=$admin->role_id ?></td>
                                <td><?=$admin->name ?><?=$admin->surname ?></td>
                                <td><?=$admin->phone_number ?></td>
                                <td><?=$admin->login ?></td>
                                <td><?=$admin->create_at?></td>
                                <td>
                                    <a href="/admin/admins/edit/<?=$admin->id?>" title="Edit"><i class="fa fa-pencil"></i></a>
                                    <a href="/admin/admins/changePassword/<?=$admin->id ?>" title="Change Password"><i class="fa fa-cogs"></i></a>
                                    <button title="Delete" class="delete-admin" type="submit" data-id="<?=$admin->id ?>"><i class="fa fa-remove"></i></button>

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