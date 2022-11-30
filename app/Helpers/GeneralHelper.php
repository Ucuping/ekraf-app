<?php

use Illuminate\Support\Facades\Auth;

if (!function_exists('customView')) {
    function customView($view, $data = [])
    {
        if (\Request::ajax()) {
            // return dd('aa');
            return view('backend.' . $view, $data);
        } else {
            // return dd('bb');
            return view('backend.layouts.app', $data);
        }
    }
}

if (!function_exists('checkAuth')) {
    function checkAuth()
    {
        if (Auth::check()) {
            return true;
        } else {
            return false;
        }
    }
}

if (!function_exists('getInfoLogin')) {
    function getInfoLogin()
    {
        if (checkAuth()) {
            return Auth::user();
        } else {
            return null;
        }
    }
}

if (!function_exists('getUserPermissions')) {
    function getUserPermissions()
    {
        if (!is_null(auth()->user())) {
            $permissionsName = auth()->user()->getAllPermissions()->map(function ($perm) {
                return $perm->name;
            });
            return implode(',', $permissionsName->toArray());
        }
    }
}
