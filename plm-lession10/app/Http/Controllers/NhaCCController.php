<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\NhaCC; // Import your model

class NhaCCController extends Controller
{
    public function list()
    {
        // Fetch data from the database
        $NhaCCs = NhaCC::all();

        // Return the view with data
        return view('NhaCC.list', ['NhaCCs' => $NhaCCs]);
    }
}

