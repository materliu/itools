<?php

use Illuminate\Database\Seeder;
use \App\Tool;

class ToolsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $tool = new Tool;
        $tool->name = '知识库';
        $tool->title = '开源的知识库建站程序';
        $tool->description = '基于github项目raneto在本地搭建，基于md文件管理，免去安装客户端 ...';
        $tool->logoURL = '/images/tool/logo/wordbank.png';
        $tool->webURL = 'http://knowledge.mater.io/';
        $tool->index = 2;
        $tool->markdownFile = '/markdown/tool/wordbank.md';    // 暂时无用
        $tool->save();

        $tool = new Tool;
        $tool->name = 'Wiki';
        $tool->title = 'Atlassian 的wiki程序';
        $tool->description = 'Atlassian 是一家澳大利亚软件企业公司，这公司的皇牌产品为专门用作追踪应用程式问题的JIRA ，还有用作协作团队的产品Confluence...';
        $tool->logoURL = '/images/tool/logo/company.png';
        $tool->webURL = 'http://i.wiki./';
        $tool->index = 1;
        $tool->markdownFile = '/markdown/tool/pdfree.md';
        $tool->save();

        $tool = new Tool;
        $tool->name = 'walle';
        $tool->title = 'walle开源部署平台';
        $tool->description = '当初研究部署平台时，在网上找到一个开源的 ...';
        $tool->logoURL = '/images/tool/logo/eventlab.png';
        $tool->webURL = 'http://walle.mater.io/';
        $tool->index = 3;
        $tool->markdownFile = '/markdown/tool/helpdf.md';
        $tool->save();

        $tool = new Tool;
        $tool->name = '鼎复官网';
        $tool->title = '鼎复官方网站本地调试';
        $tool->description = '部署目录 workspaces/dingfu/www.dingfudata.com ...';
        $tool->logoURL = '/images/tool/logo/house.png';
        $tool->webURL = 'http://dingfu.mater.io';
        $tool->index = 4;
        $tool->markdownFile = '/markdown/tool/abiao.md';
        $tool->save();

        $tool = new Tool;
        $tool->name = '鼎复用户中心';
        $tool->title = '鼎复用户中心本地调试';
        $tool->description = '部署目录 workspaces/dingfu/usercenter ...';
        $tool->logoURL = '/images/tool/logo/xuangu.png';
        $tool->webURL = 'http://uc.mater.io';
        $tool->index = 5;
        $tool->markdownFile = '/markdown/tool/aotutu.md';
        $tool->save();

        $tool = new Tool;
        $tool->name = '凹凸凸';
        $tool->title = '鼎复凹凸凸内部工具平台';
        $tool->description = '部署目录 workspaces/dingfu/category-operator ...';
        $tool->logoURL = '/images/tool/logo/aotutu.png';
        $tool->webURL = 'http://aotutu.mater.io';
        $tool->index = 6;
        $tool->markdownFile = '/markdown/tool/xuangu.md';
        $tool->save();

        $tool = new Tool;
        $tool->name = '选股平台';
        $tool->title = '鼎复概念选股内部编辑平台';
        $tool->description = '部署目录 workspaces/dingfu/select-stocks-by-concept ...';
        $tool->logoURL = '/images/tool/logo/tm.png';
        $tool->webURL = 'http://xuangu.mater.io';
        $tool->index = 7;
        $tool->markdownFile = '/markdown/tool/tm.md';
        $tool->save();

        $tool = new Tool;
        $tool->name = 'Helpdf工具平台';
        $tool->title = '鼎复内部用于明细数据抽取的工具平台';
        $tool->description = '部署目录 workspaces/dingfu/pdf-dragon ...';
        $tool->logoURL = '/images/tool/logo/helpdf.png';
        $tool->webURL = 'http://pdf.mater.io';
        $tool->index = 8;
        $tool->markdownFile = '/markdown/tool/eventlab.md';
        $tool->save();

        $tool = new Tool;
        $tool->name = 'itools';
        $tool->title = '鼎复内部的itools平台，本地部署';
        $tool->description = '部署目录 workspaces/dingfu/df-intelligent-tools ...';
        $tool->logoURL = '/images/tool/logo/schema.png';
        $tool->webURL = 'http://itools.df.mater.io';
        $tool->index = 9;
        $tool->markdownFile = '/markdown/tool/eventlab.md';
        $tool->save();

        $tool = new Tool;
        $tool->name = 'koel';
        $tool->title = 'koel本地乐库管理程序';
        $tool->description = 'github上开源项目koel的本地部署，代码非常不错，读来也是一种享受';
        $tool->logoURL = '/images/tool/logo/eye.png';
        $tool->webURL = 'http://keol.mater.io';
        $tool->index = 10;
        $tool->markdownFile = '/markdown/tool/eventlab.md';
        $tool->save();


        $tool = new Tool;
        $tool->name = 'pdfree';
        $tool->title = '鼎复PDFree产品的本地部署';
        $tool->description = 'PDFree是一款pdf在线抽取表格工具，部署目录 workspaces/dingfu/pdfree...';
        $tool->logoURL = '/images/tool/logo/pdfree.png';
        $tool->webURL = 'http://pdfree.mater.io';
        $tool->index = 11;
        $tool->markdownFile = '/markdown/tool/eventlab.md';
        $tool->save();

        $tool = new Tool;
        $tool->name = 'abiao';
        $tool->title = '鼎复abiao部署平台的本地部署';
        $tool->description = '部署目录 workspaces/dingfu/abiao...';
        $tool->logoURL = '/images/tool/logo/abiao.png';
        $tool->webURL = 'http://abiao.mater.io';
        $tool->index = 12;
        $tool->markdownFile = '/markdown/tool/eventlab.md';
        $tool->save();

        $tool = new Tool;
        $tool->name = 'efunds易方达';
        $tool->title = '鼎复易方达投研平台的本地部署';
        $tool->description = '部署目录 workspaces/dingfu/web-efunds-v1...';
        $tool->logoURL = '/images/tool/logo/face.png';
        $tool->webURL = 'http://efunds.mater.io';
        $tool->index = 13;
        $tool->markdownFile = '/markdown/tool/eventlab.md';
        $tool->save();

        $tool = new Tool;
        $tool->name = '鼎复工作平台';
        $tool->title = 'lab的本地部署';
        $tool->description = '部署目录 workspaces/dingfu/df-worksheet-laradock... 同时PC搜索 materliu.search.idingfu.cn  手机搜索 materliu.msearch.idingfu.cn';
        $tool->logoURL = '/images/tool/logo/search.png';
        $tool->webURL = 'http://materliu.lab.idingfu.cn';
        $tool->index = 14;
        $tool->markdownFile = '/markdown/tool/eventlab.md';
        $tool->save();

        $tool = new Tool;
        $tool->name = 'moviestar';
        $tool->title = '影视资源管理';
        $tool->description = '放 koel 本人开发的本地影视资源管理的web平台，还在开发中';
        $tool->logoURL = '/images/tool/logo/movie.png';
        $tool->webURL = 'http://moviestar.mater.io';
        $tool->index = 15;
        $tool->markdownFile = '/markdown/tool/eventlab.md';
        $tool->save();

        $tool = new Tool;
        $tool->name = 'test';
        $tool->title = '本地的一些测试内容';
        $tool->description = '主要用于临时测试一些内容';
        $tool->logoURL = '/images/tool/logo/test.png';
        $tool->webURL = 'http://test.mater.org';
        $tool->index = 16;
        $tool->markdownFile = '/markdown/tool/eventlab.md';
        $tool->save();
    }
}
