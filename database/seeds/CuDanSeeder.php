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
                'ho_ten_cd'=>'Nguyễn Văn Sang',
                'CMND' =>'273657742',
                'email'=> 'xuantruongqsb@mail.com',
                'SDT'=>'0909321123',
                'ng_sinh'=>'1990/12/09',
                'can_ho_id'=>1,
                'quan_he_id'=>1,
            ],
            [
                'ho_ten_cd'=>'Phan Sương',
                'CMND' =>'23232356120',
                'email'=> 'email3@mail.com',
                'SDT'=>'0353606630',
                'ng_sinh'=>'1992/12/09',
                'can_ho_id'=>1,
                'quan_he_id'=>2,
            ],
            [
                'ho_ten_cd'=>'Nguyễn Dương',
                'CMND' =>'0123456',
                'email'=> 'email4@mail.com',
                'SDT'=>'0254525',
                'ng_sinh'=>'1999/02/09',
                'can_ho_id'=>1,
                'quan_he_id'=>5,
            ],
            [
                'ho_ten_cd'=>'Trần Quang',
                'CMND' =>'27262584120',
                'email'=> 'phangthi99@mail.com',
                'SDT'=>'0909345543',
                'ng_sinh'=>'1999/02/09',
                'can_ho_id'=>2,
                'quan_he_id'=>1,
            ],
            [
                'ho_ten_cd'=>'Nguyễn Văn An',
                'CMND' =>'273657748',
                'email'=> '0306171420@caothang.edu.vn',
                'SDT'=>'0364000042',
                'ng_sinh'=>'1989/02/19',
                'can_ho_id'=>3,
                'quan_he_id'=>1,
            ],
            [
                'ho_ten_cd'=>'Nguyễn Văn Mai',
                'CMND' =>'0123456',
                'email'=> '0306171393@caothang.edu.vn',
                'SDT'=>'0254525',
                'ng_sinh'=>'1999/02/09',
                'can_ho_id'=>4,
                'quan_he_id'=>1,
            ],
            [
                'ho_ten_cd'=>'Nguyễn Văn Long',
                'CMND' =>'0123456',
                'email'=> 'poorkun0102@mail.com',
                'SDT'=>'0254525',
                'ng_sinh'=>'1999/02/09',
                'can_ho_id'=>5,
                'quan_he_id'=>1,
            ],
            [
                'ho_ten_cd'=>'Nguyễn Văn Đạt',
                'CMND' =>'273655521',
                'email'=> 'tangiao1999@mail.com',
                'SDT'=>'0364232232',
                'ng_sinh'=>'1994/12/08',
                'can_ho_id'=>6,
                'quan_he_id'=>1,
            ],
            [
                'ho_ten_cd'=>'Lê Kim Tuyết',
                'CMND' =>'242457749',
                'email'=> 'tp17041999@mail.com',
                'SDT'=>'0987507578',
                'ng_sinh'=>'1999/02/09',
                'can_ho_id'=>7,
                'quan_he_id'=>1,
            ],
            [
                'ho_ten_cd'=>'Lê Kim Hồng',
                'CMND' =>'242457719',
                'email'=> 'lhong17041999@mail.com',
                'SDT'=>'0987507578',
                'ng_sinh'=>'1965/02/09',
                'can_ho_id'=>7,
                'quan_he_id'=>6,
            ]
        ]);
    }
}
