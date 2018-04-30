<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/1/25
 * Time: 14:57
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class AddressAreaModel extends Model
{
    use SoftDeletes;
    protected $table = 'address_area_info';
    public $timestamps = true;
    protected $dates=['deleted_at'];
}