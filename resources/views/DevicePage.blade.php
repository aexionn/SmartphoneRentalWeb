@php
    use Illuminate\Support\Number;
@endphp
<x-public_comp.layout>
    <x-public_comp.navbar/>
    <section class="bg-gradient-to-r from-blue-500 to-indigo-600 text-white py-32">
        <div class="container mx-auto px-4 text-center">
            <h1 class="text-4xl md:text-5xl font-bold mb-4">Pilihan Smartphone Premium</h1>
            <p class="text-xl text-blue-100 max-w-2xl mx-auto">Sewa smartphone flagship terbaru dengan harga terjangkau. Mulai dari Rp 50.000/hari dengan proses persetujuan cepat.</p>
        </div>
    </section>
    {{-- @dd(request()->all()); --}}
    <!-- Devices Section -->
    <section class="py-10 bg-white">
        <div class="container mx-auto px-4">
            <!-- Filter Section -->
            <form action="/devices" method="GET">
            <div class="mb-12 bg-gray-50 rounded-xl p-6">
                <h2 class="text-xl font-semibold mb-4 text-gray-800">Filter Perangkat</h2>
                <div class="flex flex-wrap gap-4">
                    <select name="brand" class="px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-primary">
                        <option value="">Semua Brand</option>
                        @foreach ($deviceDrop as $device)
                        <option value="{{ $device->brand }}">{{ $device->brand }}</option>
                        @endforeach
                    </select>
                    <select name="price" class="px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-primary">
                        <option value="">Semua Harga</option>
                        <option value="400000-600000">Rp400.000-Rp600.000/hari</option>
                        <option value="600000-800000">Rp600.000-Rp800.000/hari</option>
                        <option value="800000-1800000">Rp800.000-Rp1.800.000/hari</option>
                    </select>
                    <select name="condition" class="px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-primary">
                        <option value="">Semua Kondisi</option>
                        <option value="Baru">Baru</option>
                        <option value="Bekas">Bekas</option>
                    </select>
                    <button type="submit" class="bg-primary text-white px-6 py-2 rounded-lg hover:bg-blue-600 transition">
                        Terapkan Filter
                    </button>
                </div>
            </div>
            </form>
    
            <!-- Devices Grid -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Device Card 1 -->
                @forelse ($devices as $device)
                    <div class="device-card bg-white rounded-xl overflow-hidden shadow-md transition-all duration-300 border border-gray-100">
                        <div class="p-6">
                            <div class="flex justify-center mb-6">
                                <img src="{{ $device->image }}" 
                                    alt="iPhone 15 Pro Max" class="h-48 object-contain">
                            </div>
                            <h3 class="text-xl font-bold mb-2">{{ $device->brand . ' ' . $device->model }}</h3>
                            <div class="flex items-center mb-3">
                                <div class="flex text-yellow-400 mr-2">
                                    ★★★★★
                                </div>
                                <span class="text-gray-600 text-sm">(24 review)</span>
                            </div>
                            <div class="space-y-2 mb-4">
                                <div class="flex justify-between">
                                    <span class="text-gray-600">Kapasitas:</span>
                                    <span class="font-medium">{{ $device->storage }}</span>
                                </div>
                                <div class="flex justify-between">
                                    <span class="text-gray-600">Kondisi:</span>
                                    <span class="font-medium">{{ $device->condition }}</span>
                                </div>
                                <div class="flex justify-between">
                                    <span class="text-gray-600">Garansi:</span>
                                    <span class="font-medium">Resmi 1 tahun</span>
                                </div>
                            </div>
                            <div class="flex items-end justify-between">
                                <div>
                                    <p class="text-gray-500 text-sm">Mulai dari</p>
                                    <p class="text-2xl font-bold text-primary">{{ Number::currency($device->price, in: 'IDR', locale: 'id_ID') }}<span class="text-sm font-normal text-gray-500">/hari</span></p>
                                </div>
                                <button class="bg-primary text-white px-4 py-2 rounded-lg hover:bg-blue-600 transition">
                                    Sewa Sekarang
                                </button>
                            </div>
                        </div>
                    </div>
                @empty
                    
                @endforelse
                <!-- Device Card 2 -->
                {{-- <div class="device-card bg-white rounded-xl overflow-hidden shadow-md transition-all duration-300 border border-gray-100">
                    <div class="p-6">
                        <div class="flex justify-center mb-6">
                            <img src="https://images.unsplash.com/photo-1704380141043-cfbd8a9d07a5?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=600&q=80" 
                                 alt="Samsung S24 Ultra" class="h-48 object-contain">
                        </div>
                        <h3 class="text-xl font-bold mb-2">Samsung S24 Ultra</h3>
                        <div class="flex items-center mb-3">
                            <div class="flex text-yellow-400 mr-2">
                                ★★★★☆
                            </div>
                            <span class="text-gray-600 text-sm">(18 review)</span>
                        </div>
                        <div class="space-y-2 mb-4">
                            <div class="flex justify-between">
                                <span class="text-gray-600">Kapasitas:</span>
                                <span class="font-medium">512GB</span>
                            </div>
                            <div class="flex justify-between">
                                <span class="text-gray-600">Kondisi:</span>
                                <span class="font-medium">Baru</span>
                            </div>
                            <div class="flex justify-between">
                                <span class="text-gray-600">Garansi:</span>
                                <span class="font-medium">Internasional</span>
                            </div>
                        </div>
                        <div class="flex items-end justify-between">
                            <div>
                                <p class="text-gray-500 text-sm">Mulai dari</p>
                                <p class="text-2xl font-bold text-primary">Rp 120.000<span class="text-sm font-normal text-gray-500">/hari</span></p>
                            </div>
                            <button class="bg-primary text-white px-4 py-2 rounded-lg hover:bg-blue-600 transition">
                                Sewa Sekarang
                            </button>
                        </div>
                    </div>
                </div>
    
                <!-- Device Card 3 -->
                <div class="device-card bg-white rounded-xl overflow-hidden shadow-md transition-all duration-300 border border-gray-100">
                    <div class="p-6">
                        <div class="flex justify-center mb-6">
                            <img src="https://images.unsplash.com/photo-1697898706716-3fd0b50a1a0a?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=600&q=80" 
                                 alt="Google Pixel 8 Pro" class="h-48 object-contain">
                        </div>
                        <h3 class="text-xl font-bold mb-2">Google Pixel 8 Pro</h3>
                        <div class="flex items-center mb-3">
                            <div class="flex text-yellow-400 mr-2">
                                ★★★★★
                            </div>
                            <span class="text-gray-600 text-sm">(32 review)</span>
                        </div>
                        <div class="space-y-2 mb-4">
                            <div class="flex justify-between">
                                <span class="text-gray-600">Kapasitas:</span>
                                <span class="font-medium">256GB</span>
                            </div>
                            <div class="flex justify-between">
                                <span class="text-gray-600">Kondisi:</span>
                                <span class="font-medium">Baru</span>
                            </div>
                            <div class="flex justify-between">
                                <span class="text-gray-600">Garansi:</span>
                                <span class="font-medium">Resmi</span>
                            </div>
                        </div>
                        <div class="flex items-end justify-between">
                            <div>
                                <p class="text-gray-500 text-sm">Mulai dari</p>
                                <p class="text-2xl font-bold text-primary">Rp 100.000<span class="text-sm font-normal text-gray-500">/hari</span></p>
                            </div>
                            <button class="bg-primary text-white px-4 py-2 rounded-lg hover:bg-blue-600 transition">
                                Sewa Sekarang
                            </button>
                        </div>
                    </div>
                </div>
    
                <!-- Device Card 4 -->
                <div class="device-card bg-white rounded-xl overflow-hidden shadow-md transition-all duration-300 border border-gray-100">
                    <div class="p-6">
                        <div class="flex justify-center mb-6">
                            <img src="https://images.unsplash.com/photo-1631729370906-7114d1d3ac71?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=600&q=80" 
                                 alt="iPhone 14 Pro" class="h-48 object-contain">
                        </div>
                        <h3 class="text-xl font-bold mb-2">iPhone 14 Pro</h3>
                        <div class="flex items-center mb-3">
                            <div class="flex text-yellow-400 mr-2">
                                ★★★★☆
                            </div>
                            <span class="text-gray-600 text-sm">(15 review)</span>
                        </div>
                        <div class="space-y-2 mb-4">
                            <div class="flex justify-between">
                                <span class="text-gray-600">Kapasitas:</span>
                                <span class="font-medium">256GB</span>
                            </div>
                            <div class="flex justify-between">
                                <span class="text-gray-600">Kondisi:</span>
                                <span class="font-medium">Bekas</span>
                            </div>
                            <div class="flex justify-between">
                                <span class="text-gray-600">Garansi:</span>
                                <span class="font-medium">3 bulan</span>
                            </div>
                        </div>
                        <div class="flex items-end justify-between">
                            <div>
                                <p class="text-gray-500 text-sm">Mulai dari</p>
                                <p class="text-2xl font-bold text-primary">Rp 90.000<span class="text-sm font-normal text-gray-500">/hari</span></p>
                            </div>
                            <button class="bg-primary text-white px-4 py-2 rounded-lg hover:bg-blue-600 transition">
                                Sewa Sekarang
                            </button>
                        </div>
                    </div>
                </div>
    
                <!-- Device Card 5 -->
                <div class="device-card bg-white rounded-xl overflow-hidden shadow-md transition-all duration-300 border border-gray-100">
                    <div class="p-6">
                        <div class="flex justify-center mb-6">
                            <img src="https://images.unsplash.com/photo-1682686580391-615b3f4e56ea?ixlib=rb-4.0.3&ixid=M3wxMjA3fDF8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=600&q=80" 
                                 alt="Samsung Z Fold 5" class="h-48 object-contain">
                        </div>
                        <h3 class="text-xl font-bold mb-2">Samsung Z Fold 5</h3>
                        <div class="flex items-center mb-3">
                            <div class="flex text-yellow-400 mr-2">
                                ★★★★★
                            </div>
                            <span class="text-gray-600 text-sm">(28 review)</span>
                        </div>
                        <div class="space-y-2 mb-4">
                            <div class="flex justify-between">
                                <span class="text-gray-600">Kapasitas:</span>
                                <span class="font-medium">512GB</span>
                            </div>
                            <div class="flex justify-between">
                                <span class="text-gray-600">Kondisi:</span>
                                <span class="font-medium">Baru</span>
                            </div>
                            <div class="flex justify-between">
                                <span class="text-gray-600">Garansi:</span>
                                <span class="font-medium">Resmi 1 tahun</span>
                            </div>
                        </div>
                        <div class="flex items-end justify-between">
                            <div>
                                <p class="text-gray-500 text-sm">Mulai dari</p>
                                <p class="text-2xl font-bold text-primary">Rp 180.000<span class="text-sm font-normal text-gray-500">/hari</span></p>
                            </div>
                            <button class="bg-primary text-white px-4 py-2 rounded-lg hover:bg-blue-600 transition">
                                Sewa Sekarang
                            </button>
                        </div>
                    </div>
                </div>
    
                <!-- Device Card 6 -->
                <div class="device-card bg-white rounded-xl overflow-hidden shadow-md transition-all duration-300 border border-gray-100">
                    <div class="p-6">
                        <div class="flex justify-center mb-6">
                            <img src="https://images.unsplash.com/photo-1682686581220-689c34af002d?ixlib=rb-4.0.3&ixid=M3wxMjA3fDF8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=600&q=80" 
                                 alt="OnePlus 11" class="h-48 object-contain">
                        </div>
                        <h3 class="text-xl font-bold mb-2">OnePlus 11</h3>
                        <div class="flex items-center mb-3">
                            <div class="flex text-yellow-400 mr-2">
                                ★★★★☆
                            </div>
                            <span class="text-gray-600 text-sm">(12 review)</span>
                        </div>
                        <div class="space-y-2 mb-4">
                            <div class="flex justify-between">
                                <span class="text-gray-600">Kapasitas:</span>
                                <span class="font-medium">256GB</span>
                            </div>
                            <div class="flex justify-between">
                                <span class="text-gray-600">Kondisi:</span>
                                <span class="font-medium">Bekas</span>
                            </div>
                            <div class="flex justify-between">
                                <span class="text-gray-600">Garansi:</span>
                                <span class="font-medium">6 bulan</span>
                            </div>
                        </div>
                        <div class="flex items-end justify-between">
                            <div>
                                <p class="text-gray-500 text-sm">Mulai dari</p>
                                <p class="text-2xl font-bold text-primary">Rp 80.000<span class="text-sm font-normal text-gray-500">/hari</span></p>
                            </div>
                            <button class="bg-primary text-white px-4 py-2 rounded-lg hover:bg-blue-600 transition">
                                Sewa Sekarang
                            </button>
                        </div>
                    </div>
                </div>
            </div> --}}
    
            <!-- Pagination -->
            {{ $devices->links() }}
        </div>
    </section>
    
    <!-- CTA Section -->
    {{-- <section class="py-16 bg-gradient-to-r from-blue-500 to-indigo-600 text-white">
        <div class="container mx-auto px-4 text-center">
            <h2 class="text-3xl font-bold mb-4">Tertarik dengan layanan kami?</h2>
            <p class="text-xl text-blue-100 max-w-2xl mx-auto mb-8">Daftar sekarang dan dapatkan promo spesial untuk penyewa pertama!</p>
            <div class="flex justify-center space-x-4">
                <a href="/auth" class="bg-white text-primary px-6 py-3 rounded-lg font-medium hover:bg-gray-100 transition">
                    Daftar Sekarang
                </a>
                <a href="#" class="border-2 border-white text-white px-6 py-3 rounded-lg font-medium hover:bg-white hover:text-primary transition">
                    Hubungi Kami
                </a>
            </div>
        </div>
    </section> --}}

    <x-public_comp.footer/>
</x-public_comp.layout>
    <!-- Hero Section -->


    <script>
        // Simple mobile menu toggle
        document.querySelector('header button').addEventListener('click', function() {
            const nav = document.querySelector('nav');
            nav.classList.toggle('hidden');
            nav.classList.toggle('flex');
            nav.classList.toggle('flex-col');
            nav.classList.toggle('absolute');
            nav.classList.toggle('top-16');
            nav.classList.toggle('right-4');
            nav.classList.toggle('bg-white');
            nav.classList.toggle('p-4');
            nav.classList.toggle('shadow-lg');
            nav.classList.toggle('rounded-lg');
        });
    </script>
</body>
</html>