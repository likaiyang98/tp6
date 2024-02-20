<?php
namespace app\controller;

// 加上这句，解决Apidoc注解报错
use hg\apidoc\annotation as Apidoc;
// 通过use自定义解释文件，解决下面@abc的错误
// use app\utils\Abc;

/**
 * @Apidoc\Title("基础示例")
 */
class Text
{
    /**
     * @Apidoc\Title("引入通用注释")
     */
    public function test(){
       return json([
        "code" => 200,
        "message" => "success",
        "data" => [
            "name" => "Apidoc",
            "desc" => "Apidoc是基于ThinkPHP6开发的接口文档生成器，无需写注释，自动读取注释生成接口文档。"
        ]
        ]);
    }
}
