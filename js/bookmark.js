
$(function(){

  /* 首先将所有的dd元素隐藏 */
  $('dd').addClass('hidden');
  
  /* 当用户点击dt元素时候，和dt元素同一层次的dd元素显示，同时其它dd元素隐藏 */
  $('dl').on('click', 'dt', function(){
    //$(this)这里是dt元素的jQuery对象
    var $this = $(this);
    
    $this.next() //获取dt元素对应的dd元素
    .slideDown(300) // 使用slidedown方法显示元素
    .siblings('dd') //获取同一层次的其它dd元素
    .slideUp(300); // 使用slideUp方法隐藏元素
  });

});