{{-- test --}}
<x-perfect-scrollbar as="nav" aria-label="main" class="flex flex-col flex-1 gap-4 px-3">

    <x-sidebar.link title="Dashboard" href="{{ route('dashboard') }}" :isActive="request()->routeIs('dashboard')">
        <x-slot name="icon">
            <x-icons.dashboard class="flex-shrink-0 w-6 h-6" aria-hidden="true" />
        </x-slot>
    </x-sidebar.link>

    <x-sidebar.link title="Costumer Problem" href="{{ route('costumer') }}" :isActive="request()->routeIs('costumer')">
        <x-slot name="icon">
            <x-css-danger class="flex-shrink-0 w-6 h-6" aria-hidden="true" />
        </x-slot>
    </x-sidebar.link>

    <!-- <x-sidebar.dropdown title="Check Sheet">
        <x-slot name="icon">
            <x-heroicon-o-view-grid class="flex-shrink-0 w-6 h-6" aria-hidden="true" />
        </x-slot>

        <x-sidebar.link title="Product" href="" :isActive="request()->routeIs('product.check')">
        </x-sidebar.link>

        <x-sidebar.link title="Project" href="" :isActive="request()->routeIs('project.check')">
        </x-sidebar.link>
    </x-sidebar.dropdown>

    <x-sidebar.dropdown title="Report">
        <x-slot name="icon">
            <x-heroicon-o-view-grid class="flex-shrink-0 w-6 h-6" aria-hidden="true" />
        </x-slot>

        <x-sidebar.link title="Product" href="" :isActive="request()->routeIs('product.report')">
        </x-sidebar.link>
        <x-sidebar.link title="Project" href="" :isActive="request()->routeIs('project.report')">
        </x-sidebar.link>
    </x-sidebar.dropdown>

    <x-sidebar.link title="History PICA Quality" href="" :isActive="request()->routeIs('pica.form')">
        <x-slot name="icon">
            <x-css-board class="flex-shrink-0 w-6 h-6" aria-hidden="true" />
        </x-slot>
    </x-sidebar.link>
    <x-sidebar.link title="History Problem Quality" href="" :isActive="request()->routeIs('problem.form')">
        <x-slot name="icon">
            <x-css-board class="flex-shrink-0 w-6 h-6" aria-hidden="true" />
        </x-slot>
    </x-sidebar.link>

    <x-sidebar.link title="Costumer Information Problem" href="" :isActive="request()->routeIs('problem.form')">
        <x-slot name="icon">
            <x-css-danger class="flex-shrink-0 w-6 h-6" aria-hidden="true" />
        </x-slot>
    </x-sidebar.link> -->
</x-perfect-scrollbar>
