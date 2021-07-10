/*
 *  Document   : op_installation.js
 *  Author     : pixelcave
 *  Description: Custom JS code used in Installation Page
 */

// Form Validation, for more examples you can check out https://github.com/jzaefferer/jquery-validation
class OpInstallation {
    /*
     * Init Installation Form Validation
     *
     */
    static initValidationInstallation() {
        jQuery('.js-validation-installation').validate({
            errorClass: 'invalid-feedback animated fadeInDown',
            errorElement: 'div',
            errorPlacement: (error, e) => {
                jQuery(e).parents('.form-group').append(error);
            },
            highlight: e => {
                jQuery(e).closest('.form-group').removeClass('is-invalid').addClass('is-invalid');
            },
            success: e => {
                jQuery(e).closest('.form-group').removeClass('is-invalid');
                jQuery(e).remove();
            },
            rules: {
                'install-db-name': {
                    required: true
                },
                'install-db-username': {
                    required: true
                },
                'install-db-password': {
                    required: true
                },
                'install-admin-email': {
                    required: true,
                    email: true
                },
                'install-admin-password': {
                    required: true,
                    minlength: 5
                },
                'install-admin-password-confirm': {
                    required: true,
                    equalTo: '#install-admin-password'
                }
            },
            messages: {
                'install-db-name': {
                    required: 'Please provide the name of your database'
                },
                'install-db-username': {
                    required: 'Please provide the username with access to your database'
                },
                'install-db-password': {
                    required: 'Please provide the password of your database user'
                },
                'install-admin-email': {
                    required: 'Please enter your email'
                },
                'install-admin-password': {
                    required: 'Please provide a password',
                    minlength: 'Your password must be at least 5 characters long'
                },
                'install-admin-password-confirm': {
                    required: 'Please provide a password',
                    minlength: 'Your password must be at least 5 characters long',
                    equalTo: 'Please enter the same password as above'
                }
            }
        });
    }

    /*
     * Init functionality
     *
     */
    static init() {
        this.initValidationInstallation();
    }
}

// Initialize when page loads
jQuery(() => { OpInstallation.init(); });
