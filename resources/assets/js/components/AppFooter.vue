<template>
    <div class="page-footer">
        <div class="site-footer" role="contentinfo">
            <ul class="site-footer-links pull-right">
                <li><a href="http://www.dingfudata.com">联系鼎复</a></li>
                <li><a href="http://wiki.idingfu.cn">Wiki</a></li>
                <li><a href="http://nav.df.cn">导航</a></li>
                <li><a href="http://lab.dingfudata.com">工作平台</a></li>
                <li><a href="http://a.dingfudata.com">鼎复搜索</a></li>
                <li><a href="http://pdf.dingfudata.com">PDF解析</a></li>
            </ul>

            <a href="http://itools.df.cn" aria-label="Homepage" class="site-footer-mark" title="鼎复部署平台">
                <img src="/images/logo.png" alt="logo" class="logo">
            </a>

            <ul class="site-footer-links pull-left">
                <li>© 2017 <span title="">鼎复数据</span>, Inc.</li>
                <li><a href="">Terms</a></li>
                <li><a href="">Privacy</a></li>
                <li><a href="">Security</a></li>
                <li><a href="">Status</a></li>
                <li><a href="">Help</a></li>
            </ul>
        </div>
    </div>
</template>

<script>
    export default {
        mounted() {
            console.log('App Footer Component mounted.')
        },
        data() {
            return {
            }
        }
    }
</script>

<style lang="scss" scoped>
    .page-footer {
        min-width: 1086px;
        height: 120px;
        margin: 50px 28px 0;
        padding: 44px 0 0 0;
        overflow: hidden;

        border-top: 1px solid #ccc;

        ul {
            list-style: none;

            li {
                display: inline-block;
                margin-right: 20px;
            }
        }

        .site-footer-links {
            padding: 0;

            li:last-child {
                margin-right: 0;
            }
        }

        .site-footer {
            text-align: center;
        }
    }

    .logo {
        display: inline-block;
        width: 32px;
        height: 28px;

        position: relative;
        top: -6px;
    }

</style>
