<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\HomeSection;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class HomeSectionController extends Controller
{
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\HomeSection  $homeSection
     * @return \Illuminate\Http\Response
     */
    public function edit(HomeSection $homeSection)
    {
        return view('admin.home_section')->with('homeSection', $homeSection);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\HomeSection  $homeSection
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, HomeSection $homeSection)
    {
        $this->validate($request, [
            'header_top' => 'required | max:255',
            'header_middle' => 'required | max:255',
            'header_bottom' => 'required | max:255',
        ]);

        $homeSection->header_top = $request->header_top;
        $homeSection->header_middle = $request->header_middle;
        $homeSection->header_bottom = $request->header_bottom;

        if ($request->hasFile('cover')) {
            File::delete(public_path('/images/' . $homeSection->cover));
            $image = $request->file('cover');
            $image_name = 'home' . '.' . $image->getClientOriginalExtension();
            $destinationPath = public_path('/images');
            $image->move($destinationPath, $image_name);
            $homeSection->cover = $image_name;
        }

        $homeSection->save();

        return redirect()
            ->route('home.edit', ['homeSection' => $homeSection])
            ->with('success', 'Section updated successfully!');
    }
}
