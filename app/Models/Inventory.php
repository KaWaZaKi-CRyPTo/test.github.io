<?php

namespace App\Models;

use \DateTimeInterface;
use App\Support\HasAdvancedFilter;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Inventory extends Model
{
    use HasFactory;
    use HasAdvancedFilter;
    use SoftDeletes;

    public $table = 'inventories';

    public $orderable = [
        'id',
        'product.name',
        'qtt_init',
        'final_qtt',
    ];

    public $filterable = [
        'id',
        'product.name',
        'qtt_init',
        'final_qtt',
    ];

    protected $fillable = [
        'product_id',
        'qtt_init',
        'final_qtt',
    ];

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    public function product()
    {
        return $this->belongsTo(Prodouit::class);
    }

    protected function serializeDate(DateTimeInterface $date)
    {
        return $date->format('Y-m-d H:i:s');
    }
}
