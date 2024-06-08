<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\review;

class reviewController extends Controller
{
    public function index()
    {
        $reviews = review::latest()->paginate(10);
        return view('frontend.review', ['reviews' => $reviews]);
        
    }
}
