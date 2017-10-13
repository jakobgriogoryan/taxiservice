<div id="content">
    <div class="container">
        <div class="row">
            <div class="span8">

                <h1><?= $this->lang->line('main_order_form') ?></h1>

                <div id="note-book"></div>
                <div id="fields-book">
                    <!--                    <form id="ajax-book-form" class="form-horizontal" action="javascript:alert('success!');">-->
                    <form id="ajax-book-form" class="form-horizontal" action="booking" method="post">

                        <?php echo validation_errors(); ?>
                        <div class="row">
                            <div class="span4">
                                <div class="control-group">
                                    <label class="control-label" for="inputName">Order Type Id*:</label>
                                    <div class="controls">
                                        <select class="span4" name="order_type_id">
                                            <?php foreach ($order_types as $order_type): ?>
                                                <option value="<?= $order_type['id'] ?>"><?= $order_type['name'] ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="span4">
                                <div class="control-group">
                                    <label class="control-label"
                                           for="inputName"><?= $this->lang->line('order_user_address') ?>*:</label>
                                    <div class="controls">
                                        <input class="span4" type="text" id="inputName" name="location"
                                               placeholder="<?= $this->lang->line('order_user_address') ?>*:">
                                    </div>
                                </div>
                            </div>
                            <div class="span4">
                                <div class="control-group">
                                    <label class="control-label"
                                           for="inputName"><?= $this->lang->line('order_user_name') ?>*:</label>
                                    <div class="controls">
                                        <input class="span4" type="text" id="inputName" name="name"
                                               placeholder="<?= $this->lang->line('order_user_name') ?>*:">
                                    </div>
                                </div>
                            </div>

                            <div class="span4">
                                <div class="control-group">
                                    <label class="control-label"
                                           for="inputName"><?= $this->lang->line('order_user_destination') ?>*:</label>
                                    <div class="controls">
                                        <input class="span4" type="text" id="inputName" name="where_to"
                                               placeholder="<?= $this->lang->line('order_user_destination') ?>*:">
                                    </div>
                                </div>
                            </div>

                            <div class="span4">
                                <div class="control-group">
                                    <label class="control-label"
                                           for="inputPhone"><?= $this->lang->line('order_user_phone') ?>*:</label>
                                    <div class="controls">
                                        <input class="span4" type="text" id="inputPhone" name="phone"
                                               placeholder="<?= $this->lang->line('order_user_phone') ?>*:">
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="row">
                            <div class="span4">
                                <div class="control-group">
                                    <label class="control-label"
                                           for="inputNumber"><?= $this->lang->line('order_user_email') ?>:</label>
                                    <div class="controls">
                                        <input class="span2" type="text" id="inputNumber" name="email"
                                               placeholder="<?= $this->lang->line('order_user_email') ?>">
                                    </div>
                                </div>
                            </div>

                            <div class="span4">
                                <div class="form-group">
                                    <label class="control-label "><?= $this->lang->line('order_user_datetime') ?>
                                        :</label>
                                    <div class="col-md-3">
                                        <input class="form-control form-control-inline input-medium date-picker"
                                               size="16" type="text" name="datetime"
                                               PLACEHOLDER="<?= $this->lang->line('order_user_datetime') ?>"/>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="span8">
                                <div class="control-group">
                                    <label class="control-label"
                                           for="inputMessage"><?= $this->lang->line('order_user_notes') ?>:</label>
                                    <div class="controls">
                                        <textarea class="span8" id="inputMessage" name="notes"
                                                  placeholder="<?= $this->lang->line('order_user_notes') ?>:"></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <button type="submit" class="submit"><?= $this->lang->line('order_user_order') ?></button>
                    </form>
                </div>

            </div>
            <!--            <div class="span4">-->
            <!---->
            <!--                <div class="box1">-->
            <!--                    <div class="box1_inner">-->
            <!---->
            <!--                        <div class="box1_pad">-->
            <!---->
            <!--                            <h3>Usfull Info</h3>-->
            <!---->
            <!--                            <div class="thumb2">-->
            <!--                                <div class="thumbnail clearfix">-->
            <!--                                    <figure class="img-polaroid"><img src="https://demo.gridgum.com/templates/bootstrap-templates/22367/images/book01.jpg" alt=""></figure>-->
            <!--                                    <div class="caption">-->
            <!--                                        <p>-->
            <!--                                            <strong>Ut enim ad minim veniam</strong>-->
            <!--                                        </p>-->
            <!--                                        <p>-->
            <!--                                            Quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. consectetuer adipiscing elit. Nunc suscipit.  Ipsum dolor sit amet conse ctetur adipisicing elitons ectetuer adipiscing elit. Dusci pit.-->
            <!--                                        </p>-->
            <!---->
            <!--                                    </div>-->
            <!--                                </div>-->
            <!--                            </div>-->
            <!--                        </div>-->
            <!---->
            <!--                        <div class="button2_wrapper"><a href="#" class="button2"><span class="over1"></span><span class="t1">details</span><span class="over2"></span></a></div>-->
            <!---->
            <!--                    </div>-->
            <!--                    <div class="box1_corner"></div>-->
            <!--                </div>-->
            <!--            </div>-->
        </div>
    </div>
</div>