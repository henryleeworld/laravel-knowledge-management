<?php

namespace App\Http\Controllers;

use App\Models\FaqCategory;

class FaqController extends Controller
{
    public function index()
    {
        $categories = FaqCategory::with('faqQuestions')
            ->paginate(10);

        return view('faq', compact('categories'));
    }
}
