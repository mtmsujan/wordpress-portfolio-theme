jQuery(document).ready(function($) {
    $('#upload_image_button').click(function(e) {
        e.preventDefault();

        var imageUploader = wp.media({
            title: 'Upload Images',
            button: {
                text: 'Select Images'
            },
            multiple: true // Allow multiple images to be selected
        })
        .on('select', function() {
            var attachments = imageUploader.state().get('selection').toJSON();
            var imageUrls = [];
            var imagePreview = $('#image_preview');
            var currentUrls = $('#project_gallery').val();

            if (currentUrls) {
                imageUrls = currentUrls.split(',');
            }

            $.each(attachments, function(index, attachment) {
                imageUrls.push(attachment.url);
                imagePreview.append('<div class="gallery-item"><img src="' + attachment.url + '" style="max-width: 100px; height: auto;" /><button type="button" class="remove-image-button"><i class="fa fa-close"></i></button></div>');
            });

            $('#project_gallery').val(imageUrls.join(','));
        })
        .open();
    });

    // Delegate click event for dynamically added remove buttons
    $('#image_preview').on('click', '.remove-image-button', function() {
        var imageUrl = $(this).siblings('img').attr('src');
        var imageUrls = $('#project_gallery').val().split(',');
        var newImageUrls = imageUrls.filter(function(url) {
            return url !== imageUrl;
        });

        $('#project_gallery').val(newImageUrls.join(','));
        $(this).parent('.gallery-item').remove();
    });
});
