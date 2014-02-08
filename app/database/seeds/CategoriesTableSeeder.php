<?php

class CategoriesTableSeeder extends Seeder {

    public function run()
    {
        $Categories = [
            [
                'id'            => '1',
                'name'          => 'Kabar Desa', 
                'alias'         => 'kabar-desa',
                'parentId'      => NULL
            ],
            [
                'id'            => '2',
                'name'          => 'Lembaga Desa', 
                'alias'         => 'lembaga-desa',
                'parentId'      => NULL
            ],
            [
                'id'            => '3',
                'name'          => 'Profil Desa', 
                'alias'         => 'profil-desa',
                'parentId'      => NULL
            ],
            [
                'id'            => '4',
                'name'          => 'Potensi Desa', 
                'alias'         => 'potensi-desa',
                'parentId'      => NULL
            ],
            [
                'id'            => '5',
                'name'          => 'Singkat Suatang Baru', 
                'alias'         => 'singkat',
                'parentId'      => '3'
            ],
            [
                'id'            => '6',
                'name'          => 'Sejarah', 
                'alias'         => 'sejarah',
                'parentId'      => '3'
            ],
            [
                'id'            => '7',
                'name'          => 'Visi & Misi', 
                'alias'         => 'visi-misi',
                'parentId'      => '3'
            ],
            [
                'id'            => '8',
                'name'          => 'Batas Wilayah', 
                'alias'         => 'batas-wilayah',
                'parentId'      => '3'
            ],
            [
                'id'            => '9',
                'name'          => 'SDA & Penggunaan Lahan', 
                'alias'         => 'sda-penggunaan-lahan',
                'parentId'      => '4'
            ],
            [
                'id'            => '10',
                'name'          => 'SDM', 
                'alias'         => 'sdm',
                'parentId'      => '4'
            ],
            [
                'id'            => '11',
                'name'          => 'Sarana & Prasarana', 
                'alias'         => 'sarana-prasarana',
                'parentId'      => '4'
            ],
            [
                'id'            => '12',
                'name'          => 'Prestasi', 
                'alias'         => 'prestasi',
                'parentId'      => '4'
            ],
		];
        DB::table('categories')->insert($Categories);
    }

}