#!/bin/bash
WORKSPACE=$(cd $(dirname $0)/; pwd)
cd $WORKSPACE
app=nginx
pidfile=/home/op/app/nginx/var/run/nginx.pid
nginxapp=/home/op/app/nginx/sbin/nginx
nginxconf=/home/op/app/nginx/etc/nginx/conf.d
function check_pid() {
    if [ -f $pidfile ];then
        pid=`cat $pidfile`
        if [ -n $pid ]; then
            running=`ps -p $pid|grep -v "PID TTY" |wc -l`
            return $running
        fi
    fi
    return 0
}
function start() {
      copynginx
      reload
}
function reload() {
        $nginxapp -s reload
        echo "$app reload..."
}
function stop() {
    echo "$app stoped..."
}
function restart() {
    stop
    sleep 1
    start
}
function status() {
    check_pid
    running=$?
    if [ $running -gt 0 ];then
        echo -n "$app now is running, pid="
        cat $pidfile
    else
        echo "$app is stoped"
    fi
}
function help() {
    echo "$0 |start|stop|restart|status"
}
function copynginx() {
    cp ./itools.df.cn.conf /home/op/app/nginx/etc/nginx/conf.d
}
if [ "$1" == "" ]; then
    help
elif [ "$1" == "stop" ];then
    stop
elif [ "$1" == "start" ];then
    start
elif [ "$1" == "restart" ];then
    restart
elif [ "$1" == "status" ];then
    status
else
    help
fi
