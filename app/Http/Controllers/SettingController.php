<?php

namespace App\Http\Controllers;

use App\Models\Setting;
use Illuminate\Http\Request;

class SettingController extends Controller
{
    //

    public function updateView()
    {
        // function body
        $settings = Setting::find(1);
        return view('pages.settings', compact('settings'));
    }

    public function update(Request $request)
    {
        // function body

        $data = $request->validate([
            'account_number' => 'required',
            'account_name' => 'required',
            'ifsc_code' => 'required',
        ]);

        Setting::updateOrCreate(
            ['id' => 1],
            $data
        );


        return redirect()->back()->with('success', 'Settings updated successfully!');
    }


}
