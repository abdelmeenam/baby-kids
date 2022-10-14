<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\CreateFaqRequest;
use App\Http\Requests\DeleteFaqRequest;
use App\Http\Requests\UpdateFaqRequest;
use App\Models\Faq;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class FaqController extends Controller
{
    //Return create page
    public function create(){
        return view('Admin.faq.create');
    }
    /**
     * @param Request $request
     * @return void
     * 1-store data
     * 2-fire alert
     * 3-return
     */
    public function store(CreateFaqRequest $request){
        Faq::create([
            'question' => $request->question,
            'answer' => $request->answer
        ]);

        Alert::success('Success', 'Faq was created');

        return redirect()->back() ;
    }

    /**
     * @return void
     * show all faqs
     */
    public function index(){
        $faqs = Faq::get();
        return view('Admin.faq.faqs' , compact('faqs'));
    }

    public function delete(DeleteFaqRequest $request ){
       $faq_id = $request->faq_id;

       Faq::where('id' , $faq_id )->delete();

        Alert::success('Success', 'Faq was deleted');

        return redirect()->back() ;
    }

    public function edit($faq_id){
        $faq=Faq::find($faq_id);

        return view('Admin.faq.edit' , compact('faq'));
    }
    /**
     * @param UpdateFaqRequest $request
     * @return void
     * 1-get faq data
     * 2-update
     * 3-alert
     * 4-return
     */
    public function update(UpdateFaqRequest $request){
        $faq=Faq::find($request->faq_id);

        $faq->update([
            'question' => $request->question ,
            'answer' => $request->answer ,
        ]);
        Alert::success('Success', 'Faq was updated');

        return redirect(route('admin.faq.all'));

    }


}
