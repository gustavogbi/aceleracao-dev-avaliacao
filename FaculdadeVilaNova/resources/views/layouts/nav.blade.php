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
              <a href="#" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                Alunos
                <span class="badge badge-info right">0</span>
              </p>
            </a>
              </li>
            <li class="nav-item">
              <a href="#" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
               Plano financeiro
                <span class="badge badge-info right">0</span>
              </p>
            </a>
              </li>
            <li class="nav-item">
              <a href="#" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
               Professores
                <span class="badge badge-info right">0</span>
              </p>
            </a>
              </li>
            <li class="nav-item">
              <a href="#" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
               Aulas
                <span class="badge badge-info right">0</span>
              </p>
            </a>
              </li>
              @if(\Auth::user()->company_id == 0)
            <li class="nav-item ">
              <a  class="nav-link" data-bs-toggle="modal" data-bs-target="#companycreate">
              <i class="nav-icon fas fa-copy"></i>
              <p class="text-warning">
                Cadastrar minha empresa
              </p>
            </a>
              </li>
              @endif
            </ul>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->