  <script src="<?= base_url(); ?>back/js/app.min.js"></script>
    <script src="<?= base_url(); ?>back/js/chart.min.js"></script>
    <!-- Custom Js -->
    <script src="<?= base_url(); ?>back/js/admin.js"></script>
    <script src="<?= base_url(); ?>back/js/bundles/amcharts4/core.js"></script>
    <script src="<?= base_url(); ?>back/js/bundles/amcharts4/charts.js"></script>
    <script src="<?= base_url(); ?>back/js/bundles/amcharts4/animated.js"></script>
    <script src="<?= base_url(); ?>back/js/pages/charts/jquery-knob.js"></script>
    <script src="<?= base_url(); ?>back/js/pages/sparkline/sparkline-data.js"></script>
    <script src="<?= base_url(); ?>back/js/pages/medias/carousel.js"></script>
    <script src="<?= base_url(); ?>back/js/pages/index.js"></script>
    <script src="<?= base_url(); ?>back/js/pages/tables/jquery-datatable.js"></script>
    <script src="<?= base_url(); ?>back/js/table.min.js"></script> 

    <script src="<?= base_url(); ?>back/js/form.min.js"></script> 
    <link href="<?= base_url(); ?>back/css/form.min.css" rel="stylesheet">

<script type="text/javascript" src="<?=base_url()?>editor/ckeditor/ckeditor.js"></script>
<script type="text/javascript" src="<?=base_url()?>editor/ckfinder/ckfinder.js"></script>
<script type="text/javascript">
    var editor = CKEDITOR.replace( 'editor1', {
        filebrowserBrowseUrl : '<?=base_url()?>editor/ckfinder/ckfinder.html',
        filebrowserImageBrowseUrl : '<?=base_url()?>editor/ckfinder/ckfinder.html?type=Images',
        filebrowserFlashBrowseUrl : '<?=base_url()?>editor/ckfinder/ckfinder.html?type=Flash',
        filebrowserUploadUrl : '<?=base_url()?>editor/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files',
        filebrowserImageUploadUrl : '<?=base_url()?>editor/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images',
        filebrowserFlashUploadUrl : '<?=base_url()?>editor/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash'
    });
    CKFinder.setupCKEditor( editor, '../' );
    var editor = CKEDITOR.replace( 'editor2', {
        filebrowserBrowseUrl : '<?=base_url()?>editor/ckfinder/ckfinder.html',
        filebrowserImageBrowseUrl : '<?=base_url()?>editor/ckfinder/ckfinder.html?type=Images',
        filebrowserFlashBrowseUrl : '<?=base_url()?>editor/ckfinder/ckfinder.html?type=Flash',
        filebrowserUploadUrl : '<?=base_url()?>editor/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files',
        filebrowserImageUploadUrl : '<?=base_url()?>editor/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images',
        filebrowserFlashUploadUrl : '<?=base_url()?>editor/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash'
    });
    CKFinder.setupCKEditor( editor, '../' );
</script>

</body>