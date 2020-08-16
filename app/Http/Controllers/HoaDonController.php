<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendMail;
use Auth;
use App\HoaDon;
use App\CuDan;
use App\CanHo;
use App\DichVu;
use App\ChiTietHoaDon;
use DB;

class HoaDonController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $hoadon=DB::select('SELECT  hoadon.tong_tien, hoadon.id, canho.name as canhoname, hoadon.created_at, hoadon.tinh_trang_tt FROM hoadon, canho WHERE hoadon.can_ho_id=canho.id  ');
        return view('hoa-don.danh-sach-hoa-don')->with('hoadon',$hoadon);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $phuongtien=DB::select('SELECT dichvu.id as id_pt from dichvu, loaiphuongtien where dichvu.id=loaiphuongtien.dich_vu_id LIMIT 1' );
        $canho = CanHo::all();
        $dichvu = DichVu::all();
        $tongtien = DB::select('SELECT SUM(thanh_tien) as tongtien from chitiethoadon,hoadon where chitiethoadon.hoa_don_id=hoadon.id');
        $thanhtien = DB::select('SELECT dichvu.phi_dv*chitiethoadon.so_luong as thanhtien from chitiethoadon,dichvu where chitiethoadon.dich_vu_id=dichvu.id' );
        return view('hoa-don.them-moi-hoa-don',compact('canho','dichvu','tongtien','thanhtien','phuongtien'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'can_ho'=>'required',
            'dich_vu'=>'required',
            'so_luong'=>'required',
            'tinh_trang_tt'=>'required', 
            // // 'tong_tien'=>'required', 
            // 'thanh_tien'=>'required', 
        ]);
        // $sophuongtien=DB::select('SELECT dichvu.id as id_pt from dichvu, loaiphuongtien where dichvu.id=loaiphuongtien.dich_vu_id LIMIT 1' );
        // $soxe=DB::select('SELECT sum(loaiphuongtien.gia_tien) From phuongtien ,loaiphuongtien,dichvu where loaiphuongtien.dich_vu_id=dichvu.id and phuongtien.can_ho_id= '.$request->input('can_ho'));
        // return $soxe;
        $tt = 0;
        for($i=1; $i<=count($request->input('dich_vu'));$i++){
            
            $dichvu2 = DichVu::find($request->input('dichvu.'.$i.'.id'));
            // if($dichvu2->id==$sophuongtien){

            // }
            $soluong=($request->input('so_luong.'.$i.'.soluong')); 
            $tt+= $request->input('so_luong.'.$i.'.soluong') *$dichvu2->phi_dv; 

        }

         $hoadon = new HoaDon;
         $hoadon->can_ho_id =$request->input('can_ho');
         $hoadon->tinh_trang_tt=$request->input('tinh_trang_tt');
         $hoadon->nhan_vien_id=Auth::guard('nhanvien')->user()->id;
         $hoadon->tong_tien = $tt;
         $hoadon->save();
        
        
        for($i=1; $i<=count($request->input('dich_vu'));$i++){
            $cthoadon = new ChiTietHoaDon;
            $hoadon_id=(DB::table('hoadon')->max('id'));
            $cthoadon->hoa_don_id=$hoadon_id;
            $cthoadon->can_ho_id =$request ->input('can_ho');
            $cthoadon->dich_vu_id = ($request->input('dichvu.'.$i.'.id'));
            $dichvu =DB::select('SELECT phi_dv from dichvu where id='.$request->input('dichvu.'.$i.'.id'));  
            $dichvu2 = DichVu::find($request->input('dichvu.'.$i.'.id'));
            $cthoadon->so_luong = $request->input('so_luong.'.$i.'.soluong');   
            $cthoadon->thanh_tien = $request->input('so_luong.'.$i.'.soluong') *$dichvu2->phi_dv; 
            $cthoadon->save();
         }
         
        $ch_mail = DB::select('SELECT cudan.email from canho, cudan where cudan.id = canho.chu_ho_id and canho.id ='.$cthoadon->can_ho_id);
        $ch = DB::select('SELECT cudan.ho_ten_cd from canho, cudan where cudan.id = canho.chu_ho_id and canho.id ='.$cthoadon->can_ho_id);
        // dd($ch);
        $data = [
            'name'      => "Lê Phú Tấn",
            'message'   =>   'Pleases pay your bill !'
            ];
        Mail::to($ch_mail)->send(new SendMail($data));
        return redirect('hoa-don')->with('success','Add success');
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
        $canho=DB::select('SELECT canho.name as name_ch from canho,hoadon where hoadon.id='.$id.' and hoadon.can_ho_id=canho.id');
        return view('hoa-don.chi-tiet-hoa-don',compact('cthoadon','hoadon','canho'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        
         $hoadon =HoaDon::find($id);
        // ->select([
        //     'canho,name',
        //     'tinh_trang_tt'
        // ])
        // ->where([
        //       'hoadon.deleted_at Í NULL'
        // ]);

        return view('hoa-don.tinh-trang-hoa-don')->with('hoadon',$hoadon);
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
        $hoadon = HoaDon::find($id);
        if( $hoadon->tinh_trang_tt == 1) {
            $hoadon->tinh_trang_tt = 0;
        }
        else {
            $hoadon->tinh_trang_tt = 1;
        }        
        $hoadon->save();

        return redirect('hoa-don')->with('success','Delete success');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $hoadon = HoaDon::find($id);
        $hoadon->delete();

        return redirect('hoa-don')->with('success','Delete success');
    }
}
