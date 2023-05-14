<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use App\Models\Url;

class UrlController extends Controller
{
    //
    public function index()
    {
        return view('index');
    }

    public function shorten(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'url' => Rule::unique('urls','original_url')
        ]);
        if ($validator->fails()) {
            // โค้ดเมื่อข้อมูลซ้ำ
            return redirect()->route('homes')->with('error', 'คุณกรอก URL นี้ไปแล้ว');
        } else {
            $url = $request->input('url');
            $code = $this->generateShortCode();
    
            Url::create([
                'original_url' => $url,
                'short_code' => $code,
            ]);
    
            return  redirect()->route('homes')->with('shortened', $code);
        }  
    }

    public function redirect($code)
    {
        $url = Url::where('short_code', $code)->firstOrFail();
        return redirect($url->original_url);
    }

    private function generateShortCode()
    {
        // Generate a unique short code, e.g., using random characters or hash functions.
        // Implement your own logic here based on your requirements.
        // This is just a basic example.
        return substr(str_shuffle("abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ123456789"), 0, 7);
    }

    public function login(){
        return view('login');
    }
}
