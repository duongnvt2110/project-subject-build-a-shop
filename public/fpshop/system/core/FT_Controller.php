<?php if ( ! defined('PATH_SYSTEM')) die ('Bad requested!');
class FT_Controller
{
    // Đối tượng view
    protected $view     = NULL;
     
    // Đối tượng model
    protected $model    = NULL;
     
    // Đối tượng library
    protected $library  = NULL;
     
    // Đối tượng helper
    protected $helper   = NULL;
     
    // Đối tượng config
    protected $config   = NULL;
     
    /**
     * Hàm khởi tạo
     * 
     * @desc    Load các thư viện cần thiết
     */
    public function __construct($is_controller=true) 
    {
        require_once PATH_SYSTEM . '/core/loader/FT_View_Loader.php';

        $this->view = new FT_View_Loader();

        require_once PATH_SYSTEM . '/core/loader/FT_Model_Loader.php';
        $this->model= new FT_Model_Loader();
    }
     
}
