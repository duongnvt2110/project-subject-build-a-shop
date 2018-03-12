<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class donhang extends Model
{
    protected $table='donhang';
    public function getOrder()
	{
		return $this->hasmany('App\chitietdonhang','IDDH','IDDH');
	}
   
}