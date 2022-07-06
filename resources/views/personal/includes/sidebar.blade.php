        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Brand Logo -->

            <!-- Sidebar -->
            <div class="sidebar">

                <ul class="pt-3 nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                    <!-- Add icons to the links using the .nav-icon class
with font-awesome or any other icon font library -->

                    <li class="nav-item">
                        <a href="{{ route('personal.main.index') }}" class="nav-link">
                            <i class="nav-icon fas fa-home"></i>
                            <p>
                                Админка
                            </p>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a href="{{ route('personal.liked.index') }}" class="nav-link">
                            <i class="nav-icon far fa-heart"></i>
                            <p>
                                Понравившиеся статьи
                            </p>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a href="{{ route('personal.comment.index') }}" class="nav-link">
                            <i class="nav-icon far fa-comment"></i>
                            <p>
                                Комментарии
                            </p>
                        </a>
                    </li>

                </ul>
            </div>
            <!-- /.sidebar -->
        </aside>
