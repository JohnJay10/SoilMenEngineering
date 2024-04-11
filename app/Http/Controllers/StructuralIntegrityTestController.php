<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Intervention\Image\ImageManager;
use App\Models\StructuralIntegrityTest;
use Intervention\Image\Drivers\Gd\Driver;

class StructuralIntegrityTestController extends Controller
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
        
        $StructuralIntegrityTests = StructuralIntegrityTest::latest()->paginate(3);// Paginate with 10 items per page
        return view('Structural-Integrity-Test.index', compact('StructuralIntegrityTests'))
        ->with('i', (request()->input('page', 1) - 1) *3); 
        
    }

    public function paginate(Request $request)
    {
        $StructuralIntegrityTests = StructuralIntegrityTest::paginate(3);
        return response()->json($StructuralIntegrityTests);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Structural-Integrity-Test.create');
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

        $img->toJpeg(80)->save(base_path('public/upload/sit/' .$name_gen));
        $save_url = 'upload/sit/'.$name_gen;
        
        
       
    
    }

    // Create a new CalibrationOfEquipment instance
    $StructuralIntegrityTest = new StructuralIntegrityTest;
    $StructuralIntegrityTest->user_id = auth()->user()->id;
    $StructuralIntegrityTest->title = $request->input('title');
    $StructuralIntegrityTest->image = $save_url;
    $StructuralIntegrityTest->save();

    // Redirect with success message
    return redirect()->route('Structural-Integrity-Test.index')
        ->with('success', "Structural Integrity Test Added Successfully");
    

       

    }
         
       
       
   

    /**
     * Display the specified resource.
     */
    public function show(StructuralIntegrityTest $StructuralIntegrityTest)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $StructuralIntegrityTest = StructuralIntegrityTest::findOrFail($id);
        return view('Structural-Integrity-Test.edit', compact('StructuralIntegrityTest'));
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

        $StructuralIntegrityTest = StructuralIntegrityTest::findOrFail($id);
        $StructuralIntegrityTest->title = $request->title;
        $StructuralIntegrityTest->body = $request->body;

        // Handle image upload if provided
        if ($request->hasFile('image')) {
            // Handle image upload and update logic here
        }

        $StructuralIntegrityTest->save();

        return redirect()->route('Structural-Integrity-Test.index')
                         ->with('success', 'Structural Integrity Test updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
{
    $post = StructuralIntegrityTest::findOrFail($id);
    $post->delete();

    return redirect()->route('Structural-Integrity-Test.index')
        ->with('success', 'Structural Integrity Image deleted successfully');
}
}
