<div id="page-inner">
    <?php echo form_open('certificado/buscador/', array('id' => 'form_certificado')); ?>
    <?php if($display_form == true) { ?>
        <div class="col-sm-12" style="margin-bottom:20px;">
            <h4 class="page-head-line"><?php echo $language_text['Certificados']['cert_instrucciones']; ?></h4>
            <div class="col-xs-4 col-sm-4 text-right">
                <label class="control-label"><?php echo $this->form_complete->create_element(
                    array(
                        'id' => 'tipo_busqueda',
                        'type' => 'radio',
                        'value' => 'folio',
                        'name' => 'tipo_busqueda[]',
                        'attributes' => array(
                            'class' => '',
                            'maxlength' => 30
                        )
                    )
                ); ?>
                <?php echo $language_text['Certificados']['cert_folio']; ?></label>
            </div>
            <div class="col-xs-4 col-sm-4 text-center">
                <label class="control-label"><?php echo $this->form_complete->create_element(
                    array(
                        'id' => 'tipo_busqueda',
                        'type' => 'radio',
                        'value' => 'curp',
                        'name' => 'tipo_busqueda[]',
                        'attributes' => array(
                            'class' => '',
                            'maxlength' => 30
                        )
                    )
                ); ?>
                <?php echo $language_text['Certificados']['cert_curp']; ?></label>
            </div>
            <div class="col-xs-4 col-sm-4 text-left">
                <label class="control-label"><?php echo $this->form_complete->create_element(
                    array(
                        'id' => 'tipo_busqueda',
                        'type' => 'radio',
                        'value' => 'nombre',
                        'name' => 'tipo_busqueda[]',
                        'attributes' => array(
                            'class' => '',
                            'maxlength' => 30
                        )
                    )
                ); ?>
                <?php echo $language_text['Certificados']['cert_nombre']; ?></label>
            </div>
            <?php
            if(isset($msg) && !empty($msg)){
                echo '<div style="clear:both"></div><div class="alert alert-danger" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>'.$msg.'</div>';
            }
            ?>
        </div>
        <div style="clear:both;"></div>
        <div class="col-sm-12">
            <div id="div_folio" class="div_cuadro">
                <div class="ces-contact-form form-item webform-component webform-component-textfield webform-component--matricula webform-container-inline form-group form-inline form-item form-item-submitted-matricula form-type-textfield form-group"> <label class="control-label" for="edit-submitted-matricula"><?php echo $language_text['Certificados']['cert_folio']; ?></label>
                    <?php 
                    echo $this->form_complete->create_element(
                        array(
                            'id' => 'folio',
                            'type' => 'text',
                            'value' => '',
                            'attributes' => array(
                                'class' => 'form-control form-imss',
                                'maxlength' => 30
                            )
                        )
                    ); ?>
                </div>
                <?php echo form_error_format('folio'); ?>
            </div>
            <div id="div_curp" class="div_cuadro">
                <div class="ces-contact-form form-item webform-component webform-component-textfield webform-component--matricula webform-container-inline form-group form-inline form-item form-item-submitted-matricula form-type-textfield form-grou"> <label class="control-label" for="edit-submitted-matricula"><?php echo $language_text['Certificados']['cert_curp']; ?></label>
                    <?php 
                    echo $this->form_complete->create_element(
                        array(
                            'id' => 'curp',
                            'type' => 'text',
                            'value' => '',
                            'attributes' => array(
                                'class' => 'form-control form-text',
                                'maxlength' => 18
                            )
                        )
                    ); ?>
                </div>
                <?php echo form_error_format('curp'); ?>
            </div>
            <div id="div_nombre" class="div_cuadro">
                <div class="text-justify" style="padding: 0px 10px 10px 10px;">Solo se permiten letras y espacios. Los acentos y caracteres especiales no son permitidos.</div>
                <div class="ces-contact-form form-item webform-component webform-component-textfield webform-component--matricula webform-container-inline form-group form-inline form-item form-item-submitted-matricula form-type-textfield form-group"> <label class="control-label" for="edit-submitted-matricula"><?php echo $language_text['Certificados']['cert_nombre']; ?></label>
                    <?php 
                    echo $this->form_complete->create_element(
                        array(
                            'id' => 'nombre',
                            'type' => 'text',
                            'value' => '',
                            'attributes' => array(
                                'class' => 'form-control form-text uppercase',
                                'maxlength' => 50
                            )
                        )
                    ); ?>
                </div>
                <?php echo form_error_format('nombre'); ?>
                <div class="ces-contact-form form-item webform-component webform-component-textfield webform-component--matricula webform-container-inline form-group form-inline form-item form-item-submitted-matricula form-type-textfield form-group"> <label class="control-label" for="edit-submitted-matricula"><?php echo $language_text['Certificados']['cert_apellido_paterno']; ?></label>
                    <?php 
                    echo $this->form_complete->create_element(
                        array(
                            'id' => 'apellido_paterno',
                            'type' => 'text',
                            'value' => '',
                            'attributes' => array(
                                'class' => 'form-control form-text uppercase',
                                'maxlength' => 50
                            )
                        )
                    ); ?>
                </div>
                <?php echo form_error_format('apellido_paterno'); ?>
                <div class="ces-contact-form form-item webform-component webform-component-textfield webform-component--matricula webform-container-inline form-group form-inline form-item form-item-submitted-matricula form-type-textfield form-group"> <label class="control-label" for="edit-submitted-matricula"><?php echo $language_text['Certificados']['cert_apellido_materno']; ?></label>
                    <?php 
                    echo $this->form_complete->create_element(
                        array(
                            'id' => 'apellido_materno',
                            'type' => 'text',
                            'value' => '',
                            'attributes' => array(
                                'class' => 'form-control form-text uppercase',
                                'maxlength' => 50
                            )
                        )
                    ); ?>
                </div>
                <?php echo form_error_format('apellido_materno'); ?>
            </div><br>
            <!--div class="col-sm-12">
                <div class="form-group">
                    <div class="ces-contact-form form-item webform-component webform-component-textfield webform-component--matricula webform-container-inline form-group form-inline form-item form-item-submitted-matricula form-type-textfield form-group"> <label class="control-label" for="edit-submitted-matricula"><?php echo $language_text['Certificados']['cert_codigo_verificacion']; ?></label>
                        <?php 
                        echo $this->form_complete->create_element(
                            array(
                                'id' => 'captcha',
                                'type' => 'text',
                                'value' => '',
                                'attributes' => array(
                                    'class' => 'form-control input-name',
                                    'title' => 'Código de verificación es requerido'
                                )
                            )
                        ); ?>
                    </div>
                    <div class="captcha-container" id="captcha_first">
                        <div class="col-lg-6 col-xs-8 text-right">
                            <img class="captcha" id="captcha_img" src="<?php echo site_url(); ?>/inicio/captcha" alt="CAPTCHA Image" />
                        </div>
                        <div class="col-lg-6 col-xs-4 text-left">
                            <a class="btn btn-lg btn-theme" onclick="new_captcha()" style="padding: 10px 30px;">
                                <span class="glyphicon glyphicon-refresh"></span>
                            </a>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                    <?php
                    echo form_error_format('captcha');
                    if (isset($errores) && !is_null($errores)) {
                        ?>
                        <div class="alert alert-danger" role="alert">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">×</span>
                            </button>
                        <?php echo $errores; ?>
                        </div>
                    <?php } ?>
                </div>
            </div -->
            <div class="col-sm-12 text-center">
                <button id="btn_consultar" name="submit" type="submit" class="btn-pad botonPE"><?php echo $language_text['Certificados']['cert_consultar']; ?> <span class="glyphicon glyphicon-search"></span></button>
            </div>
        </div>
    <?php } ?>
    <div class="col-sm-12" style="margin-top:30px">
        <?php if(isset($resultado) AND !empty($resultado)){
            echo "<div id='div_resultado' class='col-sm-12 text-center'>".$resultado."</div>";
        } ?>
    </div>
    <?php echo form_close(); ?>
    <script src="<?php echo asset_url(); ?>js/captcha.js"></script>
    <script>
    $(function() {
        activar_busqueda();
        $('input[name=tipo_busqueda]').on('click', function() {
            activar_busqueda();
            $('input[type=text]').val('');
            $('.alert').remove();
        });
    });
    function activar_busqueda(){
        var tipo_busqueda = $('input[name=tipo_busqueda]:checked').val();
        $(".div_cuadro").hide();
        $("#div_"+tipo_busqueda).fadeIn('slow');
        $('#captcha').val('');
    }
    </script>
</div>
