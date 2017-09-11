### 一些工作上会用到的前端效果

* addInput.html --- 动态添加一行输入框
* show.html --- 点击后实现展开缩放效果
* alert.html --- 弹出后自动消失的消息提示框
* AjaxSelect --- 基于Ajax实现动态加载下拉选择框
>1. select.html使用了bootstrap前端框架。select2.html使用了Layui前端框架。
>2. 主要区别是Layui在每次动态加载完成后都要再次渲染页面。实现方法：<code>form.render()</code>
>3. 新增layer.html，实现弹窗后动态加载。