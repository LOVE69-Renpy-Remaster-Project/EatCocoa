<!DOCTYPE html>
<html lang="zh">

<head>
    <title>EatCocoa-LOVEPOTION SIXTYNINE</title>
    <meta itemprop="name" content="EatCocoa" />
    <meta itemprop="description" content="EatCocoa-LOVEPOTION SIXTYNINE小游戏" />
    <meta charset="utf-8" />
    <meta name="viewport" content="initial-scale=1, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0, width=device-width,target-densitydpi=device-dpi" />
    <meta http-equiv="Expires" content="0">
    <meta http-equiv="Pragma" content="no-cache">
    <meta http-equiv="Cache-control" content="no-cache">
    <meta http-equiv="Cache" content="no-cache">
    <link href="./static/index.css" rel="stylesheet" type="text/css">
    <link rel="icon" href="./favicon.ico"/>
    <script src="https://pv.sohu.com/cityjson?ie=utf-8"></script>
    <script src="https://code.createjs.com/1.0.0/createjs.min.js"></script>
    <script src="https://passport.cnblogs.com/scripts/jsencrypt.min.js"></script>
    <link href="https://cdn.staticfile.org/twitter-bootstrap/5.1.1/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.staticfile.org/twitter-bootstrap/5.1.1/js/bootstrap.bundle.min.js"></script>
	<?php
    session_start();
    $str = substr(str_shuffle('ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz1234567890'), 0, 8);
    $_SESSION['t'] = $str;
    echo "<script>var tj='" . $str . "'</script>";
    ?>
</head>

<body onLoad="init()" oncontextmenu=self.event.returnValue=false>
    <div id="GameScoreLayer" class="BBOX SHADE bgc1" style="display:none;">
        <div style="padding:5%;margin-top: 200px;background-color: rgba(125, 181, 216, 0.3);">
            <div id="GameScoreLayer-text"></div>
            <div id="GameScoreLayer-score" style="margin:10px 0;">得分</div>
            <div id="GameScoreLayer-bast">最佳</div>
            <button type="button" class="btn btn-secondary btn-lg" onclick="replayBtn()">重来</button>
			<button type="button" class="btn btn-secondary btn-lg" onclick="goRank();">排行</button>
            <button type="button" class="btn btn-secondary btn-lg" onclick="window.location.href='https://github.com/arcxingye/EatKano'">开源（原始版本）</button>
        </div>
    </div>
    </div>
    <div id="welcome" class="SHADE BOX-M">
        <div class="welcome-bg FILL"></div>
        <div class="FILL BOX-M" style="position:absolute;top:0;left:0;right:0;bottom:0;z-index:5;">
            <div style="margin:0 8% 0 9%;">
                <div style="font-size:2.6em; color:#ffc9be;">EatCocoa</div><br />
                <div id="desc" style="display: block;font-size:2.2em; color:#ffc9be; line-height:1.5em;">
                    从最底下开始<br />
                    抢走心爱酱的奶糖苹果<br />
                </div>
                <br />
                <div id="btn_group" style="display: block;">
                    <div class="dropdown">
                        <a class="btn btn-primary btn-lg dropdown-toggle" href="javascript: void(0);" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">点击开始</a>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                            <li><a class="dropdown-item btn-lg" onclick="readyBtn(MODE_NORMAL)">计时模式</a></li>
                            <li><a class="dropdown-item btn-lg" onclick="readyBtn(MODE_ENDLESS)">无尽模式</a></li>
                            <li><a class="dropdown-item btn-lg" onclick="readyBtn(MODE_PRACTICE)">练习模式</a></li>
                        </ul>
                    </div>
                    <br/>
                    <a class="btn btn-secondary btn-lg" onclick="show_setting()">游戏设置</a>
                </div>
                <div id="setting" style="display: none;">
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1">按键</span>
                        </div>
                        <input type="text" id="keyboard" class="form-control" maxlength=4 placeholder="默认为DFJK">
                    </div>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1">名字</span>
                        </div>
                        <input type="text" id="username" class="form-control" maxlength=8 placeholder="用于纪录排行(特殊字符会被过滤)">
                    </div>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1">留言</span>
                        </div>
                        <input type="text" id="message" class="form-control" maxlength=50 placeholder="说点儿啥子">
                    </div>
                    <button type="button" class="btn btn-secondary btn-lg" onclick="show_btn();save_cookie();">完成</button>
                </div>
            </div>
        </div>
    </div>

    <script src="./static/index.js?ver=1.01"></script>
</body>

</html>