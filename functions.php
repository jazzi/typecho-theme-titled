/**
* 主题配置函数
*/
function themeConfig($form)
{
   $notice = new Typecho_Widget_Helper_Form_Element_Textarea('notice', NULL, NULL, _t('公告'), _t('简单公告'));
   $form->addInput($notice);
}
