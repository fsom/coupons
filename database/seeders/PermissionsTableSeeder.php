<?php

namespace Database\Seeders;

use App\Models\Permission;
use Illuminate\Database\Seeder;

class PermissionsTableSeeder extends Seeder
{
    public function run()
    {
        $permissions = [
            [
                'id'    => 1,
                'title' => 'user_management_access',
            ],
            [
                'id'    => 2,
                'title' => 'permission_create',
            ],
            [
                'id'    => 3,
                'title' => 'permission_edit',
            ],
            [
                'id'    => 4,
                'title' => 'permission_show',
            ],
            [
                'id'    => 5,
                'title' => 'permission_delete',
            ],
            [
                'id'    => 6,
                'title' => 'permission_access',
            ],
            [
                'id'    => 7,
                'title' => 'role_create',
            ],
            [
                'id'    => 8,
                'title' => 'role_edit',
            ],
            [
                'id'    => 9,
                'title' => 'role_show',
            ],
            [
                'id'    => 10,
                'title' => 'role_delete',
            ],
            [
                'id'    => 11,
                'title' => 'role_access',
            ],
            [
                'id'    => 12,
                'title' => 'user_create',
            ],
            [
                'id'    => 13,
                'title' => 'user_edit',
            ],
            [
                'id'    => 14,
                'title' => 'user_show',
            ],
            [
                'id'    => 15,
                'title' => 'user_delete',
            ],
            [
                'id'    => 16,
                'title' => 'user_access',
            ],
            [
                'id'    => 17,
                'title' => 'audit_log_show',
            ],
            [
                'id'    => 18,
                'title' => 'audit_log_access',
            ],
            [
                'id'    => 19,
                'title' => 'user_alert_create',
            ],
            [
                'id'    => 20,
                'title' => 'user_alert_show',
            ],
            [
                'id'    => 21,
                'title' => 'user_alert_delete',
            ],
            [
                'id'    => 22,
                'title' => 'user_alert_access',
            ],
            [
                'id'    => 23,
                'title' => 'shop_create',
            ],
            [
                'id'    => 24,
                'title' => 'shop_edit',
            ],
            [
                'id'    => 25,
                'title' => 'shop_show',
            ],
            [
                'id'    => 26,
                'title' => 'shop_delete',
            ],
            [
                'id'    => 27,
                'title' => 'shop_access',
            ],
            [
                'id'    => 28,
                'title' => 'coupon_create',
            ],
            [
                'id'    => 29,
                'title' => 'coupon_edit',
            ],
            [
                'id'    => 30,
                'title' => 'coupon_show',
            ],
            [
                'id'    => 31,
                'title' => 'coupon_delete',
            ],
            [
                'id'    => 32,
                'title' => 'coupon_access',
            ],
            [
                'id'    => 33,
                'title' => 'comment_create',
            ],
            [
                'id'    => 34,
                'title' => 'comment_edit',
            ],
            [
                'id'    => 35,
                'title' => 'comment_show',
            ],
            [
                'id'    => 36,
                'title' => 'comment_delete',
            ],
            [
                'id'    => 37,
                'title' => 'comment_access',
            ],
            [
                'id'    => 38,
                'title' => 'deal_create',
            ],
            [
                'id'    => 39,
                'title' => 'deal_edit',
            ],
            [
                'id'    => 40,
                'title' => 'deal_show',
            ],
            [
                'id'    => 41,
                'title' => 'deal_delete',
            ],
            [
                'id'    => 42,
                'title' => 'deal_access',
            ],
            [
                'id'    => 43,
                'title' => 'brand_create',
            ],
            [
                'id'    => 44,
                'title' => 'brand_edit',
            ],
            [
                'id'    => 45,
                'title' => 'brand_show',
            ],
            [
                'id'    => 46,
                'title' => 'brand_delete',
            ],
            [
                'id'    => 47,
                'title' => 'brand_access',
            ],
            [
                'id'    => 48,
                'title' => 'setting_access',
            ],
            [
                'id'    => 49,
                'title' => 'offer_create',
            ],
            [
                'id'    => 50,
                'title' => 'offer_edit',
            ],
            [
                'id'    => 51,
                'title' => 'offer_show',
            ],
            [
                'id'    => 52,
                'title' => 'offer_delete',
            ],
            [
                'id'    => 53,
                'title' => 'offer_access',
            ],
            [
                'id'    => 54,
                'title' => 'view_create',
            ],
            [
                'id'    => 55,
                'title' => 'view_edit',
            ],
            [
                'id'    => 56,
                'title' => 'view_show',
            ],
            [
                'id'    => 57,
                'title' => 'view_delete',
            ],
            [
                'id'    => 58,
                'title' => 'view_access',
            ],
            [
                'id'    => 59,
                'title' => 'click_create',
            ],
            [
                'id'    => 60,
                'title' => 'click_edit',
            ],
            [
                'id'    => 61,
                'title' => 'click_show',
            ],
            [
                'id'    => 62,
                'title' => 'click_delete',
            ],
            [
                'id'    => 63,
                'title' => 'click_access',
            ],
            [
                'id'    => 64,
                'title' => 'team_create',
            ],
            [
                'id'    => 65,
                'title' => 'team_edit',
            ],
            [
                'id'    => 66,
                'title' => 'team_show',
            ],
            [
                'id'    => 67,
                'title' => 'team_delete',
            ],
            [
                'id'    => 68,
                'title' => 'team_access',
            ],
            [
                'id'    => 69,
                'title' => 'ad_create',
            ],
            [
                'id'    => 70,
                'title' => 'ad_edit',
            ],
            [
                'id'    => 71,
                'title' => 'ad_show',
            ],
            [
                'id'    => 72,
                'title' => 'ad_delete',
            ],
            [
                'id'    => 73,
                'title' => 'ad_access',
            ],
            [
                'id'    => 74,
                'title' => 'banner_create',
            ],
            [
                'id'    => 75,
                'title' => 'banner_edit',
            ],
            [
                'id'    => 76,
                'title' => 'banner_show',
            ],
            [
                'id'    => 77,
                'title' => 'banner_delete',
            ],
            [
                'id'    => 78,
                'title' => 'banner_access',
            ],
            [
                'id'    => 79,
                'title' => 'profile_password_edit',
            ],
        ];

        Permission::insert($permissions);
    }
}
