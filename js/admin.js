/**
 * Created by andy on 2016/6/6.
 */

//dom 加载完成后执行的js
$(function(){
    //单选删除
    $('td .confirm').click(function(){
        var url = $(this).attr('href');
        layer.confirm('确认要执行删除操作吗？',function(){
            $.ajax({
                type: "GET",
                url: url,
                success: function(message){
                    layer.msg(message,{stime:2000},function(){
                        window.location.reload();
                    });
                }
            });
        });
        return false;
    });

    //点击选择全部
    $(".check-all").click(function(){
        $(".ids").prop("checked", this.checked);
    });
    //选择多个
    $(".ids").click(function(){
        var option = $(".ids");
        option.each(function(i){
            if(!this.checked){
                $(".check-all").prop("checked", false);
                return false;
            }else{
                $(".check-all").prop("checked", true);
            }
        });
    });

    //全选删除
    $('.delete-all').click(function(){
        var ids=document.getElementsByName('ids'); 
        var tag="";
        var url = $(this).attr('url');
        if(ids.length != 0){
             for(var i=0; i<ids.length; i++){ 
             if(ids[i].checked) tag+=ids[i].value+'&';  
            } 
             layer.confirm('确认要执行删除操作吗？',function(){
          $.post(url, {data:tag},function(data) {
            if(data==0){
            layer.msg("请先删除所选项中的中级分类!",{time:1000});
            setTimeout("window.location.reload()","1000");
        }   
        else{
            layer.msg(data,{time:1000});
            setTimeout("window.location.reload()","1000");
        }
          })
        });
            
            return false;
        }
        else
        {layer.msg("删除内容不能为空！",{time:1000});}
   
        return false;
    });





});
