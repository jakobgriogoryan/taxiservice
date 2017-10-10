<div class="top2">
    <div class="container">
        <div class="row">
            <div class="span12">
                <div class="top2_inner">
                    <div class="row">
                        <?php foreach($order_types as $order_type): ?>
                        <div class="span3">
                            <div class="thumb1">
                                <div class="thumbnail clearfix">
                                    <a href="/<?=$lang ?>/<?=$order_type['url'] ?>">
                                        <div class="thumb1_inner">
                                            <div class="txt clearfix">
                                                <div class="caption1">
                                                    <div class="txt1"><?=$order_type['name'] ?></div>
<!--                                                    <div class="txt2">24 HOUR</div>-->
                                                </div>
                                            </div>
                                            <div class="txt3"><?=$order_type['min_description'] ?></div>
                                            <div class="txt4_wrapper"><div class="txt4"><span class="over1"></span><span class="t1"><?=$this->lang->line('main_home_services_details') ?></span><span class="over2"></span></div></div>
                                        </div>
                                        <div class="thumb1_corner1"></div>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="top3">
    <div class="arr1"></div>
    <div class="container">
        <div class="row">
            <div class="span12">
                <div class="top3_inner">
                    ORDER TAXI  <a href="booking">ONLINE
                    </a>  OR CALL
                    <span> 1 800 123 4567</span>
                </div>
            </div>
        </div>
    </div>
</div>

<div id="content">
    <div class="container">
        <div class="row">

        </div>
    </div>
</div>

