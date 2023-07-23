#!/bin/bash

for file in *
do
if [[ $file = "info.json" ]]; then
        echo "$file"
elif [[ $file = "update.sh" ]]; then
        echo "$file"
else
	rm -rf $file
fi

done

wget https://github.com/airmb/airxyz/archive/refs/heads/main.zip

unzip main.zip


for f in ./airxyz-main/*
do 
    mv $f ./
done

rm -rf airxyz-main
rm -rf main.zip
chmod +x update.sh

echo "update success!"
