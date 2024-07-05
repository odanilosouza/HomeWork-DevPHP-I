<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreUpdateUserRequest;
use App\Models\User;
use App\Http\Resources\UserResource;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class UserController extends Controller
{
    public function index()
    {
       $users = User::paginate();

       return UserResource ::collection($users);

    }

    public function store(StoreUpdateUserRequest $request)
    {
    
        $data = $request->validated();
        $data['password'] = bcrypt($request->password);  //criptografa a senha do usuário

        $user = User::create($data);

        return new UserResource($user);

    }
    public function show(string $id) 
    {
        $user = User::findOrFail($id);
        return new UserResource($user);
    }

    public function update(StoreUpdateUserRequest $request, string $id)
    {
        $user = User::findOrFail($id);

        $data = $request->all();

        if($request->password)
            $data['password'] = bcrypt($request->password);

        $user->update($data);

        return new UserResource($user);
    }

    public function destroy(string $id)
    {
        $user = User::findOrFail($id)->delete();

        return response()->json([], Response::HTTP_NO_CONTENT);
    }
}
