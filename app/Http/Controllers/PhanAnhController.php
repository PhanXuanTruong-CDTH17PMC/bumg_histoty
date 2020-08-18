<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\PhanAnh;
use DB;

class PhanAnhController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $phananh=DB::select('SELECT phananh.id as id_phan_anh,tieu_de_pa, noi_dung_pa, phananh.created_at as ngay_tao, cudan.ho_ten_cd  as nguoi_tao From cudan, phananh WHERE phananh.chu_ho_id =cudan.id');
        return view('phan-anh.danh-sach-phan-anh')->with('phananh',$phananh);
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
        $chitietphananh=DB::select('SELECT * from phananh where id='.$id);
        return view('phan-anh.chi-tiet-phan-anh')->with('chitietphananh',$chitietphananh);
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
