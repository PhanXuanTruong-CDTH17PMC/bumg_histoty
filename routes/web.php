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
/*Route::get('/danh-sach-nhan-vien',function(){
    return view('nhan-vien.danh-sach-nhan-vien');
});*/

//Quản lý thông tin nhân viên
Route::resource('danh-sach-nhan-vien','NhanVienController')->middleware('checkNhanVienlogin::class');
Route::resource('danh-sach-bo-phan','BoPhanController')->middleware('checkNhanVienlogin::class');

// Route::resource('danh-sach-tin-tuc','TinTucController');
// Route::resource('danh-sach-thong-bao','ThongBaoController');
//Quản lý thông tin căn hộ
/*Route::get('/can-ho', function () {
    return view('can-ho.danh-sach-can-ho');
});*/
Route::resource('can-ho','CanHoController')->middleware('checkNhanVienlogin::class');





Route::resource('loai-account', 'LoaiAccountController')->middleware('checkNhanVienlogin::class');
/*Route::get('/bo-phan', function () {
    return view('nhan-vien.bo-phan.danh-sach-bo-phan');
});*/

Route::resource('loai-can-ho', 'LoaiCanHoController')->middleware('checkNhanVienlogin::class');

/*Route::get('/loai-account', function () {
    return view('nhan-vien.loai-account.danh-sach-loai-account');
});*/

Route::resource('quan-he', 'MoiQuanHeController')->middleware('checkNhanVienlogin::class');

Route::resource('cu-dan', 'CuDanController')->middleware('checkNhanVienlogin::class');

Route::resource('khu-vuc', 'KhuVucController')->middleware('checkNhanVienlogin::class');

Route::resource('loai-phuong-tien', 'LoaiPhuongTienController')->middleware('checkNhanVienlogin::class');

Route::resource('phuong-tien', 'PhuongTienController')->middleware('checkNhanVienlogin::class');

Route::resource('danh-sach-thong-bao','ThongBaoController')->middleware('checkNhanVienlogin::class');

Route::resource('danh-sach-tin-tuc','TinTucController')->middleware('checkNhanVienlogin::class');




Route::resource('dich-vu', 'DichVuController')->middleware('checkNhanVienlogin::class');
Route::prefix('tin-tuc')->group(function(){
    Route::get('/','TinTucController@index')->name('danh-sach-tin-tuc')->middleware('checkNhanVienlogin::class');
    Route::get('them','TinTucController@create')->name('them-tin-tuc')->middleware('checkNhanVienlogin::class');
    Route::post('them','TinTucController@store')->name('xu-ly-them-tin-tuc')->middleware('checkNhanVienlogin::class');
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