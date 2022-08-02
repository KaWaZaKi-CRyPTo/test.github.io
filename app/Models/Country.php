<?php

namespace App\Models;

use \DateTimeInterface;
use App\Support\HasAdvancedFilter;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Country extends Model
{
    use HasFactory;
    use HasAdvancedFilter;
    use SoftDeletes;

    public $table = 'countries';

    public $orderable = [
        'id',
        'name',
        'slug',
        'iso_3',
    ];

    public $filterable = [
        'id',
        'name',
        'slug',
        'iso_3',
    ];

    protected $fillable = [
        'name',
        'slug',
        'iso_3',
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
