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
              <a href="/users/{{Auth::user()->id}}/edit" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                Cursos
              </p>
            </a>
            <li class="nav-item">
              <a href="/alunos" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                Alunos
                <span class="badge badge-info right">0</span>
              </p>
            </a>
              </li>
            <li class="nav-item">
              <a href="{{ route('planos-financeiros.index') }}" class="nav-link">
              <i class="nav-icon fas fa-money-bill-wave"></i>
              <p>Plano Financeiro
                <!-- <span class="badge badge-info right">0</span> -->
              </p>
            </a>
              </li>
            <li class="nav-item">
              <a href="{{route('professor.index')}}" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
               Professores
                <span class="badge badge-info right">
                  @php
                    echo DB::table("professores")->select("id")->count();    
                  @endphp
                </span>
              </p>
            </a>
              </li>
            <li class="nav-item">
              <a href="" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
               Aulas
                <span class="badge badge-info right">0</span>
              </p>
            </a>
              </li>
            </ul>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->