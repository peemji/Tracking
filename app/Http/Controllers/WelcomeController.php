<?php 

namespace App\Http\Controllers;

//use Illuminate\Http\Request;
use App\Mikrotik;
use App\Http\Controllers\Controller;
use App\Http\Requests;

class WelcomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth',['except'=>['index','show']]);
    }

    public function hello() {
        return 'Hello from WelcomeController';
    }

    public function page($id,$title=null)
    {
        return 'Welcome to Page ' . $id . ' ' . $title;
    }

    public function getPage()
    {
        return 'WelcomeController@Page';
    }

    public function getContactUs()
    {
        return 'Welcome to Contact Us';
    }

    public function index()
    {
        $mikrotiks = Mikrotik::get();
        return view('mikrotik.index',compact('mikrotik'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $mikrotik = Mikrotik::find($id);
        if(empty($mikrotik))
            abort(404);
        return view('mikrotik.show',compact('mikrotik'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
