<?php

namespace App\Actions\Fortify;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use Laravel\Fortify\Contracts\CreatesNewUsers;

class CreateNewUser implements CreatesNewUsers
{
    use PasswordValidationRules;

    /**
     * Validate and create a newly registered user.
     *
     * @param  array<string, string>  $input
     */
    public function create(array $input): User
    {
        Validator::make($input, [
            'nom' => ['required', 'string', 'max:255'],
            'email' => [
                'required',
                'string',
                'email',
                'max:255',
                Rule::unique(User::class),
            ],
            'tel1' => ['required', 'string', 'max:255'],
            'password' => $this->passwordRules(),
            'role'=>['required', 'string', 'max:50'],
        ])->validate();

        return User::create([
            'nom' => $input['nom'],
            'email' => $input['email'],
            'tel1' =>$input ['tel1'],
            'tel2' =>$input ['tel2'],
            'password' => Hash::make($input['password']),
            'role' => $input['role'],
        ]);
         
    }
}
