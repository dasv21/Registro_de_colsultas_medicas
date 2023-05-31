<?php
$query = "SELECT id_patologia , nombre_patologia FROM patologia ORDER BY nombre_patologia ASC";
$resultado=$mysqli->query($query);
?>

<script language="javascript" src="../js/jquery-3.2.1.min.js"></script>
<script language="javascript">
$(document).ready(function() {
    $("#patologia").change(function() {

        $('#tipo_patologia').find('option').remove().end().append('<option value="whatever"></option>')
            .val('whatever');

        $("#patologia option:selected").each(function() {
            id_patologia = $(this).val();
            $.post("../php/gettpatologia.php", {
                id_patologia: id_patologia
            }, function(data) {
                $("#tipo_patologia").html(data);
            });
        });
    })
});
</script>