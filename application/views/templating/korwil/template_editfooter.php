          <footer class="footer">
              <div class="container-fluid">
                  <div class="row">
                      <div class="col-md-12 footer-copyright text-center">
                          <p class="mb-0">Copyright <?= date('Y'); ?> © Senyum Desa </p>
                      </div>
                  </div>
              </div>
          </footer>
          </div>
          </div>
          <!-- latest jquery-->
          <script src="<?php echo base_url() ?>assets/pusatbackend/js/datepicker/date-time-picker/moment.min.js">
          </script>
          <script
              src="<?php echo base_url() ?>assets/pusatbackend/js/datepicker/date-time-picker/tempusdominus-bootstrap-4.min.js">
          </script>
          <script
              src="<?php echo base_url() ?>assets/pusatbackend/js/datepicker/date-time-picker/datetimepicker.custom.js">
          </script>
          <!-- Bootstrap js-->
          <script src="<?php echo base_url() ?>assets/pusatbackend/js/bootstrap/bootstrap.bundle.min.js"></script>
          <!-- feather icon js-->
          <script src="<?php echo base_url() ?>assets/pusatbackend/js/icons/feather-icon/feather.min.js"></script>
          <script src="<?php echo base_url() ?>assets/pusatbackend/js/icons/feather-icon/feather-icon.js"></script>
          <!-- scrollbar js-->
          <script src="<?php echo base_url() ?>assets/pusatbackend/js/scrollbar/simplebar.js"></script>
          <script src="<?php echo base_url() ?>assets/pusatbackend/js/scrollbar/custom.js"></script>
          <!-- Sidebar jquery-->
          <script src="<?php echo base_url() ?>assets/pusatbackend/js/config.js"></script>
          <!-- Plugins JS start-->
          <script src="<?php echo base_url() ?>assets/pusatbackend/js/sidebar-menu.js"></script>
          <script src="<?php echo base_url() ?>assets/pusatbackend/js/datatable/datatables/jquery.dataTables.min.js">
          </script>
          <script src="<?php echo base_url() ?>assets/pusatbackend/js/datatable/datatables/datatable.custom.js">
          </script>
          <script src="<?php echo base_url() ?>assets/pusatbackend/js/tooltip-init.js"></script>
          <!-- Plugins JS Ends-->

          <!-- Theme js-->
          <script src="<?php echo base_url() ?>assets/pusatbackend/js/script.js"></script>
          <script src="<?php echo base_url() ?>assets/pusatbackend/js/theme-customizer/customizer.js"></script>

          <script src="<?php echo base_url() ?>assets/pusatbackend/js/editor/ckeditor/ckeditor.js"></script>
          <script src="<?php echo base_url() ?>assets/pusatbackend/js/editor/ckeditor/adapters/jquery.js"></script>
          <script src="<?php echo base_url() ?>assets/pusatbackend/js/dropzone/dropzone.js"></script>
          <script src="<?php echo base_url() ?>assets/pusatbackend/js/dropzone/dropzone-script.js"></script>
          <script src="<?php echo base_url() ?>assets/pusatbackend/js/select2/select2.full.min.js"></script>
          <script src="<?php echo base_url() ?>assets/pusatbackend/js/select2/select2-custom.js"></script>
          <script src="<?php echo base_url() ?>assets/pusatbackend/js/email-app.js"></script>
          <script src="<?php echo base_url() ?>assets/pusatbackend/js/form-validation-custom.js"></script>
          <!-- Dashboard JS-->
          <script src="<?= base_url('assets/pusatbackend/js/chart/chartist/chartist.js'); ?>"></script>
          <script src="<?= base_url('assets/pusatbackend/js/chart/chartist/chartist-plugin-tooltip.js'); ?>"></script>
          <script src="<?= base_url('assets/pusatbackend/js/chart/knob/knob.min.js'); ?>"></script>
          <script src="<?= base_url('assets/pusatbackend/js/chart/knob/knob-chart.js'); ?>"></script>
          <script src="<?= base_url('assets/pusatbackend/js/chart/apex-chart/apex-chart.js'); ?>"></script>
          <script src="<?= base_url('assets/pusatbackend/js/chart/apex-chart/stock-prices.js'); ?>"></script>
          <script src="<?= base_url('assets/pusatbackend/js/notify/bootstrap-notify.min.js'); ?>"></script>
          <script src="<?= base_url('assets/pusatbackend/js/dashboard/default.js'); ?>"></script>
          <script src="<?= base_url('assets/pusatbackend/js/notify/index.js'); ?>"></script>
          <script src="<?= base_url('assets/pusatbackend/js/datepicker/date-picker/datepicker.js'); ?>"></script>
          <script src="<?= base_url('assets/pusatbackend/js/datepicker/date-picker/datepicker.en.js'); ?>"></script>
          <script src="<?= base_url('assets/pusatbackend/js/datepicker/date-picker/datepicker.custom.js'); ?>"></script>
          <script src="<?= base_url('assets/pusatbackend/js/typeahead/handlebars.js'); ?>"></script>
          <script src="<?= base_url('assets/pusatbackend/js/typeahead/typeahead.bundle.js'); ?>"></script>
          <script src="<?= base_url('assets/pusatbackend/js/typeahead/typeahead.custom.js'); ?>"></script>
          <script src="<?= base_url('assets/pusatbackend/js/typeahead-search/handlebars.js'); ?>"></script>
          <script src="<?= base_url('assets/pusatbackend/js/typeahead-search/typeahead-custom.js'); ?>"></script>
          <script src="<?= base_url('assets/pusatbackend/js/tooltip-init.js'); ?>"></script>
          <script src="<?= base_url('assets/pusatbackend/js/notify/bootstrap-notify.min.js'); ?>"></script>
          <script src="<?= base_url('assets/pusatbackend/js/sweet-alert/sweetalert.min.js'); ?>"></script>
          <script src="<?= base_url('assets/pusatbackend/js/select2/select2.full.min.js'); ?>"></script>
          <script src="<?= base_url('assets/pusatbackend/js/select2/select2-custom.js'); ?>"></script>
          <script src="<?= base_url('assets/pusatbackend/js/form-validation-custom.js'); ?>"></script>
          <script src="<?= base_url('assets/pusatbackend/js/bookmark/jquery.validate.min.js'); ?>"></script>
          <script src="<?= base_url('assets/pusatbackend/js/contacts/custom.js'); ?>"></script>
          <script src="<?= base_url('assets/pusatbackend/js/tooltip-init.js'); ?>"></script>



          <!--end  Plugin used-->

          <style>
.removeRow {
    background-color: #FF0000;
    color: #FFFFFF;
}
          </style>
          <script>
$(document).ready(function() {

    $('.delete_checkbox').click(function() {
        if ($(this).is(':checked')) {
            $(this).closest('tr').addClass('removeRow');
        } else {
            $(this).closest('tr').removeClass('removeRow');
        }
    });

    $('#delete').click(function() {
        var checkbox = $('.delete_checkbox:checked');
        if (checkbox.length > 0) {
            var checkbox_value = [];
            $(checkbox).each(function() {
                checkbox_value.push($(this).val());
            });
            $.ajax({
                url: "<?php echo base_url(); ?>Master/delete",
                method: "POST",
                data: {
                    checkbox_value: checkbox_value
                },
                success: function() {
                    $('.removeRow').fadeOut(1500);
                }
            })
        } else {
            alert('Select atleast one records');
        }
    });

});

window.setTimeout(function() {
    $(".alert").fadeTo(500, 0).slideUp(500, function() {
        $(this).remove();
    });
}, 5000);
          </script>


          </body>

          </html>