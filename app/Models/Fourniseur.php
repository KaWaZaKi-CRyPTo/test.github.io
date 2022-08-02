<?php

namespace App\Models;

use \DateTimeInterface;
use App\Support\HasAdvancedFilter;
use App\Traits\Auditable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Fourniseur extends Model
{
    use HasFactory;
    use HasAdvancedFilter;
    use SoftDeletes;
    use Auditable;

    public $table = 'fourniseurs';

    public static $search = [
        'name',
    ];

    public $orderable = [
        'id',
        'name',
        'email',
        'phone',
    ];

    public $filterable = [
        'id',
        'name',
        'email',
        'phone',
    ];

    protected $fillable = [
        'name',
        'email',
        'phone',
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
