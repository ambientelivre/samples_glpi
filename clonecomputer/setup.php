<? 
/**
 * Nome e Versão do Plugin
 */
function plugin_version_clonecomputer() {
   return array('name'           => "Clone Computer",
                'version'        => '1.0.0',
                'author'         => 'Davide Bizzarri',
                'license'        => 'GPLv2+',
                'homepage'       => '',
                'minGlpiVersion' => '0.85');
}

//  Verifica se config esta ok 
function plugin_clonecomputer_check_config() {
    return true;
}
 
// Verifica se prerequisitos são safisfatórios
function plugin_clonecomputer_check_prerequisites() {
 
    // Checa se versão esta compatível
    if (version_compare(GLPI_VERSION, '0.85', 'lt') || version_compare(GLPI_VERSION, '0.86', 'gt')) {
        echo "Este plugin requer GLPI >= 0.85 e GLPI <0.95";
        return false;
    }
 
    return true;
}
