/*
 *  Document   : be_comp_chat_alt.js
 *  Author     : pixelcave
 *  Description: Custom JS code used in Chat Multiple Alternative Page
 */

// Helper variables
let lWindow, lHeader, lFooter, cContainer, cLoggedUser, cSearch, cTabs, cTabsContent, cActiveUser, cWindow, cMessage, cTimeout;

// Message Classes
let classesMsgBase      = 'd-flex mb-20',
    classesMsgSelf      = 'bg-primary-lighter text-primary-darker rounded px-15 py-10 mb-5 d-inline-block',
    classesMsgOther     = 'bg-body-dark text-dark rounded px-15 py-10 mb-5',
    classesMsgHeader    = 'font-size-xs font-italic text-muted text-center mt-20 mb-10';

class BeCompChatAlt {
    /*
     * Init chat
     *
     */
    static initChat() {
        let self = this;

        // Set variables
        lWindow     = jQuery(window);
        lHeader     = jQuery('#page-header');
        lFooter     = jQuery('#page-footer');
        cContainer  = jQuery('.js-chat-container');
        cLoggedUser = jQuery('.js-chat-logged-user');
        cSearch     = jQuery('.js-chat-search');
        cTabs       = jQuery('.js-chat-tabs');
        cTabsContent = jQuery('.js-chat-tabs-content');
        cActiveUser = jQuery('.js-chat-active-user');
        cWindow     = jQuery('.js-chat-window');
        cMessage    = jQuery('.js-chat-message');

        // Init chat height to full available (also on browser resize or orientation change)
        lWindow.on('resize.cb.chat orientationchange.cb.chat', e => {
            clearTimeout(cTimeout);

            cTimeout = setTimeout(e => {
                self.initChatHeight();
            }, 150);
        }).triggerHandler('resize.cb.chat');

        // Init form submission
        jQuery('form', cMessage).on('submit', e => {
            // Stop form submission
            e.preventDefault();

            // Get chat input
            let chatInput = jQuery('.js-chat-input', jQuery(e.currentTarget));

            // Add message
            self.chatAddMessage(chatInput.data('target-chat-id'), chatInput.val(), 'self', chatInput);
        });
    }

    /*
     * Init chat height
     *
     */
    static initChatHeight() {
        // Calculate height
        let cHeight = lWindow.height() -
        (lHeader.length ? lHeader.outerHeight() : 0) -
        (lFooter.length ? lFooter.outerHeight() : 0) -
        (parseInt(cContainer.css('padding-top')) + parseInt(cContainer.css('padding-bottom')));

        // Add a minimum height
        if (cHeight < 400) { cHeight = 400; }

        // Set height to chat window and tab content
        cTabsContent.find('.tab-pane').css('height', cHeight - cLoggedUser.outerHeight(true) - cSearch.outerHeight(true) - cTabs.outerHeight(true));
        cWindow.css('height', cHeight - cActiveUser.outerHeight(true) - cMessage.outerHeight(true));
    }

    /*
     * Init functionality
     *
     */
    static init() {
        this.initChat();
    }
}

// Initialize when page loads
jQuery(() => {
    BeCompChatAlt.init();
    window.BeCompChatAlt = BeCompChatAlt;
});
