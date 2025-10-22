// Autocrm Module - Simple implementation
console.log('Autocrm module: Loading...');

// Wait for EspoCRM to be ready
$(document).ready(function() {
    console.log('Autocrm module: Document ready');
    
    // Override the Lead detail view setup
    if (typeof Espo !== 'undefined' && Espo.define) {
        Espo.define('autocrm:views/lead/record/detail', ['crm:views/lead/record/detail'], function (Dep) {
            console.log('Autocrm module: Defining Lead detail view');
            
            return Dep.extend({
                setup: function () {
                    Dep.prototype.setup.call(this);
                    
                    console.log('Autocrm module: Lead detail view setup called');
                    
                    // Add "Find Contacts" menu item to the dropdown
                    this.addMenuItem('dropdown', {
                        name: 'findContacts',
                        action: 'findContacts',
                        label: 'Find Contacts',
                        acl: 'read',
                        onClick: () => this.actionFindContacts()
                    });
                    
                    console.log('Autocrm module: Find Contacts menu item added');
                },

                actionFindContacts: function () {
                    var leadId = this.model.id;
                    
                    if (!leadId) {
                        this.showNotification('No lead ID found', 'error');
                        return;
                    }

                    // Show loading notification
                    this.showNotification('Searching for contacts...', 'info');

                    // Make AJAX request to find contacts
                    this.ajaxPostRequest('Lead/' + leadId + '/findContacts', {id: leadId})
                        .then((response) => {
                            this.handleFindContactsResponse(response);
                        })
                        .catch((error) => {
                            console.error('Error finding contacts:', error);
                            this.showNotification('Error occurred while searching for contacts', 'error');
                        });
                },

                handleFindContactsResponse: function (response) {
                    // Log to console as requested
                    console.log('Find Contacts Response:', response);
                    
                    if (response.success) {
                        var contacts = response.contacts || [];
                        var emailAddress = response.emailAddress;
                        
                        if (contacts.length === 0) {
                            this.showNotification('No contacts found with the same email address', 'info');
                            console.log('No contacts found with email address:', emailAddress);
                        } else {
                            // Display results in notification modal
                            var message = 'Contacts found: ' + contacts.length;
                            this.showNotification(message, 'success');
                            
                            // Log each contact to console
                            console.log('Found contacts with email address:', emailAddress);
                            contacts.forEach(function(contact) {
                                console.log('Contact:', contact.firstName, contact.lastName, '(' + contact.emailAddress + ')');
                            });
                            
                            // Show detailed modal with contact information
                            this.showContactResultsModal(contacts, emailAddress);
                        }
                    } else {
                        this.showNotification('Failed to search for contacts', 'error');
                    }
                },

                showContactResultsModal: function (contacts, emailAddress) {
                    var html = '<div class="autocrm-contact-results">';
                    html += '<h4>Contacts found</h4>';
                    html += '<p><strong>Email Address:</strong> ' + emailAddress + '</p>';
                    html += '<p><strong>Contacts:</strong></p>';
                    html += '<ul>';
                    
                    contacts.forEach(function(contact) {
                        html += '<li>';
                        html += '<strong>' + contact.firstName + ' ' + contact.lastName + '</strong>';
                        html += ' (' + contact.emailAddress + ')';
                        html += '</li>';
                    });
                    
                    html += '</ul>';
                    html += '</div>';

                    this.createView('modal', 'views/modal', {
                        dialogClassName: 'autocrm-contact-results-modal',
                        header: 'Find Contacts',
                        body: html,
                        buttons: [
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
                        this.listenToOnce(view, 'close', function () {
                            view.remove();
                        });
                    }.bind(this));
                }
            });
        });
    }
});
