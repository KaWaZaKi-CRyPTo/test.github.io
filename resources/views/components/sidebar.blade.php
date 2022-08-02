<nav class="md:left-0 md:block md:fixed md:top-0 md:bottom-0 md:overflow-y-auto md:flex-row md:flex-nowrap md:overflow-hidden shadow-xl bg-white flex flex-wrap items-center justify-between relative md:w-64 z-10 py-4 px-6">
    <div class="md:flex-col md:items-stretch md:min-h-full md:flex-nowrap px-0 flex flex-wrap items-center justify-between w-full mx-auto">
        <button class="cursor-pointer text-black opacity-50 md:hidden px-3 py-1 text-xl leading-none bg-transparent rounded border border-solid border-transparent" type="button" onclick="toggleNavbar('example-collapse-sidebar')">
            <i class="fas fa-bars"></i>
        </button>
        <a class=" md:block text-center  md:pb-2 items-center text-orange-500 mr-0 inline-block whitespace-nowrap text-sm uppercase font-bold p-1 px-0" href="{{ route('admin.home') }}">
            <img  class="md:w-12/12 p-0 mx-auto" src="{{ asset('images/sonef.png')}}" alt="echkili_logo">
            <span class=" ">Managment System</span>
            {{-- <span>{{ trans('panel.site_title') }}</span> --}}
        </a>
        <div class="md:flex md:flex-col md:items-stretch md:opacity-100 md:relative md:mt-4 md:shadow-none shadow absolute top-0 left-0 right-0 z-40 overflow-y-auto overflow-x-hidden h-auto items-center flex-1 rounded hidden" id="example-collapse-sidebar">
            <div class="md:min-w-full md:hidden block pb-4 mb-4 border-b border-solid border-blueGray-300">
                <div class="flex flex-wrap">
                    <div class="w-6/12">
                        <a class="md:block text-left md:pb-2 text-blueGray-700 mr-0 inline-block whitespace-nowrap text-sm uppercase font-bold p-4 px-0" href="{{ route('admin.home') }}">
                            {{ trans('panel.site_title') }}
                        </a>
                    </div>
                    <div class="w-6/12 flex justify-end">
                        <button type="button" class="cursor-pointer text-black opacity-50 md:hidden px-3 py-1 text-xl leading-none bg-transparent rounded border border-solid border-transparent" onclick="toggleNavbar('example-collapse-sidebar')">
                            <i class="fas fa-times"></i>
                        </button>
                    </div>
                </div>
            </div>

            <form class="mt-6 mb-4 md:hidden">
                <div class="mb-3 pt-0">
                    @livewire('global-search')
                </div>
            </form>

            <!-- Divider -->
            <div class="flex md:hidden">
                @if(file_exists(app_path('Http/Livewire/LanguageSwitcher.php')))
                    <livewire:language-switcher />
                @endif
            </div>
            <hr class="mb-6 md:min-w-full" />
            <!-- Heading -->

            <ul class="md:flex-col md:min-w-full flex flex-col list-none">
                <li class="items-center">
                    <a href="{{ route("admin.home") }}" class="{{ request()->is("admin") ? "sidebar-nav-active" : "sidebar-nav" }}">
                        <i class="fas fa-tv"></i>
                        {{ trans('global.dashboard') }}
                    </a>
                </li>

                @can('stock_access')
                    <li class="items-center">
                        <a class="has-sub {{ request()->is("admin/prodouits*")||request()->is("admin/fourniseurs*")||request()->is("admin/entry-tickets*")||request()->is("admin/exit-tickets*")||request()->is("admin/inventories*")||request()->is("admin/stock-warehouses*") ? "sidebar-nav-active" : "sidebar-nav" }}" href="#" onclick="window.openSubNav(this)">
                            <i class="fa-fw fas c-sidebar-nav-icon fa-archive">
                            </i>
                            {{ trans('cruds.stock.title') }}
                        </a>
                        <ul class="ml-4 subnav hidden">
                            @can('prodouit_access')
                                <li class="items-center">
                                    <a class="{{ request()->is("admin/prodouits*") ? "sidebar-nav-active" : "sidebar-nav" }}" href="{{ route("admin.prodouits.index") }}">
                                        <i class="fa-fw c-sidebar-nav-icon fas fa-box">
                                        </i>
                                        {{ trans('cruds.prodouit.title') }}
                                    </a>
                                </li>
                            @endcan
                            @can('fourniseur_access')
                                <li class="items-center">
                                    <a class="{{ request()->is("admin/fourniseurs*") ? "sidebar-nav-active" : "sidebar-nav" }}" href="{{ route("admin.fourniseurs.index") }}">
                                        <i class="fa-fw c-sidebar-nav-icon fas fa-user-tag">
                                        </i>
                                        {{ trans('cruds.fourniseur.title') }}
                                    </a>
                                </li>
                            @endcan
                            @can('entry_ticket_access')
                                <li class="items-center">
                                    <a class="{{ request()->is("admin/entry-tickets*") ? "sidebar-nav-active" : "sidebar-nav" }}" href="{{ route("admin.entry-tickets.index") }}">
                                        <i class="fa-fw c-sidebar-nav-icon fas fa-tag">
                                        </i>
                                        {{ trans('cruds.entryTicket.title') }}
                                    </a>
                                </li>
                            @endcan
                            @can('exit_ticket_access')
                                <li class="items-center">
                                    <a class="{{ request()->is("admin/exit-tickets*") ? "sidebar-nav-active" : "sidebar-nav" }}" href="{{ route("admin.exit-tickets.index") }}">
                                        <i class="fa-fw c-sidebar-nav-icon fas fa-sign-out-alt">
                                        </i>
                                        {{ trans('cruds.exitTicket.title') }}
                                    </a>
                                </li>
                            @endcan
                            @can('inventory_access')
                                <li class="items-center">
                                    <a class="{{ request()->is("admin/inventories*") ? "sidebar-nav-active" : "sidebar-nav" }}" href="{{ route("admin.inventories.index") }}">
                                        <i class="fa-fw c-sidebar-nav-icon fas fa-store-alt">
                                        </i>
                                        {{ trans('cruds.inventory.title') }}
                                    </a>
                                </li>
                            @endcan
                            @can('stock_warehouse_access')
                                <li class="items-center">
                                    <a class="{{ request()->is("admin/stock-warehouses*") ? "sidebar-nav-active" : "sidebar-nav" }}" href="{{ route("admin.stock-warehouses.index") }}">
                                        <i class="fa-fw c-sidebar-nav-icon fas fa-warehouse">
                                        </i>
                                        {{ trans('cruds.stockWarehouse.title') }}
                                    </a>
                                </li>
                            @endcan
                        </ul>
                    </li>
                @endcan
                @can('vidange_access')
                    <li class="items-center">
                        <a class="has-sub {{ request()->is("admin/oils*")||request()->is("admin/provenances*")||request()->is("admin/routes*")||request()->is("admin/vidange-controles*") ? "sidebar-nav-active" : "sidebar-nav" }}" href="#" onclick="window.openSubNav(this)">
                            <i class="fa-fw fas c-sidebar-nav-icon fa-fill-drip">
                            </i>
                            {{ trans('cruds.vidange.title') }}
                        </a>
                        <ul class="ml-4 subnav hidden">
                            @can('oil_access')
                                <li class="items-center">
                                    <a class="{{ request()->is("admin/oils*") ? "sidebar-nav-active" : "sidebar-nav" }}" href="{{ route("admin.oils.index") }}">
                                        <i class="fa-fw c-sidebar-nav-icon fas fa-tint">
                                        </i>
                                        {{ trans('cruds.oil.title') }}
                                    </a>
                                </li>
                            @endcan
                            @can('provenance_access')
                                <li class="items-center">
                                    <a class="{{ request()->is("admin/provenances*") ? "sidebar-nav-active" : "sidebar-nav" }}" href="{{ route("admin.provenances.index") }}">
                                        <i class="fa-fw c-sidebar-nav-icon fas fa-map-marked-alt">
                                        </i>
                                        {{ trans('cruds.provenance.title') }}
                                    </a>
                                </li>
                            @endcan
                            @can('route_access')
                                <li class="items-center">
                                    <a class="{{ request()->is("admin/routes*") ? "sidebar-nav-active" : "sidebar-nav" }}" href="{{ route("admin.routes.index") }}">
                                        <i class="fa-fw c-sidebar-nav-icon fas fa-map-marked">
                                        </i>
                                        {{ trans('cruds.route.title') }}
                                    </a>
                                </li>
                            @endcan
                            @can('vidange_controle_access')
                                <li class="items-center">
                                    <a class="{{ request()->is("admin/vidange-controles*") ? "sidebar-nav-active" : "sidebar-nav" }}" href="{{ route("admin.vidange-controles.index") }}">
                                        <i class="fa-fw c-sidebar-nav-icon fas fa-ambulance">
                                        </i>
                                        {{ trans('cruds.vidangeControle.title') }}
                                    </a>
                                </li>
                            @endcan
                        </ul>
                    </li>
                @endcan
                @can('parc_access')
                    <li class="items-center">
                        <a class="has-sub {{ request()->is("admin/buses*")||request()->is("admin/bus-parks*") ? "sidebar-nav-active" : "sidebar-nav" }}" href="#" onclick="window.openSubNav(this)">
                            <i class="fa-fw fas c-sidebar-nav-icon fa-bus-alt">
                            </i>
                            {{ trans('cruds.parc.title') }}
                        </a>
                        <ul class="ml-4 subnav hidden">
                            @can('bus_access')
                                <li class="items-center">
                                    <a class="{{ request()->is("admin/buses*") ? "sidebar-nav-active" : "sidebar-nav" }}" href="{{ route("admin.buses.index") }}">
                                        <i class="fa-fw c-sidebar-nav-icon fas fa-bus">
                                        </i>
                                        {{ trans('cruds.bus.title') }}
                                    </a>
                                </li>
                            @endcan
                            @can('bus_park_access')
                                <li class="items-center">
                                    <a class="{{ request()->is("admin/bus-parks*") ? "sidebar-nav-active" : "sidebar-nav" }}" href="{{ route("admin.bus-parks.index") }}">
                                        <i class="fa-fw c-sidebar-nav-icon fas fa-parking">
                                        </i>
                                        {{ trans('cruds.busPark.title') }}
                                    </a>
                                </li>
                            @endcan
                        </ul>
                    </li>
                @endcan
                @can('location_access')
                    <li class="items-center">
                        <a class="has-sub {{ request()->is("admin/countries*")||request()->is("admin/cities*") ? "sidebar-nav-active" : "sidebar-nav" }}" href="#" onclick="window.openSubNav(this)">
                            <i class="fa-fw fas c-sidebar-nav-icon fa-globe-americas">
                            </i>
                            {{ trans('cruds.location.title') }}
                        </a>
                        <ul class="ml-4 subnav hidden">
                            @can('country_access')
                                <li class="items-center">
                                    <a class="{{ request()->is("admin/countries*") ? "sidebar-nav-active" : "sidebar-nav" }}" href="{{ route("admin.countries.index") }}">
                                        <i class="fa-fw c-sidebar-nav-icon fas fa-flag-checkered">
                                        </i>
                                        {{ trans('cruds.country.title') }}
                                    </a>
                                </li>
                            @endcan
                            @can('city_access')
                                <li class="items-center">
                                    <a class="{{ request()->is("admin/cities*") ? "sidebar-nav-active" : "sidebar-nav" }}" href="{{ route("admin.cities.index") }}">
                                        <i class="fa-fw c-sidebar-nav-icon fas fa-parking">
                                        </i>
                                        {{ trans('cruds.city.title') }}
                                    </a>
                                </li>
                            @endcan
                        </ul>
                    </li>
                @endcan
                <hr class="my-4 md:min-w-full">
                @can('user_management_access')
                    <li class="items-center">
                        <a class="has-sub {{ request()->is("admin/permissions*")||request()->is("admin/roles*")||request()->is("admin/users*")||request()->is("admin/audit-logs*")||request()->is("admin/user-alerts*") ? "sidebar-nav-active" : "sidebar-nav" }}" href="#" onclick="window.openSubNav(this)">
                            <i class="fa-fw fas c-sidebar-nav-icon fa-users">
                            </i>
                            {{ trans('cruds.userManagement.title') }}
                        </a>
                        <ul class="ml-4 subnav hidden">
                            @can('permission_access')
                                <li class="items-center">
                                    <a class="{{ request()->is("admin/permissions*") ? "sidebar-nav-active" : "sidebar-nav" }}" href="{{ route("admin.permissions.index") }}">
                                        <i class="fa-fw c-sidebar-nav-icon fas fa-unlock-alt">
                                        </i>
                                        {{ trans('cruds.permission.title') }}
                                    </a>
                                </li>
                            @endcan
                            @can('role_access')
                                <li class="items-center">
                                    <a class="{{ request()->is("admin/roles*") ? "sidebar-nav-active" : "sidebar-nav" }}" href="{{ route("admin.roles.index") }}">
                                        <i class="fa-fw c-sidebar-nav-icon fas fa-briefcase">
                                        </i>
                                        {{ trans('cruds.role.title') }}
                                    </a>
                                </li>
                            @endcan
                            @can('user_access')
                                <li class="items-center">
                                    <a class="{{ request()->is("admin/users*") ? "sidebar-nav-active" : "sidebar-nav" }}" href="{{ route("admin.users.index") }}">
                                        <i class="fa-fw c-sidebar-nav-icon fas fa-user">
                                        </i>
                                        {{ trans('cruds.user.title') }}
                                    </a>
                                </li>
                            @endcan
                            @can('audit_log_access')
                                <li class="items-center">
                                    <a class="{{ request()->is("admin/audit-logs*") ? "sidebar-nav-active" : "sidebar-nav" }}" href="{{ route("admin.audit-logs.index") }}">
                                        <i class="fa-fw c-sidebar-nav-icon fas fa-file-alt">
                                        </i>
                                        {{ trans('cruds.auditLog.title') }}
                                    </a>
                                </li>
                            @endcan
                            @can('user_alert_access')
                                <li class="items-center">
                                    <a class="{{ request()->is("admin/user-alerts*") ? "sidebar-nav-active" : "sidebar-nav" }}" href="{{ route("admin.user-alerts.index") }}">
                                        <i class="fa-fw c-sidebar-nav-icon fas fa-bell">
                                        </i>
                                        {{ trans('cruds.userAlert.title') }}
                                    </a>
                                </li>
                            @endcan
                        </ul>
                    </li>
                @endcan
                @can('contact_management_access')
                    <li class="items-center">
                        <a class="has-sub {{ request()->is("admin/contact-companies*")||request()->is("admin/contact-contacts*") ? "sidebar-nav-active" : "sidebar-nav" }}" href="#" onclick="window.openSubNav(this)">
                            <i class="fa-fw fas c-sidebar-nav-icon fa-phone-square">
                            </i>
                            {{ trans('cruds.contactManagement.title') }}
                        </a>
                        <ul class="ml-4 subnav hidden">
                            @can('contact_company_access')
                                <li class="items-center">
                                    <a class="{{ request()->is("admin/contact-companies*") ? "sidebar-nav-active" : "sidebar-nav" }}" href="{{ route("admin.contact-companies.index") }}">
                                        <i class="fa-fw c-sidebar-nav-icon fas fa-building">
                                        </i>
                                        {{ trans('cruds.contactCompany.title') }}
                                    </a>
                                </li>
                            @endcan
                            @can('contact_contact_access')
                                <li class="items-center">
                                    <a class="{{ request()->is("admin/contact-contacts*") ? "sidebar-nav-active" : "sidebar-nav" }}" href="{{ route("admin.contact-contacts.index") }}">
                                        <i class="fa-fw c-sidebar-nav-icon fas fa-user-plus">
                                        </i>
                                        {{ trans('cruds.contactContact.title') }}
                                    </a>
                                </li>
                            @endcan
                        </ul>
                    </li>
                @endcan
                <hr class="my-4 md:min-w-full">
                <li class="items-center">
                    <a class="{{ request()->is("admin/messages*") ? "sidebar-nav-active" : "sidebar-nav" }}" href="{{ route("admin.messages.index") }}">
                        <i class="far fa-fw fa-envelope c-sidebar-nav-icon">
                        </i>
                        {{ __('global.messages') }}
                        @if($unreadConversations['all'])
                            <span class="text-xs bg-rose-500 text-white px-2 py-1 rounded-xl font-bold float-right">
                                {{ $unreadConversations['all'] }}
                            </span>
                        @endif
                    </a>
                </li>


                @if(file_exists(app_path('Http/Controllers/Auth/UserProfileController.php')))
                    @can('auth_profile_edit')
                        <li class="items-center">
                            <a href="{{ route("profile.show") }}" class="{{ request()->is("profile") ? "sidebar-nav-active" : "sidebar-nav" }}">
                                <i class="fa-fw c-sidebar-nav-icon fas fa-user-circle"></i>
                                {{ trans('global.my_profile') }}
                            </a>
                        </li>
                    @endcan
                @endif

                <li class="items-center">
                    <a href="#" onclick="event.preventDefault(); document.getElementById('logoutform').submit();" class="sidebar-nav">
                        <i class="fa-fw fas fa-sign-out-alt"></i>
                        {{ trans('global.logout') }}
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>