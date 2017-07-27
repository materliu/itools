<template>
    <div>
        <div class="content">
            <md-tabs>
                <md-tab id="all-tools" md-label="All Tools" md-icon="store_mall_directory">
                    <div class="phone-viewport">
                        <md-list class="custom-list md-triple-line" v-for="tool in tools" :key="tool._id" >
                            <md-list-item>
                                <md-avatar>
                                    <img :src="tool.logoURL" alt="People">
                                </md-avatar>

                                <div class="md-list-text-container">
                                    <a :href="tool.webURL"><span>{{tool.name}}</span></a>
                                    <span>{{tool.title}}</span>
                                    <p>{{tool.description}}</p>
                                </div>

                                <md-button class="md-icon-button md-list-action" @click.native="starTool(tool)">
                                    <md-icon class="md-primary" v-if="tool.stared">star</md-icon>
                                    <md-icon v-if="!tool.stared">star_border</md-icon>
                                </md-button>

                                <md-divider class="md-inset"></md-divider>
                            </md-list-item>
                        </md-list>
                    </div>
                </md-tab>

                <md-tab id="stared-tools" md-label="Starred Tools" md-icon="star" md-active="true">
                    <div class="phone-viewport">
                        <md-list class="custom-list md-triple-line" v-for="tool in staredTools" :key="tool._id" >
                            <md-list-item>
                                <md-avatar>
                                    <img :src="tool.logoURL" alt="People">
                                </md-avatar>

                                <div class="md-list-text-container">
                                    <a :href="tool.webURL"><span>{{tool.name}}</span></a>
                                    <span>{{tool.title}}</span>
                                    <p>{{tool.description}}</p>
                                </div>

                                <md-button class="md-icon-button md-list-action" @click.native="starTool(tool)">
                                    <md-icon class="md-primary">star</md-icon>
                                </md-button>

                                <md-divider class="md-inset"></md-divider>
                            </md-list-item>
                        </md-list>
                    </div>
                </md-tab>

                <md-tab id="books" md-label="Explore Tools" md-icon="explore">
                    <div>
                        探索工具功能正在规划中， 敬请期待
                    </div>
                </md-tab>
            </md-tabs>
        </div>
    </div>
</template>

<script>

    import Vue from 'vue';

    export default {
        mounted() {
            console.log('tools页面 mounted.')
        },
        created: function () {
            window.axios.get(`${this.apiPrefix}/tools`)
                .then(res => {
                    let data = res.data;

                    if (_.isEmpty(data)) {
                        // do nothing
                    } else if (data.all){

                        // 对tools和staredTools进行统一处理
                        let tools = data.all,
                            staredTools = data.stared;

                        for (let k=0,l=staredTools.length; k<l; k++) {
                            staredTools[k].stared = true;

                            for (let i=0,j=tools.length; i<j; i++) {
                                if (tools[i]._id === staredTools[k]._id) {
                                    tools[i].stared = true;
                                }
                            }
                        }

                        this.tools = tools;
                        this.staredTools = staredTools;
                    }
                })
                .catch(err => {
                    console.log('cgi error', err);
                });
        },
        data() {
            return {
                apiPrefix: window.appEnv.apiPrefix,
                tools: [],
                staredTools: []
            };
        },
        components: {
            'page-breadcrumbs': require('../components/PageBreadcrumbs.vue')
        },
        methods: {
            starTool(tool) {
                let toolID = tool._id;

                for (let i=0,j=this.staredTools.length; i<j; i++) {
                    if (toolID === this.staredTools[i]._id && tool.stared) {    // 从staredTools移除
                        this.staredTools.splice(i, 1);
                        break;
                    }
                }

                for (let i=0,j=this.tools.length; i<j; i++) {
                    if (toolID === this.tools[i]._id) {
                        tool.stared = !tool.stared;
                        Vue.set(this.tools, i, tool);

                        if (tool.stared) {    // 将其加入 staredTools
                            this.staredTools.unshift(tool);
                        }

                        break;
                    }

                }

                // 修改后端数据
                window.axios.put(`${this.apiPrefix}/tools/${toolID}`, {
                    stared: tool.stared
                });
            }
        }
    }
</script>

<style lang="scss" scoped>


    .content {
        margin-top: 10px;
        margin-left: 25px;
        margin-right: 25px;
    }


</style>
