<?php
require APPPATH . 'libraries/REST_Controller.php';
     
class User extends REST_Controller {
    
	  /**
     * Get All Data from this method.
     *
     * @return Response
    */
    public function __construct() {
       parent::__construct();
       $this->load->database();
    }
       
    /**
     * Get All Data from this method.
     *
     * @return Response
    */
	public function index_get($id = 0){
        if(!empty($id)){
            $data = $this->db->get_where("usuarios", ['id' => $id])->row_array();
        }else{
            $data = $this->db->get("usuarios")->result();
        }
     
        $this->response($data, REST_Controller::HTTP_OK);
	}
      
    /**
     * Get All Data from this method.
     *
     * @return Response
    */
    public function index_post(){
        $input = $this->input->post();
        $this->db->insert('usuarios',$input);
     
        $this->response(['Usuario Creado'], REST_Controller::HTTP_OK);
    } 
     
    /**
     * Get All Data from this method.
     *
     * @return Response
    */
    public function index_put($id){
        $input = $this->put();
        $this->db->update('usuarios', $input, array('id'=>$id));
     
        $this->response(['Usuario Editado'], REST_Controller::HTTP_OK);
    }
     
    /**
     * Get All Data from this method.
     *
     * @return Response
    */
    public function index_delete($id){
        $this->db->delete('usuarios', array('id'=>$id));
       
        $this->response(['Usuario eliminado'], REST_Controller::HTTP_OK);
    }
    	
}
?>