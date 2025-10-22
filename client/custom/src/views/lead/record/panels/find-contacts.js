define('custom:views/lead/record/panels/find-contacts', ['view'], function (Dep) {
  return Dep.extend({
    actionFindContacts: function () {
      const email = this.model.get('emailAddress');

      if (!email) {
        Espo.Ui.warning('No email found for this lead.');
        return;
      }

      Espo.Ajax.getRequest('Autocrm/action/findContacts', { email: email })
        .then(response => {
          const names = response.contacts.map(c => `${c.firstName} ${c.lastName}`).join(', ');
          Espo.Ui.success(`Matching Contacts: ${names || 'None found.'}`);
        })
        .catch(err => {
          Espo.Ui.error('Error fetching contacts.');
          console.error(err);
        });
    }
  });
});
