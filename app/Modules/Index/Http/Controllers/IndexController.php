<?php

namespace Modules\Index\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
//use Spatie\Newsletter\Newsletter;
use Spatie\Newsletter\NewsletterFacade as Newsletter;

class IndexController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index()
    {
        return view('index::index');
    }

    /**
     * Show the form for creating a new resource.
     * @return Renderable
     */
    public function create()
    {
        return view('index::create');
    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Renderable
     */
    public function store(Request $request)
    {
        $notification = array();

        if ( ! Newsletter::isSubscribed($request->email) ) {
            Newsletter::subscribe($request->email);
           // $notification['alert-type'] = 'success';
            return redirect()->to('https://46150446yfq3uj4qrj4ijb4o7r.hop.clickbank.net/');
        } else {
            $notification['alert-type'] = 'error';
        }

        return redirect('/index')->with($notification);
    }

    /**
     * Show the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function show($id)
    {
        return view('index::show');
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function edit($id)
    {
        return view('index::edit');
    }

    /**
     * Update the specified resource in storage.
     * @param Request $request
     * @param int $id
     * @return Renderable
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Renderable
     */
    public function destroy($id)
    {
        //
    }


}
