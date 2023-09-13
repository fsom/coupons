<?php

Route::redirect('/', '/login');
Route::get('/home', function () {
    if (session('status')) {
        return redirect()->route('admin.home')->with('status', session('status'));
    }

    return redirect()->route('admin.home');
});

Route::get('userVerification/{token}', 'UserVerificationController@approve')->name('userVerification');
Auth::routes();

Route::group(['prefix' => 'admin', 'as' => 'admin.', 'namespace' => 'Admin', 'middleware' => ['auth']], function () {
    Route::get('/', 'HomeController@index')->name('home');
    // Permissions
    Route::delete('permissions/destroy', 'PermissionsController@massDestroy')->name('permissions.massDestroy');
    Route::resource('permissions', 'PermissionsController');

    // Roles
    Route::delete('roles/destroy', 'RolesController@massDestroy')->name('roles.massDestroy');
    Route::resource('roles', 'RolesController');

    // Users
    Route::delete('users/destroy', 'UsersController@massDestroy')->name('users.massDestroy');
    Route::resource('users', 'UsersController');

    // Audit Logs
    Route::resource('audit-logs', 'AuditLogsController', ['except' => ['create', 'store', 'edit', 'update', 'destroy']]);

    // User Alerts
    Route::delete('user-alerts/destroy', 'UserAlertsController@massDestroy')->name('user-alerts.massDestroy');
    Route::get('user-alerts/read', 'UserAlertsController@read');
    Route::resource('user-alerts', 'UserAlertsController', ['except' => ['edit', 'update']]);

    // Shop
    Route::delete('shops/destroy', 'ShopController@massDestroy')->name('shops.massDestroy');
    Route::post('shops/media', 'ShopController@storeMedia')->name('shops.storeMedia');
    Route::post('shops/ckmedia', 'ShopController@storeCKEditorImages')->name('shops.storeCKEditorImages');
    Route::post('shops/parse-csv-import', 'ShopController@parseCsvImport')->name('shops.parseCsvImport');
    Route::post('shops/process-csv-import', 'ShopController@processCsvImport')->name('shops.processCsvImport');
    Route::resource('shops', 'ShopController');

    // Coupon
    Route::delete('coupons/destroy', 'CouponController@massDestroy')->name('coupons.massDestroy');
    Route::post('coupons/parse-csv-import', 'CouponController@parseCsvImport')->name('coupons.parseCsvImport');
    Route::post('coupons/process-csv-import', 'CouponController@processCsvImport')->name('coupons.processCsvImport');
    Route::resource('coupons', 'CouponController');

    // Comment
    Route::delete('comments/destroy', 'CommentController@massDestroy')->name('comments.massDestroy');
    Route::resource('comments', 'CommentController');

    // Deal
    Route::delete('deals/destroy', 'DealController@massDestroy')->name('deals.massDestroy');
    Route::post('deals/parse-csv-import', 'DealController@parseCsvImport')->name('deals.parseCsvImport');
    Route::post('deals/process-csv-import', 'DealController@processCsvImport')->name('deals.processCsvImport');
    Route::resource('deals', 'DealController');

    // Brand
    Route::delete('brands/destroy', 'BrandController@massDestroy')->name('brands.massDestroy');
    Route::post('brands/media', 'BrandController@storeMedia')->name('brands.storeMedia');
    Route::post('brands/ckmedia', 'BrandController@storeCKEditorImages')->name('brands.storeCKEditorImages');
    Route::post('brands/parse-csv-import', 'BrandController@parseCsvImport')->name('brands.parseCsvImport');
    Route::post('brands/process-csv-import', 'BrandController@processCsvImport')->name('brands.processCsvImport');
    Route::resource('brands', 'BrandController');

    // Offer
    Route::delete('offers/destroy', 'OfferController@massDestroy')->name('offers.massDestroy');
    Route::post('offers/parse-csv-import', 'OfferController@parseCsvImport')->name('offers.parseCsvImport');
    Route::post('offers/process-csv-import', 'OfferController@processCsvImport')->name('offers.processCsvImport');
    Route::resource('offers', 'OfferController');

    // View
    Route::delete('views/destroy', 'ViewController@massDestroy')->name('views.massDestroy');
    Route::resource('views', 'ViewController');

    // Click
    Route::delete('clicks/destroy', 'ClickController@massDestroy')->name('clicks.massDestroy');
    Route::resource('clicks', 'ClickController');

    // Team
    Route::delete('teams/destroy', 'TeamController@massDestroy')->name('teams.massDestroy');
    Route::resource('teams', 'TeamController');

    // Ad
    Route::delete('ads/destroy', 'AdController@massDestroy')->name('ads.massDestroy');
    Route::post('ads/parse-csv-import', 'AdController@parseCsvImport')->name('ads.parseCsvImport');
    Route::post('ads/process-csv-import', 'AdController@processCsvImport')->name('ads.processCsvImport');
    Route::resource('ads', 'AdController');

    // Banner
    Route::delete('banners/destroy', 'BannerController@massDestroy')->name('banners.massDestroy');
    Route::resource('banners', 'BannerController');

    // Page
    Route::delete('pages/destroy', 'PageController@massDestroy')->name('pages.massDestroy');
    Route::post('pages/media', 'PageController@storeMedia')->name('pages.storeMedia');
    Route::post('pages/ckmedia', 'PageController@storeCKEditorImages')->name('pages.storeCKEditorImages');
    Route::resource('pages', 'PageController');

    // Post
    Route::delete('posts/destroy', 'PostController@massDestroy')->name('posts.massDestroy');
    Route::post('posts/media', 'PostController@storeMedia')->name('posts.storeMedia');
    Route::post('posts/ckmedia', 'PostController@storeCKEditorImages')->name('posts.storeCKEditorImages');
    Route::resource('posts', 'PostController');

    Route::get('system-calendar', 'SystemCalendarController@index')->name('systemCalendar');
    Route::get('team-members', 'TeamMembersController@index')->name('team-members.index');
    Route::post('team-members', 'TeamMembersController@invite')->name('team-members.invite');
});
Route::group(['prefix' => 'profile', 'as' => 'profile.', 'namespace' => 'Auth', 'middleware' => ['auth']], function () {
    // Change password
    if (file_exists(app_path('Http/Controllers/Auth/ChangePasswordController.php'))) {
        Route::get('password', 'ChangePasswordController@edit')->name('password.edit');
        Route::post('password', 'ChangePasswordController@update')->name('password.update');
        Route::post('profile', 'ChangePasswordController@updateProfile')->name('password.updateProfile');
        Route::post('profile/destroy', 'ChangePasswordController@destroy')->name('password.destroyProfile');
    }
});
