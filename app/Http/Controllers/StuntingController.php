<?php

namespace App\Http\Controllers;

use App\Models\Stunting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class StuntingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $height = 0;
        $result = ['condition' => '-'];
        return view('pages.kalkulator.index', compact('height', 'result'));
    }

    public function calculate(Request $request)
    {
        $request->validate([
            'mother_name' => 'required|string',
            'child_name' => 'required|string',
            'address' => 'required|string',
            'birthdate' => 'required|date|before_or_equal:today',
            'height' => 'required|numeric',
            'gender' => 'required|in:male,female',
        ]);

        $birthdate = $request->input('birthdate');
        $height = $request->input('height');
        $gender = $request->input('gender');

        $totalMonths = $this->calculateAgeInMonths($birthdate);
        $result = $this->calculateSD($totalMonths, $height, $gender);

        Stunting::create([
            'ibu' => $request->input('mother_name'),
            'anak' => $request->input('child_name'),
            'alamat' => $request->input('address'),
            'tanggal_lahir' => $birthdate,
            'usia' => $totalMonths,
            'panjang_badan' => $height,
            'kelamin' => $gender,
            'kondisi' => $result['condition'], // Asumsi 'condition' ada di $result
            'deviasi' => $result['result'], // Asumsi 'deviation' ada di $result
        ]);

        return view('pages.kalkulator.index', compact('result', 'height'));
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

    public function destroy(string $id)
    {
        // Mencari record dengan ID yang diberikan
        $stunting = Stunting::findOrFail($id);

        // Menghapus record
        $stunting->delete();

        // Mengalihkan kembali ke halaman sebelumnya dengan pesan sukses
        return redirect()->route('admin.dashboard')->with('success', 'Data berhasil dihapus.');
    }
}
