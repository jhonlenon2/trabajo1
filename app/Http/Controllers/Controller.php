<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use App\Models\Computers; // Importa el modelo Computers
use Illuminate\Http\Request; // Importa la clase Request
use Exception; // Importa la clase Exception

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    /**
     * @param Computers $computers
     * @return \Illuminate\Http\JsonResponse
     */
    public function searchcomputers(Computers $computers)
    {
        return response()->json([
            'computers' => $computers->modelo
        ]);
    }

    public function deletecomputers(Computers $computers)
    {
        try {
            $computers->delete();
            return response()->json([
                'message' => 'La computadora se borró exitosamente'
            ]);
        } catch (Exception $e) {
            return response()->json([
                'message' => 'Error en la eliminación de la computadora'
            ], 500);
        }
    }

    public function savecomputers(Request $request)
    {
        try {
            $computers = new Computers;
            $computers->modelo = $request->modelo;
            $computers->marca = $request->marca;
            $computers->tamaño = $request->tamaño;
            $computers->codigo = $request->codigo;
            $computers->sistema_operativo = $request->sistema_operativo;

            $computers->save();
            return response()->json([
                'message' => 'La computadora se ingresó con éxito'
            ]);
        } catch (Exception $e) {
            return response()->json([
                'message' => 'Error al registrar la computadora'
            ], 500);
        }
    }

    public function updatecomputers(Request $request, Computers $computers)
    {
        try {
            $computers->modelo = $request->modelo;
            $computers->marca = $request->marca;
            $computers->tamaño = $request->tamaño;
            $computers->codigo = $request->codigo;
            $computers->sistema_operativo = $request->sistema_operativo;

            $computers->update();
            return response()->json([
                'message' => 'La computadora se actualizó con éxito'
            ]);
        } catch (Exception $e) {
            return response()->json([
                'message' => 'Error en la actualización de la computadora'
            ], 500);
        }
    }

    public function computers()
    {
        $computers = Computers::all();
        return response()->json([
            'computers' => $computers,
            'status' => true
        ]);
    }
}
