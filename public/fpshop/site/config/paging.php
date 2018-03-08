<?php 
class Pagination
{
    protected $_config = array(
        'current_page'  => 1, // Trang hiện tại
        'total_record'  => 1, // Tổng số record
        'total_page'    => 1, // Tổng số trang
        'limit'         => 10,// limit
        'start'         => 0, // start
        'link_full'     => '',// Link full có dạng như sau: domain/com/page/{page}
        'link_first'    => '',// Link trang đầu tiên
    );
     

    function init($config = array())
    {

        foreach ($config as $key => $val){
            if (isset($this->_config[$key])){
                $this->_config[$key] = $val;
            }
        }

        if ($this->_config['limit'] < 0){
            $this->_config['limit'] = 0;
        }
        

        $this->_config['total_page'] = ceil($this->_config['total_record'] / $this->_config['limit']);
         
        if (!$this->_config['total_page']){
            $this->_config['total_page'] = 1;
        }
         
        if ($this->_config['current_page'] < 1){
            $this->_config['current_page'] = 1;
        }
         
        if ($this->_config['current_page'] > $this->_config['total_page']){
            $this->_config['current_page'] = $this->_config['total_page'];
        }

        $this->_config['start'] = ($this->_config['current_page'] - 1) * $this->_config['limit'];
    }
     
    /*
     * Hàm lấy link theo trang
     */
    private function __link($page)
    {
        // Nếu trang < 1 thì ta sẽ lấy link first
        if ($page <= 1 && $this->_config['link_first']){
            return $this->_config['link_first'];
        }

        return str_replace('{page}', $page, $this->_config['link_full']);
    }
     
    function html()
    {   
        $p = '';
        // Kiểm tra tổng số trang lớn hơn 1 mới phân trang
        if ($this->_config['total_record'] > $this->_config['limit'])
        {
            $p = '<ul>';
             
            // Nút prev và first
            if ($this->_config['current_page'] > 1)
            {
                // $p .= '<li><a href="'.$this->__link('1').'">First</a></li>';
                $p .= '<li><a href="'.$this->__link($this->_config['current_page']-1).'">Prev</a></li>';
            }
             
            // lặp trong khoảng cách giữa min và max để hiển thị các nút
            for ($i = 1; $i <= $this->_config['total_page']; $i++)
            {
                // Trang hiện tại
                if ($this->_config['current_page'] == $i){
                    $p .= '<li><a class="current">'.$i.'</a></li>';
                }
                else{
                    $p .= '<li><a class="normal" href="'.$this->__link($i).'">'.$i.'</a></li>';
                }
            }
 
            // Nút last và next
            if ($this->_config['current_page'] < $this->_config['total_page'])
            {
                $p .= '<li><a href="'.$this->__link($this->_config['current_page'] + 1).'">Next</a></li>';
                // $p .= '<li><a href="'.$this->__link($this->_config['total_page']).'">Last</a></li>';
            }
             
            $p .= '</ul>';
        }
        return $p;
    }
}
 
?>