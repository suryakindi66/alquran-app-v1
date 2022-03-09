<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    function get_alldatasurah($url){
        $curl = curl_init();
        curl_setopt($curl, CURLOPT_URL, $url);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, TRUE);
        $result = curl_exec($curl);
        curl_close($curl);
        $data = json_decode($result, true);
        return $data;
    }
     public function index()
    {
      
        if(request('search')){
            $searchvalue = request('search');
            $new_string = str_replace(' ','%20',$searchvalue);
            $data = $this->get_alldatasurah('https://api-alquranid.herokuapp.com/surah/search/'.$new_string);
            $resultdata = $data['data'];
        }else{
            $data = $this->get_alldatasurah('https://api-alquranid.herokuapp.com/surah/');
            $resultdata = $data['data'];
        }
      
      
        return view('welcome', ['resultdata'=>$resultdata]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function detail($id)
    {
        $indexarrayalldata = $id - 1;
        
        $alldata = $this->get_alldatasurah('https://api-alquranid.herokuapp.com/surah/');
        $resultalldata = $alldata['data'][$indexarrayalldata];

        $detailsurah = $this->get_alldatasurah('https://api-alquranid.herokuapp.com/surah/'.$id);
        $resultdetailsurah = $detailsurah['data'];
        return view('detailsurah', ['resultdetailsurah'=>$resultdetailsurah, 'resultalldata'=>$resultalldata]);
    
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
}
