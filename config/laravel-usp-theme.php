<?php

$submenu1 = [
    [
        'type' => 'header',
        'text' => '<i class="far fa-bookmark"></i> Categoria',
    ],
    [
        'text' => '<i class="fas fa-plus-circle"></i> Cadastrar Categoria',
        'url' => config('app.url') . '/subitem3',
    ],
    [
        'text' => '<i class="fas fa-list-ul"></i> Listar Categorias',
        'url' => config('app.url') . '/subitem3',
    ],
    [
        'type' => 'divider',
    ],
    [
        'type' => 'header',
        'text' => '<i class="fas fa-boxes"></i> Material',
    ],
    [
        'text' => '<i class="fas fa-plus-circle"></i> Cadastrar Material',
        'url' => config('app.url') . '/subitem3',
    ],
    [
        'text' => '<i class="fas fa-list-ul"></i> Listar Material',
        'url' => config('app.url') . '/subitem3',
    ],
    [
        'type' => 'divider',
    ],
    [
        'type' => 'header',
        'text' => '<i class="fas fa-eye"></i> Visitantes',
    ],
    [
        'text' => '<i class="fas fa-plus-circle"></i> Cadastrar Visitante',
        'url' => config('app.url') . '/subitem3',
    ],
    [
        'text' => '<i class="fas fa-list-ul"></i> Listar Visitantes',
        'url' => config('app.url') . '/subitem3',
    ],
];

$submenu2 = [
    [
        'text' => '<i class="fas fa-undo-alt"></i> Devolução',
        'url' => config('app.url') . '/subitem2',
    ],
    [
        'text' => '<i class="fas fa-handshake"></i> Empréstimos USP',
        'url' => config('app.url') . '/subitem1',
    ],
    [
        'text' => '<i class="far fa-handshake"></i> Empréstimos Visitantes',
        'url' => config('app.url') . '/subitem2',
    ],
    [
        'text' => '<i class="fas fa-stream"></i> Itens Emprestados',
        'url' => config('app.url') . '/subitem2',
    ],
    [
        'text' => '<i class="fas fa-chart-bar"></i> Relatório de Empréstimos',
        'url' => config('app.url') . '/subitem2',
    ],

];
$menu = [
    [
        'text' => '<i class="fas fa-user-cog"></i> Administração',
        'submenu' => $submenu1,
    ],
    [
        'text' => '<i class="fas fa-retweet"></i> Empréstimos/Devolução',
        'submenu' => $submenu2,
    ],
];

$right_menu = [
    [
        'text' => '<i class="fas fa-cog"></i>',
        'title' => 'Configurações',
        'target' => '_blank',
        'url' => config('app.url') . '/item1',
        'align' => 'right',
    ],
];

# dashboard_url renomeado para app_url
# USPTHEME_SKIN deve ser colocado no .env da aplicação 

return [
    'title' => config('app.name'),
    'skin' => env('USP_THEME_SKIN', 'uspdev'),
    'app_url' => config('app.url'),
    'logout_method' => 'POST',
    'logout_url' => config('app.url') . '/logout',
    'login_url' => config('app.url') . '/login',
    'menu' => $menu,
    'right_menu' => $right_menu,
];
