<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Encomienda;
use Mike42\Escpos\PrintConnectors\WindowsPrintConnector;
use Mike42\Escpos\Printer;

class EncomiendaPrintController extends Controller
{

    public function cod($id)
    {
        $encomienda = Encomienda::findOrFail($id);
        $permitted_chars = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
 
        function generate_string($input, $strength = 16) {
            $input_length = strlen($input);
            $random_string = '';
            for($i = 0; $i < $strength; $i++) {
                $random_character = $input[mt_rand(0, $input_length - 1)];
                $random_string .= $random_character;
            }
        return $random_string;
        }
        
        $codeEcom=generate_string($permitted_chars, 10);

        if(empty($encomienda->cod)){
            if(($encomienda->cod)==$codeEcom){
                $codeEcom=generate_string($permitted_chars, 10);
            }
            else{
                $encomienda->update([
                    'cod'    =>$codeEcom,
                ]);
            }
        }
        $act=1;
        return view('ecomiendas.show')->with(compact('encomienda','act'));
    }


    public function print($id)
    {
        $encomienda = Encomienda::findOrFail($id);
        $nombreImpresora = "recluso";
        $connector = new WindowsPrintConnector($nombreImpresora);
        $impresora = new Printer($connector);
        $impresora->setJustification(Printer::JUSTIFY_CENTER);
        $impresora->setTextSize(2, 2);
        $impresora->text("ESTABLECIMIENTO\n");
        $impresora->text("PENINTENCIARIO Y\n");
        $impresora->text("CARCELARIO\n");
        $impresora->text("(EPC) Yopal\n");
        $impresora->setJustification(Printer::JUSTIFY_CENTER);
        $impresora->setTextSize(1, 1);
        $impresora->text("\n===============================\n");
        $impresora->setJustification(Printer::JUSTIFY_CENTER);
        $impresora->setTextSize(2, 2);
        $impresora->text("Datos de recluso \n");
        $impresora->feed(1);
        $impresora->setTextSize(2, 2);
        $impresora->setJustification(Printer::JUSTIFY_LEFT);
        $impresora->setTextSize(1, 1);
        $impresora->text("Número de Td: ");
        $impresora->text("{$encomienda->recluse->code_recluse} \n");
        $impresora->setJustification(Printer::JUSTIFY_LEFT);
        $impresora->text("Nombre: ");
        $impresora->text("{$encomienda->recluse->name_recluse} {$encomienda->recluse->surname_recluse} \n");
        $impresora->text("Código de ecomienda: ");
        $impresora->text("{$encomienda->cod} \n");
        $impresora->feed(1);
        $impresora->setJustification(Printer::JUSTIFY_CENTER);
        $impresora->text("{$encomienda->recluse->pavilions_id}  ");
        $impresora->text("Celda: ");
        $impresora->text("{$encomienda->recluse->jailcells} \n");
        $impresora->setJustification(Printer::JUSTIFY_CENTER);
        $impresora->setTextSize(1, 1);
        $impresora->text("\n===============================\n");
        $impresora->feed(3);
        $impresora->close();
        return redirect('/encomienda/index');
    }

}
