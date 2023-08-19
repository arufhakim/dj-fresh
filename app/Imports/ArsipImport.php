<?php

namespace App\Imports;

use App\Models\Arsip;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Concerns\WithValidation;

class ArsipImport implements ToModel, WithHeadingRow, WithValidation
{
    /**
     * @param array $row
     *
     * @return \Illuminate\Database\Eloquent\Model|null
     */
    public function model(array $row)
    {
        return new Arsip([
            'bagian' => $row['bagian'],
            'kode' => $row['kode'],
            'uraian' => $row['uraian'],
            'tahun' => $row['tahun'],
            'no_rak' => $row['no_rak'],
            'no_ordner' => $row['no_ordner'],
            'no_label' => $row['no_label'],
            'lokasi' => $row['lokasi'],
        ]);
    }

    public function rules(): array
    {
        return [
            '*.bagian' => 'required|max:255',
            '*.kode' => 'required|max:20',
            '*.uraian' => 'required|max:16000000',
            '*.tahun' => 'required|numeric',
            '*.no_rak' => 'nullable|max:20',
            '*.no_ordner' => 'nullable|max:20',
            '*.no_label' => 'nullable|max:20',
            '*.lokasi' => 'nullable|max:100',
        ];
    }
}
