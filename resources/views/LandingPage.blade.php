<x-public_comp.layout>
    <x-public_comp.navbar />
    {{-- @dd(session()->has("user_signup")) --}}
    <main class="main-content">
        <x-public_comp.hero />
        
        <x-public_comp.devices />
        
        <x-public_comp.about />
        
        <x-public_comp.testimonials />
        
        <x-public_comp.contact />
    </main>
    
    <x-public_comp.footer />
</x-public_comp.layout>