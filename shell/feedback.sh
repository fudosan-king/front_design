#!/bin/sh
# rsync  -rlpcDvz --exclude-from=exclude -e "ssh -i ./key/fe-internal.pem" dev-user@13.231.78.135:~/html/ ./src/
source ./shell/.env

if [ ! -z "$PROJECT_NAME" ]
then
   	if [ "$PROJECT_NAME" == "all" ]
	then
	   	rsync  -rlpcDvz --exclude-from=$EXCLUDE_FILE -e "ssh -i $KEY_PATH" $ADDRESS:$REMOTE_SRC $LOCAL_SRC
	else
		rsync  -rlpcDvz --exclude-from=$EXCLUDE_FILE -e "ssh -i $KEY_PATH" $ADDRESS:$REMOTE_SRC$PROJECT_NAME $LOCAL_SRC
	fi
else
	echo "\nMissed project name param !";
	echo "For exp: ./shell/feedback.sh [param]\n";
	echo "Options for [param]:"
	echo "\t1. all";
	echo "\t2. your_project_name";
	echo "";
fi


