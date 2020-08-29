<?php

namespace App\Http\Controllers;
use Auth;
use DB;
use App\ThongBao;
use Illuminate\Http\Request;

class UserThongBaoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(Auth::guard('canho')->check())
		{   
            $id = Auth::guard('canho')->user()->id;
            $thongbao=DB::table('thongbao')->whereIn('can_ho_id',[0, $id])->orderBy('id', 'desc')->get();
            $auth = Auth::guard('canho')->user();
            $thongbao2= DB::table('thongbao')->find(DB::table('thongbao')->max('id'));
            return view('user.user-thongbao',compact('thongbao','thongbao2','auth'));
		}
		else 
		{
			return view('quan-tri-vien.dang-nhap');
		}
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
        $auth = Auth::guard('canho')->user();
        $thongbao = ThongBao::find($id);
        return view('user.user-chitietthongbao',compact('auth','thongbao'));
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
