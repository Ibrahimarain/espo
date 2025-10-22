define('autocrm:handlers/lead/detail-actions', ['action-handler'], function (Dep) {

    return Dep.extend({

        findContacts: function () {
            var leadId = this.view.model.id;
            
            if (!leadId) {
                Espo.Ui.error('No lead ID found');
                return;
            }

            // Show loading notification
            Espo.Ui.notify(this.view.translate('Searching for contacts...', 'labels', 'Autocrm'));

            // Make AJAX request to find contacts
            Espo.Ajax.postRequest('Lead/action/findContacts', {id: leadId})
                .then((response) => {
                    this.handleFindContactsResponse(response);
                })
                .catch((error) => {
                    console.error('Error finding contacts:', error);
                    Espo.Ui.error(this.view.translate('Error occurred while searching for contacts', 'labels', 'Autocrm'));
                });
        },

        handleFindContactsResponse: function (response) {
            // Log to console as requested
            console.log('Find Contacts Response:', response);
            
            if (response.success) {
                var contacts = response.contacts || [];
                var emailAddress = response.emailAddress;
                
                if (contacts.length === 0) {
                    Espo.Ui.info(this.view.translate('No contacts found with the same email address', 'labels', 'Autocrm'));
                    console.log('No contacts found with email address:', emailAddress);
                } else {
                    // Display results in notification modal
                    var message = this.view.translate('Contacts found', 'labels', 'Autocrm') + ': ' + contacts.length;
                    Espo.Ui.success(message);
                    
                    // Log each contact to console
                    console.log('Found contacts with email address:', emailAddress);
                    contacts.forEach(function(contact) {
                        console.log('Contact:', contact.firstName, contact.lastName, '(' + contact.emailAddress + ')');
                    });
                    
                    // Show detailed modal with contact information
                    this.showContactResultsModal(contacts, emailAddress);
                }
            } else {
                Espo.Ui.error('Failed to search for contacts');
            }
        },

        showContactResultsModal: function (contacts, emailAddress) {
            var html = '<div class="autocrm-contact-results">';
            html += '<h4>' + this.view.translate('Contacts found', 'labels', 'Autocrm') + '</h4>';
            html += '<p><strong>' + this.view.translate('Email Address', 'labels', 'Autocrm') + ':</strong> ' + emailAddress + '</p>';
            html += '<p><strong>' + this.view.translate('Contact', 'labels', 'Autocrm') + 's:</strong></p>';
            html += '<ul>';
            
            contacts.forEach(function(contact) {
                html += '<li>';
                html += '<strong>' + contact.firstName + ' ' + contact.lastName + '</strong>';
                html += ' (' + contact.emailAddress + ')';
                html += '</li>';
            });
            
            html += '</ul>';
            html += '</div>';

            this.view.createView('modal', 'views/modal', {
                templateContent: html,
                headerText: this.view.translate('Find Contacts', 'labels', 'Autocrm'),
                buttonList: [
                    {
                        name: 'close',
                        label: 'Close',
                        onClick: function (dialog) {
                            dialog.close();
                        }
                    }
                ]
            }, function (view) {
                view.render();
            }.bind(this));
        },

        isFindContactsAvailable: function () {
            // Always available for leads with email addresses
            return this.view.model.has('emailAddress') && this.view.model.get('emailAddress');
        }

    });
});
