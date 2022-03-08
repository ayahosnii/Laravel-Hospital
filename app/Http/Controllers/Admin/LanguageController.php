<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\LanguageRequest;
use App\Models\Language;
use Illuminate\Http\Request;

class LanguageController extends Controller
{

    public function index()
    {
        $languages = Language::select()->get();
        return view('dashboard.language.index', compact('languages'));
    }


    public function create()
    {
        return view('dashboard.language.create');
    }

    public function store(LanguageRequest $request)
    {
        try {
            Language::create($request -> except(['_token']));
            return redirect()->route('admin.languages')->with(['success' => 'تم الحفظ بنجاح']);
        } catch (\Exception $ex){
            return redirect()->route('admin.languages')->with(['error' => 'حدث خطأ برجاء المحاولة فيما بعد']);
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Language  $language
     * @return \Illuminate\Http\Response
     */
    public function show(Language $language)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Language  $language
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {


        $language = Language::select()->find($id);
        if(!$language) {
            return redirect()->route('admin.languages')->with(['error' => 'هذه اللغة غير موجودة']);
        }
        return view('dashboard.language.edit', compact('language'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Language  $language
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update($id, LanguageRequest $request)
    {
        try {
            $language = Language::find($id);
            if(!$language) {
                return redirect()->route('admin.languages.edit', $id)
                    ->with(['error' => 'هذه اللغة غير موجوده']);
            }
            if(!$request->has('active'))
                $request->request->add(['active' => 0]);

            $language -> update($request -> except('_token'));
            return redirect()->route('admin.languages');
        }catch (\Exception $ex){
            return redirect()->route('admin.languages')->with(['error' => 'حدث خطأ برجاء المحاولة فيما بعد']);
        }

    }

    public function destroy($id)
    {
        try {
            $language = Language::find($id);
            if (!$language){
                return redirect()->route('admin.languages', $id)->with(['error' => 'This language is not exist']);
            }
            $language->delete();
            return redirect()->route('admin.languages')->with(['success' => 'The language is deleted successfully!!']);
        }catch (\Exception $ex){
            return redirect()->route('admin.languages')->with(['error' => 'Something wrong has been happened try again later']);
        }
    }
}
