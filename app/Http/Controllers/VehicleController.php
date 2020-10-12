<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateVehicleRequest;
use App\User;
use Illuminate\Http\Request;

class VehicleController extends Controller
{
    public function addVehicle(CreateVehicleRequest $request)
    {
        $user = User::createUser($request->only('email', 'surname', 'forename', 'name', 'password'));

        $car_data = $request->only('type', 'localization', 'maximum_person');
        $car_data['can_children'] = $request->has('can_children');
        $car_data['can_animals'] = $request->has('can_animals');

        $user->vehicle()->create($car_data);

        return back();
    }
}
