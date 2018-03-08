<?php if ( ! defined('PATH_SYSTEM')) die ('Bad requested!');

	function FT_Load()
    {

    	$config = include_once PATH_APPLICATION . '/config/init.php';

    	$controller= empty($_GET['c'])?$config['default_controller']:$_GET['c'];

		$action= empty($_GET['a'])?$config['default_action']:$_GET['a'];
	    // in hoa chữ cái đầu
    	$controller= ucfirst(strtolower($controller)). '_Controller';
    	$action=strtolower($action). 'Action' ;

    	// CHeck file exists

    	 if (!file_exists(PATH_APPLICATION . '/controller/' . $controller . '.php')){
        	die ('Controller không tồn tại');
    	}
    	include_once PATH_SYSTEM . '/core/FT_Controller.php';
            	// Load Base_Controller
        // if (file_exists(PATH_APPLICATION . '/core/Base_Controller.php')){
        //     include_once PATH_APPLICATION . '/core/Base_Controller.php';
        // }
    	require_once PATH_APPLICATION .'/controller/' .$controller. '.php';

    	  if (!class_exists($controller)){
       		 die ('Controller không tồn tại');
   		 }

    	$obj=new $controller();
    	 if ( !method_exists($obj, $action)){
        	die ('Action không tồn tại');
    	}
	 
	    // Gọi tới action
	    $obj->{$action}();

    }

?>