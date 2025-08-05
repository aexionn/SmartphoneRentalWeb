<div {{ $errors->isEmpty() ? 'x-data= {registerError:false}' : 'x-data= {registerError:true}' }} x-show="activeTab === 'register'" x-transition:enter="transition ease-out duration-300" 
        x-transition:enter-start="opacity-0 translate-y-2" x-transition:enter-end="opacity-100 translate-y-0">
    <div x-show="registerError" class="bg-red-50 text-red-700 p-4 rounded-lg mb-4 border-l-4 border-red-500">
        @foreach ($errors->all() as $item)
        <p> {{ $item }} </p>
        @endforeach
    </div>
    <div x-show="registerSuccess" class="bg-green-50 text-green-700 p-4 rounded-lg mb-4 border-l-4 border-green-500">
        <p x-text="registerSuccess"></p>
    </div>

    <form method="POST" action="{{ route('auth.store') }}" class="space-y-4">
       @csrf
        <div>
            <label class="block text-gray-700 font-medium mb-2">Email *</label>
            <input type="email" name="email" x-model="email" required
                    class="w-full px-4 py-3 border border-gray-300 rounded-xl focus:outline-none focus:ring-2 focus:ring-primary focus:border-transparent transition"
                    placeholder="contoh@email.com" value="{{ old('email') }}">
        </div>
        <div>
            <label class="block text-gray-700 font-medium mb-2">Nama Lengkap *</label>
            <input type="text" name="name" x-model="nama" required
                    class="w-full px-4 py-3 border border-gray-300 rounded-xl focus:outline-none focus:ring-2 focus:ring-primary focus:border-transparent transition"
                    placeholder="Masukkan nama lengkap" value="{{ old('name') }}" >
        </div>
        {{-- <div>
            <label class="block text-gray-700 font-medium mb-2">Nomor Telepon *</label>
            <input type="tel" x-model="telepon" required
                    class="w-full px-4 py-3 border border-gray-300 rounded-xl focus:outline-none focus:ring-2 focus:ring-primary focus:border-transparent transition"
                    placeholder="08xxxxxxxxxx">
        </div> --}}
        {{-- <div>
            <label class="block text-gray-700 font-medium mb-2">Foto Selfie dengan KTP *</label>
            <div class="border-2 border-dashed border-gray-300 rounded-xl p-4 text-center cursor-pointer hover:border-blue-400 transition"
                    @click="document.getElementById('file-upload').click()">
                <input type="file" id="file-upload" class="hidden" accept="image/*" @change="handleFileUpload">
                <div x-show="!uploadedFile" class="space-y-2">
                    <svg class="mx-auto h-12 w-12 text-gray-400" stroke="currentColor" fill="none" viewBox="0 0 48 48" aria-hidden="true">
                        <path d="M28 8H12a4 4 0 00-4 4v20m32-12v8m0 0v8a4 4 0 01-4 4H12a4 4 0 01-4-4v-4m32-4l-3.172-3.172a4 4 0 00-5.656 0L28 28M8 32l9.172-9.172a4 4 0 015.656 0L28 28m0 0l4 4m4-24h8m-4-4v8m-12 4h.02" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                    </svg>
                    <p class="text-sm text-gray-600">Klik untuk mengunggah foto</p>
                </div>
                <div x-show="uploadedFile" class="flex items-center justify-center space-x-2">
                    <svg class="h-6 w-6 text-blue-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M15 13l-3-3m0 0l-3 3m3-3v12"></path>
                    </svg>
                    <span x-text="uploadedFile.name" class="text-sm font-medium text-gray-700"></span>
                </div>
            </div>
        </div> --}}
        <div>
            <label class="block text-gray-700 font-medium mb-2">Password *</label>
            <input type="password" name="password" x-model="password" required
                    class="w-full px-4 py-3 border border-gray-300 rounded-xl focus:outline-none focus:ring-2 focus:ring-primary focus:border-transparent transition"
                    placeholder="Minimal 8 karakter">
        </div>
        {{-- <div>
            <label class="block text-gray-700 font-medium mb-2">Konfirmasi Password *</label>
            <input type="password" x-model="confirmPassword" required
                    class="w-full px-4 py-3 border border-gray-300 rounded-xl focus:outline-none focus:ring-2 focus:ring-primary focus:border-transparent transition"
                    placeholder="Ulangi password">
        </div> --}}
        <button type="submit" class="w-full bg-gradient-to-r from-blue-500 to-indigo-600 text-white py-3 px-4 rounded-xl font-medium hover:shadow-lg transition-all duration-300">
            <span>Daftar Sekarang</span>
            <span x-show="registerLoading" class="flex items-center justify-center">
                <svg class="animate-spin -ml-1 mr-3 h-5 w-5 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                    <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                    <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
                </svg>
                Memproses...
            </span>
        </button>
    </form>
</div>