
<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Main extends CI_Controller {

function __construct()
{
        parent::__construct();

/* Standard Libraries of codeigniter are required */
$this->load->database();
$this->load->helper('url');
/* ------------------ */

$this->load->library('grocery_CRUD');

}

public function index()
{
echo "<h1>Welcome to the world of Street Fighter III</h1>";//Just an example to ensure that we get into the function
die();
}

public function subidas()
{
  $this->load->helper('download');

$this->load->helper('url');
$crud = new grocery_CRUD();
$crud->set_theme('datatables');
$crud->set_language("spanish");

$crud->set_subject('Postulaciones');
$crud->set_table('postulaciones');
$crud->columns('nombre','apellidos','rut','region','comuna','direccion','telefono','email','educacion_superior','titulos','cursos','comentarios','fecha');
$crud->add_action('Curriculum', '', '','ui-icon-image',array($this,'just_a_test'));

$crud->unset_read();
$crud->unset_add();
$crud->unset_edit();
$jsfile = 'assets/grocery_crud/js/refresh.js';
        $crud->set_js($jsfile);
$output = $crud->render();
$this->load->helper('file');

$this->_example_output($output);
}



function _example_output($output = null)
{
$this->load->view('our_template.php',$output);
}

function just_a_test($primary_key , $row)
{

  return "../../gitHub/formularioREAL/uploads/".$row->link;

}


}

/* End of file Main.php */
/* Location: ./application/controllers/Main.php */
