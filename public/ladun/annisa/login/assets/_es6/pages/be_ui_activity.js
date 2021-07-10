/*
 *  Document   : be_ui_activity.js
 *  Author     : pixelcave
 *  Description: Custom JS code used in Activity Page
 */

class BeUIActivity {
    /*
     * Randomize progress bars values
     *
     */
    static barsRandomize() {
        jQuery('.js-bar-randomize').on('click', e => {
            jQuery(e.currentTarget)
                .parents('.block')
                .find('.progress-bar')
                .each((index, element) => {
                    let el      = jQuery(element);
                    let random  = Math.floor((Math.random() * 91) + 10);

                    // Update progress width
                    el.css('width', random  + '%');

                    // Update progress label
                    jQuery('.progress-bar-label', el).html(random  + '%');
                });
            });
    }

    /*
     * SweetAlert2, for more examples you can check out https://github.com/limonte/sweetalert2
     *
     */
    static sweetAlert2() {
        // Set default properties
        let toast = Swal.mixin({
            buttonsStyling: false,
            customClass: {
                confirmButton: 'btn btn-alt-success m-5',
                cancelButton: 'btn btn-alt-danger m-5',
                input: 'form-control'
            }
        });

        // Init a simple alert on button click
        jQuery('.js-swal-alert').on('click', e => {
            toast.fire('Hi, this is a simple alert!');
        });

        // Init an success alert on button click
        jQuery('.js-swal-success').on('click', e => {
            toast.fire('Success', 'Everything updated perfectly!', 'success');
        });

        // Init an info alert on button click
        jQuery('.js-swal-info').on('click', e => {
            toast.fire('Info', 'Just an informational modal!', 'info');
        });

        // Init an warning alert on button click
        jQuery('.js-swal-warning').on('click', e => {
            toast.fire('Warning', 'Something needs your attention!', 'warning');
        });

        // Init an error alert on button click
        jQuery('.js-swal-error').on('click', e => {
            toast.fire('Oops...', 'Something went wrong!', 'error');
        });

        // Init an question alert on button click
        jQuery('.js-swal-question').on('click', e => {
            toast.fire('Question', 'Are you sure?', 'question');
        });

        // Init an example confirm alert on button click
        jQuery('.js-swal-confirm').on('click', e => {
            toast.fire({
                title: 'Are you sure?',
                text: 'You will not be able to recover this imaginary file!',
                icon: 'warning',
                showCancelButton: true,
                customClass: {
                    confirmButton: 'btn btn-alt-danger m-1',
                    cancelButton: 'btn btn-alt-secondary m-1'
                },
                confirmButtonText: 'Yes, delete it!',
                html: false,
                preConfirm: e => {
                    return new Promise(resolve => {
                        setTimeout(() => {
                            resolve();
                        }, 50);
                    });
                }
            }).then(result => {
                if (result.value) {
                    toast.fire('Deleted!', 'Your imaginary file has been deleted.', 'success');
                    // result.dismiss can be 'overlay', 'cancel', 'close', 'esc', 'timer'
                } else if (result.dismiss === 'cancel') {
                    toast.fire('Cancelled', 'Your imaginary file is safe :)', 'error');
                }
            });
        });
    }

    /*
     * Init functionality
     *
     */
    static init() {
        this.barsRandomize();
        this.sweetAlert2();
    }
}

// Initialize when page loads
jQuery(() => { BeUIActivity.init(); });
