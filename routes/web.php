<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


// image retriver
/*Route::get('img', function () {
    $path = urldecode($_GET['path']);
    $file = Storage::get($path);
    $type = mime_content_type(storage_path()."/app/".$path);
    $response = Response::make($file, 200);
    $response->header("Content-Type", $type);
    return $response;
})->name('img');*/
// MS routes

//Pdf download
Route::get('/download/price-list', function (){
    $file = public_path()."/price-list.pdf";

    $headers = array(
        'Content-Type: application/pdf',
    );

    return Response::download($file, "Price List.pdf", $headers);
});
Route::get('/download/tools', function (){
    $file = public_path()."/tools.pdf";

    $headers = array(
        'Content-Type: application/pdf',
    );

    return Response::download($file, "Tool List.pdf", $headers);
});

/*=============Public routes========================*/
Route::namespace('App\Http\Controllers')->group(function () {


    //admin route
    Route::match(['get','post'],'/admin','AdminController@admin_login')->name('admin_login');
    Route::get('/admin/trz', 'AdminController@dashboard');


    Route::group(['middleware' => ['auth']],function(){


        Route::get('/admin/settings', 'AdminController@settings');
        Route::get('/admin/check-pwd', 'AdminController@chkPassword');
        Route::match(['get', 'post'], '/admin/update-pwd', 'AdminController@updatePassword');

    });



        Route::get('/logout', 'AdminController@logout');


/*    Auth::routes();

    Route::get('/home', 'HomeController@index')->name('home');*/

    //route locale
    Route::get('locale/{locale}', function ($locale){
        Session::put('locale',$locale);
        return redirect()->back();
    });

    Route::post('/text_mistake','MistakeController@mistake')->name('mistake');

    // home
    Route::get("/", "FrontendController@home")->name("main");

    // news
    Route::get("/news", "FrontendController@news")->name("news");

    // State Symbols
    Route::get("/state-symbols", "FrontendController@state_symbols")->name("state_symbols");


    // about us
    Route::get("/about-company", "FrontendController@about_company")->name("about-company");

    // manufactures
    Route::get("/factories", "FrontendController@factory")->name("factory");

    //list of manufactures
    Route::get("/factories/factory1", "FrontendController@factory1")->name("factory1");
    Route::get("/factories/factory2", "FrontendController@factory2")->name("factory2");
    Route::get("/factories/factory3", "FrontendController@factory3")->name("factory3");
    Route::get("/factories/factory4", "FrontendController@factory4")->name("factory4");
    Route::get("/factories/factory5", "FrontendController@factory5")->name("factory5");
    Route::get("/factories/factory6", "FrontendController@factory6")->name("factory6");
    Route::get("/factories/factory7", "FrontendController@factory7")->name("factory7");
    Route::get("/factories/factory8", "FrontendController@factory8")->name("factory8");
    Route::get("/factories/factory9", "FrontendController@factory9")->name("factory9");


    //list of prof_commities
    Route::get("/prof_commity/fit","FrontendController@fit")->name("fit");
    Route::get("/prof_commity/market","FrontendController@market")->name("market");
    Route::get("/prof_commity/museum","FrontendController@museum")->name("museum");
    Route::get("/prof_commity/medicine","FrontendController@medicine")->name("medicine");
    Route::get("/prof_commity/kitchen","FrontendController@kitchen")->name("kitchen");

    //list of structures
    Route::get('/structures/structure1','FrontendController@structure1')->name('structure1');
    Route::get('/structures/structure2','FrontendController@structure2')->name('structure2');
    Route::get('/structures/structure3','FrontendController@structure3')->name('structure3');
    Route::get('/structures/structure4','FrontendController@structure4')->name('structure4');
    Route::get('/structures/structure5','FrontendController@structure5')->name('structure5');
    Route::get('/structures/structure6','FrontendController@structure6')->name('structure6');
    Route::get('/structures/structure7','FrontendController@structure7')->name('structure7');
    Route::get('/structures/structure8','FrontendController@structure8')->name('structure8');
    Route::get('/structures/structure9','FrontendController@structure9')->name('structure9');
    Route::get('/structures/structure10','FrontendController@structure10')->name('structure10');
    Route::get('/structures/structure11','FrontendController@structure11')->name('structure11');

    // one manufacture
   /* Route::get("/manufacture/", "FrontendController@onemanuf")->name("onemanuf");*/

    // one manufacture gallery
    Route::get("/manufgallery/", "FrontendController@manufgallery")->name("manufgallery");

    // modernization
    Route::get("/modern", "FrontendController@modern")->name("modern");

    // modernization gallery
    Route::get("/modern/gallery", "FrontendController@modern_gallery")->name("modern_gallery");
    // modernization tem_gallery
    Route::get("/modern/tem_gallery", "FrontendController@tem_gallery")->name("tem_gallery");

    // structure of factory
    Route::get("/structures", "FrontendController@structure")->name("structures");

    // tenders
    Route::get("/tender", "FrontendController@tender")->name("tender");

    // komitets
    Route::get("/commities",'FrontendController@commity')->name('commities');

    // prof_komitet
    Route::get("/commities/prof_commity", 'FrontendController@prof_commity')->name("prof_commity");

    // soyuz molodeji
    Route::get("/commities/union-teens", 'FrontendController@union_teens')->name("union_teens");

    // burchimullo
    Route::get("/commities/burchimullo",'FrontendController@burchimullo')->name("burchimullo");

    // pricez
    Route::get("/prices", "FrontendController@prices")->name("price");
    // open_source
    Route::get("/open-source", "FrontendController@open_source")->name("open_source");
    // str
    Route::get("/str", "FrontendController@str")->name("str");


    // one history
    Route::get("/history/{id}", "FrontendController@history")->name("history");

    // historical_gallery
    Route::get("/about-company/historical_gallery", "FrontendController@his_gallery")->name("his_gallery");

    //MS
    /* Route::get('/komitets','FrontendController@komitets')->name('komitets');*/
    Route::get('/page-pres','FrontendController@page_pres')->name('page_pres');
    Route::get('/yubiley','FrontendController@yubiley')->name('yubiley');
    Route::get('/sertifikat','FrontendController@sertifikat')->name('sertifikat');
    Route::get('/send-message','SendMailController@send_message')->name('send_message');
    Route::post('/send-message/send','SendMailController@send');

    //about-company lmz and amz
    Route::get('/about-company/amz','FrontendController@amz')->name('amz');
    Route::get('/about-company/lmz','FrontendController@lmz')->name('lmz');


    //about -> years
    Route::get('/about-company/years1','FrontendController@year1')->name('year1');
    Route::get('/about-company/years2','FrontendController@year2')->name('year2');
    Route::get('/about-company/years3','FrontendController@year3')->name('year3');
    Route::get('/about-company/years4','FrontendController@year4')->name('year4');
    Route::get('/about-company/years5','FrontendController@year5')->name('year5');
    Route::get('/about-company/years6','FrontendController@year6')->name('year6');
    Route::get('/about-company/years7','FrontendController@year7')->name('year7');
    Route::get('/about-company/years8','FrontendController@year8')->name('year8');
    Route::get('/about-company/years9','FrontendController@year9')->name('year9');
    Route::get('/about-company/years10','FrontendController@year10')->name('year10');
    Route::get('/about-company/years11','FrontendController@year11')->name('year11');
    Route::get('/about-company/years12','FrontendController@year12')->name('year12');
    Route::get('/about-company/years13','FrontendController@year13')->name('year13');








    //News Routes
    Route::match(['post','get'],'/admin/add-news','NewsController@addNews');
    Route::match(['get','post'],'/admin/edit-news/{id}','NewsController@editNews');
    Route::get('/admin/view-news','NewsController@viewNews');
    Route::get('/admin/delete-news-image/{id}','NewsController@deleteProductImage');
    Route::get('/admin/delete-news/{id}','NewsController@deleteNews');


});
/*Route::get('/register','app/Http/Controllers/Auth/RegisterController@create');*/
Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
