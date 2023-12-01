<?php

use App\Http\Controllers\EleveController;
use App\Http\Controllers\ProduitController;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

route::get("/dashbord",function(){

    //tableau simple
   /* $eleve=["koffi","adjo"];
    return "le premier eleve est ".$eleve[0];*/

    //tableau associatif
   
    $afi=[
        "nom"=>"docteur",
        "prenom"=>"afi",
        "age"=>10
        
    ];
    return  $afi;
});

Route::get("/prod",[ProduitController::class,"index"]);

Route::get("/prod/{position}",[ProduitController::class,"show"]);

Route::put('/prod/{position}', [ProduitController::class, 'update']);

Route::post('/prod', [ProduitController::class, 'store']);

Route::delete("/prod",[ProduitController::class, "destroy"]);



