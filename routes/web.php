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

Route::resource('/', 'HomePageController' );
// Route::get('/home-page',function(){
//     return view('layout');
// });
Route::resource('/log-in','LoginController');
Route::post('getLogin','LoginController@getLogin');
Route::get('logout','LoginController@logout')->name('logout');

Route::get('/admin-info',function(){
    return view('quan-tri-vien.trang-ca-nhan');
});

Route::resource('danh-sach-nhan-vien','NhanVienController');

Route::resource('danh-sach-bo-phan','BoPhanController');

Route::resource('can-ho','CanHoController');

Route::resource('loai-account', 'LoaiAccountController');

Route::resource('loai-can-ho', 'LoaiCanHoController');

Route::resource('quan-he', 'MoiQuanHeController');

Route::resource('cu-dan', 'CuDanController');

Route::resource('khu-vuc', 'KhuVucController');

Route::resource('loai-phuong-tien', 'LoaiPhuongTienController');

Route::resource('phuong-tien', 'PhuongTienController');

Route::resource('danh-sach-thong-bao','ThongBaoController');

Route::resource('danh-sach-tin-tuc','TinTucController');




Route::resource('dich-vu', 'DichVuController');

Route::prefix('nhan-vien')->group(function(){
    Route::name('nhan-vien.')->group(function(){
        Route::get('/','NhanVienController@index')->name('danh-sach-nhan-vien');
        Route::get('them','NhanVienController@create')->name('them');
        Route::post('them','NhanVienController@store')->name('xu-ly-them');
        Route::get('/xoa/{id}','NhanVienController@destroy')->name('xoa');
    });
});
Route::prefix('loai-can-ho')->group(function(){
    Route::name('loai-can-ho.')->group(function(){
        Route::get('/','LoaiCanHoController@index')->name('danh-sach');
        Route::get('them','LoaiCanHoController@create')->name('them');
        Route::post('them','LoaiCanHoController@store')->name('xu-ly-them');
        Route::get('/xoa/{id}','LoaiCanHoController@destroy')->name('xoa');
    });
});
Route::prefix('loai-account')->group(function(){
    Route::name('loai-account.')->group(function(){
        Route::get('/','LoaiAccountController@index')->name('danh-sach');
        Route::get('them','LoaiAccountController@create')->name('them');
        Route::post('them','LoaiAccountController@store')->name('xu-ly-them');
        Route::get('/xoa/{id}','MoiQuanHeController@destroy')->name('xoa');
    });
});
Route::prefix('quan-he')->group(function(){
    Route::name('quan-he.')->group(function(){
        Route::get('/','MoiQuanHeController@index')->name('danh-sach');
        Route::get('them','MoiQuanHeController@create')->name('them');
        Route::post('them','MoiQuanHeController@store')->name('xu-ly-them');
        Route::get('/xoa/{id}','MoiQuanHeController@destroy')->name('xoa');
    });
});
Route::prefix('khu-vuc')->group(function(){
    Route::name('khu-vuc.')->group(function(){
        Route::get('/','KhuVucController@index')->name('danh-sach');
        Route::get('them','KhuVucController@create')->name('them');
        Route::post('them','KhuVucController@store')->name('xu-ly-them');
        Route::get('/xoa/{id}','KhuVucController@destroy')->name('xoa');
    });
});
Route::prefix('loai-phuong-tien')->group(function(){
    Route::name('loai-phuong-tien.')->group(function(){
        Route::get('/','LoaiPhuongTienController@index')->name('danh-sach');
        Route::get('them','LoaiPhuongTienController@create')->name('them');
        Route::post('them','LoaiPhuongTienController@store')->name('xu-ly-them');
        Route::get('/xoa/{id}','LoaiPhuongTienController@destroy')->name('xoa');
    });
});
Route::prefix('phuong-tien')->group(function(){
    Route::name('phuong-tien.')->group(function(){
        Route::get('/','PhuongTienController@index')->name('danh-sach');
        Route::get('them','PhuongTienController@create')->name('them');
        Route::post('them','PhuongTienController@store')->name('xu-ly-them');
        Route::get('/xoa/{id}','PhuongTienController@destroy')->name('xoa');
    });
});
Route::prefix('thong-bao')->group(function(){
    Route::name('thong-bao.')->group(function(){
        Route::get('/','ThongBaoController@index')->name('danh-sach');
        Route::get('them','ThongBaoController@create')->name('them');
        Route::post('them','ThongBaoController@store')->name('xu-ly-them');
        Route::get('/xoa/{id}','ThongBaoController@destroy')->name('xoa');
    });
});
Route::prefix('t in-tuc')->group(function(){
    Route::name('tin-tuc.')->group(function(){
        Route::get('/','TinTucController@index')->name('danh-sach');
        Route::get('them','TinTucController@create')->name('them');
        Route::post('them','TinTucController@store')->name('xu-ly-them');
        Route::get('/xoa/{id}','TinTucController@destroy')->name('xoa');
    });
});
Route::prefix('cu-dan')->group(function(){
    Route::name('cu-dan.')->group(function(){
        Route::get('/','CuDanController@index')->name('danh-sach');
        Route::get('them','CuDanController@create')->name('them');
        Route::post('them','CuDanController@store')->name('xu-ly-them');
        Route::get('/xoa/{id}','CuDanController@destroy')->name('xoa');
    });
});
Route::prefix('can-ho')->group(function(){
    Route::name('can-ho.')->group(function(){
        Route::get('/','CanHoController@index')->name('danh-sach');
        Route::get('them','CanHoController@create')->name('them');
        Route::post('them','CanHoController@store')->name('xu-ly-them');
        Route::get('/xoa/{id}','CanHoController@destroy')->name('xoa');
    });
});
Route::prefix('dich-vu')->group(function(){
    Route::name('dich-vu.')->group(function(){
        Route::get('/','DichVuController@index')->name('danh-sach');
        Route::get('them','DichVuController@create')->name('them');
        Route::post('them','DichVuController@store')->name('xu-ly-them');
        Route::get('/xoa/{id}','DichVuController@destroy')->name('xoa');
    });
});
Route::prefix('bo-phan')->group(function(){
    Route::name('bo-phan.')->group(function(){
        Route::get('/','BoPhanController@index')->name('danh-sach');
        Route::get('them','BoPhanController@create')->name('them');
        Route::post('them','BoPhanController@store')->name('xu-ly-them');
        Route::get('/xoa/{id}','BoPhanController@destroy')->name('xoa');
    });
});

Route::prefix('hoa-don')->group(function(){
    Route::name('hoa-don.')->group(function(){
        Route::get('/','HoaDonController@index')->name('danh-sach');
        Route::post('/search','HoaDonController@show')->name('search');
        Route::get('them','HoaDonController@create')->name('them');
        Route::post('them','HoaDonController@store')->name('xu-ly-them');
    });
});

Route::resource('hoa-don','HoaDonController' );

 Route::get('/user', function () {
     return view('user.layout.user-layout');
 });
 Route::resource('/thong-bao', 'UserThongBaoController');
 Route::resource('/user-hoa-don', 'UserHoaDonController');
 Route::resource('/thong-bao', 'UserThongBaoController');
 Route::resource('/phan-anh','UserPhanAnhController');  


Route::get('/sendemail', 'SendEmailController@index');
Route::post('/sendemail/send', 'SendEmailController@send');