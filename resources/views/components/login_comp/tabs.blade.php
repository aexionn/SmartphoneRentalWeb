<div class="flex bg-gray-100 rounded-xl p-1 mb-6">
    <button class="flex-1 py-3 px-4 rounded-lg font-medium transition-all duration-300" 
            :class="activeTab === 'login' ? 'bg-white text-primary shadow-md' : 'text-gray-500 hover:text-primary'"
            @click="activeTab = 'login'">
        Masuk
    </button>
    <button class="flex-1 py-3 px-4 rounded-lg font-medium transition-all duration-300" 
            :class="activeTab === 'register' ? 'bg-white text-primary shadow-md' : 'text-gray-500 hover:text-primary'"
            @click="activeTab = 'register'">
        Daftar
    </button>
</div>