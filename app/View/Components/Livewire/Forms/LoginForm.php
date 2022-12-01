<?php

namespace App\View\Components\Livewire\Forms;

use App\Traits\Forms\Auth\LoginTrait;
use Livewire\Component;

class LoginForm extends Component
{
    use LoginTrait;

    /**
     * Phone/Email input
     * @var string
     */
    public $phone_email;

    /**
     * Password input
     * @var string
     */
    public $password;

    /**
     * Renders livewire component
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function render()
    {
        return view('components.livewire.forms.login-form');
    }

    /**
     * Validate when updated
     * @param string $propertyName
     * @return void
     */
    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    /**
     * Prepare validation attributes
     * @return array
     */
    protected function validationAttributes()
    {
        return $this->attributes();
    }

    /**
     * Refill form input
     * @return void
     */
    public function mount()
    {
        $this->fill([
            'phone_email' => old('phone_email')
        ]);
    }
}