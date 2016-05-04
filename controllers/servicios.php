<?php  
class Servicios extends Controller{
	protected function Index(){
		$viewmodel = new ServiciosModel();
		$this->ReturnView($viewmodel->Index(), true);
	}
}

?>