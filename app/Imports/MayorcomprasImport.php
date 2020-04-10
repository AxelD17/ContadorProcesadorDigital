<?php

namespace App\Imports;

use App\Mayorcompra;
use Maatwebsite\Excel\Concerns\ToModel;

class MayorcomprasImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Mayorcompra([
            'Periodo'=> $row[0],
            'Correlativo'=> $row[1],
            'FecEmision'=> $row[2],
            'FecVenci'=> $row[3],
            'TipoComp'=> $row[4],
            'NumSerie'=> $row[5],
            'AnoDua'=> $row[6],
            'NumComp'=> $row[7],
            'NumTicket'=> $row[8],
            'TipoDoc'=> $row[9],
            'NroDoc'=> $row[10],
            'Nombre'=> $row[11],
            'BIAG1'=> $row[12],
            'IGVIPM1'=> $row[13],
            'BIAG2'=> $row[14],
            'IGVIPM2'=> $row[15],
            'BIAG3'=> $row[16],
            'IGVIPM3'=> $row[17],
            'AdqGrava'=> $row[18],
            'ISC'=> $row[19],
            'Otros'=> $row[20],
            'Total'=> $row[21],
            'Moneda'=> $row[22],
            'TipoCam'=> $row[23],
            'FecOrigenMod'=> $row[24],
            'TipoCompMod'=> $row[25],
            'NumSerieMod'=> $row[26],
            'AnoDuaMod'=> $row[27],
            'NumSerComOriMod'=> $row[28],
            'FecConstDetrac'=> $row[29],
            'NumConstDetrac'=> $row[30],
            'Retencion'=> $row[31],
            'ClasifBi'=> $row[32],
            'Contrato'=> $row[33],
            'ErrorT1'=> $row[34],
            'ErrorT2'=> $row[35],
            'ErrorT3'=> $row[36],
            'ErrorT4'=> $row[37],
            'MedioPago'=> $row[38],
            'Estado'=> $row[39]
        ]);
    }
}
