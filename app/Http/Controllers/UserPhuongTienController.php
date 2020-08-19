<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\PhuongTien;
use App\LoaiPhuongTien;
use App\CanHo;
use App\KhuVuc;
use App\DichVu;
use DB;
use Auth;

class UserPhuongTienController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
<<<<<<< HEAD
        $id=Auth::guard('canho')->user()->id;
        $phuongtien=DB::select('SELECT phuongtien.id as phuongtien_id, nhan_hieu, mau_sac, bien_so, khuvuc.ten_khu_vuc as khu_vuc, loaiphuongtien.ten_loai_phuong_tien as tenphuongtien FROM phuongtien, khuvuc, loaiphuongtien WHERE phuongtien.khu_vuc_id= khuvuc.id and phuongtien.loai_phuong_tien_id=loaiphuongtien.id and phuongtien.can_ho_id='.$id);
        return view('user.user-phuongtien')->with('phuongtien',$phuongtien);
=======
        $id =Auth::guard('canho')->user()->id;
        $auth = Auth::guard('canho')->user();     
        $phuongtien=DB::select('SELECT phuongtien.id as phuongtien_id, nhan_hieu, mau_sac, bien_so, khuvuc.ten_khu_vuc as khu_vuc, loaiphuongtien.ten_loai_phuong_tien as tenphuongtien FROM phuongtien, khuvuc, loaiphuongtien WHERE phuongtien.khu_vuc_id= khuvuc.id and phuongtien.loai_phuong_tien_id=loaiphuongtien.id and phuongtien.can_ho_id='.$id);
        return view('user.user-phuongtien', compact('phuongtien','auth'));
>>>>>>> phan_truong
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
