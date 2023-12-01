<?php

namespace App\Http\Controllers;

use App\Models\CategorieModel;
use Illuminate\Http\Request;

class CategorieModelController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories = CategorieModel::all();
        return response()->json($categories,"nom" );
    }

    
    public function store(Request $request)
    {

        Categorie::create(["nom"=>$request->json("nom")]);
        return response()->json($Categorie, nom);
    }

    public function show(CategorieModel $categorieModel, $id)
    {
        $categorie = CategorieModel::find($id);

        if (!$categorie) {
            return response()->json(['message' => 'Catégorie non trouvée']);
        }

        return response()->json($categorie, );
    }
    public function update(Request $request, CategorieModel $categorieModel)
    {
        //
    }
    public function destroy(CategorieModel $categorieModel)
    {
        //
    }
}
