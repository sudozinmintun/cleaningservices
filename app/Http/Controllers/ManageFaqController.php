<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreFaq;
use App\Http\Requests\UpdateFaq;
use App\Models\Faq;
use Illuminate\Http\Request;

class ManageFaqController extends Controller
{
    public function index(Request $request)
    {
        $faqs = Faq::all();

        return view('admin.faq.index', compact('faqs'));
    }


    public function create()
    {
        return view('admin.faq.create');
    }


    public function store(StoreFaq $request)
    {
        $faq = new Faq();
        $faq->title = $request->title;
        $faq->description = $request->description;
        $faq->save();

        return redirect()->back()->with('success', 'Your processing has been completed.');
    }

    public function edit($id)
    {
        $faq = Faq::findOrFail($id);
        return view('admin.faq.edit', compact('faq'));
    }


    public function update(UpdateFaq $request, $id)
    {
        $faq = Faq::findOrFail($id);
        $faq->title = $request->title;
        $faq->description = $request->description;
        $faq->update();
        return redirect()->back()->with('success', 'Your processing has been completed.');
    }

    public function destroy($id)
    {
        $faq = Faq::findOrFail($id);
        $faq->delete();
        return redirect()->back()->with('success', 'Your processing has been completed.');
    }
}
