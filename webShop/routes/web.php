<?php

use Illuminate\Support\Facades\Route;

//View page
Route::group(['prefix' => '/admin'], function() {
    Route::get('/', 'ViewController@getIndex')->name('Index')->middleware('admin');
    Route::get('guarantee', 'ViewController@getBaoHanh')->name('BaoHanh')->middleware('admin');
    Route::get('search-product', 'ViewController@getSearchProduct')->name('SearchProduct')->middleware('admin');
    // Route::get('address', 'ViewController@getAddress')->name('Address');
    Route::get('widgets', 'ViewController@getWidgets')->name('Widgets')->middleware('admin');
    Route::get('gallery', 'ViewController@getGallery')->name('Gallery')->middleware('admin');
    Route::get('compose', 'ViewController@getCompose')->name('Compose')->middleware('admin');
    Route::get('mail-box', 'ViewController@getMailBox')->name('MaiBox')->middleware('admin');
    Route::get('sent-messager', 'ViewController@getSentMessager')->name('SentMessager')->middleware('admin');
    Route::get('read-mail/{slug}', 'ViewController@getReadMail')->name('ReadMail')->middleware('admin');
    Route::get('about-us', 'ViewController@getAboutUs')->name('AboutUs')->middleware('admin');
    Route::get('delete-contact-mail/{slug}', 'ViewController@getDeleteContactMail')->name('DeleteContactMail')->middleware('admin');
    Route::get('read-mail-contact/{id}', 'ViewController@getAdmRepUserContact')->name('AdmRepUserContact')->middleware('admin');
    //UI View
    Route::group(['prefix' => 'ui'], function() {
        Route::get('buttons', 'ViewController@getButtons')->name('Buttons')->middleware('admin');
        Route::get('general', 'ViewController@getGeneral')->name('General')->middleware('admin');
        Route::get('icons', 'ViewController@getIcons')->name('Icons')->middleware('admin');
        Route::get('navbar', 'ViewController@getNavbar')->name('Navbar')->middleware('admin');
        Route::get('Ribbons', 'ViewController@getRibbons')->name('Ribbons')->middleware('admin');
        Route::get('timeline', 'ViewController@getTimeline')->name('Timeline')->middleware('admin');
    });
    //Form View
    Route::group(['prefix' => 'form'], function() {
        Route::get('advanced', 'ViewController@getAdvanced')->name('Advanced')->middleware('admin');
        Route::get('validation', 'ViewController@getValidation')->name('Validation')->middleware('admin');
    });
});

//Xử lý form đăng nhập đăng xuất
Route::group(['prefix' => '/admin'], function() {
    Route::get('logout', 'LoginController@getLogout')->name('Logout');
    Route::group(['prefix' => '/'], function() {
        Route::get('new-acction', 'LoginController@getNewAcction')->name('NewAcction');
        Route::post('new-acction', 'LoginController@postNewAcction')->name('NewAcctions');
    });
    Route::group(['prefix' => '/'], function() {
        Route::get('login', 'LoginController@getLogin')->name('Login');
        Route::post('login', 'LoginController@postLogin')->name('postLogin');
    });
});

//Quản lý sản phẩm
Route::group(['prefix' => '/admin'], function() {
    Route::get('manager', 'ViewController@getManager')->name('Manager')->middleware('admin');
    Route::get('manage/{id}', 'ViewController@getManagerID')->name('ManagerID')->middleware('admin');
    Route::get('compony/{id}', 'ViewController@getCompony')->name('Compony')->middleware('admin');
    Route::get('contact/{id}', 'ViewController@getContact')->name('Contact')->middleware('admin');
    Route::group(['prefix' => 'product'], function() {
        Route::get('edit-product/{id}/{slug}', 'TableController@getEditProduct')->name('EditProduct')->middleware('admin');
        Route::post('edit-product/{slug}/{id}', 'TableController@postEditProduct')->name('PostEditProduct')->middleware('admin');
        Route::get('delete-product/{id}', 'TableController@getDeleteProduct')->name('DeleteProduct')->middleware('admin');
    });
    Route::group(['prefix' => 'product'], function() {
        Route::get('add-product/{id}', 'TableController@getAddProduct')->name('AddProduct')->middleware('admin');
        Route::post('add-product/{id}', 'TableController@postAddProduct')->name('PostAddProduct')->middleware('admin');
    });
});

Route::group(['prefix' => '/admin'], function() {
    Route::get('categories/{id}', 'ItemController@getItem')->name('Categories')->middleware('admin');
    Route::post('categories/{id}', 'ItemController@postItem')->name('PostCategories')->middleware('admin');
    Route::post('company', 'ItemController@postItems')->name('PostCompany')->middleware('admin');
    Route::post('edit-company/{id}', 'ItemController@postEditCompany')->name('EditCompany')->middleware('admin');
    Route::get('delete-categories/{id}', 'ItemController@getDeleteCategories')->name('DeleteCategories')->middleware('admin');
    Route::post('edit-categories/{id}', 'ItemController@postEditcategories')->name('EditCategories')->middleware('admin');

    Route::group(['prefix' => 'item'], function() {
        Route::get('edit-item/{id}', 'ItemController@getEditItem')->name('EditItem')->middleware('admin');
        Route::post('edit-item/{id}', 'ItemController@postEditItem')->name('PostItem')->middleware('admin');
        Route::get('delete-item/{id}', 'ItemController@getDeleteItem')->name('DeleteItem')->middleware('admin');
    });
    Route::group(['prefix' => 'customer'], function() {
        Route::get('list-customer/{id}', 'CustomerController@getListCustomer')->name('ListCustomer')->middleware('admin');
        Route::get('delete-customer/{id}', 'CustomerController@getDeleteCustomer')->name('DeleteCustomer');
        Route::get('list-customer', 'CustomerController@getFeedBadNoneUser')->name('FeedBadNoneUser')->middleware('admin');
        Route::get('list-customer/feed-bad/{id}', 'CustomerController@getFeedBad')->name('FeedBad')->middleware('admin');
        Route::post('list-customer/feed-bad/{id}', 'CustomerController@postFeedBad')->name('AdmFeedBad')->middleware('admin');
        Route::post('list-customer/feed-bad-new', 'CustomerController@postFeedBadAdmNew')->name('AdmFeedBadNew')->middleware('admin');
    });
    Route::group(['prefix' => 'customer'], function() {
        Route::get('list-cart', 'ItemController@getListCart')->name('InformationCart')->middleware('admin');
        Route::get('delete-list-cart/{id}', 'ItemController@getDeleteListCart')->name('DeleteListCart')->middleware('admin');
    });
    Route::group(['prefix' => 'post'], function() {
        Route::get('add-post/{id}', 'PostController@getAddPost')->name('AddPost')->middleware('admin');
        Route::post('add-post/{id}', 'PostController@postAddPost')->name('PostAddPost')->middleware('admin');
        Route::get('list-post/{id}', 'PostController@getListPost')->name('ListPost')->middleware('admin');
        Route::get('delete-post/{id}', 'PostController@getDeletePost')->name('DeletePost')->middleware('admin');
        Route::get('edit-post/{id}', 'PostController@getEditPost')->name('EditPost')->middleware('admin');
        Route::post('edit-post/{id}', 'PostController@postEditPost')->name('PostEditPost')->middleware('admin');
    });
});

Route::group(['prefix' => '/', 'namespace' => 'view'], function() {
    Route::get('/', 'ViewsController@getViews')->name('Views');
    Route::group(['prefix' => '/'], function() {
        Route::get('information/{id}/{slug}/{id_pr}', 'InformationController@getInformation')->name('Information');
        Route::group(['prefix' => 'product'], function() {
            Route::get('add-to-cart/{id_categories}/{id}/{slug}', 'InformationController@getCart')->name('Cart');
            Route::post('xac-nhan-don-hang/{id_categories}/{id}/{slug}', 'InformationController@postXacNhanDonHang')->name('XacNhanDonHang');
            Route::get('cart-success/{id_cart}', 'InformationController@getCartSuccess')->name('CartSuccess');
            Route::get('search-cart', 'InformationController@getSearchCart')->name('SearchCart');
            Route::post('search-cart', 'InformationController@postSearchCart')->name('CheckIdOrder');
        });
    });
    Route::group(['prefix' => '/'], function() {
        Route::get('Login-user', 'LoginUserController@getLoginUser')->name('LoginUser');
        Route::post('Login-user', 'LoginUserController@postLoginUser')->name('PostLoginUser');
        Route::get('create-user', 'LoginUserController@getCreateUser')->name('CreateUser');
        Route::post('create-user', 'LoginUserController@postCreateUser')->name('PostCreateUser');
        Route::get('log-out', 'LoginUserController@getLogout')->name('logout');
    });
    //Danh mục sản phẩm
    Route::group(['prefix' => '/categories'], function() {
        Route::get('list-product/{id}', 'ViewsController@getListProduct')->name('ListProduct');
        // Route::post('search-product', 'InformationController@postSearchProduct')->name('SearchProduct');
    });
    Route::group(['prefix' => '/'], function() {
        Route::get('contact', 'ViewsController@getContact')->name('ViewContact');
        Route::post('contact', 'ViewsController@postContact')->name('postContact');
    });
    Route::group(['prefix' => '/'], function() {
        Route::get('add-to-carts', 'AddToCartsController@getViewAddToCarts')->name('ViewAddToCarts');
        Route::get('add-to-carts/{id_categories}/{id}/{slug}', 'AddToCartsController@getAddToCarts')->name('AddToCarts');
        Route::get('delete-cart/{id}', 'AddToCartsController@getDeleteCart')->name('DeleteCart');
        Route::get('update-cart/{rowId}/{qty}', 'AddToCartsController@getUpdateCart')->name('UpdateCart');
    });
    Route::group(['prefix' => '/'], function() {
        Route::get('compare-none', 'InformationController@getCompareNone')->name('CompareNone');
        Route::get('compare/{id_compare_product}/{id_product_compare}/{slug}/{slug_product_compare}', 'InformationController@getCompare')->name('Compare');
        Route::get('compare-one/{id}/{slug}', 'InformationController@getCompareOne')->name('CompareOne');
        Route::get('compare-search', 'InformationController@getCompareSearch')->name('CompareSearch');
    });
    Route::group(['prefix' => '/'], function() {
        Route::get('tin-tuc', 'PostController@getIndexPost')->name('IndexPost');
        Route::get('post/{id}', 'PostController@getPost')->name('Post');
    });
});














