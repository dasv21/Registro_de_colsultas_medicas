<link rel="stylesheet" href="../js/jquery-ui-1.12.1.custom/jquery-ui.css" />
<script language="javascript" src="../js/jquery-3.2.1.min.js"></script>
<script language="javascript" src="../js/jquery-ui-1.12.1.custom/jquery-ui.min.js"></script>

<script>
$(function() {
    $("#fechad").datepicker({
        dateFormat: 'dd-mm-yy',
        yearRange: "2000:2050",
        firstDay: 1,
        monthNames: ['Enero', 'Febreo', 'Marzo',
            'Abril', 'Mayo', 'Junio',
            'Julio', 'Agosto', 'Septiembre',
            'Octubre', 'Noviembre', 'Diciembre'
        ],
        monthNamesShort: ['Ene', 'Feb', 'Mar', 'Abr', 'May', 'Jun',
            'Jul', 'Ago', 'Sep', 'Oct', 'Nov', 'Dic'
        ],
        dayNamesMin: ['Dom', 'Lun', 'Mar', 'Mie', 'Jue', 'Vie', 'Sab']
    });
    $("#fecham").datepicker({
        dateFormat: 'dd-mm-yy',
        yearRange: "2000:2050",
        firstDay: 1,
        monthNames: ['Enero', 'Febreo', 'Marzo',
            'Abril', 'Mayo', 'Junio',
            'Julio', 'Agosto', 'Septiembre',
            'Octubre', 'Noviembre', 'Diciembre'
        ],
        monthNamesShort: ['Ene', 'Feb', 'Mar', 'Abr', 'May', 'Jun',
            'Jul', 'Ago', 'Sep', 'Oct', 'Nov', 'Dic'
        ],
        dayNamesMin: ['Dom', 'Lun', 'Mar', 'Mie', 'Jue', 'Vie', 'Sab']
    });
    $("#fechah").datepicker({
        dateFormat: 'dd-mm-yy',
        yearRange: "2000:2050",
        firstDay: 1,
        monthNames: ['Enero', 'Febreo', 'Marzo',
            'Abril', 'Mayo', 'Junio',
            'Julio', 'Agosto', 'Septiembre',
            'Octubre', 'Noviembre', 'Diciembre'
        ],
        monthNamesShort: ['Ene', 'Feb', 'Mar', 'Abr', 'May', 'Jun',
            'Jul', 'Ago', 'Sep', 'Oct', 'Nov', 'Dic'
        ],
        dayNamesMin: ['Dom', 'Lun', 'Mar', 'Mie', 'Jue', 'Vie', 'Sab']
    });
    $("#fechacon").datepicker({
        dateFormat: 'dd-mm-yy',
        yearRange: "2000:2050",
        firstDay: 1,
        monthNames: ['Enero', 'Febreo', 'Marzo',
            'Abril', 'Mayo', 'Junio',
            'Julio', 'Agosto', 'Septiembre',
            'Octubre', 'Noviembre', 'Diciembre'
        ],
        monthNamesShort: ['Ene', 'Feb', 'Mar', 'Abr', 'May', 'Jun',
            'Jul', 'Ago', 'Sep', 'Oct', 'Nov', 'Dic'
        ],
        dayNamesMin: ['Dom', 'Lun', 'Mar', 'Mie', 'Jue', 'Vie', 'Sab']
    });
});
</script>
<script>
$(function() {
    $("input[type=submit]").button().click(function() {
        event.preventDefault();
    });
});
</script>
<style type="text/css">
/*letra del pie de pagina*/
footer .contenedor {
    color: #333333;
    font-size: 12px;
    margin-top: 20px;
    background: #C1EDED;
    border: 1px solid #DBE1EB;
    padding-left: 0%;
    padding-right: 0%;
    padding-top: 4px;
    padding-bottom: 4px;
}
</style>
<style>
.textbox {
    resize: none;
    border: 1px solid #DBE1EB;
    font-size: 12px;
    font-family: Arial, Verdana;
    padding-left: 4px;
    padding-right: 4px;
    padding-top: 5px;
    padding-bottom: 4px;
    border-radius: 7px;
    -moz-border-radius: 4px;
    -webkit-border-radius: 4px;
    -o-border-radius: 4px;
    background: #C1EDED;

    color: #2E3133;
}

.textbox:focus {
    color: #2E3133;
    border-color: #688BE8;
}
</style>
<style>
.textbox1 {
    resize: none;
    border: 1px solid #DBE1EB;
    font-size: 10px;
    font-family: Arial, Verdana;
    padding-left: 4px;
    padding-right: 4px;
    padding-top: 5px;
    padding-bottom: 4px;
    border-radius: 7px;
    -moz-border-radius: 4px;
    -webkit-border-radius: 4px;
    -o-border-radius: 4px;
    background: #C1EDED;

    color: #2E3133;
}

.textbox1:focus {
    color: #2E3133;
    border-color: #688BE8;
}
</style>
<style>
.tabla {
    border: 1px solid #DBE1EB;
    font-weight: bold;
    font-size: 13px;
    font-family: Arial, Verdana;
    padding-left: 5px;
    padding-right: 5px;
    padding-top: 7px;
    padding-bottom: 7px;
    border-radius: 10px;
    -moz-border-radius: 10px;
    -webkit-border-radius: 10px;
    -o-border-radius: 10px;
    background: #03A9D3;

    color: #2E3133;
}

.tabla:focus {
    color: #2E3133;
    border-color: #688BE8;
}
</style>
<style>
.tablarepor {
    resize: none;
    border: 1px solid #C1EDED;
    font-size: 9px;
    font-family: Arial, Verdana;
    padding-left: 4px;
    padding-right: 4px;
    padding-top: 5px;
    padding-bottom: 4px;
    border-radius: 7px;
    -moz-border-radius: 4px;
    -webkit-border-radius: 4px;
    -o-border-radius: 4px;
    background: #E8E8E8;

    color: #2E3133;
}

.tablarepor:focus {
    color: #2E3133;
    border-color: #03A9D3;
}
</style>