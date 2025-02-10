<div>
  <!-- Layout flex com duas colunas -->
  <div class="flex min-h-screen">
    <!-- Formulário à esquerda -->
    <div class="w-full md:w-[45.5%] mb-[8rem] flex justify-left items-center p-4">
        <div class="p-8 rounded-2xl translate-x-20 w-full">
        <h2 class="text-5xl font-bold text-left mb-6">Register</h2>
        <form wire:submit.prevent="store" method="POST" class="space-y-6">
          <div>
            <label for="name" class="block text-sm font-medium mb-2 font-bold">Nome:</label>
            <input type="text" id="name" name="name" wire:model="name" required class="border-purple-500 w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="Digite seu Nome" />
            <div>@error('name')<span class="text-red-500 text-sm mt-2 block">{{ $message }}</span>@enderror</div>
          </div>
          <div>
            <label for="email" class="block text-sm font-medium mb-2">E-mail</label>
            <input type="email" id="email" name="email" wire:model="email" required class="border-purple-500 w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="Digite seu e-mail" />
            <div>@error('email')<span class="text-red-500 text-sm mt-2 block">{{ $message }}</span>@enderror</div>
          </div>
          <div>
            <label for="password" class="block text-sm font-medium mb-2">Senha</label>
            <input type="password" id="password" name="password" wire:model="password" required class="border-purple-500 w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="Digite sua senha" />
            <div>@error('password')<span class="text-red-500 text-sm mt-2 block">{{ $message }}</span>@enderror</div>
          </div>
          <button type="submit" class="w-full  bg-[#838CF1] hover:bg-[#3bac6d] text-white font-bold py-2 px-4 rounded-lg transition duration-300">Cadastrar</button>
        </form>
        <button wire:click="login" class="w-full mt-[1rem] bg-gray-500 hover:bg-gray-600 text-white font-bold py-2 px-4 rounded-lg transition duration-300">Voltar</button>
      </div>
    </div>

    <!-- Imagem à direita -->
    <div class="w-[33.3%] z-20 fixed translate-x-[48rem] translate-y-[17.2%]  ">
      <img src="{{ asset('images/laptop.png') }}" alt="Descrição" />
    </div>

    <!-- Retângulo fixo à direita -->
    <div class="w-1/3 h-screen bg-[#AFB3FF] absolute top-0 right-0"></div>
    <!-- item  838CF1 -->
    <div class="w-[40rem] h-32 bg-[#AFB3FF] rounded-full fixed z-30 top-[42.1rem] right-[76.2rem] transform rotate-[-37.4deg]  translate-x-4 translate-y-4 "></div>

    <!-- item sombra AFB3FF -->
    <div class="w-[40rem] h-32 bg-[#838CF1] rounded-full fixed z-20 top-[42rem] right-[75rem] transform rotate-[-37.4deg] shadow-lg"></div>
  </div>



</div>






