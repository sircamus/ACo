<?php 
class Bootstrap{
	private $controller;
	private $action;
	private $request;

	public function __construct($request){
		$this->request = $request;
		if ($this->request['controller'] == "") {
			$this->controller = 'home';
		}
		else{
			$this->controller = $this->request['controller'];
		}

		if ($this->request['action'] == "") {
			$this->action = 'index';
		}
		else{
			$this->action = $this->request['action'];
		}

		// TEST
		//echo $this->action;
	}

	public function createController(){
		//Check class
		if (class_exists($this->controller)) {
			$parents = class_parents($this->controller);
		//Check Extend
			if (in_array("Controller", $parents)) {
				if (method_exists($this->controller, $this->action)) {
					return new $this->controller($this->action, $this->request);
				} else{
					//Method doesn't exists
					//echo '<h1>Method does not exists</h1>';
					require_once('404.php');
					return;
				}
			} else{
				//Base controller not found
				//echo '<h1>Base controller not found</h1>';
				require_once('404.php');
				return;
			} 
		} else {
				//Controller Class does not exists
			//echo '<h1>Controller Class does not exists</h1>';
			require_once('404.php');
			return;
		}
	}
}
?>