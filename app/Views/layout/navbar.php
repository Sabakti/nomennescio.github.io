<nav class="navbar navbar-expand px-4 py-3">
    <form action="#" class="d-none d-sm-inline-block">

    </form>
    <div class="navbar-collapse collapse">
        <ul class="navbar-nav ms-auto">
            <li class="nav-item dropdown">
                <a href="#" data-bs-toggle="dropdown" class="nav-icon pe-md-0">
                    <img src="/image/ota.png" class="avatar img-fluid" alt="">
                    <?php if (isset($username)) : ?>
                        <span><?= esc($username); ?></span>
                    <?php endif; ?>
                </a>

                <!-- <div class="dropdown-menu dropdown-menu-end rounded">

                </div> -->
            </li>
        </ul>
    </div>
</nav>