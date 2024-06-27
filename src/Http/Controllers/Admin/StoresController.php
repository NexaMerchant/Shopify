<?php

namespace NexaMerchant\Shopify\Http\Controllers\Admin;

use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;

class StoresController extends Controller
{
    public function index(Request $request) {
        $data = [];
        $data['code'] = 200;
        $data['message'] = "Demo";
        return view('Shopify::Admin.demo', compact("data"));
    }
}
