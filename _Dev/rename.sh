#!/bin/sh

a=83	# copy source
b=140	# copy destination
c=1 	# copy flag for copying exceptions

for i in *.png; do

if [ $a -eq 96 ]
then
  let b=b-1
  let c=0
fi

if [ $a -eq 112 ]
then
  let b=b-1
  let c=0
fi

if [ $a -eq 113 ]
then
  let b=b-1
  let c=0
fi

if [ $a -eq 114 ]
then
  let b=b-1
  let c=0
fi

if [ $a -eq 115 ]
then
  let b=b-1
  let c=0
fi

if [ $a -eq 125 ]
then
  let b=b-1
  let c=0
fi

if [ $a -eq 133 ]
then
  let b=b-1
  let c=0
fi

  new=$(printf "%05d.png" ${b}) #04 pad to length of 4	

  # echo ${i}
  # echo ${new}

  if [ $c -eq 1 ]
  then
    cp ${i} ${new}
    # echo "* written *"
  fi

  let a=a+1
  let b=b+1
  let c=1
done
