<div {{ $errors->isEmpty() ? 'x-data= {loginError:false}' : 'x-data= {loginError:true}' }} x-show="activeTab === 'login'" x-transition:enter="transition ease-out duration-300" 
        x-transition:enter-start="opacity-0 translate-y-2" x-transition:enter-end="opacity-100 translate-y-0">
    <div x-show="loginError" class="bg-red-50 text-red-700 p-4 rounded-lg mb-4 border-l-4 border-red-500">
        @foreach ($errors->all() as $item)
        <p> {{ $item }} </p>
        @endforeach
    </div>
    <div x-show="loginSuccess" class="bg-green-50 text-green-700 p-4 rounded-lg mb-4 border-l-4 border-green-500">
        <p x-text="loginSuccess"></p>
    </div>

    <form method="POST" action="/auth/conf" class="space-y-4">
        @csrf
        <div>
            <label class="block text-gray-700 font-medium mb-2">Email</label>
            <input name="email" type="email" required
                    class="w-full px-4 py-3 border border-gray-300 rounded-xl focus:outline-none focus:ring-2 focus:ring-primary focus:border-transparent transition"
                    placeholder="Masukkan email Anda" value="{{ old('email') }}">
        </div>
        <div>
            <label class="block text-gray-700 font-medium mb-2">Password</label>
            <input name="password" type="password" required
                    class="w-full px-4 py-3 border border-gray-300 rounded-xl focus:outline-none focus:ring-2 focus:ring-primary focus:border-transparent transition"
                    placeholder="Masukkan password Anda">
        </div>
        <button type="submit" class="w-full bg-gradient-to-r from-blue-500 to-indigo-600 text-white py-3 px-4 rounded-xl font-medium hover:shadow-lg transition-all duration-300">
            <span>Masuk</span>
            <span x-show="!loginLoading" class="flex items-center justify-center">
                <svg class="animate-spin -ml-1 mr-3 h-5 w-5 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                    <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                    <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
                </svg>
                Memproses...
            </span>
        </button>
    </form>
</div>