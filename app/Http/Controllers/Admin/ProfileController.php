<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

// 以下を追記することでNews Modelが扱えるようになる
use App\Profile;

class ProfileController extends Controller
{
   
    public function add()
    {
        return view('admin.profile.create');
    }

    public function create(Request $request)
    {
        // 以下を追記
        // Varidationを行う
        $this->validate($request, Profile::$rules);
    
        $profile = new Profile;
        $form = $request->all();

        // フォームから送信されてきた_tokenを削除する
        unset($form['_token']);
    
        // $profileに$formの内容をフィルタリングして代入
        $profile->fill($form);
        //dd($profile);

        // formの内容をデータベースに保存する
        $profile->save();

        return redirect('admin/profile/create');
    }

    public function edit()
    {
        return view('admin.profile.edit');
    }

    public function update()
    {
        return redirect('admin/profile/edit');
    }
  
}
