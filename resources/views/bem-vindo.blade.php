<h2>Rota RAIZ (view bem-vindo.blade.php) definida como o Site Inicial do sistema - Controle de Tarefas -</h2>
<p>(uma boa prática de segurança é não ter o Login como Página Inicial)</p>
<a href="{{route('tarefa.index')}}" class="mr-3" style="color: #F00"><b>Entrar no Controle de Tarefas</b></a>
<br>

<h3>Descrição funcional da aplicação</h3>
<li>Controle de Login Laravel - UI</li>
<li>CRUD - Controle de tarefas - por Usuário</li>
<li>Geração de E-MAIL automático nas criações das tarefas</li>
<li>Sobreposição do Método Padrão/Personalização Email-Reset de Senha</li>
<li>Sobreposição do Método Padrão/Personalização Email- (Markdown Mailables)</li>
<li>Sobreposição do Método Padrão/Personalização Email-Confirmação Novo Usuário (MystVerifyEmail)</li>
<li>Navegação das funções Controle Tarefas protegida pelo classe AUTH, via CONTROLLER</li>
<li>Exportação XLSX</li>
<li>Exportação CSV</li>
<li>Exportação PDF</li>
<li>Exportação DOMPDF</li>
<li>Configuração para aceitar caracteres acentuados</li>
<h3>Teste de Validação recurso AUTH(manter-me conectado acionado) ou GUEST(como visistante)</h3>

@auth
    <p>Há um usuário autenticado</p>
    <li>ID {{ Auth::user()->id }}</li>
    <li>Nome {{ Auth::user()->name }}</li>
    <li>Email {{ Auth::user()->email }}</li>

@endauth

@guest
    <p>Nenhum usuário autenticado, ao entrar no Controle de Tarefas será solicitado LOGIN</p>
@endguest