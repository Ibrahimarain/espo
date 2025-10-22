<?php
/************************************************************************
 * This file is part of EspoCRM.
 *
 * EspoCRM – Open Source CRM application.
 * Copyright (C) 2014-2025 EspoCRM, Inc.
 * Website: https://www.espocrm.com
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU Affero General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 * GNU Affero General Public License for more details.
 *
 * You should have received a copy of the GNU Affero General Public License
 * along with this program. If not, see <https://www.gnu.org/licenses/>.
 *
 * The interactive user interfaces in modified source and object code versions
 * of this program must display Appropriate Legal Notices, as required under
 * Section 5 of the GNU Affero General Public License version 3.
 *
 * In accordance with Section 7(b) of the GNU Affero General Public License version 3,
 * these Appropriate Legal Notices must retain the display of the "EspoCRM" word.
 ************************************************************************/

namespace Espo\Custom\Modules\Autocrm\Controllers;

use Espo\Core\Controllers\Record;
use Espo\Core\Exceptions\BadRequest;
use Espo\Core\Exceptions\Forbidden;
use Espo\Core\Exceptions\NotFound;
use Espo\Core\Api\Request;
use stdClass;

class Lead extends Record
{
    /**
     * Find contacts with the same email address as the lead
     * 
     * @throws BadRequest
     * @throws Forbidden
     * @throws NotFound
     */
    public function postActionFindContacts(Request $request): stdClass
    {
        $data = $request->getParsedBody();
        
        if (empty($data->id)) {
            throw new BadRequest("Lead ID is required");
        }
        
        $leadId = $data->id;
        
        // Get the lead record
        $lead = $this->entityManager->getEntity('Lead', $leadId);
        
        if (!$lead) {
            throw new NotFound("Lead not found");
        }
        
        // Check if user has access to the lead
        if (!$this->acl->check($lead, 'read')) {
            throw new Forbidden("Access denied to lead");
        }
        
        // Get the email address from the lead
        $emailAddress = $lead->get('emailAddress');
        
        if (empty($emailAddress)) {
            return (object) [
                'success' => true,
                'contacts' => [],
                'emailAddress' => null,
                'message' => 'No email address found for this lead'
            ];
        }
        
        // Find contacts with the same email address
        $contactCollection = $this->entityManager
            ->getRDBRepository('Contact')
            ->where([
                'emailAddress' => $emailAddress
            ])
            ->find();
        
        $contacts = [];
        foreach ($contactCollection as $contact) {
            // Check if user has access to the contact
            if ($this->acl->check($contact, 'read')) {
                $contacts[] = [
                    'id' => $contact->getId(),
                    'firstName' => $contact->get('firstName'),
                    'lastName' => $contact->get('lastName'),
                    'emailAddress' => $contact->get('emailAddress')
                ];
            }
        }
        
        return (object) [
            'success' => true,
            'contacts' => $contacts,
            'emailAddress' => $emailAddress,
            'count' => count($contacts)
        ];
    }
}
