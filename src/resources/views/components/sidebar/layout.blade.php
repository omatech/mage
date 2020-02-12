<aside class="main-sidebar sidebar-dark-primary">
    <div class="sidebar-header">
        @include('mage::components.sidebar.logo')
        @include('mage::components.sidebar.profile')
    </div>
    <div class="sidebar">
        <div class="sidebar-wrapper">
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                @include('mage::components.sidebar.sections.main')
                @include('mage::components.sidebar.sections.extends.main')
                @include('mage::components.sidebar.sections.plugins')
                @can('mage-access-admin-zone', 'mage')
                @include('mage::components.sidebar.sections.administration')
                @include('mage::components.sidebar.sections.extends.administration')
                @include('mage::components.sidebar.sections.plugins-configuration')
                @endcan
            </ul>
        </nav>
        </div>
    </div>
</aside>
