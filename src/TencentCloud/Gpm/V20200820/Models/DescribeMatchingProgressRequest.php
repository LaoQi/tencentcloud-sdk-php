<?php
/*
 * Copyright (c) 2017-2018 THL A29 Limited, a Tencent company. All Rights Reserved.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *    http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */
namespace TencentCloud\Gpm\V20200820\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeMatchingProgress请求参数结构体
 *
 * @method array getMatchTicketIds() 获取请求 id 列表, 列表长度 128。
 * @method void setMatchTicketIds(array $MatchTicketIds) 设置请求 id 列表, 列表长度 128。
 */
class DescribeMatchingProgressRequest extends AbstractModel
{
    /**
     * @var array 请求 id 列表, 列表长度 128。
     */
    public $MatchTicketIds;

    /**
     * @param array $MatchTicketIds 请求 id 列表, 列表长度 128。
     */
    function __construct()
    {

    }

    /**
     * For internal only. DO NOT USE IT.
     */
    public function deserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("MatchTicketIds",$param) and $param["MatchTicketIds"] !== null) {
            $this->MatchTicketIds = [];
            foreach ($param["MatchTicketIds"] as $key => $value){
                $obj = new MTicket();
                $obj->deserialize($value);
                array_push($this->MatchTicketIds, $obj);
            }
        }
    }
}
