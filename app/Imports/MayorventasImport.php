<?php

namespace App\Imports;

use App\Mayorventa;
use Maatwebsite\Excel\Concerns\ToModel;

class MayorventasImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Mayorventa([
            'Periodo'=> $row[0],
            'Correlativo'=> $row[1],
            'Ordenado'=> $row[2],
            'FecEmision'=> $row[3],
            'FecVenci'=> $row[4],
            'TipoComp'=> $row[5],
            'NumSerie'=> $row[6],
            'NumComp'=> $row[7],
            'NumTicket'=> $row[8],
            'TipoDoc'=> $row[9],
            'NroDoc'=> $row[10],
            'Nombre'=> $row[11],
            'Export'=> $row[12],
            'BI'=> $row[13],
            'Desci'=> $row[14],
            'IGVIPMBI'=> $row[15],
            'IGVIPMDesc'=> $row[16],
            'ImporteExo'=> $row[17],
            'ImporteIna'=> $row[18],
            'ISC'=> $row[19],
            'BIIGVAP'=> $row[20],
            'IGVAP'=> $row[21],
            'Otros'=> $row[22],
            'Total'=> $row[23],
            'Moneda'=> $row[24],
            'TipoCam'=> $row[25],
            'FecOrigenMod'=> $row[26],
            'TipoCompMod'=> $row[27],
            'NumSerieMod'=> $row[28],
            'NumDocMod'=> $row[29],
            'Contrato'=> $row[30],
            'ErrorT1'=> $row[31],
            'MedioPago'=> $row[32],
            'Estado'=> $row[33],
        ]);
    }
}
