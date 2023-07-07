<?php

namespace Database\Seeders;

use App\Models\Item;
use Illuminate\Database\Seeder;

class ItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Item::create([
            'item_name' => "Kol",
            'item_desc'=> "Bagi Anda pecinta lalapan, tentu tak asing ya dengan sayuran jenis ini. Sayuran kol memang tetap nikmat meski dikonsumsi mentah.",
            'price'=> 10000,
            'display_picture_link'=> "img/kol.jpg"
        ]);

        Item::create([
            'item_name' => "Brokoli",
            'item_desc'=> "Meskipun berasal dari Italia, kini Anda dapat dengan mudah menemukan brokoli di pasaran. Brokoli memiliki bunga berwarna hijau.",
            'price'=> 13000,
            'display_picture_link'=> "img/brokoli.jpg"
        ]);

        Item::create([
            'item_name' => "Sawi Caisim",
            'item_desc'=> "Ada begitu banyak jenis sawi yang dapat Anda temukan di Indonesia, lho. Salah satu yang paling populer adalah sawi caisim.",
            'price'=> 7000,
            'display_picture_link'=> "img/caisim.jpg"
        ]);

        Item::create([
            'item_name' => "Kailan",
            'item_desc'=> "Meskipun merupakan jenis sayuran baru yang hadir di Indonesia, tetapi kini kailan telah menjadi kegemaran bagi sebagian masyarakat. Bahkan kailan pun semakin banyak dibudidaya oleh petani. ",
            'price'=> 9000,
            'display_picture_link'=> "img/kailan.jpg"
        ]);

        Item::create([
            'item_name' => "Daun Singkong",
            'item_desc'=> "Sayuran hijau ini sangat mudah dijumpai di pasaran. Daun singkong merupakan salah satu jenis sayuran yang dapat diolah menjadi berbagai masakan sederhana. ",
            'price'=> 5000,
            'display_picture_link'=> "img/singkong.jpg"
        ]);

        Item::create([
            'item_name' => "Bayam Hijau",
            'item_desc'=> "Anda pasti sudah tidak asing lagi ya dengan sayuran yang satu ini? Bayam memang sangat mudah ditemukan dan diolah ke dalam aneka masakan. ",
            'price'=> 6000,
            'display_picture_link'=> "img/bayamhijau.jpg"
        ]);

        Item::create([
            'item_name' => "Bayam Merah",
            'item_desc'=> "Sebagian besar orang kini sudah banyak yang mengenali bayam merah. Namun, ternyata masih ada yang belum terbiasa mengonsumsinya.",
            'price'=> 6000,
            'display_picture_link'=> "img/bayammerah.jpg"
        ]);

        Item::create([
            'item_name' => "Kangkung",
            'item_desc'=> "Sama seperti bayam, kangkung juga termasuk sayuran yang sangat mudah ditemukan di pasaran. Kangkung juga dapat diolah menjadi aneka masakan.",
            'price'=> 7000,
            'display_picture_link'=> "img/kangkung.jpg"
        ]);

        Item::create([
            'item_name' => "Kacang Panjang",
            'item_desc'=> "Sayuran hijau yang banyak ditemukan di Indonesia berikutnya adalah kacang panjang. Biasanya kacang panjang sering dimasak dengan cara ditumis atau dibuat lalapan.",
            'price'=> 9000,
            'display_picture_link'=> "img/kacangpanjang.jpg"
        ]);

        Item::create([
            'item_name' => "Buncis",
            'item_desc'=> "Buncis merupakan sayuran hijau selanjutnya yang banyak dikonsumsi oleh masyarakat Indonesia, terutama diolah sebagai tumisan atau bahan lalapan.",
            'price'=> 5000,
            'display_picture_link'=> "img/buncis.jpg"
        ]);

        Item::create([
            'item_name' => "Pare",
            'item_desc'=> "Apakah Anda termasuk yang menghindari mengonsumsi sayuran hijau satu ini? Pare memang banyak dihindari karena memiliki rasa pahit. Tapi siapa sangka, ternyata pare cukup banyak digunakan dalam sajian kuliner Asia Tenggara, lho.",
            'price'=> 10000,
            'display_picture_link'=> "img/pare.jpg"
        ]);

        Item::create([
            'item_name' => "Timun",
            'item_desc'=> "Sayuran satu ini memiliki peranan yang cukup penting dalam sajian masakan. Karena selain dihidangkan sebagai lalapan atau campuran berbagai makanan, kini timun juga bisa menjadi salah satu bahan campuran membuat infused water.",
            'price'=> 10000,
            'display_picture_link'=> "img/timun.jpg"
        ]);

        Item::create([
            'item_name' => "Seledri",
            'item_desc'=> "Pemakaiannya sebagai sayuran tidak begitu banyak digunakan di Indonesia. Seledri masih banyak digunakan sebagai penyegar (seperti rempah-rempah) untuk membuat campuran bakmi, sop, dan makanan lainnya.",
            'price'=> 5000,
            'display_picture_link'=> "img/seledri.jpg"
        ]);

        Item::create([
            'item_name' => "Labu Siam",
            'item_desc'=> "Sayuran dengan bentuk seperti buah pir ini memang banyak dikonsumsi masyarakat Indonesia dan dijadikan lalapan ataupun sayur yang dimasak dengan santan.",
            'price'=> 7000,
            'display_picture_link'=> "img/labusiam.jpg"
        ]);

        Item::create([
            'item_name' => "Kemangi",
            'item_desc'=> "Seperti seledri, daun kemangi juga lebih banyak digunakan sebagai salah satu bahan rempah untuk mengharumkan masakan. Bahkan sayuran ini sering dijadikan sebagai lalapan khas Sunda yang disantap bersama ikan bakar atau ayam bakar.",
            'price'=> 4000,
            'display_picture_link'=> "img/kemangi.jpg"
        ]);

    }
}
