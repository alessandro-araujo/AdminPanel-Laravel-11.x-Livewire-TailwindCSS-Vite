<?php
namespace App\Livewire\User;
use Livewire\Attributes\Title;
use App\Models\User;
use Livewire\Component;
#[Title('Vizualizar Usuário')]

class Show extends Component
{
    public $userId;
    public $name;
    public $email;
    public $password;

    public function update($userId)
    {
        $user = User::findOrFail($userId);

        $messages = [
            'name.required' => 'O campo Nome é obrigatório.',
            'name.string' => 'O Nome deve ser uma string válida.',
            'name.max' => 'O Nome não pode ter mais de 70 caracteres.',
            'email.required' => 'O campo E-mail é obrigatório.',
            'email.email' => 'O E-mail deve ser um endereço de e-mail válido.',
            'email.unique' => 'Este E-mail já está em uso.',
            'password.required' => 'O campo Senha é obrigatório.',
            'password.min' => 'A Senha deve ter pelo menos 6 caracteres.',
        ];

        // Realiza a validação
        $validated = $this->validate([
            'name' => 'required|string|max:70',
            'email' => 'required|email|unique:users,email,' . $userId,
            'password' => 'required|min:6',
        ], $messages);




        $user->update([
            'name' => $validated['name'],
            'email' => $validated['email'],
            'password' => $validated['password'] ? bcrypt($validated['password']) : $user->password,
        ]);

        return redirect()->route('user.index')->with('success', 'Usuário alterado com sucesso!');
    }

    public function mount($id)
    {
        $user = User::findOrFail($id);
        $this->userId = $user->id;
        $this->name = $user->name;
        $this->email = $user->email;
    }
    public function render()
    {
        return view('livewire.user.show');
    }
}
