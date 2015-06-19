/**
 * Bootstrap Tooltips
 */
$(function () {
    $('[data-toggle="tooltip"]').tooltip()
});

/**
 * Auto show Select2 dropdown when typing.
 * https://github.com/select2/select2/issues/3053
 * https://gist.github.com/tuurbo/ab2c7c5ab765725e0402
 * http://stackoverflow.com/a/5630990/599477
 */
$('body').on('keyup', '.select2', function (e) {
    // ignore keys
    if (e.keyCode == 9  // tab
        || e.keyCode == 13 // enter
        || e.keyCode == 27 // esc
        || e.keyCode == 16 // shift
    ) {
        return;
    }

    // get the key
    var character = String.fromCharCode(e.keyCode - 48);

    // open select2 dropdown
    $(this).data('element').select2('open');

    // start searching if alphanumeric and search field is not hidden
    var $searchField = $('.select2-search__field');
    if (/[a-zA-Z0-9]/.test(character) && !$searchField.closest('.select2-search--hide').length) {
        $searchField.val(character).trigger('keyup');
    }
});
