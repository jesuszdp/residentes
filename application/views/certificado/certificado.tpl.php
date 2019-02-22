<br><br>
<?php
if(isset($datos) AND !empty($datos)){
    foreach ($datos as $key => $dato) { ?>
        <div class="row">
            <div class="col-lg-5 col-md-5 col-sm-5 col-xs-5 div_container text-right">
                <label><b>Nombre:</b></label>
            </div>
            <div class="col-lg-7 col-md-7 col-sm-7 col-xs-7 div_container">
                <?php echo $dato['res_apellido_paterno'].' '.$dato['res_apellido_materno'].' '.$dato['res_nombre']; ?>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-5 col-md-5 col-sm-5 col-xs-5 div_container text-right">
                <label><b>Especialidad ó curso:</b></label>
            </div>
            <div class="col-lg-7 col-md-7 col-sm-7 col-xs-7 div_container">
                <?php echo $dato['res_especialidad']; ?>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-5 col-md-5 col-sm-5 col-xs-5 div_container text-right">
                <label><b>Delegación:</b></label>
            </div>
            <div class="col-lg-7 col-md-7 col-sm-7 col-xs-7 div_container">
                <?php echo $dato['res_ciudad']; ?>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-5 col-md-5 col-sm-5 col-xs-5 div_container text-right">
                <label><b>Sede:</b></label>
            </div>
            <div class="col-lg-7 col-md-7 col-sm-7 col-xs-7 div_container">
                <?php echo $dato['res_unidad']; ?>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-5 col-md-5 col-sm-5 col-xs-5 div_container text-right">
                <label><b>Periodo:</b></label>
            </div>
            <div class="col-lg-7 col-md-7 col-sm-7 col-xs-7 div_container">
                <?php echo $dato['res_fecha_inicio'].' '.$dato['res_fecha_termino']; ?>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-5 col-md-5 col-sm-5 col-xs-5 div_container text-right">
                <label><b>Folio:</b></label>
            </div>
            <div class="col-lg-7 col-md-7 col-sm-7 col-xs-7 div_container">
                <?php echo $dato['res_folio']; ?>
            </div>
        </div>
    <?php }                
} else {
    echo $msg;
}
?>
<div class="preventSelect"></div>
<script type="text/javascript">
function md(e) { 
    try { if (event.button==2||event.button==3) return false; }  
    catch (e) { if (e.which == 3) return false; } 
}
document.oncontextmenu = function() { return false; }
document.ondragstart   = function() { return false; }
document.onmousedown   = md;
$('body').bind('copy paste',function(e) {
    e.preventDefault(); return false; 
});
$('#contenido_principal').addClass('bg_aguila');
</script>