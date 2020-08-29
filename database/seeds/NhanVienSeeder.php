<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class NhanVienSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('nhanvien')->insert([
        [
            'ho_ten_nv'=> 'Nguyễn Văn Anh',
            'CMND'=> '0123456789',
            'email'=> 'nguyenanh@mail.com',
            'SDT' => '0987607979',
            'ngay_sinh'=>'1990/03/06',
            'username' =>'nhanvien01',
            'password'=> hash::make('abcdef'),
            'loai_account_id'=> 2,
            'bo_phan_id'=>3,
        ],
        [
            'ho_ten_nv'=> 'Nguyễn Văn Bình',
            'CMND'=> '273657741',
            'email'=> 'abc@mail.com',
            'SDT' => '0123464331',
            'ngay_sinh'=>'1990/02/06',
            'username' =>'nhanvien02',
            'password'=> hash::make('abcdef'),
            'loai_account_id'=> 1,
            'bo_phan_id'=>1 ,
        ],
        [
            'ho_ten_nv'=> 'Nguyễn Văn Cường',
            'CMND'=> '0123456789',
            'email'=> 'abc@mail.com',
            'SDT' => '0123464331',
            'ngay_sinh'=>'1990/03/06',
            'username' =>'nhanvien03',
            'password'=> hash::make('abcdef'),
            'loai_account_id'=> 1,
            'bo_phan_id'=>1 ,
        ],
        [
            'ho_ten_nv'=> 'Nguyễn Văn Dũng',
            'CMND'=> '0123456789',
            'email'=> 'abc@mail.com',
            'SDT' => '0123464331',
            'ngay_sinh'=>'1990/03/16',
            'username' =>'nhanvien04',
            'password'=> hash::make('abcdef'),
            'loai_account_id'=> 1,
            'bo_phan_id'=>1 ,
        ],
        [
            'ho_ten_nv'=> 'Nguyễn Văn Em ',
            'CMND'=> '265721145',
            'email'=> 'abc@mail.com',
            'SDT' => '0987601212',
            'ngay_sinh'=>'1990/03/26',
            'username' =>'nhanvien05',
            'password'=> hash::make('abcdef'),
            'loai_account_id'=> 1,
            'bo_phan_id'=>1 ,
        ], [
            'ho_ten_nv'=> 'Nguyễn Thái Hock',
            'CMND'=> '273654457',
            'email'=> 'hoc2000@mail.com',
            'SDT' => '0283520632',
            'ngay_sinh'=>'1994/08/06',
            'username' =>'nhanvien06',
            'password'=> hash::make('123456789'),
            'loai_account_id'=> 2,
            'bo_phan_id'=>2,
        ],
        [
            'ho_ten_nv'=> 'Nguyễn Sơn',
            'CMND'=> '273654457',
            'email'=> 'abc@mail.com',
            'SDT' => '037362362',
            'ngay_sinh'=>'1998/08/06',
            'username' =>'nhanvien01',
            'password'=> hash::make('123456789'),
            'loai_account_id'=> 2,
            'bo_phan_id'=>2,
        ],
     ]);
    }
}
