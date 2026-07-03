<?php

namespace App\Http\Controllers;

use App\Models\VillageProfile;
use App\Models\VillageHistorySection;
use App\Models\Vision;
use App\Models\Mission;
use App\Models\VillageBoundary;
use App\Models\Dusun;
use App\Models\DemographicSummary;
use App\Models\DemographicBreakdown;
use App\Models\VillagePotential;
use App\Models\Umkm;
use App\Models\Facility;
use App\Models\OrganizationNode;
use App\Models\Official;
use App\Models\Institution;
use App\Models\Service;
use App\Models\DataTransparency;
use App\Models\EnvironmentalTopic;
use App\Models\EnvironmentalFaq;
use App\Models\KknPeriod;
use App\Models\KknMember;
use App\Models\KknTimeline;
use App\Models\KknTimelineItem;
use App\Models\KknIndividualProgram;
use App\Models\KknOutput;
use App\Models\Post;
use App\Models\Gallery;

class ProfilDesaController extends Controller
{
    public function index()
    {
        $profile = VillageProfile::first();
        $sejarah = VillageHistorySection::orderBy('urutan')->get();
        $visi = Vision::first();
        $misi = Mission::orderBy('urutan')->get();
        $batas = VillageBoundary::all();
        $dusun = Dusun::orderBy('urutan')->get();
        $demografi = DemographicSummary::where('tahun', now()->year)->first();
        $demografiBreakdown = DemographicBreakdown::orderBy('urutan')->get();
        $potensi = VillagePotential::orderBy('urutan')->get();
        $umkm = Umkm::orderBy('urutan')->get();
        $sarana = Facility::orderBy('urutan')->get();
        $orgChart = OrganizationNode::where('parent_id', null)->first();
        $perangkat = Official::orderBy('urutan')->get();
        $lembaga = Institution::orderBy('urutan')->get();
        $layanan = Service::orderBy('urutan')->get();
        $dataDesa = DataTransparency::orderBy('urutan')->get();
        $edukasi = EnvironmentalTopic::orderBy('urutan')->get();
        $faq = EnvironmentalFaq::orderBy('urutan')->get();
        
        $kknPeriod = KknPeriod::where('is_active', true)->first();
        $kknMembers = null;
        $kknTimeline = null;
        $kknIndividual = null;
        $kknOutput = null;
        $kknArtikel = null;
        
        if ($kknPeriod) {
            $kknMembers = KknMember::where('kkn_period_id', $kknPeriod->id)->orderBy('urutan')->get();
            $kknTimeline = KknTimeline::where('kkn_period_id', $kknPeriod->id)->orderBy('urutan')->get();
            $kknIndividual = KknIndividualProgram::where('kkn_period_id', $kknPeriod->id)->orderBy('urutan')->get();
            $kknOutput = KknOutput::where('kkn_period_id', $kknPeriod->id)->orderBy('urutan')->get();
            $kknArtikel = Post::where('kkn_period_id', $kknPeriod->id)->where('category', 'artikel_kkn')->get();
        }
        
        $berita = Post::where('status', 'terbit')->orderBy('tanggal_publish', 'desc')->get();
        $galeriUmum = Gallery::where('kategori', 'umum')->orderBy('urutan')->get();
        $galeriKkn = Gallery::where('kategori', 'kkn')->orderBy('urutan')->get();

        return view('profil-desa.index', [
            'profile' => $profile,
            'sejarah' => $sejarah,
            'visi' => $visi,
            'misi' => $misi,
            'batas' => $batas,
            'dusun' => $dusun,
            'demografi' => $demografi,
            'demografiBreakdown' => $demografiBreakdown,
            'potensi' => $potensi,
            'umkm' => $umkm,
            'sarana' => $sarana,
            'orgChart' => $orgChart,
            'perangkat' => $perangkat,
            'lembaga' => $lembaga,
            'layanan' => $layanan,
            'dataDesa' => $dataDesa,
            'edukasi' => $edukasi,
            'faq' => $faq,
            'kknPeriod' => $kknPeriod,
            'kknMembers' => $kknMembers,
            'kknTimeline' => $kknTimeline,
            'kknIndividual' => $kknIndividual,
            'kknOutput' => $kknOutput,
            'kknArtikel' => $kknArtikel,
            'berita' => $berita,
            'galeriUmum' => $galeriUmum,
            'galeriKkn' => $galeriKkn,
        ]);
    }
}
