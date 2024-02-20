<?php

declare(strict_types=1);

namespace app\middleware;

class CheckToken
{
    /**
     * 处理请求
     *
     * @param \think\Request $request
     * @param \Closure       $next
     * @return Response
     */
    public function handle($request, \Closure $next)
    {
        // 请求方法白名单 白名单中方法不校验token
        $request_url = ['login'];
        $action = request()->action();
        if (!in_array($action, $request_url)) {
            // 获取token
            $token = $request->header('Authorization');
            // 验证是否存在token
            if (empty($token)) {
                return json(['msg' => 'token为空', 'code' => '401']);
            } else {
                // JWT进行校验token
                $res = checkToken($token);
                // token是否正确
                if ($res['code'] != 1) {
                    return json(['msg' => $res['msg'], 'code' => '401']);
                }
            }
        }
        return $next($request); //返回请求数据本身
    }
}
