<!-- Core JS -->
<!-- build:js assets/vendor/js/core.js -->
<script src="<?=$this->config->item('vendor-libs').'jquery/jquery.js';?>"></script>
<script src="<?=$this->config->item('vendor-libs').'popper/popper.js';?>"></script>
<script src="<?=$this->config->item('vendor-js').'bootstrap.js';?>"></script>
<script src="<?=$this->config->item('vendor-libs').'perfect-scrollbar/perfect-scrollbar.js';?>"></script>

<script src="<?=$this->config->item('vendor-libs').'hammer/hammer.js';?>"></script>
<script src="<?=$this->config->item('vendor-libs').'i18n/i18n.js';?>"></script>
<script src="<?=$this->config->item('vendor-libs').'typeahead-js/typeahead.js';?>"></script>
<script src="<?=$this->config->item('vendor-libs').'bootstrap-select/bootstrap-select.js';?>"></script>

<script src="<?=$this->config->item('vendor-js').'menu.js';?>"></script>
<!-- endbuild -->

<!-- stepper -->
<script src="<?=$this->config->item('vendor-libs').'bs-stepper/bs-stepper.js';?>"></script>
<script src="<?=$this->config->item('vendor-libs').'bootstrap-select/bootstrap-select.js';?>"></script>
<script src="<?=$this->config->item('vendor-libs').'select2/select2.js';?>"></script>
<script src="<?=$this->config->item('vendor-libs').'sweetalert2/sweetalert2.js';?>"></script>
<script src="<?=$this->config->item('vendor-libs').'dropzone/dropzone.js';?>"></script>
<!-- <script src="<?=$this->config->item('js').'form-wizard-numbered.js';?>"></script> -->

<script src="<?=$this->config->item('js').'main.js';?>"></script>


<!-- ajax -->
<script src="<?=$this->config->item('js').'main2.js';?>"></script>

<!-- choose file -->
<script src="<?=$this->config->item('js').'upload.js';?>"></script>
<script src="<?=$this->config->item('js').'forms-file-upload.js';?>"></script>
<script src="<?=$this->config->item('js').'form-wizard-icons.js';?>"></script>

<!-- Vendors JS -->
<?php if (isset($datatables)) { ?>
    <script src="<?=$this->config->item('vendor-libs').'datatables/jquery.dataTables.js';?>"></script>
    <script src="<?=$this->config->item('vendor-libs').'datatables-bs5/datatables-bootstrap5.js';?>"></script>
    <script src="<?=$this->config->item('vendor-libs').'datatables-responsive/datatables.responsive.js';?>"></script>
    <script src="<?=$this->config->item('vendor-libs').'datatables-responsive-bs5/responsive.bootstrap5.js';?>"></script>
    <script src="<?=$this->config->item('vendor-libs').'datatables-checkboxes-jquery/datatables.checkboxes.js';?>"></script>
    <script src="<?=$this->config->item('vendor-libs').'datatables-buttons/datatables-buttons.js';?>"></script>
    <script src="<?=$this->config->item('vendor-libs').'datatables-buttons-bs5/buttons.bootstrap5.js';?>"></script>
    <script src="<?=$this->config->item('vendor-libs').'jszip/jszip.js';?>"></script>
    <script src="<?=$this->config->item('vendor-libs').'pdfmake/pdfmake.js';?>"></script>
    <script src="<?=$this->config->item('vendor-libs').'datatables-buttons/buttons.html5.js';?>"></script>
    <script src="<?=$this->config->item('vendor-libs').'datatables-buttons/buttons.print.js';?>"></script>
    
    <!-- Row Group JS -->
    <script src="<?=$this->config->item('vendor-libs').'datatables-rowgroup/datatables.rowgroup.js';?>"></script>
    <script src="<?=$this->config->item('vendor-libs').'datatables-rowgroup-bs5/rowgroup.bootstrap5.js';?>"></script>
    
    <script src="<?=$this->config->item('js').'datatables.config.js';?>"></script>
    <script src="<?=$this->config->item('js').'nik-ktp.js';?>"></script>
    <script src="<?=$this->config->item('vendor-libs').'apex-charts/apexcharts.js';?>"></script>
    <script src="<?=$this->config->item('js').'dashboards-analytics.js';?>"></script>

<?php } ?>
    