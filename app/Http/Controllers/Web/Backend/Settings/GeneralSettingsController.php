<?php

namespace App\Http\Controllers\Web\Backend\Settings;

use App\Helpers\Helper;
use App\Http\Controllers\Controller;
use App\Models\Setting;
use Exception;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;


class GeneralSettingsController extends Controller
{



    public function index()
    {
        $setting = Setting::firstOrNew();
        return view('backend.layouts.settings.general-settings', compact('setting'));
    }

    // public function createOrUpdate(Request $request): RedirectResponse
    // {
    //     $validator = Validator::make($request->all(), [
    //         'mail' => 'nullable|string|max:150',
    //         'address' => 'nullable|string|max:150',
    //         'phone' => 'nullable|string|max:20',
    //         'system_title' => 'nullable|string|max:255',
    //         'meta_title' => 'nullable|string|max:255',
    //         'meta_description' => 'nullable|string|max:255',
    //         'meta_keywords' => 'nullable|string|max:255',
    //         'logo' => 'nullable',
    //         'favicon' => 'nullable',
    //         'remove_logo' => 'nullable|boolean',
    //         'remove_favicon' => 'nullable|boolean',
    //     ]);


    //     if ($validator->fails()) {
    //         return redirect()->back()->withErrors($validator)->withInput();
    //     }


    //     try {

    //         $settings = Setting::firstOrNew(['id' => 1]);

    //         $settings->mail = $request->mail;
    //         $settings->address = $request->address;
    //         $settings->phone = $request->phone;
    //         $settings->system_title = $request->system_title;
    //         $settings->meta_title = $request->meta_title;
    //         $settings->meta_description = $request->meta_description;
    //         $settings->meta_keywords = $request->meta_keywords;

    //         if ($request->boolean('remove_logo')) {
    //             if ($settings->logo) {
    //                 Helper::fileDelete(public_path($settings->logo));
    //                 $settings->logo = null;
    //             }
    //         } elseif ($request->hasFile('logo')) {
    //             if ($settings->logo) {
    //                 Helper::fileDelete(public_path($settings->logo));
    //             }
    //             $settings->logo = Helper::fileUpload($request->file('logo'), 'logo', $settings->logo);
    //         }

    //         //* Handle favicon file
    //         if ($request->boolean('remove_favicon')) {
    //             if ($settings->favicon) {
    //                 Helper::fileDelete(public_path($settings->favicon));
    //                 $settings->favicon = null;
    //             }
    //         } elseif ($request->hasFile('favicon')) {
    //             if ($settings->favicon) {
    //                 Helper::fileDelete(public_path($settings->favicon));
    //             }
    //             $settings->favicon = Helper::fileUpload($request->file('favicon'), 'favicon', $settings->favicon);
    //         }

    //         // Save the settings
    //         $settings->save();

    //         // $settings->save();
    //         return redirect()->back()->with('success', 'Settings Updated Successfully.');
    //     } catch (Exception $e) {

    //         return back()->with('error', 'Failed to Update Settings.');
    //     }
    // }


    
    // public function createOrUpdate(Request $request): RedirectResponse
    // {
    //     $validator = Validator::make($request->all(), [
    //         'mail' => 'nullable|string|max:150',
    //         'address' => 'nullable|string|max:150',
    //         'phone' => 'nullable|string|max:20',
    //         'system_title' => 'nullable|string|max:255',
    //         'meta_title' => 'nullable|string|max:255',
    //         'meta_description' => 'nullable|string|max:255',
    //         'meta_keywords' => 'nullable|string|max:255',
    //         'logo' => 'nullable',
    //         'favicon' => 'nullable',
    //         'remove_logo' => 'nullable|boolean',
    //         'remove_favicon' => 'nullable|boolean',
    //     ]);




    //     if ($validator->fails()) {
    //         return redirect()->back()->withErrors($validator)->withInput();
    //     }


    //     try {

    //         $settings = Setting::first();

    //         // $settings->mail = $request->mail;
    //         // $settings->address = $request->address;
    //         // $settings->phone = $request->phone;
    //         // $settings->system_title = $request->system_title;
    //         // $settings->meta_title = $request->meta_title;
    //         // $settings->meta_description = $request->meta_description;
    //         // $settings->meta_keywords = $request->meta_keywords;

    //         // if ($request->boolean('remove_logo')) {
    //         //     if ($settings->logo) {
    //         //         Helper::fileDelete(public_path($settings->logo));
    //         //         $settings->logo = null;
    //         //     }
    //         // } elseif ($request->hasFile('logo')) {
    //         //     if ($settings->logo) {
    //         //         Helper::fileDelete(public_path($settings->logo));
    //         //     }
    //         //     $settings->logo = Helper::fileUpload($request->file('logo'), 'logo', $settings->logo);
    //         // }

    //         // //* Handle favicon file
    //         // if ($request->boolean('remove_favicon')) {
    //         //     if ($settings->favicon) {
    //         //         Helper::fileDelete(public_path($settings->favicon));
    //         //         $settings->favicon = null;
    //         //     }
    //         // } elseif ($request->hasFile('favicon')) {
    //         //     if ($settings->favicon) {
    //         //         Helper::fileDelete(public_path($settings->favicon));
    //         //     }
    //         //     $settings->favicon = Helper::fileUpload($request->file('favicon'), 'favicon', $settings->favicon);
    //         // }

    //         if ($request->hasFile('logo')) {
    //             if ($settings->logo) {
    //                 Helper::fileDelete(public_path($settings->logo));
    //             }
    //             $settings->logo = Helper::fileUpload($request->file('logo'), 'logo', $settings->logo);
    //         }

    //         if ($request->hasFile('favicon')) {
    //             if ($settings->favicon) {
    //                 Helper::fileDelete(public_path($settings->favicon));
    //             }
    //             $settings->favicon = Helper::fileUpload($request->file('favicon'), 'favicon', $settings->favicon);
    //         }

    //         Setting::updateOrCreate(['id' => 1], [
    //             'mail' => $request->mail,
    //             'address' => $request->address,
    //             'phone' => $request->phone,
    //             'system_title' => $request->system_title,
    //             'meta_title' => $request->meta_title,
    //             'meta_description' => $request->meta_description,
    //             'meta_keywords' => $request->meta_keywords,
    //             'logo' => $settings->logo,
    //             'favicon' => $settings->favicon,
    //         ]);

    //         // $settings->save();
    //         return redirect()->back()->with('success', 'Settings Updated Successfully.');
    //     } catch (Exception $e) {

    //         return back()->with('error', 'Failed to Update Settings.');
    //     }
    // }


    public function createOrUpdate(Request $request): RedirectResponse
{
    $validator = Validator::make($request->all(), [
        'mail' => 'nullable|string|max:150',
        'address' => 'nullable|string|max:150',
        'phone' => 'nullable|string|max:20',
        'system_title' => 'nullable|string|max:255',
        'meta_title' => 'nullable|string|max:255',
        'meta_description' => 'nullable|string|max:255',
        'meta_keywords' => 'nullable|string|max:255',
        'logo' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        'favicon' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:512',
        'remove_logo' => 'nullable|boolean',
        'remove_favicon' => 'nullable|boolean',
    ]);

    if ($validator->fails()) {
        return redirect()->back()->withErrors($validator)->withInput();
    }

    try {
        $settings = Setting::first() ?? new Setting;

        // Handle logo file upload
        if ($request->hasFile('logo')) {
            if ($settings->logo) {
                Helper::fileDelete(public_path($settings->logo));
            }
            $settings->logo = Helper::fileUpload($request->file('logo'), 'logo');
        } elseif ($request->boolean('remove_logo') && $settings->logo) {
            Helper::fileDelete(public_path($settings->logo));
            $settings->logo = null;
        }

        // Handle favicon file upload
        if ($request->hasFile('favicon')) {
            if ($settings->favicon) {
                Helper::fileDelete(public_path($settings->favicon));
            }
            $settings->favicon = Helper::fileUpload($request->file('favicon'), 'favicon');
        } elseif ($request->boolean('remove_favicon') && $settings->favicon) {
            Helper::fileDelete(public_path($settings->favicon));
            $settings->favicon = null;
        }

        // Update or create settings
        $settings->updateOrCreate(['id' => 1], [
            'mail' => $request->mail,
            'address' => $request->address,
            'phone' => $request->phone,
            'system_title' => $request->system_title,
            'meta_title' => $request->meta_title,
            'meta_description' => $request->meta_description,
            'meta_keywords' => $request->meta_keywords,
            'logo' => $settings->logo,
            'favicon' => $settings->favicon,
        ]);

        return redirect()->back()->with('success', 'Settings Updated Successfully.');
    } catch (Exception $e) {
        return redirect()->back()->with('error', 'Failed to Update Settings.');
    }
}

}
