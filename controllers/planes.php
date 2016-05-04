<?php  
class Planes extends Controller{
	protected function Index(){
		$viewmodel = new PlanesModel();
		$this->ReturnView($viewmodel->Index(), true);
	}
}
?>