<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Customers extends Model
{
    /**
     * nama tabel model ini.
     * 
     * @var string
     */
    protected $table = 'customers';
 /**
 * The attributes that are mass assignable.
 *
 * @var array
 */
 protected $fillable = ['customer_id', 'customer_name'];
 /**
 * primary key tabel ini.
 *
 * @var string
 */
 protected $primaryKey = 'customer_id';
 /**
 * enable auto_increment.
 *
 * @var string
 */
 public $incrementing = true;
 /**
 * activated timestamps.
 *
 * @var string
 */
 public $timestamps = true;
}