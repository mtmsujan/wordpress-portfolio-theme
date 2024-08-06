jQuery(document).ready(function($){
    var frame;
    $('#upload_image_button').on('click', function(e) {
        e.preventDefault();
        if (frame) {
            frame.open();
            return;
        }
        frame = wp.media({
            title: 'Select or Upload Images',
            button: {
                text: 'Use this image'
            },
            multiple: true
        });

        frame.on('select', function() {
            var attachment = frame.state().get('selection').toJSON();
            var imageUrls = [];
            var imagePreviewHtml = '';

            attachment.forEach(function(image) {
                imageUrls.push(image.url);
                imagePreviewHtml += '<div class="gallery-item"><img src="' + image.url + '" style="max-width: 100px; height: auto;" /><button type="button" class="remove-image-button"><i class="fa fa-close"></i></button></div>';
            });

            $('#project_gallery').val(imageUrls.join(','));
            $('#image_preview').html(imagePreviewHtml);
        });

        frame.open();
    });

    $('#image_preview').on('click', '.remove-image-button', function() {
        var index = $(this).parent().index();
        var galleryImages = $('#project_gallery').val().split(',');
        galleryImages.splice(index, 1);
        $('#project_gallery').val(galleryImages.join(','));
        $(this).parent().remove();
    });
});
