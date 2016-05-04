<?php  
class Conocenos extends Controller{
	protected function Index(){
		$viewmodel = new ConocenosModel();
		$this->ReturnView($viewmodel->Index(), true);
	}
}

?>