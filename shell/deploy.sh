#!/bin/sh
# rsync --delete -rlpcgvz --exclude-from=exclude -e "ssh -i ./key/fe-internal.pem" ./src/ dev-user@13.231.78.135:~/html/
source ./shell/.env

if [ ! -z "$PROJECT_NAME" ]
then
   	if [ "$PROJECT_NAME" == "all" ]
	then
	   	rsync --delete -rlpcgvz --exclude-from=$EXCLUDE_FILE -e "ssh -i $KEY_PATH" $LOCAL_SRC $ADDRESS:$REMOTE_SRC
	else
		rsync --delete -rlpcgvz --exclude-from=$EXCLUDE_FILE -e "ssh -i $KEY_PATH" $LOCAL_SRC$PROJECT_NAME $ADDRESS:$REMOTE_SRC
	fi
else
	echo "\nMissed project name param !";
	echo "For exp: ./shell/deploy.sh [param]\n";
	echo "Options for [param]:"
	echo "\t1. all";
	echo "\t2. your_project_name";
	echo "";
fi


