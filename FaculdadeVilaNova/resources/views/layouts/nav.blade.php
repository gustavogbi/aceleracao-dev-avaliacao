<!-- Sidebar Menu -->
<nav class="mt-2">
    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
        <li class="nav-item has-treeview menu-open">
            <a href="#" class="nav-link active">
                <i class="nav-icon fas fa-tachometer-alt"></i>
                <p>
                    Principal
                    <i class="right fas fa-angle-left"></i>
                </p>
            </a>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="{{ route('cursos.index') }}"
                        class="nav-link {{ request()->is('cursos*') ? 'active' : '' }}">
                        <i class="nav-icon 	fas fa-laptop-code"></i>
                        <p>
                            Cursos<span class="badge badge-info right">
                                @php
                                    echo DB::table('cursos')
                                        ->select('id')
                                        ->count();
                                @endphp
                            </span>
                        </p>
                    </a>
                <li class="nav-item">
                    <a href="{{ route('alunos.index') }}"
                        class="nav-link {{ request()->is('alunos*') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-user-graduate"></i>
                        <p>
                            Alunos
                            <span class="badge badge-info right">
                                @php
                                    echo DB::table('alunos')
                                        ->select('id')
                                        ->count();
                                @endphp
                            </span>
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('planos-financeiros.index') }}"
                        class="nav-link {{ request()->is('planos-financeiros*') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-money-bill-wave"></i>
                        <p>Plano Financeiro
                            <span class="badge badge-info right">
                                @php
                                    echo DB::table('planos_financeiros')
                                        ->select('id')
                                        ->count();
                                @endphp
                            </span>
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('professores.index') }}"
                        class="nav-link {{ request()->is('professores*') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-chalkboard-teacher"></i>
                        <p>
                            Professores
                            <span class="badge badge-info right">
                                @php
                                    echo DB::table('professores')
                                        ->select('id')
                                        ->count();
                                @endphp
                            </span>
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="" class="nav-link">
                        <i class="nav-icon fas fa-book-open"></i>
                        <p>
                            Aulas
                            <span class="badge badge-info right">
                                <span class="badge badge-info right">

                                </span>
                            </span>
                        </p>
                    </a>
                </li>
            </ul>
        </li>

        <li class="nav-item has-treeview  ">
            <a href="#" class="nav-link bg-warning">
                <i class="nav-icon fas fa-user-secret"></i>
                <p>
                    API
                    <i class="right fas fa-angle-left"></i>
                </p>
            </a>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="/api/cursos"
                        class="nav-link ">
                        <i class="nav-icon 	fas fa-laptop-code"></i>
                        <p>
                            Cursos<span class="badge badge-info right">
                                @php
                                    echo DB::table('cursos')
                                        ->select('id')
                                        ->count();
                                @endphp
                            </span>
                        </p>
                    </a>
                <li class="nav-item">
                    <a href="/api/alunos"
                        class="nav-link ">
                        <i class="nav-icon fas fa-user-graduate"></i>
                        <p>
                            Alunos
                            <span class="badge badge-info right">
                                @php
                                    echo DB::table('alunos')
                                        ->select('id')
                                        ->count();
                                @endphp
                            </span>
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="/api/planos-financeiros"
                        class="nav-link ">
                        <i class="nav-icon fas fa-money-bill-wave"></i>
                        <p>Plano Financeiro
                            <span class="badge badge-info right">
                                @php
                                    echo DB::table('planos_financeiros')
                                        ->select('id')
                                        ->count();
                                @endphp
                            </span>
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="/api/professores"
                        class="nav-link">
                        <i class="nav-icon fas fa-chalkboard-teacher"></i>
                        <p>
                            Professores
                            <span class="badge badge-info right">
                                @php
                                    echo DB::table('professores')
                                        ->select('id')
                                        ->count();
                                @endphp
                            </span>
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="" class="nav-link">
                        <i class="nav-icon fas fa-book-open"></i>
                        <p>
                            Aulas
                            <span class="badge badge-info right">
                                <span class="badge badge-info right">

                                </span>
                            </span>
                        </p>
                    </a>
                </li>
            </ul>
        </li>
    </ul>
</nav>
<!-- /.sidebar-menu -->
