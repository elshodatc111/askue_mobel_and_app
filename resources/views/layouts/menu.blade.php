<div id="sidebar">
    <div class="sidebar-wrapper active">
        <div class="sidebar-header position-relative">
            <div class="d-flex justify-content-between align-items-center">
                <div class="logo text-center">
                    <a href="">ASKUE</a>
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
                <li class="sidebar-item {{ request()->routeIs('dashboard') ? 'active' : '' }}">
                    <a href="" class="sidebar-link">
                        <i class="bi bi-speedometer2"></i> <span>Dashboard</span>
                    </a>
                </li>
                <li class="sidebar-item {{ request()->routeIs([
                    'child','child_debit','child_end','child_show','child_show_group','child_show_davomad'
                ]) ? 'active' : '' }}">
                    <a href="" class="sidebar-link">
                        <i class="bi bi-emoji-smile-fill"></i> <span>Bolalar</span>
                    </a>
                </li>
                <li class="sidebar-item {{ request()->routeIs([
                    'child_vakancy','child_vakancy_show','child_vakancy_create'
                ]) ? 'active' : '' }}">
                    <a href="" class="sidebar-link">
                        <i class="bi bi-door-open-fill"></i> <span>Tashriflar</span>
                    </a>
                </li>
                <li class="sidebar-item {{ request()->routeIs([
                    'groups','groups_arxiv','groups_show_child','child_show_darslar','groups_show_child_update','groups_show_davomad','groups_new','groups_show'
                ]) ? 'active' : '' }}">
                    <a href="" class="sidebar-link">
                        <i class="bi bi-diagram-3-fill"></i> <span>Guruhlar</span>
                    </a>
                </li>

                <li class="sidebar-item {{ request()->routeIs('profile') ? 'active' : '' }}">
                    <a href="" class="sidebar-link">
                        <i class="bi bi-person-circle"></i> <span>Profil</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a href=""
                    onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
                    class="sidebar-link text-danger">
                        <i class="bi bi-box-arrow-right"></i> <span>Chiqish</span>
                    </a>
                    <form id="logout-form" action="" method="POST" class="d-none">
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
