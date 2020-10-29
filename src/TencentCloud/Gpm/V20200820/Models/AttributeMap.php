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
 * 玩家属性字典类型值
 *
 * @method string getKey() 获取属性字典 key
 * @method void setKey(string $Key) 设置属性字典 key
 * @method integer getValue() 获取属性字典 value
 * @method void setValue(integer $Value) 设置属性字典 value
 */
class AttributeMap extends AbstractModel
{
    /**
     * @var string 属性字典 key
     */
    public $Key;

    /**
     * @var integer 属性字典 value
     */
    public $Value;

    /**
     * @param string $Key 属性字典 key
     * @param integer $Value 属性字典 value
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
        if (array_key_exists("Key",$param) and $param["Key"] !== null) {
            $this->Key = $param["Key"];
        }

        if (array_key_exists("Value",$param) and $param["Value"] !== null) {
            $this->Value = $param["Value"];
        }
    }
}
