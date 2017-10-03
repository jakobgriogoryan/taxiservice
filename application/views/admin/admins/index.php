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
        <!--                @if (session('status'))-->
        <!--                <div class="alert alert-success">-->
        <!--                    {{ session('status') }}-->
        <!--                </div>-->
        <!--                @endif-->
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
                                    Username
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

                            <tr class="odd gradeX">
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td>
                                    <a href="/admin/manage/admins/{{$admin->id}}/edit" title="Edit"><i class="fa fa-pencil"></i></a>
                                    <a href="/admin/manage/admins/{{$admin->id}}/changePassword" title="Change Password"><i class="fa fa-cogs"></i></a>
                                    <button title="Delete" type="submit"><i class="fa fa-remove"></i></button>

                                </td>
                            </tr>


                            </tbody>
                        </table>
                    </div>
                </div>
                <!-- END EXAMPLE TABLE PORTLET-->
            </div>
        </div>

    </div>
</div>