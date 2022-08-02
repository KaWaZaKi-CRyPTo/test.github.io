<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Route;
use Gate;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class RouteController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('route_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.route.index');
    }

    public function create()
    {
        abort_if(Gate::denies('route_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.route.create');
    }

    public function edit(Route $route)
    {
        abort_if(Gate::denies('route_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.route.edit', compact('route'));
    }

    public function show(Route $route)
    {
        abort_if(Gate::denies('route_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $route->load('startProvenance', 'endProvenance');

        return view('admin.route.show', compact('route'));
    }
}
