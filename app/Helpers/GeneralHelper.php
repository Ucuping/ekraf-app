<?php

use Illuminate\Support\Facades\Auth;

if (!function_exists('customView')) {
    function customView($view, $data = [], $prefix = 'backend')
    {
        if (\Request::ajax()) {
            // return dd('aa');
            return view($prefix . '.' . $view, $data);
        } else {
            // return dd('bb');
            return view($prefix . '.layouts.app', $data);
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

if (!function_exists('randomFileName')) {
    function randomFileName($fileName, $file)
    {
        $fileName = $fileName . '_' . time() . rand(0, 999999999) . '_' . rand(0, 99999999) . '.' . $file->getClientOriginalExtension();
        return $fileName;
    }
}
