<?php
/**
 * Created by PhpStorm.
 * User: xj
 * Date: 1/5/18
 * Time: 9:32 AM
 */

namespace App\IekModel\Version1_0\Constants;


class UnqualifiedPart
{
    const UNQUALIFIED_PART = [
        'border' => [
            '框型号不对',
            '框拼接角缝隙大',
            '框拼接角错开',
            '框体表面有磨损',
            '框体表面有污渍',
            '框被射钉打穿',
        ],
        'core' => [
            '画芯内容不对',
            '画芯有气泡',
            '画芯涂层有漏涂',
            '画芯整体拱起（画芯贴板变形）',
            '画芯表面有擦伤',
            '画芯表面有污渍',
        ],
        'frame' => [
            '卡纸型号不对',
            '卡纸拼接角缝隙大',
            '卡纸拼接角错开',
            '卡纸有气泡',
            '卡纸有擦伤',
            '卡纸有污渍',
        ],
        'flannel' => [
            '绒布漏贴',
            '绒布型号不对',
            '绒布粘贴不平整',
            '绒布对接有缝隙',
            '绒布超出画框边缘',
            '绒布有污渍',
            '绒布有擦伤',
        ],
        'hideHook' => [
            '暗挂漏上',
            '暗挂型号不对',
            '暗挂有污渍',
            '暗挂有损伤',
            '暗挂螺丝漏上',
            '暗挂不牢固',
            '暗挂位置不对',
        ],
        'backPart' => [
            '钢丝绳漏上',
            '钢丝绳过短',
            '锁线器损坏',
            '背板二维漏贴',
            '背板二维码贴错（画不对码）',
            '背板二维码贴反',
            '背板logo贴歪',
            '背板logo贴反',
            '背板logo漏贴',
        ],
        'hangTag' => [
            '吊牌漏挂',
            '吊牌挂错',
            '吊牌二维码漏贴',
            '吊牌二维码贴错',
            '吊牌二维码贴反',
        ]
    ];
}
