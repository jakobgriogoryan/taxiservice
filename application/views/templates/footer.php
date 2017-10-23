<div class="bot1">
    <div class="container">
        <div class="row">
            <div class="span12">
                <div class="bot1_inner clearfix">
                    <div class="menu_bot">
                        <ul id="menu_bot" class="clearfix">
                            <?php if (empty($page)): ?>
                                <li class="active"><a
                                            href="/<?= $lang ?>"><?= $this->lang->line('header_menu_home') ?></a>
                                </li>
                            <?php else: ?>
                                <li><a href="/"><?= $this->lang->line('header_menu_home') ?></a>
                                </li>
                            <?php endif; ?>

                            <?php if ($page === 'cars'): ?>
                                <li class="active"><a
                                            href="/<?= $lang ?>/cars"><?= $this->lang->line('header_menu_cars') ?></a>
                                </li>
                            <?php else: ?>
                                <li>
                                    <a href="/<?= $lang ?>/cars"><?= $this->lang->line('header_menu_cars') ?></a>
                                </li>
                            <?php endif; ?>

                            <?php if ($page === 'booking'): ?>
                                <li class="active"><a
                                            href="/<?= $lang ?>/booking"><?= $this->lang->line('header_menu_booking') ?></a>
                                </li>
                            <?php else: ?>
                                <li>
                                    <a href="/<?= $lang ?>/booking"><?= $this->lang->line('header_menu_booking') ?></a>
                                </li>
                            <?php endif; ?>
                            <?php if ($page === 'contacts'): ?>
                                <li class="active"><a
                                            href="/<?= $lang ?>/contacts"><?= $this->lang->line('header_menu_contacts') ?></a>
                                </li>
                            <?php else: ?>
                                <li>
                                    <a href="/<?= $lang ?>/contacts"><?= $this->lang->line('header_menu_contacts') ?></a>
                                </li>
                            <?php endif; ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="bot2">
    <div class="container">
        <div class="row">
            <div class="span12">
                <div class="bot2_inner clearfix">
                    <footer>
                        <div class="copyright">Copyright © 2017 "Dream Worker" Company. All rights reserved.&nbsp;
                        </div>
                    </footer>

                </div>
            </div>
        </div>
    </div>
</div>

</div>
<script src="<?= base_url() ?>/assets/frontend/slick/slick.js" type="text/javascript" charset="utf-8"></script>

<script type="text/javascript" src="/assets/frontend/js/bootstrap.js"></script>
<script type="text/javascript" src="/assets/frontend/js/main.js"></script>
<script type="text/javascript" src="/assets/global/plugins/jquery-validation/js/jquery.validate.min.js"></script>
<!-- carInfoModal -->
<div id="carInfoModal" class="modal fade" role="dialog">
    <div class="modal-dialog modal-lg">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title"></h4>
            </div>
            <div class="modal-body" style="overflow-x:hidden">


            </div>

        </div>

    </div>
</div>
<?php if($booking_success == 'true'): ?>
<!-- booking success modal -->
<div id="bookingSuccessModal" class="modal fade" role="dialog">
    <div class="modal-dialog modal-lg">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title"><?=$this->lang->line('booking_modal_title') ?></h4>
            </div>
            <div class="modal-body" style="overflow-x:hidden">
                <p><?=$this->lang->line('booking_modal_text') ?></p>

            </div>

        </div>

    </div>
</div>
<script>
    $(document).ready(function(){
        $("#bookingSuccessModal").show();
        $("#bookingSuccessModal").modal('show');
    })
</script>
<?php endif; ?>
<?php if($contact_success == 'true'): ?>
    <!-- booking success modal -->
    <div id="contactSuccessModal" class="modal fade" role="dialog">
        <div class="modal-dialog modal-lg">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h3></h3>
                </div>
                <div class="modal-body" style="overflow-x:hidden">
                    <p><?=$this->lang->line('contact_modal_text') ?></p>

                </div>

            </div>

        </div>
    </div>
    <script>
        $(document).ready(function(){
            $("#contactSuccessModal").show();
            $("#contactSuccessModal").modal('show');
        })
    </script>
<?php endif; ?>
</body>

<!-- Mirrored from demo.gridgum.com/templates/bootstrap-templates/22367/ by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 07 Oct 2017 08:26:38 GMT -->
</html>