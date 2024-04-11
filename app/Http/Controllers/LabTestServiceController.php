<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\LabTestService;
use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Gd\Driver;

class LabTestServiceController extends Controller
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
        
        $LabTestServices = LabTestService::latest()->paginate(3);// Paginate with 10 items per page
        return view('Lab-Test-Services.index', compact('LabTestServices'))
        ->with('i', (request()->input('page', 1) - 1) *3);    
        
    }

    public function paginate(Request $request)
    {
        $LabTestServices = LabTestService::paginate(3);
        return response()->json($LabTestServices);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Lab-Test-Services.create');
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

        $img->toJpeg(80)->save(base_path('public/upload/lts/' .$name_gen));
        $save_url = 'upload/lts/'.$name_gen;
        
        
       
    
    }

    // Create a new CalibrationOfEquipment instance
    $LabTestService = new LabTestService;
    $LabTestService->user_id = auth()->user()->id;
    $LabTestService->title = $request->input('title');
    $LabTestService->image = $save_url;
    $LabTestService->save();

    // Redirect with success message
    return redirect()->route('Lab-Test-Services.index')
        ->with('success', "Lab Test Services Image Added Successfully");
    

       

    }
         
       
       
   

    /**
     * Display the specified resource.
     */
    public function show(LabTestService $LabTestService)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $LabTestService = LabTestService::findOrFail($id);
        return view('Lab-Test-Services.edit', compact('LabTestService'));
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

        $LabTestService = LabTestService::findOrFail($id);
        $LabTestService->title = $request->title;
        $LabTestService->body = $request->body;

        // Handle image upload if provided
        if ($request->hasFile('image')) {
            // Handle image upload and update logic here
        }

        $LabTestService->save();

        return redirect()->route('Lab-Test-Services.index')
                         ->with('success', 'Lab Test Services updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
{
    $post = LabTestService::findOrFail($id);
    $post->delete();

    return redirect()->route('Lab-Test-Services.index')
        ->with('success', 'Lab Test Services deleted successfully');
}
}
