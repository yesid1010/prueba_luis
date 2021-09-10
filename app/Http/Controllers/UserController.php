<?php

namespace App\Http\Controllers;


use App\User;
use App\Http\Resources\UserResource;
use App\Transport;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{

    public function index()
    {
        return UserResource::collection(User::all());
    }


    public function store(Request $request)
    {

        $validator = Validator::make($request->all(),[
            'identification' => 'required',
            'name' => 'required',
            'lastName' => 'required',
            'dateOfBirth' => 'required',
            'direction' => 'required',
            'phone' => 'required|numeric',
            'sex' => 'required',
            'profesionId' => 'required|numeric',
            'municipalyId' => 'required|numeric',
            'vehicleId'=>'required|numeric',
            'markId'=> 'required|numeric',
            'year'=> 'required|numeric'
        ]);


        if ($validator->fails()) {
            return response()->json(['status' => 'bad_request'], 400);
        }


        $transport = Transport::create($request->all());


        $request->transportId = $transport->id;
        
        $user = User::create($request->all());
        if ($user) {
            return response()->json([
                'message' => 'Usuario creado satisfactoriamente',
                'data' => UserResource::make($user)
            ]);
        }

        return response()->json([
            'message' => 'Error al crear usuario',
        ]);
    }


    public function show($id)
    {
        $user = User::findOrFail($id);
        return UserResource::make($user);
    }


    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(),[
            'identification' => 'required',
            'name' => 'required',
            'lastName' => 'required',
            'dateOfBirth' => 'required',
            'direction' => 'required',
            'phone' => 'required|numeric',
            'sex' => 'required',
            'profesionId' => 'required|numeric',
            'municipalyId' => 'required|numeric',
            'transportId' => 'required|numeric',
        ]);

        if ($validator->fails()) {
            return response()->json(['status' => 'bad_request'], 400);
        }

        $user = User::findOrFail($id)->update($request->all());

        if ($user) {
            return response()->json([
                'message' => 'Usuario creado satisfactoriamente',
                'data' => UserResource::make(User::findOrFail($id))
            ]);
        }

        return response()->json([
            'message' => 'Error al Editar usuario',
        ]);
    }

  
    public function destroy($id)
    {
        $user = User::findOrFail($id);
        $user->delete();

        return response()->json([
            'message' => 'Usuario eliminado',
        ]);
    }
}
