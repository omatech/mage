<aside class="main-sidebar sidebar-dark-primary elevation-5">
    
    @include('mage::components.sidebar.logo')

    <div class="sidebar">
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                @include('mage::components.sidebar.sections.main')
                @include('mage::components.sidebar.sections.extends.main')
                @include('mage::components.sidebar.sections.administration')
                @include('mage::components.sidebar.sections.extends.administration')
            </ul>
        </nav>
    </div>
</aside>
