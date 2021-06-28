<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('articles')->insert([
            [
                'id'=>1,
                'user_id'=>1,
                'category_id'=>1,
                'title'=>'Pantai Kuta, Bali',
                'description'=>'Siapa yang tidak  mengenal  Pantai Kuta? Banyak ungkapan bahwa jika anda belum menginjakkan kaki di pantai Kuta, berarti belum berkunjung ke Bali. Salah satu pantai yang berlokasi di Bali, Indonesia yang sudah sangat terkenal dan mendunia. Terdapat banyak aktifitas yang bisa dilakukan di pantai kuta, mulai dari berjemur di pasir putih, berselancar dengan ombak yang dapat dinikmati mulai dari peselancar amatir sampai dengan peselancar profesional. Pantai Kuta sendiri mempunyai banyak spot-spot foto yang instagramable buat para wisatawan yang ingin mengabadikan setiap moment yang ada.

                Dengan hanya berjalan kaki selama 2 menit dari Best Western Kuta Beach, maka akan tiba di Pantai Kuta yang merupakan tujuan wisata yang paling terkenal di Pulau Bali. Keindahan pantai yang terus terjaga dengan pasir putih yang selalu bersih, air laut yang selalu biru jernih lengkap dengan deburan ombak yang sangat menyegarkan. Pantai kuta pun merupakan tempat terbaik untuk melihat dan menikmati  matahari terbenam, dapat pula dinikmati langsung dari kamar atau pun sky lounge daripada Best Western Kuta Beach.
                
                Bagi wisatawan yang senang dengan hingar bingar dunia malam, daerah Kuta merupakan tempat yang cocok, karena terdapat banyak hiburan malam, mulai dari Bar & Lounge dengan suasana yang menenangkan, atau mungkin anda ingin menikmati dunia malam yang lebih ramai dengan dendangan musik yang lebih cepat  seperti club malam.',
                'image'=>'images/101.jpg'
            ],
            [
                'id'=>2,
                'user_id'=>1,
                'category_id'=>1,
                'title'=>'Pantai Jimbaran, Bali',
                'description'=>'Selain Pantai Kuta, Pantai Jimbaran juga menjadi salah satu destinasi populer di Pulau Bali. Hampir setiap hari kawasan ini dipenuhi oleh wisatawan, baik lokal maupun mancanegara. Hal ini tak terlepas dari pesona Pantai Jimbaran yang dikelilingi deretan restoran dan kafe untuk wisata kuliner ataupun sekadar tempat nongkrong.

                Meski dikenal sebagai pusar kuliner seafood di Bali, Pantai Jimbaran juga menawarkan beragam pesona dan aktivitas lainnya bagi wisatawan. Mulai dari memancing ikan hingga bermain olahraga air, semua bisa kamu coba satu per satu di sini. Yuk, simak ulasan berikut ini!',
                'image'=>'images/102.jpg'
            ],
            [
                'id'=>3,
                'user_id'=>1,
                'category_id'=>1,
                'title'=>'Pink Beach, Labuan Bajo',
                'description'=>'Pink beach atau pantai pink yang berada di Labuan Bajo, Nusa Tenggara Timur, merupakan salah satu surga wisata di Indonesia. Dengan pasir yang berwarna pink dan birunya air laut, banyak wisatawan yang datang dari domestik maupun mancanegara. Warna pink pada pasirnya sendiri berasal dari butir-butir asli warna putih pasir, bercampur dengan terumbu karang berwarna merah yang sudah mati. bernama homotrema rubrum. Untuk datang kemari kamu harus menempuh perjalanan darat dan laut karena letaknya yang ada di Pulau Komodo. Pantai ini berjarak 82 kilometer dari Kota Mataram.',
                'image'=>'images/103.jpg'
            ],
            [
                'id'=>4,
                'user_id'=>1,
                'category_id'=>1,
                'title'=>'Crystal Bay Beach, Nusa Penida',
                'description'=>'Seperti namanya, Crystal Bay Beach menjanjikan air sebening kristal dan panorama yang indah. Dikenal sebagai surganya para diver, kamu pun bisa mencoba menyelam dan menyaksikan kekayaan flora dan fauna bawah laut Indonesia. Jika sudah puas, cobalah berkeliling di sekitar pantai karena banyak banget spot-spot foto yang bagus buat dipajang di media sosialmu.',
                'image'=>'images/104.jpg'
            ],
            [
                'id'=>5,
                'user_id'=>1,
                'category_id'=>1,
                'title'=>'Diamond Beach, Nusa Penida',
                'description'=>'Sebelum aksesnya dibuka tahun 2018 kemarin, Diamond Beach ini hanya bisa kamu nikmati dari atas tebing saja. Sekarang sudah ada tangga batu yang bakal mengantarkan kamu menikmati langsung segarnya air laut berwarna toska sekaligus mengabadikan keindahannya melalui foto-foto cantik! Disebut Diamond Beach karena terdapat karang yang bentuknya mirip berlian',
                'image'=>'images/105.jpg'
            ],
            [
                'id'=>6,
                'user_id'=>2,
                'category_id'=>1,
                'title'=>'Pantai Nusa Dua, Bali',
                'description'=>'Pantai Nusa Dua berlokasi tak jauh dari Bandara Internasional Ngurah Rai. Letaknya bersebelahan dengan Pantai Tanjung Benoa yang menjadi pusat obyek wisata olahraga air yang menantang dan membutuhkan modal keberanian seperti parasailing, banana boat, jet ski dan snorkeling.

                Pantai yang ada di Nusa Dua sering dianggap sebagai satu pantai, terutama bagi wisatawan luar negeri yang jelas belum paham. Tapi sebenarnya, pantai di Nusa Dua terdiri dari beberapa pantai, yaitu Pantai Samuh yang paling utara, Pantai Mengiat, Pantai Geger, dan Pantai Sawangan.',
                'image'=>'images/106.jpg'
            ]
        ]);
    }
}
