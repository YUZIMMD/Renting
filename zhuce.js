// JavaScript Document 
$('#submit').click(function(){
	$('#submit2').trigger('click');
	 $('#zhuce_form').parsley().on('form:submit', function() {
		 var data = $('#zhuce_form').serializeArray();
     console.log(data);
     var data1 = arrayToObj(data);
     console.log(data1);
     var data2 = JSON.stringify(data1);
     console.log(data2);
$.post('zhuce1.php',{"data":data2},function(data,status){
    if(status=='success'){
		  var res  = JSON.parse(data);
		  if(res.code==0){
		  layer.msg('注册成功！5s后跳转到登录页面，去登录吧', {icon: 1});
		  setTimeout("timeout()",5000); 
		   }else if(res.code==2){
			  layer.msg('该用户名已被注册', {icon: 5});
		  }else{
			   layer.msg('注册失败，请确认信息的完整与准确性', {icon: 5});
			   }
        }
  });
  return false;
  });
});
function arrayToObj(data) {
    var obj = {};
    for (var i = 0; i < data.length; i++) {
        obj[data[i].name] = data[i].value;
    }
    return obj;
}
function timeout(){
	 window.location.href='login.php';
	}
