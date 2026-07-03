<?php

namespace Database\Seeders;

use App\Models\DataTransparency;
use App\Models\DemographicBreakdown;
use App\Models\DemographicSummary;
use App\Models\Dusun;
use App\Models\EnvironmentalFaq;
use App\Models\EnvironmentalTopic;
use App\Models\Facility;
use App\Models\Gallery;
use App\Models\Institution;
use App\Models\KknIndividualProgram;
use App\Models\KknMember;
use App\Models\KknOutput;
use App\Models\KknPeriod;
use App\Models\KknTimeline;
use App\Models\KknTimelineItem;
use App\Models\Mission;
use App\Models\Official;
use App\Models\OrganizationNode;
use App\Models\Post;
use App\Models\Service;
use App\Models\StudyProgram;
use App\Models\Umkm;
use App\Models\VillageBoundary;
use App\Models\VillageHistorySection;
use App\Models\VillagePotential;
use App\Models\VillageProfile;
use App\Models\Vision;
use Illuminate\Database\Seeder;

class DesaPejatenSeeder extends Seeder
{
    public function run(): void
    {
        // ============ A. PROFIL UMUM ============
        VillageProfile::create([
            'nama_desa' => 'Desa Pejaten',
            'kecamatan' => 'Cibuaya',
            'kabupaten' => 'Karawang',
            'provinsi' => 'Jawa Barat',
            'kode_pos' => '41356',
            'alamat_kantor' => 'Jl. [Nama Jalan Kantor Desa], Pejaten, Cibuaya',
            'telepon' => '(0267) [Nomor Telepon]',
            'email' => 'desapejaten@karawangkab.go.id',
            'jam_pelayanan' => [
                ['hari' => 'Senin-Kamis', 'jam' => '08.00-15.00 WIB'],
                ['hari' => 'Jumat', 'jam' => '08.00-11.00 WIB'],
                ['hari' => 'Sabtu-Minggu', 'jam' => 'Tutup'],
            ],
            'sosial_media' => [
                'facebook' => '#', 'instagram' => '#', 'whatsapp' => '#',
            ],
            'embed_maps' => 'https://www.google.com/maps?q=Pejaten,+Cibuaya,+Karawang&output=embed',
            'sambutan_kepala_desa' => 'Placeholder sambutan resmi Kepala Desa Pejaten kepada warga dan pengunjung portal, berisi harapan terhadap pembangunan desa serta kolaborasi bersama mahasiswa KKN Universitas Buana Perjuangan Karawang.',
            'luas_wilayah' => '[XX] km²',
            'ketinggian' => '[X] mdpl',
            'jumlah_rw' => '[X]',
            'jumlah_rt' => '[XX]',
        ]);

        // ============ SEJARAH ============
        $sejarah = [
            ['Asal-usul Desa', 'Placeholder — uraikan asal-usul nama "Pejaten" dan cerita berdirinya wilayah ini, termasuk tokoh pembuka lahan/babad desa yang dipercaya masyarakat setempat.'],
            ['Perkembangan Desa', 'Placeholder — uraikan perkembangan Desa Pejaten dari masa ke masa, termasuk perubahan batas wilayah, pertumbuhan dusun/RW/RT, serta peristiwa penting.'],
            ['Pembentukan Pemerintahan', 'Placeholder — jelaskan proses pembentukan pemerintahan desa secara definitif, termasuk daftar kepala desa yang pernah menjabat.'],
            ['Perkembangan Sosial Ekonomi', 'Placeholder — uraikan perkembangan mata pencaharian warga Desa Pejaten, misalnya pertanian, perikanan/tambak, dan UMKM.'],
            ['Kondisi Desa Saat Ini', 'Placeholder — deskripsikan kondisi Desa Pejaten saat ini secara umum: jumlah penduduk, potensi unggulan, tantangan pembangunan, serta arah pengembangan.'],
        ];
        foreach ($sejarah as $i => [$judul, $konten]) {
            VillageHistorySection::create(['judul' => $judul, 'konten' => $konten, 'urutan' => $i + 1]);
        }

        // ============ VISI MISI ============
        Vision::create(['konten' => 'Terwujudnya Desa Pejaten yang maju, mandiri, sejahtera, dan berwawasan lingkungan.']);
        $misi = [
            'Mewujudkan pemerintahan desa yang transparan dan akuntabel.',
            'Mengembangkan ekonomi desa melalui pertanian, perikanan, dan UMKM.',
            'Meningkatkan pengelolaan lingkungan hidup dan pengelolaan sampah.',
            'Meningkatkan kualitas pendidikan, kesehatan, dan sosial kemasyarakatan.',
            'Membangun infrastruktur dan tata kelola wilayah yang baik.',
        ];
        foreach ($misi as $i => $konten) {
            Mission::create(['konten' => $konten, 'urutan' => $i + 1]);
        }

        // ============ GEOGRAFIS ============
        $batas = [
            ['Sebelah Utara', 'Placeholder — nama desa/laut berbatasan'],
            ['Sebelah Selatan', 'Placeholder — nama desa berbatasan'],
            ['Sebelah Timur', 'Placeholder — nama desa berbatasan'],
            ['Sebelah Barat', 'Placeholder — nama desa berbatasan'],
        ];
        foreach ($batas as [$arah, $ket]) {
            VillageBoundary::create(['arah' => $arah, 'keterangan' => $ket]);
        }
        foreach (['Dusun 1', 'Dusun 2', 'Dusun 3', 'Dusun 4'] as $i => $nama) {
            Dusun::create(['nama' => $nama, 'urutan' => $i + 1]);
        }

        // ============ DEMOGRAFI ============
        DemographicSummary::create([
            'tahun' => now()->year,
            'total_penduduk' => 4820,
            'laki_laki' => 2460,
            'perempuan' => 2360,
            'kepala_keluarga' => 1340,
        ]);
        $breakdowns = [
            ['pekerjaan', 'Petani / Nelayan', 45],
            ['pekerjaan', 'Wiraswasta / UMKM', 25],
            ['pekerjaan', 'Buruh / Karyawan', 20],
            ['pekerjaan', 'Lainnya', 10],
            ['pendidikan', 'SD / Sederajat', 40],
            ['pendidikan', 'SMP / Sederajat', 25],
            ['pendidikan', 'SMA / Sederajat', 25],
            ['pendidikan', 'Diploma / Sarjana', 10],
            ['agama', 'Islam', 98],
            ['agama', 'Kristen', 1],
            ['agama', 'Lainnya', 1],
        ];
        foreach ($breakdowns as $i => [$kat, $label, $persen]) {
            DemographicBreakdown::create([
                'kategori' => $kat, 'label' => $label, 'persentase' => $persen, 'urutan' => $i,
            ]);
        }

        // ============ POTENSI DESA ============
        $potensi = [
            ['🌾', 'Pertanian', 'Lahan pertanian padi dan palawija sebagai salah satu sumber mata pencaharian utama warga.'],
            ['🐟', 'Perikanan', 'Tambak dan budidaya perikanan memanfaatkan letak desa di wilayah pesisir Karawang.'],
            ['🏪', 'UMKM', 'Usaha mikro kecil menengah warga di bidang kuliner, kerajinan, dan produk olahan.'],
            ['🌊', 'Pariwisata', 'Potensi wisata desa dan pesisir yang dapat dikembangkan lebih lanjut bersama warga.'],
            ['🐄', 'Peternakan', 'Peternakan unggas dan ternak warga sebagai sumber penghasilan tambahan.'],
            ['🏭', 'Industri Rumahan', 'Produk olahan rumah tangga yang dikembangkan bersama pendampingan program desa.'],
        ];
        foreach ($potensi as $i => [$icon, $judul, $desk]) {
            VillagePotential::create(['icon' => $icon, 'judul' => $judul, 'deskripsi' => $desk, 'urutan' => $i]);
        }

        // ============ UMKM ============
        $umkms = [
            ['Kuliner', '[Nama UMKM 1]', 'Placeholder deskripsi produk dan pemilik usaha.'],
            ['Kerajinan', '[Nama UMKM 2]', 'Placeholder deskripsi produk dan pemilik usaha.'],
            ['Olahan Pangan', '[Nama UMKM 3]', 'Placeholder deskripsi produk dan pemilik usaha.'],
        ];
        foreach ($umkms as $i => [$kat, $nama, $desk]) {
            Umkm::create(['nama' => $nama, 'kategori' => $kat, 'deskripsi' => $desk, 'pemilik' => '[Nama Pemilik]', 'kontak' => '-', 'urutan' => $i]);
        }

        // ============ SARANA PRASARANA ============
        $sarana = [
            ['🏫', 'Sekolah', '[X] unit SD/SMP di wilayah desa.'],
            ['🕌', 'Masjid / Musala', '[X] unit tempat ibadah warga.'],
            ['🏥', 'Puskesmas / Pustu', 'Layanan kesehatan dasar bagi warga.'],
            ['⚽', 'Lapangan Olahraga', 'Fasilitas olahraga dan kegiatan warga.'],
            ['👶', 'Posyandu', 'Layanan kesehatan ibu dan anak di tiap dusun.'],
            ['🏛️', 'Balai Desa', 'Pusat pelayanan dan kegiatan pemerintahan desa.'],
        ];
        foreach ($sarana as $i => [$icon, $nama, $ket]) {
            Facility::create(['icon' => $icon, 'nama' => $nama, 'keterangan' => $ket, 'urutan' => $i]);
        }

        // ============ STRUKTUR ORGANISASI ============
        $kades = OrganizationNode::create(['jabatan' => 'Kepala Desa', 'nama_pejabat' => '[Nama Kepala Desa]', 'urutan' => 1]);
        $sekdes = OrganizationNode::create(['jabatan' => 'Sekretaris Desa', 'nama_pejabat' => '[Nama Sekretaris Desa]', 'parent_id' => $kades->id, 'urutan' => 1]);
        $kaurKasi = ['Kaur Keuangan', 'Kaur TU & Umum', 'Kaur Perencanaan', 'Kasi Pemerintahan', 'Kasi Kesejahteraan', 'Kasi Pelayanan'];
        foreach ($kaurKasi as $i => $jabatan) {
            OrganizationNode::create(['jabatan' => $jabatan, 'nama_pejabat' => '[Nama]', 'parent_id' => $sekdes->id, 'urutan' => $i + 1]);
        }
        foreach (['Kepala Dusun 1', 'Kepala Dusun 2', 'Kepala Dusun 3'] as $i => $jabatan) {
            OrganizationNode::create(['jabatan' => $jabatan, 'nama_pejabat' => '[Nama]', 'parent_id' => $sekdes->id, 'urutan' => 100 + $i]);
        }

        // ============ PERANGKAT DESA (kartu foto) ============
        $perangkat = [
            ['[Nama Kepala Desa]', 'Kepala Desa'],
            ['[Nama Sekretaris Desa]', 'Sekretaris Desa'],
            ['[Nama]', 'Kaur Keuangan'],
            ['[Nama]', 'Kasi Pemerintahan'],
        ];
        foreach ($perangkat as $i => [$nama, $jabatan]) {
            Official::create(['nama' => $nama, 'jabatan' => $jabatan, 'urutan' => $i]);
        }

        // ============ LEMBAGA DESA ============
        $lembaga = [
            ['🏛️', 'BPD', 'Badan Permusyawaratan Desa Pejaten.'],
            ['🤝', 'LPM', 'Lembaga Pemberdayaan Masyarakat desa.'],
            ['👩‍👧', 'PKK', 'Pemberdayaan Kesejahteraan Keluarga.'],
            ['🧑‍🤝‍🧑', 'Karang Taruna', 'Organisasi kepemudaan Desa Pejaten.'],
        ];
        foreach ($lembaga as $i => [$icon, $nama, $desk]) {
            Institution::create(['icon' => $icon, 'nama' => $nama, 'deskripsi' => $desk, 'urutan' => $i]);
        }

        // ============ LAYANAN UNTUK WARGA ============
        $layanan = [
            ['01', 'Profil Desa', 'Sejarah, visi misi, geografis, demografi, hingga potensi Desa Pejaten.', '/profil-desa'],
            ['02', 'Layanan Administrasi', 'Pengajuan surat pengantar, KTP, KK, dan layanan kependudukan lainnya.', '/kontak'],
            ['03', 'Edukasi Lingkungan', 'Panduan sampah, 3R, bank sampah, eco enzyme, dan kompos untuk warga.', '/edukasi-lingkungan'],
            ['04', 'Bank Sampah Digital', 'Pencatatan tabungan sampah warga secara transparan dan real-time.', '/edukasi-lingkungan'],
            ['05', 'KKN UBP Karawang 2026', 'Seluruh program kerja mahasiswa KKN dari berbagai program studi.', '/kkn'],
            ['06', 'Data & Transparansi Desa', 'Monografi, data kependudukan, dan ringkasan APBDes yang akuntabel.', '/data-desa'],
        ];
        foreach ($layanan as $i => [$icon, $judul, $desk, $link]) {
            Service::create(['icon' => $icon, 'judul' => $judul, 'deskripsi' => $desk, 'link_tujuan' => $link, 'urutan' => $i]);
        }

        // ============ DATA & TRANSPARANSI ============
        $data = [
            ['🗺️', 'Profil Wilayah', 'Letak administratif, batas wilayah, dan pembagian dusun/RW/RT.', '/profil-desa#kondisi-geografis'],
            ['📊', 'Monografi Desa', 'Ringkasan data monografi tahunan Desa Pejaten.', '/profil-desa#demografi'],
            ['👪', 'Data Kependudukan', 'Jumlah penduduk, KK, dan sebaran usia warga.', '/profil-desa#demografi'],
            ['💰', 'APBDes', 'Ringkasan anggaran pendapatan dan belanja desa.', '/kontak'],
            ['🌾', 'Potensi Desa', 'Sektor unggulan pertanian, perikanan, dan UMKM Desa Pejaten.', '/profil-desa#potensi-desa'],
            ['📍', 'Peta Administrasi', 'Peta batas wilayah resmi Desa Pejaten.', '/profil-desa#peta-desa'],
        ];
        foreach ($data as $i => [$icon, $judul, $desk, $link]) {
            DataTransparency::create(['icon' => $icon, 'judul' => $judul, 'deskripsi' => $desk, 'link' => $link, 'urutan' => $i]);
        }

        // ============ EDUKASI LINGKUNGAN ============
        $topik = [
            ['Apa itu Sampah', 'Sampah adalah sisa kegiatan sehari-hari manusia dan/atau proses alam yang berbentuk padat maupun semi padat.'],
            ['Jenis Sampah', 'Sampah dikelompokkan menjadi tiga jenis utama: organik, anorganik, dan B3.'],
            ['Prinsip 3R (Reduce, Reuse, Recycle)', 'Reduce, Reuse, dan Recycle menjadi dasar gerakan pengelolaan sampah di Desa Pejaten.'],
            ['Bank Sampah', 'Bank sampah adalah tempat warga menabung sampah anorganik bernilai ekonomi.'],
            ['Eco Enzyme', 'Eco enzyme adalah cairan hasil fermentasi sisa buah dan sayur bersama gula dan air.'],
            ['Kompos', 'Pengomposan mengubah sampah organik menjadi pupuk yang bermanfaat bagi pertanian warga.'],
            ['Video Edukasi', 'Kumpulan video edukasi pengelolaan sampah yang diproduksi bersama mahasiswa KKN.'],
            ['FAQ Seputar Pengelolaan Sampah', 'Kumpulan pertanyaan umum seputar pengelolaan sampah di desa.'],
        ];
        foreach ($topik as $i => [$judul, $konten]) {
            EnvironmentalTopic::create(['judul' => $judul, 'konten' => $konten, 'urutan' => $i + 1]);
        }
        $faqs = [
            ['Bagaimana cara mendaftar bank sampah?', 'Placeholder jawaban.'],
            ['Apakah kompos dari desa dijual atau dibagikan gratis?', 'Placeholder jawaban.'],
            ['Ke mana warga dapat bertanya soal jadwal pengangkutan sampah?', 'Placeholder jawaban.'],
        ];
        foreach ($faqs as $i => [$q, $a]) {
            EnvironmentalFaq::create(['pertanyaan' => $q, 'jawaban' => $a, 'urutan' => $i]);
        }

        // ============ KKN PERIOD ============
        $kkn = KknPeriod::create([
            'nama' => 'KKN UBP Karawang 2026',
            'tahun' => 2026,
            'deskripsi' => 'Placeholder — uraikan tema, tujuan, dan periode pelaksanaan KKN Universitas Buana Perjuangan Karawang Tahun 2026 di Desa Pejaten, dengan fokus utama edukasi lingkungan dan pemberdayaan masyarakat.',
            'jumlah_mahasiswa' => 20,
            'jumlah_prodi' => 12,
            'jumlah_minggu' => 4,
            'is_active' => true,
        ]);

        $members = [
            ['[Nama DPL]', 'Dosen Pembimbing Lapangan', null],
            ['[Nama Ketua]', 'Ketua Kelompok KKN', null],
            ['[Nama Sekretaris]', 'Sekretaris', null],
            ['[Nama Bendahara]', 'Bendahara', null],
            ['[Nama Anggota]', 'Anggota', 'Teknik Informatika'],
        ];
        foreach ($members as $i => [$nama, $peran, $prodi]) {
            KknMember::create(['kkn_period_id' => $kkn->id, 'nama' => $nama, 'peran' => $peran, 'prodi' => $prodi, 'urutan' => $i]);
        }

        // Timeline program kelompok
        $timelineData = [
            ['Minggu 1', 'Survey, Observasi & Koordinasi', 'selesai', [
                'Survey lapangan dan pemetaan potensi Desa Pejaten',
                'Observasi kondisi lingkungan dan pengelolaan sampah warga',
                'Koordinasi dengan Kepala Desa dan perangkat desa',
            ]],
            ['Minggu 2', 'Sosialisasi Program', 'selesai', [
                'Sosialisasi program edukasi lingkungan ke warga dan RT/RW',
                'Sosialisasi ke sekolah dan lembaga kemasyarakatan desa',
            ]],
            ['Minggu 3', 'Pelatihan', 'berjalan', [
                'Pelatihan pemilahan sampah dan pembuatan eco enzyme',
                'Pelatihan pembuatan kompos skala rumah tangga',
                'Pendampingan digitalisasi UMKM desa',
            ]],
            ['Minggu 4', 'Evaluasi', 'berjalan', [
                'Evaluasi capaian program bersama perangkat desa',
                'Penyusunan laporan dan dokumentasi hasil program',
            ]],
            ['Penutupan', 'Penutupan KKN', 'berjalan', [
                'Acara serah terima program kerja kepada pemerintah desa',
                'Penyerahan luaran KKN agar dapat dilanjutkan warga dan perangkat desa',
            ]],
        ];
        foreach ($timelineData as $i => [$label, $judul, $status, $items]) {
            $tl = KknTimeline::create([
                'kkn_period_id' => $kkn->id, 'label' => $label, 'judul' => $judul, 'status' => $status, 'urutan' => $i,
            ]);
            foreach ($items as $it) {
                KknTimelineItem::create(['kkn_timeline_id' => $tl->id, 'keterangan' => $it]);
            }
        }

        // Study Programs
        $prodiList = [
            ['Akuntansi', 'akuntansi'], ['Manajemen', 'manajemen'], ['Sistem Informasi', 'si'],
            ['Teknik Informatika', 'ti'], ['Farmasi', 'farmasi'], ['PAI', 'pai'],
            ['Psikologi', 'psikologi'], ['PGSD', 'pgsd'], ['PPKn', 'ppkn'],
            ['Teknik Industri', 'ti-industri'], ['Teknik Mesin', 'ti-mesin'], ['Ilmu Hukum', 'hukum'],
        ];
        $prodiMap = [];
        foreach ($prodiList as [$nama, $kode]) {
            $prodiMap[$kode] = StudyProgram::create(['nama' => $nama, 'kode' => $kode]);
        }

        $individu = [
            ['akuntansi', 'Pelatihan Pembukuan Sederhana UMKM', 'Pendampingan pencatatan keuangan sederhana bagi pelaku UMKM Desa Pejaten.', 'berjalan'],
            ['si', 'Pembuatan Website Profil Desa', 'Pengembangan website resmi Desa Pejaten sebagai media informasi dan pelayanan publik.', 'selesai'],
            ['farmasi', 'Penyuluhan Penggunaan Obat yang Aman', 'Edukasi warga mengenai penggunaan dan penyimpanan obat rumah tangga yang tepat.', 'berjalan'],
            ['pai', 'Bimbingan Belajar Mengaji Anak Desa', 'Kegiatan bimbingan mengaji rutin bagi anak-anak Desa Pejaten.', 'berjalan'],
            ['psikologi', 'Penyuluhan Kesehatan Mental Remaja', 'Sosialisasi kesadaran kesehatan mental bagi remaja Karang Taruna Desa Pejaten.', 'selesai'],
            ['pgsd', 'Kelas Literasi & Numerasi Anak SD', 'Pendampingan belajar membaca dan berhitung bagi siswa SD di Desa Pejaten.', 'berjalan'],
            ['ppkn', 'Sosialisasi Kesadaran Hukum & Kewarganegaraan', 'Edukasi hak dan kewajiban warga negara serta tertib administrasi kependudukan.', 'berjalan'],
            ['ti-industri', 'Perancangan Alur Kerja TPS3R', 'Perbaikan alur proses pengelolaan sampah agar lebih efisien di tingkat desa.', 'berjalan'],
            ['ti-mesin', 'Perawatan Alat Pencacah Sampah Organik', 'Pemeliharaan dan pelatihan operator alat pencacah sampah untuk kompos.', 'berjalan'],
            ['hukum', 'Penyuluhan Administrasi Desa & Peraturan Desa', 'Sosialisasi regulasi desa dan pentingnya kepatuhan administrasi bagi warga.', 'selesai'],
            ['manajemen', 'Pendampingan Strategi Pemasaran UMKM', 'Pelatihan strategi pemasaran sederhana bagi pelaku usaha desa.', 'berjalan'],
            ['ti', 'Digitalisasi Pencatatan Bank Sampah', 'Pembuatan sistem pencatatan tabungan bank sampah warga secara digital.', 'berjalan'],
        ];
        foreach ($individu as $i => [$kode, $judul, $desk, $status]) {
            KknIndividualProgram::create([
                'kkn_period_id' => $kkn->id,
                'study_program_id' => $prodiMap[$kode]->id,
                'nama_mahasiswa' => '[Nama Mahasiswa]',
                'judul' => $judul,
                'deskripsi' => $desk,
                'status' => $status,
                'urutan' => $i,
            ]);
        }

        // Luaran KKN
        $luaran = [
            ['🌐', 'Website Profil Desa', 'Portal resmi desa yang terintegrasi dan dapat dikelola pemerintah desa.'],
            ['📗', 'Modul Edukasi Lingkungan', 'Panduan pengelolaan sampah, 3R, eco enzyme, dan kompos.'],
            ['🏦', 'Sistem Bank Sampah Digital', 'Pencatatan tabungan sampah warga berbasis digital.'],
            ['📄', 'Laporan Akhir KKN', 'Dokumen laporan pelaksanaan program kerja KKN UBP Karawang 2026.'],
            ['🖼️', 'Poster & Media Edukasi', 'Materi cetak dan digital untuk keberlanjutan edukasi warga.'],
            ['🏪', 'Pendampingan UMKM', 'Katalog dan strategi pemasaran produk UMKM Desa Pejaten.'],
        ];
        foreach ($luaran as $i => [$icon, $judul, $desk]) {
            KknOutput::create(['kkn_period_id' => $kkn->id, 'icon' => $icon, 'judul' => $judul, 'deskripsi' => $desk, 'urutan' => $i]);
        }

        // ============ BERITA & ARTIKEL KKN (posts) ============
        $berita = [
            ['kkn', 'Mahasiswa KKN UBP Karawang Dampingi Warga Mulai Pemilahan Sampah', 'Kegiatan sosialisasi digelar di beberapa dusun bersama perangkat desa dan Karang Taruna.'],
            ['desa', 'Pemerintah Desa Pejaten Gelar Musyawarah Perencanaan Pembangunan', 'Musyawarah membahas prioritas pembangunan desa untuk tahun anggaran berjalan.'],
            ['pengumuman', 'Jadwal Pelayanan Administrasi Kependudukan Terbaru', 'Perubahan jadwal layanan di kantor Desa Pejaten, mohon diperhatikan warga.'],
            ['agenda', 'Jadwal Kegiatan Posyandu Bulan Ini di Seluruh Dusun', 'Jadwal lengkap kegiatan posyandu balita dan lansia di wilayah Desa Pejaten.'],
            ['kkn', 'Kepala Desa Resmikan Sistem Bank Sampah Digital Karya Mahasiswa', 'Aplikasi hasil karya mahasiswa KKN memudahkan warga memantau saldo tabungan sampah.'],
            ['desa', 'Warga Desa Pejaten Rayakan Panen Raya Padi Musim Ini', 'Hasil panen tahun ini menunjukkan peningkatan dibanding periode sebelumnya.'],
        ];
        foreach ($berita as [$kat, $judul, $ringkasan]) {
            Post::create([
                'kkn_period_id' => $kat === 'kkn' ? $kkn->id : null,
                'category' => $kat,
                'judul' => $judul,
                'ringkasan' => $ringkasan,
                'konten' => $ringkasan,
                'tanggal_publish' => now(),
                'status' => 'terbit',
            ]);
        }

        $artikelKkn = [
            'Judul Artikel Mengenai Program Edukasi Lingkungan',
            'Judul Artikel Mengenai Pemberdayaan UMKM',
            'Judul Artikel Mengenai Digitalisasi Bank Sampah',
        ];
        foreach ($artikelKkn as $judul) {
            Post::create([
                'kkn_period_id' => $kkn->id,
                'category' => 'artikel_kkn',
                'judul' => $judul,
                'ringkasan' => 'Placeholder ringkasan artikel.',
                'konten' => 'Placeholder ringkasan artikel.',
                'tanggal_publish' => now(),
                'status' => 'terbit',
            ]);
        }

        // ============ GALERI ============
        $galeriUmum = [
            'Balai Desa Pejaten', 'Kegiatan Posyandu Balita', 'Musim Panen Padi Warga',
            'Gotong Royong Bersih Lingkungan', 'Pelantikan Perangkat Desa', 'Aktivitas Bank Sampah Warga',
            'Kegiatan Mahasiswa KKN UBP 2026', 'Pelatihan UMKM Warga Desa', 'Perayaan Hari Jadi Desa Pejaten',
        ];
        foreach ($galeriUmum as $i => $judul) {
            Gallery::create(['judul' => $judul, 'kategori' => 'umum', 'urutan' => $i]);
        }
        $galeriKkn = [
            'Sosialisasi Program KKN kepada Warga', 'Pelatihan Pembuatan Eco Enzyme', 'Kegiatan Gotong Royong Warga',
            'Kunjungan Dosen Pembimbing Lapangan', 'Kelas Literasi untuk Anak Desa', 'Acara Penutupan & Serah Terima Program',
        ];
        foreach ($galeriKkn as $i => $judul) {
            Gallery::create(['judul' => $judul, 'kategori' => 'kkn', 'urutan' => $i]);
        }
    }
}
