</div>

<script src="<?= base_url() ?>/public/template/libs/jquery/jquery/dist/jquery.js"></script>
<script src="<?= base_url() ?>/public/template/libs/jquery/bootstrap/dist/js/bootstrap.js"></script>
<script src="<?= base_url() ?>/public/template/libs/jquery/waves/dist/waves.js"></script>

<script src="<?= base_url() ?>/public/template/scripts/ui-load.js"></script>
<script src="<?= base_url() ?>/public/template/scripts/ui-jp.config.js"></script>
<script src="<?= base_url() ?>/public/template/scripts/ui-jp.js"></script>
<script src="<?= base_url() ?>/public/template/scripts/ui-nav.js"></script>
<script src="<?= base_url() ?>/public/template/scripts/ui-toggle.js"></script>
<script src="<?= base_url() ?>/public/template/scripts/ui-form.js"></script>
<script src="<?= base_url() ?>/public/template/scripts/ui-waves.js"></script>
<script src="<?= base_url() ?>/public/template/scripts/ui-client.js"></script>

<script src="<?= base_url() ?>/public/template/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="<?= base_url() ?>/public/template/plugins/datatables/dataTables.bootstrap.min.js"></script>

<!-- bootstrap datepicker -->
<script src="<?= base_url() ?>/public/template/plugins/datepicker/bootstrap-datepicker.js"></script>
<!-- iCheck 1.0.1 -->

<script>
    //Date picker
    $('#datepicker').datepicker({
        autoclose: true
    });
</script>

<script>
    //Date picker
    $('#datepicker1').datepicker({
        autoclose: true
    });
</script>

<script>
    //Date picker
    $('#datepicker2').datepicker({
        autoclose: true
    });
</script>

<script>
    $(document).ready(function() {
        $('#example').DataTable();
    });
</script>

<script>
    $(function() {
        $("#example1").DataTable();
        $('#example2').DataTable({
            "paging": true,
            "lengthChange": false,
            "searching": true,
            "ordering": true,
            "info": true,
            "autoWidth": true
        });
        $('#example3').DataTable({
            "paging": false,
            "lengthChange": false,
            "searching": false,
            "ordering": false,
            "info": true,
            "autoWidth": false
        });
        $('#example4').DataTable({
            "paging": true,
            "lengthChange": false,
            "searching": true,
            "ordering": false,
            "info": true,
            "autoWidth": true
        });
    });
</script>

<script>
    $(document).ready(function() {
        var handleDataTableButtons = function() {
            if ($("#datatable-buttons").length) {
                $("#datatable-buttons").DataTable({
                    dom: "Bfrtip",
                    buttons: [
                        // {
                        //   extend: "copy",
                        //   className: "btn btn-addon btn-success",
                        // },
                        {
                            extend: "csv",
                            className: "btn btn-addon btn-success",
                        },
                        {
                            extend: "excel",
                            className: "btn btn-addon btn-success",
                        },
                        {
                            extend: "pdfHtml5",
                            className: "btn btn-addon btn-success",
                        },
                        {
                            extend: "print",
                            className: "btn btn-addon btn-success",
                        },
                    ],
                    responsive: true

                });
            }
        };

        TableManageButtons = function() {
            "use strict";
            return {
                init: function() {
                    handleDataTableButtons();
                }
            };
        }();

        $('#datatable').dataTable();
        $('#datatable-keytable').DataTable({
            keys: true
        });

        $('#datatable-responsive').DataTable();

        $('#datatable-scroller').DataTable({
            ajax: "js/datatables/json/scroller-demo.json",
            deferRender: true,
            scrollY: 380,
            scrollCollapse: true,
            scroller: true
        });

        var table = $('#datatable-fixed-header').DataTable({
            fixedHeader: true
        });

        TableManageButtons.init();
    });
</script>

<script>
    $(document).ready(function() {
        var handleDataTableButtons = function() {
            if ($("#datatable-buttons1").length) {
                $("#datatable-buttons1").DataTable({
                    dom: "Bfrtip",
                    buttons: [
                        // {
                        //   extend: "copy",
                        //   className: "btn btn-addon btn-success",
                        // },
                        {
                            extend: "csv",
                            className: "btn btn-addon btn-success",
                        },
                        {
                            extend: "excel",
                            className: "btn btn-addon btn-success",
                        },
                        {
                            extend: "pdfHtml5",
                            className: "btn btn-addon btn-success",
                        },
                        {
                            extend: "print",
                            className: "btn btn-addon btn-success",
                        },
                    ],
                    responsive: false

                });
            }
        };

        TableManageButtons = function() {
            "use strict";
            return {
                init: function() {
                    handleDataTableButtons();
                }
            };
        }();

        $('#datatable').dataTable();
        $('#datatable-keytable').DataTable({
            keys: true
        });

        $('#datatable-responsive').DataTable();

        $('#datatable-scroller').DataTable({
            ajax: "js/datatables/json/scroller-demo.json",
            deferRender: true,
            scrollY: 380,
            scrollCollapse: true,
            scroller: true
        });

        var table = $('#datatable-fixed-header').DataTable({
            fixedHeader: true
        });

        TableManageButtons.init();
    });
</script>

</body>

</html>