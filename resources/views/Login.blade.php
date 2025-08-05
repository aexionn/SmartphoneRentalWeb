<x-login_comp.layout>
    <x-login_comp.left_panel />
    @props(['active' => "{activeTab:'register'}"])
    <x-login_comp.right_panel :active="$active"/>
</x-login_comp.layout>