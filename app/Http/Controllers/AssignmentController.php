<?php

namespace App\Http\Controllers;

use App\Assignment;
use Illuminate\Http\Request;

class AssignmentController extends Controller
{
    public function index()
    {

    }

    public function show($id)
    {
        $assignment = Assignment::find($id);

        return view('assignments.show', ['assignment' => $assignment]);
    }
}
