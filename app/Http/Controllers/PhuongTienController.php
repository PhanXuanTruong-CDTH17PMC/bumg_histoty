<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\PhuongTien;
use App\LoaiPhuongTien;
use App\CanHo;
use App\KhuVuc;
use DB;


class PhuongTienController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    { 
        $canho = CanHo::all();
        $loai_pt = LoaiPhuongTien::all();
        $phuongtien = DB::select('SELECT phuongtien.id as phuongtien_id, nhan_hieu, mau_sac, bien_so, canho.name as can_ho_id, khuvuc.ten_khu_vuc as khu_vuc, loaiphuongtien.ten_loai_phuong_tien as tenphuongtien FROM phuongtien, khuvuc, loaiphuongtien, canho WHERE phuongtien.khu_vuc_id= khuvuc.id and phuongtien.loai_phuong_tien_id =   loaiphuongtien.id and can_ho_id = canho.id and phuongtien.deleted_at IS NUll and canho.deleted_at IS NUll and loaiphuongtien.deleted_at IS NUll order by phuongtien.id ASC');
        return view('phuong-tien.danh-sach-phuong-tien', compact('phuongtien','canho', 'loai_pt'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $khuvuc=KhuVuc::all();
        $canho=CanHo::all();
        $loaiphuongtien=LoaiPhuongTien::all();

        return view('phuong-tien.them-moi-phuong-tien',compact('canho','loaiphuongtien','khuvuc'));
    }

    /**
     * Store a newly created resource in storage.,m
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'nhan_hieu'=>'required',
            'mau_sac'=>'required',
            'bien_so'=>'required',
            'loai_phuong_tien'=>'required',
            'khu_vuc'=>'required',
            'can_ho'=>'required',

        ]);

        $phuongtien=new PhuongTien;
        $phuongtien->nhan_hieu  =$request ->input('nhan_hieu');
        $phuongtien->mau_sac  =$request ->input('mau_sac');
        $phuongtien->bien_so  =$request ->input('bien_so');
        $phuongtien->can_ho_id  =$request ->input('can_ho');
        $phuongtien->khu_vuc_id  =$request ->input('khu_vuc');
        $phuongtien->loai_phuong_tien_id  =$request ->input('loai_phuong_tien');
        
        $phuongtien->save();

        return redirect('phuong-tien')->with('success','Add success');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
        $canho=CanHo::all();
        $loai_pt=LoaiPhuongTien::all();
        $ch = $request->input('search_ch'); 
        $loai = $request->input('search_loai');
        if(!empty($ch)) {
            $phuongtien = DB::select('SELECT distinct phuongtien.id as phuongtien_id, nhan_hieu, mau_sac, bien_so, canho.name as can_ho_id, khuvuc.ten_khu_vuc as khu_vuc, loaiphuongtien.ten_loai_phuong_tien as tenphuongtien FROM phuongtien, khuvuc, loaiphuongtien, canho WHERE phuongtien.khu_vuc_id= khuvuc.id and phuongtien.loai_phuong_tien_id=loaiphuongtien.id and can_ho_id = canho.id and phuongtien.deleted_at IS NUll and canho.deleted_at IS NUll and loaiphuongtien.deleted_at IS NUll and can_ho_id = '. $ch);
        }   
        else if(!empty($loai) ) {
            $phuongtien = DB::select('SELECT distinct phuongtien.id as phuongtien_id, nhan_hieu, mau_sac, bien_so, canho.name as can_ho_id, khuvuc.ten_khu_vuc as khu_vuc, loaiphuongtien.ten_loai_phuong_tien as tenphuongtien FROM phuongtien, khuvuc, loaiphuongtien, canho WHERE phuongtien.khu_vuc_id= khuvuc.id and phuongtien.loai_phuong_tien_id=loaiphuongtien.id and can_ho_id = canho.id and phuongtien.deleted_at IS NUll and canho.deleted_at IS NUll and loaiphuongtien.deleted_at IS NUll and loai_phuong_tien_id = '. $loai);
        }
        else {
            $phuongtien = DB::select('SELECT distinct  phuongtien.id as phuongtien_id, nhan_hieu, mau_sac, bien_so, canho.name as can_ho_id, khuvuc.ten_khu_vuc as khu_vuc, loaiphuongtien.ten_loai_phuong_tien as tenphuongtien FROM phuongtien, khuvuc, loaiphuongtien, canho WHERE phuongtien.khu_vuc_id= khuvuc.id and phuongtien.loai_phuong_tien_id=loaiphuongtien.id and can_ho_id = canho.id and phuongtien.deleted_at IS NUll and canho.deleted_at IS NUll and loaiphuongtien.deleted_at IS NUll');
        }
         if(!empty($ch) && !empty($loai)) {
            $phuongtien = DB::select('SELECT distinct phuongtien.id as phuongtien_id, nhan_hieu, mau_sac, bien_so, canho.name as can_ho_id, khuvuc.ten_khu_vuc as khu_vuc, loaiphuongtien.ten_loai_phuong_tien as tenphuongtien FROM phuongtien, khuvuc, loaiphuongtien, canho WHERE phuongtien.khu_vuc_id= khuvuc.id and phuongtien.loai_phuong_tien_id=loaiphuongtien.id and can_ho_id = canho.id and phuongtien.deleted_at IS NUll and canho.deleted_at IS NUll and loaiphuongtien.deleted_at IS NUll and phuongtien.loai_phuong_tien_id = '. $loai .' and can_ho_id = '. $ch );
        }  
        return view('phuong-tien.danh-sach-phuong-tien', compact('phuongtien','canho', 'loai_pt')); 
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $khuvuc=KhuVuc::all();
        $canho=CanHo::all();
        $loaiphuongtien=LoaiPhuongTien::all();
        $phuongtien=PhuongTien::find($id);
        return view('phuong-tien.sua-phuong-tien',compact('canho','loaiphuongtien','khuvuc', 'phuongtien'));
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
        $this->validate($request,[
            'nhan_hieu'=>'required',
            'mau_sac'=>'required',
            'bien_so'=>'required',
            'loai_phuong_tien'=>'required',
            'khu_vuc'=>'required',
            'can_ho'=>'required',

        ]);

        $phuongtien= PhuongTien::find($id);
        $phuongtien->nhan_hieu  =$request ->input('nhan_hieu');
        $phuongtien->mau_sac  =$request ->input('mau_sac');
        $phuongtien->bien_so  =$request ->input('bien_so');
        $phuongtien->can_ho_id  =$request ->input('can_ho');
        $phuongtien->khu_vuc_id  =$request ->input('khu_vuc');
        $phuongtien->loai_phuong_tien_id  =$request ->input('loai_phuong_tien');
        $phuongtien->save();

        return redirect('phuong-tien')->with('success','Update success');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $phuongtien = PhuongTien::find($id);
        $phuongtien->delete();
        return redirect('phuong-tien')->with('success','Delete success');
    }
}
