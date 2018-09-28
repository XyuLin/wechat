<?php

/**
 * 计算几分钟前、几小时前、几天前、几月前、几年前。
 *
 * @param $agoTime
 *
 * @return string
 */
function time_ago($agoTime)
{
    $agoTime = (int)$agoTime;

    // 计算出当前日期时间到之前的日期时间的毫秒数，以便进行下一步的计算
    $time = time() - $agoTime;

    if ($time >= 31104000) { // N年前
        $num = (int)($time / 31104000);
        return $num . '年前';
    }
    if ($time >= 2592000) { // N月前
        $num = (int)($time / 2592000);
        return $num . '月前';
    }
    if ($time >= 86400) { // N天前
        $num = (int)($time / 86400);
        return $num . '天前';
    }
    if ($time >= 3600) { // N小时前
        $num = (int)($time / 3600);
        return $num . '小时前';
    }
    if ($time > 60) { // N分钟前
        $num = (int)($time / 60);
        return $num . '分钟前';
    }
    return '1分钟前';
}

function pickIds($array)
{
    $ids = [];
    foreach($array as $item => $value) {
        $ids[$item] = $value['id'];
    }

    return $ids;
}