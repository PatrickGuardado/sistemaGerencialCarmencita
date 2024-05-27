<?php

namespace Modules\Producto\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DimProducto extends Model
{
    use HasFactory;
    protected $connection = 'mysql';
    protected $primaryKey = 'id_producto';
}
