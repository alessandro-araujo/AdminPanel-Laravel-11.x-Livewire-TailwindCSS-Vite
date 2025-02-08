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

        // Validação
        $this->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email,' . $userId,
            'password' => 'nullable|string|min:6',
        ]);

        $user->update([
            'name' => $this->name,
            'email' => $this->email,
            'password' => $this->password ? bcrypt($this->password) : $user->password,
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
