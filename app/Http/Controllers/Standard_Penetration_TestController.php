<?php

namespace App\Http\Controllers;

use id;
use Illuminate\Http\Request;
// use Intervention\Image\Laravel\Facades\Image;
use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Gd\Driver;
use App\Models\Standard_Penetration_Test;






class Standard_Penetration_TestController extends Controller
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
        
        $StandardPenetrationTests = Standard_Penetration_Test::latest()->paginate(3);// Paginate with 10 items per page
        return view('Standard-Penetration-Test.index', compact('StandardPenetrationTests'))
        ->with('i', (request()->input('page', 1) - 1) *3); 
        
    }

    public function paginate(Request $request)
    {
        $StandardPenetrationTests = Standard_Penetration_Test::paginate(3);
        return response()->json($StandardPenetrationTests);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Standard-Penetration-Test.create');
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

        $img->toJpeg(80)->save(base_path('public/upload/spt/' .$name_gen));
        $save_url = 'upload/spt/'.$name_gen;
        
        
       
    
    }

    // Create a new Standard_Penetration_Test instance
    $StandardPenetrationTest = new Standard_Penetration_Test;
    $StandardPenetrationTest->user_id = auth()->user()->id;
    $StandardPenetrationTest->title = $request->input('title');
    $StandardPenetrationTest->image = $save_url;
    $StandardPenetrationTest->save();

    // Redirect with success message
    return redirect()->route('Standard-Penetration-Test.index')
        ->with('success', "Standard Penetration Image Added Successfully");
    

       

    }
         
       
       
   

    /**
     * Display the specified resource.
     */
    public function show(Standard_Penetration_Test $standard_Penetration_Test)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $StandardPenetrationTest = Standard_Penetration_Test::findOrFail($id);
        return view('Standard-Penetration-Test.edit', compact('StandardPenetrationTest'));   
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

        $StandardPenetrationTest = Standard_Penetration_Test::findOrFail($id);
        $StandardPenetrationTest->title = $request->title;
        $StandardPenetrationTest->body = $request->body;

        // Handle image upload if provided
        if ($request->hasFile('image')) {
            // Handle image upload and update logic here
        }

        $StandardPenetrationTest->save();

        return redirect()->route('Standard-Penetration-Test.index')
                         ->with('success', 'Standard Penetration Test updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
{
    $post = Standard_Penetration_Test::findOrFail($id);
    $post->delete();

    return redirect()->route('Standard-Penetration-Test.index')
        ->with('success', 'Standard Penetration Image deleted successfully');
}
}
