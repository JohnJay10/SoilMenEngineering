<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\QualityControl;
use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Gd\Driver;

class QualityControlController extends Controller
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
        
        $QualityControls = QualityControl::latest()->paginate(3);// Paginate with 10 items per page
        return view('Quality-Control.index', compact('QualityControls'))
        ->with('i', (request()->input('page', 1) - 1) *3); 
        
    }

    public function paginate(Request $request)
    {
        $QualityControls = QualityControl::paginate(3);
        return response()->json($QualityControls);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Quality-Control.create');
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

        $img->toJpeg(80)->save(base_path('public/upload/qc/' .$name_gen));
        $save_url = 'upload/qc/'.$name_gen;
        
        
       
    
    }

    // Create a new CalibrationOfEquipment instance
    $QualityControl = new QualityControl;
    $QualityControl->user_id = auth()->user()->id;
    $QualityControl->title = $request->input('title');
    $QualityControl->image = $save_url;
    $QualityControl->save();

    // Redirect with success message
    return redirect()->route('Quality-Control.index')
        ->with('success', "Quality Control Image Added Successfully");
    

       

    }
         
       
       
   

    /**
     * Display the specified resource.
     */
    public function show(QualityControl $QualityControl)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $QualityControl = QualityControl::findOrFail($id);
        return view('Quality-Control.edit', compact('QualityControl'));
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

        $QualityControl = QualityControl::findOrFail($id);
        $QualityControl->title = $request->title;
        $QualityControl->body = $request->body;

        // Handle image upload if provided
        if ($request->hasFile('image')) {
            // Handle image upload and update logic here
        }

        $QualityControl->save();

        return redirect()->route('Quality-Control.index')
                         ->with('success', 'Quality Control updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
{
    $post = QualityControl::findOrFail($id);
    $post->delete();

    return redirect()->route('Quality-Control.index')
        ->with('success', 'Quality Control deleted successfully');
}
}
