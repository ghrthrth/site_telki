// jQuery(document).ready(function($){
//     if (/Android|webOS|iPhone|iPad|iPod|BlackBerry|BB|PlayBook|IEMobile|Windows Phone|Kindle|Silk|Opera Mini/i.test(navigator.userAgent)) {
//         $('.palka').hide();
//     }else{ $('.navbar').addClass('nav-height'); }
//     setTimeout(function() {check();},1500);
    
  
// });
// header
if (!/Android|webOS|iPhone|iPad|iPod|BlackBerry|BB|PlayBook|IEMobile|Windows Phone|Kindle|Silk|Opera Mini/i.test(navigator.userAgent)) {
$(window).scroll(function (event) {
		var y = $(this).scrollTop();
		if ($(this).scrollTop() > 72 ) {
		        $('body').addClass('fixed-body');
		        $('.navbar').removeClass('nav-height');
			    $('.navbar').addClass('is-scrolling');
			  
		} else {
			 $('.navbar').addClass('nav-height');
			$('.navbar').removeClass('is-scrolling');
			$('body').css('margin-top', '-68px');
			$('body').removeClass('fixed-body');
			$('body').css('margin-top', '0px');
		    
		}
	});
}
$( document ).ready(function() {
    toastr.options = {
        "closeButton": true,
        "debug": false,
        "newestOnTop": true,
        "progressBar": true,
        "rtl": false,
        "positionClass": "toast-top-right",
        "preventDuplicates": false,
        "onclick": null,
        "showDuration": 300,
        "hideDuration": 1000,
        "timeOut": 2000,
        "extendedTimeOut": 1000,
        "showEasing": "swing",
        "hideEasing": "linear",
        "showMethod": "fadeIn",
        "hideMethod": "fadeOut"
    }	
});

function check() {
    setTimeout(function() {
    if($("#tovars").find('tr').length < 1)
{
    
    $("#tovars").fadeIn(400).append(`<tr>
      <td colspan="7" id="error">Вы не добавили ниодной статьи.. </td>
      
    </tr>`);
}
}, 370);
// purchases

}


function view(tovar) {
$.ajax({
                                                                                type: 'POST',
                                                                                url: '../action.php',
beforeSend: function() {
											
										
										},	
                                                                                data: {
                                                                                    type: "selectTovar",
                                                                                    id: tovar
                                                                                    
                                                                                    
                                                                                },
                                        success: function(data) {
                                            var obj = jQuery.parseJSON(data);
                                           if(obj.success == "fatal") {
                toastr["error"]("<b>Ошибка!</b><br>"+obj.error);

                                           }
                                            if (obj.success == "success") {
$('#prev-1').attr('src', obj.image);
$('#prev-2').attr('src', obj.image2);
$('#prev-3').attr('src', obj.image3);
$('#sel_name').html(obj.name);
$('#sel_desc').html(obj.desc);
$('#confirm').attr('data-id', obj.id);
                                            }else{}
                                        }
                                    });    
}
function save_edit() {
    $.ajax({
                                                                                type: 'POST',
                                                                                url: '../action.php',
beforeSend: function() {
											
										
										},	
                                                                                data: {
                                                                                    type: "saveTovar",
                                                                                    id: $('#save_btn').attr('data-save'),
                                                                                    new_name: $('#edit_name').val(),
                                                                                
                                                                                    new_desc: $('#edit_desc').val()
                                                                                    
                                                                                    
                                                                                    
                                                                                },
                                        success: function(data) {
                                            var obj = jQuery.parseJSON(data);
                                           if(obj.success == "fatal") {
                toastr["error"]("<b>Ошибка!</b><br>"+obj.error);

                                           }
                                            if (obj.success == "success") {
toastr["success"]("<b>Успех!</b><br> Изменения сохранены");
                                            }else{}
                                        }
                                    });    
}
function edit(that) {
var id = $(that).attr('data-edit');

$.ajax({
                                                                                type: 'POST',
                                                                                url: '../action.php',
beforeSend: function() {
											
										
										},	
                                                                                data: {
                                                                                    type: "editTovar",
                                                                                    id_edit: id
                                                                                    
                                                                                    
                                                                                },
                                        success: function(data) {
                                            var obj = jQuery.parseJSON(data);
                                           if(obj.success == "fatal") {
                toastr["error"]("<b>Ошибка!</b><br>"+obj.error);

                                           }
                                            if (obj.success == "success") {
                                                
$('#edit_name').val(obj.name);
$('#edit_desc').val(obj.desc);
$('#save_btn').attr('data-save', obj.id);
                                            }else{}
                                        }
                                    });    
}
function del(that) {
var id = $(that).attr('data-id');

$.ajax({
                                                                                type: 'POST',
                                                                                url: '../action.php',
beforeSend: function() {
											
										
										},	
                                                                                data: {
                                                                                    type: "delTovar",
                                                                                    id_del: id
                                                                                    
                                                                                    
                                                                                },
                                        success: function(data) {
                                            var obj = jQuery.parseJSON(data);
                                           if(obj.success == "fatal") {
                toastr["error"]("<b>Ошибка!</b><br>"+obj.error);

                                           }
                                            if (obj.success == "success") {
$('button').prop('disabled', true);
$('#product'+id).fadeOut(270);
setTimeout(function() {$('#product'+id).remove();}, 270);
setTimeout(function() {
$('button').prop('disabled', false);
}, 570);                                            
toastr["success"]("<b>Успех!</b><br>Статья удалена");
check();
                	
                                            }else{}
                                        }
                                    });    
}
function add() {
    $.ajax({
                                                                                type: 'POST',
                                                                                url: '../action.php',
beforeSend: function() {
											
										
										},	
                                                                                data: {
                                                                                    type: "addTovar",
                                                                                    name: $('#tovar_name').val(),
                                                                                
                                                                                    desc: $('#tovar_desc').val(),
                                                                                    link: $('#tovar_img').val(),
                                                                                    link2: $('#tovar_img2').val(),
                                                                                    link3: $('#tovar_img3').val()
                                                                                    
                                                                                    
                                                                                },
                                        success: function(data) {
                               console.log(data);
                                            var obj = jQuery.parseJSON(data);
                                           if(obj.success == "fatal") {
                toastr["error"]("<b>Ошибка!</b><br>"+JSON.stringify(obj.error));

                                           }
                                            if (obj.success == "success") {
                                               
                $('#close_add').click();
                if($("#tovars").find('#error').length == 1)
{
               $("#tovars").html('');
}
                toastr["success"]("<b>Успех!</b><br>Статья добавлена");
                $('input').val('');
	            $("#tovars").append(`<tr id="product`+obj.id+`">
      <th scope="row">`+obj.id+`</th>
      <td>`+obj.name+`</td>
      <td style="white-space: nowrap;">`+obj.desc+`</td>
      <td><button data-id="`+obj.id+`" onclick="del(this)" class="btn btn-danger " style="display:inline-block; width:49%;float:left;"><i class="fa fa-times"></i></button>
      <button data-edit="`+obj.id+`" onclick="edit(this)" class="btn btn-primary " style="display:inline-block; width:49%;float:right;" data-toggle="modal" data-target="#edit"><i class="fa fa-edit"></i></button></td>
    </tr>`);                               
                	
                                            }else{

											
												
											}
                                        }
                                    });
}