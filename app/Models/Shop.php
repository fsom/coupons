<?php

namespace App\Models;

use App\Traits\MultiTenantModelTrait;
use DateTimeInterface;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\MediaLibrary\MediaCollections\Models\Media;

class Shop extends Model implements HasMedia
{
    use SoftDeletes, MultiTenantModelTrait, InteractsWithMedia, HasFactory;

    public $table = 'shops';

    protected $appends = [
        'screenshot',
        'logo',
    ];

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    public const REGION_SELECT = [
        'en'    => 'en',
        'de-de' => 'de-de',
        'de-at' => 'de-at',
        'de-ch' => 'de-ch',
        'fr-fr' => 'fr-fr',
        'es-es' => 'es-es',
        'it-it' => 'it-it',
    ];

    protected $fillable = [
        'region',
        'name',
        'domain',
        'url',
        'titel',
        'description',
        'content',
        'offerspage',
        'contactpage',
        'imprint',
        'adress',
        'phone',
        'icon',
        'affiliate',
        'facebook',
        'twitter',
        'instagram',
        'linkedin',
        'youtube',
        'tiktok',
        'active',
        'email',
        'created_at',
        'internal_links',
        'external_links',
        'header_redirect',
        'ip',
        'https',
        'svol',
        'keywords',
        'updated_at',
        'deleted_at',
        'created_by_id',
    ];

    protected function serializeDate(DateTimeInterface $date)
    {
        return $date->format('Y-m-d H:i:s');
    }

    public function registerMediaConversions(Media $media = null): void
    {
        $this->addMediaConversion('thumb')->fit('crop', 50, 50);
        $this->addMediaConversion('preview')->fit('crop', 120, 120);
    }

    public function shopCoupons()
    {
        return $this->hasMany(Coupon::class, 'shop_id', 'id');
    }

    public function shopComments()
    {
        return $this->hasMany(Comment::class, 'shop_id', 'id');
    }

    public function shopDeals()
    {
        return $this->hasMany(Deal::class, 'shop_id', 'id');
    }

    public function shopOffers()
    {
        return $this->hasMany(Offer::class, 'shop_id', 'id');
    }

    public function getScreenshotAttribute()
    {
        $file = $this->getMedia('screenshot')->last();
        if ($file) {
            $file->url       = $file->getUrl();
            $file->thumbnail = $file->getUrl('thumb');
            $file->preview   = $file->getUrl('preview');
        }

        return $file;
    }

    public function getLogoAttribute()
    {
        $file = $this->getMedia('logo')->last();
        if ($file) {
            $file->url       = $file->getUrl();
            $file->thumbnail = $file->getUrl('thumb');
            $file->preview   = $file->getUrl('preview');
        }

        return $file;
    }

    public function created_by()
    {
        return $this->belongsTo(User::class, 'created_by_id');
    }
}
