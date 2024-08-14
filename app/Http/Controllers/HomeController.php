<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Stunting;
use Carbon\Carbon;
use Illuminate\Http\Request;
use DOMDocument;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

    private function extractImageFromHtml($htmlContent)
    {
        $doc = new DOMDocument();
        @$doc->loadHTML($htmlContent);

        foreach ($doc->getElementsByTagName('img') as $img) {
            return $img->getAttribute('src');
        }

        return null; // Jika tidak ada gambar
    }

    private function extractTextFromHtml($htmlContent)
    {
        $doc = new DOMDocument();
        @$doc->loadHTML($htmlContent);

        $textContent = '';
        foreach ($doc->getElementsByTagName('p') as $paragraph) {
            $textContent .= $paragraph->textContent . ' ';
            break; // Hanya mengambil paragraf pertama
        }

        return trim($textContent);
    }

    public function index(Request $request)
    {
        $articles = Article::latest()->take(3)->get();

        foreach ($articles as $article) {
            $article->image = $this->extractImageFromHtml($article->content);
            $article->excerpt = $this->extractTextFromHtml($article->content);

            // Memformat tanggal publikasi artikel
            $article->formatted_date = Carbon::parse($article->created_at)
                ->locale('id')
                ->translatedFormat('l, j F Y | H:i');
        }

        return view('pages.guest.home', compact('articles'));
    }

    public function calculate(Request $request)
    {
        $request->validate([
            'mother_name' => 'required|string',
            'child_name' => 'required|string',
            'birthdate' => 'required|date|before_or_equal:today',
            'height' => 'required|numeric',
            'gender' => 'required|in:male,female',
        ]);

        $birthdate = $request->input('birthdate');
        $height = $request->input('height');
        $gender = $request->input('gender');

        $totalMonths = $this->calculateAgeInMonths($birthdate);
        $result = $this->calculateSD($totalMonths, $height, $gender);

        // if (Auth::check() && request()->routeIs('kalkulator.index')) {
        //     // Simpan data ke dalam tabel stuntings
        //     Stunting::create([
        //         'ibu' => $request->input('mother_name'),
        //         'anak' => $request->input('child_name'),
        //         'tanggal_lahir' => $birthdate,
        //         'usia' => $totalMonths,
        //         'panjang_badan' => $height,
        //         'kelamin' => $gender,
        //         'kondisi' => $result['condition'], // Asumsi 'condition' ada di $result
        //         'deviasi' => $result['result'], // Asumsi 'deviation' ada di $result
        //     ]);

        //     return view('pages.kalkulator.index', compact('result', 'height'));
        // return response()->json([$result, $height]);
        // }
        return response()->json([$result, $height]);
    }

    private function calculateAgeInMonths($birthdate)
    {
        $birthdateObj = new \DateTime($birthdate);
        $currentDate = new \DateTime();

        if ($birthdateObj > $currentDate) {
            return redirect()->back()->withErrors(['birthdate' => 'Tanggal lahir tidak boleh lebih dari tanggal saat ini.']);
        }

        $diffInMonths = $birthdateObj->diff($currentDate)->y * 12 + $birthdateObj->diff($currentDate)->m;

        if ($birthdateObj->diff($currentDate)->d > 15) {
            $diffInMonths += 1;
        }

        return $diffInMonths;
    }

    private function calculateSD($age, $height, $gender)
    {
        $table = $this->getStandardTable($gender);

        if (!is_int($age) || !is_numeric($height)) {
            return [
                'result' => 'Data tidak valid',
            ];
        }

        if (!isset($table[$age])) {
            return [
                'result' => 'Data tidak valid',
            ];
        }

        $standards = $table[$age];

        if ($height <= $standards['-3SD']) {
            return [
                'result' => '-3 SD atau lebih rendah',
                'condition' => 'Sangat Pendek',
            ];
        } elseif ($height <= $standards['-2SD']) {
            return [
                'result' => '-3 SD & -2 SD',
                'condition' => 'Pendek',
            ];
        } elseif ($height <= $standards['-1SD']) {
            return [
                'result' => '-2 SD & -1 SD',
                'condition' => 'Normal',
            ];
        } elseif ($height <= $standards['Median']) {
            return [
                'result' => '-1 SD & Median',
                'condition' => 'Normal',
            ];
        } elseif ($height <= $standards['+1SD']) {
            return [
                'result' => 'Median & +1 SD',
                'condition' => 'Normal',
            ];
        } elseif ($height <= $standards['+2SD']) {
            return [
                'result' => '+1 SD & +2 SD',
                'condition' => 'Normal',
            ];
        } elseif ($height <= $standards['+3SD']) {
            return [
                'result' => '+2 SD & +3 SD',
                'condition' => 'Normal',
            ];
        } else {
            return [
                'result' => '+3 SD',
                'condition' => 'Tinggi',
            ];
        }
    }


    private function getStandardTable($gender)
    {
        $path = $gender == 'male' ? 'data/male_table.php' : 'data/female_table.php';
        if (file_exists(resource_path($path))) {
            return include resource_path($path);
        } else {
            throw new \Exception("File $path tidak ditemukan.");
        }
    }


    public function articleHome()
    {
        $articles = Article::all();

        foreach ($articles as $article) {
            $article->image = $this->extractImageFromHtml($article->content);
            $article->excerpt = $this->extractTextFromHtml($article->content);

            // Memformat tanggal publikasi artikel
            $article->formatted_date = Carbon::parse($article->created_at)
                ->locale('id')
                ->translatedFormat('l, j F Y | H:i');
        }

        return view('pages.guest.article', compact('articles'));
    }
}
