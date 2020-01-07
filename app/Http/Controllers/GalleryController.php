<?php

namespace App\Http\Controllers;

use App\Gallery;
use App\ImageFile;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Storage;

class GalleryController extends Controller
{
    public function index()
    {
        $galleries = Gallery::groupBy(['location'])->paginate(15);
        return view('admin.gallery.index', compact('galleries'));
    }

    public function create()
    {
        return view('admin.gallery.create');
    }

    public function edit($id)
    {
        $gallery = Gallery::find($id);
        return view('admin.gallery.edit', compact('gallery'));
    }

    public function update(Request $request, $id)
    {
        try {
            if ($request->hasFile('file')) {
                // retrieve file from request
                $files = $request->file('file');
                foreach ($files as $file) {
                    // Resize
                    $name = Str::random(35).'.'.$file->getClientOriginalExtension();
                    $imageFile = Image::make($file)->fit(300, 300)->stream();
                    $imageFile = $imageFile->__toString();

                    // Storage S3
                    $s3 = Storage::disk('s3');
                    $s3->put(strtolower($request->location).'/'.$name, $imageFile, 'public');
                    $imageName = Storage::disk('s3')->url(strtolower($request->location).'/'.$name);

                    // Save to local db
                    $gallery = new Gallery;
                    $gallery->year = $request->year;
                    $gallery->location = strtolower($request->location);
                    $gallery->payload = $imageName;
                    $gallery->save();
                }
            }
            // check for file upload
            if (! $request->hasFile('file')) {
                // return with json response - this feeds the dropzone success method in profile-dz.js
                return response()->json(['error' => false, 'message' => ['type'     => 'success',
                    'title' => 'Profile',
                    'body'  => "Your profile has been updated!"]]);
            } else {
                // response - this feeds the simple form submission with return back to profile
                alert()->success('Success', 'Profile successfully updated');

                // return
                return back();
            }
        } catch (Exception $e) {
            // check for file upload
            if ($request->hasFile('file')) {
                // return with json response - this feeds the dropzone success method in profile-dz.js
                return response()->json(['error' => true, 'message' => ['type'  => 'warning',
                    'title' => 'Profile',
                    'body'  => 'A problem was encountered updating your profile!' . $e->getMessage()]]);
            } else {
                // response - this feeds the simple form submission with return back to profile
                alert()->error('Profile Update', 'There was a problem updating your profile!' . $e->getMessage());

                // return
                return back();
            }
        }
    }

    public function upload(Request $request)
    {
        try {
            if ($request->hasFile('file')) {
                // retrieve file from request
                $files = $request->file('file');
                foreach ($files as $file) {
                    // Resize
                    $name = Str::random(35).'.'.$file->getClientOriginalExtension();
                    $imageFile = Image::make($file)->fit(300, 300)->stream();
                    $imageFile = $imageFile->__toString();

                    // Storage S3
                    $s3 = Storage::disk('s3');
                    $s3->put(strtolower($request->location).'/'.$name, $imageFile, 'public');
                    $imageName = Storage::disk('s3')->url(strtolower($request->location).'/'.$name);

                    // Save to local db
                    $gallery = new Gallery;
                    $gallery->year = $request->year;
                    $gallery->location = strtolower($request->location);
                    $gallery->payload = $imageName;
                    $gallery->save();
                }
            }
            // check for file upload
            if ($request->hasFile('file')) {
                // return with json response - this feeds the dropzone success method in profile-dz.js
                return response()->json(['error' => false, 'message' => ['type'     => 'success',
                    'title' => 'Profile',
                    'body'  => "Your profile has been updated!"]]);
            } else {
                // response - this feeds the simple form submission with return back to profile
                alert()->success('Success', 'Profile successfully updated');

                // return
                return back();
            }
        } catch (Exception $e) {
            // check for file upload
            if ($request->hasFile('file')) {
                // return with json response - this feeds the dropzone success method in profile-dz.js
                return response()->json(['error' => true, 'message' => ['type'  => 'warning',
                    'title' => 'Profile',
                    'body'  => 'A problem was encountered updating your profile!' . $e->getMessage()]]);
            } else {
                // response - this feeds the simple form submission with return back to profile
                alert()->error('Profile Update', 'There was a problem updating your profile!' . $e->getMessage());

                // return
                return back();
            }
        }
    }
}
