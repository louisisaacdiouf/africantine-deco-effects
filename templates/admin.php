<div class="wrap">
    <h1>Deco Effects Manager</h1>
    <?php settings_errors(); ?>

    <ul class="nav nav-tabs">
        <li class="active"><a href="#tab-1">Manage Settings</a></li>
        <li><a href="#tab-2">Updates</a></li>
        <li><a href="#tab-3">About</a></li>
    </ul>

    <div class="tab-content">
        <div id="tab-1" class="tab-pane active">
            <form method="post" action="<?php echo esc_url(admin_url('admin-post.php')); ?>"
                enctype="multipart/form-data">
                <input type="hidden" name="action" value="save_particles" />
                <?php wp_nonce_field('save_particles_options'); ?>
                <?php
                settings_fields('deco_options_group');
                do_settings_sections('africantine-deco-effects');
                submit_button();
                ?>
            </form>

        </div>

        <div id="tab-2" class="tab-pane">
            <h3>Updates</h3>
        </div>

        <div id="tab-3" class="tab-pane">
            <h3>About</h3>
        </div>
    </div>
</div>