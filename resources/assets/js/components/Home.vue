<template>
    <div class="content">
        <div class="section">
            <div class="container">
                <div class="row">
                    <div class="intro text-center text-white">
                        <h1 class="title">区块链系列课程</h1>
                        <p class="second-title">购买年费会员更实惠</p>
                        <button class="buy btn btn-default btn-primary">¥1999/年 立即购买</button>
                        <p class="notice">本站所有视频均支持单课程购买</p>
                    </div>
                </div>
            </div>    
        </div>
        <div class="lessons">
            <div class="container">
                <div class="lessons">
                    <div class="container">
                        <h2 class="lesson-title">智能合约系列</h2>
                        <div class="row" v-for="i in Math.ceil(items.length / step)">
                            <div class="col-md-4" v-for="item in items.slice((i - 1) * step, i * step)">
                                <div class="card card-inverse card-info">
                                    <img class="card-img-top" :src="item.img">
                                    <div class="card-block">
                                        <h4 class="card-title">{{item.title}}</h4>
                                        <div class="card-text">
                                            {{item.desc}}
                                        </div>
                                    </div>
                                    <div class="card-footer">
                                        <small>共18个视频 0.5小时</small>
                                        <button class="btn btn-info pull-right btn-sm">学习</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="subscribe text-center">
            <h2>不错过每一次更新</h2>
            <h4>免费公开课、课程更新、线下活动、购买优惠</h4>
            <form action="https://www.easywechat.com/subscribers" method="post" class="form">
                <div class="input">
                    <input type="email" name="email" placeholder="输入您的邮箱">
                    <button type="submit" class="btn btn-primary btn-subscribe">订阅</button>
                    <div class="clearfix"></div>
                </div>
            </form>
        </div>
        <div class="footer white-bg">
            <div class="container">
                <div class="col-md-6 copyright">
                    <h2>第九区块链</h2>
                    <p>为区块链而生,第九区的愿景是做最好的区块链中文视频教程和学习社区, 有任何跟区块链相关的问题，都可以在这里得到解决。未来已来，与君共勉!</p>
                    <p><span>南京第九区块链科技有限公司</span><br><span>苏ICP备16025826号-3</span>
                    </p>
                </div>
                <div class="col-md-6 navs">
                    <div class="line col-md-4">
                        <h3>学习资源</h3>
                        <ul class="list">
                            <li><a href="/">视频</a>
                            </li>
                            <li><a href="/">书籍</a>
                            </li>
                            <li><a href="/">博客</a>
                            </li>
                            <li><a href="/">Github</a>
                            </li>
                        </ul>
                    </div>
                    <div class="line col-md-4">
                        <h3>关注我们</h3>
                        <ul class="list">
                            <li><a href="#">微信</a>
                            </li>
                            <li><a href="#" target="_blank">微博</a>
                            </li>
                            <li><a href="#" target="_blank">知乎</a>
                            </li>
                            <li><a href="#" target="_blank">知识星球</a>
                            </li>
                        </ul>
                    </div>
                    <div class="line col-md-4">
                        <h3>更多信息</h3>
                        <ul class="list">
                            <li><a href="#">关于我们</a>
                            </li>
                            <li><a href="#">联系我们</a>
                            </li>
                            <li><a href="#">商务合作</a>
                            </li>
                            <li><a href="#">QQ群</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        mounted() {
            console.log('Component mounted home.')
        },
        data() {
            return {
                step: 3,//每行显示几个课程
                items:[
                    {'title':'以太坊投票系统','desc':'智能合约入门经典，编写你的第一个合约代码','img':'../../images/voting-lesson.jpg'},
                    {'title':'创建自己的“加密猫”','desc':'炙手可热的加密猫游戏，你也可以打造！','img':'../../images/cryptokitties-lesson.jpg'},
                    {'title':'电子商务拍卖系统','desc':'使用区块链技术，售卖你的商品！','img':'../../images/ecommerce-lesson.jpg'},
                    {'title':'自建加密货币并用于投票系统','desc':'使用我们自己的虚拟货币用来支付投票权限。','img':'../../images/cryptocurrency-lesson.jpg'},
                    {'title':'使用 JS 打造自己的比特币区块链','desc':'自己打造一个比特币区块链并没有那么难。','img':'../../images/bitcoin-lesson.jpg'},
                ]    
            }
        }
    }
</script>
<style type="text/css">
    .section {
        background: url('../../images/banner.jpg') no-repeat center center fixed;
        -webkit-background-size: cover;
        -moz-background-size: cover;
        -o-background-size: cover;
        background-size: cover;
    }
    .title {
        margin-top: 120px;
        font-size: 48px;
        font-weight: 200;
        margin-bottom: 30px;
    }
    .second-title {
        font-size: 20px;
        font-weight: 200;
        margin-bottom: 50px;
        letter-spacing: 1px;
    }
    .buy {
        margin-bottom: 10px;
    }
    .notice {
        font-size: 12px;
        color: #ccc;
        margin-bottom: 100px;
    }
    .lessons {
        margin-bottom: 30px;
    }
    .lesson-title {
        margin-left: 15px;
        font-size: 32px;
        font-weight: 200;
        margin-bottom: 15px;
    }
    .subscribe {
        background-color: #F6F9FC;
        padding: 80px 0;
    }
    .subscribe h2 {
        font-weight: 200;
    }
    .subscribe h4 {
        margin: 30px 0;
        font-weight: 200;
    }
    .subscribe .btn-subscribe {
        float: left;
        border-left: 0;
        border-top-left-radius: 0;
        border-bottom-left-radius: 0;
    }
    .subscribe .input {
        margin: 0 auto;width: 300px
    }
    .subscribe input {
        float:left;height:36px;line-height:36px;width:245px;padding-left:10px;
    }
    .footer .line {
        float: left;

    }
    .footer .line ul {
        list-style: none;
        padding-left: 0;
    }
    .footer .line ul li {
        margin: 5px 0;
    }
    .footer .navs {
        padding-top: 35px;
    }
    .footer .copyright {
        margin: 30px 0;
    }
    .footer .copyright .h2 {
        font-size: 32px;
    }
    .footer .copyright p {
        font-size: 12px;
        color: #666;
        margin: 15px 0;
    }
</style>
