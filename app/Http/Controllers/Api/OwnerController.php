<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Owener;
use Illuminate\Http\Request;

class OwnerController extends Controller
{

    use GeneralTrait;
    public function index()
    {
        //  Owe
        //  return $this->responseApi($entries,'ok',200);


    }
    public function store(Request $request)
    {
        //
    }


    public function show($id)
    {
        $entries=Owener::find($id);
        if($entries){
            return $this->getResponse($entries,'ok',200);
        }
        return $this->getResponse(null,'ok',401);


    }

       public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
