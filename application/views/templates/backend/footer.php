</div>
</div>
<!-- BEGIN FOOTER -->
<div class="page-footer">
    <div class="page-footer-inner">
        2017 © Metronic. Dream Worker company. All rights reserved.
    </div>
    <div class="scroll-to-top">
        <i class="icon-arrow-up"></i>
    </div>
</div>
<!-- END FOOTER -->
</div>
<!-- BEGIN JAVASCRIPTS(Load javascripts at bottom, this will reduce page load time) -->
<!-- BEGIN CORE PLUGINS -->
<!--[if lt IE 9]>
<script src="<?= base_url()?>/assets/global/plugins/respond.min.js"></script>
<script src="<?= base_url()?>/assets/global/plugins/excanvas.min.js"></script>
<![endif]-->
<script src="<?= base_url() ?>/assets/global/plugins/jquery.min.js" type="text/javascript"></script>
<script src="<?= base_url() ?>/assets/global/plugins/jquery-migrate.min.js" type="text/javascript"></script>
<!-- IMPORTANT! Load jquery-ui.min.js before bootstrap.min.js to fix bootstrap tooltip conflict with jquery ui tooltip -->
<script src="<?= base_url() ?>/assets/global/plugins/jquery-ui/jquery-ui.min.js" type="text/javascript"></script>
<script src="<?= base_url() ?>/assets/global/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
<script src="<?= base_url() ?>/assets/global/plugins/bootstrap-hover-dropdown/bootstrap-hover-dropdown.min.js"
        type="text/javascript"></script>
<script src="<?= base_url() ?>/assets/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js"
        type="text/javascript"></script>
<script src="<?= base_url() ?>/assets/global/plugins/jquery.blockui.min.js" type="text/javascript"></script>
<script src="<?= base_url() ?>/assets/global/plugins/jquery.cokie.min.js" type="text/javascript"></script>
<script src="<?= base_url() ?>/assets/global/plugins/uniform/jquery.uniform.min.js" type="text/javascript"></script>
<script src="<?= base_url() ?>/assets/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js"
        type="text/javascript"></script>
<!-- END CORE PLUGINS -->
<!-- BEGIN PAGE LEVEL PLUGINS -->

<script src="<?= base_url() ?>/assets/global/plugins/jquery.pulsate.min.js" type="text/javascript"></script>
<script src="<?= base_url() ?>/assets/global/plugins/bootstrap-daterangepicker/moment.min.js"
        type="text/javascript"></script>
<script src="<?= base_url() ?>/assets/global/plugins/bootstrap-daterangepicker/daterangepicker.js"
        type="text/javascript"></script>

<script src="<?= base_url() ?>/assets/admin/pages/scripts/components-form-tools.js"></script>
<!-- END PAGE LEVEL PLUGINS -->
<!-- BEGIN PAGE LEVEL SCRIPTS -->
<script src="<?= base_url() ?>/assets/global/scripts/metronic.js" type="text/javascript"></script>
<script src="<?= base_url() ?>/assets/admin/layout2/scripts/layout.js" type="text/javascript"></script>
<script src="<?= base_url() ?>/assets/admin/layout2/scripts/demo.js" type="text/javascript"></script>
<script src="<?= base_url() ?>/assets/admin/pages/scripts/index.js" type="text/javascript"></script>
<script src="<?= base_url() ?>/assets/admin/pages/scripts/tasks.js" type="text/javascript"></script>
<script src="<?= base_url() ?>/assets/admin/js/admin.js" type="text/javascript"></script>
<script src="<?= base_url() ?>/assets/admin/js/car.js" type="text/javascript"></script>
<!-- END PAGE LEVEL SCRIPTS -->
<script>
    jQuery(document).ready(function () {
        Metronic.init(); // init metronic core componets
        Layout.init(); // init layout
        Demo.init(); // init demo features
        Index.init();
        Index.initDashboardDaterange();
        Index.initJQVMAP(); // init index page's custom scripts
        Index.initCalendar(); // init index page's custom scripts
        Index.initCharts(); // init index page's custom scripts
        Index.initChat();
        Index.initMiniCharts();
        Tasks.initDashboardWidget();
    });
</script>
<!-- END JAVASCRIPTS -->
</body>
<!-- END BODY -->
</html>