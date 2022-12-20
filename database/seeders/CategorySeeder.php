<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::insert([
            [
                'name' => 'Startup',
                'icon' => 'fa fa-briefcase',
                'image' => 'STARTUP.jpeg',
                'description' => 'Startup adalah sebuah usaha yang baru berjalan dan menerapkan inovasi teknologi untuk menjalankan core business-nya dan memecahkan sebuah masalah di masyarakat.  Bisnis itu juga memiliki sifat disruptive di dalam sebuah pasar/industri yang sudah ada atau bahkan menciptakan sebuah industri baru.'
            ],
            [
                'name' => 'Arsitektur',
                'icon' => 'fa-solid fa-compass-drafting',
                'image' => 'ARSITEKTUR.jpeg',
                'description' => 'Kegiatan kreatif yang berhubungan dengan jasa desain bangunan, perencanaan biaya, kontruksi, konservasi bangunan warisan, pengawasan konstruksi baik secara menyeluruh dari level makro (town planning, urban design, landscape architecture) hingga dengan level mikro (detail konstruksi, seperti arsitektur taman, desain interior).'
            ],
            [
                'name' => 'Desain Interior',
                'icon' => 'fa fa-house',
                'image' => 'DESIGN INTERIOR.jpeg',
                'description' => 'Masyarakat mulai mengapresiasi estetika ruangan secara lebih baik. Penggunaan jasa desainer interior untuk merancang estetika interior hunian, hotel, dan perkantoran pun semakin meningkat. Sudah jelas bahwa potensi ekonomi dari industri desain interior sangat menjanjikan. Itu bisa menjadi momentum positif bagi sub sektor desain interior yang tidak boleh disia-siakan.'
            ],
            [
                'name' => 'Musik',
                'icon' => 'fa fa-music',
                'image' => 'MUSIK.jpeg',
                'description' => 'Kegiatan kreatif yang berhubungan dengan kreasi/komposisi, pertunjukan, reproduksi, dan distribusi dari rekaman suara atau lagu.'
            ],
            [
                'name' => 'Seni Rupa',
                'icon' => 'fa fa-chess',
                'image' => 'SENI RUPA.jpeg',
                'description' => 'Bidang seni rupa dalam ekonomi kreatif meliputi segala kegiatan kreatif dalam perdagangan barang-barang unik, langka, otentik, dan memiliki nilai estetika yang tinggi. Maupun pameran seni rupa yang menarik.'
            ],
            [
                'name' => 'Desain Produk',
                'icon' => 'fa-solid fa-cubes',
                'image' => 'DESAIN PRODUK.webp',
                'description' => 'Desain produk merupakan proses kreasi sebuah produk yang menggabungkan unsur fungsi dengan estetika sehingga bermanfaat dan memiliki nilai tambah bagi masyarakat.'
            ],
            [
                'name' => 'Fashion',
                'icon' => 'fa fa-glasses',
                'image' => 'FASHION.jpeg',
                'description' => 'Dalam dunia fashion, tren pakaian selalu mengikuti zaman, sehingga selalu muncul tren yang baru. Semakin banyak tren pakaian, maka semakin banyak juga pilihan produk-produk fashion yang cocok dengan diri kita. Usaha fashion bisa dijadikan sebagai usaha ekonomi kreatif, Karena dalam membuat produk fashion dibutuhkan ide-ide kreatif dari seorang desainer agar tidak kalah bersaing dengan desainer lainnya. Selain itu, Indonesia sudah memiliki produk fashion yang sudah dikenal oleh masyarakat dunia, yaitu batik, sehingga usaha ini sangat cocok dengan ekonomi kreatif.'
            ],
            [
                'name' => 'Kuliner',
                'icon' => 'fa-solid fa-utensils',
                'image' => 'gudeg.png',
                'description' => 'Kuliner adalah istilah yang sering kali dikatakan sebuah olahan makanan atau masakan. 
                Kuliner juga bisa membantu meningkatkan sektor ekonomi kreatif. Salah satunya terdapat
                pada Sub Sektor E-Kraf di Jember. Industri kuliner dengan beragam bisnis kuliner,
                mampu menyumbangkan presentasi besar dalam pertumbuhan dan perkembangan ekonomi.'
            ],
            [
                'name' => 'Film',
                'icon' => 'fa-solid fa-film',
                'image' => 'FILM.webp',
                'description' => 'Film adalah salah satu industri kreatif berupa tontonan yang punya peran menghibur, itu adalah fungsi yang paling konkret dan mudah. Sebenarnya, film bukan hanya berfungsi sebagai tontonan atau hiburan, ia memiliki banyak fungsi yang lain. Film sebagai teknologi layar kini bisa digunakan untuk komunikasi sosial, iklan, kampanye politik, seminar akademis, dan aktifitas pendidikan. Sekarang film sudah menjadi bahasa komunikasi yang umum. '
            ],
            [
                'name' => 'Animasi dan Video',
                'icon' => 'fa-solid fa-video',
                'image' => 'ANIMASI DAN VIDEO.webp',
                'description' => 'Kegiatan kreatif yang berkaitan dengan kreasi produksi video, film dan jasa fotografi, serta distribusi rekaman video dan film. Termasuk didalamnya penulisan skrip, dubbing film, sinematografi, sinetron, eksibisi film.'
            ],
            [
                'name' => 'Fotografi',
                'icon' => 'fa-solid fa-camera',
                'image' => 'FOTOGRAFI.webp',
                'description' => 'Fotografi di dalam pengembangan ekonomi kreatif di Indonesia didefinisikan sebagai Industri yang mendorong penggunaan kreativitas, keterampilan, dan bakat individu dalam memproduksi citra dari satu objek foto dengan menggunakan perangkat fotografi, termasuk di dalamnya media perekam cahaya, media penyimpan berkas, serta media yang menampilkan informasi untuk meningkatkan kesejahteraan dan menciptakan kesempatan kerja. '
            ],
            [
                'name' => 'Desain Komunikasi Visual',
                'icon' => 'fa-solid fa-palette',
                'image' => 'DESAIN KOMUNIKASI VISUAL.webp',
                'description' => 'Desain Komunikasi Visual (DKV)  sangat penting dalam mendukung pertumbuhan bisnis pengusaha swasta, pemilik merek bahkan kelancaran program pemerintah. Potensi pasar internal sangat menjanjikan, terutama dengan semakin banyaknya  DKV lokal yang memiliki pemahaman yang lebih baik tentang situasi, pengetahuan, dan nilai pasar lokal.  Potensi ini masih perlu ditingkatkan, seperti kesadaran pasar akan pentingnya desain.'
            ],
            [
                'name' => 'Televisi dan Radio',
                'icon' => 'fa-solid fa-radio',
                'image' => 'tv dan radio 4.jpg',
                'description' => 'Kegiatan kreatif yang berhubungan dengan usaha kreasi, produksi dan pengemasan, acara televisi, penyiaran, dan transmisi konten acara televisi dan radio, termasuk kegiatan station relay siaran radio dan televisi.'
            ],
            [
                'name' => 'Kriya',
                'icon' => 'fa-sharp fa-solid fa-paper-plane',
                'image' => 'kriya1.webp',
                'description' => 'Kriya didefinisikan sebagai produk yang diproduksi dengan menggunakan tangan secara keseluruhan atau dengan bantuan alat. Alat mekanis dan/atau digital dapat digunakan selama kontribusi manual langsung dari pembuatnya tetap merupakan komponen paling substansial dari produk jadi. Kriya dibuat dari bahan baku yang diambil secara ramah lingkungan dan/atau didaur ulang serta dapat direproduksi secara komersial tanpa melanggar integritas ciptaan, produk tersebut dapat bersifat utilitarian, estetis, artistik, kreatif, ekspresif budaya, dekoratif, fungsional, tradisional, mengandung nilai religi dan simbolis serta signifikan secara sosial.'
            ],
            [
                'name' => 'Periklanan',
                'icon' => 'fa-solid fa-bullhorn',
                'image' => 'periklanan1.jpeg',
                'description' => 'Kegiatan kreatif yang berhubungan dengan jasa periklanan (komunikasi satu arah menggunakan medium tertentu), mencakup proses kreasi, produksi dan distribusi dari iklan yang dihasilkan, seperti riset pasar, perencanaan komunikasi iklan, iklan luar ruang, produksi material iklan, promosi kampanye relasi publik, tampilan iklan di media cetak (surat kabar, majalah) dan elektronik (televisi dan radio), pemasangan berbagai poster dan gambar, penyebaran selebaran, pamflet, edaran, brosur dan reklame sejenis, distribusi dan delivery advertising materials atau sampel, serta penyewaan kolom untuk iklan.'
            ],
            [
                'name' => 'Seni Pertunjukan',
                'icon' => 'fa-solid fa-masks-theater',
                'image' => 'Seni pertunjukan 1.jpg',
                'description' => 'Kegiatan kreatif yang berhubungan dengan usaha pengembangan konten, produksi pertunjukan (misalnya: pertunjukan balet, tarian tradisional, tarian kontemporer, drama, musik tradisional, musik teater, opera, termasuk tur musik etnik), desain dan pembuatan busana pertunjukan, tata panggung dan tata pencahayaan.'
            ],
            [
                'name' => 'Aplikasi dan Game',
                'icon' => 'fa-solid fa-gamepad',
                'image' => 'APLIKASI.webp',
                'description' => 'Bidang layanan komputer dan perangkat lunak atau aplikasi dalam ekonomi kreatif meliputi berbagai kegiatan terkait pengembangan teknologi informasi, seperti pemrosesan data, integrasi sistem, pengembangan software, hingga analisis sistem.  Bidang pengembangan game interaktif dalam ekonomi kreatif meliputi kegiatan penciptaan, produksi, hingga distribusi berbagai video game dengan beragam tema. Penciptaan video game ini memiliki tujuan utama sebagai media yang sifatnya hiburan dan pendidikan. '
            ],
        ]);
    }
}
