#/usr/bin/bash

sed -E -i.bak 's/(.+background-color:%s;min-width:150px;padding:).+/\150px;border-radius:50%/' ./lib/private/Mail/EMailTemplate.php
