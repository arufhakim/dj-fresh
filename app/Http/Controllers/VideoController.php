<?php

namespace App\Http\Controllers;

use App\Models\Video;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class VideoController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('logged.video.index', [
            'video' => Video::orderBy('created_at', 'desc')->get(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('logged.video.create');
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
            'nama' => 'required|max:100',
            'video' => 'required|max:100000|mimes:mp4',
            'status' => 'required',
        ]);

        if ($request->hasFile('video')) {
            $video = $request->file('video');
            $nama_video = Str::random(20) . '.' . $video->getClientOriginalExtension();
            $video->move('video-upload', $nama_video);
        }

        Video::create([
            'nama' => $request->nama,
            'video' => $nama_video,
            'status' => $request->status,
        ]);

        flash()->addSuccess('Video Berhasil Ditambahkan!');

        return redirect()->route('video.index');
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
    public function edit(Video $video)
    {
        return view('logged.video.edit', [
            'video' => $video
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Video $video)
    {
        $request->validate([
            'nama' => 'required|max:100',
            'status' => 'required',
        ]);

        $video->update([
            'nama' => $request->nama,
            'video' => $video->video,
            'status' => $request->status,
        ]);

        flash()->addSuccess('Video Berhasil Diperbarui!');

        return redirect()->route('video.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Video $video)
    {
        $video->delete();

        flash()->addSuccess('Video Berhasil Dihapus!');

        return redirect()->route('video.index');
    }
}
