<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PavementEvaluationTest;
use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Gd\Driver;

class PavementEvaluationTestController extends Controller
{
   
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
    /**
     * Display a listing of the resource.
     */
    public function index()   
    {
        
        $PavementEvaluationTests = PavementEvaluationTest::latest()->paginate(3);// Paginate with 10 items per page
        return view('Pavement-Evaluation-Test.index', compact('PavementEvaluationTests'))
        ->with('i', (request()->input('page', 1) - 1) *3); 
        
    }

    public function paginate(Request $request)
    {
        $PavementEvaluationTests = PavementEvaluationTest::paginate(3);
        return response()->json($PavementEvaluationTests);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Pavement-Evaluation-Test.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validate the request data
    $request->validate([
        'title' => 'required',
        'image' => 'image|nullable|max:1999|required', 
    ]);


     // Process the uploaded image
     if ($request->hasFile('image')) {
        $manager = new ImageManager(new Driver());
        $name_gen = hexdec(uniqid()).'.'. $request->file('image')->
        getClientOriginalExtension() ;

        $img = $manager->read($request->file('image'));
        $img = $img->resize(387,347);

        $img->toJpeg(80)->save(base_path('public/upload/pet/' .$name_gen));
        $save_url = 'upload/pet/'.$name_gen;
        
        
       
    
    }

    // Create a new CalibrationOfEquipment instance
    $PavementEvaluationTest = new PavementEvaluationTest;
    $PavementEvaluationTest->user_id = auth()->user()->id;
    $PavementEvaluationTest->title = $request->input('title');
    $PavementEvaluationTest->image = $save_url;
    $PavementEvaluationTest->save();

    // Redirect with success message
    return redirect()->route('Pavement-Evaluation-Test.index')
        ->with('success', "Pavement Evaluation Test Added Successfully");
    

       

    }
         
       
       
   

    /**
     * Display the specified resource.
     */
    public function show(PavementEvaluationTest $PavementEvaluationTest)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $PavementEvaluationTest = PavementEvaluationTest::findOrFail($id);
        return view('Pavement-Evaluation-Test.edit', compact('PavementEvaluationTest'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required',
            'body' => 'required',
            // Add validation rules for other fields as needed
        ]);

        $PavementEvaluationTest = PavementEvaluationTest::findOrFail($id);
        $PavementEvaluationTest->title = $request->title;
        $PavementEvaluationTest->body = $request->body;

        // Handle image upload if provided
        if ($request->hasFile('image')) {
            // Handle image upload and update logic here
        }

        $PavementEvaluationTest->save();

        return redirect()->route('Pavement-Evaluation-Test.index')
                         ->with('success', 'Pavement Evaluation Test updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
{
    $post = PavementEvaluationTest::findOrFail($id);
    $post->delete();

    return redirect()->route('Pavement-Evaluation-Test.index')
        ->with('success', 'Pavement Evaluation Test Image deleted successfully');
}
}
