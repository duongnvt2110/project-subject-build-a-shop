<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class loaisp extends Model
{
	
	protected $table="loaisp";
	public function getLoaisp()
	{
		return $this->hasmany('App\chitietsp','IDSP','IDLoaiSp');
	}
}
