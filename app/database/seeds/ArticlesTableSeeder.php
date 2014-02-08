<?php

class ArticlesTableSeeder extends Seeder {

    public function run()
    {
        # Status ? (0 => 'Draft') : (1 => 'Published')

        $Articles = [
            [
                'id'            => '1',
                'categoryId'    => '5',
                'title'         => 'Singkat, Desa Suatang Baru',
                'alias'         => 'singkat-desa-suatang-baru',
                'content'       => '<p style="text-align: justify;">SP 2 yang sekarang dikenal dengan Desa Suatang Baru, adalah sebuah desa sederhana yang terdiri atas 3 dusun, yaitu Giri Mulyo, Giri Rejo dan Giri Mas.</p><p style="text-align: justify;">Desa Suatang Baru merupakan wilayah penempatan transmigrasi pada tahun 1980 sehingga penduduknya berasal dari Jawa Timur, Jawa Tengah, Jawa Tengah dan penduduk lokal Paser.</p><p style="text-align: justify;">Letak desa ini berada dalam wilayah Kecamatan Paser Belengkong, Kabupaten Paser. Jarak dari Desa Suatang Baru ke ibukota kecamatan terbilang cukup dekat yaitu 10 Km, sedangkan ke ibu kota kabupaten berjarak 17 Km.</p>',
                'authorId'      => '1',
                'status'        => '1',
                // Komentar Tidak Diperkenankan
                'comment'       => '0',
                'created_at'    => new DateTime, 
                'updated_at'    => new DateTime
            ],
            [
                'id'            => '2',
                'categoryId'    => '6',
                'title'         => 'Sejarah Desa Suatang Baru',
                'alias'         => 'sejarah-desa-suatang-baru',
                'content'       => '<p style="text-align: justify;">Wilayah yang dulunya disebut SP 2 atau Satuan Pemukiman 2 ini merupakan wilayah penempatan transmigrasi tahun 1980 yang penduduknya berasal dari Jawa Timur, Jawa Tengah, Jawa Barat dan penduduk lokal Paser.</p><p style="text-align: justify;">Selama dalam pembinaan Departemen Transmigrasi, Desa Suatang Baru adalah pemekaran dari Desa Suatang. Kemudian menjadi wilayah pemekaran sejak tahun 1990 menjadi Desa Suatang Baru.</p><p style="text-align: justify;">Pada tahun 2010 Desa Suatang Baru kehilangan sebagian wilayahnya, dikarenakan Suatang Kateban yang termasuk dalam wilayah Desa Suatang Baru dimekarkan dan menjadi Desa Suatang Kateban. Hal ini juga menyebabkan luas wilayah Desa Suatang Baru berkurang menjadi 19,26 Km<sup>2</sup>.</p>',
                'authorId'      => '1',
                'status'        => '1',
                'comment'       => '0',
                'created_at'    => new DateTime, 
                'updated_at'    => new DateTime
            ],
            [
                'id'            => '3',
                'categoryId'    => '8',
                'title'         => 'Geografis Desa Suatang Baru',
                'alias'         => 'geografis-desa-suatang-baru',
                'content'       => '<p><a href="http://2.bp.blogspot.com/-2ai97hGfAWk/UfiFnVe-BqI/AAAAAAAAAYg/SLJLtT62TU4/s1600/Picture1.png"><img src="http://2.bp.blogspot.com/-2ai97hGfAWk/UfiFnVe-BqI/AAAAAAAAAYg/SLJLtT62TU4/s1600/Picture1.png" alt="" width="802" height="583" /></a></p><ol><li style="text-align: justify;">Luas dan Batas Wilayah<br /><br /><ol style="list-style-type: lower-alpha;"><li>Luas Wilayah = 19,26 Km<sup>2</sup></li><li>Batas &ndash; batas Wilayah<ul><li><strong>Utara</strong> = Suatang Bulu, Suatang Kateban</li><li>strong&gt;Selatang = Simpang Batu, Seniung Jaya</li><li><strong>Barat</strong> = Seniung Jaya</li><li><strong>Timur</strong> = Paser Belengkong, Suatang Kateban&nbsp;</li></ul></li></ol></li><li style="text-align: justify;">Tipologi<br /><br />Desa sekitar hutan.<br /><br /></li><li style="text-align: justify;">Orbitrasi<br /><br /><ol style="list-style-type: lower-alpha;"><li style="text-align: justify;">Jarak ke ibukota kecamatan terdekat = 10 Km</li><li style="text-align: justify;">Jarak tempuh ke ibukota kecamatan terdekat = Sekitar 15 menit</li><li style="text-align: justify;">Kendaraan umum ke ibukota kecamatan terdekat&nbsp; = Ada, angkutan pedesaan</li><li style="text-align: justify;">Jarak ke ibukota kabupaten terdekat = 17 Km</li><li style="text-align: justify;">Lama tempuh ke ibukota kabupaten terdekat = Sekitar 20 menit</li><li style="text-align: justify;">Kendaraan umum ke ibukota kabupaten terdekat = Ada, angkutan pedesaan<br /><br /></li></ol></li><li style="text-align: justify;">Iklim<br /><ol style="list-style-type: lower-alpha;"><li style="text-align: justify;">Curah hujan = Sedang</li><li style="text-align: justify;">Jumlah bulan hujan = 3 bulan</li><li style="text-align: justify;">Suhu rata - rata = 280 C</li><li style="text-align: justify;">Tinggi tempat = 25 mdl</li><li style="text-align: justify;">Bentang wilayah = Berbukit</li></ol></li></ol>',
                'authorId'      => '1',
                'status'        => '1',
                'comment'       => '0',
                'created_at'    => new DateTime, 
                'updated_at'    => new DateTime
            ],
            [
                'id'            => '4',
                'categoryId'    => '9',
                'title'         => 'Sumber Daya Alam',
                'alias'         => 'sumber-daya-alam',
                'content'       => '<ol><li>Produksi tanaman sayuran pertahun<ol style="list-style-type: lower-alpha;"><li>Padi = 126 Ha</li><li>Palawija = 98 Ha</li><li>Jagung = 1 Ha</li><li>Kacang panjang = 1 Ha</li><li>Cabe = 0,5 Ha</li><li>Buncis = 0,25 Ha</li><li>Bayam = 0,25 Ha</li><li>Kangkung = 0,5 Ha</li></ol></li><li>Produksi tanaman buah &ndash; buahan pertahun<ol style="list-style-type: lower-alpha;"><li>Pisang = 2 Ha</li><li>Jeruk = 1 Ha</li><li>Semangka = 1 Ha</li><li>Kelapa sawit = 9,25 Km<sup>2</sup></li><li>Kelapa dalam = 3 Ha</li><li>Tomat = 0,25 Ha</li><li>Mentimun = 0,5 Ha<br /><br /></li></ol></li><li>Produksi tanaman umbi - umbian pertahun<ol style="list-style-type: lower-alpha;"><li>Ubi jalar = 1 Ha</li><li>Singkong = 3 Ha<br /><br /></li></ol></li><li>Peternakan<br /><ol style="list-style-type: lower-alpha;"><li>Sapi = 269 Ekor dengan 79 pemilik sapi<br /><br /></li></ol></li><li>Sumber daya air<ol style="list-style-type: lower-alpha;"><li>Sumur galian = 105 unit, kualitas baik tidak berbau dan tidak berwarna</li><li>Embung = 2 unit</li><li>Rawa = 325 Ha</li><li>Danau/ Waduk = 2 Ha, kegunaan sebagai cadangan dengan kondisi keruh</li></ol></li></ol>',
                'authorId'      => '1',
                'status'        => '1',
                'comment'       => '0',
                'created_at'    => new DateTime, 
                'updated_at'    => new DateTime
            ],
            [
                'id'            => '5',
                'categoryId'    => '10',
                'title'         => 'Sumber Daya Manusia',
                'alias'         => 'sumber-daya-manusia',
                'content'       => '<ol><li>Lembaga pemerintahan<ol style="list-style-type: lower-alpha;"><li>Pemerintahan desa<ul><li>Aparat desa = 9 orang</li><li>Pendidikan Kepala Desa = SMA</li><li>Pendidikan Sekretaris Desa = SMP</li><li>Dusun = 3 dusun</li><li>RT = 23 RT</li></ul></li><li>Badan Perwakilan Desa<ul><li>Anggota = 9 orang</li><li>Pendidikan ketua BPD = SMA<br /><br /></li></ul></li></ol></li><li>Lembaga kemasyarakatan<ol style="list-style-type: lower-alpha;"><li>LPM<ul><li>Anggota = 10 orang</li></ul></li><li>PKK<ul><li>Anggota = 12 orang<br /><br /></li></ul></li></ol></li><li>Lembaga politik<ol style="list-style-type: lower-alpha;"><li>Partai Bulan Bintang</li><li>Partai Kesejahteraan Rakyat<br /><br /></li></ol></li><li>Lembaga ekonomi<ol style="list-style-type: lower-alpha;"><li>Koperasi = 2 unit</li><li>Toko/Swalayan = 2 unit</li><li>Warung kelontongan = 12 unit</li><li>Pasar = 2 unit</li><li>Kelompok simpan pinjam = 9 unit<br /><br /></li></ol></li><li>Lembaga pendidikan<ol style="list-style-type: lower-alpha;"><li>Taman kanak &ndash; kanak&nbsp; = 1 unit<ul><li>Guru = 3 orang</li><li>Murid = 37 orang</li></ul></li><li>SD/Sederajat = 3 unit<ul><li>Guru = 30 orang</li></ul></li><li>SLTP/Sederajat = 1 unit<ul><li>Guru = 12 orang</li></ul></li><li>SMA/Sederajat = 1 unit<br /><br /></li></ol></li><li>Lembaga adat<ol style="list-style-type: lower-alpha;"><li>Paser = 1 unit</li><li>Jawa = 1 unit</li><li>Sunda = 1 unit<br /><br /></li></ol></li><li>Lembaga keamanan<ol style="list-style-type: lower-alpha;"><li>Poskamling = 23 unit</li><li>Hansip = 12 orang</li></ol></li></ol>',
                'authorId'      => '1',
                'status'        => '1',
                'comment'       => '0',
                'created_at'    => new DateTime, 
                'updated_at'    => new DateTime
            ],
            [
                'id'            => '6',
                'categoryId'    => '11',
                'title'         => 'Sarana & Prasarana',
                'alias'         => 'sarana-prasarana',
                'content'       => '<ol><li>Sarana olahraga<ol style="list-style-type: lower-alpha;"><li>Lapangan voli = 1 buah</li><li>Lapangan sepak bola = 2 buah</li><li>Lapangan bulu tangkis = 1 buah</li><li>Lapangan tenis meja = 2 buah</li></ol></li><li>Prasarana perhubungan<ol style="list-style-type: lower-alpha;"><li>Jalanan penghubung = 10 Km</li><li>Jalanan desa = Sekitar 25 Km</li><li>Jembatan = 4 buah</li><li>Gorong - gorong = 4 buah</li></ol></li><li>Pertamanan dan lingkungan hidup</li><li>Pemerintahan<ol style="list-style-type: lower-alpha;"><li>Kantor Kepala Desa = 1 buah</li><li>Kantor PKK = 1 buah</li><li>Kantor BPD = 1 buah</li><li>Kantor LPM = 1 buah</li><li>Balai Desa = 1 buah</li></ol></li><li>Pendidikan<ol style="list-style-type: lower-alpha;"><li>TK = 1 unit</li><li>TK Al - qur&rsquo;an = 5 unit</li><li>SD = 3 unit</li><li>SMP = 1 unit</li><li>SMA = 1 unit</li></ol></li><li>Peribadatan<ol style="list-style-type: lower-alpha;"><li>Masjid = 6 buah</li><li>Mushalla= 10 buah</li></ol></li><li>Kesehatan<ol style="list-style-type: lower-alpha;"><li>Puskesmas = 1 unit</li><li>Posyandu = 10 unit</li></ol></li></ol>',
                'authorId'      => '1',
                'status'        => '1',
                'comment'       => '0',
                'created_at'    => new DateTime, 
                'updated_at'    => new DateTime
            ],
            [
                'id'            => '7',
                'categoryId'    => '12',
                'title'         => 'Prestasi Desa',
                'alias'         => 'prestasi-desa',
                'content'       => '<h1>- Juara 1</h1><h3>Lomba Desa Tingkat Kecamatan Tahun 2011</h3><h1>- Juara 1</h1><h3>Lomba Kepala Desa Berprestasi Tingkat Kabupaten Tahun 2011</h3><h1>- Juara 1</h1><h3>Lomba Kepala Desa Berprestasi Tingkat Provinsi Tahun 2011</h3><h2>- <strong>Dan lain - lain</strong></h2>',
                'authorId'      => '1',
                'status'        => '1',
                'comment'       => '0',
                'created_at'    => new DateTime, 
                'updated_at'    => new DateTime
            ],


            
		];

        // Lakuka sekarang
        DB::table('articles')->insert($Articles);
    }

}