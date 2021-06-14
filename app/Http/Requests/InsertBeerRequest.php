<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class InsertBeerRequest extends FormRequest
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
            'Nom_Biere' => ['required','string','max:100'],
            'Prix_Biere' => ['required','numeric','min:0'],
            'Contenance_Biere' => ['required','numeric','min:0'],
            'Degre_alccol_Biere' => ['required','numeric','min:0'],
            'Description' => ['required','string','max:1000'],
            'Id_Producteur' => ['required','numeric','min:0'],
            'Id_Style' => ['required','numeric','min:0'],
            'image_Biere' => ['required','string']
        ];
    }
}
