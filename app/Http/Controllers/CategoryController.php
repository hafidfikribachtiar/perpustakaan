<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
// use App\Category;
use App\Models\Category;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $category = Category::all();
        // var_dump($category[0]->category);

        // return $kategori;

        // return view('kategori.index', compact('kategori'));

        return view('category/index', compact('category'));
    }

    public function category(Request $request){
        DB::table('category')->insert([
            'category' => $request->category,
            'description' => $request->deskripsi
        ]);
        return redirect('/category');
    }

    public function hapuscategory($id){
        
        DB::table('category')->where('id', $id)->delete();
        return redirect('/category');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('category.create');
    }
    
    public function update($id)
    {
        //
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Category::create($request->all());

        return redirect('category')->with('msg','Data Berhasil di Simpan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function editcategory($id)
    {
        $category = Category::all(); //BUAT QUERY UTK PENGAMBILAN DATA
        //LALU ASSIGN KE DALAM MASING-MASING PROPERTI DATANYA
        var_dump('g');
        $this->category_id = $id;
        $this->category = $category->category;
        $this->description = $category->description;

        // return view("/category/edit"); //LALU BUKA MODAL
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
