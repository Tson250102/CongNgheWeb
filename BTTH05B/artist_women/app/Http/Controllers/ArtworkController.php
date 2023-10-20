<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Artwork;
class ArtworkController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $artworks = Artwork::all();
        return view('artworks.index', compact('artworks'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('artworks.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
{
    $request->validate([
        'artist_name' => 'required',
        'description' => 'required',
        'art_type' => 'required|in:hội họa,âm nhạc,văn học',
        'media_link' => 'required',
        'cover_image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
    ]);

    $coverImage = $request->file('cover_image');
    $coverImageName = time() . '.' . $coverImage->getClientOriginalExtension();
    $coverImage->storeAs('public/images', $coverImageName);

    Artwork::create([
        'artist_name' => $request->input('artist_name'),
        'description' => $request->input('description'),
        'art_type' => $request->input('art_type'),
        'media_link' => $request->input('media_link'),
        'cover_image' => $coverImageName,
    ]);

    return redirect()->route('artworks.index')->with('success', 'Tác phẩm đã được thêm thành công.');
}


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Artwork $artwork)
    {
    return view('artworks.edit', compact('artwork'));
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Artwork $artwork)
    {
    $request->validate([
        'artist_name' => 'required',
        'description' => 'required',
        // Thêm các quy tắc xác thực khác tại đây
    ]);

    $artwork->update($request->all());

    return redirect()->route('artworks.index')->with('success', 'Tác phẩm đã được cập nhật thành công.');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
