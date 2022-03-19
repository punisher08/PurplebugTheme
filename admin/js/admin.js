jQuery(document).ready(function($){
    $('.purplebug_colorpicker').wpColorPicker();
    $('body').on('click', '.aw_upload_image_button', function(e){
        e.preventDefault();
        aw_uploader = wp.media({
            title: 'Custom image',
            button: {
                text: 'Use this image'
            },
            multiple: false
        }).on('select', function() {
            var attachment = aw_uploader.state().get('selection').first().toJSON();
            $('#aw_custom_image1').val(attachment.url);
        })
        .open();
    });

    $('body').on('click', '.aw_upload_image_button2', function(e){
        e.preventDefault();
        aw_uploader = wp.media({
            title: 'Custom image2',
            button: {
                text: 'Use this image'
            },
            multiple: false
        }).on('select', function() {
            var attachment = aw_uploader.state().get('selection').first().toJSON();
            $('#aw_custom_image2').val(attachment.url);
        })
        .open();
    });

    $('body').on('click', '.aw_upload_image_button3', function(e){
        e.preventDefault();
        aw_uploader = wp.media({
            title: 'Custom image3',
            button: {
                text: 'Use this image'
            },
            multiple: false
        }).on('select', function() {
            var attachment = aw_uploader.state().get('selection').first().toJSON();
            $('#aw_custom_image3').val(attachment.url);
        })
        .open();
    });
    $('body').on('click', '.aw_upload_image_button4', function(e){
        e.preventDefault();
        aw_uploader = wp.media({
            title: 'Custom image3',
            button: {
                text: 'Use this image'
            },
            multiple: false
        }).on('select', function() {
            var attachment = aw_uploader.state().get('selection').first().toJSON();
            $('#aw_custom_image4').val(attachment.url);
        })
        .open();
    });
    $('body').on('click', '.aw_upload_image_button5', function(e){
        e.preventDefault();
        aw_uploader = wp.media({
            title: 'Custom image3',
            button: {
                text: 'Use this image'
            },
            multiple: false
        }).on('select', function() {
            var attachment = aw_uploader.state().get('selection').first().toJSON();
            $('#aw_custom_image5').val(attachment.url);
        })
        .open();
    });
});


    
