<?php

namespace App\Models;

use App\Traits\MultiTenantModelTrait;
use Carbon\Carbon;
use DateTimeInterface;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Ad extends Model
{
    use SoftDeletes, MultiTenantModelTrait, HasFactory;

    public $table = 'ads';

    protected $dates = [
        'until',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'space',
        'title',
        'description',
        'value',
        'until',
        'landingpage',
        'rules',
        'created_at',
        'updated_at',
        'deleted_at',
        'team_id',
    ];

    protected function serializeDate(DateTimeInterface $date)
    {
        return $date->format('Y-m-d H:i:s');
    }

    public function getUntilAttribute($value)
    {
        return $value ? Carbon::parse($value)->format(config('panel.date_format')) : null;
    }

    public function setUntilAttribute($value)
    {
        $this->attributes['until'] = $value ? Carbon::createFromFormat(config('panel.date_format'), $value)->format('Y-m-d') : null;
    }

    public function team()
    {
        return $this->belongsTo(Team::class, 'team_id');
    }
}