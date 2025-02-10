<div>
    <!-- Navbar -->
    <nav class="bg-[#838CF1] text-white fixed top-0 left-0 w-full shadow-md z-10">
        <div class="max-w-7xl mx-auto px-4">
            <div class="flex justify-between items-center h-16">
                <!-- Logo -->
                <div class="flex-shrink-0">
                    <a href="#" class="text-2xl font-bold">Portal</a>
                </div>
                <!-- Links -->
                <div class="flex space-x-8">
                    <a href="{{ route('user.index') }}" class="text-white hover:text-gray-300 font-medium">Home</a>
                    <a href="{{ route('user.create') }}" class="text-white hover:text-gray-300 font-medium">Cadastrar Usuário</a>
                    <button wire:click="logout" class="text-white hover:text-gray-300 font-medium">Logout</button>
                </div>
            </div>
        </div>
    </nav>
</div>
