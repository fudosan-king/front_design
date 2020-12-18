# Information

>Server IP: 13.231.78.135 \
>User: dev-user \
>SSH Key: key/fe-internal.pem

## Feature branch rule

Example your name: **John**

Example ticket: **http://redmine.fudosan-king.jp/issues/1234** \
-> Your branch should be: **john/ticket/1234**

Example ticket: **http://redmine.fudosan-king.jp/issues/1234#note-2** \
-> Your branch should be: **john/ticket/1234#2**

etc.

*NOTES:*
- Please ensure that branch always have one commit.

## Feedback source code

Terminal:

```sh
./shell/feedback.sh [param]

#Options for [param]:
#	1. all
#	2. your_project_name
```

## Deploy source code

Terminal:

```sh
./shell/deploy.sh [param]

#Options for [param]:
#	1. all
#	2. your_project_name
```