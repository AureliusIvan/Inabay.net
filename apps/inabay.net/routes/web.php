<?php
// ini yang versi laravel 9

use App\Http\Controllers\CourierController;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\GiftController;
use App\Http\Controllers\MemberProductController;
use App\Http\Controllers\MemberShoppingCartController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\PrintController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\PurchasingCartController;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\SalesController;
use App\Http\Controllers\SellerStockController;
use App\Http\Controllers\SupplierController;
use App\Http\Controllers\TopUpController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::post('/login', [UserController::class, 'login'])->name('login');
Auth::routes();
Route::get('/', function () {
    return redirect('/login');
    //    return "Website sedang dalam perbaikan. Silahkan mencoba beberapa saat lagi.";
});

//Route::get('/login', function(){
////    return redirect('/login');
//    return "Website sedang dalam perbaikan. Silahkan mencoba beberapa saat lagi.";
//});
//Route::get('/home', function(){
////    return redirect('/login');
//    return "Website sedang dalam perbaikan. Silahkan mencoba beberapa saat lagi.";
//});
Route::get('/home', MemberController::class . '@index')->name('home');

## LOGIN SEMENTARA TANPA HARUS DITERIMA ADMIN ##
Route::get('/home/user', function () {
    return view('home');
})->middleware('auth');


## GIFT ##
Route::get('/gifts/search', ['middleware' => 'auth', 'uses' => ProductController::class . '@search']);

Route::get('/gifts', ['middleware' => 'auth', 'uses' => GiftController::class . '@index']);
Route::get('/gifts/new', ['middleware' => 'auth', 'uses' => GiftController::class . '@create']);
Route::post('/gifts/new', ['middleware' => 'auth', 'uses' => GiftController::class . '@store']);
Route::get('/gifts/{id}', ['middleware' => 'auth', 'uses' => GiftController::class . '@show']);
Route::get('/gifts/edit/{id}', ['middleware' => 'auth', 'uses' =>  GiftController::class . '@edit']);
Route::post('/gifts/edit/{id}', ['middleware' => 'auth', 'uses' => GiftController::class . '@update']);
Route::delete('/gifts/delete/{id}', ['middleware' => 'auth', 'uses' => GiftController::class . '@destroy']);

## PRODUCTS ##
Route::get('/products/search', ['middleware' => 'auth', 'uses' => ProductController::class . '@search']);
Route::get('/products/sale', ['middleware' => 'auth', 'uses' =>  ProductController::class . '@index_sale']);
Route::get('/products/open-po', ['middleware' => 'auth', 'uses' =>  ProductController::class . '@index_open_po']);
Route::get('/products/stock-opname', ['middleware' => 'auth', 'uses' =>  ProductController::class . '@index_stock']);
Route::get('/products/stock-opname-page', ['middleware' => 'auth', 'uses' =>  ProductController::class . '@index_stock_page']);
Route::get('/products/stock-opname/search', ['middleware' => 'auth', 'uses' =>  ProductController::class . '@index_stock_search']);
Route::post('/products/stock-opname/update', ['middleware' => 'auth', 'uses' =>  ProductController::class . '@stock_update']);
Route::get('/products/stock-seller', ['middleware' => 'auth', 'uses' =>  ProductController::class . '@index_stock_seller']);

Route::post('/seller-stocks/update/{id}', ['middleware' => 'auth', 'uses' => SellerStockController::class . '@update']);
Route::post('/seller-stocks/new', ['middleware' => 'auth', 'uses' => SellerStockController::class . '@store']);
Route::get('/user/seller-stocks', ['middleware' => 'auth', 'uses' => SellerStockController::class . '@index_user']);

Route::get('/products', ['middleware' => 'auth', 'uses' => ProductController::class . '@index']);
Route::get('/products/new', ['middleware' => 'auth', 'uses' => ProductController::class . '@create']);
Route::get('/products/copy/{id}', ['middleware' => 'auth', 'uses' => ProductController::class . '@create_copy']);
Route::post('/products/new', ['middleware' => 'auth', 'uses' => ProductController::class . '@store']);
Route::get('/products/{id}', ['middleware' => 'auth', 'uses' => ProductController::class . '@show']);
Route::get('/products/edit/{id}', ['middleware' => 'auth', 'uses' => ProductController::class . '@edit']);
Route::post('/products/edit/{id}', ['middleware' => 'auth', 'uses' => ProductController::class . '@update']);
Route::delete('/products/delete/{id}', ['middleware' => 'auth', 'uses' => ProductController::class . '@destroy']);

Route::post('/products/get_product_price', ['middleware' => 'auth', 'uses' => ProductController::class . '@get_product_price']);

//Route::post('/products/search', ['middleware' => 'auth', 'uses' => 'ProductController@search']);


## USERS ##
Route::get('/members', ['middleware' => 'auth', 'uses' => MemberController::class . '@index']);
Route::get('/members/new', ['middleware' => 'auth', 'uses' => MemberController::class . '@create']);
Route::post('/members/new', ['middleware' => 'auth', 'uses' => MemberController::class . '@store']);
Route::get('/members/{id}', ['middleware' => 'auth', 'uses' => MemberController::class . '@show']);
Route::get('/members/edit/{id}', ['middleware' => 'auth', 'uses' => MemberController::class . '@edit']);
Route::post('/members/edit/{id}', ['middleware' => 'auth', 'uses' => MemberController::class . '@update']);
Route::delete('/members/delete/{id}', ['middleware' => 'auth', 'uses' => MemberController::class . '@destroy']);
Route::get('/members/', ['middleware' => 'auth', 'uses' => UserController::class . '@searchUser'])->name('member.search');

Route::get('/users', ['middleware' => 'auth', 'uses' =>  UserController::class . '@index']);
Route::get('/users/new', ['middleware' => 'auth', 'uses' => UserController::class . '@create']);
Route::post('/users/new', ['middleware' => 'auth', 'uses' => UserController::class . '@store']);
Route::get('/users/{id}', ['middleware' => 'auth', 'uses' => UserController::class . '@show']);
Route::get('/users/edit/{id}', ['middleware' => 'auth', 'uses' => UserController::class . '@edit']);
Route::post('/users/edit/{id}', ['middleware' => 'auth', 'uses' => UserController::class . '@update']);
Route::delete('/users/delete/{id}', ['middleware' => 'auth', 'uses' => UserController::class . '@destroy']);

Route::post('/users/get_user_info', ['middleware' => 'auth', 'uses' => UserController::class . '@get_user_info']);

Route::get('/user', ['middleware' => 'auth', 'uses' => UserController::class . '@my_account_show']);
Route::get('/user/stock', ['middleware' => 'auth', 'uses' => UserController::class .  '@user_stock']);

## COURIER ##
Route::get('/couriers', ['middleware' => 'auth', 'uses' => CourierController::class . '@index']);
Route::get('/couriers/new', ['middleware' => 'auth', 'uses' => CourierController::class . '@create']);
Route::post('/couriers/new', ['middleware' => 'auth', 'uses' => CourierController::class . '@store']);
//Route::get('/couriers/{id}', ['middleware' => 'auth', 'uses' => CourierController::class . '@show']);
Route::get('/couriers/edit/{id}', ['middleware' => 'auth', 'uses' => CourierController::class . '@edit']);
Route::post('/couriers/edit/{id}', ['middleware' => 'auth', 'uses' => CourierController::class . '@update']);
Route::delete('/couriers/delete/{id}', ['middleware' => 'auth', 'uses' => CourierController::class . '@destroy']);

Route::get('/couriers/deactivate/{id}', ['middleware' => 'auth', 'uses' => CourierController::class .  '@deactivate']);
Route::get('/couriers/activate/{id}', ['middleware' => 'auth', 'uses' => CourierController::class . '@activate']);

## SUPPLIER ##
Route::get('/suppliers', ['middleware' => 'auth', 'uses' => SupplierController::class . '@index']);
Route::get('/suppliers/new', ['middleware' => 'auth', 'uses' => SupplierController::class . '@create']);
Route::post('/suppliers/new', ['middleware' => 'auth', 'uses' => SupplierController::class . '@store']);
Route::get('/suppliers/edit/{id}', ['middleware' => 'auth', 'uses' => SupplierController::class . '@edit']);
Route::post('/suppliers/edit/{id}', ['middleware' => 'auth', 'uses' => SupplierController::class . '@update']);
Route::delete('/suppliers/delete/{id}', ['middleware' => 'auth', 'uses' => SupplierController::class . '@destroy']);

## REPORTS ##
Route::get('/reports', ['middleware' => 'auth', 'uses' => ReportController::class . '@index']);
Route::get('/reports/sales', ['middleware' => 'auth', 'uses' => ReportController::class . '@sales']);
Route::post('/reports/sales', ['middleware' => 'auth', 'uses' => ReportController::class . '@monthly_sales']);
Route::get('/reports/sales/pdf/{year}/{month}', ['middleware' => 'auth', 'uses' => ReportController::class . '@sales_pdf']);

## MEMBER AREA ##
## PRODUCTS ##
Route::get('/member/gifts', ['middleware' => 'auth', 'uses' =>  MemberProductController::class . '@gifts']);
Route::get('/member/sale', ['middleware' => 'auth', 'uses' => MemberProductController::class . '@sale']);
Route::get('/member/top-up', ['middleware' => 'auth', 'uses' => TopUpController::class . '@top_up']);

//Route::get('/member/products/{type}', ['middleware' => 'auth', 'uses' => 'MemberProductController@product_list']);
Route::get('/member/products/new', ['middleware' => 'auth', 'uses' => MemberProductController::class . '@new_products']);
Route::get('/member/products/restock', ['middleware' => 'auth', 'uses' => MemberProductController::class . '@restock_products']);
Route::get('/member/products/empty', ['middleware' => 'auth', 'uses' => MemberProductController::class . '@empty_stock_products']);
Route::get('/member/products/open-po', ['middleware' => 'auth', 'uses' => MemberProductController::class . '@open_po']);

Route::get('/member/products/search', ['middleware' => 'auth', 'uses' => MemberProductController::class . '@search']);

Route::get('/member/products', ['middleware' => 'auth', 'uses' => MemberProductController::class . '@index']);
Route::get('/member/products/{id}', ['middleware' => 'auth', 'uses' => MemberProductController::class . '@show']);
Route::post('/member/products/add_to_cart', ['middleware' => 'auth', 'uses' => MemberProductController::class . '@addToCart']);

## SHOPPING CART ##
Route::get('/member/cart', ['middleware' => 'auth', 'uses' => MemberShoppingCartController::class . '@index']);
Route::delete('/member/cart/delete/{id}', ['middleware' => 'auth', 'uses' => MemberShoppingCartController::class . '@destroy']);
Route::post('/member/cart/update/{id}', ['middleware' => 'auth', 'uses' => MemberShoppingCartController::class . '@update']);

## SHOPPING CART PO ##
Route::get('/member/cart-po', ['middleware' => 'auth', 'uses' => MemberShoppingCartController::class . '@index_po']);
Route::delete('/member/cart-po/delete/{id}', ['middleware' => 'auth', 'uses' => MemberShoppingCartController::class . '@destroy_po']);
Route::post('/member/cart-po/update/{id}', ['middleware' => 'auth', 'uses' => MemberShoppingCartController::class . '@update_po']);


## PURCHASING CART ADMIN ##
Route::get('/admin/cart', ['middleware' => 'auth', 'uses' => PurchasingCartController::class . '@index']);
Route::post('/admin/cart/add', ['middleware' => 'auth', 'uses' => PurchasingCartController::class . '@ajax_add_product']);

## SALES ##
Route::post('/member/sales/new', ['middleware' => 'auth', 'uses' => SalesController::class . '@store']);
Route::get('/member/sales', ['middleware' => 'auth', 'uses' => SalesController::class . '@index_member']);
Route::get('/member/sales/{id}', ['middleware' => 'auth', 'uses' => SalesController::class . '@show_member']);

Route::post('/member/sales/new-po', ['middleware' => 'auth', 'uses' => SalesController::class . '@store_po']);

Route::get('/sales/cancel', ['middleware' => 'auth', 'uses' => SalesController::class . '@index_cancel']);
Route::get('/sales/all', ['middleware' => 'auth', 'uses' => SalesController::class . '@index_all']);
//Route::get('/sales/cancel/search', ['middleware' => 'auth', 'uses' => 'SalesController@search_cancel']);
//Route::get('/sales/all/search', ['middleware' => 'auth', 'uses' => 'SalesController@search_all']);

Route::post('/sales/status/update', ['middleware' => 'auth', 'uses' => SalesController::class . '@status_update']);

Route::get('/sales', ['middleware' => 'auth', 'uses' => SalesController::class . '@index']);
Route::get('/sales/new', ['middleware' => 'auth', 'uses' => SalesController::class . '@create']);
Route::post('/sales/new', ['middleware' => 'auth', 'uses' => SalesController::class . '@store']);
Route::get('/sales/search', ['middleware' => 'auth', 'uses' => SalesController::class . '@search']);
Route::get('/sales/{mode}/search', ['middleware' => 'auth', 'uses' => SalesController::class . '@search']);
Route::post('/sales/edit/{id}', ['middleware' => 'auth', 'uses' => SalesController::class . '@update']);
Route::get('/sales/{id}', ['middleware' => 'auth', 'uses' => SalesController::class . '@show']);
Route::post('/sales/status/{id}', ['middleware' => 'auth', 'uses' => SalesController::class . '@updateStatus']);
Route::get('/sales/label/{id}', ['middleware' => 'auth', 'uses' => SalesController::class . '@printLabel']);
Route::get('/sales/print/invoice/{id}', ['middleware' => 'auth', 'uses' => SalesController::class . '@printInvoice']);

## PAYMENTS ##
Route::get('/payments', ['middleware' => 'auth', 'uses' => PaymentController::class . '@index']);
Route::get('/payments/paid', ['middleware' => 'auth', 'uses' => PaymentController::class . '@index_paid']);
Route::get('/payments/unpaid', ['middleware' => 'auth', 'uses' => PaymentController::class . '@index_unpaid']);
Route::post('/payments/status/update', ['middleware' => 'auth', 'uses' => PaymentController::class . '@status_update']);
Route::get('/payments/search', ['middleware' => 'auth', 'uses' => PaymentController::class . '@search']);
Route::get('/payments/paid/search', ['middleware' => 'auth', 'uses' => PaymentController::class . '@search_paid']);
Route::get('/payments/unpaid/search', ['middleware' => 'auth', 'uses' => PaymentController::class . '@search_unpaid']);

## PRINT ##
Route::get('/prints/invoice', ['middleware' => 'auth', 'uses' => PrintController::class . '@bulk_invoice']);
Route::get('/prints/deliverylabel', ['middleware' => 'auth', 'uses' => PrintController::class . '@bulk_delivery_label']);

## TOP-UP ##
Route::get('/top-ups', ['middleware' => 'auth', 'uses' => TopUpController::class . '@index']);
Route::post('/top-ups/status/update', ['middleware' => 'auth', 'uses' => TopUpController::class . '@status_update']);
Route::post('/top-ups/new', ['middleware' => 'auth', 'uses' => TopUpController::class . '@store_member_top_up']);

## TEST ##
//Route::get('/test', ['middleware' => 'auth', 'uses' => 'TestController@index']);
//Route::post('/test', ['middleware' => 'auth', 'uses' => 'MemberProductController@addToCart']);
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
