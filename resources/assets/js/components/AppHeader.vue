<template>
    <div class="page-header">
        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">
                        <img class="logo" src="/images/logo.png" alt="Brand">
                        {{appName}}
                    </a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <!--<ul class="nav navbar-nav">-->
                        <!--<li :class="{active: startsWith($route.path, '/projects')}">-->
                            <!--<router-link to="/tools">项目配置</router-link>-->
                        <!--</li>-->
                        <!--<li class="dropdown" :class="{active: startsWith($route.path, '/goonline/list')}">-->
                            <!--<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">上线单 <span class="caret"></span></a>-->
                            <!--<ul class="dropdown-menu">-->
                                <!--<li>-->
                                    <!--<router-link to="/goonline/list/done">已发布上线单</router-link>-->
                                <!--</li>-->
                                <!--&lt;!&ndash;<li>&ndash;&gt;-->
                                    <!--&lt;!&ndash;<router-link to="/goonline/list/doing">发布中上线单</router-link>&ndash;&gt;-->
                                <!--&lt;!&ndash;</li>&ndash;&gt;-->
                                <!--<li>-->
                                    <!--<router-link to="/goonline/list/will">未发布上线单</router-link>-->
                                <!--</li>-->
                                <!--&lt;!&ndash;<li role="separator" class="divider"></li>&ndash;&gt;-->
                                <!--&lt;!&ndash;<li>&ndash;&gt;-->
                                    <!--&lt;!&ndash;<router-link to="/goonline/list/stop">中止上线单</router-link>&ndash;&gt;-->
                                <!--&lt;!&ndash;</li>&ndash;&gt;-->
                                <!--&lt;!&ndash;<li role="separator" class="divider"></li>&ndash;&gt;-->
                                <!--&lt;!&ndash;<li>&ndash;&gt;-->
                                    <!--&lt;!&ndash;<router-link to="goonline/template">上线单模板</router-link>&ndash;&gt;-->
                                <!--&lt;!&ndash;</li>&ndash;&gt;-->
                            <!--</ul>-->
                        <!--</li>-->
                    <!--</ul>-->
                    <!--<form class="navbar-form navbar-left">-->
                        <!--<div class="form-group">-->
                            <!--<input type="text" class="form-control" placeholder="全局搜索">-->
                        <!--</div>-->
                        <!--<button type="submit" class="btn btn-default">提交</button>-->
                    <!--</form>-->
                    <ul class="nav navbar-nav navbar-right">
                        <li><a :href="riskAcknowledgementsAddress">风险须知</a></li>
                        <li><a :href="userManualAddress">文档</a></li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">{{username}} <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="http://sso.df.cn">个人中心</a></li>
                                <li><a href="###" @click.prevent.stop="logout">登出</a></li>
                            </ul>
                        </li>
                    </ul>
                </div><!-- /.navbar-collapse -->
            </div><!-- /.container-fluid -->
        </nav>
    </div>
</template>

<script>
    export default {
        mounted() {
            console.log('App Header Component mounted.')
        },
        data() {
            return {
                appName: window.Laravel.appName,
                username: window.Laravel.username,
                userManualAddress: 'http://wiki.df.cn',    // 文档地址
                riskAcknowledgementsAddress: 'http://wiki.df.cn'    // 风险须知
            }
        },
        methods: {
//            startsWith: function (s, t) {
//                return window._.startsWith(s, t);
//            }
            logout: function () {
                $('#logout-form').submit();
            }
        }
//        watch: {
//            '$route': function (val, oldVal) {
//                console.log('route change', val, oldVal);
//            }
//        }
    }
</script>

<style lang="scss" scoped>
</style>
