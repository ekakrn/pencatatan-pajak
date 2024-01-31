<?php

namespace App\Exports;

use App\Models\Tax;
use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\WithHeadings;

class ExportClass implements FromQuery, WithHeadings
{
    protected $id;
    protected $columns;

    public function __construct($id, array $columns)
    {
        $this->id = $id;
        $this->columns = $columns;
    }

    public function headings(): array
    {
        return [
            'Penjualan',
            'Beban Administrasi',
            'Beban Pemasaran',
            'Beban Lainnya',
            'Pendapatan Lain',
            'Total',
            'Pajak (22%)',
        ];
    }

    public function query()
    {
        return Tax::where('id', $this->id)->select($this->columns);
    }
}
