#!/bin/bash

#create dirs for files
# the -p flag creates the parent dir if it does not already exist
#this avoids doing mkdir tmp && mkdir tmp/dates as 2 commands
if [[ ! -d tmp/dates ]] ; then
  mkdir -p tmp/dates  #only runs if the dir doesn't exists
fi

for f in md txt html ; do #lets var $f == 1, 2 and then 3
  cat > tmp/dates/times.$f << EOF
This is some text,
that was writen to a file
named times.$f at `date`
EOF
done
#notice here that it knows to sub $f for the current iteration of f and to sub `<command>` in this case date for the return of that command.


#save this, make it execable by doing chmod +x createDefaultCfg.sh
#./createDefaultCfg
# it should have created the dir and 3 files. you can easily see the output by running
# find tmp -exec cat {} \;
#which will show you all the files under tmp and cat the contents
