<?php
/*
  Authors : mail@kemalcan.net (Kemal CAN)
  Website : https://kemalcan.net/
  App Name : Handy Service Full App Flutter
  This App Template Source code is licensed as per the
  terms found in the Website https://kemalcan.net/license
  Copyright and  © 2022-present mail@kemalcan.net.
*/
namespace App\Http\Controllers\v1;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Favourites;
use Validator;
class FavouritesController extends Controller
{
    public function save(Request $request){
        $validator = Validator::make($request->all(), [
            'uid' => 'required',
            'freelancer_uid' => 'required',
            'status' => 'required'
        ]);
        if ($validator->fails()) {
            $response = [
                'success' => false,
                'message' => 'Validation Error.', $validator->errors(),
                'status'=> 500
            ];
            return response()->json($response, 404);
        }

        $data = Favourites::create($request->all());
        if (is_null($data)) {
            $response = [
            'data'=>$data,
            'message' => 'error',
            'status' => 500,
        ];
        return response()->json($response, 200);
        }
        $response = [
            'data'=>$data,
            'success' => true,
            'status' => 200,
        ];
        return response()->json($response, 200);
    }

    public function getById(Request $request){
        $validator = Validator::make($request->all(), [
            'id' => 'required',
        ]);
        if ($validator->fails()) {
            $response = [
                'success' => false,
                'message' => 'Validation Error.', $validator->errors(),
                'status'=> 500
            ];
            return response()->json($response, 404);
        }

        $data = Favourites::find($request->id);

        if (is_null($data)) {
            $response = [
                'success' => false,
                'message' => 'Data not found.',
                'status' => 404
            ];
            return response()->json($response, 404);
        }

        $response = [
            'data'=>$data,
            'success' => true,
            'status' => 200,
        ];
        return response()->json($response, 200);
    }

    public function inMyList(Request $request){
        $validator = Validator::make($request->all(), [
            'uid' => 'required',
            'freelancer_uid' => 'required',
        ]);
        if ($validator->fails()) {
            $response = [
                'success' => false,
                'message' => 'Validation Error.', $validator->errors(),
                'status'=> 500
            ];
            return response()->json($response, 404);
        }

        $data = Favourites::where(['uid'=>$request->uid,'freelancer_uid'=>$request->freelancer_uid])->first();

        $response = [
            'data'=>$data,
            'success' => true,
            'status' => 200,
        ];
        return response()->json($response, 200);
    }

    public function update(Request $request){
        $validator = Validator::make($request->all(), [
            'id' => 'required',
        ]);
        if ($validator->fails()) {
            $response = [
                'success' => false,
                'message' => 'Validation Error.', $validator->errors(),
                'status'=> 500
            ];
            return response()->json($response, 404);
        }
        $data = Favourites::find($request->id)->update($request->all());

        if (is_null($data)) {
            $response = [
                'success' => false,
                'message' => 'Data not found.',
                'status' => 404
            ];
            return response()->json($response, 404);
        }
        $response = [
            'data'=>$data,
            'success' => true,
            'status' => 200,
        ];
        return response()->json($response, 200);
    }

    public function delete(Request $request){
     $validator = Validator::make($request->all(), [
            'uid' => 'required',
            'freelancer_uid' => 'required',
        ]);
        if ($validator->fails()) {
            $response = [
                'success' => false,
                'message' => 'Validation Error.', $validator->errors(),
                'status'=> 500
            ];
            return response()->json($response, 404);
        }
        $data = Favourites::where(['uid'=>$request->uid,'freelancer_uid'=>$request->freelancer_uid])->first();
        if ($data) {
            $data->delete();
            $response = [
                'data'=>$data,
                'success' => true,
                'status' => 200,
            ];
            return response()->json($response, 200);
        }
        $response = [
            'success' => false,
            'message' => 'Data not found.',
            'status' => 404
        ];
        return response()->json($response, 404);
    }

    public function getAll(){
        $data = Favourites::all();
        if (is_null($data)) {
            $response = [
                'success' => false,
                'message' => 'Data not found.',
                'status' => 404
            ];
            return response()->json($response, 404);
        }

        $response = [
            'data'=>$data,
            'success' => true,
            'status' => 200,
        ];
        return response()->json($response, 200);
    }
}
