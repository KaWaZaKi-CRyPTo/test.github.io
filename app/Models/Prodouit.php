<?php

namespace App\Models;

use \DateTimeInterface;
use App\Support\HasAdvancedFilter;
use App\Traits\Auditable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Prodouit extends Model
{
    use HasFactory;
    use HasAdvancedFilter;
    use SoftDeletes;
    use Auditable;

    public $table = 'prodouits';

    public static $search = [
        'name',
    ];

    public $orderable = [
        'id',
        'name',
        'mark',
        'price',
    ];

    public $filterable = [
        'id',
        'name',
        'mark',
        'price',
    ];

    protected $fillable = [
        'name',
        'mark',
        'price',
    ];

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected function serializeDate(DateTimeInterface $date)
    {
        return $date->format('Y-m-d H:i:s');
    }
}
