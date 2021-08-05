 <?php
/**
* Written by Ntonsite Mwamlima.
*/
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

    public function __construct() 
    {
        parent:: __construct();
        $this->load->model('User_model');
        $this->load->model('Role_model');
        $this->load->model('leaves_model');
        $this->load->library('session');

        $data['role'] = $this->Role_model->getRoles();
        $data['title'] = 'Leave Admin-Backend';
        $this->load->view('includes/header_admin', $data);
    }

	public function index() {

        $data['result'] = $this->User_model->getUsers();
        $data['role'] = $this->Role_model->getRoles();
        $this->load->view('main', $data);
        $this->load->view('includes/footer');
    }
    public function create() {
      
        $user_data = array (
            'user_name'   => $this->input->post('name'),
            'role'=> $this->input->post('role')
        );
        
        $this->User_model->createData($user_data);
        redirect("admin");
    }

    public function edit($id) {
        $data['row'] = $this->User_model->getData($id);
        $this->load->view('UserEdit', $data);
    }

    public function update($id) {
        $user_data = array (
            'user_name'  => $this->input->post('user_name'),
            'role'  => $this->input->post('role'),
            'user_id'=> $this->input->post('id')
        );

        $this->User_model->updateData($id, $user_data);
        redirect("admin");
    }

    public function delete($id) {
        $this->User_model->deleteData($id); 
        redirect("admin");
    }

    public function logout(){

      $this->session->sess_destroy();
      redirect('auth/logout');
    }

    // public function upload(){
    //     //accept data from excel and push to the database table
    //     if(isset($_FILES["file"]["name"]))
    //     {
    //         $path = $_FILES["file"]["tmp_name"];
    //         $object = PHPExcel_IOFactory::load($path);
    //         foreach($object->getWorksheetIterator() as $worksheet)
    //         {
    //             $highestRow = $worksheet->getHighestRow();
    //             $highestColumn = $worksheet->getHighestColumn();
    //             for($row=2; $row<=$highestRow; $row++)
    //             {
    //                 $abt_code = $worksheet->getCellByColumnAndRow(0, $row)->getValue();
    //                 $name = $worksheet->getCellByColumnAndRow(1, $row)->getValue();
    //                 $balance = $worksheet->getCellByColumnAndRow(2, $row)->getValue();
    //                 $data[] = array(
    //                     'abt_code'  => $abt_code,
    //                     'name'   => $name,
    //                     'leave_balance'    => $balance
    //                 );
    //             }
    //         }
    //         if (!empty($data)) {
    //             $this->leaves_model->createData($data);
    //         }
    //         $this->session->set_flashdata('upload','Data uploaded successfully');
    //         redirect('admin');
    //     }
    // }

    public function revert(){
        $this->leaves_model->revert();
        $this->session->set_flashdata('revert', 'Data removed and ready to be uploaded again');
        redirect('admin');
    }
}
