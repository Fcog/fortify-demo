<?php

namespace App\Http\Responses;



use Laravel\Fortify\Contracts\LogoutResponse as FortifyLogoutResponse;

class LogoutResponse implements FortifyLogoutResponse
{

    public function toResponse($request)
    {
        dd('sesion cerrada');
    }
}
