<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="#" class="brand-link">
        <img src="{{ url('vendor/mage/img/wizard.svg') }}" alt="Mage Logo" class="brand-image img-circle elevation-3"
             style="opacity: .8">
        <span class="brand-text font-weight-light">Mage</span>
    </a>
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
