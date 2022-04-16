<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Benefit;

class BenefitController extends Controller
{
    public function getBenefits() {
        return Benefit::all();
    }

    public function getBenefitByID($id) {
        return Benefit::find($id);
    }

    public function addBenefit(Request $req) {
        $benefit = new Benefit;
        $benefit->name = $req->benefit_name;
        $benefit->save();
        return $benefit;
    }

    public function deleteBenefit($id) {
        $benefit = Benefit::find($id);
        $benefit->delete();
        return 'Success';
    }

}
