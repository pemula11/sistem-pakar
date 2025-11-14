<?php

namespace Database\Seeders;

use Carbon\Carbon;
use App\Models\kerusakan;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class KerusakanTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        kerusakan::truncate();
        $data = [
            // Kerusakan Hardware - Display
            ['kode_kerusakan' => 'K001', 'nama_kerusakan' => 'Layar tidak menyala', 'deskripsi_kerusakan' => 'Monitor atau layar laptop tidak menampilkan gambar sama sekali'],
            ['kode_kerusakan' => 'K002', 'nama_kerusakan' => 'Layar bergaris', 'deskripsi_kerusakan' => 'Tampilan layar terdapat garis-garis vertikal atau horizontal'],
            ['kode_kerusakan' => 'K003', 'nama_kerusakan' => 'Layar redup atau gelap', 'deskripsi_kerusakan' => 'Layar terlalu gelap atau backlight tidak berfungsi'],
            
            // Kerusakan Hardware - Input Devices
            ['kode_kerusakan' => 'K004', 'nama_kerusakan' => 'Keyboard tidak berfungsi', 'deskripsi_kerusakan' => 'Keyboard tidak merespon sama sekali saat mengetik'],
            ['kode_kerusakan' => 'K005', 'nama_kerusakan' => 'Keyboard mengetik karakter ganda', 'deskripsi_kerusakan' => 'Saat menekan satu tombol muncul beberapa karakter yang sama'],
            ['kode_kerusakan' => 'K006', 'nama_kerusakan' => 'Mouse tidak terdeteksi', 'deskripsi_kerusakan' => 'Mouse tidak dikenali oleh sistem operasi'],
            ['kode_kerusakan' => 'K007', 'nama_kerusakan' => 'Touchpad tidak responsif', 'deskripsi_kerusakan' => 'Touchpad laptop tidak merespon sentuhan atau gerakan'],
            
            // Kerusakan Hardware - Storage
            ['kode_kerusakan' => 'K008', 'nama_kerusakan' => 'Harddisk bad sector', 'deskripsi_kerusakan' => 'Harddisk memiliki sektor rusak yang menyebabkan data error'],
            ['kode_kerusakan' => 'K009', 'nama_kerusakan' => 'Harddisk berbunyi clicking', 'deskripsi_kerusakan' => 'Harddisk mengeluarkan bunyi klik berulang yang tidak normal'],
            ['kode_kerusakan' => 'K010', 'nama_kerusakan' => 'SSD tidak terdeteksi', 'deskripsi_kerusakan' => 'SSD tidak muncul di BIOS atau sistem operasi'],
            ['kode_kerusakan' => 'K011', 'nama_kerusakan' => 'Penyimpanan penuh', 'deskripsi_kerusakan' => 'Kapasitas harddisk atau SSD sudah penuh'],
            
            // Kerusakan Hardware - Cooling System
            ['kode_kerusakan' => 'K012', 'nama_kerusakan' => 'Kipas tidak berputar', 'deskripsi_kerusakan' => 'Kipas pendingin CPU atau laptop tidak berfungsi'],
            ['kode_kerusakan' => 'K013', 'nama_kerusakan' => 'Kipas berisik', 'deskripsi_kerusakan' => 'Kipas mengeluarkan suara bising atau dengung yang mengganggu'],
            ['kode_kerusakan' => 'K014', 'nama_kerusakan' => 'Overheat', 'deskripsi_kerusakan' => 'Komputer cepat panas dan sering shutdown otomatis'],
            
            // Kerusakan Hardware - Power
            ['kode_kerusakan' => 'K015', 'nama_kerusakan' => 'Baterai tidak mengisi', 'deskripsi_kerusakan' => 'Baterai laptop tidak bisa diisi daya'],
            ['kode_kerusakan' => 'K016', 'nama_kerusakan' => 'Baterai cepat habis', 'deskripsi_kerusakan' => 'Daya baterai terkuras dalam waktu singkat'],
            ['kode_kerusakan' => 'K017', 'nama_kerusakan' => 'Adaptor rusak', 'deskripsi_kerusakan' => 'Charger atau adaptor tidak mengeluarkan daya'],
            ['kode_kerusakan' => 'K018', 'nama_kerusakan' => 'Power supply mati', 'deskripsi_kerusakan' => 'PSU komputer desktop tidak berfungsi'],
            
            // Kerusakan Hardware - Memory
            ['kode_kerusakan' => 'K019', 'nama_kerusakan' => 'RAM rusak', 'deskripsi_kerusakan' => 'Modul RAM tidak terbaca atau menyebabkan blue screen'],
            ['kode_kerusakan' => 'K020', 'nama_kerusakan' => 'RAM tidak terpasang sempurna', 'deskripsi_kerusakan' => 'RAM tidak terpasang dengan benar di slot memori'],
            
            // Kerusakan Hardware - Processor
            ['kode_kerusakan' => 'K021', 'nama_kerusakan' => 'Processor overheat', 'deskripsi_kerusakan' => 'CPU mengalami panas berlebihan dan throttling'],
            
            // Kerusakan Hardware - Motherboard
            ['kode_kerusakan' => 'K022', 'nama_kerusakan' => 'Motherboard rusak', 'deskripsi_kerusakan' => 'Motherboard tidak berfungsi atau mati total'],
            ['kode_kerusakan' => 'K023', 'nama_kerusakan' => 'CMOS battery habis', 'deskripsi_kerusakan' => 'Baterai CMOS motherboard sudah lemah atau habis'],
            
            // Kerusakan Hardware - Graphics
            ['kode_kerusakan' => 'K024', 'nama_kerusakan' => 'VGA card rusak', 'deskripsi_kerusakan' => 'Kartu grafis tidak berfungsi atau artifacting'],
            
            // Kerusakan Hardware - Audio
            ['kode_kerusakan' => 'K025', 'nama_kerusakan' => 'Speaker tidak berbunyi', 'deskripsi_kerusakan' => 'Speaker laptop atau PC tidak mengeluarkan suara'],
            ['kode_kerusakan' => 'K026', 'nama_kerusakan' => 'Jack audio rusak', 'deskripsi_kerusakan' => 'Port jack audio tidak dapat mendeteksi headphone atau speaker'],
            
            // Kerusakan Hardware - Network
            ['kode_kerusakan' => 'K027', 'nama_kerusakan' => 'WiFi tidak terdeteksi', 'deskripsi_kerusakan' => 'Adapter WiFi tidak ditemukan di sistem'],
            ['kode_kerusakan' => 'K028', 'nama_kerusakan' => 'LAN card rusak', 'deskripsi_kerusakan' => 'Port ethernet tidak berfungsi'],
            
            // Kerusakan Hardware - Optical Drive
            ['kode_kerusakan' => 'K029', 'nama_kerusakan' => 'DVD drive tidak bisa baca', 'deskripsi_kerusakan' => 'Optical drive tidak dapat membaca disk'],
            
            // Kerusakan Software - Operating System
            ['kode_kerusakan' => 'K030', 'nama_kerusakan' => 'Bootloop', 'deskripsi_kerusakan' => 'Komputer restart terus menerus saat booting'],
            ['kode_kerusakan' => 'K031', 'nama_kerusakan' => 'Blue screen of death (BSOD)', 'deskripsi_kerusakan' => 'Sistem operasi crash dengan layar biru'],
            ['kode_kerusakan' => 'K032', 'nama_kerusakan' => 'Operating system corrupt', 'deskripsi_kerusakan' => 'File sistem operasi rusak atau hilang'],
            ['kode_kerusakan' => 'K033', 'nama_kerusakan' => 'Booting lambat', 'deskripsi_kerusakan' => 'Proses booting memakan waktu sangat lama'],
            ['kode_kerusakan' => 'K034', 'nama_kerusakan' => 'Boot failure', 'deskripsi_kerusakan' => 'Sistem gagal boot dengan pesan error'],
            
            // Kerusakan Software - Virus/Malware
            ['kode_kerusakan' => 'K035', 'nama_kerusakan' => 'Terinfeksi virus', 'deskripsi_kerusakan' => 'Komputer terinfeksi virus atau malware'],
            ['kode_kerusakan' => 'K036', 'nama_kerusakan' => 'Ransomware', 'deskripsi_kerusakan' => 'File terenkripsi oleh ransomware'],
            ['kode_kerusakan' => 'K037', 'nama_kerusakan' => 'Adware dan popup berlebihan', 'deskripsi_kerusakan' => 'Banyak iklan dan popup yang muncul'],
            
            // Kerusakan Software - Performance
            ['kode_kerusakan' => 'K038', 'nama_kerusakan' => 'Komputer lambat', 'deskripsi_kerusakan' => 'Performa komputer sangat lambat dalam operasi normal'],
            ['kode_kerusakan' => 'K039', 'nama_kerusakan' => 'Aplikasi not responding', 'deskripsi_kerusakan' => 'Aplikasi sering hang atau tidak merespon'],
            ['kode_kerusakan' => 'K040', 'nama_kerusakan' => 'Memory usage tinggi', 'deskripsi_kerusakan' => 'Penggunaan RAM mencapai 100%'],
            ['kode_kerusakan' => 'K041', 'nama_kerusakan' => 'CPU usage tinggi', 'deskripsi_kerusakan' => 'Penggunaan processor mencapai 100%'],
            ['kode_kerusakan' => 'K042', 'nama_kerusakan' => 'Disk usage 100%', 'deskripsi_kerusakan' => 'Penggunaan disk mencapai maksimal terus menerus'],
            
            // Kerusakan Software - Driver
            ['kode_kerusakan' => 'K043', 'nama_kerusakan' => 'Driver hilang atau corrupt', 'deskripsi_kerusakan' => 'Driver perangkat keras hilang atau rusak'],
            ['kode_kerusakan' => 'K044', 'nama_kerusakan' => 'Driver tidak kompatibel', 'deskripsi_kerusakan' => 'Driver yang terinstall tidak sesuai dengan hardware'],
            
            // Kerusakan Software - Update
            ['kode_kerusakan' => 'K045', 'nama_kerusakan' => 'Windows update gagal', 'deskripsi_kerusakan' => 'Update sistem operasi selalu gagal atau error'],
            
            // Kerusakan Network
            ['kode_kerusakan' => 'K046', 'nama_kerusakan' => 'Tidak bisa connect internet', 'deskripsi_kerusakan' => 'Komputer tidak dapat terhubung ke internet'],
            ['kode_kerusakan' => 'K047', 'nama_kerusakan' => 'Internet lambat', 'deskripsi_kerusakan' => 'Kecepatan internet sangat lambat'],
            ['kode_kerusakan' => 'K048', 'nama_kerusakan' => 'DNS error', 'deskripsi_kerusakan' => 'Tidak dapat resolve nama domain'],
            ['kode_kerusakan' => 'K049', 'nama_kerusakan' => 'Limited connectivity', 'deskripsi_kerusakan' => 'Koneksi terbatas tidak dapat akses internet'],
            
            // Kerusakan Data
            ['kode_kerusakan' => 'K050', 'nama_kerusakan' => 'Data hilang', 'deskripsi_kerusakan' => 'File atau data penting terhapus atau hilang'],
            ['kode_kerusakan' => 'K051', 'nama_kerusakan' => 'File corrupt', 'deskripsi_kerusakan' => 'File tidak dapat dibuka atau rusak'],
         
        ];

        foreach ($data as  $value) {
            # code...
            kerusakan::insert([
                'kode_kerusakan' => $value['kode_kerusakan'],
                'nama_kerusakan' => $value['nama_kerusakan'],
                'deskripsi_kerusakan' => $value['deskripsi_kerusakan'],
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ]);

        }
    }
}
