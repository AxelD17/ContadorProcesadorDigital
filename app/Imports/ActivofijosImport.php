<?php

namespace App\Imports;

use App\ActivoFijo;
use Maatwebsite\Excel\Concerns\ToModel;

class ActivofijosImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new ActivoFijo([
            'Codigo'=> $row[0],
            'CuentaContable'=> $row[1],
            'Descipcion'=> $row[2],
            'Marca'=> $row[3],
            'Modelo'=> $row[4],
            'NumeroSeriePlaca'=> $row[5],
            'CostoFin'=> $row[6],
            'Adquisicion'=> $row[7],
            'Mejoras'=> $row[8],
            'RetirosBajas'=> $row[9],
            'Otros'=> $row[10],
            'ValorHistorico'=> $row[11],
            'AjusteInflacion'=> $row[12],
            'ValorAjustado'=> $row[13],
            'CostoNetoIni'=> $row[14],
            'FecAdquisicion'=> $row[15],
            'FecInicio'=> $row[16],
            'Metodo'=> $row[17],
            'NroDoc'=> $row[18],
            'PorcDepreciacion'=> $row[19],
            'DepreAcumulada'=> $row[20],
            'DepreEjercicio'=> $row[21],
            'DepreRelacionada'=> $row[22],
            'DepreOtros'=> $row[23],
            'DepreHistorico'=> $row[24],
            'DepreAjusInflacion'=> $row[25],
            'DepreAcuInflacion'=> $row[26],
            'CostoHistorico'=> $row[27],
            'DepreAcuTributaria'=> $row[28],
            'CostoNetoIniTributaria'=> $row[29],
            'DepreEjercicioTributaria'=> $row[30],
            'FecBaja'=> $row[31],
        ]);
    }
}
