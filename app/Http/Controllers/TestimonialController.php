<?php

namespace App\Http\Controllers;

use App\Models\Testimonial;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TestimonialController extends Controller
{
    public function index()
    {
        $testimonials = Testimonial::all();
        return view('admin.testimoni.index', compact('testimonials'));
    }
    public function create()
    {
        $user = Auth::user();
        return view('admin.testimoni.create', compact('user'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'avatar' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048', // Validasi file gambar
            'content' => 'required|string',
            'name' => 'required|string',
            'occupation' => 'required|string',
            'rating' => 'required|integer|min:1|max:5',
        ]);

        // Cek apakah ada file yang diupload
        if ($request->hasFile('avatar')) {
            // Simpan file dan ambil path-nya
            $avatarPath = $request->file('avatar')->store('avatars', 'public');
        } else {
            $avatarPath = null; // Jika tidak ada file, set null
        }

        // Simpan ke database
        Testimonial::create([
            'avatar' => $avatarPath,
            'content' => $request->content,
            'name' => $request->name,
            'occupation' => $request->occupation,
            'rating' => $request->rating,
        ]);

        return redirect()->route('testimoni.index')->with('success', 'Testimoni berhasil ditambahkan!');
    }

    public function frontshow()
    {
        $testimonials = Testimonial::inRandomOrder()->paginate(6);
        return view('front.index', compact('testimonials'));
    }

    public function show($id)
    {
        $testimonial = Testimonial::findOrFail($id);
        return response()->json($testimonial);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'avatar' => 'nullable|string',
            'content' => 'required|string',
            'name' => 'required|string',
            'occupation' => 'required|string',
            'rating' => 'required|integer|min:1|max:5',
        ]);

        $testimonial = Testimonial::findOrFail($id);
        $testimonial->update($request->all());
        return response()->json($testimonial);
    }

    public function destroy($id)
    {
        $testimonial = Testimonial::findOrFail($id);
        $testimonial->delete();
        return redirect()->route('testimoni.index');
    }
}
