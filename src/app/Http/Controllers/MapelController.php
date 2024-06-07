<?php

namespace App\Http\Controllers;
use App\Models\Mapel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MapelController extends Controller
{
    public function index(){
    $mapels = Mapel::all();
    return view ('mapel',compact('mapels'));

}
}
