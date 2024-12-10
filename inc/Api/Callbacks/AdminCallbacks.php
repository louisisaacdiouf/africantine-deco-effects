<?php
/**
 * @package AfricantineDecoEffects
 */
namespace Inc\Api\Callbacks;

use Inc\Base\BaseController;

class AdminCallbacks extends BaseController
{
    public function adminDashboard()
    {
        return require_once "$this->plugin_path/templates/admin.php";
    }

    public function decoOptionsGroup($input)
    {
        return $input;
    }

    public function decoAdminSection()
    {
        echo 'Check this section';
    }

    public function setDensity()
    {
        $value = esc_attr(get_option('density'));
        echo '<input type="number" min="0" max="10" step="1" class="density" name="density" value="' . $value . '" placeholder="Ex: 3">';
    }

    public function setParticles()
    {
        // Récupérer la valeur actuelle de l'option
        $value = get_option('particles');

        // Champ d'upload de fichier
        echo '<label for="particles">Upload SVG File:</label>';
        echo '<input type="file" id="particles" name="particles_file" accept=".svg" />';

        // Affichage du fichier actuel si défini
        if (!empty($value)) {
            echo '<p>Current File: <a href="' . esc_url($value) . '" target="_blank">' . basename($value) . '</a></p>';
        }
    }

}