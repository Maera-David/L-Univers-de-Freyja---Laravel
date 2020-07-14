<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LithotherapyController extends Controller
{
    public function grid(Request $request) {
        $crystals = DB::table('litho')->select('id', 'name')->get();

        return view('lithotherapygrid', [
            'crystals' => $crystals
        ]);
    }

    public function getOne(Request $request, $id) {
        $crystal = DB::table('litho')->find($id);
        return view('crystalSheet', [
            'crystal' => $crystal
        ]);
    }
}
