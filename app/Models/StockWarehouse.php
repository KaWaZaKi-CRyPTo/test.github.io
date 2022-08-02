<?php

namespace App\Models;

use \DateTimeInterface;
use App\Support\HasAdvancedFilter;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class StockWarehouse extends Model
{
    use HasFactory;
    use HasAdvancedFilter;
    use SoftDeletes;

    public $table = 'stock_warehouses';

    public $orderable = [
        'id',
        'name',
        'country.name',
        'city.name',
    ];

    public $filterable = [
        'id',
        'name',
        'country.name',
        'city.name',
    ];

    protected $fillable = [
        'name',
        'country_id',
        'city_id',
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

    public function city()
    {
        return $this->belongsTo(City::class);
    }

    protected function serializeDate(DateTimeInterface $date)
    {
        return $date->format('Y-m-d H:i:s');
    }
}
