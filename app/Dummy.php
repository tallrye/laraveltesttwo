<?php 

/**
* Veritabanında Firma arşivinde kullanılmak üzere bir firmanın modeli
*/
namespace App;
use Illuminate\Database\Eloquent\Model;
class Dummy extends Model
{
	
	protected $fillable = array('name','surname');


	protected $table = 'tablo1';

}

