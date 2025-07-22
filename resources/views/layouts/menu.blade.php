<div id="sidebar">
    <div class="sidebar-wrapper active">
        <div class="sidebar-header position-relative">
            <div class="d-flex justify-content-between align-items-center">
                <div class="logo text-center">
                    <a href="{{ route('home') }}">WaterGO</a>
                </div>
                <div class="theme-toggle d-flex gap-2  align-items-center mt-2">
                    <div class="form-check form-switch fs-6">
                        <input class="form-check-input  me-0" type="checkbox" id="toggle-dark" style="cursor: pointer">
                        <label class="form-check-label"></label>
                    </div>
                </div>
                <div class="sidebar-toggler  x">
                    <a href="#" class="sidebar-hide d-xl-none d-block"><i class="bi bi-x bi-middle"></i></a>
                </div>
            </div>
        </div>
        <div class="sidebar-menu">
            <ul class="menu list-unstyled">
                <li class="sidebar-item {{ request()->routeIs('home') ? 'active' : '' }}">
                    <a href="{{ route('home') }}" class="sidebar-link">
                        <i class="bi bi-speedometer2"></i> <span>Dashboard</span>
                    </a>
                </li>
                

                



                <li class="sidebar-item {{ request()->routeIs('profile') ? 'active' : '' }}">
                    <a href="" class="sidebar-link">
                        <i class="bi bi-person-circle"></i> <span>Profil</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a href="{{ route('logout') }}"
                    onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
                    class="sidebar-link text-danger">
                        <i class="bi bi-box-arrow-right"></i> <span>Chiqish</span>
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </li>
            </ul>
        </div>
    </div>
</div>

<style>
    .sidebar-link {
        display: flex;
        align-items: center;
        gap: 8px;
        padding: 10px 15px;
        border-radius: 10px;
        color: #333;
        transition: all 0.2s ease-in-out;
    }

    .sidebar-link:hover {
        background-color: #f1f1f1;
        color: #0d6efd;
    }

    .sidebar-item.active .sidebar-link {
        background-color: #0d6efd;
        color: #fff;
    }

    .sidebar-link i {
        font-size: 1.2rem;
    }

    .sidebar-link span {
        font-weight: 500;
        font-size: 15px;
    }
</style>
