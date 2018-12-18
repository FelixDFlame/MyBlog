<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use View;

use Illuminate\Http\Request;

class FirstController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        //
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

    public function coba()
    {
        $json = json_decode(file_get_contents('https://api.coindesk.com/v1/bpi/currentprice.json'), true);
        //$request = Request::create('https://api.coindesk.com/v1/bpi/currentprice.json', 'GET');
        //$response = Laracurl::get('https://api.coindesk.com/v1/bpi/currentprice.json');
        //var_dump($json);

        //var_dump($json["time"]["updated"]);
        //die();
        return View::make('tes', array(
                'info' => $json["time"]["updated"]
            )
        );
    }
    public function welcome()
    {
        echo "hai";
        return View::make('welcome',array(
            'title' => ["Beatless","Guilty Crown","Sakurasou no Pet no Kanojo@"],
            'path' => [
                "images/img.jpg",
                "images/img2.jpg",
                "images/img3.png"
            ]
        ));
    }
    public function addContact()
    {
        return View::make('send');
    }
}
