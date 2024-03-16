<?php
$queryf = "SELECT numerof FROM empleados ORDER BY numerof ASC";
$resultadof=$mysqli->query($queryf);?>
<script language="javascript" src="../js/jquery-3.2.1.min.js"></script>
<script language="javascript" src="../js/jquery-ui-1.12.1.custom/jquery-ui.min.js"></script>
<script language="javascript">
$(document).ready(function() {
    $("#numerof").change(function() {

        $('#familiar').find('option').remove().end().append('<option value="whatever"></option>').val(
            'whatever');

        $("#numerof option:selected").each(function() {
            numerof = $(this).val();
            $.post("../php/getnficha.php", {
                numerof: numerof
            }, function(data) {
                $("#familiar").html(data);
            });
        });
    })
});
</script>