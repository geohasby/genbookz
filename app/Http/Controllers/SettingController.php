<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\UpdateProfileRequest;
use App\Http\Requests\UpdatePasswordRequest;
use App\User;
use Illuminate\Support\Facades\Hash;
use Image;

class SettingController extends Controller
{

    public function edit_profile(Request $request){
        return view('settings.edit_profile', ['user' => $request->user()]);
    }

    public function change_password(Request $request){
        return view('settings.change_password', ['user' => $request->user()]);
    }

    public function update_password(UpdatePasswordRequest $request){
        if(!(Hash::check($request->get('current_password'), $request->user()->password))){
            return redirect()->route('setting.change_password')->with('error', 'Kata sandi lama yang kamu masukan salah');
        }

        User::where('id', $request->user()->id)->update([
            'password' => Hash::make($request->get('new_password'))
        ]);

        return redirect()->route('setting.change_password')->with('success', 'Kata sandi kamu berhasil diperbaharui');
    }

    public function notification(Request $request){
        return view('settings.notification', ['user' => $request->user()]);
    }

    public function language(Request $request){
        return view('settings.language', ['user' => $request->user()]);
    }

    public function connection(Request $request){
        return view('settings.connection', ['user' => $request->user()]);
    }

    public function update_profile(UpdateProfileRequest $request){
        $image = $request->file('avatar');

        if($image != null){
            $imageName = $request->user()->username . time() . '.' . $image->extension();

            $destinationPath = public_path('img/ava');
            $img = Image::make($image->path());
            $img->orientate();
            $img->resize(600, 600, function($constraint) {
                $constraint->aspectRatio();
                $constraint->upsize();
            })->save($destinationPath . '/' . $imageName);

            User::where('id', $request->user()->id)->update([
                'avatar' => $imageName
            ]);
        }

        User::where('id', $request->user()->id)->update([
            'name' => $request->name,
            'phone_number' => $request->phone_number,
            'country' => $request->country,
            'date_of_birth' => $request->date_of_birth,
            'gender' => $request->gender
        ]);

        return redirect()->route('setting.edit_profile')->with('success', 'Profil kamu berhasil diperbaharui');
    }
}
