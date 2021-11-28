<?php

namespace App\Http\Controllers\Administrator;

use App\Http\Controllers\Controller;
use App\Http\Requests\createParallaxRequest;
use App\Http\Requests\updateParallaxRequest;
use App\Models\Parallax;
use Illuminate\Http\Request;
use function GuzzleHttp\Promise\all;

class ParallaxController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $parallax = Parallax::paginate(5);
        return view('admin.parallax.index', compact('parallax'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function create()
    {
        return view('admin.parallax.create');
        session()->flash('create', 'Data creation in Parallax was successful');
        return redirect()->route('parallax.index');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(createParallaxRequest $request)
    {
        $file = $request->file('image');
        $image = "";
        if (!empty($file)) {
            $image = time() . $file->getClientOriginalName();
            $file->move('images/parallax', $image);
        }
        Parallax::create([
            'title' => $request->title,
            'title_size' => $request->title_size,
            'title_color' => $request->title_color,
            'body' => $request->body,
            'body_size' => $request->body_size,
            'body_color' => $request->body_color,
            'image' => $image,
        ]);
        session()->flash('create', 'Data creation in SEO was successful');
        return redirect()->route('parallax.index');
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $parallax = Parallax::findOrFail($id);
        return view('admin.parallax.edit', compact('parallax'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(updateParallaxRequest $request, $id)
    {
        $file = $request->file('image');
        $deleteImage = Parallax::findOrFail($id);
        $image = '';
        if (!empty($file)) {
            if (file_exists('images/parallax/' . $deleteImage->image)) {
                unlink('images/parallax/' . $deleteImage->image);
            }
            $image = time() . $file->getClientOriginalName();
            $file->move('images/parallax', $image);
        } else {
            $image = $deleteImage->image;
        }
        Parallax::findOrFail($id)->update([
            'title' => $request->title,
            'title_size' => $request->title_size,
            'title_color' => $request->title_color,
            'body' => $request->body,
            'body_size' => $request->body_size,
            'body_color' => $request->body_color,
            'image' => $image,
        ]);
        session()->flash('update','Data update completed successfully');
        return redirect()->route('parallax.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $deleteImage = Parallax::findOrFail($id);
        if (file_exists('images/parallax/' . $deleteImage->image)) {
            unlink("images/parallax/" . $deleteImage->image);
        }
        Parallax::destroy($id);
        session()->flash('delete', 'Data successfully deleted');
        return redirect()->route('parallax.index');

    }
}
