<?php

return [
    'userManagement' => [
        'title'          => 'Utilisateurs',
        'title_singular' => 'Utilisateurs',
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
        'title'          => 'Rôles',
        'title_singular' => 'Rôle',
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
        'title'          => 'Utilisateurs',
        'title_singular' => 'Utilisateur',
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
            'team'                      => 'Team',
            'team_helper'               => ' ',
            'approved'                  => 'Approved',
            'approved_helper'           => ' ',
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
            'offerspage'             => 'Offerspage',
            'offerspage_helper'      => ' ',
            'adress'                 => 'Adress',
            'adress_helper'          => ' ',
            'phone'                  => 'Phone',
            'phone_helper'           => ' ',
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
            'what'                   => 'What',
            'what_helper'            => ' ',
            'save'                   => 'Save',
            'save_helper'            => ' ',
            'about'                  => 'About',
            'about_helper'           => ' ',
            'catgories'              => 'Catgories',
            'catgories_helper'       => ' ',
            'team'                   => 'Team',
            'team_helper'            => ' ',
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
            'created_at'         => 'Created at',
            'created_at_helper'  => ' ',
            'updated_at'         => 'Updated at',
            'updated_at_helper'  => ' ',
            'deleted_at'         => 'Deleted at',
            'deleted_at_helper'  => ' ',
            'title'              => 'Title',
            'title_helper'       => ' ',
            'description'        => 'Description',
            'description_helper' => ' ',
            'team'               => 'Team',
            'team_helper'        => ' ',
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
            'team'              => 'Team',
            'team_helper'       => ' ',
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
            'created_at'         => 'Created at',
            'created_at_helper'  => ' ',
            'updated_at'         => 'Updated at',
            'updated_at_helper'  => ' ',
            'deleted_at'         => 'Deleted at',
            'deleted_at_helper'  => ' ',
            'team'               => 'Team',
            'team_helper'        => ' ',
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
            'team'               => 'Team',
            'team_helper'        => ' ',
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
            'created_at'         => 'Created at',
            'created_at_helper'  => ' ',
            'updated_at'         => 'Updated at',
            'updated_at_helper'  => ' ',
            'deleted_at'         => 'Deleted at',
            'deleted_at_helper'  => ' ',
            'team'               => 'Team',
            'team_helper'        => ' ',
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
            'team'                => 'Team',
            'team_helper'         => ' ',
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
            'team'                => 'Team',
            'team_helper'         => ' ',
        ],
    ],
    'team' => [
        'title'          => 'Teams',
        'title_singular' => 'Team',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => ' ',
            'created_at'        => 'Created at',
            'created_at_helper' => ' ',
            'updated_at'        => 'Updated At',
            'updated_at_helper' => ' ',
            'deleted_at'        => 'Deleted At',
            'deleted_at_helper' => ' ',
            'name'              => 'Name',
            'name_helper'       => ' ',
            'owner'             => 'Owner',
            'owner_helper'      => ' ',
        ],
    ],
    'ad' => [
        'title'          => 'Ads',
        'title_singular' => 'Ad',
        'fields'         => [
            'id'                 => 'ID',
            'id_helper'          => ' ',
            'space'              => 'Space',
            'space_helper'       => ' ',
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
            'created_at'         => 'Created at',
            'created_at_helper'  => ' ',
            'updated_at'         => 'Updated at',
            'updated_at_helper'  => ' ',
            'deleted_at'         => 'Deleted at',
            'deleted_at_helper'  => ' ',
            'team'               => 'Team',
            'team_helper'        => ' ',
        ],
    ],
    'banner' => [
        'title'          => 'Banner',
        'title_singular' => 'Banner',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => ' ',
            'space'             => 'Space',
            'space_helper'      => ' ',
            'soucecode'         => 'Soucecode',
            'soucecode_helper'  => ' ',
            'views'             => 'Views',
            'views_helper'      => ' ',
            'clicks'            => 'Clicks',
            'clicks_helper'     => ' ',
            'cpc'               => 'Cpc',
            'cpc_helper'        => ' ',
            'created_at'        => 'Created at',
            'created_at_helper' => ' ',
            'updated_at'        => 'Updated at',
            'updated_at_helper' => ' ',
            'deleted_at'        => 'Deleted at',
            'deleted_at_helper' => ' ',
            'team'              => 'Team',
            'team_helper'       => ' ',
        ],
    ],

];
