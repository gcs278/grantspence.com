#!/usr/bin/env bash

size=$1;
if [ -z "$1" ]
  then
    size=200;
fi

result=${PWD##*/}

rm -rf ../tmp
rm ./*_s.jpg

mkdir ../tmp
for f in `find . -name '*.*'` ; do mv -v $f `echo $f | tr '[A-Z]' '[a-z]'`; done

find . -name "*.jpg" -type f -exec cp {} ../tmp \;

sips -Z $size ../tmp/*.jpg

for f in ../tmp/*.jpg; do mv $f `printf '%s\n' "${f%.jpg}_s.jpg"`; done

for f in ../tmp/*; do mv $f ./; done

rm -rf ../tmp
