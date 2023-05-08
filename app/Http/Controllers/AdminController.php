<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Admin;
use App\article;
use App\information;
use App\faq;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    public function index()
    {
        return view('admin/Admin_index');
    }

     //login admin
     public function log_admin(Request $request)
     {
          //login
          $login = Admin::loggin(request('mail'),request('mdp'));
         if($login == 0)
         {
             return view('admin/Admin_index',[
                 'erreur' => 'Email ou mot de passe errone',
                     ]);
         }
         else
         {
             return view('admin/Acceuill_admin');
         }
     }

     public function insererArticle(Request $request)
     {
        $data = $request->request->all();
        article::create($data);
        return redirect("lister");     
     }

     public function lister(Request $request)
     {
        $bloc = 5;
        // Récupérer le numéro de page et le nombre d'éléments par page
        $page = request()->query('page',1); // Valeur par défaut : 1
        $perPage = request()->query('perPage',$bloc); // Valeur par défaut : 10
        $currentPage = $request->session()->get('numero1');
        if($currentPage==null)
        {
            $currentPage = 1;
        }
        $liste = article::orderBy("idarticle", "asc")->paginate($perPage, ['*'], 'page', $page);

        $lastPage = $liste->lastPage(); 
  
        $listeNumeroPage = range(1, $lastPage);
      

        return view('admin/liste',[
            'liste' => $liste,
            'currentPage' => $currentPage,
            'lastPage' => $lastPage,
            'listeNumeroPage' => $listeNumeroPage,
        ]);
     }    

     public function pagination(Request $request)
     {
        $url = request('numero');
        $tab = array();
        $tab = explode(".", $url);
        $idarticle = $tab[count($tab)-3];
        $request->session()->put('numero1',$idarticle);
        return redirect("lister");
     }


    public function VersupdateAll()
    {
        $url = request('id');
        $tab = array();
        $tab = explode("-", $url);
        $id = $tab[count($tab)-2];
        $valeur = article::find($id)->first();
        return view('admin/updateArticle',
        [
              'valeur' => $valeur,
        ]);
    }
       
    public function updateAll(Request $request)
    {
    $data = $request->all();
    $item = article::find(request('id'));
    if (!$item) {
        return response()->json(['message' => 'Item not found'], 404);
    }
    $item->update($data);
    return redirect("lister");      
    }

   public function delete(Request $request)
   {
    $url = request('idarticle');
    $tab = array();
    $tab = explode(".", $url);
    $idarticle = $tab[count($tab)-3];
    $id = article::find($idarticle);
    $id->delete();
    return redirect("lister");  
   }

   public function recherche(Request $request)
   {
       $query = "SELECT * FROM articles";
       $bindings = array();
       if (null!==$request->input('titre')) {
           $query .= (count($bindings) > 0 ? " AND" : " WHERE") . " titre like ?";
           $bindings[] = "%" . $request->input('titre') . "%";
       }

       if (null!==$request->input('date1')) {
           $query .= (count($bindings) > 0 ? " AND" : " WHERE") . "  datepublication >= ?";
           $bindings[] = $request->input('date1') ;
       }
       
       if (null!==$request->input('date2')) {
           $query .= (count($bindings) > 0 ? " AND" : " WHERE") . " datepublication <= ?";
           $bindings[] =  $request->input('date2') ;
       }
       
       
       $results = \DB::select($query, $bindings);
       $lastPage = 5; 
       $listeNumeroPage = range(1, $lastPage);
       $currentPage = 1;
       return view('admin/liste',[
           'liste' => $results,
           'lastPage' => $lastPage,
           'listeNumeroPage' => $listeNumeroPage,
           'currentPage' => $currentPage,
       ]);
   }


   public function info()
   {
       return view('admin/information');
   }

   public function insererInfo(Request $request)
   {
       $data = $request->all();
       information::create($data);
       return redirect("info");
   }

   public function liste_faq()
   {
    $liste = DB::select('select * from faqs where reponse is  null');
    return view('admin/liste_faq',[
        'liste' => $liste,
    ]);
   }

   public function repondre(Request $request)
   {

    $data = $request->all();

    $item = faq::find(request('idfaq'));
  
    $item->update([
        'reponse' => $data['reponse']
    ]);

     return redirect("liste_faq");
   }

   public function log_out()
   {
          return redirect("/");
   }

}
