<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\HoaDon;
use Auth;
use DB;
class UserHoaDonController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $canho=Auth::guard('canho')->user()->id;
        $hoadon=DB::select('SELECT * From hoadon where  can_ho_id='.$canho);
        return view('user.user-hoadon')->with('hoadon',$hoadon);
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
        $cthoadon= DB::select('SELECT dichvu.ten_dich_vu as ten_dv, dichvu.don_vi as don_vi, dichvu.phi_dv as phi_dv, chitiethoadon.so_luong as so_luong, chitiethoadon.thanh_tien as thanh_tien from chitiethoadon, dichvu where dichvu.id=chitiethoadon.dich_vu_id and hoa_don_id='.$id);
        $hoadon=HoaDon::find($id);
        return view('user.user-chitiethoadon',compact('cthoadon','hoadon'));
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
