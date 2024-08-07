<?php 
// Add the meta box to the project post type
add_action( 'add_meta_boxes', 'add_project_metaboxes' );

// Function to add the metabox
function add_project_metaboxes() {
    add_meta_box(
        'project_details',
        'Project Details',
        'project_details_callback',
        'project', // Custom post type
        'normal',
        'high'
    );
}

// Metabox callback function
function project_details_callback( $post ) {
    wp_nonce_field( 'save_project_details', 'project_details_nonce' );

    $project_description = get_post_meta( $post->ID, '_project_description', true );
    $project_url = get_post_meta( $post->ID, '_project_url', true );
    $project_gallery = get_post_meta( $post->ID, '_project_gallery', true );

    ?>
    <div class="project-details">
        <div class="field-group">
            <label for="project_description">Description</label>
            <textarea id="project_description" name="project_description" rows="4" cols="50"><?php echo esc_textarea( $project_description ); ?></textarea>
        </div>
        <div class="field-group">
            <label for="project_url">Project URL</label>
            <input type="url" id="project_url" name="project_url" value="<?php echo esc_attr( $project_url ); ?>" size="25" />
        </div>
        <div class="field-group">
            <label for="project_gallery">Image Gallery</label>
            <input type="hidden" id="project_gallery" name="project_gallery" value="<?php echo esc_attr( $project_gallery ); ?>" />
            <button type="button" class="button button-secondary" id="upload_image_button">Upload Images</button>
            <div id="image_preview">
                <?php 
                if ( !empty( $project_gallery ) ) : 
                    $gallery_images = maybe_unserialize( $project_gallery );
                    if ( is_array( $gallery_images ) ) {
                        foreach ( $gallery_images as $image_url ) {
                            echo '<div class="gallery-item"><img src="' . esc_url( $image_url ) . '" style="max-width: 100px; height: auto;" /><button type="button" class="remove-image-button"><i class="fa fa-close"></i></button></div>';
                        }
                    }
                endif; 
                ?>
            </div>
        </div>
    </div>
    <?php
}

// Save the metabox data
add_action( 'save_post', 'save_project_details' );
function save_project_details( $post_id ) {
    if ( !isset( $_POST['project_details_nonce'] ) || !wp_verify_nonce( $_POST['project_details_nonce'], 'save_project_details' ) ) {
        return;
    }

    if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) {
        return;
    }

    if ( isset( $_POST['post_type'] ) && 'projects' === $_POST['post_type'] ) {
        if ( !current_user_can( 'edit_page', $post_id ) ) {
            return;
        }
    } else {
        if ( !current_user_can( 'edit_post', $post_id ) ) {
            return;
        }
    }

    if ( isset( $_POST['project_description'] ) ) {
        update_post_meta( $post_id, '_project_description', sanitize_textarea_field( $_POST['project_description'] ) );
    }

    if ( isset( $_POST['project_url'] ) ) {
        update_post_meta( $post_id, '_project_url', esc_url_raw( $_POST['project_url'] ) );
    }

    if ( isset( $_POST['project_gallery'] ) ) {
        $gallery_images = array_filter( array_map( 'esc_url_raw', explode( ',', $_POST['project_gallery'] ) ) );
        if ( !empty( $gallery_images ) ) {
            update_post_meta( $post_id, '_project_gallery', maybe_serialize( $gallery_images ) );
        } else {
            delete_post_meta( $post_id, '_project_gallery' );
        }
    }
}