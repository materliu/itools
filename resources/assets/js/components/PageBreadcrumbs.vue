<template>
    <ol class="breadcrumb">
        <li><router-link to="/">首页</router-link></li>
        <template v-for="(breadcrumb, index) in breadcrumbs">
            <li v-for="(breadcrumb_s, index_s) in breadcrumb.meta.breadcrumb" :class="{active: (index === breadcrumbs.length-1 && index_s === breadcrumb.meta.breadcrumb.length - 1)}"><router-link :to="breadcrumb_s.href" v-if="(!(index === breadcrumbs.length-1 && index_s === breadcrumb.meta.breadcrumb.length - 1)) || ($route.params.type)">{{breadcrumb_s.name}}</router-link><template v-if="((index === breadcrumbs.length-1 && index_s === breadcrumb.meta.breadcrumb.length - 1)) && (!($route.params.type))">{{breadcrumb_s.name}}</template></li>
        </template>
        <template v-if="$route.params.type">
            <li>
                {{routerParamMap[$route.params.type]}}
            </li>
        </template>
    </ol>
</template>

<script>
    export default {
        mounted() {
            console.log('Page Breadcrumbs Component mounted.');
        },
        data() {
            return {
                breadcrumbs: this.$breadcrumbs,
                routerParamMap: {
                    'done': '已发布',
                    'doing': '发布中',
                    'will': '未发布',
                    'stop': '已中止'
                }
            }
        }
    }
</script>

<style lang="scss" scoped>
    .breadcrumb {
        margin-bottom: 0;
    }
</style>
