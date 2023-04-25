<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Title
    |--------------------------------------------------------------------------
    |
    | The default title of your admin panel, this goes into the title tag
    | of your page. You can override it per page with the title section.
    | You can optionally also specify a title prefix and/or postfix.
    |
    */

    'title' => 'Inabay.Net',

    'title_prefix' => '',

    'title_postfix' => '',

    /*
    |--------------------------------------------------------------------------
    | Logo
    |--------------------------------------------------------------------------
    |
    | This logo is displayed at the upper left corner of your admin panel.
    | You can use basic HTML here if you want. The logo has also a mini
    | variant, used for the mini side bar. Make it 3 letters or so
    |
    */

    'logo' => '<div class="text-center"><i class="fas fa-home"></i></div>',

    'logo_mini' => '<b>iBy</b>',

    /*
    |--------------------------------------------------------------------------
    | Skin Color
    |--------------------------------------------------------------------------
    |
    | Choose a skin color for your admin panel. The available skin colors:
    | blue, black, purple, yellow, red, and green. Each skin also has a
    | ligth variant: blue-light, purple-light, purple-light, etc.
    |
    */

    'skin' => 'blue',

    /*
    |--------------------------------------------------------------------------
    | Layout
    |--------------------------------------------------------------------------
    |
    | Choose a layout for your admin panel. The available layout options:
    | null, 'boxed', 'fixed', 'top-nav'. null is the default, top-nav
    | removes the sidebar and places your menu in the top navbar
    |
    */

    // 'layout' => 'top-nav',
    // 'layout' => 'collapsed-sidebar',

    /*
    |--------------------------------------------------------------------------
    | Collapse Sidebar
    |--------------------------------------------------------------------------
    |
    | Here we choose and option to be able to start with a collapsed side
    | bar. To adjust your sidebar layout simply set this  either true
    | this is compatible with layouts except top-nav layout option
    |
    */

    'collapse_sidebar' => false,

    /*
    |--------------------------------------------------------------------------
    | URLs
    |--------------------------------------------------------------------------
    |
    | Register here your dashboard, logout, login and register URLs. The
    | logout URL automatically sends a POST request in Laravel 5.3 or higher.
    | You can set the request to a GET or POST with logout_method.
    | Set register_url to null if you don't want a register link.
    |
    */

    'dashboard_url' => 'home',

    'logout_url' => 'logout',

    'logout_method' => null,

    'login_url' => 'login',

    'register_url' => 'register',


    'enabled_laravel_mix' => false,
    'laravel_mix_css_path' => 'css/app.css',
    'laravel_mix_js_path' => 'js/app.js',


    'menu' => [
        [
            'header'    => 'ADMINISTRASI',
            'can'       => 'admin',
            'url'       => '',
            'text'      => 'Inabay',
        ],
        [

            'text'  => 'Produk',
            'url'   => 'products',
            'icon'  => 'fas fa-box-open',
            'can'   => 'admin',
        ],
        [
            'text'  => 'Hadiah',
            'url'   => 'gifts',
            'icon'  => 'fas fa-gift',
            'can'   => 'admin',
        ],
        [
            'text'  => 'Anggota',
            'url'   => 'members',
            'icon'  => 'fas fa-users',
            'can'   => 'admin',
        ],
        [
            'text'  => 'Transaksi',
            'url'   => 'sales',
            'icon'  => 'fas fa-file-invoice-dollar',
            'can'   => 'office',
        ],
        [
            'text'  => 'Pembayaran',
            'url'   => 'payments',
            'icon'  => 'fas fa-hand-holding-usd',
            'can'   => 'finance'
        ],
        //        [
        //            'text'  => 'Top Up',
        //            'url'   => 'top-ups',
        //            'icon'  => 'fas fa-wallet',
        //            'can'   => 'admin'
        //        ],
        [
            'text'  => 'Kurir',
            'url'   => 'couriers',
            'icon'  => 'fas fa-truck',
            'can'   => 'admin',
        ],
        [
            'text'  => 'Supplier',
            'url'   => 'suppliers',
            'icon'  => 'fas fa-truck-loading',
            'can'   => 'admin'
        ],
        [
            'text'  => 'Admin',
            'url'   => 'users',
            'icon'  => 'fas fa-user',
            'can'   => 'superadmin'
        ],
        [
            'text'  => 'Laporan',
            'url'   => 'reports',
            'icon'  => 'fas fa-chart-pie',
            'can'   => 'admin',
        ],
        [
            'header'    => 'AREA ANGGOTA',
            'can'       => 'member',
            'url'       => '',
            'text'      => 'Area Anggota',
        ],
        [
            'text'  => 'Informasi dan Promosi',
            'url'   => 'member/products/open-po',
            'icon'  => 'fas fa-tasks',
            'can'   => 'member'
        ],
        [
            'text'  => 'Produk Baru',
            'url'   => 'member/products/new',
            'icon'  => 'fas fa-box',
            'can'   => 'member'
        ],
        [
            'text'  => 'Restok Produk',
            'url'   => 'member/products/restock',
            'icon'  => 'fas fa-boxes',
            'can'   => 'member'
        ],
        [
            'text'  => 'Stok Habis',
            'url'   => 'member/products/empty',
            'icon'  => 'fas fa-ban',
            'can'   => 'member'
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Menu Filters
    |--------------------------------------------------------------------------
    |
    | Here we can modify the menu filters of the admin panel.
    |
    | For detailed instructions you can look the menu filters section here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Menu-Configuration
    |
    */

    'filters' => [
        JeroenNoten\LaravelAdminLte\Menu\Filters\GateFilter::class,
        JeroenNoten\LaravelAdminLte\Menu\Filters\HrefFilter::class,
        JeroenNoten\LaravelAdminLte\Menu\Filters\SearchFilter::class,
        JeroenNoten\LaravelAdminLte\Menu\Filters\ActiveFilter::class,
        JeroenNoten\LaravelAdminLte\Menu\Filters\ClassesFilter::class,
        JeroenNoten\LaravelAdminLte\Menu\Filters\LangFilter::class,
        JeroenNoten\LaravelAdminLte\Menu\Filters\DataFilter::class,
    ],
    // 'filters' => [
    //     JeroenNoten\LaravelAdminLte\Menu\Filters\HrefFilter::class,
    //     JeroenNoten\LaravelAdminLte\Menu\Filters\ActiveFilter::class,
    //     // JeroenNoten\LaravelAdminLte\Menu\Filters\SubmenuFilter::class,
    //     JeroenNoten\LaravelAdminLte\Menu\Filters\ClassesFilter::class,
    //     JeroenNoten\LaravelAdminLte\Menu\Filters\GateFilter::class,
    // ],


    /*
    |--------------------------------------------------------------------------
    | Plugins Initialization
    |--------------------------------------------------------------------------
    |
    | Here we can modify the plugins used inside the admin panel.
    |
    | For detailed instructions you can look the plugins section here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Plugins-Configuration
    |
    */

    'plugins' => [
        'Datatables' => [
            'active' => true,
            'files' => [
                [
                    'type' => 'js',
                    'asset' => false,
                    'location' => '//cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js',
                ],
                [
                    'type' => 'js',
                    'asset' => false,
                    'location' => '//cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js',
                ],
                [
                    'type' => 'css',
                    'asset' => false,
                    'location' => '//cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css',
                ],
            ],
        ],
        'Select2' => [
            'active' => true,
            'files' => [
                [
                    'type' => 'js',
                    'asset' => false,
                    'location' => '//cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js',
                ],
                [
                    'type' => 'css',
                    'asset' => false,
                    'location' => '//cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.css',
                ],
            ],
        ],
        'Chartjs' => [
            'active' => true,
            'files' => [
                [
                    'type' => 'js',
                    'asset' => false,
                    'location' => '//cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.0/Chart.bundle.min.js',
                ],
            ],
        ],
        'Sweetalert2' => [
            'active' => false,
            'files' => [
                [
                    'type' => 'js',
                    'asset' => false,
                    'location' => '//cdn.jsdelivr.net/npm/sweetalert2@8',
                ],
            ],
        ],
        'Pace' => [
            'active' => false,
            'files' => [
                [
                    'type' => 'css',
                    'asset' => false,
                    'location' => '//cdnjs.cloudflare.com/ajax/libs/pace/1.0.2/themes/blue/pace-theme-center-radar.min.css',
                ],
                [
                    'type' => 'js',
                    'asset' => false,
                    'location' => '//cdnjs.cloudflare.com/ajax/libs/pace/1.0.2/pace.min.js',
                ],
            ],
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | IFrame
    |--------------------------------------------------------------------------
    |
    | Here we change the IFrame mode configuration. Note these changes will
    | only apply to the view that extends and enable the IFrame mode.
    |
    | For detailed instructions you can look the iframe mode section here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/IFrame-Mode-Configuration
    |
    */

    'iframe' => [
        'default_tab' => [
            'url' => null,
            'title' => null,
        ],
        'buttons' => [
            'close' => true,
            'close_all' => true,
            'close_all_other' => true,
            'scroll_left' => true,
            'scroll_right' => true,
            'fullscreen' => true,
        ],
        'options' => [
            'loading_screen' => 1000,
            'auto_show_new_tab' => true,
            'use_navbar_items' => true,
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Livewire
    |--------------------------------------------------------------------------
    |
    | Here we can enable the Livewire support.
    |
    | For detailed instructions you can look the livewire here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Other-Configuration
    |
    */

    'livewire' => false,
];