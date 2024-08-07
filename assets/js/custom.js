jQuery(document).ready(function ($) {
    // Function for the first type of repeatable control
    function updateRepeatableValue(control) {
        var values = [];
        control.find('.repeatable-item .repeatable-input').each(function () {
            values.push($(this).val());
        });
        control.find('.repeatable-value').val(JSON.stringify(values)).trigger('change');
    }

    $('.customize-control-repeatable').on('click', '.add-repeatable', function () {
        var control = $(this).closest('.customize-control-repeatable');
        var newItem = $('<li class="repeatable-item"><input type="text" class="repeatable-input" /><button type="button" class="button remove-repeatable">Remove</button></li>');
        control.find('.repeatable-list').append(newItem);
        updateRepeatableValue(control);
    });

    $('.customize-control-repeatable').on('click', '.remove-repeatable', function () {
        var control = $(this).closest('.customize-control-repeatable');
        $(this).closest('.repeatable-item').remove();
        updateRepeatableValue(control);
    });

    $('.customize-control-repeatable').on('change', '.repeatable-input', function () {
        var control = $(this).closest('.customize-control-repeatable');
        updateRepeatableValue(control);
    });

    // Function for the second type of repeatable control with title and description
    function updateRepeatableValue(control) {
        var values = [];
        control.find('.repeatable-item').each(function () {
            var title = $(this).find('.repeatable-input-title').val();
            var description = $(this).find('.repeatable-textarea').val();
            values.push({
                title: title,
                description: description
            });
        });
        control.find('.repeatable-value').val(JSON.stringify(values)).trigger('change');
    }

    $('.customize-control-repeatable_text').on('click', '.add-repeatable', function () {
        var control = $(this).closest('.customize-control-repeatable_text');
        var newItem = $('<li class="repeatable-item"><input type="text" class="repeatable-input-title" placeholder="Title" /><textarea class="repeatable-textarea" placeholder="Description"></textarea><button type="button" class="button remove-repeatable">Remove</button></li>');
        control.find('.repeatable-list').append(newItem);
        updateRepeatableValue(control);
    });

    $('.customize-control-repeatable_text').on('click', '.remove-repeatable', function () {
        var control = $(this).closest('.customize-control-repeatable_text');
        $(this).closest('.repeatable-item').remove();
        updateRepeatableValue(control);
    });

    $('.customize-control-repeatable_text').on('change', '.repeatable-input-title, .repeatable-textarea', function () {
        var control = $(this).closest('.customize-control-repeatable_text');
        updateRepeatableValue(control);
    });
});
