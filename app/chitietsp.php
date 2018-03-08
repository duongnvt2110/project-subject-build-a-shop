<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class chitietsp extends Model
{
   	protected $table="chitietsp";
	public function getLoaisp()
	{
		return $this->beLongsTo('App\loaisp','IDSP','ID');
	}
}
