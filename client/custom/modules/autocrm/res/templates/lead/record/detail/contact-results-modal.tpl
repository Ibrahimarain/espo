<div class="autocrm-contact-results">
    <h4>{{translate 'Contacts found' category='labels' scope='Autocrm'}}</h4>
    <p><strong>{{translate 'Email Address' category='labels' scope='Autocrm'}}:</strong> {{emailAddress}}</p>
    <p><strong>{{translate 'Contact' category='labels' scope='Autocrm'}}s:</strong></p>
    <ul class="contact-list">
        {{#each contacts}}
        <li class="contact-item">
            <strong>{{firstName}} {{lastName}}</strong>
            <span class="email">({{emailAddress}})</span>
        </li>
        {{/each}}
    </ul>
</div>
