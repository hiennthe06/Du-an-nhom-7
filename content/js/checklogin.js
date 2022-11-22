$(function (){
    $("form").validate({
        rules:{
            ma_kh:{required:true, maxlength:20},
            ho_ten:{required:true, maxlength:50},
            email:{required:true, email:true},
            mat_khau:{required:true, maxlength:20, minlength:8},
            mat_khau1:{required:true, maxlength:20, minlength:8}
        },
        messages:{
            ma_kh:{
                required:'Không thể để trống ten đăng nhập',
                maxlength:'Họ tên không vượt quá 20 ký tự'
            },
            ho_ten:{
                required:'Không thể để trống họ tên',
                maxlength:'Họ tên không vượt quá 50 ký tự'
            },
            email:{
                required:'Không để trống email nha',
                email:'Phải đúng định dạng email'
            },
            mat_khau:{
                required:'Bạn phải nhập mật khẩu',
                maxlength:'Mật khẩu không vượt quá 20 ký tự',
                minlength:'Mật khẩu không thể ngắn hơn 8 ký tự kí tự'
            },
            mat_khau1:{
                required:'Bạn phải nhập lại mật khẩu',
                maxlength:'Mật khẩu không vượt quá 20 ký tự',
                minlength:'Mật khẩu không thể ngắn hơn 8 ký tự kí tự'
            }
        }
    });
});