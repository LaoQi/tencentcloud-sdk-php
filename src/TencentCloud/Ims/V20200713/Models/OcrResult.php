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
namespace TencentCloud\Ims\V20200713\Models;
use TencentCloud\Common\AbstractModel;

/**
 * OCR结果检测详情
 *
 * @method string getScene() 获取场景识别结果
 * @method void setScene(string $Scene) 设置场景识别结果
 * @method string getSuggestion() 获取建议值，Block：打击，Review：待复审，Pass：正常
 * @method void setSuggestion(string $Suggestion) 设置建议值，Block：打击，Review：待复审，Pass：正常
 * @method string getLabel() 获取恶意标签，Normal：正常，Polity：涉政，Porn：色情，Illegal：违法，Abuse：谩骂，Terror：暴恐，Ad：广告
 * @method void setLabel(string $Label) 设置恶意标签，Normal：正常，Polity：涉政，Porn：色情，Illegal：违法，Abuse：谩骂，Terror：暴恐，Ad：广告
 * @method string getSubLabel() 获取子标签检测结果
 * @method void setSubLabel(string $SubLabel) 设置子标签检测结果
 * @method integer getScore() 获取该标签模型命中的分值
 * @method void setScore(integer $Score) 设置该标签模型命中的分值
 * @method array getDetails() 获取ocr结果详情
 * @method void setDetails(array $Details) 设置ocr结果详情
 */
class OcrResult extends AbstractModel
{
    /**
     * @var string 场景识别结果
     */
    public $Scene;

    /**
     * @var string 建议值，Block：打击，Review：待复审，Pass：正常
     */
    public $Suggestion;

    /**
     * @var string 恶意标签，Normal：正常，Polity：涉政，Porn：色情，Illegal：违法，Abuse：谩骂，Terror：暴恐，Ad：广告
     */
    public $Label;

    /**
     * @var string 子标签检测结果
     */
    public $SubLabel;

    /**
     * @var integer 该标签模型命中的分值
     */
    public $Score;

    /**
     * @var array ocr结果详情
     */
    public $Details;

    /**
     * @param string $Scene 场景识别结果
     * @param string $Suggestion 建议值，Block：打击，Review：待复审，Pass：正常
     * @param string $Label 恶意标签，Normal：正常，Polity：涉政，Porn：色情，Illegal：违法，Abuse：谩骂，Terror：暴恐，Ad：广告
     * @param string $SubLabel 子标签检测结果
     * @param integer $Score 该标签模型命中的分值
     * @param array $Details ocr结果详情
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
        if (array_key_exists("Scene",$param) and $param["Scene"] !== null) {
            $this->Scene = $param["Scene"];
        }

        if (array_key_exists("Suggestion",$param) and $param["Suggestion"] !== null) {
            $this->Suggestion = $param["Suggestion"];
        }

        if (array_key_exists("Label",$param) and $param["Label"] !== null) {
            $this->Label = $param["Label"];
        }

        if (array_key_exists("SubLabel",$param) and $param["SubLabel"] !== null) {
            $this->SubLabel = $param["SubLabel"];
        }

        if (array_key_exists("Score",$param) and $param["Score"] !== null) {
            $this->Score = $param["Score"];
        }

        if (array_key_exists("Details",$param) and $param["Details"] !== null) {
            $this->Details = [];
            foreach ($param["Details"] as $key => $value){
                $obj = new OcrTextDetail();
                $obj->deserialize($value);
                array_push($this->Details, $obj);
            }
        }
    }
}
