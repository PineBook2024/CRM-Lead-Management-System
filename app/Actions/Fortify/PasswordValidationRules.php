<?php

namespace App\Actions\Fortify;

trait PasswordValidationRules
{
    /**
     * Get the validation rules used to validate passwords.
     */
    protected function passwordRules()
    {
        return ['required', 'string', 'min:8', 'confirmed'];
    }
}
