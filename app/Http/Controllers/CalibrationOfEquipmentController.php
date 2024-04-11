<?php

namespace App\Http\Controllers;

use App\Models\CalibrationOfEquipment;
use Illuminate\Http\Request; 
use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Gd\Driver;  

class CalibrationOfEquipmentController extends Controller
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
        
        $CalibrationOfEquipments = CalibrationOfEquipment::latest()->paginate(3);// Paginate with 10 items per page
        return view('Calibration-Of-Equipment.index', compact('CalibrationOfEquipments'))
        ->with('i', (request()->input('page', 1) - 1) *3); 
        
    }

    public function paginate(Request $request)
    {
        $CalibrationOfEquipments = CalibrationOfEquipment::paginate(3);
        return response()->json($CalibrationOfEquipments);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Calibration-Of-Equipment.create');
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

        $img->toJpeg(80)->save(base_path('public/upload/coe/' .$name_gen));
        $save_url = 'upload/coe/'.$name_gen;
        
        
       
    
    }

    // Create a new CalibrationOfEquipment instance
    $CalibrationOfEquipment = new CalibrationOfEquipment;
    $CalibrationOfEquipment->user_id = auth()->user()->id;
    $CalibrationOfEquipment->title = $request->input('title');
    $CalibrationOfEquipment->image = $save_url;
    $CalibrationOfEquipment->save();

    // Redirect with success message
    return redirect()->route('Calibration-Of-Equipment.index')
        ->with('success', "Calibration Of Equipment Added Successfully");
    

       

    }
         
       
       
   

    /**
     * Display the specified resource.
     */
    public function show(CalibrationOfEquipment $CalibrationOfEquipment)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $CalibrationOfEquipment = CalibrationOfEquipment::findOrFail($id);
        return view('Calibration-Of-Equipment.edit', compact('CalibrationOfEquipment'));
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

        $CalibrationOfEquipment = CalibrationOfEquipment::findOrFail($id);
        $CalibrationOfEquipment->title = $request->title;
        $CalibrationOfEquipment->body = $request->body;

        // Handle image upload if provided
        if ($request->hasFile('image')) {
            // Handle image upload and update logic here
        }

        $CalibrationOfEquipment->save();

        return redirect()->route('Calibration-Of-Equipment.index')
                         ->with('success', 'Calibration Of Equipment updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
{
    $post = CalibrationOfEquipment::findOrFail($id);
    $post->delete();

    return redirect()->route('Calibration-Of-Equipment.index')
        ->with('success', 'Calibration Of Equipment deleted successfully');
}
}
