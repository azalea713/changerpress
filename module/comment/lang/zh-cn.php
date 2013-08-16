<?php
/**
 * The comment module zh-cn file of xirangEPS.
 *
 * @copyright   Copyright 2013-2013 青岛息壤网络信息有限公司 (QingDao XiRang Network Infomation Co,LTD www.xirangit.com)
 * @license     LGPL
 * @author      Chunsheng Wang <chunsheng@cnezsoft.com>
 * @package     comment
 * @version     $Id$
 * @link        http://www.xirang.biz
 */
$lang->comment->common      = '评论';
$lang->comment->id          = '编号';
$lang->comment->author      = '称呼';
$lang->comment->content     = '评论';
$lang->comment->email       = '邮箱';
$lang->comment->list        = '评论列表';
$lang->comment->post        = '发表评论';
$lang->comment->viewArticle = '正文';
$lang->comment->viewComment = '评论';
$lang->comment->thanks      = '感谢您的评论！';

$lang->comment->pass          = '通过';
$lang->comment->reply         = '回复';
$lang->comment->manage        = '评论管理';
$lang->comment->delete        = '删除';
$lang->comment->passPre       = '通过之前';
$lang->comment->captcha       = '验证码';
$lang->comment->deletePre     = '删除之前';
$lang->comment->commentTo     = '发表于';
$lang->comment->deletedObject = '已删除项目';

$lang->comment->confirmDeleteSingle = '您确定要删除该评论吗？';
$lang->comment->confirmDeletePre    = '您确定要删除之前的评论吗？';
$lang->comment->confirmPassSingle   = '您确定要通过该评论吗？';
$lang->comment->confirmPassPre      = '您确定要通过之前的评论吗？';

$lang->comment->statusList[0] = '未审核';
$lang->comment->statusList[1] = '已审核';

$lang->captcha = new stdclass();
$lang->captcha->numbers = array('零', '一', '二', '三', '四', '五', '六', '七', '八', '九', '十');
$lang->captcha->actions = array('*' => '乘', '-' => '减', '+' => '加');
$lang->captcha->equal       = '=';
$lang->captcha->notice      = '（填数字）';
