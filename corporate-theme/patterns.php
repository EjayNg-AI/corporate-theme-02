<?php
foreach ( glob( get_theme_file_path( 'patterns/*.php' ) ) as $file ) {
    register_block_pattern( 'corporate/' . basename( $file, '.php' ), require $file );
}
?>
