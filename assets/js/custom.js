jQuery(document).ready(function ($) {
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
});
