<?php
namespace App\Http\Requests;
use Illuminate\Foundation\Http\FormRequest;
use Auth;

class StoreOrderRequest extends FormRequest {
    public function authorize() {
        return Auth::check();
    }

    public function rules() {
        return [

        ];
    }

    public function messages() {
        return [

        ];
    }
}
