<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Work;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;

class WorkController extends Controller
{
    public function index()
    {
        if (!Auth::guard('admin')->check()) {
            return redirect()->route('admin.login')->with('warning', 'กรุณาเข้าสู่ระบบอีกครั้ง');
        }

        $works = Work::latest()->get()->groupBy('title');
        return view('frontend.admin.dashboard', compact('works'));
    }

    public function create()
    {
        return view('frontend.admin.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'new_images.*' => 'nullable|image|mimes:jpg,jpeg,png|max:100000',
        'images' => 'nullable|array|max:5',
        'images.*' => 'nullable|image|mimes:jpg,jpeg,png|max:10000', 

        ]);

        foreach ($request->file('images') as $image) {
            $filename = time() . '_' . uniqid() . '.' . $image->extension();
            $image->storeAs('public/works', $filename);

            Work::create([
                'title' => $request->title,
                'description' => $request->description,
                'image' => $filename,
            ]);
        }

        return redirect()->route('admin.works.index')->with('success', 'เพิ่มผลงานเรียบร้อยแล้ว');
    }

    public function edit($id)
    {
        $work = Work::findOrFail($id);
        return view('frontend.admin.edit', compact('work'));
    }
public function update(Request $request, $id)
{
    $work = Work::findOrFail($id);

    $request->validate([
        'title' => 'required|string|max:255',
        'description' => 'nullable|string',
        'new_images.*' => 'nullable|image|mimes:jpg,jpeg,png|max:100000',
        'images' => 'nullable|array|max:5',
        'images.*' => 'nullable|image|mimes:jpg,jpeg,png|max:10000', 
    ]);
 
 
    $groupTitle = $work->title;
    Work::where('title', $groupTitle)->update([
        'title' => $request->title,
        'description' => $request->description,
    ]);

 
    if ($request->hasFile('new_images')) {
        foreach ($request->file('new_images') as $imageId => $newImage) {
            $target = Work::find($imageId);
            if ($target && $newImage) {
                if ($target->image && Storage::exists('public/works/' . $target->image)) {
                    Storage::delete('public/works/' . $target->image);
                }
                $filename = time() . '_' . uniqid() . '.' . $newImage->extension();
                $newImage->storeAs('public/works', $filename);
                $target->update(['image' => $filename]);
            }
        }
    }

    if ($request->hasFile('images')) {
        foreach ($request->file('images') as $image) {
            $filename = time() . '_' . uniqid() . '.' . $image->extension();
            $image->storeAs('public/works', $filename);

            Work::create([
                'title' => $request->title,
                'description' => $request->description,
                'image' => $filename,
            ]);
        }
    }

    return redirect()->route('admin.works.index')->with('success', 'อัปเดตโพสต์และรูปภาพเรียบร้อยแล้ว');
}

public function destroyImage($id, $image)
{
    $work = Work::findOrFail($id);

    if ($work->image === $image || Storage::disk('public')->exists("works/$image")) {
        Storage::disk('public')->delete("works/$image");
        $work->delete(); // ถ้าอยากลบ record นี้ด้วย
        return response()->json(['success' => true]);
    }

    return response()->json(['success' => false], 404);
}


    public function destroy($id)
    {
        $work = Work::findOrFail($id);
        $groupTitle = $work->title;

        $groupWorks = Work::where('title', $groupTitle)->get();
        foreach ($groupWorks as $w) {
            if ($w->image && Storage::exists("public/works/" . $w->image)) {
                Storage::delete("public/works/" . $w->image);
            }
        }

        Work::where('title', $groupTitle)->delete();

        return redirect()->route('admin.works.index')->with('success', 'ลบโพสต์และรูปทั้งหมดเรียบร้อยแล้ว');
    }

    public function feed()
    {
        $works = Work::latest()->get();
        return view('frontend.admin.feed', compact('works'));
    }

    public function showWorks()
    {
        $works = Work::latest()->take(9)->get();
        return view('frontend.works.index', compact('works'));
    }

    public function deleteImage($id, $image)
    {
        $imagePath = "public/works/{$image}";
        if (Storage::exists($imagePath)) {
            Storage::delete($imagePath);
        }

        Work::where('id', $id)->where('image', $image)->delete();

        return response()->json(['success' => true]);
    }

    public function deleteAllImages($id)
    {
        $works = Work::where('id', $id)->get();

        foreach ($works as $work) {
            if ($work->image && Storage::exists("public/works/" . $work->image)) {
                Storage::delete("public/works/" . $work->image);
            }
        }

        Work::where('id', $id)->delete();

        return response()->json(['success' => true]);
    }

    public function batchDeleteImages(Request $request, $id)
    {
        $images = $request->input('images', []);

        foreach ($images as $image) {
            $path = "public/works/" . $image;

            if (Storage::exists($path)) {
                Storage::delete($path);
            }

            Work::where('id', $id)->where('image', $image)->delete();
        }

        return response()->json(['success' => true]);
    }
}
