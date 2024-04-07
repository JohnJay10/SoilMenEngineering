<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontEndController extends Controller
{
    public function index() {
        return view('frontend.index');
    }

    public function aboutus() {
        return view('frontend.about-us');
    }

    public function services() {
        return view('frontend.services');
    }

    public function contactus() {
        return view('frontend.contact-us');
    }
    public function quote() {
        return view('frontend.quote');
    }
    public function spt() {
        return view('frontend.standard-penetration-testing');
    }
    public function lts() {
        return view('frontend.lab-test-services');
    }
    public function sit() {
        return view('frontend.structural-integrity-testing');
    }
    public function coe() {
        return view('frontend.cal-of-equip');
    }
    public function pet() {
        return view('frontend.pavement-evaluation-test');
    }
    public function dcp() {
        return view('frontend.dutch-core-penetration');
    }
}
