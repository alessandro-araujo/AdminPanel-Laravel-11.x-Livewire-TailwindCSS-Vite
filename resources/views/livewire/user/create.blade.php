<div>
    <livewire:navbar />
    <!-- Conteúdo principal -->
    <div class="pt-24 flex items-center justify-center">
        <div class="bg-white rounded-lg shadow-lg p-8 w-[90%] max-w-lg">
            <h2 class="text-2xl font-bold mb-6 text-gray-800">Cadastrar Usuário</h2>
            <!-- Formulário de edição -->
            <form wire:submit="store" method="POST" class="space-y-6">
                <div>
                    <label for="name" class="block text-sm font-medium text-gray-700 mb-2">Nome</label>
                    <input type="text" id="name" wire:model="name" name="name" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"  />
                    <div>@error('name')<span class="text-red-500 text-sm mt-2 block">{{ $message }}</span>@enderror</div>
                </div>
                <div>
                    <label for="email" class="block text-sm font-medium text-gray-700 mb-2">E-mail</label>
                    <input type="email" id="email" wire:model="email" name="email" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"/>
                    <div>@error('email')<span class="text-red-500 text-sm mt-2 block">{{ $message }}</span>@enderror</div>
                </div>
                <div>
                    <label for="id" class="block text-sm font-medium text-gray-700 mb-2">Senha</label>
                    <input type="password" id="password" wire:model="password" name="password" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" />
                    <div>@error('password')<span class="text-red-500 text-sm mt-2 block">{{ $message }}</span>@enderror</div>
                </div>
                <div class="flex items-center justify-between">
                    <button type="submit" class="bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-4 rounded-lg transition duration-300">Cadastrar Usuário</button>
                    <a href="{{ route('user.index') }}" class="bg-gray-500 hover:bg-gray-600 text-white font-bold py-2 px-4 rounded-lg transition duration-300">Cancelar</a>
                </div>
            </form>
        </div>
    </div>
</div>
