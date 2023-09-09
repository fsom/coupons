<?php

namespace App\Models;

use App\Traits\MultiTenantModelTrait;
use Carbon\Carbon;
use DateTimeInterface;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Comment extends Model
{
    use SoftDeletes, MultiTenantModelTrait, HasFactory;

    public $table = 'comments';

    protected $dates = [
        'answer_at',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    public const STARS_SELECT = [
        '5' => '5',
        '4' => '4',
        '3' => '3',
        '2' => '2',
        '1' => '1',
        '0' => '0',
    ];

    protected $fillable = [
        'shop_id',
        'name',
        'email',
        'stars',
        'ip',
        'data',
        'comment',
        'answer',
        'answer_at',
        'created_at',
        'updated_at',
        'deleted_at',
        'created_by_id',
    ];

    protected function serializeDate(DateTimeInterface $date)
    {
        return $date->format('Y-m-d H:i:s');
    }

    public function shop()
    {
        return $this->belongsTo(Shop::class, 'shop_id');
    }

    public function getAnswerAtAttribute($value)
    {
        return $value ? Carbon::createFromFormat('Y-m-d H:i:s', $value)->format(config('panel.date_format') . ' ' . config('panel.time_format')) : null;
    }

    public function setAnswerAtAttribute($value)
    {
        $this->attributes['answer_at'] = $value ? Carbon::createFromFormat(config('panel.date_format') . ' ' . config('panel.time_format'), $value)->format('Y-m-d H:i:s') : null;
    }

    public function created_by()
    {
        return $this->belongsTo(User::class, 'created_by_id');
    }
}
