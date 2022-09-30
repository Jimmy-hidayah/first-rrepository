<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LaporanRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'transaksi_id' => ['required', 'string'],
            'jumlah_id' => ['required', 'string'],
            'jumlah_transaksi' => ['required', 'string'],
            'jumlah_produk' => ['required', 'string'],
            'tanggal' => ['required', 'date'],
        ];
    }
}
