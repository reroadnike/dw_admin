        //推送
        function push(nid){
            var h="";
            $.post(push_list_url,{
                pid:0,
            },function(res){

                h+='<div class="am-form-group">'
                h+='<label for="user-phone" class="am-u-sm-12 am-form-label" style="margin-top: 10px;">推送位置></label>'
                h+='<div class="am-u-sm-12">'
                h+='<select style="color:#000" name="author" class="am-btn-lg am-u-sm-offset-2 am-u-sm-8" onchange="push_list(this,'+nid+')" data-am-selected="{btnWidth: "50%", btnSize: "sm", maxHeight: 200, searchBox: 1}" style="display: block;">'
                h+='<option value="0">选择推送模块</option>'
                $(res).each(function(i,v){
                     h+='<option value="'+v.id+'">'+v.push_name+'</option>'
                })                                                    
                h+='</select>'
                h+='<div id="cont" class="content am-btn-lg am-u-sm-12"></div></div>'
                h+='</div>'
                

                layer.open({
                   type: 1,
                   skin: 'layui-layer-demo', //样式类名
                   closeBtn: 0, //不显示关闭按钮
                   anim: 2,
                   shadeClose: true, //开启遮罩关闭
                   area: ['800px', '600px'],
                   content:h
                 });
                 
                 
            }) 
                  

               
        }

        function push_list(obj,nid){
            var pid = $(obj).val();
            var h ="";
            $.post(push_list_url,{
                pid:pid,
            },function(res){
                    h+="<div class='content am-btn-lg am-u-sm-offset-2 am-u-sm-8' style='padding-bottom: 10px;padding-top: 10px'>"
                $(res).each(function(i,v){
                    h+='<label class="am-u-sm-6" style="height: 29px;"><span class="tpl-switch" style="display: inline-block;vertical-align: text-bottom;margin-right: 10px;"><input type="checkbox" value="'+v.id+'" name="chosepush" class="ios-switch bigswitch tpl-switch-btn"><div class="tpl-switch-btn-view"><div></div></div></span>'+v.push_name+'</label>'
                    if(v.num>=v.count){
                        h+='<label class="am-u-sm-6"><button type="button" onclick="del_push('+v.id+')" class="am-btn-sm am-btn-danger am-radius tpl-btn-bg-color-success ">删除一个</button></label>'
                    }else {
                        h+='<label class="am-u-sm-6"><button type="button" onclick="del_push('+v.id+')" class="am-btn-sm" disabled="disabled" style="visibility:hidden">null</button></label>'
                    }
                })
                    h+="</div>"
                    h+='<button type="button" onclick="add_push(this,'+nid+')" class="am-btn am-btn-success tpl-btn-bg-color-success am-u-sm-offset-2 am-u-sm-8" style="float: initial;margin-bottom: 20px">推送</button>'
                    h+='<button type="button" onclick="over_push()" class="am-btn am-btn-primary tpl-btn-bg-color-success am-u-sm-offset-2 am-u-sm-8" style="float: initial;margin-bottom: 20px">完成</button>'
                $(obj).next('#cont').html(h)
            })
        }
        var del_layer=''
        function del_push(id){
            var h2 ='';
            $.post(push_data_url,{
                id:id
            },function(res){
                console.log(res)
                h2+='<ul>'
                $(res).each(function(i,v){
                     h2+='<li>'+v.title+'</br><button onclick="del_con(1,'+v.id+','+id+',this)">删除</buttion></li>'
                })
                    h2+='<button type="button" onclick="close_del()" class="am-btn am-btn-primary tpl-btn-bg-color-success ">完成</button>'  
                h2+='</ul>'

              del_layer=layer.open({
                   type: 1,
                   skin: 'layui-layer-demo', //样式类名
                   closeBtn: 0, //不显示关闭按钮
                   anim: 2,
                   shadeClose: true, //开启遮罩关闭
                   area: ['500px', '400px'],
                   content:h2
                 });

            })
        }
        //删除该
        function del_con(val,id,pid,obj){
            //val  1:新闻   2：视频
            $.post(push_del_con,{
                id:id,
                val:val,
                pid:pid,
            },function(res){
                if(res.err==0){
                    layer.msg(res.msg,{time:500},function(){
                        console.log($(obj))
                        $(obj).parent('li').hide();
                    })
                    
                }else{
                     layer.msg(res.msg,{time:500})
                }
            })
        }

        function add_push(obj,nid){
            var push_id = new Array();
            var che = $(obj).prev('.content').find('input:checked');
            // console.log(che)
            $(che).each(function(i,v){
                var pid = $(v).val();
                push_id.push(pid);
            })
            //发送推送请求
            $.post(push_ajax_push,{
                push_id:push_id,
                nid:nid
            },function(res){
                if(res.err==0){
                    layer.msg(res.msg,{time:500})
                }
            })
        }

        //完成推送
        function over_push(){
            layer.closeAll();
            location.href=news_index_url;
        }

        function close_del(){
            layer.close(del_layer);
        }