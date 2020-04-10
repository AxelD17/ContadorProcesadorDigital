<?php

namespace App\Imports;

use App\Mayorgasto;
use Maatwebsite\Excel\Concerns\ToModel;

class MayorgastosImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Mayorgasto([
            'Periodo'=> $row[0],
            'CUO'=> $row[1],
            'AMC'=> $row[2],
            'Cuenta'=> $row[3],
            'Unid_Econ'=> $row[4],
            'CentroCosto'=> $row[5],
            'Moneda'=> $row[6],
            'TipoDoc1'=> $row[7],
            'Numero'=> $row[8],
            'TipoDoc2'=> $row[9],
            'NumSerie'=> $row[10],
            'NumComp'=> $row[11],
            'FecEmision'=> $row[12],
            'FecVenci'=> $row[13],
            'FecOperacion'=> $row[14],
            'Glosa1'=> $row[15],
            'Glosa2'=> $row[16],
            'Debe'=> $row[17],
            'Haber'=> $row[18],
            'RefenciaCompraVenta'=> $row[19],
            'IndOP'=> $row[20],
            'Diferenciar'=> $row[21], 
        ]);
    }
}
