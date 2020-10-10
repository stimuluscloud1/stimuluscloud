<!-- Javascript -->
<script src="../assets/admin/bundles/libscripts.bundle.js"></script>    
<script src="../assets/admin/bundles/vendorscripts.bundle.js"></script>

<script src="../assets/admin/bundles/morrisscripts.bundle.js"></script><!-- Morris Plugin Js -->
<script src="../assets/admin/bundles/jvectormap.bundle.js"></script> <!-- JVectorMap Plugin Js -->
<script src="../assets/admin/bundles/knob.bundle.js"></script> <!-- Jquery Knob-->

<script src="../assets/admin/bundles/mainscripts.bundle.js"></script>
<script src="../assets/admin/bundles/morrisscripts.bundle.js"></script>
<script src="../assets/admin/js/pages/blog.js"></script>
<script src="../assets/admin/vendor/summernote/dist/summernote.js"></script>
<script>
    jQuery(document).ready(function() {

        $('.summernote').summernote({
            height: 350, // set editor height
            minHeight: null, // set minimum height of editor
            maxHeight: null, // set maximum height of editor
            focus: false, // set focus to editable area after initializing summernote
            popover: { image: [], link: [], air: [] }
        });

        $('.inline-editor').summernote({
            airMode: true
        });

    });

    window.edit = function() {
            $(".click2edit").summernote()
        },
        
    window.save = function() {
        $(".click2edit").summernote('destroy');
    }
</script>
</body>
</html>

