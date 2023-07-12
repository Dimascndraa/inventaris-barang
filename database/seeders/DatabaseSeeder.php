<?php

namespace Database\Seeders;

use App\Models\BarangCategory;
use App\Models\ControlPanel;
use App\Models\Room;
use App\Models\TemplateBarang;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        User::create([
            'name' => 'Dimas Candra',
            'username' => 'd.candra',
            'is_admin' => 1,
            'email' => 'dimascndraa18@gmail.com',
            'password' => bcrypt('password'),
        ]);

        Room::create([
            'name' => "IT",
            'room_code' => "IT",
            'floor' => '1'
        ]);

        Room::create([
            'name' => "MARKETING",
            'room_code' => "MKT",
            'floor' => '1'
        ]);

        Room::create([
            'name' => "ADMINISTRASI RADIOLOGI",
            'room_code' => "ADM RAD",
            'floor' => '1'
        ]);

        Room::create([
            'name' => "EX RUANG DIREKTUR",
            'room_code' => "EX. DIR",
            'floor' => '1'
        ]);

        Room::create([
            'name' => "EX KABAG",
            'room_code' => "EX. KBG",
            'floor' => '1'
        ]);

        Room::create([
            'name' => "EX MANAJEMEN",
            'room_code' => "EX. MNJMN",
            'floor' => '1'
        ]);

        Room::create([
            'name' => "EX OWNER",
            'room_code' => "EX. OWN",
            'floor' => '1'
        ]);

        Room::create([
            'name' => "EX PENDAFTARAN BPJS",
            'room_code' => "EX. PENDF. BPJS",
            'floor' => '1'
        ]);

        Room::create([
            'name' => "EX POLI BEDAH",
            'room_code' => "EX. BEDAH",
            'floor' => '1'
        ]);

        Room::create([
            'name' => "EX PT",
            'room_code' => "EX. PT",
            'floor' => '1'
        ]);

        Room::create([
            'name' => "FARMASI RAJAL & RANAP",
            'room_code' => "FARM. RJL & RNP",
            'floor' => '1'
        ]);

        Room::create([
            'name' => "GUDANG FARMASI",
            'room_code' => "GF",
            'floor' => '1'
        ]);

        Room::create([
            'name' => "KANTIN 1",
            'room_code' => "KNTN 01",
            'floor' => '1'
        ]);

        Room::create([
            'name' => "LABORATORIUM",
            'room_code' => "LAB",
            'floor' => '1'
        ]);

        Room::create([
            'name' => "LABORATORIUM MORULA",
            'room_code' => "LAB. MOR",
            'floor' => '1'
        ]);

        Room::create([
            'name' => "NURSE STATION POLI KANDUNGAN",
            'room_code' => "N.S OBGYN",
            'floor' => '1'
        ]);

        Room::create([
            'name' => "POLI BEDAH",
            'room_code' => "PO. BDH",
            'floor' => '1'
        ]);

        Room::create([
            'name' => "POLI KANDUNGAN",
            'room_code' => "PO. KANDUNGAN",
            'floor' => '1'
        ]);

        Room::create([
            'name' => "REKAM MEDIS BARU",
            'room_code' => "RM. BRU",
            'floor' => '1'
        ]);

        Room::create([
            'name' => "RUANG GANTI MORULA",
            'room_code' => "GNTI. MOR",
            'floor' => '1'
        ]);

        Room::create([
            'name' => "RUANG KONTROL RADIOLOGI",
            'room_code' => "KON. RAD",
            'floor' => '1'
        ]);

        Room::create([
            'name' => "RUANG LAKTASI",
            'room_code' => "LKTSI",
            'floor' => '1'
        ]);

        Room::create([
            'name' => "MENS ROOM MORULA",
            'room_code' => "MENS. RM. MOR",
            'floor' => '1'
        ]);

        Room::create([
            'name' => "RUANG PEMERIKSAAN RADIOLOGI",
            'room_code' => "PEM. RAD",
            'floor' => '1'
        ]);

        Room::create([
            'name' => "RUANG TINDAKAN MORULA",
            'room_code' => "RTN. MOR",
            'floor' => '1'
        ]);

        Room::create([
            'name' => "RUANG TUNGGU MORULA",
            'room_code' => "RT.MOR",
            'floor' => '1'
        ]);

        Room::create([
            'name' => "RUANG TUNGGU POLI",
            'room_code' => "RT. PO",
            'floor' => '1'
        ]);

        Room::create([
            'name' => "RUANG TUNGGU RADIOLOGI",
            'room_code' => "RT. RAD",
            'floor' => '1'
        ]);

        Room::create([
            'name' => "RUANGAN PT",
            'room_code' => "R. PT",
            'floor' => '1'
        ]);

        Room::create([
            'name' => "TINDAKAN KANDUNGAN",
            'room_code' => "TNDKN. KNDNGN",
            'floor' => '1'
        ]);

        BarangCategory::create([
            'name' => "NON MEDIS",
            'category_code' => "NMDS"
        ]);
        BarangCategory::create([
            'name' => "MEDIS",
            'category_code' => "MDS"
        ]);

        TemplateBarang::create([
            'category_id' => 1,
            'name' => "AC",
            'barang_code' => "A1",
        ]);
        TemplateBarang::create([
            'category_id' => 1,
            'name' => "DISPENSER",
            'barang_code' => "A1",
        ]);
        TemplateBarang::create([
            'category_id' => 1,
            'name' => "TV",
            'barang_code' => "A1",
        ]);
        TemplateBarang::create([
            'category_id' => 1,
            'name' => "KULKAS",
            'barang_code' => "A1",
        ]);
        TemplateBarang::create([
            'category_id' => 1,
            'name' => "PESAWAT TELPON",
            'barang_code' => "A1",
        ]);
        TemplateBarang::create([
            'category_id' => 1,
            'name' => "KURSI",
            'barang_code' => "A2",
        ]);
        TemplateBarang::create([
            'category_id' => 1,
            'name' => "MEJA",
            'barang_code' => "A2",
        ]);
        TemplateBarang::create([
            'category_id' => 1,
            'name' => "LEMARI",
            'barang_code' => "A2",
        ]);
        TemplateBarang::create([
            'category_id' => 1,
            'name' => "BED ANAK",
            'barang_code' => "A2",
        ]);
        TemplateBarang::create([
            'category_id' => 1,
            'name' => "SOFA",
            'barang_code' => "A2",
        ]);
        TemplateBarang::create([
            'category_id' => 2,
            'name' => "VENTILATOR",
            'barang_code' => "B1",
        ]);
        TemplateBarang::create([
            'category_id' => 2,
            'name' => "INFUS PUMP",
            'barang_code' => "B1",
        ]);
        TemplateBarang::create([
            'category_id' => 2,
            'name' => "SYIRING PUMP",
            'barang_code' => "B1",
        ]);
        TemplateBarang::create([
            'category_id' => 2,
            'name' => "BLOOD PUMP",
            'barang_code' => "B1",
        ]);
        TemplateBarang::create([
            'category_id' => 2,
            'name' => "MONITOR PASIEN",
            'barang_code' => "B1",
        ]);
        TemplateBarang::create([
            'category_id' => 2,
            'name' => "INCUBATOR",
            'barang_code' => "B1",
        ]);
        TemplateBarang::create([
            'category_id' => 2,
            'name' => "BED ELEKTRIK",
            'barang_code' => "B1",
        ]);
        TemplateBarang::create([
            'category_id' => 2,
            'name' => "BUBLE CPAP",
            'barang_code' => "B1",
        ]);
        TemplateBarang::create([
            'category_id' => 2,
            'name' => "FHOTO TERAPY BLUE LIGHT",
            'barang_code' => "B1",
        ]);
        TemplateBarang::create([
            'category_id' => 2,
            'name' => "VENTILATOR ANASTESI",
            'barang_code' => "B1",
        ]);
        TemplateBarang::create([
            'category_id' => 2,
            'name' => "SUCTION UNIT FORTABLE",
            'barang_code' => "B1",
        ]);
        TemplateBarang::create([
            'category_id' => 2,
            'name' => "AUTOCALVE",
            'barang_code' => "B1",
        ]);
        TemplateBarang::create([
            'category_id' => 2,
            'name' => "USG 4D",
            'barang_code' => "B1",
        ]);
        TemplateBarang::create([
            'category_id' => 2,
            'name' => "INFAN WARMER",
            'barang_code' => "B1",
        ]);
        TemplateBarang::create([
            'category_id' => 2,
            'name' => "ELEKTRO SURGERY",
            'barang_code' => "B1",
        ]);
        TemplateBarang::create([
            'category_id' => 2,
            'name' => "FORCE",
            'barang_code' => "B1",
        ]);
        TemplateBarang::create([
            'category_id' => 2,
            'name' => "USG PORTABLE",
            'barang_code' => "B1",
        ]);
        TemplateBarang::create([
            'category_id' => 2,
            'name' => "DEFIBILATOR",
            'barang_code' => "B1",
        ]);
        TemplateBarang::create([
            'category_id' => 2,
            'name' => "EKG",
            'barang_code' => "B1",
        ]);
        TemplateBarang::create([
            'category_id' => 2,
            'name' => "CTG",
            'barang_code' => "B1",
        ]);
        TemplateBarang::create([
            'category_id' => 2,
            'name' => "OZON",
            'barang_code' => "B1",
        ]);
        TemplateBarang::create([
            'category_id' => 2,
            'name' => "LAMPU SOROT TINDAKAN",
            'barang_code' => "B1",
        ]);
        TemplateBarang::create([
            'category_id' => 2,
            'name' => "NEBULIZER",
            'barang_code' => "B1",
        ]);
        TemplateBarang::create([
            'category_id' => 2,
            'name' => "X-RAY VIEWER",
            'barang_code' => "B1",
        ]);
        TemplateBarang::create([
            'category_id' => 2,
            'name' => "CENTRIFUGE",
            'barang_code' => "B1",
        ]);
        TemplateBarang::create([
            'category_id' => 2,
            'name' => "HEMATOLOGI ANALYZER",
            'barang_code' => "B1",
        ]);
        TemplateBarang::create([
            'category_id' => 2,
            'name' => "ROLL MIXER DARAH",
            'barang_code' => "B1",
        ]);
        TemplateBarang::create([
            'category_id' => 2,
            'name' => "KIMIA KLINIK",
            'barang_code' => "B1",
        ]);
        TemplateBarang::create([
            'category_id' => 2,
            'name' => "BIO SAFETY KABINET",
            'barang_code' => "B1",
        ]);
        TemplateBarang::create([
            'category_id' => 2,
            'name' => "INCUBATOR SPERMA",
            'barang_code' => "B1",
        ]);
        TemplateBarang::create([
            'category_id' => 2,
            'name' => "PESAWAT X-RAY",
            'barang_code' => "B1",
        ]);
        TemplateBarang::create([
            'category_id' => 2,
            'name' => "RIDER CR",
            'barang_code' => "B1",
        ]);
        TemplateBarang::create([
            'category_id' => 2,
            'name' => "PRINTER CR",
            'barang_code' => "B1",
        ]);
        TemplateBarang::create([
            'category_id' => 1,
            'name' => "TEMPAT SAMPAH",
            'barang_code' => "A3",
        ]);
        TemplateBarang::create([
            'category_id' => 1,
            'name' => "JAM DINDING",
            'barang_code' => "A3",
        ]);
        TemplateBarang::create([
            'category_id' => 1,
            'name' => "APAR",
            'barang_code' => "A3",
        ]);
        TemplateBarang::create([
            'category_id' => 1,
            'name' => "TANGGA PASIEN",
            'barang_code' => "A3",
        ]);
        TemplateBarang::create([
            'category_id' => 1,
            'name' => "TIANG INFUS",
            'barang_code' => "A3",
        ]);
        TemplateBarang::create([
            'category_id' => 1,
            'name' => "GORDEN",
            'barang_code' => "A3",
        ]);
        TemplateBarang::create([
            'category_id' => 1,
            'name' => "GORDEN VITRASE",
            'barang_code' => "A3",
        ]);
        TemplateBarang::create([
            'category_id' => 1,
            'name' => "TROLI INSTRUMEN",
            'barang_code' => "A3",
        ]);
        TemplateBarang::create([
            'category_id' => 1,
            'name' => "SEPATU BOOT",
            'barang_code' => "A3",
        ]);
        TemplateBarang::create([
            'category_id' => 1,
            'name' => "TEMPAT STERIL BOTOL BAYI",
            'barang_code' => "A3",
        ]);
        TemplateBarang::create([
            'category_id' => 1,
            'name' => "BOX BAYI",
            'barang_code' => "A3",
        ]);
        TemplateBarang::create([
            'category_id' => 1,
            'name' => "TROMOL KASA",
            'barang_code' => "A3",
        ]);
        TemplateBarang::create([
            'category_id' => 1,
            'name' => "SANDAL TINDAKAN",
            'barang_code' => "A3",
        ]);
        TemplateBarang::create([
            'category_id' => 1,
            'name' => "SENTER BATERAY",
            'barang_code' => "A3",
        ]);
        TemplateBarang::create([
            'category_id' => 1,
            'name' => "NAMPAN OBAT",
            'barang_code' => "A3",
        ]);
        TemplateBarang::create([
            'category_id' => 1,
            'name' => "KERANJANG OBAT",
            'barang_code' => "A3",
        ]);
        TemplateBarang::create([
            'category_id' => 2,
            'name' => "KURSI RODA",
            'barang_code' => "B2",
        ]);
        TemplateBarang::create([
            'category_id' => 2,
            'name' => "BLANKAR PASIEN",
            'barang_code' => "B2",
        ]);
        TemplateBarang::create([
            'category_id' => 2,
            'name' => "BED TINDAKAN",
            'barang_code' => "B2",
        ]);
        TemplateBarang::create([
            'category_id' => 2,
            'name' => "BED RAWAT INAP",
            'barang_code' => "B2",
        ]);
        TemplateBarang::create([
            'category_id' => 2,
            'name' => "TENSI METER",
            'barang_code' => "B2",
        ]);
        TemplateBarang::create([
            'category_id' => 1,
            'name' => "TERMOMETER",
            'barang_code' => "B2",
        ]);
        TemplateBarang::create([
            'category_id' => 2,
            'name' => "OXYMETER",
            'barang_code' => "B2",
        ]);
        TemplateBarang::create([
            'category_id' => 2,
            'name' => "STETOSKOP",
            'barang_code' => "B2",
        ]);
        TemplateBarang::create([
            'category_id' => 2,
            'name' => "DOPLER",
            'barang_code' => "B2",
        ]);
        TemplateBarang::create([
            'category_id' => 2,
            'name' => "AMUBAG",
            'barang_code' => "B2",
        ]);
        TemplateBarang::create([
            'category_id' => 2,
            'name' => "TIMBANGAN",
            'barang_code' => "B2",
        ]);
        TemplateBarang::create([
            'category_id' => 2,
            'name' => "FLOW METER",
            'barang_code' => "B2",
        ]);
        TemplateBarang::create([
            'category_id' => 2,
            'name' => "AUTOSKOP RIESTER",
            'barang_code' => "B2",
        ]);
        TemplateBarang::create([
            'category_id' => 2,
            'name' => "GUNTING BEDAH MINOR",
            'barang_code' => "B2",
        ]);
        TemplateBarang::create([
            'category_id' => 2,
            'name' => "PENLIGHT",
            'barang_code' => "B2",
        ]);
        TemplateBarang::create([
            'category_id' => 2,
            'name' => "TORNIQUET",
            'barang_code' => "B2",
        ]);
        TemplateBarang::create([
            'category_id' => 2,
            'name' => "HEAD LAMP",
            'barang_code' => "B2",
        ]);
        TemplateBarang::create([
            'category_id' => 2,
            'name' => "VACUM PORTABLE",
            'barang_code' => "B2",
        ]);
        TemplateBarang::create([
            'category_id' => 2,
            'name' => "MIKROSOP",
            'barang_code' => "B2",
        ]);
        TemplateBarang::create([
            'category_id' => 2,
            'name' => "ALAT GDS",
            'barang_code' => "B2",
        ]);
        TemplateBarang::create([
            'category_id' => 2,
            'name' => "COOL BOX DARAH",
            'barang_code' => "B2",
        ]);
        TemplateBarang::create([
            'category_id' => 1,
            'name' => "PESAWAT NURSECALL",
            'barang_code' => "A1",
        ]);
        TemplateBarang::create([
            'category_id' => 2,
            'name' => "MIKROPIPET",
            'barang_code' => "B2",
        ]);
        TemplateBarang::create([
            'category_id' => 2,
            'name' => "TABUNG MIKROPIPET",
            'barang_code' => "B2",
        ]);
        TemplateBarang::create([
            'category_id' => 2,
            'name' => "STAINING JAR",
            'barang_code' => "B2",
        ]);
        TemplateBarang::create([
            'category_id' => 2,
            'name' => "PATUNG MANEKIN",
            'barang_code' => "B2",
        ]);

        ControlPanel::create([
            'instance_name' => "RSIA LIVASYA",
            'instance_code' => "RSLV",
            'application_name' => "Inventaris Barang"
        ]);
    }
}
