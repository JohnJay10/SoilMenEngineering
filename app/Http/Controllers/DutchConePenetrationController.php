<?php

namespace App\Http\Controllers;

use App\Models\DutchConePenetration;
use Illuminate\Http\Request;
use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Gd\Driver;  


class DutchConePenetrationController extends Controller
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
        
        $DutchConePenetrations = DutchConePenetration::latest()->paginate(3);// Paginate with 10 items per page
        return view('Dutch-Cone-Penetration.index', compact('DutchConePenetrations'))
        ->with('i', (request()->input('page', 1) - 1) *3); 
        
    }

    public function paginate(Request $request)
    {
        $DutchConePenetrations = DutchConePenetration::paginate(3);
        return response()->json($DutchConePenetrations);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Dutch-Cone-Penetration.create');
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

        $img->toJpeg(80)->save(base_path('public/upload/dcp/' .$name_gen));
        $save_url = 'upload/dcp/'.$name_gen;
        
        
       
    
    }

    // Create a new CalibrationOfEquipment instance
    $DutchConePenetration = new DutchConePenetration;
    $DutchConePenetration->user_id = auth()->user()->id;
    $DutchConePenetration->title = $request->input('title');
    $DutchConePenetration->image = $save_url;
    $DutchConePenetration->save();

    // Redirect with success message
    return redirect()->route('Dutch-Cone-Penetration.index')
        ->with('success', "Dutch Cone Penetration Added Successfully");
    

       

    }
         
       
       
   

    /**
     * Display the specified resource.
     */
    public function show(DutchConePenetration $DutchConePenetration)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $DutchConePenetration = DutchConePenetration::findOrFail($id);
        return view('Dutch-Cone-Penetration.edit', compact('DutchConePenetration'));
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

        $DutchConePenetration = DutchConePenetration::findOrFail($id);
        $DutchConePenetration->title = $request->title;
        $DutchConePenetration->body = $request->body;

        // Handle image upload if provided
        if ($request->hasFile('image')) {
            // Handle image upload and update logic here
        }

        $DutchConePenetration->save();

        return redirect()->route('Dutch-Cone-Penetration.index')
                         ->with('success', 'Dutch Cone Penetration updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
{
    $post = DutchConePenetration::findOrFail($id);
    $post->delete();

    return redirect()->route('Dutch-Cone-Penetration.index')
        ->with('success', 'Dutch Cone Penetration Image deleted successfully');
}
}
