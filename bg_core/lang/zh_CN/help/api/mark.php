<?php
return "<a name=\"list\"></a>
    <h3>标记列表</h3>
    <p class=\"text-info\">接口说明</p>
    <p>用于显示网站内所有的标记。</p>

    <p class=\"text-info\">URL</p>
    <p><span class=\"text-primary\">http://www.domain.com/bg_api/api.php?mod=mark</span></p>

    <p class=\"text-info\">HTTP 请求方式</p>
    <p>GET</p>

    <p class=\"text-info\">返回格式</p>
    <p>JSON</p>

    <div class=\"panel panel-default\">
        <div class=\"panel-heading\">接口参数</div>
        <div class=\"table-responsive\">
            <table class=\"table\">
                <thead>
                    <tr>
                        <th class=\"text-nowrap\">名称</th>
                        <th class=\"text-nowrap\">类型</th>
                        <th class=\"text-nowrap\">必须</th>
                        <th>具体描述</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class=\"text-nowrap\">act_get</td>
                        <td class=\"text-nowrap\">string</td>
                        <td class=\"text-nowrap\">true</td>
                        <td>接口调用动作，值只能为 list。</td>
                    </tr>
                    <tr>
                        <td class=\"text-nowrap\">app_id</td>
                        <td class=\"text-nowrap\">int</td>
                        <td class=\"text-nowrap\">true</td>
                        <td>应用的 APP ID，后台创建应用时生成的 ID。详情查看 <a href=\"{BG_URL_HELP}ctl.php?mod=admin&act_get=app#show\">查看应用</a>。</td>
                    </tr>
                    <tr>
                        <td class=\"text-nowrap\">app_key</td>
                        <td class=\"text-nowrap\">string</td>
                        <td class=\"text-nowrap\">true</td>
                        <td>应用的 APP KEY，后台创建应用时生成的 KEY。详情查看 <a href=\"{BG_URL_HELP}ctl.php?mod=admin&act_get=app#show\">查看应用</a>。</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    <p>&nbsp;</p>

    <a name=\"result\"></a>
    <h4>返回结果</h4>
    <div class=\"panel panel-default\">
        <div class=\"table-responsive\">
            <table class=\"table\">
                <thead>
                    <tr>
                        <th class=\"text-nowrap\">名称</th>
                        <th class=\"text-nowrap\">类型</th>
                        <th class=\"text-nowrap\">说明</th>
                        <th>备注</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class=\"text-nowrap\">mark_id</td>
                        <td class=\"text-nowrap\">int</td>
                        <td class=\"text-nowrap\">标记 ID</td>
                        <td> </td>
                    </tr>
                    <tr>
                        <td class=\"text-nowrap\">mark_name</td>
                        <td class=\"text-nowrap\">string</td>
                        <td class=\"text-nowrap\">标记名称</td>
                        <td> </td>
                    </tr>
                    <tr>
                        <td class=\"text-nowrap\">alert</td>
                        <td class=\"text-nowrap\">string</td>
                        <td class=\"text-nowrap\">返回代码</td>
                        <td>显示当前标记的状态，详情请查看 <a href=\"{BG_URL_HELP}ctl.php?mod=api&act_get=alert\" target=\"_blank\">返回代码</a>。</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    <p>&nbsp;</p>

    <h4>返回结果示例</h4>
    <p>
<pre><code class=\"language-javascript\">[
    {
        &quot;mark_id&quot;: &quot;3&quot;, //标记 ID
        &quot;mark_name&quot;: &quot;推荐&quot; //名称
    },
    {
        &quot;mark_id&quot;: &quot;4&quot;, //标记 ID
        &quot;mark_name&quot;: &quot;推荐到首页&quot; //名称
    }
]</code></pre>
    </p>";
