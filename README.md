# FormValidationLivewire
## Steps:
Installing Laravel 
1. Create new laravel project. ``` composer create-project laravel/laravel FormValidationLivewire```
   
Installing Livewire
1. Installing livewire. ``` composer require livewire/livewire ```
2. Create new component. ``` php artisan make:livewire ContactForm ```
3. Update your code as in the files .


## Here's how you can perform form validation in Livewire:

> ### Defining Validation Rules: 
In your Livewire component, you define the validation rules in a rules() method. This method should return an array of validation rules, just like you would do in a Laravel form request.
```php
namespace App\Http\Livewire;

use Livewire\Component;

class ContactForm extends Component
{
    public $name;
    public $email;

    public function rules()
    {
        return [
            'name' => 'required|min:3',
            'email' => 'required|email',
        ];
    }

    // Other methods and logic
} 
```
> ### Displaying Validation Errors:
When the form is submitted or fields are updated, Livewire will automatically trigger the validation process based on the defined rules. If any validation rules fail, Livewire will automatically capture the validation errors for each corresponding field. You can access these errors using the $errors variable in your Blade template.
```php
<form wire:submit.prevent="submitForm">
    <div>
        <label for="name">Name:</label>
        <input type="text" id="name" wire:model="name">
        @error('name') <span class="error">{{ $message }}</span> @enderror
    </div>

    <div>
        <label for="email">Email:</label>
        <input type="email" id="email" wire:model="email">
        @error('email') <span class="error">{{ $message }}</span> @enderror
    </div>

    <button type="submit">Submit</button>
</form>
```
> ### Handling Form Submission: 
You can implement a method to handle the form submission in your Livewire component. This method will only be executed if the form data passes validation. You can perform any necessary actions, such as saving data to the database, in this method.
```php
namespace App\Http\Livewire;

use Livewire\Component;

class ContactForm extends Component
{
    // ... (other code)

    public function submitForm()
    {
        // Form validation will be performed automatically before this method is called.
        // Perform any necessary actions here, e.g., saving data to the database

        // After form submission, you can reset the form fields if needed
        $this->reset(['name', 'email']);
    }

    // ... (other code)
}

```
By integrating Laravel's validation rules into the Livewire component and using the $errors variable to display validation messages in the Blade template, you can achieve form validation in Livewire Laravel.

## Result

![Result1](https://github.com/RanaFoura/FormValidationLivewire/assets/115618347/6c926078-f9c6-4c7e-9398-f43ac0c48e56)
![Result2](https://github.com/RanaFoura/FormValidationLivewire/assets/115618347/c4c33ef6-5eed-4af0-8719-937d200fad8a)

