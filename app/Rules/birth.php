<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;

class birth implements Rule
{
    /**
     * Create a new rule instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Determine if the validation rule passes.
     *
     * @param  string  $attribute
     * @param  mixed  $value
     * @return bool
     */
    public function passes($attribute, $value)
    {
        list($ano,$mes,$dia) = explode("-",$value);
            $ano_diferencia  = date("Y") - $ano;
            $mes_diferencia = date("m") - $mes;
            $dia_diferencia   = date("d") - $dia;
            if ($dia_diferencia < 0 || $mes_diferencia < 0){
                $ano_diferencia--;
            }
            

            if ($ano_diferencia*1 > 18) {
                return true;
            } 
            

    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return 'The user is not over 18 years of age';
    }
}
