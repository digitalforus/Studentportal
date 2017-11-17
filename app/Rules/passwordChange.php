<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;
use Hash;

class passwordChange implements Rule
{
    /**
     * Create a new rule instance.
     *
     * @return void
     */
    public $oldPassword;

    public function __construct($oldPassword)
    {
        $this->oldPassword = $oldPassword;
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

        if (Hash::check($value, $this->oldPassword)) {
            return true;
        }
        else{
            return false;
        }
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return 'please input the correct old password';
    }
}
