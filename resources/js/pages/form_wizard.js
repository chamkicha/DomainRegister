'use strict';
// bootstrap wizard//

$('#commentForm').bootstrapValidator({
    fields: {
        domain_name: {
            validators: {
                notEmpty: {
                    message: 'The Domain name is required',
                },
            },
            required: true,
        },
    },
});

$('#rootwizard').bootstrapWizard({
    tabClass: 'nav nav-pills',
    onNext: function(tab, navigation, index) {
        var $validator = $('#commentForm')
            .data('bootstrapValidator')
            .validate();
        return $validator.isValid();
    },
    onTabClick: function(tab, navigation, index) {
        return false;
    },
    onTabShow: function(tab, navigation, index) {
        var $total = navigation.find('li').length;
        var $current = index + 1;
        //var $percent = ($current / $total) * 100;

        // If it's the last tab then hide the last button and show the finish instead
        if ($current >= $total) {
            $('#rootwizard')
                .find('.pager .next')
                .hide();
            $('#rootwizard')
                .find('.pager .finish')
                .show();
            $('#rootwizard')
                .find('.pager .finish')
                .removeClass('disabled');
        } else {
            $('#rootwizard')
                .find('.pager .next')
                .show();
            $('#rootwizard')
                .find('.pager .finish')
                .hide();
        }
    },
});

$('#rootwizard .finish').click(function() {
    var $validator = $('#commentForm')
        .data('bootstrapValidator')
        .validate();
    if ($validator.isValid()) {
        document.getElementById('commentForm').submit();
    }
});
$('#activate').on('ifChanged', function(event) {
    $('#commentForm').bootstrapValidator('revalidateField', $('#activate'));
});
$('#commentForm').keypress(function(event) {
    if (event.which == '13') {
        event.preventDefault();
    }
});
