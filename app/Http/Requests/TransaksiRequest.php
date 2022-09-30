<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TransaksiRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'produk_id' => ['required', 'string'],
            'nama_produk' => ['required', 'string'],
            'harga_produk' => ['required', 'string'],
            'jumlah_produk' => ['required', 'string'],
            'tanggal' => ['required', 'date'],
        ];
    }
}
