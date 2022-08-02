<?php

namespace App\Models;

use \DateTimeInterface;
use App\Support\HasAdvancedFilter;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class City extends Model
{
    use HasFactory;
    use HasAdvancedFilter;
    use SoftDeletes;

    public $table = 'cities';

    public $orderable = [
        'id',
        'country.name',
        'country.slug',
        'name',
        'slug',
    ];

    public $filterable = [
        'id',
        'country.name',
        'country.slug',
        'name',
        'slug',
    ];

    protected $fillable = [
        'country_id',
        'name',
        'slug',
    ];

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    public function country()
    {
        return $this->belongsTo(Country::class);
    }

    protected function serializeDate(DateTimeInterface $date)
    {
        return $date->format('Y-m-d H:i:s');
    }
}
