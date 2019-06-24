<div class="sidebar-profile">
    <div class="profile-wrap text-center">
        <div class="pad-btm">
            <img class="img-circle img-md" src="{{ url('vendor/mage/images/profile.png') }}" alt="Profile Picture">
        </div>
        <div class="box-block">
            <p class="user-name">{{ auth()->guard('mage')->user()->name }}</p>
            <span class="user-email">{{ auth()->guard('mage')->user()->email }}</span>
        </div>
    </div>
</div>