define('autocrm:views/lead/record/detail', ['crm:views/lead/record/detail'], function (Dep) {

    return Dep.extend({

        setup: function () {
            Dep.prototype.setup.call(this);
            
            console.log('Autocrm module: Lead detail view setup called');
        }

    });
});
