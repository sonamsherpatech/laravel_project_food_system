<?php

namespace App\Http\Controllers\Backend;
use App\Models\Setting;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\Backend\CreateSettingRequest;

class SettingController extends Controller
{

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $setting = Setting::first();
        if($setting) {
            return redirect()->route('backend.setting.edit',$setting->id);
        }else {
            return view('backend.setting.create');
        }
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CreateSettingRequest $request)
    {
        // dd($request);
        // if($request->hasFile('logo_top_file')) {
        //     $file = $request->file('logo_top_file');
        //     $fileName = time() . '_' . $file->getClientOriginalName();
        //     $file->move('images/setting',$fileName);
        //     $request->request->add(['logo_top' => $fileName]);
        // }
        $request->request->add(['logo_top' => 'top.png']);
        $request->request->add(['logo_bottom' => 'hello.png']);
        $request->request->add(['favicon' => 'favicon.png']);
        $request->request->add(['created_by' => auth()->user()->id]);
        // if($request->hasFile('logo_bottom_file')) {
        //     $file = $request->file('logo_bottom_file');
        //     $fileName = time() . '_' . $file->getClientOriginalName();
        //     $file->move('images/setting',$fileName);
        //     $request->request->add(['logo_bottom' => $fileName]);
        // }

        // if($request->hasFile('favicon_file')) {
        //     $file = $request->file('favicon_file');
        //     $fileName = time() . '_' . $file->getClientOriginalName();
        //     $file->move('images/setting',$fileName);
        //     $request->request->add(['favicon' => $fileName]);
        // }

        $record = Setting::create($request->all());
        if($record) {
            return redirect()->route('backend.setting.create')->with('success','Setting Creation Successfull!!!');
        }else {
            return redirect()->route('backend.setting.create')->with('error','Setting Creation Failed!!');
        }
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        return view('backend.setting.edit');

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }
}
