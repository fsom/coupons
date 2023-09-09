<?php

return [
    'userManagement' => [
        'title'          => 'User management',
        'title_singular' => 'User management',
    ],
    'permission' => [
        'title'          => 'Permissions',
        'title_singular' => 'Permission',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => ' ',
            'title'             => 'Title',
            'title_helper'      => ' ',
            'created_at'        => 'Created at',
            'created_at_helper' => ' ',
            'updated_at'        => 'Updated at',
            'updated_at_helper' => ' ',
            'deleted_at'        => 'Deleted at',
            'deleted_at_helper' => ' ',
        ],
    ],
    'role' => [
        'title'          => 'Roles',
        'title_singular' => 'Role',
        'fields'         => [
            'id'                 => 'ID',
            'id_helper'          => ' ',
            'title'              => 'Title',
            'title_helper'       => ' ',
            'permissions'        => 'Permissions',
            'permissions_helper' => ' ',
            'created_at'         => 'Created at',
            'created_at_helper'  => ' ',
            'updated_at'         => 'Updated at',
            'updated_at_helper'  => ' ',
            'deleted_at'         => 'Deleted at',
            'deleted_at_helper'  => ' ',
        ],
    ],
    'user' => [
        'title'          => 'Users',
        'title_singular' => 'User',
        'fields'         => [
            'id'                        => 'ID',
            'id_helper'                 => ' ',
            'name'                      => 'Name',
            'name_helper'               => ' ',
            'email'                     => 'Email',
            'email_helper'              => ' ',
            'email_verified_at'         => 'Email verified at',
            'email_verified_at_helper'  => ' ',
            'password'                  => 'Password',
            'password_helper'           => ' ',
            'roles'                     => 'Roles',
            'roles_helper'              => ' ',
            'remember_token'            => 'Remember Token',
            'remember_token_helper'     => ' ',
            'created_at'                => 'Created at',
            'created_at_helper'         => ' ',
            'updated_at'                => 'Updated at',
            'updated_at_helper'         => ' ',
            'deleted_at'                => 'Deleted at',
            'deleted_at_helper'         => ' ',
            'verified'                  => 'Verified',
            'verified_helper'           => ' ',
            'verified_at'               => 'Verified at',
            'verified_at_helper'        => ' ',
            'verification_token'        => 'Verification token',
            'verification_token_helper' => ' ',
        ],
    ],
    'auditLog' => [
        'title'          => 'Audit Logs',
        'title_singular' => 'Audit Log',
        'fields'         => [
            'id'                  => 'ID',
            'id_helper'           => ' ',
            'description'         => 'Description',
            'description_helper'  => ' ',
            'subject_id'          => 'Subject ID',
            'subject_id_helper'   => ' ',
            'subject_type'        => 'Subject Type',
            'subject_type_helper' => ' ',
            'user_id'             => 'User ID',
            'user_id_helper'      => ' ',
            'properties'          => 'Properties',
            'properties_helper'   => ' ',
            'host'                => 'Host',
            'host_helper'         => ' ',
            'created_at'          => 'Created at',
            'created_at_helper'   => ' ',
            'updated_at'          => 'Updated at',
            'updated_at_helper'   => ' ',
        ],
    ],
    'userAlert' => [
        'title'          => 'User Alerts',
        'title_singular' => 'User Alert',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => ' ',
            'alert_text'        => 'Alert Text',
            'alert_text_helper' => ' ',
            'alert_link'        => 'Alert Link',
            'alert_link_helper' => ' ',
            'user'              => 'Users',
            'user_helper'       => ' ',
            'created_at'        => 'Created at',
            'created_at_helper' => ' ',
            'updated_at'        => 'Updated at',
            'updated_at_helper' => ' ',
        ],
    ],
    'shop' => [
        'title'          => 'Shops',
        'title_singular' => 'Shop',
        'fields'         => [
            'id'                     => 'ID',
            'id_helper'              => ' ',
            'domain'                 => 'Domain',
            'domain_helper'          => ' ',
            'titel'                  => 'Titel',
            'titel_helper'           => ' ',
            'description'            => 'Description',
            'description_helper'     => ' ',
            'active'                 => 'Active',
            'active_helper'          => ' ',
            'affiliate'              => 'Affiliate',
            'affiliate_helper'       => ' ',
            'created_at'             => 'Created at',
            'created_at_helper'      => ' ',
            'updated_at'             => 'Updated at',
            'updated_at_helper'      => ' ',
            'deleted_at'             => 'Deleted at',
            'deleted_at_helper'      => ' ',
            'created_by'             => 'Created By',
            'created_by_helper'      => ' ',
            'offerspage'             => 'Offerspage',
            'offerspage_helper'      => ' ',
            'adress'                 => 'Adress',
            'adress_helper'          => ' ',
            'phone'                  => 'Phone',
            'phone_helper'           => ' ',
            'facebook'               => 'Facebook',
            'facebook_helper'        => ' ',
            'twitter'                => 'Twitter',
            'twitter_helper'         => ' ',
            'instagram'              => 'Instagram',
            'instagram_helper'       => ' ',
            'linkedin'               => 'Linkedin',
            'linkedin_helper'        => ' ',
            'youtube'                => 'Youtube',
            'youtube_helper'         => ' ',
            'tiktok'                 => 'Tiktok',
            'tiktok_helper'          => ' ',
            'email'                  => 'Email',
            'email_helper'           => ' ',
            'region'                 => 'Region',
            'region_helper'          => ' ',
            'screenshot'             => 'Screenshot',
            'screenshot_helper'      => ' ',
            'logo'                   => 'Logo',
            'logo_helper'            => ' ',
            'icon'                   => 'Icon',
            'icon_helper'            => ' ',
            'contactpage'            => 'Contactpage',
            'contactpage_helper'     => ' ',
            'imprint'                => 'Imprint',
            'imprint_helper'         => ' ',
            'internal_links'         => 'Internal Links',
            'internal_links_helper'  => ' ',
            'external_links'         => 'External Links',
            'external_links_helper'  => ' ',
            'header_redirect'        => 'Header Redirect',
            'header_redirect_helper' => ' ',
            'ip'                     => 'IP',
            'ip_helper'              => ' ',
            'https'                  => 'https',
            'https_helper'           => ' ',
            'name'                   => 'Name',
            'name_helper'            => ' ',
            'url'                    => 'Url',
            'url_helper'             => ' ',
            'content'                => 'Content',
            'content_helper'         => ' ',
            'svol'                   => 'Svol',
            'svol_helper'            => ' ',
            'keywords'               => 'Keywords',
            'keywords_helper'        => ' ',
        ],
    ],
    'category' => [
        'title'          => 'Categories',
        'title_singular' => 'Category',
        'fields'         => [
            'id'                 => 'ID',
            'id_helper'          => ' ',
            'name'               => 'Name',
            'name_helper'        => ' ',
            'title'              => 'Title',
            'title_helper'       => ' ',
            'description'        => 'Description',
            'description_helper' => ' ',
            'image'              => 'Image',
            'image_helper'       => ' ',
            'created_at'         => 'Created at',
            'created_at_helper'  => ' ',
            'updated_at'         => 'Updated at',
            'updated_at_helper'  => ' ',
            'deleted_at'         => 'Deleted at',
            'deleted_at_helper'  => ' ',
            'region'             => 'Region',
            'region_helper'      => ' ',
        ],
    ],
    'tag' => [
        'title'          => 'Tags',
        'title_singular' => 'Tag',
        'fields'         => [
            'id'                 => 'ID',
            'id_helper'          => ' ',
            'name'               => 'Name',
            'name_helper'        => ' ',
            'title'              => 'Title',
            'title_helper'       => ' ',
            'description'        => 'Description',
            'description_helper' => ' ',
            'image'              => 'Image',
            'image_helper'       => ' ',
            'created_at'         => 'Created at',
            'created_at_helper'  => ' ',
            'updated_at'         => 'Updated at',
            'updated_at_helper'  => ' ',
            'deleted_at'         => 'Deleted at',
            'deleted_at_helper'  => ' ',
            'region'             => 'Region',
            'region_helper'      => ' ',
        ],
    ],
    'coupon' => [
        'title'          => 'Coupons',
        'title_singular' => 'Coupon',
        'fields'         => [
            'id'                 => 'ID',
            'id_helper'          => ' ',
            'shop'               => 'Shop',
            'shop_helper'        => ' ',
            'code'               => 'Code',
            'code_helper'        => ' ',
            'value'              => 'Value',
            'value_helper'       => ' ',
            'until'              => 'Until',
            'until_helper'       => ' ',
            'landingpage'        => 'Landingpage',
            'landingpage_helper' => ' ',
            'rules'              => 'Rules',
            'rules_helper'       => ' ',
            'category'           => 'Category',
            'category_helper'    => ' ',
            'tags'               => 'Tags',
            'tags_helper'        => ' ',
            'created_at'         => 'Created at',
            'created_at_helper'  => ' ',
            'updated_at'         => 'Updated at',
            'updated_at_helper'  => ' ',
            'deleted_at'         => 'Deleted at',
            'deleted_at_helper'  => ' ',
            'created_by'         => 'Created By',
            'created_by_helper'  => ' ',
            'title'              => 'Title',
            'title_helper'       => ' ',
            'description'        => 'Description',
            'description_helper' => ' ',
        ],
    ],
    'comment' => [
        'title'          => 'Comments',
        'title_singular' => 'Comment',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => ' ',
            'shop'              => 'Shop',
            'shop_helper'       => ' ',
            'name'              => 'Name',
            'name_helper'       => ' ',
            'email'             => 'Email',
            'email_helper'      => ' ',
            'stars'             => 'Stars',
            'stars_helper'      => ' ',
            'ip'                => 'IP',
            'ip_helper'         => ' ',
            'data'              => 'Data',
            'data_helper'       => ' ',
            'comment'           => 'Comment',
            'comment_helper'    => ' ',
            'answer'            => 'Answer',
            'answer_helper'     => ' ',
            'answer_at'         => 'Answer At',
            'answer_at_helper'  => ' ',
            'created_at'        => 'Created at',
            'created_at_helper' => ' ',
            'updated_at'        => 'Updated at',
            'updated_at_helper' => ' ',
            'deleted_at'        => 'Deleted at',
            'deleted_at_helper' => ' ',
            'created_by'        => 'Created By',
            'created_by_helper' => ' ',
        ],
    ],
    'deal' => [
        'title'          => 'Deals',
        'title_singular' => 'Deal',
        'fields'         => [
            'id'                 => 'ID',
            'id_helper'          => ' ',
            'shop'               => 'Shop',
            'shop_helper'        => ' ',
            'title'              => 'Title',
            'title_helper'       => ' ',
            'description'        => 'Description',
            'description_helper' => ' ',
            'value'              => 'Value',
            'value_helper'       => ' ',
            'until'              => 'Until',
            'until_helper'       => ' ',
            'landingpage'        => 'Landingpage',
            'landingpage_helper' => ' ',
            'rules'              => 'Rules',
            'rules_helper'       => ' ',
            'category'           => 'Category',
            'category_helper'    => ' ',
            'tags'               => 'Tags',
            'tags_helper'        => ' ',
            'created_at'         => 'Created at',
            'created_at_helper'  => ' ',
            'updated_at'         => 'Updated at',
            'updated_at_helper'  => ' ',
            'deleted_at'         => 'Deleted at',
            'deleted_at_helper'  => ' ',
            'created_by'         => 'Created By',
            'created_by_helper'  => ' ',
            'brand'              => 'Brand',
            'brand_helper'       => ' ',
            'product'            => 'Product',
            'product_helper'     => ' ',
        ],
    ],
    'brand' => [
        'title'          => 'Brands',
        'title_singular' => 'Brand',
        'fields'         => [
            'id'                 => 'ID',
            'id_helper'          => ' ',
            'name'               => 'Name',
            'name_helper'        => ' ',
            'title'              => 'Title',
            'title_helper'       => ' ',
            'description'        => 'Description',
            'description_helper' => ' ',
            'image'              => 'Image',
            'image_helper'       => ' ',
            'content'            => 'Content',
            'content_helper'     => ' ',
            'created_at'         => 'Created at',
            'created_at_helper'  => ' ',
            'updated_at'         => 'Updated at',
            'updated_at_helper'  => ' ',
            'deleted_at'         => 'Deleted at',
            'deleted_at_helper'  => ' ',
            'region'             => 'Region',
            'region_helper'      => ' ',
        ],
    ],
    'product' => [
        'title'          => 'Products',
        'title_singular' => 'Product',
        'fields'         => [
            'id'                 => 'ID',
            'id_helper'          => ' ',
            'name'               => 'Name',
            'name_helper'        => ' ',
            'title'              => 'Title',
            'title_helper'       => ' ',
            'description'        => 'Description',
            'description_helper' => ' ',
            'image'              => 'Image',
            'image_helper'       => ' ',
            'content'            => 'Content',
            'content_helper'     => ' ',
            'ean'                => 'EAN',
            'ean_helper'         => ' ',
            'gtin'               => 'GTIN',
            'gtin_helper'        => ' ',
            'asin'               => 'ASIN',
            'asin_helper'        => ' ',
            'brand'              => 'Brand',
            'brand_helper'       => ' ',
            'images'             => 'Images',
            'images_helper'      => ' ',
            'created_at'         => 'Created at',
            'created_at_helper'  => ' ',
            'updated_at'         => 'Updated at',
            'updated_at_helper'  => ' ',
            'deleted_at'         => 'Deleted at',
            'deleted_at_helper'  => ' ',
            'region'             => 'Region',
            'region_helper'      => ' ',
        ],
    ],
    'setting' => [
        'title'          => 'Settings',
        'title_singular' => 'Setting',
    ],
    'offer' => [
        'title'          => 'Offers',
        'title_singular' => 'Offer',
        'fields'         => [
            'id'                 => 'ID',
            'id_helper'          => ' ',
            'shop'               => 'Shop',
            'shop_helper'        => ' ',
            'title'              => 'Title',
            'title_helper'       => ' ',
            'description'        => 'Description',
            'description_helper' => ' ',
            'value'              => 'Value',
            'value_helper'       => ' ',
            'until'              => 'Until',
            'until_helper'       => ' ',
            'landingpage'        => 'Landingpage',
            'landingpage_helper' => ' ',
            'rules'              => 'Rules',
            'rules_helper'       => ' ',
            'brand'              => 'Brand',
            'brand_helper'       => ' ',
            'product'            => 'Product',
            'product_helper'     => ' ',
            'category'           => 'Category',
            'category_helper'    => ' ',
            'tags'               => 'Tags',
            'tags_helper'        => ' ',
            'created_at'         => 'Created at',
            'created_at_helper'  => ' ',
            'updated_at'         => 'Updated at',
            'updated_at_helper'  => ' ',
            'deleted_at'         => 'Deleted at',
            'deleted_at_helper'  => ' ',
            'created_by'         => 'Created By',
            'created_by_helper'  => ' ',
        ],
    ],
    'view' => [
        'title'          => 'Views',
        'title_singular' => 'View',
        'fields'         => [
            'id'                  => 'ID',
            'id_helper'           => ' ',
            'landingpage'         => 'Landingpage',
            'landingpage_helper'  => ' ',
            'utm_source'          => 'Utm Source',
            'utm_source_helper'   => ' ',
            'utm_medium'          => 'Utm Medium',
            'utm_medium_helper'   => ' ',
            'utm_campaign'        => 'Utm Campaign',
            'utm_campaign_helper' => ' ',
            'created_at'          => 'Created at',
            'created_at_helper'   => ' ',
            'updated_at'          => 'Updated at',
            'updated_at_helper'   => ' ',
            'deleted_at'          => 'Deleted at',
            'deleted_at_helper'   => ' ',
            'uuid'                => 'Uuid',
            'uuid_helper'         => ' ',
        ],
    ],
    'click' => [
        'title'          => 'Clicks',
        'title_singular' => 'Click',
        'fields'         => [
            'id'                  => 'ID',
            'id_helper'           => ' ',
            'uuid'                => 'Uuid',
            'uuid_helper'         => ' ',
            'landingpage'         => 'Landingpage',
            'landingpage_helper'  => ' ',
            'utm_source'          => 'Utm Source',
            'utm_source_helper'   => ' ',
            'utm_medium'          => 'Utm Medium',
            'utm_medium_helper'   => ' ',
            'utm_campaign'        => 'Utm Campaign',
            'utm_campaign_helper' => ' ',
            'created_at'          => 'Created at',
            'created_at_helper'   => ' ',
            'updated_at'          => 'Updated at',
            'updated_at_helper'   => ' ',
            'deleted_at'          => 'Deleted at',
            'deleted_at_helper'   => ' ',
        ],
    ],

];
