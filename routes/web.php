    <?php

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


// Route::get('/home-page',function(){
//     return view('layout');
// });
Route::resource('/log-in','LoginController');
Route::post('getLogin','LoginController@getLogin');
Route::get('nhan-vien-logout','LoginController@logout')->name('nhan-vien-logout');
Route::get('user-logout','LoginController@userlogout')->name('user-logout');


Route::get('/admin-info',function(){
    return view('quan-tri-vien.trang-ca-nhan');
});
Route::prefix('danh-sach-nhan-vien')->middleware('checkNhanVienlogin::class')->group(function(){
    Route::name('danh-sach-nhan-vien.')->group(function () {
    Route::get('/','NhanVienController@index')->name('danh-sach-nhan-vien');
    Route::get('them-moi','NhanVienController@create')->name('them-nhan-vien');
    Route::post('them-moi','NhanVienController@store')->name('xu-ly-them-nhan-vien');
    Route::get('/sua/{id}','NhanVienController@edit')->name('sua-nhan-vien');
    Route::post('/sua/{id}','NhanVienController@update')->name('xu-ly-sua-nhan-vien');
    Route::delete('xoa/{id}','NhanVienController@destroy')->name('xoa-nhan-vien');
    });
});

// Route::prefix('tin-tuc')->group(function(){
//     Route::get('/','TinTucController@index')->name('danh-sach-tin-tuc')->middleware('checkNhanVienlogin::class');
//     Route::get('them','TinTucController@create')->name('them-tin-tuc')->middleware('checkNhanVienlogin::class');
//     Route::post('them','TinTucController@store')->name('xu-ly-them-tin-tuc')->middleware('checkNhanVienlogin::class');
// })


Route::prefix('danh-sach-bo-phan')->middleware('checkNhanVienlogin::class')->group(function(){
    Route::name('bo-phan.')->group(function () {
    Route::get('/','BoPhanController@index')->name('danh-sach-bo-phan');
    Route::get('/them','BoPhanController@create')->name('them-bo-phan');
    Route::post('/them','BoPhanController@store')->name('xu-ly-them-bo-phan');
    Route::get('/sua/{id}','BoPhanController@edit')->name('sua-bo-phan');
    Route::post('/sua/{id}','BoPhanController@update')->name('xu-ly-sua-bo-phan');
    Route::delete('/xoa/{id}','BoPhanController@destroy')->name('	');
    });
});


Route::resource('can-ho','CanHoController')->middleware('checkNhanVienlogin::class');

Route::resource('danh-sach-phan-anh','PhanAnhController')->middleware('checkNhanVienlogin::class');


Route::resource('loai-account', 'LoaiAccountController')->middleware('checkNhanVienlogin::class');

Route::resource('loai-can-ho', 'LoaiCanHoController')->middleware('checkNhanVienlogin::class');
Route::resource('quan-he', 'MoiQuanHeController')->middleware('checkNhanVienlogin::class');

Route::resource('cu-dan', 'CuDanController')->middleware('checkNhanVienlogin::class');

Route::resource('khu-vuc', 'KhuVucController')->middleware('checkNhanVienlogin::class');

Route::resource('loai-phuong-tien', 'LoaiPhuongTienController')->middleware('checkNhanVienlogin::class');

Route::resource('phuong-tien', 'PhuongTienController')->middleware('checkNhanVienlogin::class');

Route::resource('danh-sach-thong-bao','ThongBaoController')->middleware('checkNhanVienlogin::class');



Route::resource('dich-vu', 'DichVuController')->middleware('checkNhanVienlogin::class');



Route::prefix('tin-tuc')->middleware('checkNhanVienlogin::class')->group(function(){
    Route::name('tin-tuc.')->group(function () {
    Route::get('/','TinTucController@index')->name('danh-sach-tin-tuc');
    Route::get('/them','TinTucController@create')->name('them-tin-tuc');
    Route::post('/them','TinTucController@store')->name('xu-ly-them-tin-tuc');
    Route::get('/sua/{id}','TinTucController@edit')->name('sua-tin-tuc');
    Route::post('/sua/{id}','TinTucController@update')->name('xu-ly-sua-tin-tuc');
    Route::delete('/xoa/{id}','TinTucController@destroy')->name('xoa-tin-tuc');
    });
});


Route::resource('hoa-don','HoaDonController' )->middleware('checkNhanVienlogin::class');

 Route::get('/user', function () {
     return view('user.layout.user-layout');
 });
// Route::get('/home-page', function () {
//     return view('user.home-page');
// 
 Route::resource('/thong-bao', 'UserThongBaoController')->middleware('checkUserlogin::class');
 Route::resource('/user-hoa-don', 'UserHoaDonController')->middleware('checkUserlogin::class');
 Route::resource('/thong-bao', 'UserThongBaoController')->middleware('checkUserlogin::class');
 Route::resource('/phan-anh','UserPhanAnhController')->middleware('checkUserlogin::class');
 Route::resource('/user-phuong-tien','UserPhuongTienController')->middleware('checkUserlogin::class');
 Route::resource('/', 'HomePageController' );
 Route::resource('/home-page', 'HomePageController' );