<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('products')->insert([
	        	'name' => 'Momiku Baby Jumper Bayi Basic Tone 0 - 3 tahun',
	        	'deskripsi' => 'Hi Moms , Welcome to Momiku !
				Baju bayi Jumper untuk umur 0-3 tahun 
				( sebelum checkout , pilih ukuran dulu ya )

				Cek ig kita di : Momiku_id ya ❤️untuk banyak info2 terupdate seputar moms and baby 

				Size 	Kisaran Umur	LD ( cm )	PB ( cm )
				XS	         0-6 bulan	             24	             38
				S 	         6-12 bulan 	             26	             40
				M	        1-2 tahun 	             28	             44
				L          	2-3 tahun                     30	              47

				Jumper  untuk si kecil gerak lebih leluasa 🤗

				Pastikan sebelum membeli di cek dulu ukurannya ya moms ^^

				Bahan katun 100% adem , si kecil nyaman bergerak !

				Apabila ada kendala dalam berbelanja atau barang yang di terima tidak sesuai , jangan langsung beri bintang jelek ya moms , Chat langsung ke CS kami , di jamin semua kendala akan terselesaikan dengan baik moms ! 😉😉


				Happy Shopping ! 
				',
	        	'variant_warna' => 'Autumn Choco,Kuning,Cream,Tosca,Pink',
	        	'variant_size' => '0-6bln,6-12bln,1-2thn,2-3thn',
	        	'image_url' => 'https://cf.shopee.co.id/file/f7083163e997fb66a5cdd69e94854544,https://cf.shopee.co.id/file/735e4490c19427e5589e5802bab4cb6d,https://cf.shopee.co.id/file/d0d14b9196eb3646847048c311232f5e,https://cf.shopee.co.id/file/d954088fb42dd08fb46b109c230ecf71,https://cf.shopee.co.id/file/da46fe423c6bb553c70d6071128ec510',
	        	'start_price' => '79000',
	        	'final_price' => '69000',
	        	'type' => '1'
	        ],
	        
	        
    	);

		DB::table('products')->insert([
	        	'name' => 'Momiku Baby Romper Bayi Basic Tone Jumper 0-3 tahun',
	        	'deskripsi' => 'Hi Moms , Welcome to Momiku !
					Baju bayi Romper untuk umur 0-3 tahun 
					( sebelum checkout , pilih ukuran dulu ya )

					Cek ig kita di : Momiku_id ya ❤️untuk banyak info2 terupdate seputar moms and baby 

					Size 	Kisaran Umur	LD ( cm )	PB ( cm )
					XS              	0-6 bulan	   24                40
					S              	6-12 bulan        26	                   43
					M            	1-2 tahun 	   28	       46,6
					L              	2-3 tahun 	   30	       49,5

					Romper untuk si kecil gerak lebih leluasa 🤗

					Pastikan sebelum membeli di cek dulu ukurannya ya moms ^^

					Bahan katun 100% adem , si kecil nyaman bergerak !

					Apabila ada kendala dalam berbelanja atau barang yang di terima tidak sesuai , jangan langsung beri bintang jelek ya moms , Chat langsung ke CS kami , di jamin semua kendala akan terselesaikan dengan baik moms ! 😉😉


					Happy Shopping ! 
 				',
	        	'variant_warna' => 'Autumn Choco,Kuning,Cream,Tosca,Pink',
	        	'variant_size' => '0-6bln,6-12bln,1-2thn,2-3thn',
	        	'image_url' => 'https://cf.shopee.co.id/file/8a14fbda55dcddc16fa95793fab5638c,https://cf.shopee.co.id/file/cfd3f06eeb9172a0cea978be1c7b5d11,https://cf.shopee.co.id/file/ef1aa91765f4cd49a8eb91724902e335',
	        	'start_price' => '79000',
	        	'final_price' => '69000',
	        	'type' => '2'
	        ],);
		DB::table('products')->insert([
	        	'name' => 'Momiku Dress Anak Bayi Basic Tone Umur 0-3th',
	        	'deskripsi' => 'Hi Moms , Welcome to Momiku !
					Dress anak untuk umur 0-3 tahun 
					( sebelum checkout , pilih ukuran dulu ya )

					Cek ig kita di : Momiku_id ya ❤️untuk banyak info2 terupdate seputar moms and baby 

					Size 	Kisaran Umur	LD ( cm )	PB ( cm )
					XS	0-6 bulan	24	38
					S 	6-12 bulan 	26	40
					M	1-2 tahun 	28	42
					L	2-3 tahun 	30	44
								

					Dress manis untuk si kecil makin cantik 🤗

					Pastikan sebelum membeli di cek dulu ukurannya ya moms ^^

					Bahan katun 100% adem , si kecil nyaman bergerak !

					Apabila ada kendala dalam berbelanja atau barang yang di terima tidak sesuai , jangan langsung beri bintang jelek ya moms , Chat langsung ke CS kami , di jamin semua kendala akan terselesaikan dengan baik moms ! 😉😉


					Happy Shopping ! 
 				',
	        	'variant_warna' => 'Autumn Choco,Kuning,Cream,Tosca,Pink',
	        	'variant_size' => '0-6bln,6-12bln,1-2thn,2-3thn',
	        	'image_url' => 'https://cf.shopee.co.id/file/011619a45b5ac2c180bebf233b8ee94d,https://cf.shopee.co.id/file/933bb3ac72a7ed990ee59ba647417d0e,https://cf.shopee.co.id/file/6b34e5d84fd688fbec3032107fd4e3af,https://cf.shopee.co.id/file/a2e68afd5309054ed7c2a43a8312572d',
	        	'start_price' => '89000',
	        	'final_price' => '79000',
	        	'type' => '3'
	        ]);

		DB::table('products')->insert([
	        	'name' => 'Momiku 1 Set Baju Bayi Daily Basic Tone Umur 0-3th',
	        	'deskripsi' => 'Hi Moms , Welcome to Momiku !
					Baju bayi untuk umur 0-3 tahun 
					( sebelum checkout , pilih ukuran dulu ya )

					Cek ig kita di : Momiku_id ya ❤️untuk banyak info2 terupdate seputar moms and baby 

					1 Set Baju + Celana untuk si kecil gerak lebih leluasa 🤗


					Size 	Kisaran Umur	LD ( cm )	PB ( cm )	
					XS	0-6 bulan	24	30	
					S 	6-12 bulan 	26	32	
					M	1-2 tahun 	28	34	
					L	2-3 tahun 	30	36	
									
					Celana				
					Size 	Kisaran Umur	LP ( cm )	PC ( cm )	
					XS	0-6 bulan	20	21	
					S 	6-12 bulan 	21	23	
					M	1-2 tahun 	22	24	
					L	2-3 tahun 	24	25	

					Pastikan sebelum membeli di cek dulu ukurannya ya moms ^^

					Bahan katun 100% adem , si kecil nyaman bergerak !

					Apabila ada kendala dalam berbelanja atau barang yang di terima tidak sesuai , jangan langsung beri bintang jelek ya moms , Chat langsung ke CS kami , di jamin semua kendala akan terselesaikan dengan baik moms ! 😉😉


					Happy Shopping !
 				',
	        	'variant_warna' => 'Autumn Choco,Kuning,Cream,Tosca,Pink',
	        	'variant_size' => '0-6bln,6-12bln,1-2thn,2-3thn',
	        	'image_url' => 'https://cf.shopee.co.id/file/a59df1fcbda57080db9e7f5f49ad59cf,https://cf.shopee.co.id/file/da8c29c7453fb708436cd04bcb3a4621,https://cf.shopee.co.id/file/ffe3d83ae0261a0a2461421eb7141cdb,https://cf.shopee.co.id/file/461bca659400603b038b532b759c39ba',
	        	'start_price' => '89000',
	        	'final_price' => '79000',
	        	'type' => '4'
	        ]);

		DB::table('products')->insert([
	        	'name' => 'Momiku Baby Sleeveless Jumper Bayi Basic Tone Umur 0-3th',
	        	'deskripsi' => 'Hi Moms , Welcome to Momiku !
					Baju bayi Jumper untuk umur 0-3 tahun 
					( sebelum checkout , pilih ukuran dulu ya )

					Cek ig kita di : Momiku_id ya ❤️untuk banyak info2 terupdate seputar moms and baby 

					Size 	Kisaran Umur	LD ( cm )	PB ( cm )
					XS	         0-6 bulan	             24	             38
					S 	         6-12 bulan 	             26	             40
					M	        1-2 tahun 	             28	             44
					L          	2-3 tahun                     30	              47

					Jumper tangan buntung untuk si kecil gerak lebih leluasa 🤗

					Pastikan sebelum membeli di cek dulu ukurannya ya moms ^^

					Bahan katun 100% adem , si kecil nyaman bergerak !

					Apabila ada kendala dalam berbelanja atau barang yang di terima tidak sesuai , jangan langsung beri bintang jelek ya moms , Chat langsung ke CS kami , di jamin semua kendala akan terselesaikan dengan baik moms ! 😉😉


					Happy Shopping ! 
 				',
	        	'variant_warna' => 'Autumn Choco,Kuning,Cream,Tosca,Pink',
	        	'variant_size' => '0-6bln,6-12bln,1-2thn,2-3thn',
	        	'image_url' => 'https://cf.shopee.co.id/file/7ecee0790b7c2282d228ab0cc5dce5b2,https://cf.shopee.co.id/file/4ad09b628112acd64d99a8901763168b,https://cf.shopee.co.id/file/698a662a28eb1d8cb932809fba469f69,https://cf.shopee.co.id/file/da46fe423c6bb553c70d6071128ec510',
	        	'start_price' => '89000',
	        	'final_price' => '75000',
	        	'type' => '5'
	        ]);
    }
}
