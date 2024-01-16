#!/bin/bash
apiHost=$1
apiKey=$2
Green_font_prefix="\033[32m" && Red_font_prefix="\033[31m" && Green_background_prefix="\033[42;37m" && Red_background_prefix="\033[41;37m" && Font_color_suffix="\033[0m"

menu_server(){
echo && echo -e "  air空气面板 客户端一键安装管理脚本 ${Red_font_prefix}[v1.0${sh_ver}]${Font_color_suffix}
  -- 空气面板 | https://air.airxyz.xyz --
  
 ————————————
 ${Green_font_prefix}1.${Font_color_suffix} 安装 客户端
 ${Green_font_prefix}2.${Font_color_suffix} 查看当前配置的api
 ${Green_font_prefix}3.${Font_color_suffix} 卸载并删除脚本
————————————
 ${Green_font_prefix}4.${Font_color_suffix} 退出脚本" && echo

echo
stty erase '^H' && read -p " 请输入数字 [1-2]:" num
case "$num" in
        1)
        read -p " 请输入apiHost:" apiHostRead
        echo "你输入的 apiHost = ${apiHostRead} "

        read -p " 请输入apiKey:" apiKeyRead
        echo "你输入的 apiKey = ${apiKeyRead} "

        mb_install ${apiHostRead} ${apiKeyRead}

        ;;
        2)
        if [[ ! -f "./airAPI.info" ]];then
                echo "你当前未配置api"
        else
                echo "你当前设置的apiHost为"
                echo $(cat airAPI.info |awk '{print $1}')
                echo "你当前设置的apiKey为"
                echo $(cat airAPI.info |awk '{print $2}')
        fi
        ;;
        3)
        rm -f airAPI.info && rm -f airxyz.sh
        echo "已经卸载"
        ;;
        4)
        echo "成功退出脚本"
        ;;
        *)
        echo "请输入正确数字 [1-3]"
        ;;
esac
}

mb_install(){
        echo "准备开始自动安装客户端......"
        currentPwd=$(cd $(dirname $0) && pwd)
        #写入文件
        echo "写入文件airAPI.info......"
        echo $1 $2 > $currentPwd/airAPI.info
        #取出写入内容
        echo $(cat airAPI.info |awk '{print $1}')
        echo $(cat airAPI.info |awk '{print $2}')
        echo "写入成功..."
        #每隔1分钟执行一次
        #提前检查是否存在定时任务
        #检查/etc/crontab文件是否存在airxyz.sh关键字的定时任务
        number=`grep -n "airxyz.sh" /etc/crontab | cut -d ":" -f 1`
        if [ -z $number ];then
                        #echo '任务不存在'
                        echo "*/1 * * * * root $currentPwd/airxyz.sh c" >> /etc/crontab
                echo '已经添加定时任务到/etc/crontab ， 安装成功！'
                allCrond
        else
                        echo '更新成功！'
        fi



}

function allCrond(){

        cpuAll=$(cat /proc/cpuinfo | grep processor | wc -l)
        echo "CPU 核心数 ${cpuAll}"
        cpuUsed=$(vmstat |awk '{if(NR==3)print $13+$14}')
        echo "CPU 使用率 ${cpuUsed}%"

        mem_use_info=(`awk '/MemTotal/{memtotal=$2}/MemAvailable/{memavailable=$2}END{printf "%.2f %.2f %.2f",memtotal/1024/1024," "(memtotal-memavailable)/1024/1024," "(memtotal-memavailable)/memtotal*100}' /proc/meminfo`)
        echo "内存 总共有 ${mem_use_info[0]}G"
        echo "内存 使用了 ${mem_use_info[1]}G"
        echo "内存 使用率 ${mem_use_info[2]}%"  

        disk_all=$(df -h / | awk 'NR==2 {print $2}')
        disk_used=$(df -h / | awk 'NR==2 {print $3}')
        disk_free=$(df -h / | awk 'NR==2 {print $4}')
        echo "硬盘 总共有 ${disk_all}"
        echo "硬盘 使用了 ${disk_used}"
        echo "硬盘 剩余 ${disk_free}"
        
        runTime=$(who -r |awk '{print($3,$4)}')

        #网卡名
        eth=$(awk 'NR>2 {rx=$2; tx=$10; if (rx+tx > max) {max=rx+tx; interface=$1}} END {print interface}' /proc/net/dev |sed 's/.$//g')
        
        #时间间隔（频率）
        interval=5

        for i in {1..10}
        do
        in_last=$(cat /proc/net/dev | grep ${eth} | sed -e "s/\(.*\)\:\(.*\)/\2/g" | awk '{print $1 }')
        out_last=$(cat /proc/net/dev | grep ${eth} | sed -e "s/\(.*\)\:\(.*\)/\2/g" | awk '{print $9 }')
        sleep ${interval}
        in=$(cat /proc/net/dev | grep $eth | sed -e "s/\(.*\)\:\(.*\)/\2/g" | awk '{print $1 }')
        out=$(cat /proc/net/dev | grep $eth | sed -e "s/\(.*\)\:\(.*\)/\2/g" | awk '{print $9 }')
        #单位为KByte
        traffic_in=`echo ${in} ${in_last} | awk '{printf "%.0f", ($1-$2)/1024}'`
        traffic_out=`echo ${out} ${out_last} | awk '{printf "%.0f", ($1-$2)/1024}'`

        echo "总下载 ${in_last} KB"
        echo "总上传 ${out_last} KB"

        in_last=$(awk 'NR>2 {rx_sum += $2} END {printf "%.0f\n", rx_sum}' /proc/net/dev)
        out_last=$(awk 'NR>2 {rx_sum += $10} END {printf "%.0f\n", rx_sum}' /proc/net/dev)
        echo "-----"
        echo "总下载 ${in_last} KB"
        echo "总上传 ${out_last} KB"
        
        echo "下载速度 $[ (${traffic_in}/${interval})] KB/s"
        echo "上传速度 $[ (${traffic_out}/${interval})] KB/s"

        
        cpuUsed=$(vmstat |awk '{if(NR==3)print $13+$14}')
        mem_use_info=(`awk '/MemTotal/{memtotal=$2}/MemAvailable/{memavailable=$2}END{printf "%.2f %.2f %.2f",memtotal/1024/1024," "(memtotal-memavailable)/1024/1024," "(memtotal-memavailable)/memtotal*100}' /proc/meminfo`)
        

        

        curl -s -X GET "https://$(cat airAPI.info |awk '{print $1}')/api/airUpdateVps.php?apiHost=$(cat airAPI.info |awk '{print $1}')&apiToken=$(cat airAPI.info |awk '{print $2}')&lastDate=$(date +"%F %H:%M:%S")&cpu= ${cpuAll}&cpuUsed=${cpuUsed}&mem=${mem_use_info[0]}&memUsed=${mem_use_info[2]}&disk=${disk_all}&diskUsed=${disk_used}&runTime=${runTime}&upSpeed=$[ (${traffic_out}/${interval})]&downSpeed=$[ (${traffic_in}/${interval})]&upTaffic=${out_last}&downTaffic=${in_last}"

        done


}

if [[ ! -z $apiHost ]]; then
        if [[ $apiHost = "c" ]]; then
                echo '执行定时任务'
                allCrond
        elif [[ $apiHost = "un" ]]; then
                echo '卸载脚本'
                rm -f airAPI.info && rm -f airxyz.sh
                echo "已经卸载"
        else
                mb_install ${apiHost} ${apiKey}
        fi
else
        menu_server
fi

