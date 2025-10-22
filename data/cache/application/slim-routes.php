<?php return array (
  0 => 
  array (
    'GET' => 
    array (
      '/espo/api/v1/Activities/upcoming' => 'route3',
      '/espo/api/v1/Activities' => 'route4',
      '/espo/api/v1/Timeline' => 'route5',
      '/espo/api/v1/Timeline/busyRanges' => 'route6',
      '/espo/api/v1/' => 'route15',
      '/espo/api/v1/App/user' => 'route16',
      '/espo/api/v1/App/about' => 'route18',
      '/espo/api/v1/Metadata' => 'route19',
      '/espo/api/v1/I18n' => 'route20',
      '/espo/api/v1/Settings' => 'route21',
      '/espo/api/v1/Stream' => 'route24',
      '/espo/api/v1/GlobalStream' => 'route25',
      '/espo/api/v1/GlobalSearch' => 'route26',
      '/espo/api/v1/Admin/jobs' => 'route38',
      '/espo/api/v1/CurrencyRate' => 'route44',
      '/espo/api/v1/Email/inbox/notReadCounts' => 'route80',
      '/espo/api/v1/Email/insertFieldData' => 'route81',
      '/espo/api/v1/EmailAddress/search' => 'route83',
      '/espo/api/v1/Oidc/authorizationData' => 'route93',
    ),
    'POST' => 
    array (
      '/espo/api/v1/App/destroyAuthToken' => 'route17',
      '/espo/api/v1/Admin/rebuild' => 'route36',
      '/espo/api/v1/Admin/clearCache' => 'route37',
      '/espo/api/v1/Action' => 'route46',
      '/espo/api/v1/MassAction' => 'route47',
      '/espo/api/v1/Export' => 'route50',
      '/espo/api/v1/Import' => 'route53',
      '/espo/api/v1/Import/file' => 'route54',
      '/espo/api/v1/Attachment/fromImageUrl' => 'route63',
      '/espo/api/v1/Email/importEml' => 'route71',
      '/espo/api/v1/Email/sendTest' => 'route72',
      '/espo/api/v1/Email/inbox/read' => 'route73',
      '/espo/api/v1/Email/inbox/important' => 'route75',
      '/espo/api/v1/Email/inbox/inTrash' => 'route77',
      '/espo/api/v1/UserSecurity/apiKey/generate' => 'route86',
      '/espo/api/v1/UserSecurity/password/recovery' => 'route88',
      '/espo/api/v1/UserSecurity/password/generate' => 'route89',
      '/espo/api/v1/User/passwordChangeRequest' => 'route90',
      '/espo/api/v1/User/changePasswordByRequest' => 'route91',
      '/espo/api/v1/Oidc/backchannelLogout' => 'route94',
    ),
    'PATCH' => 
    array (
      '/espo/api/v1/Settings' => 'route22',
    ),
    'PUT' => 
    array (
      '/espo/api/v1/Settings' => 'route23',
      '/espo/api/v1/CurrencyRate' => 'route45',
      '/espo/api/v1/Kanban/order' => 'route59',
      '/espo/api/v1/UserSecurity/password' => 'route87',
    ),
    'DELETE' => 
    array (
      '/espo/api/v1/Email/inbox/read' => 'route74',
      '/espo/api/v1/Email/inbox/important' => 'route76',
      '/espo/api/v1/Email/inbox/inTrash' => 'route78',
    ),
  ),
  1 => 
  array (
    'GET' => 
    array (
      0 => 
      array (
        'regex' => '~^(?|/espo/api/v1/Activities/([^/]+)/([^/]+)/composeEmailAddressList|/espo/api/v1/Activities/([^/]+)/([^/]+)/([^/]+)|/espo/api/v1/Activities/([^/]+)/([^/]+)/([^/]+)/list/([^/]+)|/espo/api/v1/Meeting/([^/]+)/attendees()()()()|/espo/api/v1/Call/([^/]+)/attendees()()()()()|/espo/api/v1/TargetList/([^/]+)/optedOut()()()()()()|/espo/api/v1/([^/]+)/action/([^/]+)()()()()()()|/espo/api/v1/([^/]+)/layout/([^/]+)()()()()()()()|/espo/api/v1/Admin/fieldManager/([^/]+)/([^/]+)()()()()()()()())$~',
        'routeMap' => 
        array (
          3 => 
          array (
            0 => 'route0',
            1 => 
            array (
              'parentType' => 'parentType',
              'id' => 'id',
            ),
          ),
          4 => 
          array (
            0 => 'route1',
            1 => 
            array (
              'parentType' => 'parentType',
              'id' => 'id',
              'type' => 'type',
            ),
          ),
          5 => 
          array (
            0 => 'route2',
            1 => 
            array (
              'parentType' => 'parentType',
              'id' => 'id',
              'type' => 'type',
              'targetType' => 'targetType',
            ),
          ),
          6 => 
          array (
            0 => 'route7',
            1 => 
            array (
              'id' => 'id',
            ),
          ),
          7 => 
          array (
            0 => 'route8',
            1 => 
            array (
              'id' => 'id',
            ),
          ),
          8 => 
          array (
            0 => 'route10',
            1 => 
            array (
              'id' => 'id',
            ),
          ),
          9 => 
          array (
            0 => 'route32',
            1 => 
            array (
              'controller' => 'controller',
              'action' => 'action',
            ),
          ),
          10 => 
          array (
            0 => 'route33',
            1 => 
            array (
              'controller' => 'controller',
              'name' => 'name',
            ),
          ),
          11 => 
          array (
            0 => 'route39',
            1 => 
            array (
              'scope' => 'scope',
              'name' => 'name',
            ),
          ),
        ),
      ),
      1 => 
      array (
        'regex' => '~^(?|/espo/api/v1/MassAction/([^/]+)/status|/espo/api/v1/Export/([^/]+)/status()|/espo/api/v1/Kanban/([^/]+)()()|/espo/api/v1/Attachment/file/([^/]+)()()()|/espo/api/v1/Note/([^/]+)/reactors/([^/]+)()()()|/espo/api/v1/Notification/([^/]+)/group()()()()()|/espo/api/v1/User/([^/]+)/stream/own()()()()()()|/espo/api/v1/User/([^/]+)/acl()()()()()()()|/espo/api/v1/([^/]+)/([^/]+)()()()()()()())$~',
        'routeMap' => 
        array (
          2 => 
          array (
            0 => 'route48',
            1 => 
            array (
              'id' => 'id',
            ),
          ),
          3 => 
          array (
            0 => 'route51',
            1 => 
            array (
              'id' => 'id',
            ),
          ),
          4 => 
          array (
            0 => 'route60',
            1 => 
            array (
              'entityType' => 'entityType',
            ),
          ),
          5 => 
          array (
            0 => 'route61',
            1 => 
            array (
              'id' => 'id',
            ),
          ),
          6 => 
          array (
            0 => 'route67',
            1 => 
            array (
              'id' => 'id',
              'type' => 'type',
            ),
          ),
          7 => 
          array (
            0 => 'route68',
            1 => 
            array (
              'id' => 'id',
            ),
          ),
          8 => 
          array (
            0 => 'route84',
            1 => 
            array (
              'id' => 'id',
            ),
          ),
          9 => 
          array (
            0 => 'route85',
            1 => 
            array (
              'id' => 'id',
            ),
          ),
          10 => 
          array (
            0 => 'route97',
            1 => 
            array (
              'controller' => 'controller',
              'id' => 'id',
            ),
          ),
        ),
      ),
      2 => 
      array (
        'regex' => '~^(?|/espo/api/v1/([^/]+)|/espo/api/v1/([^/]+)/([^/]+)/followers|/espo/api/v1/([^/]+)/([^/]+)/stream()|/espo/api/v1/([^/]+)/([^/]+)/posts()()|/espo/api/v1/([^/]+)/([^/]+)/updateStream()()()|/espo/api/v1/([^/]+)/([^/]+)/streamAttachments()()()()|/espo/api/v1/([^/]+)/([^/]+)/usersAccess()()()()()|/espo/api/v1/([^/]+)/([^/]+)/([^/]+)()()()()())$~',
        'routeMap' => 
        array (
          2 => 
          array (
            0 => 'route98',
            1 => 
            array (
              'controller' => 'controller',
            ),
          ),
          3 => 
          array (
            0 => 'route103',
            1 => 
            array (
              'entityType' => 'entityType',
              'id' => 'id',
            ),
          ),
          4 => 
          array (
            0 => 'route106',
            1 => 
            array (
              'controller' => 'controller',
              'id' => 'id',
            ),
          ),
          5 => 
          array (
            0 => 'route107',
            1 => 
            array (
              'controller' => 'controller',
              'id' => 'id',
            ),
          ),
          6 => 
          array (
            0 => 'route108',
            1 => 
            array (
              'controller' => 'controller',
              'id' => 'id',
            ),
          ),
          7 => 
          array (
            0 => 'route111',
            1 => 
            array (
              'entityType' => 'entityType',
              'id' => 'id',
            ),
          ),
          8 => 
          array (
            0 => 'route116',
            1 => 
            array (
              'entityType' => 'entityType',
              'id' => 'id',
            ),
          ),
          9 => 
          array (
            0 => 'route117',
            1 => 
            array (
              'controller' => 'controller',
              'id' => 'id',
              'link' => 'link',
            ),
          ),
        ),
      ),
    ),
    'POST' => 
    array (
      0 => 
      array (
        'regex' => '~^(?|/espo/api/v1/Campaign/([^/]+)/generateMailMerge|/espo/api/v1/Campaign/unsubscribe/([^/]+)()|/espo/api/v1/Campaign/unsubscribe/([^/]+)/([^/]+)()|/espo/api/v1/LeadCapture/form/([^/]+)()()()|/espo/api/v1/LeadCapture/([^/]+)()()()()|/espo/api/v1/([^/]+)/action/([^/]+)()()()()|/espo/api/v1/Admin/fieldManager/([^/]+)()()()()()()|/espo/api/v1/MassAction/([^/]+)/subscribe()()()()()()()|/espo/api/v1/Export/([^/]+)/subscribe()()()()()()()())$~',
        'routeMap' => 
        array (
          2 => 
          array (
            0 => 'route9',
            1 => 
            array (
              'id' => 'id',
            ),
          ),
          3 => 
          array (
            0 => 'route11',
            1 => 
            array (
              'id' => 'id',
            ),
          ),
          4 => 
          array (
            0 => 'route13',
            1 => 
            array (
              'emailAddress' => 'emailAddress',
              'hash' => 'hash',
            ),
          ),
          5 => 
          array (
            0 => 'route27',
            1 => 
            array (
              'id' => 'id',
            ),
          ),
          6 => 
          array (
            0 => 'route28',
            1 => 
            array (
              'apiKey' => 'apiKey',
            ),
          ),
          7 => 
          array (
            0 => 'route30',
            1 => 
            array (
              'controller' => 'controller',
              'action' => 'action',
            ),
          ),
          8 => 
          array (
            0 => 'route40',
            1 => 
            array (
              'scope' => 'scope',
            ),
          ),
          9 => 
          array (
            0 => 'route49',
            1 => 
            array (
              'id' => 'id',
            ),
          ),
          10 => 
          array (
            0 => 'route52',
            1 => 
            array (
              'id' => 'id',
            ),
          ),
        ),
      ),
      1 => 
      array (
        'regex' => '~^(?|/espo/api/v1/Import/([^/]+)/revert|/espo/api/v1/Import/([^/]+)/removeDuplicates()|/espo/api/v1/Import/([^/]+)/unmarkDuplicates()()|/espo/api/v1/Import/([^/]+)/exportErrors()()()|/espo/api/v1/Attachment/chunk/([^/]+)()()()()|/espo/api/v1/Attachment/copy/([^/]+)()()()()()|/espo/api/v1/Note/([^/]+)/myReactions/([^/]+)()()()()()|/espo/api/v1/EmailTemplate/([^/]+)/prepare()()()()()()()|/espo/api/v1/Email/([^/]+)/attachments/copy()()()()()()()())$~',
        'routeMap' => 
        array (
          2 => 
          array (
            0 => 'route55',
            1 => 
            array (
              'id' => 'id',
            ),
          ),
          3 => 
          array (
            0 => 'route56',
            1 => 
            array (
              'id' => 'id',
            ),
          ),
          4 => 
          array (
            0 => 'route57',
            1 => 
            array (
              'id' => 'id',
            ),
          ),
          5 => 
          array (
            0 => 'route58',
            1 => 
            array (
              'id' => 'id',
            ),
          ),
          6 => 
          array (
            0 => 'route62',
            1 => 
            array (
              'id' => 'id',
            ),
          ),
          7 => 
          array (
            0 => 'route64',
            1 => 
            array (
              'id' => 'id',
            ),
          ),
          8 => 
          array (
            0 => 'route65',
            1 => 
            array (
              'id' => 'id',
              'type' => 'type',
            ),
          ),
          9 => 
          array (
            0 => 'route69',
            1 => 
            array (
              'id' => 'id',
            ),
          ),
          10 => 
          array (
            0 => 'route70',
            1 => 
            array (
              'id' => 'id',
            ),
          ),
        ),
      ),
      2 => 
      array (
        'regex' => '~^(?|/espo/api/v1/Email/inbox/folders/([^/]+)|/espo/api/v1/Email/([^/]+)/users()|/espo/api/v1/OAuth/([^/]+)/connection()()|/espo/api/v1/([^/]+)()()()|/espo/api/v1/([^/]+)/([^/]+)/followers()()()|/espo/api/v1/([^/]+)/([^/]+)/pin()()()()|/espo/api/v1/([^/]+)/([^/]+)/([^/]+)()()()())$~',
        'routeMap' => 
        array (
          2 => 
          array (
            0 => 'route79',
            1 => 
            array (
              'folderId' => 'folderId',
            ),
          ),
          3 => 
          array (
            0 => 'route82',
            1 => 
            array (
              'id' => 'id',
            ),
          ),
          4 => 
          array (
            0 => 'route95',
            1 => 
            array (
              'id' => 'id',
            ),
          ),
          5 => 
          array (
            0 => 'route99',
            1 => 
            array (
              'controller' => 'controller',
            ),
          ),
          6 => 
          array (
            0 => 'route104',
            1 => 
            array (
              'entityType' => 'entityType',
              'id' => 'id',
            ),
          ),
          7 => 
          array (
            0 => 'route112',
            1 => 
            array (
              'Note' => 'Note',
              'id' => 'id',
            ),
          ),
          8 => 
          array (
            0 => 'route118',
            1 => 
            array (
              'controller' => 'controller',
              'id' => 'id',
              'link' => 'link',
            ),
          ),
        ),
      ),
    ),
    'DELETE' => 
    array (
      0 => 
      array (
        'regex' => '~^(?|/espo/api/v1/Campaign/unsubscribe/([^/]+)|/espo/api/v1/Campaign/unsubscribe/([^/]+)/([^/]+)|/espo/api/v1/Admin/fieldManager/([^/]+)/([^/]+)()|/espo/api/v1/Note/([^/]+)/myReactions/([^/]+)()()|/espo/api/v1/OAuth/([^/]+)/connection()()()()|/espo/api/v1/([^/]+)/([^/]+)()()()()|/espo/api/v1/([^/]+)/([^/]+)/followers()()()()()|/espo/api/v1/([^/]+)/([^/]+)/subscription()()()()()()|/espo/api/v1/([^/]+)/([^/]+)/pin()()()()()()()|/espo/api/v1/([^/]+)/([^/]+)/starSubscription()()()()()()()()|/espo/api/v1/([^/]+)/([^/]+)/([^/]+)()()()()()()()())$~',
        'routeMap' => 
        array (
          2 => 
          array (
            0 => 'route12',
            1 => 
            array (
              'id' => 'id',
            ),
          ),
          3 => 
          array (
            0 => 'route14',
            1 => 
            array (
              'emailAddress' => 'emailAddress',
              'hash' => 'hash',
            ),
          ),
          4 => 
          array (
            0 => 'route43',
            1 => 
            array (
              'scope' => 'scope',
              'name' => 'name',
            ),
          ),
          5 => 
          array (
            0 => 'route66',
            1 => 
            array (
              'id' => 'id',
              'type' => 'type',
            ),
          ),
          6 => 
          array (
            0 => 'route96',
            1 => 
            array (
              'id' => 'id',
            ),
          ),
          7 => 
          array (
            0 => 'route102',
            1 => 
            array (
              'controller' => 'controller',
              'id' => 'id',
            ),
          ),
          8 => 
          array (
            0 => 'route105',
            1 => 
            array (
              'entityType' => 'entityType',
              'id' => 'id',
            ),
          ),
          9 => 
          array (
            0 => 'route110',
            1 => 
            array (
              'controller' => 'controller',
              'id' => 'id',
            ),
          ),
          10 => 
          array (
            0 => 'route113',
            1 => 
            array (
              'Note' => 'Note',
              'id' => 'id',
            ),
          ),
          11 => 
          array (
            0 => 'route115',
            1 => 
            array (
              'entityType' => 'entityType',
              'id' => 'id',
            ),
          ),
          12 => 
          array (
            0 => 'route119',
            1 => 
            array (
              'controller' => 'controller',
              'id' => 'id',
              'link' => 'link',
            ),
          ),
        ),
      ),
    ),
    'OPTIONS' => 
    array (
      0 => 
      array (
        'regex' => '~^(?|/espo/api/v1/LeadCapture/([^/]+))$~',
        'routeMap' => 
        array (
          2 => 
          array (
            0 => 'route29',
            1 => 
            array (
              'apiKey' => 'apiKey',
            ),
          ),
        ),
      ),
    ),
    'PUT' => 
    array (
      0 => 
      array (
        'regex' => '~^(?|/espo/api/v1/([^/]+)/action/([^/]+)|/espo/api/v1/([^/]+)/layout/([^/]+)()|/espo/api/v1/([^/]+)/layout/([^/]+)/([^/]+)()|/espo/api/v1/Admin/fieldManager/([^/]+)/([^/]+)()()()|/espo/api/v1/Team/([^/]+)/userPosition()()()()()|/espo/api/v1/([^/]+)/([^/]+)()()()()()|/espo/api/v1/([^/]+)/([^/]+)/subscription()()()()()()|/espo/api/v1/([^/]+)/([^/]+)/starSubscription()()()()()()())$~',
        'routeMap' => 
        array (
          3 => 
          array (
            0 => 'route31',
            1 => 
            array (
              'controller' => 'controller',
              'action' => 'action',
            ),
          ),
          4 => 
          array (
            0 => 'route34',
            1 => 
            array (
              'controller' => 'controller',
              'name' => 'name',
            ),
          ),
          5 => 
          array (
            0 => 'route35',
            1 => 
            array (
              'controller' => 'controller',
              'name' => 'name',
              'setId' => 'setId',
            ),
          ),
          6 => 
          array (
            0 => 'route41',
            1 => 
            array (
              'scope' => 'scope',
              'name' => 'name',
            ),
          ),
          7 => 
          array (
            0 => 'route92',
            1 => 
            array (
              'id' => 'id',
            ),
          ),
          8 => 
          array (
            0 => 'route100',
            1 => 
            array (
              'controller' => 'controller',
              'id' => 'id',
            ),
          ),
          9 => 
          array (
            0 => 'route109',
            1 => 
            array (
              'controller' => 'controller',
              'id' => 'id',
            ),
          ),
          10 => 
          array (
            0 => 'route114',
            1 => 
            array (
              'entityType' => 'entityType',
              'id' => 'id',
            ),
          ),
        ),
      ),
    ),
    'PATCH' => 
    array (
      0 => 
      array (
        'regex' => '~^(?|/espo/api/v1/Admin/fieldManager/([^/]+)/([^/]+)|/espo/api/v1/([^/]+)/([^/]+)())$~',
        'routeMap' => 
        array (
          3 => 
          array (
            0 => 'route42',
            1 => 
            array (
              'scope' => 'scope',
              'name' => 'name',
            ),
          ),
          4 => 
          array (
            0 => 'route101',
            1 => 
            array (
              'controller' => 'controller',
              'id' => 'id',
            ),
          ),
        ),
      ),
    ),
  ),
);