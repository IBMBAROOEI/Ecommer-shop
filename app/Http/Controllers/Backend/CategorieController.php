<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Categorie;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Illuminate\Pagination\Paginator;
class CategorieController extends Controller
{

    /**
     * @param Request $request
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index(Request $request)
    {
        $categores=Categorie::simplePaginate(2);

        return view('backend.categorei.table',compact('categores'));
    }


    public function create()
    {
        return view('backend.categorei.categorei');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name_categorie' => 'required|unique:categories|string',
        ]);
        Categorie::create($request->all());
        return redirect()->back()->with('success', 'دسته بندی ایجاد شد');
    }

    public function edit($id)
    {
         $categores=Categorie::find($id);
        return view('backend.categorei.edit',compact('categores') );
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name_categorie' => 'required|unique:categories|string',
        ]);
        $categores=Categorie::find($id);
        $categores->update($request->all());
        return redirect()->route('categorie.index')->with('success', 'دسته بندی بروز شد');
    }

    public function destroy($id)
    {
         Categorie::find($id)->delete();
        return redirect()->route('categorie.index')->with('success', 'دسته بندی پاک شد');
    }

    public function status_category(Categorie $Categorie)
    {

        if($Categorie->status ==1){
            $Categorie->status =0;
        }
        else{
            $Categorie->status =1;
        }
        $Categorie->save();
        return redirect()->back();
    }
    public function show($id)
    {
        $Categorie = Categorie::find($id);

        if ($Categorie !== null) {
            $products = $Categorie->products()->paginate(2);
            return view('front.index', compact('products'));
        }
    }
}
