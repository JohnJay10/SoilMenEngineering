<?php

namespace App\Http\Controllers;

use App\Models\CalibrationOfEquipment;
use App\Models\DutchConePenetration;
use App\Models\LabTestService;
use App\Models\PavementEvaluationTest;
use App\Models\QualityControl;
use Illuminate\Http\Request;
use Intervention\Image\ImageManagerStatic as Image;
use App\Models\Standard_Penetration_Test;
use App\Models\StructuralIntegrityTest;

class FrontEndController extends Controller
{
    public function index() {
        $StandardPenetrationTests = Standard_Penetration_Test::latest()->paginate(1);// Paginate with 10 items per page
        $CalibrationOfEquipments = CalibrationOfEquipment::latest()->paginate(1);// Paginate with 10 items per page
        $DutchConePenetrations = DutchConePenetration::latest()->paginate(1);// Paginate with 10 items per page
        $LabTestServices = LabTestService::latest()->paginate(1);// Paginate with 10 items per page
        $PavementEvaluationTests = PavementEvaluationTest::latest()->paginate(1);// Paginate with 10 items per page
        $QualityControls = QualityControl::latest()->paginate(1);// Paginate with 10 items per page
        $StructuralIntegrityTests = StructuralIntegrityTest::latest()->paginate(1);// Paginate with 10 items per page
        return view('frontend.index', compact('StandardPenetrationTests','CalibrationOfEquipments','DutchConePenetrations'
        ,'LabTestServices', 'PavementEvaluationTests','QualityControls','StructuralIntegrityTests'))
        ->with('i', (request()->input('page', 1) - 1) *3); 
       
    }

    public function aboutus() {
        return view('frontend.about-us');
    }

    public function services() {
        $StandardPenetrationTests = Standard_Penetration_Test::latest()->paginate(1);// Paginate with 10 items per page
        $CalibrationOfEquipments = CalibrationOfEquipment::latest()->paginate(1);// Paginate with 10 items per page
        $DutchConePenetrations = DutchConePenetration::latest()->paginate(1);// Paginate with 10 items per page
        $LabTestServices = LabTestService::latest()->paginate(1);// Paginate with 10 items per page
        $PavementEvaluationTests = PavementEvaluationTest::latest()->paginate(1);// Paginate with 10 items per page
        $QualityControls = QualityControl::latest()->paginate(1);// Paginate with 10 items per page
        $StructuralIntegrityTests = StructuralIntegrityTest::latest()->paginate(1);// Paginate with 10 items per page
        return view('frontend.services', compact('StandardPenetrationTests','CalibrationOfEquipments','DutchConePenetrations'
        ,'LabTestServices', 'PavementEvaluationTests','QualityControls','StructuralIntegrityTests'))
        ->with('i', (request()->input('page', 1) - 1) *3); 
        
    }

    public function contactus() {
        return view('frontend.contact-us');
    }
    public function quote() {
        return view('frontend.quote');
    }
    public function spt() {
        $StandardPenetrationTests = Standard_Penetration_Test::latest()->paginate(6);// Paginate with 10 items per page
        return view('frontend.standard-penetration-testing', compact('StandardPenetrationTests'))
        ->with('i', (request()->input('page', 1) - 1) *3); 
        
    }

    public function dcp() {
        $DutchConePenetrations = DutchConePenetration::latest()->paginate(6);// Paginate with 10 items per page
        return view('frontend.dutch-core-penetration', compact('DutchConePenetrations'))
        ->with('i', (request()->input('page', 1) - 1) *3); 
        
    }
    public function lts() {
        $LabTestServices = LabTestService::latest()->paginate(6);// Paginate with 10 items per page
        return view('frontend.lab-test-service', compact('LabTestServices'))
        ->with('i', (request()->input('page', 1) - 1) *3); 
       
    }
    public function sit() {
        $StructuralIntegrityTests = StructuralIntegrityTest::latest()->paginate(6);// Paginate with 10 items per page
        return view('frontend.structural-integrity-testing', compact('StructuralIntegrityTests'))
        ->with('i', (request()->input('page', 1) - 1) *3); 
        
    }
    public function coe() {

        $CalibrationOfEquipments = CalibrationOfEquipment::latest()->paginate(6);// Paginate with 10 items per page
        return view('frontend.cal-of-equip', compact('CalibrationOfEquipments'))
        ->with('i', (request()->input('page', 1) - 1) *3); 
        
    }
    public function pet() {
        $PavementEvaluationTests = PavementEvaluationTest::latest()->paginate(6);// Paginate with 10 items per page
        return view('frontend.pavement-evaluation-test', compact('PavementEvaluationTests'))
        ->with('i', (request()->input('page', 1) - 1) *3); 
        
    }


    public function qa() {
        $QualityControls = QualityControl::latest()->paginate(6);// Paginate with 10 items per page
        return view('frontend.Quality-Control', compact('QualityControls'))
        ->with('i', (request()->input('page', 1) - 1) *3); 
        
    }
    public function paginate(Request $request)
    {
        $StandardPenetrationTests = Standard_Penetration_Test::paginate(3);
        $CalibrationOfEquipments = CalibrationOfEquipment::paginate(3);
        $DutchConePenetrations = DutchConePenetration::paginate(3);
       

        return response()->json([
            'StandardPenetrationTests' => $StandardPenetrationTests,
            'CalibrationOfEquipments' => $CalibrationOfEquipments,
            'DutchConePenetrations' => $DutchConePenetrations,
        ]);
    }


   

    
   
    
}
