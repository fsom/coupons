<aside class="main-sidebar sidebar-dark-primary elevation-4" style="min-height: 917px;">
    <!-- Brand Logo -->
    <a href="#" class="brand-link">
        <span class="brand-text font-weight-light">{{ trans('panel.site_title') }}</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user (optional) -->

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs("admin.home") ? "active" : "" }}" href="{{ route("admin.home") }}">
                        <i class="fas fa-fw fa-tachometer-alt nav-icon">
                        </i>
                        <p>
                            {{ trans('global.dashboard') }}
                        </p>
                    </a>
                </li>
                @can('shop_access')
                    <li class="nav-item">
                        <a href="{{ route("admin.shops.index") }}" class="nav-link {{ request()->is("admin/shops") || request()->is("admin/shops/*") ? "active" : "" }}">
                            <i class="fa-fw nav-icon fas fa-store">

                            </i>
                            <p>
                                {{ trans('cruds.shop.title') }}
                            </p>
                        </a>
                    </li>
                @endcan
                @can('comment_access')
                    <li class="nav-item">
                        <a href="{{ route("admin.comments.index") }}" class="nav-link {{ request()->is("admin/comments") || request()->is("admin/comments/*") ? "active" : "" }}">
                            <i class="fa-fw nav-icon fas fa-comment-alt">

                            </i>
                            <p>
                                {{ trans('cruds.comment.title') }}
                            </p>
                        </a>
                    </li>
                @endcan
                @can('coupon_access')
                    <li class="nav-item">
                        <a href="{{ route("admin.coupons.index") }}" class="nav-link {{ request()->is("admin/coupons") || request()->is("admin/coupons/*") ? "active" : "" }}">
                            <i class="fa-fw nav-icon fas fa-barcode">

                            </i>
                            <p>
                                {{ trans('cruds.coupon.title') }}
                            </p>
                        </a>
                    </li>
                @endcan
                @can('deal_access')
                    <li class="nav-item">
                        <a href="{{ route("admin.deals.index") }}" class="nav-link {{ request()->is("admin/deals") || request()->is("admin/deals/*") ? "active" : "" }}">
                            <i class="fa-fw nav-icon fas fa-percentage">

                            </i>
                            <p>
                                {{ trans('cruds.deal.title') }}
                            </p>
                        </a>
                    </li>
                @endcan
                @can('offer_access')
                    <li class="nav-item">
                        <a href="{{ route("admin.offers.index") }}" class="nav-link {{ request()->is("admin/offers") || request()->is("admin/offers/*") ? "active" : "" }}">
                            <i class="fa-fw nav-icon fas fa-percent">

                            </i>
                            <p>
                                {{ trans('cruds.offer.title') }}
                            </p>
                        </a>
                    </li>
                @endcan
                @can('page_access')
                    <li class="nav-item">
                        <a href="{{ route("admin.pages.index") }}" class="nav-link {{ request()->is("admin/pages") || request()->is("admin/pages/*") ? "active" : "" }}">
                            <i class="fa-fw nav-icon far fa-object-group">

                            </i>
                            <p>
                                {{ trans('cruds.page.title') }}
                            </p>
                        </a>
                    </li>
                @endcan
                @can('post_access')
                    <li class="nav-item">
                        <a href="{{ route("admin.posts.index") }}" class="nav-link {{ request()->is("admin/posts") || request()->is("admin/posts/*") ? "active" : "" }}">
                            <i class="fa-fw nav-icon far fa-newspaper">

                            </i>
                            <p>
                                {{ trans('cruds.post.title') }}
                            </p>
                        </a>
                    </li>
                @endcan
                @can('ad_access')
                    <li class="nav-item">
                        <a href="{{ route("admin.ads.index") }}" class="nav-link {{ request()->is("admin/ads") || request()->is("admin/ads/*") ? "active" : "" }}">
                            <i class="fa-fw nav-icon fab fa-adversal">

                            </i>
                            <p>
                                {{ trans('cruds.ad.title') }}
                            </p>
                        </a>
                    </li>
                @endcan
                @can('setting_access')
                    <li class="nav-item has-treeview {{ request()->is("admin/brands*") ? "menu-open" : "" }} {{ request()->is("admin/views*") ? "menu-open" : "" }} {{ request()->is("admin/clicks*") ? "menu-open" : "" }} {{ request()->is("admin/banners*") ? "menu-open" : "" }} {{ request()->is("admin/options*") ? "menu-open" : "" }}">
                        <a class="nav-link nav-dropdown-toggle {{ request()->is("admin/brands*") ? "active" : "" }} {{ request()->is("admin/views*") ? "active" : "" }} {{ request()->is("admin/clicks*") ? "active" : "" }} {{ request()->is("admin/banners*") ? "active" : "" }} {{ request()->is("admin/options*") ? "active" : "" }}" href="#">
                            <i class="fa-fw nav-icon fas fa-cogs">

                            </i>
                            <p>
                                {{ trans('cruds.setting.title') }}
                                <i class="right fa fa-fw fa-angle-left nav-icon"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            @can('brand_access')
                                <li class="nav-item">
                                    <a href="{{ route("admin.brands.index") }}" class="nav-link {{ request()->is("admin/brands") || request()->is("admin/brands/*") ? "active" : "" }}">
                                        <i class="fa-fw nav-icon fas fa-fire">

                                        </i>
                                        <p>
                                            {{ trans('cruds.brand.title') }}
                                        </p>
                                    </a>
                                </li>
                            @endcan
                            @can('view_access')
                                <li class="nav-item">
                                    <a href="{{ route("admin.views.index") }}" class="nav-link {{ request()->is("admin/views") || request()->is("admin/views/*") ? "active" : "" }}">
                                        <i class="fa-fw nav-icon fas fa-eye">

                                        </i>
                                        <p>
                                            {{ trans('cruds.view.title') }}
                                        </p>
                                    </a>
                                </li>
                            @endcan
                            @can('click_access')
                                <li class="nav-item">
                                    <a href="{{ route("admin.clicks.index") }}" class="nav-link {{ request()->is("admin/clicks") || request()->is("admin/clicks/*") ? "active" : "" }}">
                                        <i class="fa-fw nav-icon fas fa-mouse-pointer">

                                        </i>
                                        <p>
                                            {{ trans('cruds.click.title') }}
                                        </p>
                                    </a>
                                </li>
                            @endcan
                            @can('banner_access')
                                <li class="nav-item">
                                    <a href="{{ route("admin.banners.index") }}" class="nav-link {{ request()->is("admin/banners") || request()->is("admin/banners/*") ? "active" : "" }}">
                                        <i class="fa-fw nav-icon fas fa-object-ungroup">

                                        </i>
                                        <p>
                                            {{ trans('cruds.banner.title') }}
                                        </p>
                                    </a>
                                </li>
                            @endcan
                            @can('option_access')
                                <li class="nav-item">
                                    <a href="{{ route("admin.options.index") }}" class="nav-link {{ request()->is("admin/options") || request()->is("admin/options/*") ? "active" : "" }}">
                                        <i class="fa-fw nav-icon fas fa-cog">

                                        </i>
                                        <p>
                                            {{ trans('cruds.option.title') }}
                                        </p>
                                    </a>
                                </li>
                            @endcan
                        </ul>
                    </li>
                @endcan
                @can('user_management_access')
                    <li class="nav-item has-treeview {{ request()->is("admin/permissions*") ? "menu-open" : "" }} {{ request()->is("admin/roles*") ? "menu-open" : "" }} {{ request()->is("admin/users*") ? "menu-open" : "" }} {{ request()->is("admin/audit-logs*") ? "menu-open" : "" }} {{ request()->is("admin/user-alerts*") ? "menu-open" : "" }} {{ request()->is("admin/teams*") ? "menu-open" : "" }}">
                        <a class="nav-link nav-dropdown-toggle {{ request()->is("admin/permissions*") ? "active" : "" }} {{ request()->is("admin/roles*") ? "active" : "" }} {{ request()->is("admin/users*") ? "active" : "" }} {{ request()->is("admin/audit-logs*") ? "active" : "" }} {{ request()->is("admin/user-alerts*") ? "active" : "" }} {{ request()->is("admin/teams*") ? "active" : "" }}" href="#">
                            <i class="fa-fw nav-icon fas fa-users">

                            </i>
                            <p>
                                {{ trans('cruds.userManagement.title') }}
                                <i class="right fa fa-fw fa-angle-left nav-icon"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            @can('permission_access')
                                <li class="nav-item">
                                    <a href="{{ route("admin.permissions.index") }}" class="nav-link {{ request()->is("admin/permissions") || request()->is("admin/permissions/*") ? "active" : "" }}">
                                        <i class="fa-fw nav-icon fas fa-unlock-alt">

                                        </i>
                                        <p>
                                            {{ trans('cruds.permission.title') }}
                                        </p>
                                    </a>
                                </li>
                            @endcan
                            @can('role_access')
                                <li class="nav-item">
                                    <a href="{{ route("admin.roles.index") }}" class="nav-link {{ request()->is("admin/roles") || request()->is("admin/roles/*") ? "active" : "" }}">
                                        <i class="fa-fw nav-icon fas fa-briefcase">

                                        </i>
                                        <p>
                                            {{ trans('cruds.role.title') }}
                                        </p>
                                    </a>
                                </li>
                            @endcan
                            @can('user_access')
                                <li class="nav-item">
                                    <a href="{{ route("admin.users.index") }}" class="nav-link {{ request()->is("admin/users") || request()->is("admin/users/*") ? "active" : "" }}">
                                        <i class="fa-fw nav-icon fas fa-user">

                                        </i>
                                        <p>
                                            {{ trans('cruds.user.title') }}
                                        </p>
                                    </a>
                                </li>
                            @endcan
                            @can('audit_log_access')
                                <li class="nav-item">
                                    <a href="{{ route("admin.audit-logs.index") }}" class="nav-link {{ request()->is("admin/audit-logs") || request()->is("admin/audit-logs/*") ? "active" : "" }}">
                                        <i class="fa-fw nav-icon fas fa-file-alt">

                                        </i>
                                        <p>
                                            {{ trans('cruds.auditLog.title') }}
                                        </p>
                                    </a>
                                </li>
                            @endcan
                            @can('user_alert_access')
                                <li class="nav-item">
                                    <a href="{{ route("admin.user-alerts.index") }}" class="nav-link {{ request()->is("admin/user-alerts") || request()->is("admin/user-alerts/*") ? "active" : "" }}">
                                        <i class="fa-fw nav-icon fas fa-bell">

                                        </i>
                                        <p>
                                            {{ trans('cruds.userAlert.title') }}
                                        </p>
                                    </a>
                                </li>
                            @endcan
                            @can('team_access')
                                <li class="nav-item">
                                    <a href="{{ route("admin.teams.index") }}" class="nav-link {{ request()->is("admin/teams") || request()->is("admin/teams/*") ? "active" : "" }}">
                                        <i class="fa-fw nav-icon fas fa-users">

                                        </i>
                                        <p>
                                            {{ trans('cruds.team.title') }}
                                        </p>
                                    </a>
                                </li>
                            @endcan
                        </ul>
                    </li>
                @endcan
                <li class="nav-item">
                    <a href="{{ route("admin.systemCalendar") }}" class="nav-link {{ request()->is("admin/system-calendar") || request()->is("admin/system-calendar/*") ? "active" : "" }}">
                        <i class="fas fa-fw fa-calendar nav-icon">

                        </i>
                        <p>
                            {{ trans('global.systemCalendar') }}
                        </p>
                    </a>
                </li>
                @if(\Illuminate\Support\Facades\Schema::hasColumn('teams', 'owner_id') && \App\Models\Team::where('owner_id', auth()->user()->id)->exists())
                    <li class="nav-item">
                        <a class="{{ request()->is("admin/team-members") || request()->is("admin/team-members/*") ? "active" : "" }} nav-link" href="{{ route("admin.team-members.index") }}">
                            <i class="fa-fw fa fa-users nav-icon">
                            </i>
                            <p>
                                {{ trans("global.team-members") }}
                            </p>
                        </a>
                    </li>
                @endif
                @if(file_exists(app_path('Http/Controllers/Auth/ChangePasswordController.php')))
                    @can('profile_password_edit')
                        <li class="nav-item">
                            <a class="nav-link {{ request()->is('profile/password') || request()->is('profile/password/*') ? 'active' : '' }}" href="{{ route('profile.password.edit') }}">
                                <i class="fa-fw fas fa-key nav-icon">
                                </i>
                                <p>
                                    {{ trans('global.change_password') }}
                                </p>
                            </a>
                        </li>
                    @endcan
                @endif
                <li class="nav-item">
                    <a href="#" class="nav-link" onclick="event.preventDefault(); document.getElementById('logoutform').submit();">
                        <p>
                            <i class="fas fa-fw fa-sign-out-alt nav-icon">

                            </i>
                            <p>{{ trans('global.logout') }}</p>
                        </p>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>