<?php

namespace Modules\Ventas\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DimDetalleVenta extends Model
{
    use HasFactory;
    protected $connection = "mysql";
    public $timestamps = false;
}
