<div class="p-8 md:p-12 flex-1 flex items-center justify-center">
    <div x-data="{ activeTab: 'login' }" class="w-full max-w-md">
        <div class="text-center mb-8">
            <h2 class="text-2xl font-bold text-gray-800 mb-2">Selamat Datang</h2>
            <p class="text-gray-600">Masuk atau daftar untuk memulai</p>
        </div>
        <x-login_comp.tabs />

        <x-login_comp.login_form />

        <x-login_comp.register_form />
    </div>
</div>