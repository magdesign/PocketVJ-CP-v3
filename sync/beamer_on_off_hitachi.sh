#!/bin/bash

IP=192.168.2.254

AUTH="Authorization: Basic QWRtaW5pc3RyYXRvcjo="

ON=1
OFF=0
COOLDOWN=2

if [[ -z "$1" ]] || [[ $# -ne 1 ]] || [ "$1" != "--on" -a "$1" != "--off" ]
then
    echo "Usage: $0 [--on|--off]"
    exit 1
fi

STATUS=$(curl --silent "http://${IP}/cgi-bin/webctrl.cgi.elf?&p:2,c:24576,v:0" -X POST -H "$AUTH" | sed -n 's/^.*"val":\[\(.\)\].*$/\1/p')

if [[ "$1" == "--on" ]]; then
    if [[ "$STATUS" == "$ON" ]]; then
        echo "Alreay on"
    else
        echo "Turning ON"
        curl --silent "http://${IP}/cgi-bin/webctrl.cgi.elf?&p:1,c:24576,v:2,v:1" -X POST -H "$AUTH" > /dev/null
    fi
elif [[ "$1" == "--off" ]]; then
    if [[ "$STATUS" == "$OFF" ]]; then
        echo "Alreay off"
    elif [[ "$STATUS" == "$COOLDOWN" ]]; then
        echo "Already shutting down"
    else
        echo "Turning OFF"
        curl --silent "http://${IP}/cgi-bin/webctrl.cgi.elf?&p:1,c:24576,v:2,v:0" -X POST -H "$AUTH" > /dev/null
    fi
else
    echo "Usage: $0 [--on|--off]"
    exit 1
fi
