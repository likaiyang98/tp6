<?php

namespace app\controller;

// 加上这句，解决Apidoc注解报错
use hg\apidoc\annotation as Apidoc;
// 通过use自定义解释文件，解决下面@abc的错误
// use app\utils\Abc;

/**
 * @Apidoc\Title("基础示例")
 */
class Index
{
    /**
     * @Apidoc\Title("引入通用注释")
     * @Apidoc\Method("POST")
     * @Apidoc\Param("number",type="int",mock="@integer(10, 100)")
     * @Apidoc\Param("boolean",type="boolean",mock="@boolean")
     * @Apidoc\Param("date",type="date",mock="@date")
     * @Apidoc\Param("time",type="time",mock="@time('H:m')")
     * @Apidoc\Param("time",type="datetime",mock="@datetime('yyyy-MM-dd HH:mm:ss')")
     * @Apidoc\Param("string",type="string",mock="@string")
     * @Apidoc\Param("name",type="string",mock="@cname")
     * @Apidoc\Param("text",type="string",mock="@cparagraph")
     * @Apidoc\Param("image",type="string",mock="@image('200x100')")
     * @Apidoc\Param("color",type="string",mock="@color")
     * @Apidoc\Param("phone",type="string",mock="@phone")
     */
    public function test()
    {
        return 'hello，world！';
    }
}
