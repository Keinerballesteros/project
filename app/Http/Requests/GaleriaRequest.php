<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class GaleriaRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        
            if(request()->isMethod('post')){
                return [
                    'titulo' => 'required|unique:galeria,titulo|regex:/^[\pL\s\-]+$/u',
                    'categoria_id' => 'required|unique:categorias,nombre',
                    'descripcion' => 'required|unique:galeria,descripcion|regex:/^[\pL\s\-]+$/u',
                    'imagen' => 'required|imagen|mimes:jpeg.png.jp|max:2040',
                    
                ];	
            } elseif(request()->isMethod('put')){
                return [
                    'titulo' => 'required|regex:/^[\pL\s\-]+$/u|unique:galeria,titulo,' . $this->route('categorias'),
                    'descripcion' => 'required|regex:/^[\pL\s\-]+$/u|unique:galeria,descripcion,' . $this->route('categorias'),
                    'imagen' => 'required|regex:/^[\pL\s\-]+$/u|unique:galeria,imagen,' . $this->route('categorias'),
                ];
            }
            }

            public function attributes(){
                return[
                    'categoria_id' => 'categoria',
                ];
            }
    }


