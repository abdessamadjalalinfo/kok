<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }


    public function index1()
    {
        if(Auth::user()->role=='admin')
        {
            return view('admin');
        }
        if(Auth::user()->role=='enseignant')
        {
            return view('enseignant');
        }
        if(Auth::user()->role=='sec')
        {
            return view('sec');
        }
        if(Auth::user()->role=='mb')
        {
            return view('mb');
        }
        else{
            return 0;
        }
    }


    public function add(Request $request)
    {
        
        
        
        
        $budget=new \App\Budget();
        $budget->valeur=$request->valeurbudget;
        $budget->annee=$request->annee;
        $budget->user_id=Auth::user()->id;
        $budget->save();
        $liste=[];
        if($request->aai!="")
        {
            $rubrique=new \App\Rubrique();
            $rubrique->valeur=$request->aai;
            $rubrique->nom=$request->aainame;
            $rubrique->budget_id=$budget->id;
            $rubrique->save();
            array_push($liste,[$request->aainame,$request->aai,$rubrique->id]);
        }

        if($request->me!="")
        {
            $rubrique=new \App\Rubrique();
            $rubrique->valeur=$request->me;
            $rubrique->nom=$request->mename;
            $rubrique->budget_id=$budget->id;
            $rubrique->save();
            array_push($liste,[$request->mename,$request->me,$rubrique->id]);
        }

        if($request->mb!="")
        {
            $rubrique=new \App\Rubrique();
            $rubrique->valeur=$request->mb;
            $rubrique->nom=$request->mbname;
            $rubrique->budget_id=$budget->id;
            $rubrique->save();
            array_push($liste,[$request->mbname,$request->mb,$rubrique->id]);
        }
        //dd($liste);
        return view('affichage-budget',['annee'=>$request->annee,'valeur'=>$request->valeurbudget,'liste'=>$liste]);

       
    }


    public function update($id)
    {
        $budget=\App\Budget::find($id);
        $rubriques=\App\Rubrique::all()->where('budget_id','=',$id);
        $liste=[];
        foreach($rubriques as $rubrique)
        {
            array_push($liste,[$rubrique->nom,$rubrique->valeur,$rubrique->id]);

        }
        return view('affichage-budget',['annee'=>$budget->annee,'valeur'=>$budget->valeur,'liste'=>$liste]);
    }




    public function supp_rub(Request $request)
    {
        $rub=\App\Rubrique::find($request->id);
        $x=$rub->budget_id;
        
        $rub->delete();
        
        
        $budget=\App\Budget::find($x);
        $rubriques=\App\Rubrique::all()->where('budget_id','=',$x);
        $liste=[];
        foreach($rubriques as $rubrique)
        {
            array_push($liste,[$rubrique->nom,$rubrique->valeur,$rubrique->id]);

        }
        return view('affichage-budget',['annee'=>$budget->annee,'valeur'=>$budget->valeur,'liste'=>$liste]); 

    }


    public function update_rub(Request $request)
    {
        $rubrique=\App\Rubrique::find($request->id_rub);
        $rubrique->valeur=$request->valeur_rub;
        $x=$rubrique->budget_id;
        $rubrique->save();


        return  $this->update($x); 
    }
}
