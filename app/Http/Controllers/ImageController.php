<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ImageController extends Controller
{
    public function upload(Request $request)
    {
        if ($request->hasFile('image')) {
            $image = $request->file('image');

            // Procesa la imagen, por ejemplo, guárdala en una ubicación específica
            $image->store('public/images');
            
            // También puedes guardar la información de la imagen en la base de datos si es necesario
            
            return response()->json(['message' => 'Imagen subida correctamente']);
        }

        return response()->json(['error' => 'No se encontró ninguna imagen']);
    }
}
