<div class="page-content-wrapper">
    <div class="page-content">
        <!-- BEGIN PAGE HEADER-->
        <h3 class="page-title">
            Главная страница</h3>

        <div class="portlet light">
            <div class="portlet-body">
                <div class="row">
                    <div class="col-md-12 blog-page">
                        <div class="row">
                            <div class="col-md-9 col-sm-8 article-block">
                                <?php foreach ($cars as $car):?>
                                    <h1 style="margin-top:0px"><?=$car->name?></h1>
                                <div class="row">
                                    <div class="col-md-4 blog-img blog-tag-data">
                                        <img src="../../assets/admin/pages/media/gallery/image4.jpg" alt="" class="img-responsive">
                                        <th class="list-inline">
                                            <tr>
                                                <h3><i class="">Посадочные места <?=$car->passengers_count?> </i></h3>
                                            </tr>
                                            <tr>
                                                <h3><i class="">Минимальный заказ <?=$car->minimum_order?> руб.</i></h3>
                                            </tr>
                                            <tr>
                                                <h3><i class="">Далее <?=$car->further?> руб.</i></h3>
                                            </tr>
                                            <tr>
                                                <h3><i class="">За МКАД <?=$car->for_mkad?> руб.</i></h3>
                                            </tr>
                                            <tr>
                                                <h3><i class="">Свыше 200км от МКАД  <?=$car->Over_200km?> руб.</i></h3>
                                            </tr>
                                        </th>
                                        <ul class="list-inline blog-tags">
                                            <li>
                                                <i class="fa fa-tags"></i>
                                                <a href="#">
                                                    Technology </a>
                                                <a href="#">
                                                    Education </a>
                                                <a href="#">
                                                    Internet </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="col-md-8 blog-article">
                                        <h3>
                                            <a href="page_blog_item.html">
                                                Hello here will be some recent news.. </a>
                                        </h3>
                                        <p>
                                            At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut non libero consectetur adipiscing elit magna. Sed et quam lacus. Fusce condimentum eleifend enim a feugiat. Pellentesque viverra vehicula sem ut volutpat. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut non libero magna. Sed et quam lacus. Fusce condimentum eleifend enim a feugiat.
                                        </p>
                                        <a class="btn blue" href="page_blog_item.html">
                                            Read more <i class="m-icon-swapright m-icon-white"></i>
                                        </a>
                                    </div>
                                </div>
                                <?php endforeach;?>
                                <hr>

                            </div>
                            <!--end col-md-9-->
                            <!--end col-md-3-->
                        </div>
                        <ul class="pagination pull-right">
                            <li>
                                <a href="#">
                                    <i class="fa fa-angle-left"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    1 </a>
                            </li>
                            <li>
                                <a href="#">
                                    2 </a>
                            </li>
                            <li>
                                <a href="#">
                                    3 </a>
                            </li>
                            <li>
                                <a href="#">
                                    4 </a>
                            </li>
                            <li>
                                <a href="#">
                                    5 </a>
                            </li>
                            <li>
                                <a href="#">
                                    6 </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fa fa-angle-right"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>

