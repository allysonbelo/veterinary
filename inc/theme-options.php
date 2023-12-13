<?php
// Função para adicionar uma página de opções no painel administrativo
function adicionar_pagina_opcoes()
{
    // Adiciona uma nova página no menu do painel de administração do WordPress
    add_menu_page(
        'Opções de Tema',             // O título da página que será exibido no cabeçalho
        'Veterinary Options',         // O texto do menu que aparecerá na barra lateral do admin
        'manage_options',             // A capacidade necessária para o usuário poder acessar esta página de menu
        'opcoes_tema',                // O slug (identificador) único da página do menu
        'pagina_opcoes_tema',         // O nome da função que irá renderizar a página do menu
        'dashicons-admin-customizer'  // O ícone que será exibido ao lado do texto do menu na barra lateral
    );
}
add_action('admin_menu', 'adicionar_pagina_opcoes');

// Função para exibir o conteúdo da página de opções de tema
function pagina_opcoes_tema()
{
?>
    <div class="wrap">
        <h2>Opções de Tema</h2>
        <form method="post" action="options.php">
            <?php
            settings_fields('opcoes_tema');
            do_settings_sections('opcoes_tema');
            submit_button();
            ?>
        </form>
    </div>
<?php
}

// Função para registrar configurações e campos de tema
function registrar_opcoes_tema()
{
    register_setting('opcoes_tema', 'tema_selecionado');
    add_settings_section('secao_temas', 'Escolha um Tema', 'secao_temas_callback', 'opcoes_tema');
    add_settings_field('tema_selecionado', 'Selecionar Tema', 'campo_tema_callback', 'opcoes_tema', 'secao_temas');
}
add_action('admin_init', 'registrar_opcoes_tema');

// Função de callback para a seção de temas
function secao_temas_callback()
{
    echo 'Escolha um tema para aplicar ao site:';
}

// Função de callback para o campo de tema
function campo_tema_callback()
{
    $tema_selecionado = get_option('tema_selecionado');
?>
    <select name="tema_selecionado">
        <option value="tema1" <?php selected($tema_selecionado, 'tema1'); ?>>Padrão</option>
        <option value="tema2" <?php selected($tema_selecionado, 'tema2'); ?>>Tema azul</option>
        <option value="tema3" <?php selected($tema_selecionado, 'tema3'); ?>>Tema verde</option>
    </select>
<?php
}

// Carregar folha de estilo com base no tema selecionado
function carregar_folha_estilo()
{
    $tema_selecionado = get_option('tema_selecionado', 'tema1');
    wp_enqueue_style('estilo_selecionado', get_template_directory_uri() . '/css/' . $tema_selecionado . '.css');
}
add_action('wp_enqueue_scripts', 'carregar_folha_estilo');
