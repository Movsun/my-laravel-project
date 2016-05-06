<?php

namespace App\Http\Controllers\Material;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Material;
use App\MaterialCategory;
use App\MaterialType;
use App\MaterialFormat;
use App\License;
use App\Language;
use App\MaterialAuthor;
use Validator;
use Auth;

class MaterialController extends Controller
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
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $materials = Material::paginate(10);

        return view('material.index', ['materials' => $materials]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $materialCategories = MaterialCategory::all(['id', 'name']);
        $materialTypes = MaterialType::all(['id', 'name']);
        $materialFormats = MaterialFormat::all(['id', 'name']);
        $languages = Language::all(['id', 'name']);
        $licenses = License::all(['id', 'name']);
        return view('material.create', compact('materialCategories',
        'materialTypes', 'materialFormats', 'languages', 'licenses'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      if (isset($request->is_sumitter_author)) {
        $validationRules = [
            'name' => 'required|max:255',
            'description' => 'required',
            'link' => 'required',
        ];
      } else {
        $validationRules = [
            'name' => 'required|max:255',
            'description' => 'required',
            'link' => 'required',
            'first_name' => 'required|max:255',
            'last_name' => 'required|max:255',
            'email' => 'email',
            'website' => 'url',
        ];
      }

      // dd($validationRules);


      $validator = Validator::make($request->all(), $validationRules);


      if ($validator->fails()) {
          return redirect('materials/create')
                      ->withErrors($validator)
                      ->withInput();
      }

      // dd($request);
      $material = Material::create($request->all());
      if (!isset($request->is_sumitter_author)) {
        $author = MaterialAuthor::create($request->all());
        // $material = Material::create($request->all());
        // dd($material);
        $author->save();
        $author->material()->save($material);
        // $user = Auth::user()->material()->save($material);
      } else{
        // $material = Material::create($request->all());
        $material->is_sumitter_author = true;
        $material->save();
        // $user = Auth::user()->material()->save($material);
      }
      $user = Auth::user()->material()->save($material);
      $material->materialCategories()->attach($request->material_category_id);
      // $materialCategory = materialCategory::find($request->material_)


      return 'successful uploaded';
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
        $material = Material::find($id);
        return view('material.material', compact('material'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // $material = Material::find($id);
        // $user = Auth::user();
        // if ($material->user_id !== $user->id) {
        //   return redirect->back()->withErrors(['message', 'You don\'t have permission']);
        // }
        // $material->delete();
        // return 'successful deleted';
    }
}
