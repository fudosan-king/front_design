#!/bin/sh
rsync  -rlpcDvz --progress -e "ssh -i ./key/fe-internal.pem" dev-user@13.231.78.135:~/html/ ./src/
