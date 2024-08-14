<?php

namespace App\Exports;

use App\Models\Stunting;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\WithStyles;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;
use PhpOffice\PhpSpreadsheet\Style\Border;
use PhpOffice\PhpSpreadsheet\Style\Fill;
use Carbon\Carbon;

class StuntingExport implements FromCollection, WithHeadings, WithMapping, WithStyles, ShouldAutoSize
{
    /**
     * @return \Illuminate\Support\Collection
     */
    public function collection()
    {
        // Urutkan data berdasarkan nama ibu
        return Stunting::orderBy('created_at', 'desc')->get();
    }

    /**
     * Tentukan heading untuk kolom
     *
     * @return array
     */
    public function headings(): array
    {
        // Tanggal ekspor
        $tanggalEkspor = Carbon::now()->timezone('Asia/Jakarta')->format('d F Y H:i:s');

        // Heading
        return [
            ["Data Stunting - Tanggal Ekspor: $tanggalEkspor WIB"], // Baris pertama untuk tanggal
            [
                'No.',           // 1
                'Nama Ibu',      // Nama Ibu
                'Nama Anak',     // Nama Anak
                'Alamat',        // Alamat
                'Tanggal Lahir', // Tgl Lahir
                'Usia',          // Usia
                'Kelamin',       // Kelamin
                'Tinggi Badan',  // Tinggi Badan
                'Kondisi',       // Kondisi
                'Deviasi',       // Deviasi
                'Waktu Input',       // Deviasi
            ],
        ];
    }

    /**
     * Tentukan urutan data untuk tiap kolom
     *
     * @param mixed $stunting
     * @return array
     */
    public function map($stunting): array
    {
        static $no = 1; // Nomor urut

        return [
            $no++,                      // No.
            $stunting->ibu,             // Nama Ibu
            $stunting->anak,            // Nama Anak
            $stunting->alamat,          // Alamat
            $stunting->tanggal_lahir,   // Tgl Lahir
            $stunting->usia,            // Usia
            $stunting->kelamin,         // Kelamin
            $stunting->panjang_badan,   // Tinggi Badan
            $stunting->kondisi,         // Kondisi
            $stunting->deviasi,         // Deviasi
            $stunting->created_at->setTimezone('Asia/Jakarta')->format('d-m-Y H:i:s'),
        ];
    }

    /**
     * Terapkan border dan style lainnya pada worksheet.
     *
     * @param Worksheet $sheet
     * @return array
     */
    public function styles(Worksheet $sheet)
    {
        // Set border untuk semua cell yang digunakan
        $sheet->getStyle('A1:K' . $sheet->getHighestRow())->applyFromArray([
            'borders' => [
                'allBorders' => [
                    'borderStyle' => Border::BORDER_THIN,
                    'color' => ['argb' => 'FF000000'],
                ],
            ],
        ]);

        // Set style untuk heading
        $sheet->getStyle('A2:K2')->applyFromArray([
            'font' => [
                'bold' => true,
            ],
            'fill' => [
                'fillType' => Fill::FILL_SOLID,
                'color' => ['argb' => 'FFEFEFEF'],
            ],
        ]);

        // Merge cell untuk baris tanggal ekspor
        $sheet->mergeCells('A1:K1');

        // Set style untuk baris tanggal ekspor
        $sheet->getStyle('A1')->applyFromArray([
            'font' => [
                'bold' => true,
                'size' => 12,
            ],
            'alignment' => [
                'horizontal' => \PhpOffice\PhpSpreadsheet\Style\Alignment::HORIZONTAL_CENTER,
            ],
        ]);

        return [];
    }
}
