<?php

use Illuminate\Database\Seeder;

class CuDanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('cudan')->insert([
            [
                'ho_ten_cd'=>'Phan Xuân Trường',
                'CMND' =>'273657742',
                'email'=> 'xuantruongqsb@gmail.com',
                'SDT'=>'0909321123',
                'ng_sinh'=>'1999/12/09',
                'can_ho_id'=>1,
                'quan_he_id'=>1,
            ],
            [
                'ho_ten_cd'=>'Phan Ngọc Thanh Hải',
                'CMND' =>'27262584120',
                'email'=> 'phangthi99@gmail.com',
                'SDT'=>'0909345543',
                'ng_sinh'=>'1999/02/09',
                'can_ho_id'=>2,
                'quan_he_id'=>1,
            ],
            [
                'ho_ten_cd'=>'Lê Phú Tấn ',
                'CMND' =>'23232356120',
                'email'=> 'tangiao1999@gmail.com',
                'SDT'=>'0123456789',
                'ng_sinh'=>'1999/02/09',
                'can_ho_id'=>3,
                'quan_he_id'=>1,
            ],
            [
                'ho_ten_cd'=>'Lê Minh',
                'CMND' =>'0123456',
                'email'=> '0306171420@caothang.edu.vn',
                'SDT'=>'0254525',
                'ng_sinh'=>'1999/02/09',
                'can_ho_id'=>4,
                'quan_he_id'=>1,
            ],
            [
                'ho_ten_cd'=>'Nguyễn Văn An',
                'CMND' =>'0123456',
                'email'=> '0306171393@caothang.edu.vn',
                'SDT'=>'0254525',
                'ng_sinh'=>'1999/02/09',
                'can_ho_id'=>5,
                'quan_he_id'=>1,
            ],
            [
                'ho_ten_cd'=>'Nguyễn Văn Tư',
                'CMND' =>'0123456',
                'email'=> 'tp17041999@gmail.com',
                'SDT'=>'0254525',
                'ng_sinh'=>'1999/02/09',
                'can_ho_id'=>6,
                'quan_he_id'=>1,
            ],
            [
                'ho_ten_cd'=>'Nguyễn Văn Mai',
                'CMND' =>'0123456',
                'email'=> 'poorkun0102@mgail.com',
                'SDT'=>'0254525',
                'ng_sinh'=>'1999/02/09',
                'can_ho_id'=>7,
                'quan_he_id'=>1,
            ],
            [
                'ho_ten_cd'=>'Nguyễn Thị Giang',
                'CMND' =>'273657742',
                'email'=> 'xuantruongqsb@gmail.com',
                'SDT'=>'0909321123',
                'ng_sinh'=>'1999/12/09',
                'can_ho_id'=>1,
                'quan_he_id'=>2,
            ],
            [
                'ho_ten_cd'=>'Phan Xuân Hổ',
                'CMND' =>'273657742',
                'email'=> 'xuantruongqsb@gmail.com',
                'SDT'=>'0909321123',
                'ng_sinh'=>'1999/12/09',
                'can_ho_id'=>1,
                'quan_he_id'=>3,
            ],
            [
                'ho_ten_cd'=>'Phan Xuân Long',
                'CMND' =>'273657742',
                'email'=> 'xuantruongqsb@gmail.com',
                'SDT'=>'0909321123',
                'ng_sinh'=>'1999/12/09',
                'can_ho_id'=>1,
                'quan_he_id'=>3,
            ],
        ]);
    }
}
