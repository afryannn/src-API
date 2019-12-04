<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\CountryModel;
use Validator;

class CountryController extends Controller
{
  public function country()
  {
    return response()->json(CountryModel::get(),200);
  }
  public function countryByID($id)
  {
    $country = countryModel::find($id);
    if(is_null($country)){
      return response()->json('Record Not Found!',404);
    }
    return response()->json(200);
  }
  public function countrySave(Request $req)
  {
    $rules = [
      'name' => 'required|min:3',
      'iso' => 'required|min:2|max:2',
    ];
    $validator = Validator::make($req->all(),$rules);
    if($validator->fails()){
      return response()->json($validator->errors(),400);
    }
    $country = CountryModel::create($req->all());
    return response()->json($country,201);
  }
  public function countryUpdate(Request $req,$id)
  {
    $country = CountryModel::find($id);
    if(is_null($country)){
      return response()->json('Record Not Found!',404);
    }
    $country->update($req->all());
    return response()->json($country,200);
  }
  public function countryDelete(Request $req,CountryModel $country)
  {
    $country->delete();
    return response()->json(null,204);
  }
}
