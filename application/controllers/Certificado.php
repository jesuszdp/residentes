<?php

defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Description of certificado
 *
 * @author JZDP
 */
class Certificado extends MY_Controller {

    function __construct() {
        $this->grupo_language_text = ['Certificados'];
        parent::__construct();
        $this->load->library('form_complete');
        $this->load->library('seguridad');
        $this->load->model('Certificado_model', 'certificado');
        $this->template->setTitle('Consulta de certificados. Residencias 2018');
    }

    public function index($folio=null) {
        $form = $this->input->post(null, true); //Limpieza de datos

        $folio = xss_clean($folio); //Limpiar cadena
        $output['language_text'] = $this->language_text;
        if(!is_null($folio) && !empty($folio)){ //Almacenar en arreglo POST valores de búsqueda
            //$folio = decrypt_base64(xss_clean($folio));
            $folio = xss_clean($folio);
            $this->load->library('form_validation');
            $this->form_validation->set_data(array('folio'=>$folio));
            $this->form_validation->set_rules('folio', 'Folio', 'required|alpha_dash|min_length[22]|max_length[30]');

            if ($this->form_validation->run() == TRUE) {
                $params = array('table'=>'certificado.residencia', 'where'=>"res_folio='".$folio."'");
                $output['datos'] = $this->certificado->get_certificado($params);
            } else {
                //pr(validation_errors());
                $output['datos'] = array();
                //$output['msg'] = $this->language_text['Certificados']['cert_error_folio_incorrecto'];
            }
        } else {
            $output['msg'] = $this->language_text['Certificados']['cert_texto_inicio'];
        }
        $view = $this->load->view('certificado/certificado.tpl.php', $output, true);     
        $this->template->setMainTitle($this->language_text['Certificados']['cert_titulo']);
        $this->template->setMainContent($view);
        $this->template->getTemplate();
    }


    public function buscador($folio=null) {
        $form = $this->input->post(null, true); //Limpieza de datos
        $output['display_form'] = true;
        if($form) { //Se valida el envío de datos
            if(array_key_exists('tipo_busqueda', $form) && !empty($form['tipo_busqueda']) ){ //Validar datos mínimos obligatorios
                $this->load->library('form_validation');
                $this->config->load('form_validation'); //Cargar archivo con validaciones
                $validations = $this->config->item('consulta_'.$form['tipo_busqueda']); //Obtener validaciones de archivo general
                $this->form_validation->set_rules($validations); //Añadir validaciones
                
                if ($this->form_validation->run() == TRUE) {
                    switch ($form['tipo_busqueda']) {
                        case 'folio':
                            $params = array('table'=>'certificado.residencia', 'where'=>"res_folio='".$form['folio']."'");
                            break;
                        case 'curp':
                            $params = array('table'=>'certificado.residencia', 'where'=>"res_curp='".$form['curp']."'");
                            break;
                        case 'nombre':
                            $form = array_map(function($str){ return mb_strtoupper($str); }, $form);
                            $params = array('table'=>'certificado.residencia', 'where'=>"res_nombre='".$form['nombre']."' AND res_apellido_paterno='".$form['apellido_paterno']."' AND res_apellido_materno='".$form['apellido_materno']."'");
                            break;
                        default:
                            $params = array();
                            break;
                    }
                    $datos['datos'] = $this->certificado->get_certificado($params);
                    $output['resultado'] = $this->load->view('certificado/resultado_buscador.tpl.php', $datos, true);
                }
                //pr(validation_errors());
            } else {
                $output['msg'] = $this->language_text['Certificados']['cert_error_busqueda'];
            }
        }
        $seleccione = array(''=>'Seleccione...');
        $this->load->model('Catalogo_model', 'catalogo');
        $output['language_text'] = $this->language_text;
        $view = $this->load->view('certificado/certificado_buscador.tpl.php', $output, true);
        $this->template->setMainTitle($this->language_text['Certificados']['cert_titulo']);
        $this->template->setMainContent($view);
        $this->template->getTemplate();
    }
}
