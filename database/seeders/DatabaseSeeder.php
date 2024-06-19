<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Peta;
use App\Models\Umkm;
use App\Models\User;
use App\Models\Agama;
use App\Models\Situs;
use App\Models\Berita;
use App\Models\Kontak;
use App\Models\Slider;
use App\Models\Sejarah;
use App\Models\Wilayah;
use App\Models\Kategori;
use App\Models\VisiMisi;
use App\Models\Pekerjaan;
use App\Models\PostStatus;
use App\Models\VideoProfil;
use App\Models\JenisKelamin;
use App\Models\PerangkatDesa;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::create([
            'foto'      => 'img-profil/user-1.jpg',
            'name'      => 'admin',
            'email'     => 'admin@gmail.com',
            'password'  => 1234
        ]);

        Slider::create([
            'judul'         => 'Website Desa Pangadegan',
            'deskripsi'     => 'Desa Pangadegan adalah desa yang terletak di kecamatan Rancakalong, Kabupaten Sumedang, Provinsi Jawa Barat, Kode Pos 45361' ,
            'link_btn'      => '#',
            'img_slider'    => 'img-slider/s666aba9d556cd.JPG',
        ]);
        Slider::create([
            'judul'         => 'Sejarah Desa',
            'deskripsi'     => 'Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.',
            'link_btn'      => '#',
            'img_slider'    => 'img-slider/666981df9f830.jpg'
        ]);
        Slider::create([
            'judul'         => 'Visi & Misi',
            'deskripsi'     => 'Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.',
            'link_btn'      => '#',
            'img_slider'    => 'img-slider/666981fb91efa.JPG'
        ]);

        PostStatus::create([
            'status'    => 'draft'
        ]);
        PostStatus::create([
            'status'    => 'publish'
        ]);

        Kategori::create([
            'kategori'  => 'Teknologi',
            'slug'      => 'teknologi',
            'user_id'   => 1
        ]);
        Kategori::create([
            'kategori'  => 'Kesenian',
            'slug'      => 'kesenian',
            'user_id'   => 1
        ]);
        Kategori::create([
            'kategori'  => 'Sosial',
            'slug'      => 'Sosial',
            'user_id'   => 1
        ]);

        Wilayah::create([
            'judul' => 'Wilayah Desa Pangadegan',
            'body'  => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum',
            'user_id'   => 1
        ]);

        Sejarah::create([
            'judul' => 'Sejarah Desa Kragilan',
            'body'  => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum',
            'user_id'   => 1
        ]);

        VisiMisi::create([
            'visi'      =>  'Terwujudnya Desa Pangadegan yang sejahtera, mandiri, dan berbudaya',
            'misi'      =>  ' - Meningkatkan perekonomian masyarakat melalui pengembangan potensi pertanian, perkebunan, dan pariwisata
                            - Meningkatkan kualitas sumber daya manusia melalui pendidikan dan kesehatan
                            - Meningkatkan kesadaran masyarakat akan pentingnya kelestarian lingkungan',
            'user_id'   => 1
        ]);

        PerangkatDesa::create([
            'nama'      => 'Citra',
            'foto'      => 'img-perangkat/666a4ef5261b7.jpeg',
            'jabatan'   => 'Kepala Desa',
            'user_id'   => 1
        ]);
        PerangkatDesa::create([
            'nama'      => 'Dewi',
            'foto'      => 'img-perangkat/666a4ee7bad49.jpeg',
            'jabatan'   => 'Sekretaris Desa',
            'user_id'   => 1
        ]);
        PerangkatDesa::create([
            'nama'      => 'Aini',
            'foto'      => 'img-perangkat/666a4dee2ca1f.jpeg',
            'jabatan'   => 'Kepala Urusan Umum',
            'user_id'   => 1
        ]);
        PerangkatDesa::create([
            'nama'      => 'Dani',
            'foto'      => 'img-perangkat/666a4e81c8838.jpeg',
            'jabatan'   => 'Kepala Dusun',
            'user_id'   => 1
        ]);

        Agama::create([
            'agama'     => 'Islam',
            'penganut'  => 100,
            'user_id'   => 1
        ]);
        Agama::create([
            'agama'     => 'Kristen',
            'penganut'  => 30,
            'user_id'   => 1
        ]);
        Agama::create([
            'agama'     => 'Katolik',
            'penganut'  => 20,
            'user_id'   => 1
        ]);
        Agama::create([
            'agama'     => 'Hindu',
            'penganut'  => 10,
            'user_id'   => 1
        ]);
        Agama::create([
            'agama'     => 'Budha',
            'penganut'  => 15,
            'user_id'   => 1
        ]);
        Agama::create([
            'agama'     => 'Konghucu',
            'penganut'  => 6,
            'user_id'   => 1
        ]);

        JenisKelamin::create([
            'jenis_kelamin' => 'Laki-laki',
            'jumlah'        => 70,
            'user_id'       => 1
        ]);
        JenisKelamin::create([
            'jenis_kelamin' => 'Perempuan',
            'jumlah'        => 55,
            'user_id'       => 1
        ]);

        Pekerjaan::create([
            'pekerjaan'     => 'Petani',
            'jumlah'        => 55,
            'user_id'       => 1
        ]);
        Pekerjaan::create([
            'pekerjaan'     => 'Pegawai Negeri',
            'jumlah'        => 14,
            'user_id'       => 1
        ]);
        Pekerjaan::create([
            'pekerjaan'     => 'Belum/Tidak bekerja',
            'jumlah'        => 10,
            'user_id'       => 1
        ]);
        Pekerjaan::create([
            'pekerjaan'     => 'Pensiunan',
            'jumlah'        => 20,
            'user_id'       => 1
        ]);
        Peta::create([
            'judul'         => 'Peta Desa Pangadegan',
            'alamat'        => 'Rancakalong,Rancakalaong, Sumedang',
            'user_id'       => 1
        ]);

        Kontak::create([
            'lokasi'    => 'Pangadegan, Rancakalong, Sumedang',
            'email'     => 'zerreff.io@gmail.com',
            'no_hp'     => '082116179745',
            'user_id'   => 1
        ]);

        // VideoProfil::create([
        //     'url_video' => 'https://www.youtube.com/embed/CCDemVVMzOo',
        //     'user_id'   => 1
        // ]);

        Situs::create([
            'logo'      => 'img-logo/666aba46cba45.png',
            'nm_desa'   => 'Desa Pangadegan',
            'kecamatan' => 'Rancakalong',
            'kabupaten' => 'Sumedang',
            'provinsi'  => 'Jawa Barat',
            'kode_pos'  => 45361,
            'user_id'   =>  1
        ]);
    }
}
