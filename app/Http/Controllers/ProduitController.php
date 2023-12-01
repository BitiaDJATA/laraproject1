<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProduitController extends Controller
{
    /**
     * Display a listing of the resource.
     */
 //creation de la table contenant 
 
     public $produit=["riz","pates","couscous","mil","viande"];
    public function index()
    {
        /*$revers= array_reverse($this->produit);
        return $revers;*/

        return $this->produit;
    }
    //ajout d'element
    /*public function store($nameProduit)
    {
        array_push($this->produit,$nameProduit);
        return $this->produit;   
     }*/

     //request

   /* public function store(Request $request){
        return $request->json("nom");
    }*/
//utilisation de request 
    public function store(Request $request){

        array_push($this->produit, $request->json("name"));
        return $this->produit;
    }

//recuperer un element à base de sa position
    public function show($position)
    {
        if(isset($this->produit[$position])){
            return $this->produit[$position];
        }else{
            return" Ce produit n'existe pas ";
        }
    }

   
    
//modifier un element

   /* public function update($position, $newName)
    {
        if(isset($this->produit[$position])){
            $this->produit[$position] = $newName;
            return $this->produit;
        }else{
            return"cette mise à jour est impossible";
        }
    }*/
    //new update avec request
    public function update(Request $request, $position)
    {
        if(isset($this->produit[$position])){
            $this->produit[$position] = $request->json("name");
            return $this->produit;
        }else{
            return"cette mise à jour est impossible";
        }
    }

//suppression
    public function destroy()
    {
        $this->produit=[];
        return $this->produit;
    }
}
